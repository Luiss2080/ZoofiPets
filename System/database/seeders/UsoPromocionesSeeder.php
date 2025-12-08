<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsoPromocionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usos = [
            ['promocion_id' => 1, 'cliente_id' => 1, 'venta_id' => 5, 'fecha_uso' => Carbon::now()->subDays(1), 'descuento_aplicado' => 31.87],
            ['promocion_id' => 2, 'cliente_id' => 3, 'venta_id' => 8, 'fecha_uso' => Carbon::now()->subDays(7), 'descuento_aplicado' => 23.30],
            ['promocion_id' => 3, 'cliente_id' => 5, 'venta_id' => 10, 'fecha_uso' => Carbon::now()->subDays(9), 'descuento_aplicado' => 38.66],
            ['promocion_id' => 4, 'cliente_id' => 7, 'venta_id' => 11, 'fecha_uso' => Carbon::now()->subDays(10), 'descuento_aplicado' => 17.08],
            ['promocion_id' => 5, 'cliente_id' => 2, 'venta_id' => 13, 'fecha_uso' => Carbon::now()->subDays(12), 'descuento_aplicado' => 29.55],
            ['promocion_id' => 6, 'cliente_id' => 4, 'venta_id' => 16, 'fecha_uso' => Carbon::now()->subDays(15), 'descuento_aplicado' => 25.00],
            ['promocion_id' => 7, 'cliente_id' => 8, 'venta_id' => 20, 'fecha_uso' => Carbon::now()->subDays(19), 'descuento_aplicado' => 15.00],
            ['promocion_id' => 8, 'cliente_id' => 10, 'venta_id' => 22, 'fecha_uso' => Carbon::now()->subDays(21), 'descuento_aplicado' => 10.00],
            ['promocion_id' => 1, 'cliente_id' => 12, 'venta_id' => null, 'fecha_uso' => Carbon::now()->subDays(3), 'descuento_aplicado' => 0.00],
            ['promocion_id' => 2, 'cliente_id' => 14, 'venta_id' => null, 'fecha_uso' => Carbon::now()->subDays(5), 'descuento_aplicado' => 0.00],
            ['promocion_id' => 9, 'cliente_id' => 6, 'venta_id' => 18, 'fecha_uso' => Carbon::now()->subDays(17), 'descuento_aplicado' => 20.00],
            ['promocion_id' => 10, 'cliente_id' => 9, 'venta_id' => 14, 'fecha_uso' => Carbon::now()->subDays(13), 'descuento_aplicado' => 17.56],
            ['promocion_id' => 11, 'cliente_id' => 11, 'venta_id' => 15, 'fecha_uso' => Carbon::now()->subDays(14), 'descuento_aplicado' => 6.86],
            ['promocion_id' => 12, 'cliente_id' => 13, 'venta_id' => 19, 'fecha_uso' => Carbon::now()->subDays(18), 'descuento_aplicado' => 9.17],
            ['promocion_id' => 13, 'cliente_id' => 15, 'venta_id' => 21, 'fecha_uso' => Carbon::now()->subDays(20), 'descuento_aplicado' => 35.01],
            ['promocion_id' => 14, 'cliente_id' => 1, 'venta_id' => null, 'fecha_uso' => Carbon::now()->subDays(25), 'descuento_aplicado' => 0.00],
            ['promocion_id' => 15, 'cliente_id' => 16, 'venta_id' => null, 'fecha_uso' => Carbon::now()->subDays(30), 'descuento_aplicado' => 0.00],
            ['promocion_id' => 16, 'cliente_id' => 17, 'venta_id' => 7, 'fecha_uso' => Carbon::now()->subDays(6), 'descuento_aplicado' => 22.24],
            ['promocion_id' => 17, 'cliente_id' => 18, 'venta_id' => 6, 'fecha_uso' => Carbon::now()->subHours(5), 'descuento_aplicado' => 13.05],
            ['promocion_id' => 1, 'cliente_id' => 19, 'venta_id' => 4, 'fecha_uso' => Carbon::now()->subDays(2), 'descuento_aplicado' => 5.13],
            ['promocion_id' => 18, 'cliente_id' => 20, 'venta_id' => 3, 'fecha_uso' => Carbon::now()->subDays(3), 'descuento_aplicado' => 9.13],
            ['promocion_id' => 19, 'cliente_id' => 21, 'venta_id' => 2, 'fecha_uso' => Carbon::now()->subDays(4), 'descuento_aplicado' => 26.29],
            ['promocion_id' => 20, 'cliente_id' => 22, 'venta_id' => 1, 'fecha_uso' => Carbon::now()->subDays(5), 'descuento_aplicado' => 15.85]
        ];

        foreach ($usos as $uso) {
            DB::table('uso_promociones')->insert([
                'promocion_id' => $uso['promocion_id'],
                'cliente_id' => $uso['cliente_id'],
                'venta_id' => $uso['venta_id'],
                'fecha_uso' => $uso['fecha_uso'],
                'descuento_aplicado' => $uso['descuento_aplicado'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
