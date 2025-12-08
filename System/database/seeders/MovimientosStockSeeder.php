<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovimientosStockSeeder extends Seeder
{
    public function run()
    {
        $movimientos = [
            [
                'producto_id' => 1,
                'empleado_id' => 1,
                'tipo_movimiento' => 'Entrada', 
                'cantidad' => 30,
                'stock_anterior' => 50,
                'stock_nuevo' => 80,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC001',
                'created_at' => '2024-01-15 08:00:00',
                'updated_at' => '2024-01-15 08:00:00'
            ],
            [
                'producto_id' => 2,
                'empleado_id' => 1,
                'venta_id' => 1,
                'tipo_movimiento' => 'Salida',
                'cantidad' => -5,
                'stock_anterior' => 25,
                'stock_nuevo' => 20,
                'motivo' => 'venta',
                'created_at' => '2024-01-16 10:30:00',
                'updated_at' => '2024-01-16 10:30:00'
            ],
            [
                'producto_id' => 3,
                'tipo_movimiento' => 'entrada',
                'stock_anterior' => 40,
                'cantidad' => 20,
                'stock_nuevo' => 60,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC002',
                'fecha' => '2024-01-17',
                'usuario_id' => 1
            ],
            [
                'producto_id' => 4,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 15,
                'cantidad' => 3,
                'stock_nuevo' => 12,
                'motivo' => 'venta',
                'venta_id' => 2,
                'fecha' => '2024-01-18',
                'usuario_id' => 2
            ],
            [
                'producto_id' => 5,
                'tipo_movimiento' => 'entrada',
                'stock_anterior' => 30,
                'cantidad' => 25,
                'stock_nuevo' => 55,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC003',
                'fecha' => '2024-01-19',
                'usuario_id' => 2
            ],
            [
                'producto_id' => 1,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 80,
                'cantidad' => 8,
                'stock_nuevo' => 72,
                'motivo' => 'venta',
                'venta_id' => 3,
                'fecha' => '2024-01-20',
                'usuario_id' => 1
            ],
            [
                'producto_id' => 6,
                'tipo_movimiento' => 'entrada',
                'stock_anterior' => 20,
                'cantidad' => 15,
                'stock_nuevo' => 35,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC004',
                'fecha' => '2024-01-21',
                'usuario_id' => 2
            ],
            [
                'producto_id' => 7,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 35,
                'cantidad' => 7,
                'stock_nuevo' => 28,
                'motivo' => 'venta',
                'venta_id' => 4,
                'fecha' => '2024-01-22',
                'usuario_id' => 1
            ],
            [
                'producto_id' => 8,
                'tipo_movimiento' => 'entrada',
                'stock_anterior' => 10,
                'cantidad' => 40,
                'stock_nuevo' => 50,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC005',
                'fecha' => '2024-01-23',
                'usuario_id' => 2
            ],
            [
                'producto_id' => 2,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 20,
                'cantidad' => 4,
                'stock_nuevo' => 16,
                'motivo' => 'venta',
                'venta_id' => 5,
                'fecha' => '2024-01-24',
                'usuario_id' => 1
            ],
            [
                'producto_id' => 9,
                'tipo_movimiento' => 'entrada',
                'stock_anterior' => 25,
                'cantidad' => 35,
                'stock_nuevo' => 60,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC006',
                'fecha' => '2024-01-25',
                'usuario_id' => 2
            ],
            [
                'producto_id' => 10,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 18,
                'cantidad' => 2,
                'stock_nuevo' => 16,
                'motivo' => 'venta',
                'venta_id' => 6,
                'fecha' => '2024-01-26',
                'usuario_id' => 1
            ],
            [
                'producto_id' => 3,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 60,
                'cantidad' => 12,
                'stock_nuevo' => 48,
                'motivo' => 'venta',
                'venta_id' => 7,
                'fecha' => '2024-01-27',
                'usuario_id' => 2
            ],
            [
                'producto_id' => 11,
                'tipo_movimiento' => 'entrada',
                'stock_anterior' => 5,
                'cantidad' => 20,
                'stock_nuevo' => 25,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC007',
                'fecha' => '2024-01-28',
                'usuario_id' => 1
            ],
            [
                'producto_id' => 12,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 30,
                'cantidad' => 6,
                'stock_nuevo' => 24,
                'motivo' => 'venta',
                'venta_id' => 8,
                'fecha' => '2024-01-29',
                'usuario_id' => 2
            ],
            [
                'producto_id' => 4,
                'tipo_movimiento' => 'entrada',
                'stock_anterior' => 12,
                'cantidad' => 18,
                'stock_nuevo' => 30,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC008',
                'fecha' => '2024-01-30',
                'usuario_id' => 1
            ],
            [
                'producto_id' => 13,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 22,
                'cantidad' => 9,
                'stock_nuevo' => 13,
                'motivo' => 'venta',
                'venta_id' => 9,
                'fecha' => '2024-01-31',
                'usuario_id' => 2
            ],
            [
                'producto_id' => 14,
                'tipo_movimiento' => 'entrada',
                'stock_anterior' => 8,
                'cantidad' => 22,
                'stock_nuevo' => 30,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC009',
                'fecha' => '2024-02-01',
                'usuario_id' => 1
            ],
            [
                'producto_id' => 15,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 40,
                'cantidad' => 10,
                'stock_nuevo' => 30,
                'motivo' => 'venta',
                'venta_id' => 10,
                'fecha' => '2024-02-02',
                'usuario_id' => 2
            ],
            [
                'producto_id' => 5,
                'tipo_movimiento' => 'entrada',
                'stock_anterior' => 55,
                'cantidad' => 25,
                'stock_nuevo' => 80,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC010',
                'fecha' => '2024-02-03',
                'usuario_id' => 1
            ],
            [
                'producto_id' => 16,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 35,
                'cantidad' => 8,
                'stock_nuevo' => 27,
                'motivo' => 'venta',
                'venta_id' => 11,
                'fecha' => '2024-02-04',
                'usuario_id' => 2
            ],
            [
                'producto_id' => 17,
                'tipo_movimiento' => 'entrada',
                'stock_anterior' => 12,
                'cantidad' => 28,
                'stock_nuevo' => 40,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC011',
                'fecha' => '2024-02-05',
                'usuario_id' => 1
            ],
            [
                'producto_id' => 6,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 35,
                'cantidad' => 5,
                'stock_nuevo' => 30,
                'motivo' => 'venta',
                'venta_id' => 12,
                'fecha' => '2024-02-06',
                'usuario_id' => 2
            ],
            [
                'producto_id' => 18,
                'tipo_movimiento' => 'entrada',
                'stock_anterior' => 15,
                'cantidad' => 35,
                'stock_nuevo' => 50,
                'motivo' => 'compra',
                'numero_factura_compra' => 'FC012',
                'fecha' => '2024-02-07',
                'usuario_id' => 1
            ],
            [
                'producto_id' => 19,
                'tipo_movimiento' => 'salida',
                'stock_anterior' => 28,
                'cantidad' => 7,
                'stock_nuevo' => 21,
                'motivo' => 'venta',
                'venta_id' => 13,
                'fecha' => '2024-02-08',
                'usuario_id' => 2
            ]
        ];

        DB::table('movimientos_stock')->insert($movimientos);
    }
}
