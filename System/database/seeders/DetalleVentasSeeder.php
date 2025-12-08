<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DetalleVentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detalles = [
            // Detalles para FAC-2025-0001
            ['venta_id' => 1, 'producto_id' => 1, 'descripcion' => 'Producto vendido', 'cantidad' => 2, 'precio_unitario' => 85.50, 'subtotal' => 171.00],
            
            // Detalles para FAC-2025-0002
            ['venta_id' => 2, 'producto_id' => 6, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 125.00, 'subtotal' => 125.00],
            ['venta_id' => 2, 'producto_id' => 9, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 156.00, 'subtotal' => 156.00],
            
            // Detalles para FAC-2025-0003
            ['venta_id' => 3, 'producto_id' => 12, 'descripcion' => 'Producto vendido', 'cantidad' => 2, 'precio_unitario' => 34.50, 'subtotal' => 69.00],
            ['venta_id' => 3, 'producto_id' => 16, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 15.60, 'subtotal' => 15.60],
            
            // Detalles para FAC-2025-0004
            ['venta_id' => 4, 'producto_id' => 4, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 45.80, 'subtotal' => 45.80],
            
            // Detalles para FAC-2025-0005
            ['venta_id' => 5, 'producto_id' => 2, 'descripcion' => 'Producto vendido', 'cantidad' => 2, 'precio_unitario' => 92.75, 'subtotal' => 185.50],
            ['venta_id' => 5, 'producto_id' => 18, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 78.90, 'subtotal' => 78.90],
            ['venta_id' => 5, 'producto_id' => 14, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 42.20, 'subtotal' => 42.20],
            
            // Detalles para FAC-2025-0006
            ['venta_id' => 6, 'producto_id' => 7, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 89.50, 'subtotal' => 89.50],
            ['venta_id' => 6, 'producto_id' => 13, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 28.75, 'subtotal' => 28.75],
            
            // Detalles para FAC-2025-0007
            ['venta_id' => 7, 'producto_id' => 11, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 189.90, 'subtotal' => 189.90],
            
            // Detalles para FAC-2025-0008
            ['venta_id' => 8, 'producto_id' => 1, 'descripcion' => 'Producto vendido', 'cantidad' => 3, 'precio_unitario' => 85.50, 'subtotal' => 256.50],
            ['venta_id' => 8, 'producto_id' => 5, 'descripcion' => 'Producto vendido', 'cantidad' => 2, 'precio_unitario' => 52.90, 'subtotal' => 105.80],
            ['venta_id' => 8, 'producto_id' => 15, 'descripcion' => 'Producto vendido', 'cantidad' => 2, 'precio_unitario' => 38.90, 'subtotal' => 77.80],
            
            // Detalles para FAC-2025-0009
            ['venta_id' => 9, 'producto_id' => 3, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 78.30, 'subtotal' => 78.30],
            
            // Detalles para FAC-2025-0010
            ['venta_id' => 10, 'producto_id' => 22, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 345.00, 'subtotal' => 345.00],
            
            // Detalles para FAC-2025-0011
            ['venta_id' => 11, 'producto_id' => 17, 'descripcion' => 'Producto vendido', 'cantidad' => 10, 'precio_unitario' => 12.45, 'subtotal' => 124.50],
            ['venta_id' => 11, 'producto_id' => 16, 'descripcion' => 'Producto vendido', 'cantidad' => 2, 'precio_unitario' => 15.60, 'subtotal' => 31.20],
            
            // Detalles para FAC-2025-0012 (Cancelada)
            ['venta_id' => 12, 'producto_id' => 8, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 67.25, 'subtotal' => 67.25],
            ['venta_id' => 12, 'producto_id' => 19, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 65.80, 'subtotal' => 65.80],
            
            // Detalles para FAC-2025-0013
            ['venta_id' => 13, 'producto_id' => 20, 'descripcion' => 'Producto vendido', 'cantidad' => 2, 'precio_unitario' => 125.70, 'subtotal' => 251.40],
            ['venta_id' => 13, 'producto_id' => 24, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 56.75, 'subtotal' => 56.75],
            
            // Detalles para FAC-2025-0014
            ['venta_id' => 14, 'producto_id' => 10, 'descripcion' => 'Producto vendido', 'cantidad' => 3, 'precio_unitario' => 45.75, 'subtotal' => 137.25],
            ['venta_id' => 14, 'producto_id' => 25, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 29.80, 'subtotal' => 29.80],
            
            // Detalles para FAC-2025-0015
            ['venta_id' => 15, 'producto_id' => 8, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 67.25, 'subtotal' => 67.25],
            
            // Detalles para FAC-2025-0016
            ['venta_id' => 16, 'producto_id' => 2, 'descripcion' => 'Producto vendido', 'cantidad' => 4, 'precio_unitario' => 92.75, 'subtotal' => 371.00],
            ['venta_id' => 16, 'producto_id' => 21, 'descripcion' => 'Producto vendido', 'cantidad' => 2, 'precio_unitario' => 23.90, 'subtotal' => 47.80],
            
            // Detalles para FAC-2025-0017 (Devuelta)
            ['venta_id' => 17, 'producto_id' => 12, 'descripcion' => 'Producto vendido', 'cantidad' => 3, 'precio_unitario' => 34.50, 'subtotal' => 103.50],
            ['venta_id' => 17, 'producto_id' => 13, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 28.75, 'subtotal' => 28.75],
            
            // Detalles para FAC-2025-0018
            ['venta_id' => 18, 'producto_id' => 6, 'descripcion' => 'Producto vendido', 'cantidad' => 2, 'precio_unitario' => 125.00, 'subtotal' => 250.00],
            ['venta_id' => 18, 'producto_id' => 23, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 48.60, 'subtotal' => 48.60],
            
            // Detalles para FAC-2025-0019
            ['venta_id' => 19, 'producto_id' => 4, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 45.80, 'subtotal' => 45.80],
            ['venta_id' => 19, 'producto_id' => 17, 'descripcion' => 'Producto vendido', 'cantidad' => 3, 'precio_unitario' => 12.45, 'subtotal' => 37.35],
            
            // Detalles para FAC-2025-0020
            ['venta_id' => 20, 'producto_id' => 1, 'descripcion' => 'Producto vendido', 'cantidad' => 5, 'precio_unitario' => 85.50, 'subtotal' => 427.50],
            ['venta_id' => 20, 'producto_id' => 5, 'descripcion' => 'Producto vendido', 'cantidad' => 3, 'precio_unitario' => 52.90, 'subtotal' => 158.70],
            
            // Detalles para FAC-2025-0021
            ['venta_id' => 21, 'producto_id' => 9, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 156.00, 'subtotal' => 156.00],
            
            // Detalles para FAC-2025-0022
            ['venta_id' => 22, 'producto_id' => 7, 'descripcion' => 'Producto vendido', 'cantidad' => 2, 'precio_unitario' => 89.50, 'subtotal' => 179.00],
            ['venta_id' => 22, 'producto_id' => 18, 'descripcion' => 'Producto vendido', 'cantidad' => 1, 'precio_unitario' => 78.90, 'subtotal' => 78.90]
        ];

        foreach ($detalles as $detalle) {
            DB::table('detalle_ventas')->insert([
                'venta_id' => $detalle['venta_id'],
                'producto_id' => $detalle['producto_id'],
                'cantidad' => $detalle['cantidad'],
                'precio_unitario' => $detalle['precio_unitario'],
                'subtotal' => $detalle['subtotal'],
                'descripcion' => $detalle['descripcion'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
