<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegistroVacuna;
use App\Models\Mascota;

class VacunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacunas = RegistroVacuna::with(['mascota', 'mascota.cliente'])->orderBy('fecha_aplicacion', 'desc')->paginate(10);
        return view('veterinario.vacunas.index', compact('vacunas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mascotas = Mascota::orderBy('nombre')->get();
        return view('veterinario.vacunas.create', compact('mascotas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'vacuna' => 'required|string',
            'fecha_aplicacion' => 'required|date',
            'proxima_dosis' => 'nullable|date',
            'lote' => 'nullable|string',
            'laboratorio' => 'nullable|string',
            'observaciones' => 'nullable|string'
        ]);

        $validated['empleado_id'] = 1; // Placeholder for auth user

        RegistroVacuna::create($validated);

        return redirect()->route('veterinario.vacunas.index')->with('success', 'Vacuna registrada correctamente.');
    }
}
