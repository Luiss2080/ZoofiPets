<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetodoPago;

class MetodoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $metodos = MetodoPago::query()
            ->when($search, function ($query, $search) {
                $query->where('nombre', 'like', "%{$search}%")
                      ->orWhere('descripcion', 'like', "%{$search}%");
            })
            ->withCount('pagos')
            ->orderBy('nombre', 'asc')
            ->paginate($perPage);

        return view('admin.metodos_pago.index', compact('metodos'));
    }
}
