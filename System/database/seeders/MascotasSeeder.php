<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MascotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener clientes existentes
        $clientes = \App\Models\Cliente::all();
        
        if($clientes->count() > 0) {
            // Recorre cada cliente y le crea 1 mascota para asegurar 20 registros exactos
            $clientes->each(function($cliente) {
                \App\Models\Mascota::factory(1)->create([
                    'cliente_id' => $cliente->id
                ]);
            });
        }
    }
}
