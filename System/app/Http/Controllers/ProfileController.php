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
            // Add other validations if columns existed
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        // Update password if needed? Not implemented in form properly (needs specialized logic)
        $user->save();

        return back()->with('success', 'Perfil actualizado correctamente.');
    }
}
