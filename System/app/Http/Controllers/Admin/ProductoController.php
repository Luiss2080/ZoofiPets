<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\CategoriaProducto; // Assuming this exists or using string if not

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate(10);
        return view('admin.productos.index', compact('productos'));
    }

    public function create()
    {
        // $categorias = CategoriaProducto::all(); // Comentar si no existe aun el modelo
        return view('admin.productos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo_interno' => 'required|unique:productos,codigo_interno',
            'nombre' => 'required|string|max:150',
            'precio_venta' => 'required|numeric|min:0',
            'stock_actual' => 'required|integer|min:0',
            'categoria_id' => 'required|integer', // Simplificado por ahora
        ]);

        Producto::create($validated);
        return redirect()->route('admin.productos.index')->with('success', 'Producto creado.');
    }

    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('admin.productos.edit', compact('producto'));
    }

    public function update(Request $request, string $id)
    {
        $producto = Producto::findOrFail($id);
        $validated = $request->validate([
            'codigo_interno' => 'required|unique:productos,codigo_interno,'.$producto->id,
            'nombre' => 'required|string|max:150',
            'precio_venta' => 'required|numeric|min:0',
            'stock_actual' => 'required|integer|min:0',
            'categoria_id' => 'required|integer',
        ]);
        
        $producto->update($validated);
        return redirect()->route('admin.productos.index')->with('success', 'Producto actualizado.');
    }

    public function destroy(string $id)
    {
        Producto::findOrFail($id)->delete();
        return redirect()->route('admin.productos.index')->with('success', 'Producto eliminado.');
    }
}
