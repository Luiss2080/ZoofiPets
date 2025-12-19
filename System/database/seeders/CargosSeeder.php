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
            ['nombre' => 'Gerente', 'descripcion' => 'Encargado general de la clínica'],
            ['nombre' => 'Veterinario Senior', 'descripcion' => 'Especialista con experiencia'],
            ['nombre' => 'Veterinario Junior', 'descripcion' => 'Veterinario general'],
            ['nombre' => 'Recepcionista', 'descripcion' => 'Atención al cliente y agenda'],
            ['nombre' => 'Auxiliar Veterinario', 'descripcion' => 'Apoyo en consultas y cirugías'],
            ['nombre' => 'Vendedor', 'descripcion' => 'Encargado de ventas y caja'],
        ];

        foreach ($cargos as $cargo) {
            Cargo::create($cargo);
        }
    }
}
