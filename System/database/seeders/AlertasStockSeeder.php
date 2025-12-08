<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlertasStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alertas = [
            ['producto_id' => 7, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Stock por debajo del mínimo establecido', 'stock_actual' => 8, 'stock_minimo' => 15, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(2)],
            ['producto_id' => 19, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Stock por debajo del mínimo establecido', 'stock_actual' => 7, 'stock_minimo' => 10, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(1)],
            ['producto_id' => 12, 'tipo_alerta' => 'Stock Crítico', 'mensaje' => 'Stock críticamente bajo', 'stock_actual' => 5, 'stock_minimo' => 15, 'activo' => true, 'fecha_alerta' => Carbon::now()->subHours(6)],
            ['producto_id' => 3, 'tipo_alerta' => 'Producto Vencido', 'mensaje' => 'Producto próximo a vencer', 'stock_actual' => 80, 'stock_minimo' => 10, 'activo' => false, 'fecha_alerta' => Carbon::now()->subDays(10)],
            ['producto_id' => 25, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Reponer existencias', 'stock_actual' => 12, 'stock_minimo' => 18, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(3)],
            ['producto_id' => 6, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Medicamento con stock bajo', 'stock_actual' => 8, 'stock_minimo' => 10, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(1)],
            ['producto_id' => 14, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Producto de higiene agotándose', 'stock_actual' => 9, 'stock_minimo' => 10, 'activo' => true, 'fecha_alerta' => Carbon::now()->subHours(12)],
            ['producto_id' => 22, 'tipo_alerta' => 'Stock Crítico', 'mensaje' => 'Transportadora con stock crítico', 'stock_actual' => 2, 'stock_minimo' => 5, 'activo' => true, 'fecha_alerta' => Carbon::now()->subHours(3)],
            ['producto_id' => 18, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Suplemento necesita reposición', 'stock_actual' => 9, 'stock_minimo' => 10, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(2)],
            ['producto_id' => 11, 'tipo_alerta' => 'Stock Crítico', 'mensaje' => 'Cama ortopédica agotada', 'stock_actual' => 4, 'stock_minimo' => 5, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(1)],
            ['producto_id' => 9, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Collar antipulgas bajo stock', 'stock_actual' => 11, 'stock_minimo' => 12, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(4)],
            ['producto_id' => 20, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Glucosamina necesita pedido', 'stock_actual' => 6, 'stock_minimo' => 7, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(5)],
            ['producto_id' => 8, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Desparasitante con stock bajo', 'stock_actual' => 14, 'stock_minimo' => 15, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(6)],
            ['producto_id' => 15, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Pelota Kong necesita reposición', 'stock_actual' => 11, 'stock_minimo' => 12, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(7)],
            ['producto_id' => 24, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Vitaminas con stock insuficiente', 'stock_actual' => 14, 'stock_minimo' => 15, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(8)],
            ['producto_id' => 4, 'tipo_alerta' => 'Producto Vencido', 'mensaje' => 'Alimento para gatitos próximo a vencer', 'stock_actual' => 99, 'stock_minimo' => 25, 'activo' => false, 'fecha_alerta' => Carbon::now()->subWeeks(2)],
            ['producto_id' => 10, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Correa retráctil necesita pedido', 'stock_actual' => 7, 'stock_minimo' => 8, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(9)],
            ['producto_id' => 16, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Cuerda de algodón con stock bajo', 'stock_actual' => 19, 'stock_minimo' => 20, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(10)],
            ['producto_id' => 17, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Ratón con catnip necesita reposición', 'stock_actual' => 14, 'stock_minimo' => 15, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(11)],
            ['producto_id' => 13, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Toallitas húmedas con stock bajo', 'stock_actual' => 19, 'stock_minimo' => 20, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(12)],
            ['producto_id' => 23, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Spray educador necesita pedido', 'stock_actual' => 11, 'stock_minimo' => 12, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(13)],
            ['producto_id' => 1, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Alimento premium cachorro stock bajo', 'stock_actual' => 18, 'stock_minimo' => 20, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(14)],
            ['producto_id' => 2, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Alimento adult large breed bajo', 'stock_actual' => 14, 'stock_minimo' => 15, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(15)],
            ['producto_id' => 5, 'tipo_alerta' => 'Stock Bajo', 'mensaje' => 'Alimento gatos castrados stock bajo', 'stock_actual' => 18, 'stock_minimo' => 20, 'activo' => true, 'fecha_alerta' => Carbon::now()->subDays(16)]
        ];

        foreach ($alertas as $alerta) {
            DB::table('alertas_stock')->insert([
                'producto_id' => $alerta['producto_id'],
                'tipo_alerta' => $alerta['tipo_alerta'],
                'mensaje' => $alerta['mensaje'],
                'stock_actual' => $alerta['stock_actual'],
                'stock_minimo' => $alerta['stock_minimo'],
                'activo' => $alerta['activo'],
                'fecha_alerta' => $alerta['fecha_alerta'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
