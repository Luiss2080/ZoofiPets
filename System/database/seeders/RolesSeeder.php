<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'nombre' => 'Administrador',
                'descripcion' => 'Acceso total a todos los módulos del sistema',
            ],
            'Administrador',
            'Recepcionista',
            'Veterinario',
            'Vendedor',
        ];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(['nombre' => $roleName], ['descripcion' => 'Rol de ' . $roleName]);
        }
    }
}
