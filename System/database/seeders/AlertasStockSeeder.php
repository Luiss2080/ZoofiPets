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
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 5,
                'stock_minimo' => 10,
                'fecha_vencimiento' => null,
                'notificado' => true,
                'fecha_notificacion' => '2024-01-15 08:30:00',
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => 'Stock por debajo del mínimo establecido'
            ],
            [
                'producto_id' => 2,
                'tipo_alerta' => 'Stock_Agotado',
                'stock_actual' => 0,
                'stock_minimo' => 5,
                'fecha_vencimiento' => null,
                'notificado' => true,
                'fecha_notificacion' => '2024-01-16 09:15:00',
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => 'Producto completamente agotado'
            ],
            [
                'producto_id' => 3,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 3,
                'stock_minimo' => 8,
                'fecha_vencimiento' => null,
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => null
            ],
            [
                'producto_id' => 4,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 1,
                'stock_minimo' => 5,
                'fecha_vencimiento' => null,
                'notificado' => true,
                'fecha_notificacion' => '2024-01-18 11:20:00',
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => 'Stock crítico - necesaria reposición urgente'
            ],
            [
                'producto_id' => 5,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 4,
                'stock_minimo' => 10,
                'fecha_vencimiento' => null,
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => null
            ],
            [
                'producto_id' => 6,
                'tipo_alerta' => 'Stock_Agotado',
                'stock_actual' => 0,
                'stock_minimo' => 3,
                'fecha_vencimiento' => null,
                'notificado' => true,
                'fecha_notificacion' => '2024-01-20 14:10:00',
                'resuelto' => true,
                'fecha_resolucion' => '2024-01-25 08:30:00',
                'observaciones' => 'Reabastecido el 25/01'
            ],
            [
                'producto_id' => 7,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 2,
                'stock_minimo' => 7,
                'fecha_vencimiento' => null,
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => true,
                'fecha_resolucion' => '2024-01-26 09:45:00',
                'observaciones' => 'Reabastecido el 26/01'
            ],
            [
                'producto_id' => 8,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 1,
                'stock_minimo' => 4,
                'fecha_vencimiento' => null,
                'notificado' => true,
                'fecha_notificacion' => '2024-01-22 16:15:00',
                'resuelto' => true,
                'fecha_resolucion' => '2024-01-27 10:20:00',
                'observaciones' => 'Reabastecido el 27/01'
            ],
            [
                'producto_id' => 9,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 3,
                'stock_minimo' => 10,
                'fecha_vencimiento' => null,
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => true,
                'fecha_resolucion' => '2024-02-03 10:15:00',
                'observaciones' => 'Reabastecido el 03/02'
            ],
            [
                'producto_id' => 10,
                'tipo_alerta' => 'Stock_Agotado',
                'stock_actual' => 0,
                'stock_minimo' => 6,
                'fecha_vencimiento' => null,
                'notificado' => true,
                'fecha_notificacion' => '2024-01-24 09:30:00',
                'resuelto' => true,
                'fecha_resolucion' => '2024-02-04 11:00:00',
                'observaciones' => 'Reabastecido el 04/02'
            ],
            [
                'producto_id' => 11,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 2,
                'stock_minimo' => 8,
                'fecha_vencimiento' => null,
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => null
            ],
            [
                'producto_id' => 12,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 1,
                'stock_minimo' => 5,
                'fecha_vencimiento' => null,
                'notificado' => true,
                'fecha_notificacion' => '2024-01-26 11:15:00',
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => 'Pendiente de reabastecimiento'
            ],
            [
                'producto_id' => 13,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 4,
                'stock_minimo' => 12,
                'fecha_vencimiento' => null,
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => null
            ],
            [
                'producto_id' => 14,
                'tipo_alerta' => 'Stock_Agotado',
                'stock_actual' => 0,
                'stock_minimo' => 4,
                'fecha_vencimiento' => null,
                'notificado' => true,
                'fecha_notificacion' => '2024-01-28 14:40:00',
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => 'Producto agotado desde el 28/01'
            ],
            [
                'producto_id' => 15,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 3,
                'stock_minimo' => 9,
                'fecha_vencimiento' => null,
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => null
            ],
            [
                'producto_id' => 16,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 1,
                'stock_minimo' => 6,
                'fecha_vencimiento' => null,
                'notificado' => true,
                'fecha_notificacion' => '2024-01-30 16:30:00',
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => 'Stock crítico'
            ],
            [
                'producto_id' => 17,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 5,
                'stock_minimo' => 15,
                'fecha_vencimiento' => null,
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => null
            ],
            [
                'producto_id' => 18,
                'tipo_alerta' => 'Stock_Agotado',
                'stock_actual' => 0,
                'stock_minimo' => 7,
                'fecha_vencimiento' => null,
                'notificado' => true,
                'fecha_notificacion' => '2024-02-01 09:45:00',
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => 'Producto agotado'
            ],
            [
                'producto_id' => 19,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 2,
                'stock_minimo' => 8,
                'fecha_vencimiento' => null,
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => null
            ],
            [
                'producto_id' => 20,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 1,
                'stock_minimo' => 5,
                'fecha_vencimiento' => null,
                'notificado' => true,
                'fecha_notificacion' => '2024-02-03 11:50:00',
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => 'Stock crítico urgente'
            ],
            [
                'producto_id' => 1,
                'tipo_alerta' => 'Proximo_Vencimiento',
                'stock_actual' => 63,
                'stock_minimo' => 10,
                'fecha_vencimiento' => '2024-03-15',
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => 'Lote FC001 próximo a vencer'
            ],
            [
                'producto_id' => 2,
                'tipo_alerta' => 'Proximo_Vencimiento',
                'stock_actual' => 43,
                'stock_minimo' => 5,
                'fecha_vencimiento' => '2024-03-16',
                'notificado' => true,
                'fecha_notificacion' => '2024-02-05 14:25:00',
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => 'Lote FC002 próximo a vencer'
            ],
            [
                'producto_id' => 8,
                'tipo_alerta' => 'Proximo_Vencimiento',
                'stock_actual' => 29,
                'stock_minimo' => 4,
                'fecha_vencimiento' => '2024-04-27',
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => 'Medicamentos próximos a vencer'
            ],
            [
                'producto_id' => 5,
                'tipo_alerta' => 'Stock_Minimo',
                'stock_actual' => 6,
                'stock_minimo' => 10,
                'fecha_vencimiento' => null,
                'notificado' => false,
                'fecha_notificacion' => null,
                'resuelto' => false,
                'fecha_resolucion' => null,
                'observaciones' => null
            ]
        ];

        DB::table('alertas_stock')->insert($alertas);
    }
}
