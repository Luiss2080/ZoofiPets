<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $cargos = Cargo::withCount('empleados')
            ->when($search, function ($query, $search) {
                $query->where('nombre', 'like', "%{$search}%")
                      ->orWhere('descripcion', 'like', "%{$search}%");
            })
            ->orderBy('nombre', 'asc')
            ->paginate($perPage);

        return view('admin.cargos.index', compact('cargos'));
    }
}
