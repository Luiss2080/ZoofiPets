<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class InventarioController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        // Inventory usually focuses on stock levels, maybe order by low stock?
        // For now, standard listing similar to Products but perhaps different view focus.
        $productos = Producto::query()
            ->when($search, function ($query, $search) {
                $query->where('nombre', 'like', "%{$search}%")
                      ->orWhere('codigo_interno', 'like', "%{$search}%");
            })
            ->orderBy('stock_actual', 'asc') // Order by stock (low to high) makes sense for inventory
            ->paginate($perPage);

        return view('vendedor.inventario.index', compact('productos'));
    }
}
