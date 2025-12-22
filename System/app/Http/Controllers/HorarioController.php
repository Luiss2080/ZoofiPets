<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $horarios = Horario::with('empleado')
            ->when($search, function ($query, $search) {
                $query->where('dia_semana', 'like', "%{$search}%")
                      ->orWhereHas('empleado', function($q) use ($search) {
                          $q->where('nombre', 'like', "%{$search}%")
                            ->orWhere('apellido', 'like', "%{$search}%")
                            ->orWhere('cedula', 'like', "%{$search}%");
                      });
            })
            ->orderByRaw("FIELD(dia_semana, 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo')")
            ->orderBy('hora_inicio')
            ->paginate($perPage);

        return view('admin.horarios.index', compact('horarios'));
    }
}
