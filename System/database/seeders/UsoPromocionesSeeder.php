<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsoPromocionesSeeder extends Seeder
{
    public function run()
    {
        $usoPromociones = [
            [
                'promocion_id' => 1,
                'venta_id' => 1,
                'cliente_id' => 1,
                'descuento_aplicado' => 15.85,
                'created_at' => '2024-01-15 10:30:00',
                'updated_at' => '2024-01-15 10:30:00'
            ],
            [
                'promocion_id' => 2,
                'venta_id' => 2,
                'cliente_id' => 3,
                'descuento_aplicado' => 26.29,
                'created_at' => '2024-01-16 11:15:00',
                'updated_at' => '2024-01-16 11:15:00'
            ],
            [
                'promocion_id' => 1,
                'venta_id' => 3,
                'cliente_id' => 5,
                'descuento_aplicado' => 9.13,
                'created_at' => '2024-01-17 14:20:00',
                'updated_at' => '2024-01-17 14:20:00'
            ],
            [
                'promocion_id' => 3,
                'venta_id' => 4,
                'cliente_id' => 2,
                'descuento_aplicado' => 44.58,
                'created_at' => '2024-01-18 09:45:00',
                'updated_at' => '2024-01-18 09:45:00'
            ],
            [
                'promocion_id' => 2,
                'venta_id' => 5,
                'cliente_id' => 7,
                'descuento_aplicado' => 6.78,
                'created_at' => '2024-01-19 16:10:00',
                'updated_at' => '2024-01-19 16:10:00'
            ],
            [
                'promocion_id' => 1,
                'venta_id' => 6,
                'cliente_id' => 4,
                'descuento_aplicado' => 20.35,
                'created_at' => '2024-01-20 13:25:00',
                'updated_at' => '2024-01-20 13:25:00'
            ],
            [
                'promocion_id' => 4,
                'venta_id' => 7,
                'cliente_id' => 8,
                'descuento_aplicado' => 12.49,
                'created_at' => '2024-01-21 12:00:00',
                'updated_at' => '2024-01-21 12:00:00'
            ],
            [
                'promocion_id' => 3,
                'venta_id' => 8,
                'cliente_id' => 6,
                'descuento_aplicado' => 38.96,
                'created_at' => '2024-01-22 15:30:00',
                'updated_at' => '2024-01-22 15:30:00'
            ],
            [
                'promocion_id' => 2,
                'venta_id' => 9,
                'cliente_id' => 10,
                'descuento_aplicado' => 7.83,
                'created_at' => '2024-01-23 10:15:00',
                'updated_at' => '2024-01-23 10:15:00'
            ],
            [
                'promocion_id' => 1,
                'venta_id' => 10,
                'cliente_id' => 9,
                'descuento_aplicado' => 55.64,
                'created_at' => '2024-01-24 11:45:00',
                'updated_at' => '2024-01-24 11:45:00'
            ],
            [
                'promocion_id' => 5,
                'venta_id' => 11,
                'cliente_id' => 12,
                'descuento_aplicado' => 13.48,
                'created_at' => '2024-01-25 14:50:00',
                'updated_at' => '2024-01-25 14:50:00'
            ],
            [
                'promocion_id' => 3,
                'venta_id' => 12,
                'cliente_id' => 11,
                'descuento_aplicado' => 24.53,
                'created_at' => '2024-01-26 09:20:00',
                'updated_at' => '2024-01-26 09:20:00'
            ],
            [
                'promocion_id' => 2,
                'venta_id' => 13,
                'cliente_id' => 15,
                'descuento_aplicado' => 16.79,
                'created_at' => '2024-01-27 16:35:00',
                'updated_at' => '2024-01-27 16:35:00'
            ],
            [
                'promocion_id' => 4,
                'venta_id' => 14,
                'cliente_id' => 13,
                'descuento_aplicado' => 9.85,
                'created_at' => '2024-01-28 13:10:00',
                'updated_at' => '2024-01-28 13:10:00'
            ],
            [
                'promocion_id' => 1,
                'venta_id' => 15,
                'cliente_id' => 17,
                'descuento_aplicado' => 31.30,
                'created_at' => '2024-01-29 15:40:00',
                'updated_at' => '2024-01-29 15:40:00'
            ],
            [
                'promocion_id' => 5,
                'venta_id' => 16,
                'cliente_id' => 14,
                'descuento_aplicado' => 42.36,
                'created_at' => '2024-01-30 10:55:00',
                'updated_at' => '2024-01-30 10:55:00'
            ],
            [
                'promocion_id' => 3,
                'venta_id' => 17,
                'cliente_id' => 19,
                'descuento_aplicado' => 18.94,
                'created_at' => '2024-01-31 12:25:00',
                'updated_at' => '2024-01-31 12:25:00'
            ],
            [
                'promocion_id' => 2,
                'venta_id' => 18,
                'cliente_id' => 16,
                'descuento_aplicado' => 7.68,
                'created_at' => '2024-02-01 14:15:00',
                'updated_at' => '2024-02-01 14:15:00'
            ],
            [
                'promocion_id' => 4,
                'venta_id' => 19,
                'cliente_id' => 20,
                'descuento_aplicado' => 28.73,
                'created_at' => '2024-02-02 11:30:00',
                'updated_at' => '2024-02-02 11:30:00'
            ],
            [
                'promocion_id' => 1,
                'venta_id' => 20,
                'cliente_id' => 18,
                'descuento_aplicado' => 14.59,
                'created_at' => '2024-02-03 16:45:00',
                'updated_at' => '2024-02-03 16:45:00'
            ]
        ];

        DB::table('uso_promociones')->insert($usoPromociones);
    }
}
