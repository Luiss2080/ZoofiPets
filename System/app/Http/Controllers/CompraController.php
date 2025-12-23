<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $compras = Compra::with(['proveedor', 'empleado'])
            ->when($search, function ($query, $search) {
                $query->where('numero_factura', 'like', "%{$search}%")
                      ->orWhereHas('proveedor', function($q) use ($search) {
                          $q->where('nombre', 'like', "%{$search}%")
                            ->orWhere('ruc', 'like', "%{$search}%");
                      });
            })
            ->orderBy('fecha_compra', 'desc')
            ->paginate($perPage);

        return view('admin.compras.index', compact('compras'));
    }
}
