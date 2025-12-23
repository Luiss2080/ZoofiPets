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
            'Roles' => function() {
                // Create specific roles required for Dashboard
                $roles = ['Administrador', 'Veterinario', 'Recepcionista', 'Vendedor'];
                foreach ($roles as $roleName) {
                    \App\Models\Role::firstOrCreate(['nombre' => $roleName], ['descripcion' => 'Rol de ' . $roleName]);
                }
            },
            'Admin User' => function() {
                $adminRole = \App\Models\Role::where('nombre', 'Administrador')->first();
                // Create Admin if not exists
                if (!\App\Models\User::where('email', 'admin@zoofipets.com')->exists()) {
                     \App\Models\User::factory()->create([
                        'name' => 'Admin Sistema',
                        'email' => 'admin@zoofipets.com',
                        'password' => 'admin123',
                        'role_id' => $adminRole->id,
                    ]);
                }
            },
            'Staff Users' => function() {
                // Create extra users for Dashboard Charts (Veterinarios)
                $vetRole = \App\Models\Role::where('nombre', 'Veterinario')->first();
                \App\Models\User::factory(5)->create(['role_id' => $vetRole->id]);

                // Create extra users for Dashboard Charts (Recepcion)
                $recepRole = \App\Models\Role::where('nombre', 'Recepcionista')->first();
                \App\Models\User::factory(3)->create(['role_id' => $recepRole->id]);
            },
            'Cargo' => fn() => \App\Models\Cargo::factory(5)->create(),
            'MetodoPago' => fn() => \App\Models\MetodoPago::factory(5)->create(),
            'Proveedor' => fn() => \App\Models\Proveedor::factory(20)->create(),
            'CategoriaProducto' => fn() => \App\Models\CategoriaProducto::factory(10)->create(),
            'Producto' => fn() => \App\Models\Producto::factory(20)->create(),
            'Cliente' => fn() => \App\Models\Cliente::factory(20)->create(),
            'Mascota' => fn() => \App\Models\Mascota::factory(20)->create(),
            'SalaEspera' => fn() => \App\Models\SalaEspera::factory(20)->create(),
            'Recordatorio' => fn() => \App\Models\Recordatorio::factory(20)->create(),
            'InteraccionCliente' => fn() => \App\Models\InteraccionCliente::factory(20)->create(),
            'SesionCaja' => fn() => \App\Models\SesionCaja::factory(20)->create(),
            'Venta' => fn() => \App\Models\Venta::factory(20)->create(),
            'Pago' => fn() => \App\Models\Pago::factory(20)->create(),
            'Devolucion' => fn() => \App\Models\Devolucion::factory(20)->create(),
            'MovimientoInventario' => fn() => \App\Models\MovimientoInventario::factory(20)->create(),
            'ServicioMedico' => fn() => \App\Models\ServicioMedico::factory(20)->create(),
            'CitaMedica' => fn() => \App\Models\CitaMedica::factory(20)->create(),
            'RegistroVacuna' => fn() => \App\Models\RegistroVacuna::factory(20)->create(),
            'HistorialMedico' => fn() => \App\Models\HistorialMedico::factory(20)->create(),
            'Hospitalizacion' => fn() => \App\Models\Hospitalizacion::factory(20)->create(),
            'Laboratorio' => fn() => \App\Models\Laboratorio::factory(20)->create(),
            'Empleado' => fn() => \App\Models\Empleado::factory(20)->create(), // Added missing Empleado seeder
        ];

        foreach ($stages as $name => $callback) {
            try {
                \Illuminate\Support\Facades\Log::info("Seeding $name...");
                $callback();
                \Illuminate\Support\Facades\Log::info("$name DONE.");
            } catch (\Throwable $e) {
                \Illuminate\Support\Facades\Log::error("FAILED $name: " . $e->getMessage());
                // Don't throw, let it continue to populate as much as possible to fix "Empty Dashboard"
                echo "FAILED $name: " . $e->getMessage() . "\n"; 
            }
        }
    }
}
