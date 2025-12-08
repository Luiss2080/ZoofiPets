<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Tablas base primero
            MetodosPagoSeeder::class,
            CategoriaProductosSeeder::class,
            EmpleadosSeeder::class,
            ProveedoresSeeder::class,
            ServiciosMedicosSeeder::class,
            
            // Tablas con relaciones
            HorariosEmpleadosSeeder::class,
            EspecialistaServicioSeeder::class,
            ClientesSeeder::class,
            ProductosSeeder::class,
            MascotasSeeder::class,
        ]);
    }
}
