<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CitaMedica;
use App\Models\Cliente;
use App\Models\Mascota;
use App\Models\Empleado; // Veterinarios

class CitaMedicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = CitaMedica::with(['cliente', 'mascota', 'veterinario'])
            ->orderBy('fecha_hora', 'asc')
            ->paginate(10);
            
        return view('admin.citas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::orderBy('nombre')->get();
        // Filtrar solo veterinarios
        $veterinarios = Empleado::whereHas('cargo', function($q) {
            $q->where('nombre', 'Veterinario'); // Ajustar si el cargo se llama diferente
        })->get();
        
        return view('admin.citas.create', compact('clientes', 'veterinarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'mascota_id' => 'required|exists:mascotas,id',
            'empleado_id' => 'required|exists:empleados,id',
            'fecha_hora' => 'required|date|after:now',
            'motivo_consulta' => 'nullable|string',
            'estado' => 'required|in:Programada,Confirmada,En_Proceso,Completada,Cancelada,No_Asistio'
        ]);

        // Generar numero de cita unico
        $validated['numero_cita'] = 'CITA-' . uniqid();

        CitaMedica::create($validated);

        return redirect()->route('admin.citas.index')->with('success', 'Cita agendada exitosamente.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cita = CitaMedica::findOrFail($id);
        $clientes = Cliente::orderBy('nombre')->get(); // Para mostrar, aunque idealmente no se cambia el cliente
        $veterinarios = Empleado::whereHas('cargo', function($q){ $q->where('nombre', 'Veterinario'); })->get();
        
        return view('admin.citas.edit', compact('cita', 'clientes', 'veterinarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cita = CitaMedica::findOrFail($id);

        $validated = $request->validate([
            'empleado_id' => 'required|exists:empleados,id',
            'fecha_hora' => 'required|date',
            'motivo_consulta' => 'nullable|string',
            'estado' => 'required|in:Programada,Confirmada,En_Proceso,Completada,Cancelada,No_Asistio'
        ]);

        $cita->update($validated);

        return redirect()->route('admin.citas.index')->with('success', 'Cita actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cita = CitaMedica::findOrFail($id);
        $cita->delete();
        return redirect()->route('admin.citas.index')->with('success', 'Cita eliminada exitosamente.');
    }
}
