<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovimientoInventario;

class MovimientoController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $movimientos = MovimientoInventario::query()
            ->with(['producto', 'usuario'])
            ->when($search, function ($query, $search) {
                $query->whereHas('producto', function($q) use ($search) {
                    $q->where('nombre', 'like', "%{$search}%");
                })->orWhere('motivo', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        return view('admin.movimientos.index', compact('movimientos'));
    }
}
