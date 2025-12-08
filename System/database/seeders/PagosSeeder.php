<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pagos = [
            ['venta_id' => 1, 'metodo_pago_id' => 1, 'monto' => 158.51, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(5), 'estado' => 'Completado'],
            ['venta_id' => 2, 'metodo_pago_id' => 2, 'monto' => 262.86, 'numero_transaccion' => 'TXN001234567', 'fecha_pago' => Carbon::now()->subDays(4), 'estado' => 'Completado'],
            ['venta_id' => 3, 'metodo_pago_id' => 1, 'monto' => 91.29, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(3), 'estado' => 'Completado'],
            ['venta_id' => 4, 'metodo_pago_id' => 1, 'monto' => 51.30, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(2), 'estado' => 'Completado'],
            ['venta_id' => 5, 'metodo_pago_id' => 8, 'monto' => 318.69, 'numero_transaccion' => 'CRED001', 'fecha_pago' => Carbon::now()->subDays(1), 'estado' => 'Pendiente'],
            ['venta_id' => 6, 'metodo_pago_id' => 1, 'monto' => 130.46, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subHours(5), 'estado' => 'Completado'],
            ['venta_id' => 7, 'metodo_pago_id' => 1, 'monto' => 100.00, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(6), 'estado' => 'Completado'],
            ['venta_id' => 7, 'metodo_pago_id' => 2, 'monto' => 122.43, 'numero_transaccion' => 'TXN001234568', 'fecha_pago' => Carbon::now()->subDays(6), 'estado' => 'Completado'],
            ['venta_id' => 8, 'metodo_pago_id' => 1, 'monto' => 465.94, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(7), 'estado' => 'Completado'],
            ['venta_id' => 9, 'metodo_pago_id' => 1, 'monto' => 79.87, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(8), 'estado' => 'Completado'],
            ['venta_id' => 10, 'metodo_pago_id' => 8, 'monto' => 386.62, 'numero_transaccion' => 'CRED002', 'fecha_pago' => Carbon::now()->subDays(9), 'estado' => 'Pendiente'],
            ['venta_id' => 11, 'metodo_pago_id' => 1, 'monto' => 170.79, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(10), 'estado' => 'Completado'],
            ['venta_id' => 13, 'metodo_pago_id' => 1, 'monto' => 295.49, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(12), 'estado' => 'Completado'],
            ['venta_id' => 14, 'metodo_pago_id' => 1, 'monto' => 175.62, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(13), 'estado' => 'Completado'],
            ['venta_id' => 15, 'metodo_pago_id' => 1, 'monto' => 68.59, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(14), 'estado' => 'Completado'],
            ['venta_id' => 16, 'metodo_pago_id' => 8, 'monto' => 432.38, 'numero_transaccion' => 'CRED003', 'fecha_pago' => Carbon::now()->subDays(15), 'estado' => 'Completado'],
            ['venta_id' => 18, 'metodo_pago_id' => 1, 'monto' => 150.00, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(17), 'estado' => 'Completado'],
            ['venta_id' => 18, 'metodo_pago_id' => 3, 'monto' => 161.86, 'numero_transaccion' => 'DEB001234569', 'fecha_pago' => Carbon::now()->subDays(17), 'estado' => 'Completado'],
            ['venta_id' => 19, 'metodo_pago_id' => 1, 'monto' => 91.70, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(18), 'estado' => 'Completado'],
            ['venta_id' => 20, 'metodo_pago_id' => 1, 'monto' => 579.16, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(19), 'estado' => 'Completado'],
            ['venta_id' => 21, 'metodo_pago_id' => 1, 'monto' => 175.06, 'numero_transaccion' => null, 'fecha_pago' => Carbon::now()->subDays(20), 'estado' => 'Completado'],
            ['venta_id' => 22, 'metodo_pago_id' => 8, 'monto' => 239.29, 'numero_transaccion' => 'CRED004', 'fecha_pago' => Carbon::now()->subDays(21), 'estado' => 'Pendiente']
        ];

        foreach ($pagos as $pago) {
            DB::table('pagos')->insert([
                'venta_id' => $pago['venta_id'],
                'metodo_pago_id' => $pago['metodo_pago_id'],
                'monto' => $pago['monto'],
                'numero_transaccion' => $pago['numero_transaccion'],
                'fecha_pago' => $pago['fecha_pago'],
                'estado' => $pago['estado'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
