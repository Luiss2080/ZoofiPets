<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CitasMedicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mascotas = \App\Models\Mascota::all();
        
        if($mascotas->count() > 0) {
            \App\Models\CitaMedica::factory(20)->make()->each(function ($cita) use ($mascotas) {
                // Asignar aleatoriamente una mascota y su dueño
                $mascota = $mascotas->random();
                $cita->mascota_id = $mascota->id;
                $cita->cliente_id = $mascota->cliente_id;
                $cita->save();
            });
        }
    }
}
