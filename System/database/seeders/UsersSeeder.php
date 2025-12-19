<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Obtener IDs de roles
        $adminRole = \App\Models\Role::where('nombre', 'Administrador')->first()->id;
        $vetRole = \App\Models\Role::where('nombre', 'Veterinario')->first()->id;
        $recepRole = \App\Models\Role::where('nombre', 'Recepcionista')->first()->id;
        $vendRole = \App\Models\Role::where('nombre', 'Vendedor')->first()->id;

        $users = [
            [
                'name' => 'Dr. Carlos Rodriguez',
                'email' => 'carlos.rodriguez@zoofipets.com',
                'role_id' => $vetRole,
                'email_verified_at' => '2024-01-01 10:00:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-01 10:00:00',
                'updated_at' => '2024-01-01 10:00:00'
            ],
            // ... (otros usuarios) se asume que se actualizan similar, 
            // pero para abreviar en este entorno editaré todo el bloque o usaré un foreach inteligente si el array es muy largo
            // Dado que el array es largo, usaré un enfoque de modificación de todo el array si es posible, o iteraré después.
            // Para simplificar esta edición masiva, asignaré roles por defecto o lógica.
            // Mejor estrategia: Definir el array completo nuevamente con los role_id correctos.
        ];
        
        // REESCRIBIENDO LA MATRIZ ENTERA PARA ASEGURAR INTEGRIDAD
        $users = [
            [
                'name' => 'Dr. Carlos Rodriguez',
                'email' => 'carlos.rodriguez@zoofipets.com',
                'role_id' => $vetRole,
                'email_verified_at' => '2024-01-01 10:00:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-01 10:00:00',
                'updated_at' => '2024-01-01 10:00:00'
            ],
            [
                'name' => 'Dra. María González',
                'email' => 'maria.gonzalez@zoofipets.com',
                'role_id' => $vetRole,
                'email_verified_at' => '2024-01-02 09:30:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-02 09:30:00',
                'updated_at' => '2024-01-02 09:30:00'
            ],
            [
                'name' => 'Ana Torres',
                'email' => 'ana.torres@zoofipets.com',
                'role_id' => $recepRole,
                'email_verified_at' => '2024-01-03 11:15:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-03 11:15:00',
                'updated_at' => '2024-01-03 11:15:00'
            ],
            [
                'name' => 'Luis Martínez',
                'email' => 'luis.martinez@zoofipets.com',
                'role_id' => $recepRole,
                'email_verified_at' => '2024-01-04 08:45:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-04 08:45:00',
                'updated_at' => '2024-01-04 08:45:00'
            ],
            [
                'name' => 'Carmen López',
                'email' => 'carmen.lopez@zoofipets.com',
                'role_id' => $recepRole,
                'email_verified_at' => '2024-01-05 14:20:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-05 14:20:00',
                'updated_at' => '2024-01-05 14:20:00'
            ],
            [
                'name' => 'Dr. Pedro Sánchez',
                'email' => 'pedro.sanchez@zoofipets.com',
                'role_id' => $vetRole,
                'email_verified_at' => '2024-01-06 12:00:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-06 12:00:00',
                'updated_at' => '2024-01-06 12:00:00'
            ],
            [
                'name' => 'Jorge Ventas',
                'email' => 'jorge.ventas@zoofipets.com',
                'role_id' => $vendRole,
                'email_verified_at' => '2024-01-07 09:00:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-07 09:00:00',
                'updated_at' => '2024-01-07 09:00:00'
            ],
            [
                'name' => 'Administrador Sistema',
                'email' => 'admin@zoofipets.com',
                'role_id' => $adminRole,
                'email_verified_at' => '2024-01-01 00:00:00',
                'password' => Hash::make('admin123'),
                'created_at' => '2024-01-01 00:00:00',
                'updated_at' => '2024-01-01 00:00:00'
            ]
        ];

        DB::table('users')->insert($users);
    }
}