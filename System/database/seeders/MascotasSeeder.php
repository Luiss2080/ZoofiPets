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
            // Recorre cada cliente y le crea entre 1 y 2 mascotas
            $clientes->each(function($cliente) {
                \App\Models\Mascota::factory(rand(1, 2))->create([
                    'cliente_id' => $cliente->id
                ]);
            });
        }
    }
}
