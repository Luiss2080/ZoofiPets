<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $empleados = Empleado::with('cargo')
            ->when($search, function ($query, $search) {
                $query->where('nombre', 'like', "%{$search}%")
                      ->orWhere('apellido', 'like', "%{$search}%")
                      ->orWhere('cedula', 'like', "%{$search}%")
                      ->orWhere('codigo_empleado', 'like', "%{$search}%");
            })
            ->orderBy('nombre', 'asc')
            ->paginate($perPage);

        return view('admin.empleados.index', compact('empleados'));
    }
}
