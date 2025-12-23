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

            return response()->json(['success' => true, 'avatar' => asset('images/avatars/' . $name)]);
        }

        return response()->json(['success' => false], 400);
    }
}
