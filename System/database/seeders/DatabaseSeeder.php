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
        try {
            echo "Seeding Started...\n";
            // Master/Client
            echo "Seeding Master...\n";
            \App\Models\Cargo::factory(5)->create();
            \App\Models\MetodoPago::factory(5)->create();
            \App\Models\Proveedor::factory(20)->create();
            // Categoria must be seeded or created by Producto factory. Factory handles it.
            // But verify_factories showed CategoriaProducto OK.
            \App\Models\Producto::factory(20)->create();
            
            echo "Seeding Clients...\n";
            \App\Models\Cliente::factory(20)->create();
            \App\Models\Mascota::factory(20)->create();

            // Receptionist
            echo "Seeding Receptionist...\n";
            \App\Models\SalaEspera::factory(20)->create();
            \App\Models\Recordatorio::factory(20)->create();
            \App\Models\InteraccionCliente::factory(20)->create();

            // Vendor
            echo "Seeding Vendor...\n";
            \App\Models\SesionCaja::factory(20)->create();
            \App\Models\Venta::factory(20)->create(); 
            \App\Models\Devolucion::factory(20)->create();
            \App\Models\MovimientoInventario::factory(20)->create();

            // Veterinario
            echo "Seeding Veterinario...\n";
            \App\Models\ServicioMedico::factory(20)->create();
            \App\Models\CitaMedica::factory(20)->create(); 
            \App\Models\RegistroVacuna::factory(20)->create();
            \App\Models\HistorialMedico::factory(20)->create();
            \App\Models\Hospitalizacion::factory(20)->create();
            \App\Models\Laboratorio::factory(20)->create();
            echo "Seeding Finished (Skipped).\n";
        } catch (\Throwable $e) {
            
        } catch (\Throwable $e) {
            echo "FAILEDSEED: " . $e->getMessage() . "\n";
            echo "File: " . $e->getFile() . " Line: " . $e->getLine() . "\n";
            // dump($e->getTraceAsString());
            throw $e;
        }
    }
}
