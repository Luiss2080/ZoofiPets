<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Venta;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\DetalleVenta;
use Illuminate\Support\Facades\DB;
use App\Models\Empleado;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::with(['cliente', 'empleado'])->orderBy('created_at', 'desc')->paginate(10);
        return view('vendedor.ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource (POS).
     */
    public function create()
    {
        $productos = Producto::where('activo', true)->where('stock_actual', '>', 0)->get();
        $clientes = Cliente::where('activo', true)->orderBy('nombre')->get();
        return view('vendedor.ventas.create', compact('productos', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'nullable|exists:clientes,id',
            'empleado_id' => 'required|exists:empleados,id', // Should come from auth user in real app
            'productos' => 'required|array|min:1',
            'productos.*.id' => 'required|exists:productos,id',
            'productos.*.cantidad' => 'required|integer|min:1',
            'metodo_pago' => 'required|in:Efectivo,Tarjeta,Transferencia',
        ]);

        try {
            DB::beginTransaction();

            // Calcular totales
            $subtotal = 0;
            $detallesParaGuardar = [];

            foreach ($validated['productos'] as $prodInput) {
                $producto = Producto::lockForUpdate()->find($prodInput['id']);
                
                if ($producto->stock_actual < $prodInput['cantidad']) {
                    throw new \Exception("Stock insuficiente para el producto: {$producto->nombre}");
                }

                $precio = $producto->precio_venta;
                $cantidad = $prodInput['cantidad'];
                $itemSubtotal = $precio * $cantidad;

                $subtotal += $itemSubtotal;

                // Descontar stock
                $producto->decrement('stock_actual', $cantidad);

                $detallesParaGuardar[] = [
                    'producto_id' => $producto->id,
                    'cantidad' => $cantidad,
                    'precio_unitario' => $precio,
                    'subtotal' => $itemSubtotal,
                    'descripcion' => $producto->nombre
                ];
            }

            $impuesto = $subtotal * 0.16; // Ejemplo IVA
            $total = $subtotal + $impuesto;

            // Crear Venta
            $venta = Venta::create([
                'numero_factura' => 'FAC-' . strtoupper(uniqid()),
                'cliente_id' => $validated['cliente_id'],
                'empleado_id' => $validated['empleado_id'],
                'fecha_venta' => now(),
                'subtotal' => $subtotal,
                'impuesto' => $impuesto,
                'total' => $total,
                'estado' => 'Pagada',
                'metodo_pago' => $validated['metodo_pago']
            ]);

            // Crear Detalles
            foreach ($detallesParaGuardar as $detalle) {
                $venta->detalles()->create($detalle);
            }

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Venta realizada con éxito', 'venta_id' => $venta->id]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Error al procesar venta: ' . $e->getMessage()], 422);
        }
    }

    public function show(string $id)
    {
        $venta = Venta::with(['detalles.producto', 'cliente', 'empleado'])->findOrFail($id);
        return view('vendedor.ventas.show', compact('venta'));
    }

    public function edit(string $id) { /* No editable usually */ }
    public function update(Request $request, string $id) { /* No editable usually */ }
    public function destroy(string $id) { /* Cancel Logic */ }
}
