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
            [
                'nombre' => 'Recepcionista',
                'descripcion' => 'Gestión de citas, clientes y mascotas',
            ],
            [
                'nombre' => 'Veterinario',
                'descripcion' => 'Gestión clínica, historiales y recetas',
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
