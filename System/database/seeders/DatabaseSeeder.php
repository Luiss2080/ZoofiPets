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
        $stages = [
            'Admin User' => fn() => \App\Models\User::factory()->create([
                'name' => 'Admin Sistema',
                'email' => 'admin@zoofipets.com',
                'password' => 'admin123',
            ]),
            'Cargo' => fn() => \App\Models\Cargo::factory(5)->create(),
            'MetodoPago' => fn() => \App\Models\MetodoPago::factory(5)->create(),
            // 'Proveedor' => fn() => \App\Models\Proveedor::factory(20)->create(),
            // 'Producto' => fn() => \App\Models\Producto::factory(20)->create(),
            // 'Cliente' => fn() => \App\Models\Cliente::factory(20)->create(),
            // 'Mascota' => fn() => \App\Models\Mascota::factory(20)->create(),
            // 'SalaEspera' => fn() => \App\Models\SalaEspera::factory(20)->create(),
            // 'Recordatorio' => fn() => \App\Models\Recordatorio::factory(20)->create(),
            // 'InteraccionCliente' => fn() => \App\Models\InteraccionCliente::factory(20)->create(),
            // 'SesionCaja' => fn() => \App\Models\SesionCaja::factory(20)->create(),
            // 'Venta' => fn() => \App\Models\Venta::factory(20)->create(),
            // 'Devolucion' => fn() => \App\Models\Devolucion::factory(20)->create(),
            // 'MovimientoInventario' => fn() => \App\Models\MovimientoInventario::factory(20)->create(),
            // 'ServicioMedico' => fn() => \App\Models\ServicioMedico::factory(20)->create(),
            // 'CitaMedica' => fn() => \App\Models\CitaMedica::factory(20)->create(),
            // 'RegistroVacuna' => fn() => \App\Models\RegistroVacuna::factory(20)->create(),
            // 'HistorialMedico' => fn() => \App\Models\HistorialMedico::factory(20)->create(),
            // 'Hospitalizacion' => fn() => \App\Models\Hospitalizacion::factory(20)->create(),
            // 'Laboratorio' => fn() => \App\Models\Laboratorio::factory(20)->create(),
        ];

        foreach ($stages as $name => $callback) {
            try {
                echo "Seeding $name...\n";
                $callback();
                echo "$name DONE.\n";
            } catch (\Throwable $e) {
                echo "FAILED $name: " . $e->getMessage() . "\n";
                // throw $e; // Continue to seed others if possible? No, usually stop.
                // But for debugging, let's stop to see the error.
                throw $e;
            }
        }
    }
}
