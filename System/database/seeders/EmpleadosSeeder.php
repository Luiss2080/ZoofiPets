<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('empleados')->insert([
            [
                'nombre' => 'Dr. Ana María',
                'apellido' => 'González',
                'cedula' => '12345678',
                'telefono' => '0987654321',
                'email' => 'ana.gonzalez@zoofipets.com',
                'direccion' => 'Av. Principal #123, Quito',
                'cargo' => 'Veterinario',
                'especialidad' => 'Medicina Interna',
                'salario' => 2500.00,
                'fecha_ingreso' => '2024-01-15',
                'fecha_nacimiento' => '1985-03-20',
                'genero' => 'F',
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Dr. Carlos',
                'apellido' => 'Rodríguez',
                'cedula' => '87654321',
                'telefono' => '0998877665',
                'email' => 'carlos.rodriguez@zoofipets.com',
                'direccion' => 'Calle Secundaria #456, Quito',
                'cargo' => 'Veterinario',
                'especialidad' => 'Cirugía',
                'salario' => 2800.00,
                'fecha_ingreso' => '2023-06-10',
                'fecha_nacimiento' => '1980-11-15',
                'genero' => 'M',
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María',
                'apellido' => 'López',
                'cedula' => '11223344',
                'telefono' => '0976543210',
                'email' => 'maria.lopez@zoofipets.com',
                'direccion' => 'Av. Norte #789, Quito',
                'cargo' => 'Recepcionista',
                'especialidad' => null,
                'salario' => 800.00,
                'fecha_ingreso' => '2024-03-01',
                'fecha_nacimiento' => '1992-07-08',
                'genero' => 'F',
                'activo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
