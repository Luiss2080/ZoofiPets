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
        $users = [
            [
                'name' => 'Dr. Carlos Rodriguez',
                'email' => 'carlos.rodriguez@zoofipets.com',
                'email_verified_at' => '2024-01-01 10:00:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-01 10:00:00',
                'updated_at' => '2024-01-01 10:00:00'
            ],
            [
                'name' => 'Dra. María González',
                'email' => 'maria.gonzalez@zoofipets.com',
                'email_verified_at' => '2024-01-02 09:30:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-02 09:30:00',
                'updated_at' => '2024-01-02 09:30:00'
            ],
            [
                'name' => 'Ana Torres',
                'email' => 'ana.torres@zoofipets.com',
                'email_verified_at' => '2024-01-03 11:15:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-03 11:15:00',
                'updated_at' => '2024-01-03 11:15:00'
            ],
            [
                'name' => 'Luis Martínez',
                'email' => 'luis.martinez@zoofipets.com',
                'email_verified_at' => '2024-01-04 08:45:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-04 08:45:00',
                'updated_at' => '2024-01-04 08:45:00'
            ],
            [
                'name' => 'Carmen López',
                'email' => 'carmen.lopez@zoofipets.com',
                'email_verified_at' => '2024-01-05 14:20:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-05 14:20:00',
                'updated_at' => '2024-01-05 14:20:00'
            ],
            [
                'name' => 'Dr. Pedro Sánchez',
                'email' => 'pedro.sanchez@zoofipets.com',
                'email_verified_at' => '2024-01-06 12:00:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-06 12:00:00',
                'updated_at' => '2024-01-06 12:00:00'
            ],
            [
                'name' => 'Isabella Ramírez',
                'email' => 'isabella.ramirez@zoofipets.com',
                'email_verified_at' => '2024-01-07 16:30:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-07 16:30:00',
                'updated_at' => '2024-01-07 16:30:00'
            ],
            [
                'name' => 'Miguel Herrera',
                'email' => 'miguel.herrera@zoofipets.com',
                'email_verified_at' => '2024-01-08 09:15:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-08 09:15:00',
                'updated_at' => '2024-01-08 09:15:00'
            ],
            [
                'name' => 'Dra. Laura Morales',
                'email' => 'laura.morales@zoofipets.com',
                'email_verified_at' => '2024-01-09 13:45:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-09 13:45:00',
                'updated_at' => '2024-01-09 13:45:00'
            ],
            [
                'name' => 'Roberto Castro',
                'email' => 'roberto.castro@zoofipets.com',
                'email_verified_at' => '2024-01-10 10:20:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-10 10:20:00',
                'updated_at' => '2024-01-10 10:20:00'
            ],
            [
                'name' => 'Sofía Vargas',
                'email' => 'sofia.vargas@zoofipets.com',
                'email_verified_at' => '2024-01-11 15:10:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-11 15:10:00',
                'updated_at' => '2024-01-11 15:10:00'
            ],
            [
                'name' => 'Dr. Diego Ruiz',
                'email' => 'diego.ruiz@zoofipets.com',
                'email_verified_at' => '2024-01-12 11:30:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-12 11:30:00',
                'updated_at' => '2024-01-12 11:30:00'
            ],
            [
                'name' => 'Valentina Jiménez',
                'email' => 'valentina.jimenez@zoofipets.com',
                'email_verified_at' => '2024-01-13 14:50:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-13 14:50:00',
                'updated_at' => '2024-01-13 14:50:00'
            ],
            [
                'name' => 'Andrés Mendoza',
                'email' => 'andres.mendoza@zoofipets.com',
                'email_verified_at' => '2024-01-14 08:25:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-14 08:25:00',
                'updated_at' => '2024-01-14 08:25:00'
            ],
            [
                'name' => 'Dra. Natalia Peña',
                'email' => 'natalia.pena@zoofipets.com',
                'email_verified_at' => '2024-01-15 12:40:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-15 12:40:00',
                'updated_at' => '2024-01-15 12:40:00'
            ],
            [
                'name' => 'Gabriel Flores',
                'email' => 'gabriel.flores@zoofipets.com',
                'email_verified_at' => '2024-01-16 16:05:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-16 16:05:00',
                'updated_at' => '2024-01-16 16:05:00'
            ],
            [
                'name' => 'Camila Ortega',
                'email' => 'camila.ortega@zoofipets.com',
                'email_verified_at' => '2024-01-17 09:55:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-17 09:55:00',
                'updated_at' => '2024-01-17 09:55:00'
            ],
            [
                'name' => 'Dr. Fernando Silva',
                'email' => 'fernando.silva@zoofipets.com',
                'email_verified_at' => '2024-01-18 13:20:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-18 13:20:00',
                'updated_at' => '2024-01-18 13:20:00'
            ],
            [
                'name' => 'Daniela Romero',
                'email' => 'daniela.romero@zoofipets.com',
                'email_verified_at' => '2024-01-19 11:10:00',
                'password' => Hash::make('password123'),
                'created_at' => '2024-01-19 11:10:00',
                'updated_at' => '2024-01-19 11:10:00'
            ],
            [
                'name' => 'Administrador Sistema',
                'email' => 'admin@zoofipets.com',
                'email_verified_at' => '2024-01-01 00:00:00',
                'password' => Hash::make('admin123'),
                'created_at' => '2024-01-01 00:00:00',
                'updated_at' => '2024-01-01 00:00:00'
            ]
        ];

        DB::table('users')->insert($users);
    }
}