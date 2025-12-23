<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pago;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eager load Venta (and its Cliente) and MetodoPago if they exist
        // Note: Models Venta and MetodoPago might not exist yet, so we handle basic fetch first
        // Assuming Venta connects to Cliente
        
        $pagos = Pago::orderBy('created_at', 'desc')->paginate(10);
        return view('recepcionista.pagos.index', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recepcionista.pagos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Placeholder validation
        $validated = $request->validate([
            'monto' => 'required|numeric',
        ]);

        return redirect()->route('recepcionista.pagos.index');
    }
}
