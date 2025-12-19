<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CitaMedica;
use App\Models\HistorialMedico;
use App\Models\Mascota;
use App\Models\ServicioMedico;
use Illuminate\Support\Facades\Auth; // For Vet ID

class ConsultaController extends Controller
{
    /**
     * Display a listing of appointments (Agenda).
     */
    public function index()
    {
        // En app real: Filtrar por veterinario logueado Auth::user()->empleado_id
        $citas = CitaMedica::where('estado', 'Programada')
            ->orWhere('estado', 'Confirmada')
            ->with(['mascota', 'cliente'])
            ->orderBy('fecha_hora', 'asc')
            ->get();

        return view('veterinario.consultas.agenda', compact('citas'));
    }

    /**
     * Show the form for creating a new resource (Start Consultation).
     */
    public function create(Request $request)
    {
        $cita_id = $request->query('cita_id');
        $cita = null;
        $mascota = null;

        if ($cita_id) {
            $cita = CitaMedica::with('mascota.historiales')->findOrFail($cita_id);
            $mascota = $cita->mascota;
            
            // Cambiar estado a En Proceso
            if($cita->estado == 'Programada' || $cita->estado == 'Confirmada') {
                $cita->update(['estado' => 'En_Proceso']);
            }
        } else {
            // Caso sin cita (emergencia o directo) - No impementado en MVP simple
            return redirect()->route('admin.consultas.index');
        }

        $historialprevio = $mascota->historiales()->orderBy('fecha_consulta', 'desc')->get();

        return view('veterinario.consultas.consulta', compact('cita', 'mascota', 'historialprevio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'cita_medica_id' => 'nullable|exists:citas_medicas,id',
            'peso' => 'nullable|numeric',
            'temperatura' => 'nullable|numeric',
            'sintomas' => 'nullable|string',
            'diagnostico' => 'required|string',
            'tratamiento' => 'nullable|string',
            'medicamentos' => 'nullable|string',
            'recomendaciones' => 'nullable|string',
            'proxima_cita' => 'nullable|date',
        ]);

        $validated['fecha_consulta'] = now();
        $validated['empleado_id'] = 1; // Hardcoded Vet ID for Demo. Real: Auth::user()->empleado_id

        HistorialMedico::create($validated);

        if ($request->cita_medica_id) {
            CitaMedica::where('id', $request->cita_medica_id)->update(['estado' => 'Completada']);
        }

        return redirect()->route('admin.consultas.index')->with('success', 'Consulta finalizada exitosamente.');
    }

    /**
     * Display the specified resource (History Detail).
     */
    public function show(string $id)
    {
        $historial = HistorialMedico::with(['mascota', 'veterinario'])->findOrFail($id);
        return view('veterinario.consultas.show', compact('historial'));
    }

    // Skipping Edit/Update/Destroy for MVP history integrity
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}
