<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlertasStockSeeder extends Seeder
{
    public function run()
    {
        $alertas = [
            [
                'producto_id' => 1,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 5,
                'stock_minimo' => 10,
                'notificado' => true,
                'fecha_alerta' => '2024-01-15 08:30:00'
            ],
            [
                'producto_id' => 2,
                'tipo_alerta' => 'stock_agotado',
                'stock_actual' => 0,
                'stock_minimo' => 5,
                'notificado' => true,
                'fecha_alerta' => '2024-01-16 09:15:00'
            ],
            [
                'producto_id' => 3,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 3,
                'stock_minimo' => 8,
                'notificado' => false,
                'fecha_alerta' => '2024-01-17 10:00:00'
            ],
            [
                'producto_id' => 4,
                'tipo_alerta' => 'stock_critico',
                'stock_actual' => 1,
                'stock_minimo' => 5,
                'notificado' => true,
                'fecha_alerta' => '2024-01-18 11:20:00'
            ],
            [
                'producto_id' => 5,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 4,
                'stock_minimo' => 10,
                'notificado' => false,
                'fecha_alerta' => '2024-01-19 12:45:00'
            ],
            [
                'producto_id' => 6,
                'tipo_alerta' => 'stock_agotado',
                'stock_actual' => 0,
                'stock_minimo' => 3,
                'notificado' => true,
                'fecha_alerta' => '2024-01-20 14:10:00'
            ],
            [
                'producto_id' => 7,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 2,
                'stock_minimo' => 7,
                'notificado' => false,
                'fecha_alerta' => '2024-01-21 15:30:00'
            ],
            [
                'producto_id' => 8,
                'tipo_alerta' => 'stock_critico',
                'stock_actual' => 1,
                'stock_minimo' => 4,
                'notificado' => true,
                'fecha_alerta' => '2024-01-22 16:15:00'
            ],
            [
                'producto_id' => 9,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 3,
                'stock_minimo' => 10,
                'notificado' => false,
                'fecha_alerta' => '2024-01-23 08:45:00'
            ],
            [
                'producto_id' => 10,
                'tipo_alerta' => 'stock_agotado',
                'stock_actual' => 0,
                'stock_minimo' => 6,
                'notificado' => true,
                'fecha_alerta' => '2024-01-24 09:30:00'
            ],
            [
                'producto_id' => 11,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 2,
                'stock_minimo' => 8,
                'notificado' => false,
                'fecha_alerta' => '2024-01-25 10:20:00'
            ],
            [
                'producto_id' => 12,
                'tipo_alerta' => 'stock_critico',
                'stock_actual' => 1,
                'stock_minimo' => 5,
                'notificado' => true,
                'fecha_alerta' => '2024-01-26 11:15:00'
            ],
            [
                'producto_id' => 13,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 4,
                'stock_minimo' => 12,
                'notificado' => false,
                'fecha_alerta' => '2024-01-27 13:25:00'
            ],
            [
                'producto_id' => 14,
                'tipo_alerta' => 'stock_agotado',
                'stock_actual' => 0,
                'stock_minimo' => 4,
                'notificado' => true,
                'fecha_alerta' => '2024-01-28 14:40:00'
            ],
            [
                'producto_id' => 15,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 3,
                'stock_minimo' => 9,
                'notificado' => false,
                'fecha_alerta' => '2024-01-29 15:55:00'
            ],
            [
                'producto_id' => 16,
                'tipo_alerta' => 'stock_critico',
                'stock_actual' => 1,
                'stock_minimo' => 6,
                'notificado' => true,
                'fecha_alerta' => '2024-01-30 16:30:00'
            ],
            [
                'producto_id' => 17,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 5,
                'stock_minimo' => 15,
                'notificado' => false,
                'fecha_alerta' => '2024-01-31 08:20:00'
            ],
            [
                'producto_id' => 18,
                'tipo_alerta' => 'stock_agotado',
                'stock_actual' => 0,
                'stock_minimo' => 7,
                'notificado' => true,
                'fecha_alerta' => '2024-02-01 09:45:00'
            ],
            [
                'producto_id' => 19,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 2,
                'stock_minimo' => 8,
                'notificado' => false,
                'fecha_alerta' => '2024-02-02 10:35:00'
            ],
            [
                'producto_id' => 20,
                'tipo_alerta' => 'stock_critico',
                'stock_actual' => 1,
                'stock_minimo' => 5,
                'notificado' => true,
                'fecha_alerta' => '2024-02-03 11:50:00'
            ],
            [
                'producto_id' => 1,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 4,
                'stock_minimo' => 10,
                'notificado' => false,
                'fecha_alerta' => '2024-02-04 13:15:00'
            ],
            [
                'producto_id' => 2,
                'tipo_alerta' => 'stock_agotado',
                'stock_actual' => 0,
                'stock_minimo' => 5,
                'notificado' => true,
                'fecha_alerta' => '2024-02-05 14:25:00'
            ],
            [
                'producto_id' => 3,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 3,
                'stock_minimo' => 8,
                'notificado' => false,
                'fecha_alerta' => '2024-02-06 15:40:00'
            ],
            [
                'producto_id' => 4,
                'tipo_alerta' => 'stock_critico',
                'stock_actual' => 1,
                'stock_minimo' => 5,
                'notificado' => true,
                'fecha_alerta' => '2024-02-07 16:55:00'
            ],
            [
                'producto_id' => 5,
                'tipo_alerta' => 'stock_bajo',
                'stock_actual' => 6,
                'stock_minimo' => 10,
                'notificado' => false,
                'fecha_alerta' => '2024-02-08 08:10:00'
            ]
        ];

        DB::table('alertas_stock')->insert($alertas);
    }
}
