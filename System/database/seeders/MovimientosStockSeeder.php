<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MovimientosStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movimientos = [
            // Entradas por compras
            ['producto_id' => 1, 'tipo_movimiento' => 'Entrada', 'cantidad' => 100, 'cantidad_anterior' => 50, 'cantidad_nueva' => 150, 'motivo' => 'Compra a proveedor', 'referencia_id' => 1, 'referencia_tipo' => 'compra', 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(15)],
            ['producto_id' => 2, 'tipo_movimiento' => 'Entrada', 'cantidad' => 80, 'cantidad_anterior' => 40, 'cantidad_nueva' => 120, 'motivo' => 'Compra a proveedor', 'referencia_id' => 1, 'referencia_tipo' => 'compra', 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(15)],
            ['producto_id' => 6, 'tipo_movimiento' => 'Entrada', 'cantidad' => 30, 'cantidad_anterior' => 20, 'cantidad_nueva' => 50, 'motivo' => 'Compra a proveedor', 'referencia_id' => 2, 'referencia_tipo' => 'compra', 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(12)],
            
            // Salidas por ventas
            ['producto_id' => 1, 'tipo_movimiento' => 'Salida', 'cantidad' => 2, 'cantidad_anterior' => 150, 'cantidad_nueva' => 148, 'motivo' => 'Venta a cliente', 'referencia_id' => 1, 'referencia_tipo' => 'venta', 'empleado_id' => 11, 'fecha_movimiento' => Carbon::now()->subDays(5)],
            ['producto_id' => 6, 'tipo_movimiento' => 'Salida', 'cantidad' => 1, 'cantidad_anterior' => 50, 'cantidad_nueva' => 49, 'motivo' => 'Venta a cliente', 'referencia_id' => 2, 'referencia_tipo' => 'venta', 'empleado_id' => 12, 'fecha_movimiento' => Carbon::now()->subDays(4)],
            ['producto_id' => 9, 'tipo_movimiento' => 'Salida', 'cantidad' => 1, 'cantidad_anterior' => 60, 'cantidad_nueva' => 59, 'motivo' => 'Venta a cliente', 'referencia_id' => 2, 'referencia_tipo' => 'venta', 'empleado_id' => 12, 'fecha_movimiento' => Carbon::now()->subDays(4)],
            
            // Ajustes de inventario
            ['producto_id' => 3, 'tipo_movimiento' => 'Ajuste', 'cantidad' => -5, 'cantidad_anterior' => 85, 'cantidad_nueva' => 80, 'motivo' => 'Productos vencidos', 'referencia_id' => null, 'referencia_tipo' => null, 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(10)],
            ['producto_id' => 12, 'tipo_movimiento' => 'Ajuste', 'cantidad' => 10, 'cantidad_anterior' => 70, 'cantidad_nueva' => 80, 'motivo' => 'Corrección inventario', 'referencia_id' => null, 'referencia_tipo' => null, 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(8)],
            
            // Más movimientos
            ['producto_id' => 4, 'tipo_movimiento' => 'Salida', 'cantidad' => 1, 'cantidad_anterior' => 100, 'cantidad_nueva' => 99, 'motivo' => 'Venta a cliente', 'referencia_id' => 4, 'referencia_tipo' => 'venta', 'empleado_id' => 21, 'fecha_movimiento' => Carbon::now()->subDays(2)],
            ['producto_id' => 2, 'tipo_movimiento' => 'Salida', 'cantidad' => 2, 'cantidad_anterior' => 120, 'cantidad_nueva' => 118, 'motivo' => 'Venta a cliente', 'referencia_id' => 5, 'referencia_tipo' => 'venta', 'empleado_id' => 12, 'fecha_movimiento' => Carbon::now()->subDays(1)],
            ['producto_id' => 18, 'tipo_movimiento' => 'Salida', 'cantidad' => 1, 'cantidad_anterior' => 55, 'cantidad_nueva' => 54, 'motivo' => 'Venta a cliente', 'referencia_id' => 5, 'referencia_tipo' => 'venta', 'empleado_id' => 12, 'fecha_movimiento' => Carbon::now()->subDays(1)],
            ['producto_id' => 14, 'tipo_movimiento' => 'Salida', 'cantidad' => 1, 'cantidad_anterior' => 45, 'cantidad_nueva' => 44, 'motivo' => 'Venta a cliente', 'referencia_id' => 5, 'referencia_tipo' => 'venta', 'empleado_id' => 12, 'fecha_movimiento' => Carbon::now()->subDays(1)],
            
            ['producto_id' => 7, 'tipo_movimiento' => 'Entrada', 'cantidad' => 20, 'cantidad_anterior' => 10, 'cantidad_nueva' => 30, 'motivo' => 'Compra a proveedor', 'referencia_id' => 2, 'referencia_tipo' => 'compra', 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(12)],
            ['producto_id' => 7, 'tipo_movimiento' => 'Salida', 'cantidad' => 1, 'cantidad_anterior' => 30, 'cantidad_nueva' => 29, 'motivo' => 'Venta a cliente', 'referencia_id' => 6, 'referencia_tipo' => 'venta', 'empleado_id' => 21, 'fecha_movimiento' => Carbon::now()->subHours(5)],
            ['producto_id' => 13, 'tipo_movimiento' => 'Salida', 'cantidad' => 1, 'cantidad_anterior' => 120, 'cantidad_nueva' => 119, 'motivo' => 'Venta a cliente', 'referencia_id' => 6, 'referencia_tipo' => 'venta', 'empleado_id' => 21, 'fecha_movimiento' => Carbon::now()->subHours(5)],
            
            ['producto_id' => 11, 'tipo_movimiento' => 'Salida', 'cantidad' => 1, 'cantidad_anterior' => 25, 'cantidad_nueva' => 24, 'motivo' => 'Venta a cliente', 'referencia_id' => 7, 'referencia_tipo' => 'venta', 'empleado_id' => 11, 'fecha_movimiento' => Carbon::now()->subDays(6)],
            ['producto_id' => 5, 'tipo_movimiento' => 'Salida', 'cantidad' => 2, 'cantidad_anterior' => 90, 'cantidad_nueva' => 88, 'motivo' => 'Venta a cliente', 'referencia_id' => 8, 'referencia_tipo' => 'venta', 'empleado_id' => 12, 'fecha_movimiento' => Carbon::now()->subDays(7)],
            
            ['producto_id' => 15, 'tipo_movimiento' => 'Entrada', 'cantidad' => 50, 'cantidad_anterior' => 20, 'cantidad_nueva' => 70, 'motivo' => 'Compra a proveedor', 'referencia_id' => 5, 'referencia_tipo' => 'compra', 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(7)],
            ['producto_id' => 15, 'tipo_movimiento' => 'Salida', 'cantidad' => 2, 'cantidad_anterior' => 70, 'cantidad_nueva' => 68, 'motivo' => 'Venta a cliente', 'referencia_id' => 8, 'referencia_tipo' => 'venta', 'empleado_id' => 12, 'fecha_movimiento' => Carbon::now()->subDays(7)],
            
            ['producto_id' => 16, 'tipo_movimiento' => 'Salida', 'cantidad' => 1, 'cantidad_anterior' => 95, 'cantidad_nueva' => 94, 'motivo' => 'Venta a cliente', 'referencia_id' => 3, 'referencia_tipo' => 'venta', 'empleado_id' => 21, 'fecha_movimiento' => Carbon::now()->subDays(3)],
            
            // Más entradas y salidas para completar 25+ registros
            ['producto_id' => 8, 'tipo_movimiento' => 'Entrada', 'cantidad' => 40, 'cantidad_anterior' => 35, 'cantidad_nueva' => 75, 'motivo' => 'Compra a proveedor', 'referencia_id' => 4, 'referencia_tipo' => 'compra', 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(8)],
            ['producto_id' => 19, 'tipo_movimiento' => 'Entrada', 'cantidad' => 25, 'cantidad_anterior' => 15, 'cantidad_nueva' => 40, 'motivo' => 'Compra a proveedor', 'referencia_id' => 6, 'referencia_tipo' => 'compra', 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(5)],
            ['producto_id' => 20, 'tipo_movimiento' => 'Entrada', 'cantidad' => 15, 'cantidad_anterior' => 20, 'cantidad_nueva' => 35, 'motivo' => 'Compra a proveedor', 'referencia_id' => 6, 'referencia_tipo' => 'compra', 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(5)],
            ['producto_id' => 21, 'tipo_movimiento' => 'Entrada', 'cantidad' => 100, 'cantidad_anterior' => 100, 'cantidad_nueva' => 200, 'motivo' => 'Compra a proveedor', 'referencia_id' => 4, 'referencia_tipo' => 'compra', 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(8)],
            ['producto_id' => 22, 'tipo_movimiento' => 'Salida', 'cantidad' => 1, 'cantidad_anterior' => 15, 'cantidad_nueva' => 14, 'motivo' => 'Venta a cliente', 'referencia_id' => 10, 'referencia_tipo' => 'venta', 'empleado_id' => 11, 'fecha_movimiento' => Carbon::now()->subDays(9)],
            ['producto_id' => 23, 'tipo_movimiento' => 'Ajuste', 'cantidad' => 5, 'cantidad_anterior' => 60, 'cantidad_nueva' => 65, 'motivo' => 'Inventario encontrado', 'referencia_id' => null, 'referencia_tipo' => null, 'empleado_id' => 13, 'fecha_movimiento' => Carbon::now()->subDays(6)]
        ];

        foreach ($movimientos as $movimiento) {
            DB::table('movimientos_stock')->insert([
                'producto_id' => $movimiento['producto_id'],
                'empleado_id' => $movimiento['empleado_id'],
                'venta_id' => $movimiento['venta_id'],
                'tipo_movimiento' => $movimiento['tipo_movimiento'],
                'cantidad' => $movimiento['cantidad'],
                'stock_anterior' => $movimiento['stock_anterior'],
                'stock_nuevo' => $movimiento['stock_nuevo'],
                'precio_unitario' => $movimiento['precio_unitario'],
                'motivo' => $movimiento['motivo'],
                'numero_factura_compra' => $movimiento['numero_factura_compra'],
                'observaciones' => $movimiento['observaciones'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
