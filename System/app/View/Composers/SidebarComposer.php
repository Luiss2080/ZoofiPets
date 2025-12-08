<?php

namespace App\View\Composers;

use Illuminate\View\View;

class SidebarComposer
{
    /**
     * Composer para el sidebar del sistema veterinario ZoofiPets
     */
    public function compose(View $view)
    {
        // Datos específicos del sidebar veterinario
        $menuItems = [
            'dashboard' => 'Dashboard',
            'clientes' => 'Clientes',
            'mascotas' => 'Mascotas',
            'veterinarios' => 'Veterinarios',
            'citas' => 'Citas',
            'productos' => 'Productos',
            'servicios' => 'Servicios',
            'historial-medico' => 'Historial Médico',
            'reportes' => 'Reportes'
        ];
        
        $view->with('menuItems', $menuItems);
    }
}