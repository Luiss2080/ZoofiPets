<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $compras = [
            ['numero_factura' => 'FC-2024-0001', 'proveedor_id' => 1, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(15), 'fecha_recepcion' => Carbon::now()->subDays(8), 'subtotal' => 2595.00, 'impuesto' => 311.40, 'total' => 2906.40, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0002', 'proveedor_id' => 2, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(20), 'fecha_recepcion' => null, 'subtotal' => 6880.00, 'impuesto' => 825.60, 'total' => 7705.60, 'estado' => 'En_Transito'],
            ['numero_factura' => 'FC-2024-0003', 'proveedor_id' => 3, 'empleado_id' => 14, 'fecha_compra' => Carbon::now()->subDays(10), 'fecha_recepcion' => Carbon::now()->subDays(3), 'subtotal' => 2556.50, 'impuesto' => 306.78, 'total' => 2863.28, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0004', 'proveedor_id' => 4, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(25), 'fecha_recepcion' => Carbon::now()->subDays(18), 'subtotal' => 2522.25, 'impuesto' => 302.67, 'total' => 2824.92, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0005', 'proveedor_id' => 5, 'empleado_id' => 14, 'fecha_compra' => Carbon::now()->subDays(12), 'fecha_recepcion' => Carbon::now()->subDays(5), 'subtotal' => 4320.00, 'impuesto' => 518.40, 'total' => 4838.40, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0006', 'proveedor_id' => 6, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(8), 'fecha_recepcion' => Carbon::now()->subDays(1), 'subtotal' => 1628.00, 'impuesto' => 195.36, 'total' => 1823.36, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0007', 'proveedor_id' => 7, 'empleado_id' => 14, 'fecha_compra' => Carbon::now()->subDays(30), 'fecha_recepcion' => Carbon::now()->subDays(23), 'subtotal' => 7053.00, 'impuesto' => 846.36, 'total' => 7899.36, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0008', 'proveedor_id' => 8, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(35), 'fecha_recepcion' => Carbon::now()->subDays(28), 'subtotal' => 4051.50, 'impuesto' => 486.18, 'total' => 4537.68, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0009', 'proveedor_id' => 1, 'empleado_id' => 14, 'fecha_compra' => Carbon::now()->subDays(22), 'fecha_recepcion' => Carbon::now()->subDays(15), 'subtotal' => 1095.00, 'impuesto' => 131.40, 'total' => 1226.40, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0010', 'proveedor_id' => 2, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(18), 'fecha_recepcion' => null, 'subtotal' => 382.50, 'impuesto' => 45.90, 'total' => 428.40, 'estado' => 'En_Transito'],
            ['numero_factura' => 'FC-2024-0011', 'proveedor_id' => 3, 'empleado_id' => 14, 'fecha_compra' => Carbon::now()->subDays(40), 'fecha_recepcion' => Carbon::now()->subDays(33), 'subtotal' => 322.50, 'impuesto' => 38.70, 'total' => 361.20, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0012', 'proveedor_id' => 4, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(14), 'fecha_recepcion' => Carbon::now()->subDays(7), 'subtotal' => 546.00, 'impuesto' => 65.52, 'total' => 611.52, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0013', 'proveedor_id' => 5, 'empleado_id' => 14, 'fecha_compra' => Carbon::now()->subDays(28), 'fecha_recepcion' => Carbon::now()->subDays(21), 'subtotal' => 488.00, 'impuesto' => 58.56, 'total' => 546.56, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0014', 'proveedor_id' => 6, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(45), 'fecha_recepcion' => Carbon::now()->subDays(38), 'subtotal' => 660.00, 'impuesto' => 79.20, 'total' => 739.20, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0015', 'proveedor_id' => 7, 'empleado_id' => 14, 'fecha_compra' => Carbon::now()->subDays(50), 'fecha_recepcion' => Carbon::now()->subDays(43), 'subtotal' => 890.00, 'impuesto' => 106.80, 'total' => 996.80, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0016', 'proveedor_id' => 8, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(32), 'fecha_recepcion' => Carbon::now()->subDays(25), 'subtotal' => 1749.00, 'impuesto' => 209.88, 'total' => 1958.88, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0017', 'proveedor_id' => 1, 'empleado_id' => 14, 'fecha_compra' => Carbon::now()->subDays(60), 'fecha_recepcion' => Carbon::now()->subDays(53), 'subtotal' => 330.00, 'impuesto' => 39.60, 'total' => 369.60, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0018', 'proveedor_id' => 2, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(16), 'fecha_recepcion' => Carbon::now()->subDays(9), 'subtotal' => 487.50, 'impuesto' => 58.50, 'total' => 546.00, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0019', 'proveedor_id' => 3, 'empleado_id' => 14, 'fecha_compra' => Carbon::now()->subDays(38), 'fecha_recepcion' => Carbon::now()->subDays(31), 'subtotal' => 460.00, 'impuesto' => 55.20, 'total' => 515.20, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0020', 'proveedor_id' => 4, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(26), 'fecha_recepcion' => Carbon::now()->subDays(19), 'subtotal' => 510.00, 'impuesto' => 61.20, 'total' => 571.20, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0021', 'proveedor_id' => 5, 'empleado_id' => 14, 'fecha_compra' => Carbon::now()->subDays(55), 'fecha_recepcion' => Carbon::now()->subDays(48), 'subtotal' => 1275.00, 'impuesto' => 153.00, 'total' => 1428.00, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0022', 'proveedor_id' => 6, 'empleado_id' => 13, 'fecha_compra' => Carbon::now()->subDays(42), 'fecha_recepcion' => Carbon::now()->subDays(35), 'subtotal' => 1464.00, 'impuesto' => 175.68, 'total' => 1639.68, 'estado' => 'Recibida'],
            ['numero_factura' => 'FC-2024-0023', 'proveedor_id' => 7, 'empleado_id' => 14, 'fecha_compra' => Carbon::now()->subDays(48), 'fecha_recepcion' => Carbon::now()->subDays(41), 'subtotal' => 987.00, 'impuesto' => 118.44, 'total' => 1105.44, 'estado' => 'Recibida']
        ];

        foreach ($compras as $compra) {
            DB::table('compras')->insert([
                'numero_factura' => $compra['numero_factura'],
                'proveedor_id' => $compra['proveedor_id'],
                'empleado_id' => $compra['empleado_id'],
                'fecha_compra' => $compra['fecha_compra'],
                'fecha_recepcion' => $compra['fecha_recepcion'],
                'subtotal' => $compra['subtotal'],
                'impuesto' => $compra['impuesto'],
                'total' => $compra['total'],
                'estado' => $compra['estado'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
