<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Mascota;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Empleado;
use App\Models\CitaMedica;
use App\Models\ServicioMedico;
use App\Models\CategoriaProducto;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            // 1. Categorías de Producto (Ensure they exist)
            if(CategoriaProducto::count() == 0) {
                CategoriaProducto::create(['nombre' => 'Alimentos', 'descripcion' => 'Comida seca y humeda']);
                CategoriaProducto::create(['nombre' => 'Juguetes', 'descripcion' => 'Entretenimiento']);
                CategoriaProducto::create(['nombre' => 'Medicamentos', 'descripcion' => 'Salud']);
                CategoriaProducto::create(['nombre' => 'Accesorios', 'descripcion' => 'Correas, camas, etc']);
            }

            // 2. Productos
            Producto::factory(20)->create([
                'categoria_id' => fn() => CategoriaProducto::inRandomOrder()->first()->id
            ]);

            // 3. Proveedores
            Proveedor::factory(20)->create();

            // 4. Clientes y Mascotas
            // Create 20 clients, each with 1-3 pets
            Cliente::factory(20)->create()->each(function ($cliente) {
                Mascota::factory(rand(1, 3))->create([
                    'cliente_id' => $cliente->id
                ]);
            });

            // 5. Empleados (Additional to seeders)
            // Ensure Cargos exist (RolesSeeder/CargosSeeder should run first)
            Empleado::factory(20)->create();

            // 6. Servicios Médicos
            ServicioMedico::factory(20)->create();

            // 7. Citas Médicas
            // Create 20 appointments attached to existing pets/clients
            $mascotas = Mascota::all();
            if($mascotas->count() > 0) {
                CitaMedica::factory(20)->make()->each(function ($cita) use ($mascotas) {
                    $mascota = $mascotas->random();
                    $cita->mascota_id = $mascota->id;
                    $cita->cliente_id = $mascota->cliente_id;
                    $cita->save();
                });
            }
        } catch (\Exception $e) {
            $this->command->error("SEEDER ERROR: " . $e->getMessage());
        }
    }
}
