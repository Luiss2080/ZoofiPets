<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicioMedico;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $servicios = ServicioMedico::query()
            ->when($search, function ($query, $search) {
                $query->where('nombre', 'like', "%{$search}%")
                      ->orWhere('categoria', 'like', "%{$search}%");
            })
            ->orderBy('nombre', 'asc')
            ->paginate($perPage);

        return view('admin.servicios.index', compact('servicios'));
    }
}
