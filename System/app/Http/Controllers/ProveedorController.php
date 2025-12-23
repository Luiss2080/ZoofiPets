<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $proveedores = Proveedor::query()
            ->when($search, function ($query, $search) {
                $query->where('nombre', 'like', "%{$search}%")
                      ->orWhere('ruc', 'like', "%{$search}%")
                      ->orWhere('contacto_principal', 'like', "%{$search}%");
            })
            ->orderBy('nombre', 'asc')
            ->paginate($perPage);

        return view('admin.proveedores.index', compact('proveedores'));
    }
}
