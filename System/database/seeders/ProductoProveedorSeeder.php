<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $relaciones = [
            // Alimentos - Distribuidora Mascotas Felices
            ['producto_id' => 1, 'proveedor_id' => 1, 'precio_compra' => 59.85, 'tiempo_entrega_dias' => 7, 'stock_minimo' => 20, 'proveedor_principal' => true],
            ['producto_id' => 2, 'proveedor_id' => 1, 'precio_compra' => 64.93, 'tiempo_entrega_dias' => 7, 'stock_minimo' => 15, 'proveedor_principal' => true],
            ['producto_id' => 3, 'proveedor_id' => 1, 'precio_compra' => 54.81, 'tiempo_entrega_dias' => 10, 'stock_minimo' => 10, 'proveedor_principal' => true],
            ['producto_id' => 4, 'proveedor_id' => 1, 'precio_compra' => 32.06, 'tiempo_entrega_dias' => 5, 'stock_minimo' => 25, 'proveedor_principal' => true],
            ['producto_id' => 5, 'proveedor_id' => 1, 'precio_compra' => 37.03, 'tiempo_entrega_dias' => 5, 'stock_minimo' => 20, 'proveedor_principal' => true],
            
            // Medicamentos - Laboratorios Veterinarios Unidos
            ['producto_id' => 6, 'proveedor_id' => 2, 'precio_compra' => 87.50, 'tiempo_entrega_dias' => 3, 'stock_minimo' => 10, 'proveedor_principal' => true],
            ['producto_id' => 7, 'proveedor_id' => 2, 'precio_compra' => 62.65, 'tiempo_entrega_dias' => 3, 'stock_minimo' => 8, 'proveedor_principal' => true],
            ['producto_id' => 8, 'proveedor_id' => 2, 'precio_compra' => 47.08, 'tiempo_entrega_dias' => 5, 'stock_minimo' => 15, 'proveedor_principal' => true],
            ['producto_id' => 25, 'proveedor_id' => 2, 'precio_compra' => 20.86, 'tiempo_entrega_dias' => 7, 'stock_minimo' => 18, 'proveedor_principal' => true],
            
            // Accesorios - Accesorios Pet Store
            ['producto_id' => 9, 'proveedor_id' => 3, 'precio_compra' => 109.20, 'tiempo_entrega_dias' => 14, 'stock_minimo' => 12, 'proveedor_principal' => true],
            ['producto_id' => 10, 'proveedor_id' => 3, 'precio_compra' => 32.03, 'tiempo_entrega_dias' => 7, 'stock_minimo' => 8, 'proveedor_principal' => true],
            ['producto_id' => 11, 'proveedor_id' => 3, 'precio_compra' => 132.93, 'tiempo_entrega_dias' => 21, 'stock_minimo' => 5, 'proveedor_principal' => true],
            ['producto_id' => 22, 'proveedor_id' => 3, 'precio_compra' => 241.50, 'tiempo_entrega_dias' => 30, 'stock_minimo' => 3, 'proveedor_principal' => true],
            
            // Higiene - Productos de Higiene Animal
            ['producto_id' => 12, 'proveedor_id' => 4, 'precio_compra' => 24.15, 'tiempo_entrega_dias' => 7, 'stock_minimo' => 15, 'proveedor_principal' => true],
            ['producto_id' => 13, 'proveedor_id' => 4, 'precio_compra' => 20.13, 'tiempo_entrega_dias' => 5, 'stock_minimo' => 20, 'proveedor_principal' => true],
            ['producto_id' => 14, 'proveedor_id' => 4, 'precio_compra' => 29.54, 'tiempo_entrega_dias' => 10, 'stock_minimo' => 10, 'proveedor_principal' => true],
            ['producto_id' => 21, 'proveedor_id' => 4, 'precio_compra' => 16.73, 'tiempo_entrega_dias' => 5, 'stock_minimo' => 30, 'proveedor_principal' => true],
            ['producto_id' => 23, 'proveedor_id' => 4, 'precio_compra' => 34.02, 'tiempo_entrega_dias' => 14, 'stock_minimo' => 12, 'proveedor_principal' => true],
            
            // Juguetes - Juguetes y Entretenimiento
            ['producto_id' => 15, 'proveedor_id' => 5, 'precio_compra' => 27.23, 'tiempo_entrega_dias' => 10, 'stock_minimo' => 12, 'proveedor_principal' => true],
            ['producto_id' => 16, 'proveedor_id' => 5, 'precio_compra' => 10.92, 'tiempo_entrega_dias' => 7, 'stock_minimo' => 20, 'proveedor_principal' => true],
            ['producto_id' => 17, 'proveedor_id' => 5, 'precio_compra' => 8.72, 'tiempo_entrega_dias' => 7, 'stock_minimo' => 15, 'proveedor_principal' => true],
            
            // Suplementos - Suplementos Nutricionales Pro
            ['producto_id' => 18, 'proveedor_id' => 6, 'precio_compra' => 55.23, 'tiempo_entrega_dias' => 14, 'stock_minimo' => 10, 'proveedor_principal' => true],
            ['producto_id' => 19, 'proveedor_id' => 6, 'precio_compra' => 46.06, 'tiempo_entrega_dias' => 12, 'stock_minimo' => 8, 'proveedor_principal' => true],
            ['producto_id' => 20, 'proveedor_id' => 6, 'precio_compra' => 87.99, 'tiempo_entrega_dias' => 21, 'stock_minimo' => 7, 'proveedor_principal' => true],
            ['producto_id' => 24, 'proveedor_id' => 6, 'precio_compra' => 39.73, 'tiempo_entrega_dias' => 10, 'stock_minimo' => 15, 'proveedor_principal' => true],
            
            // Proveedores alternativos
            ['producto_id' => 1, 'proveedor_id' => 7, 'precio_compra' => 61.25, 'tiempo_entrega_dias' => 10, 'stock_minimo' => 25, 'proveedor_principal' => false],
            ['producto_id' => 6, 'proveedor_id' => 8, 'precio_compra' => 89.75, 'tiempo_entrega_dias' => 5, 'stock_minimo' => 12, 'proveedor_principal' => false],
            ['producto_id' => 9, 'proveedor_id' => 9, 'precio_compra' => 112.80, 'tiempo_entrega_dias' => 10, 'stock_minimo' => 15, 'proveedor_principal' => false],
            
            // Más relaciones para completar 30+ registros
            ['producto_id' => 2, 'proveedor_id' => 10, 'precio_compra' => 66.50, 'tiempo_entrega_dias' => 8, 'stock_minimo' => 18, 'proveedor_principal' => false],
            ['producto_id' => 12, 'proveedor_id' => 11, 'precio_compra' => 25.80, 'tiempo_entrega_dias' => 6, 'stock_minimo' => 18, 'proveedor_principal' => false],
            ['producto_id' => 15, 'proveedor_id' => 12, 'precio_compra' => 28.90, 'tiempo_entrega_dias' => 12, 'stock_minimo' => 10, 'proveedor_principal' => false]
        ];

        foreach ($relaciones as $relacion) {
            DB::table('producto_proveedor')->insert([
                'producto_id' => $relacion['producto_id'],
                'proveedor_id' => $relacion['proveedor_id'],
                'precio_compra' => $relacion['precio_compra'],
                'tiempo_entrega_dias' => $relacion['tiempo_entrega_dias'],
                'stock_minimo' => $relacion['stock_minimo'],
                'proveedor_principal' => $relacion['proveedor_principal'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
