<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DetalleComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detalles = [
            // Compra 1 - PetShop Express (5 productos)
            ['compra_id' => 1, 'producto_id' => 1, 'cantidad' => 50, 'precio_unitario' => 18.50, 'subtotal' => 925.00],
            ['compra_id' => 1, 'producto_id' => 3, 'cantidad' => 30, 'precio_unitario' => 32.00, 'subtotal' => 960.00],
            ['compra_id' => 1, 'producto_id' => 5, 'cantidad' => 20, 'precio_unitario' => 8.75, 'subtotal' => 175.00],
            ['compra_id' => 1, 'producto_id' => 8, 'cantidad' => 100, 'precio_unitario' => 2.25, 'subtotal' => 225.00],
            ['compra_id' => 1, 'producto_id' => 15, 'cantidad' => 25, 'precio_unitario' => 12.40, 'subtotal' => 310.00],

            // Compra 2 - Veterinaria Central (3 productos)
            ['compra_id' => 2, 'producto_id' => 1, 'cantidad' => 40, 'precio_unitario' => 45.00, 'subtotal' => 1800.00],
            ['compra_id' => 2, 'producto_id' => 2, 'cantidad' => 30, 'precio_unitario' => 85.50, 'subtotal' => 2565.00],
            ['compra_id' => 2, 'producto_id' => 3, 'cantidad' => 20, 'precio_unitario' => 125.75, 'subtotal' => 2515.00],

            // Compra 3 - Mascotas & Más (4 productos)
            ['compra_id' => 3, 'producto_id' => 2, 'cantidad' => 35, 'precio_unitario' => 28.90, 'subtotal' => 1011.50],
            ['compra_id' => 3, 'producto_id' => 4, 'cantidad' => 40, 'precio_unitario' => 22.00, 'subtotal' => 880.00],
            ['compra_id' => 3, 'producto_id' => 7, 'cantidad' => 60, 'precio_unitario' => 4.50, 'subtotal' => 270.00],
            ['compra_id' => 3, 'producto_id' => 12, 'cantidad' => 25, 'precio_unitario' => 15.80, 'subtotal' => 395.00],

            // Compra 4 - Distribuidora Pet (6 productos)
            ['compra_id' => 4, 'producto_id' => 6, 'cantidad' => 50, 'precio_unitario' => 6.25, 'subtotal' => 312.50],
            ['compra_id' => 4, 'producto_id' => 9, 'cantidad' => 80, 'precio_unitario' => 1.85, 'subtotal' => 148.00],
            ['compra_id' => 4, 'producto_id' => 11, 'cantidad' => 45, 'precio_unitario' => 9.90, 'subtotal' => 445.50],
            ['compra_id' => 4, 'producto_id' => 14, 'cantidad' => 30, 'precio_unitario' => 18.60, 'subtotal' => 558.00],
            ['compra_id' => 4, 'producto_id' => 16, 'cantidad' => 35, 'precio_unitario' => 14.25, 'subtotal' => 498.75],
            ['compra_id' => 4, 'producto_id' => 18, 'cantidad' => 25, 'precio_unitario' => 22.40, 'subtotal' => 560.00],

            // Compra 5 - Alimentos Premium (2 productos)
            ['compra_id' => 5, 'producto_id' => 1, 'cantidad' => 100, 'precio_unitario' => 18.00, 'subtotal' => 1800.00],
            ['compra_id' => 5, 'producto_id' => 3, 'cantidad' => 80, 'precio_unitario' => 31.50, 'subtotal' => 2520.00],

            // Compra 6 - PetShop Express (3 productos)
            ['compra_id' => 6, 'producto_id' => 10, 'cantidad' => 120, 'precio_unitario' => 3.20, 'subtotal' => 384.00],
            ['compra_id' => 6, 'producto_id' => 13, 'cantidad' => 40, 'precio_unitario' => 11.75, 'subtotal' => 470.00],
            ['compra_id' => 6, 'producto_id' => 17, 'cantidad' => 30, 'precio_unitario' => 25.80, 'subtotal' => 774.00],

            // Compra 7 - Veterinaria Central (4 productos veterinarios)
            ['compra_id' => 7, 'producto_id' => 4, 'cantidad' => 15, 'precio_unitario' => 185.00, 'subtotal' => 2775.00],
            ['compra_id' => 7, 'producto_id' => 5, 'cantidad' => 25, 'precio_unitario' => 44.00, 'subtotal' => 1100.00],
            ['compra_id' => 7, 'producto_id' => 6, 'cantidad' => 20, 'precio_unitario' => 84.50, 'subtotal' => 1690.00],
            ['compra_id' => 7, 'producto_id' => 7, 'cantidad' => 12, 'precio_unitario' => 124.00, 'subtotal' => 1488.00],

            // Compra 8 - Mascotas & Más (5 productos)
            ['compra_id' => 8, 'producto_id' => 19, 'cantidad' => 40, 'precio_unitario' => 35.60, 'subtotal' => 1424.00],
            ['compra_id' => 8, 'producto_id' => 20, 'cantidad' => 30, 'precio_unitario' => 28.40, 'subtotal' => 852.00],
            ['compra_id' => 8, 'producto_id' => 2, 'cantidad' => 25, 'precio_unitario' => 28.50, 'subtotal' => 712.50],
            ['compra_id' => 8, 'producto_id' => 4, 'cantidad' => 35, 'precio_unitario' => 21.80, 'subtotal' => 763.00],
            ['compra_id' => 8, 'producto_id' => 6, 'cantidad' => 50, 'precio_unitario' => 6.00, 'subtotal' => 300.00],

            // Compras adicionales para llegar a 40+ registros
            ['compra_id' => 9, 'producto_id' => 1, 'cantidad' => 60, 'precio_unitario' => 18.25, 'subtotal' => 1095.00],
            ['compra_id' => 10, 'producto_id' => 5, 'cantidad' => 45, 'precio_unitario' => 8.50, 'subtotal' => 382.50],
            ['compra_id' => 11, 'producto_id' => 8, 'cantidad' => 150, 'precio_unitario' => 2.15, 'subtotal' => 322.50],
            ['compra_id' => 12, 'producto_id' => 12, 'cantidad' => 35, 'precio_unitario' => 15.60, 'subtotal' => 546.00],
            ['compra_id' => 13, 'producto_id' => 15, 'cantidad' => 40, 'precio_unitario' => 12.20, 'subtotal' => 488.00],
            ['compra_id' => 14, 'producto_id' => 18, 'cantidad' => 30, 'precio_unitario' => 22.00, 'subtotal' => 660.00],
            ['compra_id' => 15, 'producto_id' => 1, 'cantidad' => 20, 'precio_unitario' => 44.50, 'subtotal' => 890.00],
            ['compra_id' => 16, 'producto_id' => 3, 'cantidad' => 55, 'precio_unitario' => 31.80, 'subtotal' => 1749.00],
            ['compra_id' => 17, 'producto_id' => 7, 'cantidad' => 75, 'precio_unitario' => 4.40, 'subtotal' => 330.00],
            ['compra_id' => 18, 'producto_id' => 11, 'cantidad' => 50, 'precio_unitario' => 9.75, 'subtotal' => 487.50],
            ['compra_id' => 19, 'producto_id' => 14, 'cantidad' => 25, 'precio_unitario' => 18.40, 'subtotal' => 460.00],
            ['compra_id' => 20, 'producto_id' => 17, 'cantidad' => 20, 'precio_unitario' => 25.50, 'subtotal' => 510.00]
        ];

        foreach ($detalles as $detalle) {
            DB::table('detalle_compras')->insert([
                'compra_id' => $detalle['compra_id'],
                'producto_id' => $detalle['producto_id'],
                'cantidad' => $detalle['cantidad'],
                'precio_unitario' => $detalle['precio_unitario'],
                'subtotal' => $detalle['subtotal'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
