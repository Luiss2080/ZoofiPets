<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServicioMedico;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            \Illuminate\Support\Facades\Log::info("Seeding Started...");
            
            // Master/Client
            \App\Models\Cargo::factory(5)->create();
            \App\Models\MetodoPago::factory(5)->create();
            \App\Models\Proveedor::factory(20)->create();
            \App\Models\Producto::factory(20)->create();
            
            // Clients
            \App\Models\Cliente::factory(20)->create();
            \App\Models\Mascota::factory(20)->create();

            // Receptionist
            \App\Models\SalaEspera::factory(20)->create();
            \App\Models\Recordatorio::factory(20)->create();
            \App\Models\InteraccionCliente::factory(20)->create();

            // Vendor
            \App\Models\SesionCaja::factory(20)->create();
            \App\Models\Venta::factory(20)->create(); 
            \App\Models\Devolucion::factory(20)->create();
            \App\Models\MovimientoInventario::factory(20)->create();

            // Veterinario
            \App\Models\ServicioMedico::factory(20)->create();
            \App\Models\CitaMedica::factory(20)->create(); 
            \App\Models\RegistroVacuna::factory(20)->create();
            \App\Models\HistorialMedico::factory(20)->create();
            \App\Models\Hospitalizacion::factory(20)->create();
            \App\Models\Laboratorio::factory(20)->create();

            \Illuminate\Support\Facades\Log::info("Seeding Finished.");
        } catch (\Throwable $e) {
            \Illuminate\Support\Facades\Log::error("FAILEDSEED: " . $e->getMessage());
            throw $e;
        }
    }
}
