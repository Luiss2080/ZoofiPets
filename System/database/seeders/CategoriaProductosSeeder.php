<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('categorias_productos')->insert([
            [
                'nombre' => 'Medicamentos',
                'descripcion' => 'Medicamentos y productos farmacéuticos para mascotas',
                'activa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Alimentos',
                'descripcion' => 'Alimentos balanceados y treats para mascotas',
                'activa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Accesorios',
                'descripcion' => 'Collares, correas, juguetes y otros accesorios',
                'activa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Higiene',
                'descripcion' => 'Productos de higiene y cuidado personal',
                'activa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Equipos Médicos',
                'descripcion' => 'Instrumentos y equipos para uso veterinario',
                'activa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
