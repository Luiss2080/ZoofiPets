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
                'empleado_id' => 1,
                'servicio_medico_id' => 1,
                'vacuna' => 'Rabia',
                'laboratorio' => 'Zoetis',
                'lote' => 'RAB001',
                'fecha_aplicacion' => '2024-01-15',
                'proxima_dosis' => '2025-01-15',
                'observaciones' => 'Primera aplicación anual',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 2,
                'empleado_id' => 2,
                'servicio_medico_id' => 2,
                'vacuna' => 'Moquillo',
                'laboratorio' => 'Virbac',
                'lote' => 'MOQ001',
                'fecha_aplicacion' => '2024-01-16',
                'proxima_dosis' => '2025-01-16',
                'observaciones' => 'Vacuna contra moquillo canino',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 3,
                'empleado_id' => 1,
                'servicio_medico_id' => 1,
                'vacuna' => 'Parvovirus',
                'laboratorio' => 'Boehringer',
                'lote' => 'PAR001',
                'fecha_aplicacion' => '2024-01-17',
                'proxima_dosis' => '2025-01-17',
                'observaciones' => 'Vacuna contra parvovirus',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 4,
                'empleado_id' => 2,
                'servicio_medico_id' => 3,
                'vacuna' => 'Quintuple Canina',
                'laboratorio' => 'Zoetis',
                'lote' => 'QUI001',
                'fecha_aplicacion' => '2024-01-18',
                'proxima_dosis' => '2025-01-18',
                'observaciones' => 'Protección integral',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 5,
                'empleado_id' => 1,
                'servicio_medico_id' => 1,
                'vacuna' => 'Rabia',
                'laboratorio' => 'Virbac',
                'lote' => 'RAB002',
                'fecha_aplicacion' => '2024-01-19',
                'proxima_dosis' => '2025-01-19',
                'observaciones' => 'Refuerzo anual',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 6,
                'empleado_id' => 3,
                'servicio_medico_id' => 4,
                'vacuna' => 'Triple Felina',
                'laboratorio' => 'Zoetis',
                'lote' => 'TRI001',
                'fecha_aplicacion' => '2024-01-20',
                'proxima_dosis' => '2025-01-20',
                'observaciones' => 'Vacuna para gatos',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 7,
                'empleado_id' => 3,
                'servicio_medico_id' => 4,
                'vacuna' => 'Leucemia Felina',
                'laboratorio' => 'Boehringer',
                'lote' => 'LEU001',
                'fecha_aplicacion' => '2024-01-21',
                'proxima_dosis' => '2025-01-21',
                'observaciones' => 'Prevención leucemia felina',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 8,
                'empleado_id' => 2,
                'servicio_medico_id' => 2,
                'vacuna' => 'Moquillo',
                'laboratorio' => 'Virbac',
                'lote' => 'MOQ002',
                'fecha_aplicacion' => '2024-01-22',
                'proxima_dosis' => '2025-01-22',
                'observaciones' => null,
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 9,
                'empleado_id' => 1,
                'servicio_medico_id' => 1,
                'vacuna' => 'Parvovirus',
                'laboratorio' => 'Zoetis',
                'lote' => 'PAR002',
                'fecha_aplicacion' => '2024-01-23',
                'proxima_dosis' => '2025-01-23',
                'observaciones' => 'Segunda aplicación',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 10,
                'empleado_id' => 2,
                'servicio_medico_id' => 1,
                'vacuna' => 'Rabia',
                'laboratorio' => 'Boehringer',
                'lote' => 'RAB003',
                'fecha_aplicacion' => '2024-01-24',
                'proxima_dosis' => '2025-01-24',
                'observaciones' => null,
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 11,
                'empleado_id' => 3,
                'servicio_medico_id' => 4,
                'vacuna' => 'Triple Felina',
                'laboratorio' => 'Virbac',
                'lote' => 'TRI002',
                'fecha_aplicacion' => '2024-01-25',
                'proxima_dosis' => '2025-01-25',
                'observaciones' => 'Vacunación completa',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 12,
                'empleado_id' => 1,
                'servicio_medico_id' => 3,
                'vacuna' => 'Quintuple Canina',
                'laboratorio' => 'Zoetis',
                'lote' => 'QUI002',
                'fecha_aplicacion' => '2024-01-26',
                'proxima_dosis' => '2025-01-26',
                'observaciones' => 'Prevención múltiple',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 13,
                'empleado_id' => 3,
                'servicio_medico_id' => 4,
                'vacuna' => 'Leucemia Felina',
                'laboratorio' => 'Boehringer',
                'lote' => 'LEU002',
                'fecha_aplicacion' => '2024-01-27',
                'proxima_dosis' => '2025-01-27',
                'observaciones' => null,
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 14,
                'empleado_id' => 2,
                'servicio_medico_id' => 1,
                'vacuna' => 'Rabia',
                'laboratorio' => 'Virbac',
                'lote' => 'RAB004',
                'fecha_aplicacion' => '2024-01-28',
                'proxima_dosis' => '2025-01-28',
                'observaciones' => 'Control obligatorio',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 15,
                'empleado_id' => 1,
                'servicio_medico_id' => 2,
                'vacuna' => 'Moquillo',
                'laboratorio' => 'Zoetis',
                'lote' => 'MOQ003',
                'fecha_aplicacion' => '2024-01-29',
                'proxima_dosis' => '2025-01-29',
                'observaciones' => null,
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 16,
                'empleado_id' => 2,
                'servicio_medico_id' => 1,
                'vacuna' => 'Parvovirus',
                'laboratorio' => 'Boehringer',
                'lote' => 'PAR003',
                'fecha_aplicacion' => '2024-01-30',
                'proxima_dosis' => '2025-01-30',
                'observaciones' => 'Dosis de refuerzo',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 17,
                'empleado_id' => 3,
                'servicio_medico_id' => 4,
                'vacuna' => 'Triple Felina',
                'laboratorio' => 'Virbac',
                'lote' => 'TRI003',
                'fecha_aplicacion' => '2024-01-31',
                'proxima_dosis' => '2025-01-31',
                'observaciones' => null,
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 18,
                'empleado_id' => 1,
                'servicio_medico_id' => 3,
                'vacuna' => 'Quintuple Canina',
                'laboratorio' => 'Zoetis',
                'lote' => 'QUI003',
                'fecha_aplicacion' => '2024-02-01',
                'proxima_dosis' => '2025-02-01',
                'observaciones' => 'Vacunación anual',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 19,
                'empleado_id' => 2,
                'servicio_medico_id' => 1,
                'vacuna' => 'Rabia',
                'laboratorio' => 'Boehringer',
                'lote' => 'RAB005',
                'fecha_aplicacion' => '2024-02-02',
                'proxima_dosis' => '2025-02-02',
                'observaciones' => null,
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 20,
                'empleado_id' => 3,
                'servicio_medico_id' => 4,
                'vacuna' => 'Leucemia Felina',
                'laboratorio' => 'Virbac',
                'lote' => 'LEU003',
                'fecha_aplicacion' => '2024-02-03',
                'proxima_dosis' => '2025-02-03',
                'observaciones' => 'Vacuna especializada',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 1,
                'empleado_id' => 1,
                'servicio_medico_id' => 2,
                'vacuna' => 'Moquillo',
                'laboratorio' => 'Zoetis',
                'lote' => 'MOQ004',
                'fecha_aplicacion' => '2024-02-04',
                'proxima_dosis' => '2025-02-04',
                'observaciones' => 'Segunda vacuna del año',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 2,
                'empleado_id' => 2,
                'servicio_medico_id' => 1,
                'vacuna' => 'Parvovirus',
                'laboratorio' => 'Boehringer',
                'lote' => 'PAR004',
                'fecha_aplicacion' => '2024-02-05',
                'proxima_dosis' => '2025-02-05',
                'observaciones' => null,
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 3,
                'empleado_id' => 1,
                'servicio_medico_id' => 3,
                'vacuna' => 'Quintuple Canina',
                'laboratorio' => 'Virbac',
                'lote' => 'QUI004',
                'fecha_aplicacion' => '2024-02-06',
                'proxima_dosis' => '2025-02-06',
                'observaciones' => 'Protección completa',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 4,
                'empleado_id' => 2,
                'servicio_medico_id' => 1,
                'vacuna' => 'Rabia',
                'laboratorio' => 'Zoetis',
                'lote' => 'RAB006',
                'fecha_aplicacion' => '2024-02-07',
                'proxima_dosis' => '2025-02-07',
                'observaciones' => 'Refuerzo adicional',
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ],
            [
                'mascota_id' => 5,
                'empleado_id' => 3,
                'servicio_medico_id' => 4,
                'vacuna' => 'Triple Felina',
                'laboratorio' => 'Boehringer',
                'lote' => 'TRI004',
                'fecha_aplicacion' => '2024-02-08',
                'proxima_dosis' => '2025-02-08',
                'observaciones' => null,
                'reaccion_adversa' => false,
                'descripcion_reaccion' => null
            ]
        ];

        DB::table('registro_vacunas')->insert($vacunas);
    }
}
