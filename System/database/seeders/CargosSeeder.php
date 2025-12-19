<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cargo;

class CargosSeeder extends Seeder
{
    public function run()
    {
        $cargos = [
            ['nombre' => 'Veterinario', 'descripcion' => 'Profesional de la salud animal'],
            ['nombre' => 'Asistente', 'descripcion' => 'Apoyo en consultas y procedimientos'],
            ['nombre' => 'Recepcionista', 'descripcion' => 'Atención al cliente y agenda'],
            ['nombre' => 'Administrador', 'descripcion' => 'Gestión administrativa del sistema'],
            ['nombre' => 'Cajero', 'descripcion' => 'Manejo de flujo de caja y cobros'],
            ['nombre' => 'Gerente', 'descripcion' => 'Dirección general de la clínica'],
        ];

        foreach ($cargos as $cargo) {
            Cargo::create($cargo);
        }
    }
}
