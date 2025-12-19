<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Mascota;
use App\Models\Cliente;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas = Mascota::with('cliente')->paginate(10);
        return view('veterinario.mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::orderBy('nombre')->get();
        return view('veterinario.mascotas.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'nombre' => 'required|string|max:100',
            'codigo_mascota' => 'required|string|unique:mascotas,codigo_mascota',
            'especie' => 'required|string',
            'raza' => 'nullable|string',
            'sexo' => 'nullable|in:Macho,Hembra',
            'fecha_nacimiento' => 'nullable|date',
            'color' => 'nullable|string',
            'peso' => 'nullable|numeric',
            'microchip' => 'nullable|string|unique:mascotas,microchip',
        ]);

        Mascota::create($validated);

        return redirect()->route('admin.mascotas.index')->with('success', 'Mascota registrada exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mascota = Mascota::findOrFail($id);
        $clientes = Cliente::orderBy('nombre')->get();
        return view('veterinario.mascotas.edit', compact('mascota', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mascota = Mascota::findOrFail($id);

        $validated = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'nombre' => 'required|string|max:100',
            'codigo_mascota' => 'required|string|unique:mascotas,codigo_mascota,'.$mascota->id,
            'especie' => 'required|string',
            'raza' => 'nullable|string',
            'sexo' => 'nullable|in:Macho,Hembra',
            'fecha_nacimiento' => 'nullable|date',
            'color' => 'nullable|string',
            'peso' => 'nullable|numeric',
            'microchip' => 'nullable|string|unique:mascotas,microchip,'.$mascota->id,
        ]);

        $mascota->update($validated);

        return redirect()->route('admin.mascotas.index')->with('success', 'Mascota actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mascota = Mascota::findOrFail($id);
        $mascota->delete();
        return redirect()->route('admin.mascotas.index')->with('success', 'Mascota eliminada exitosamente.');
    }
}
