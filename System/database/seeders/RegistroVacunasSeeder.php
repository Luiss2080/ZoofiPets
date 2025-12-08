<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegistroVacunasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vacunas = [
            ['mascota_id' => 1, 'tipo_vacuna' => 'Parvovirus', 'fecha_aplicacion' => Carbon::now()->subMonths(6), 'fecha_vencimiento' => Carbon::now()->addMonths(6), 'veterinario_id' => 1, 'laboratorio' => 'Zoetis', 'lote' => 'ZT2024001', 'observaciones' => 'Vacuna anual aplicada'],
            ['mascota_id' => 1, 'tipo_vacuna' => 'Rabia', 'fecha_aplicacion' => Carbon::now()->subMonths(6), 'fecha_vencimiento' => Carbon::now()->addMonths(6), 'veterinario_id' => 1, 'laboratorio' => 'Zoetis', 'lote' => 'ZT2024002', 'observaciones' => null],
            ['mascota_id' => 2, 'tipo_vacuna' => 'Quintuple Canina', 'fecha_aplicacion' => Carbon::now()->subMonths(8), 'fecha_vencimiento' => Carbon::now()->addMonths(4), 'veterinario_id' => 2, 'laboratorio' => 'Virbac', 'lote' => 'VB2024001', 'observaciones' => 'Protección completa'],
            ['mascota_id' => 3, 'tipo_vacuna' => 'Parvovirus', 'fecha_aplicacion' => Carbon::now()->subMonths(10), 'fecha_vencimiento' => Carbon::now()->addMonths(2), 'veterinario_id' => 1, 'laboratorio' => 'Boehringer', 'lote' => 'BH2024003', 'observaciones' => 'Próxima a vencer'],
            ['mascota_id' => 4, 'tipo_vacuna' => 'Quintuple Canina', 'fecha_aplicacion' => Carbon::now()->subDays(1), 'fecha_vencimiento' => Carbon::now()->addMonths(12), 'veterinario_id' => 1, 'laboratorio' => 'Zoetis', 'lote' => 'ZT2025001', 'observaciones' => 'Vacunación reciente'],
            ['mascota_id' => 5, 'tipo_vacuna' => 'Rabia', 'fecha_aplicacion' => Carbon::now()->subMonths(4), 'fecha_vencimiento' => Carbon::now()->addMonths(8), 'veterinario_id' => 4, 'laboratorio' => 'Zoetis', 'lote' => 'ZT2024004', 'observaciones' => null],
            ['mascota_id' => 6, 'tipo_vacuna' => 'Parvovirus', 'fecha_aplicacion' => Carbon::now()->subMonths(5), 'fecha_vencimiento' => Carbon::now()->addMonths(7), 'veterinario_id' => 1, 'laboratorio' => 'Virbac', 'lote' => 'VB2024005', 'observaciones' => null],
            ['mascota_id' => 7, 'tipo_vacuna' => 'Puppy DP', 'fecha_aplicacion' => Carbon::now()->subDays(3), 'fecha_vencimiento' => Carbon::now()->addWeeks(3), 'veterinario_id' => 1, 'laboratorio' => 'Zoetis', 'lote' => 'ZT2025002', 'observaciones' => 'Primera dosis cachorro'],
            ['mascota_id' => 8, 'tipo_vacuna' => 'Quintuple Canina', 'fecha_aplicacion' => Carbon::now()->subMonths(3), 'fecha_vencimiento' => Carbon::now()->addMonths(9), 'veterinario_id' => 2, 'laboratorio' => 'Boehringer', 'lote' => 'BH2024006', 'observaciones' => null],
            ['mascota_id' => 9, 'tipo_vacuna' => 'Triple Felina', 'fecha_aplicacion' => Carbon::now()->subMonths(7), 'fecha_vencimiento' => Carbon::now()->addMonths(5), 'veterinario_id' => 25, 'laboratorio' => 'Virbac', 'lote' => 'VB2024007', 'observaciones' => 'Vacuna felina completa'],
            ['mascota_id' => 10, 'tipo_vacuna' => 'Leucemia Felina', 'fecha_aplicacion' => Carbon::now()->subMonths(6), 'fecha_vencimiento' => Carbon::now()->addMonths(6), 'veterinario_id' => 25, 'laboratorio' => 'Zoetis', 'lote' => 'ZT2024008', 'observaciones' => null],
            ['mascota_id' => 11, 'tipo_vacuna' => 'Triple Felina', 'fecha_aplicacion' => Carbon::now()->subMonths(4), 'fecha_vencimiento' => Carbon::now()->addMonths(8), 'veterinario_id' => 25, 'laboratorio' => 'Boehringer', 'lote' => 'BH2024009', 'observaciones' => null],
            ['mascota_id' => 12, 'tipo_vacuna' => 'Rabia Felina', 'fecha_aplicacion' => Carbon::now()->subMonths(5), 'fecha_vencimiento' => Carbon::now()->addMonths(7), 'veterinario_id' => 1, 'laboratorio' => 'Virbac', 'lote' => 'VB2024010', 'observaciones' => null],
            ['mascota_id' => 13, 'tipo_vacuna' => 'Triple Felina', 'fecha_aplicacion' => Carbon::now()->subMonths(8), 'fecha_vencimiento' => Carbon::now()->addMonths(4), 'veterinario_id' => 25, 'laboratorio' => 'Zoetis', 'lote' => 'ZT2024011', 'observaciones' => 'Necesita refuerzo'],
            ['mascota_id' => 14, 'tipo_vacuna' => 'Leucemia Felina', 'fecha_aplicacion' => Carbon::now()->subMonths(3), 'fecha_vencimiento' => Carbon::now()->addMonths(9), 'veterinario_id' => 25, 'laboratorio' => 'Virbac', 'lote' => 'VB2024012', 'observaciones' => null],
            ['mascota_id' => 18, 'tipo_vacuna' => 'Parvovirus', 'fecha_aplicacion' => Carbon::now()->subMonths(12), 'fecha_vencimiento' => Carbon::now(), 'veterinario_id' => 1, 'laboratorio' => 'Boehringer', 'lote' => 'BH2023001', 'observaciones' => 'Vencida - requiere revacunación'],
            ['mascota_id' => 19, 'tipo_vacuna' => 'Triple Felina', 'fecha_aplicacion' => Carbon::now()->subDays(1), 'fecha_vencimiento' => Carbon::now()->addMonths(12), 'veterinario_id' => 1, 'laboratorio' => 'Zoetis', 'lote' => 'ZT2025003', 'observaciones' => 'Primera vacuna aplicada'],
            ['mascota_id' => 20, 'tipo_vacuna' => 'Quintuple Canina', 'fecha_aplicacion' => Carbon::now()->subMonths(9), 'fecha_vencimiento' => Carbon::now()->addMonths(3), 'veterinario_id' => 15, 'laboratorio' => 'Virbac', 'lote' => 'VB2024013', 'observaciones' => 'Perro de raza grande'],
            ['mascota_id' => 21, 'tipo_vacuna' => 'Triple Felina', 'fecha_aplicacion' => Carbon::now()->subMonths(2), 'fecha_vencimiento' => Carbon::now()->addMonths(10), 'veterinario_id' => 3, 'laboratorio' => 'Boehringer', 'lote' => 'BH2024014', 'observaciones' => 'Gato sin pelo - cuidados especiales'],
            ['mascota_id' => 22, 'tipo_vacuna' => 'Rabia', 'fecha_aplicacion' => Carbon::now()->subMonths(1), 'fecha_vencimiento' => Carbon::now()->addMonths(11), 'veterinario_id' => 1, 'laboratorio' => 'Zoetis', 'lote' => 'ZT2024015', 'observaciones' => null],
            ['mascota_id' => 23, 'tipo_vacuna' => 'Leucemia Felina', 'fecha_aplicacion' => Carbon::now()->subMonths(6), 'fecha_vencimiento' => Carbon::now()->addMonths(6), 'veterinario_id' => 25, 'laboratorio' => 'Virbac', 'lote' => 'VB2024016', 'observaciones' => 'Gata abisinia - seguimiento especial'],
            ['mascota_id' => 24, 'tipo_vacuna' => 'Quintuple Canina', 'fecha_aplicacion' => Carbon::now()->subMonths(11), 'fecha_vencimiento' => Carbon::now()->addMonths(1), 'veterinario_id' => 1, 'laboratorio' => 'Boehringer', 'lote' => 'BH2024017', 'observaciones' => 'Requiere refuerzo pronto'],
            ['mascota_id' => 1, 'tipo_vacuna' => 'Bordetella', 'fecha_aplicacion' => Carbon::now()->subMonths(6), 'fecha_vencimiento' => Carbon::now()->addMonths(6), 'veterinario_id' => 1, 'laboratorio' => 'Zoetis', 'lote' => 'ZT2024018', 'observaciones' => 'Vacuna adicional respiratoria'],
            ['mascota_id' => 2, 'tipo_vacuna' => 'Rabia', 'fecha_aplicacion' => Carbon::now()->subMonths(8), 'fecha_vencimiento' => Carbon::now()->addMonths(4), 'veterinario_id' => 2, 'laboratorio' => 'Virbac', 'lote' => 'VB2024019', 'observaciones' => null]
        ];

        foreach ($vacunas as $vacuna) {
            DB::table('registro_vacunas')->insert([
                'mascota_id' => $vacuna['mascota_id'],
                'tipo_vacuna' => $vacuna['tipo_vacuna'],
                'fecha_aplicacion' => $vacuna['fecha_aplicacion'],
                'fecha_vencimiento' => $vacuna['fecha_vencimiento'],
                'veterinario_id' => $vacuna['veterinario_id'],
                'laboratorio' => $vacuna['laboratorio'],
                'lote' => $vacuna['lote'],
                'observaciones' => $vacuna['observaciones'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
