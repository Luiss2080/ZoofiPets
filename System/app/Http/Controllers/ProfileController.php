<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // Mock logs for now if ActivityLog doesn't exist, or replace with real relation later
        $logs = []; 
        return view('perfil.index', compact('user', 'logs'));
    }

    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = auth()->user();

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/avatars');
            
            // Create directory if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Delete old image if exists and not default
            if ($user->avatar && file_exists($destinationPath . '/' . $user->avatar)) {
                unlink($destinationPath . '/' . $user->avatar);
            }

            $image->move($destinationPath, $name);
            $user->avatar = $name;
            $user->save();

            if ($request->wantsJson()) {
                return response()->json(['success' => true, 'avatar' => asset('images/avatars/' . $name)]);
            }
            return back()->with('success', 'Foto de perfil actualizada correctamente.');
        }

        if ($request->wantsJson()) {
            return response()->json(['success' => false], 400);
        }
        return back()->with('error', 'No se ha subido ninguna imagen.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'profesion' => 'nullable|string|max:255',
            'nivel_estudios' => 'nullable|string|max:255',
            'ci' => 'nullable|string|max:20',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'biografia' => 'nullable|string|max:1000',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profesion = $request->profesion;
        $user->nivel_estudios = $request->nivel_estudios;
        $user->ci = $request->ci;
        $user->telefono = $request->telefono;
        $user->direccion = $request->direccion;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->biografia = $request->biografia;
        $user->save();

        return back()->with('success', 'Perfil actualizado correctamente.');
    }

    public function edit()
    {
        $user = auth()->user();
        return view('perfil.edit', compact('user'));
    }

    public function security()
    {
        $user = auth()->user();
        return view('perfil.security', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        $user = auth()->user();
        $user->password = bcrypt($request->new_password);
        $user->save();

        return back()->with('success', 'Contraseña actualizada correctamente.');
    }
}
