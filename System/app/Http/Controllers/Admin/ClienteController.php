<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\Mascota;
use Illuminate\Support\Str;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Cliente::query();

        // Search Filter (Nombre, Apellido, Cedula, Email)
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nombre', 'LIKE', "%{$search}%")
                  ->orWhere('apellido', 'LIKE', "%{$search}%")
                  ->orWhere('cedula', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%");
            });
        }

        // Specific Filters
        if ($request->has('cedula') && $request->cedula != '') {
             $query->where('cedula', 'LIKE', "%{$request->cedula}%");
        }

        if ($request->has('telefono') && $request->telefono != '') {
             $query->where('telefono', 'LIKE', "%{$request->telefono}%");
        }

        if ($request->has('direccion') && $request->direccion != '') {
             $query->where('direccion', 'LIKE', "%{$request->direccion}%");
        }
        
        // Sorting
        $sortField = $request->get('sort', 'created_at');
        $sortDirection = $request->get('direction', 'desc');
        $query->orderBy($sortField, $sortDirection);

        // Pagination
        $perPage = $request->get('per_page', 10);
        $clientes = $query->paginate($perPage);

        return view('admin.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'cedula' => 'required|string|unique:clientes,cedula|max:20',
            'email' => 'nullable|email|unique:clientes,email|max:150',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string',
            'genero' => 'nullable|in:M,F,Otro',
            'fecha_nacimiento' => 'nullable|date',
        ]);

        Cliente::create($validated);

        return redirect()->route('recepcionista.clientes.index')->with('success', 'Cliente registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('admin.clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('admin.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'cedula' => 'required|string|max:20|unique:clientes,cedula,'.$cliente->id,
            'email' => 'nullable|email|max:150|unique:clientes,email,'.$cliente->id,
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string',
            'genero' => 'nullable|in:M,F,Otro',
            'fecha_nacimiento' => 'nullable|date',
        ]);

        $cliente->update($validated);

        return redirect()->route('recepcionista.clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    /**
     * Get Client's Pets (JSON).
     */
    public function getMascotas(string $id)
    {
        $mascotas = Mascota::where('cliente_id', $id)->select('id', 'nombre', 'especie')->get();
        return response()->json($mascotas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('recepcionista.clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}
