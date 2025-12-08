<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistroVacunasSeeder extends Seeder
{
    public function run()
    {
        $vacunas = [
            [
                'mascota_id' => 1,
                'nombre_vacuna' => 'Rabia',
                'fecha_aplicacion' => '2024-01-15',
                'fecha_vencimiento' => '2025-01-15',
                'lote' => 'RAB001',
                'veterinario_id' => 1,
                'observaciones' => 'Primera aplicación anual'
            ],
            [
                'mascota_id' => 2,
                'nombre_vacuna' => 'Moquillo',
                'fecha_aplicacion' => '2024-01-16',
                'fecha_vencimiento' => '2025-01-16',
                'lote' => 'MOQ001',
                'veterinario_id' => 2,
                'observaciones' => 'Vacuna contra moquillo canino'
            ],
            [
                'mascota_id' => 3,
                'nombre_vacuna' => 'Parvovirus',
                'fecha_aplicacion' => '2024-01-17',
                'fecha_vencimiento' => '2025-01-17',
                'lote' => 'PAR001',
                'veterinario_id' => 1,
                'observaciones' => 'Vacuna contra parvovirus'
            ],
            [
                'mascota_id' => 4,
                'nombre_vacuna' => 'Quintuple Canina',
                'fecha_aplicacion' => '2024-01-18',
                'fecha_vencimiento' => '2025-01-18',
                'lote' => 'QUI001',
                'veterinario_id' => 2,
                'observaciones' => 'Protección integral'
            ],
            [
                'mascota_id' => 5,
                'nombre_vacuna' => 'Rabia',
                'fecha_aplicacion' => '2024-01-19',
                'fecha_vencimiento' => '2025-01-19',
                'lote' => 'RAB002',
                'veterinario_id' => 1,
                'observaciones' => 'Refuerzo anual'
            ],
            [
                'mascota_id' => 6,
                'nombre_vacuna' => 'Triple Felina',
                'fecha_aplicacion' => '2024-01-20',
                'fecha_vencimiento' => '2025-01-20',
                'lote' => 'TRI001',
                'veterinario_id' => 3,
                'observaciones' => 'Vacuna para gatos'
            ],
            [
                'mascota_id' => 7,
                'nombre_vacuna' => 'Leucemia Felina',
                'fecha_aplicacion' => '2024-01-21',
                'fecha_vencimiento' => '2025-01-21',
                'lote' => 'LEU001',
                'veterinario_id' => 3,
                'observaciones' => 'Prevención leucemia felina'
            ],
            [
                'mascota_id' => 8,
                'nombre_vacuna' => 'Moquillo',
                'fecha_aplicacion' => '2024-01-22',
                'fecha_vencimiento' => '2025-01-22',
                'lote' => 'MOQ002',
                'veterinario_id' => 2,
                'observaciones' => null
            ],
            [
                'mascota_id' => 9,
                'nombre_vacuna' => 'Parvovirus',
                'fecha_aplicacion' => '2024-01-23',
                'fecha_vencimiento' => '2025-01-23',
                'lote' => 'PAR002',
                'veterinario_id' => 1,
                'observaciones' => 'Segunda aplicación'
            ],
            [
                'mascota_id' => 10,
                'nombre_vacuna' => 'Rabia',
                'fecha_aplicacion' => '2024-01-24',
                'fecha_vencimiento' => '2025-01-24',
                'lote' => 'RAB003',
                'veterinario_id' => 2,
                'observaciones' => null
            ],
            [
                'mascota_id' => 11,
                'nombre_vacuna' => 'Triple Felina',
                'fecha_aplicacion' => '2024-01-25',
                'fecha_vencimiento' => '2025-01-25',
                'lote' => 'TRI002',
                'veterinario_id' => 3,
                'observaciones' => 'Vacunación completa'
            ],
            [
                'mascota_id' => 12,
                'nombre_vacuna' => 'Quintuple Canina',
                'fecha_aplicacion' => '2024-01-26',
                'fecha_vencimiento' => '2025-01-26',
                'lote' => 'QUI002',
                'veterinario_id' => 1,
                'observaciones' => 'Prevención múltiple'
            ],
            [
                'mascota_id' => 13,
                'nombre_vacuna' => 'Leucemia Felina',
                'fecha_aplicacion' => '2024-01-27',
                'fecha_vencimiento' => '2025-01-27',
                'lote' => 'LEU002',
                'veterinario_id' => 3,
                'observaciones' => null
            ],
            [
                'mascota_id' => 14,
                'nombre_vacuna' => 'Rabia',
                'fecha_aplicacion' => '2024-01-28',
                'fecha_vencimiento' => '2025-01-28',
                'lote' => 'RAB004',
                'veterinario_id' => 2,
                'observaciones' => 'Control obligatorio'
            ],
            [
                'mascota_id' => 15,
                'nombre_vacuna' => 'Moquillo',
                'fecha_aplicacion' => '2024-01-29',
                'fecha_vencimiento' => '2025-01-29',
                'lote' => 'MOQ003',
                'veterinario_id' => 1,
                'observaciones' => null
            ],
            [
                'mascota_id' => 16,
                'nombre_vacuna' => 'Parvovirus',
                'fecha_aplicacion' => '2024-01-30',
                'fecha_vencimiento' => '2025-01-30',
                'lote' => 'PAR003',
                'veterinario_id' => 2,
                'observaciones' => 'Dosis de refuerzo'
            ],
            [
                'mascota_id' => 17,
                'nombre_vacuna' => 'Triple Felina',
                'fecha_aplicacion' => '2024-01-31',
                'fecha_vencimiento' => '2025-01-31',
                'lote' => 'TRI003',
                'veterinario_id' => 3,
                'observaciones' => null
            ],
            [
                'mascota_id' => 18,
                'nombre_vacuna' => 'Quintuple Canina',
                'fecha_aplicacion' => '2024-02-01',
                'fecha_vencimiento' => '2025-02-01',
                'lote' => 'QUI003',
                'veterinario_id' => 1,
                'observaciones' => 'Vacunación anual'
            ],
            [
                'mascota_id' => 19,
                'nombre_vacuna' => 'Rabia',
                'fecha_aplicacion' => '2024-02-02',
                'fecha_vencimiento' => '2025-02-02',
                'lote' => 'RAB005',
                'veterinario_id' => 2,
                'observaciones' => null
            ],
            [
                'mascota_id' => 20,
                'nombre_vacuna' => 'Leucemia Felina',
                'fecha_aplicacion' => '2024-02-03',
                'fecha_vencimiento' => '2025-02-03',
                'lote' => 'LEU003',
                'veterinario_id' => 3,
                'observaciones' => 'Vacuna especializada'
            ],
            [
                'mascota_id' => 1,
                'nombre_vacuna' => 'Moquillo',
                'fecha_aplicacion' => '2024-02-04',
                'fecha_vencimiento' => '2025-02-04',
                'lote' => 'MOQ004',
                'veterinario_id' => 1,
                'observaciones' => 'Segunda vacuna del año'
            ],
            [
                'mascota_id' => 2,
                'nombre_vacuna' => 'Parvovirus',
                'fecha_aplicacion' => '2024-02-05',
                'fecha_vencimiento' => '2025-02-05',
                'lote' => 'PAR004',
                'veterinario_id' => 2,
                'observaciones' => null
            ],
            [
                'mascota_id' => 3,
                'nombre_vacuna' => 'Quintuple Canina',
                'fecha_aplicacion' => '2024-02-06',
                'fecha_vencimiento' => '2025-02-06',
                'lote' => 'QUI004',
                'veterinario_id' => 1,
                'observaciones' => 'Protección completa'
            ],
            [
                'mascota_id' => 4,
                'nombre_vacuna' => 'Rabia',
                'fecha_aplicacion' => '2024-02-07',
                'fecha_vencimiento' => '2025-02-07',
                'lote' => 'RAB006',
                'veterinario_id' => 2,
                'observaciones' => 'Refuerzo adicional'
            ],
            [
                'mascota_id' => 5,
                'nombre_vacuna' => 'Triple Felina',
                'fecha_aplicacion' => '2024-02-08',
                'fecha_vencimiento' => '2025-02-08',
                'lote' => 'TRI004',
                'veterinario_id' => 3,
                'observaciones' => null
            ]
        ];

        DB::table('registro_vacunas')->insert($vacunas);
    }
}
