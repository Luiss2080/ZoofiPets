<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistorialMedico;

class HistorialMedicoController extends Controller
{
    /**
     * Display a listing of medical histories.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $historiales = HistorialMedico::with(['mascota.cliente', 'veterinario'])
            ->when($search, function ($query, $search) {
                $query->whereHas('mascota', function ($q) use ($search) {
                    $q->where('nombre', 'like', "%{$search}%")
                      ->orWhere('codigo_mascota', 'like', "%{$search}%");
                });
            })
            ->orderBy('fecha_consulta', 'desc')
            ->paginate($perPage);

        return view('veterinario.historiales.index', compact('historiales'));
    }
}
