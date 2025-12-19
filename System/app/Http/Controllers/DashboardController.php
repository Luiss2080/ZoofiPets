<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Data for the Dashboard
        $stats = [
            'users' => \App\Models\User::count(),
            'students' => \App\Models\Mascota::count(), // Map Pets to Students slot
            'teachers' => \App\Models\Empleado::count(), // Map Employees to Teachers slot
            'courses' => \App\Models\Producto::count(), // Map Products to Courses slot
            
            // Recents logic
            'recent_users_count' => 5, // Placeholder
            'recent_courses_count' => \App\Models\Producto::where('created_at', '>=', now()->subDays(7))->count(),
        ];

        $recentUsers = \App\Models\User::latest()->take(5)->get();
        // Add minimal 'rol' attribute if missing to prevent view crash
        foreach($recentUsers as $user) {
            if(!$user->rol) {
                 // Check if relation is loaded or load it, then access name
                 $user->rol = $user->role ? $user->role->name : 'invitado';
            }
        }

        $roleDistribution = [
            'admin' => \App\Models\User::role('Administrador')->count(),
            'docente' => \App\Models\User::role('Veterinario')->count(), // Map Vet to Docente
            'estudiante' => \App\Models\User::role('Recepcionista')->count(), // Map Recep to Estudiante
        ];
        
        $chartData = []; // Placeholder

        return view('components.admin', compact('stats', 'recentUsers', 'roleDistribution', 'chartData'));
    }
}
