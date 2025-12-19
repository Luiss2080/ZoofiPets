<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            // Alimentos para perros
            [
                'nombre' => 'Alimento Premium Cachorro',
                'descripcion' => 'Alimento balanceado premium especial para cachorros hasta 12 meses',
                'precio' => 85.50,
                'stock_actual' => 150,
                'stock_minimo' => 20,
                'codigo_barras' => '7891234567890',
                'categoria_id' => 1, // Alimentos
                'fecha_vencimiento' => Carbon::now()->addMonths(18),
                'laboratorio' => 'Royal Canin',
                'presentacion' => 'Saco 15kg',
                'activo' => true,
            ],
            [
                'nombre' => 'Alimento Adult Large Breed',
                'descripcion' => 'Alimento premium para perros adultos de raza grande',
                'precio' => 92.75,
                'stock_actual' => 120,
                'stock_minimo' => 15,
                'codigo_barras' => '7891234567891',
                'categoria_id' => 1,
                'fecha_vencimiento' => Carbon::now()->addMonths(20),
                'laboratorio' => 'Pro Plan',
                'presentacion' => 'Saco 20kg',
                'activo' => true,
            ],
            [
                'nombre' => 'Alimento Senior 7+',
                'descripcion' => 'Alimento especializado para perros mayores de 7 años',
                'precio' => 78.30,
                'stock_actual' => 80,
                'stock_minimo' => 10,
                'codigo_barras' => '7891234567892',
                'categoria_id' => 1,
                'fecha_vencimiento' => Carbon::now()->addMonths(15),
                'laboratorio' => 'Hills',
                'presentacion' => 'Saco 12kg',
                'activo' => true,
            ],

            // Alimentos para gatos
            [
                'nombre' => 'Alimento Gatitos hasta 12 meses',
                'descripcion' => 'Fórmula especial rica en DHA para gatitos en crecimiento',
                'precio' => 45.80,
                'stock_actual' => 100,
                'stock_minimo' => 25,
                'codigo_barras' => '7891234567893',
                'categoria_id' => 1,
                'fecha_vencimiento' => Carbon::now()->addMonths(16),
                'laboratorio' => 'Whiskas',
                'presentacion' => 'Bolsa 7.5kg',
                'activo' => true,
            ],
            [
                'nombre' => 'Alimento Gatos Castrados',
                'descripcion' => 'Alimento bajo en calorías para gatos esterilizados',
                'precio' => 52.90,
                'stock_actual' => 90,
                'stock_minimo' => 20,
                'codigo_barras' => '7891234567894',
                'categoria_id' => 1,
                'fecha_vencimiento' => Carbon::now()->addMonths(19),
                'laboratorio' => 'Pro Plan',
                'presentacion' => 'Bolsa 10kg',
                'activo' => true,
            ],

            // Medicamentos
            [
                'nombre' => 'Antibiótico Amoxicilina 500mg',
                'descripcion' => 'Antibiótico de amplio espectro para infecciones bacterianas',
                'precio' => 125.00,
                'stock_actual' => 50,
                'stock_minimo' => 10,
                'codigo_barras' => '7891234567895',
                'categoria_id' => 2, // Medicamentos
                'fecha_vencimiento' => Carbon::now()->addMonths(24),
                'laboratorio' => 'Zoetis',
                'presentacion' => 'Frasco 20 comprimidos',
                'activo' => true,
            ],
            [
                'nombre' => 'Antiinflamatorio Meloxicam',
                'descripcion' => 'Antiinflamatorio no esteroideo para dolor y inflamación',
                'precio' => 89.50,
                'stock_actual' => 30,
                'stock_minimo' => 8,
                'codigo_barras' => '7891234567896',
                'categoria_id' => 2,
                'fecha_vencimiento' => Carbon::now()->addMonths(30),
                'laboratorio' => 'Boehringer',
                'presentacion' => 'Frasco 10ml',
                'activo' => true,
            ],
            [
                'nombre' => 'Desparasitante Interno Drontal',
                'descripcion' => 'Desparasitante de amplio espectro para parásitos internos',
                'precio' => 67.25,
                'stock_actual' => 75,
                'stock_minimo' => 15,
                'codigo_barras' => '7891234567897',
                'categoria_id' => 2,
                'fecha_vencimiento' => Carbon::now()->addMonths(36),
                'laboratorio' => 'Bayer',
                'presentacion' => 'Caja 4 comprimidos',
                'activo' => true,
            ],

            // Accesorios
            [
                'nombre' => 'Collar Antipulgas Seresto',
                'descripcion' => 'Collar antipulgas y garrapatas con duración de 8 meses',
                'precio' => 156.00,
                'stock_actual' => 60,
                'stock_minimo' => 12,
                'codigo_barras' => '7891234567898',
                'categoria_id' => 3, // Accesorios
                'fecha_vencimiento' => Carbon::now()->addYears(3),
                'laboratorio' => 'Bayer',
                'presentacion' => 'Talla M',
                'activo' => true,
            ],
            [
                'nombre' => 'Correa Retráctil Flexi',
                'descripcion' => 'Correa retráctil de 5 metros para perros medianos',
                'precio' => 45.75,
                'stock_actual' => 40,
                'stock_minimo' => 8,
                'codigo_barras' => '7891234567899',
                'categoria_id' => 3,
                'fecha_vencimiento' => null,
                'laboratorio' => null,
                'presentacion' => 'Hasta 25kg',
                'activo' => true,
            ],
            [
                'nombre' => 'Cama Ortopédica Memory Foam',
                'descripcion' => 'Cama ortopédica con memory foam para perros con problemas articulares',
                'precio' => 189.90,
                'stock_actual' => 25,
                'stock_minimo' => 5,
                'codigo_barras' => '7891234567800',
                'categoria_id' => 3,
                'fecha_vencimiento' => null,
                'laboratorio' => null,
                'presentacion' => 'Talla L (80x60cm)',
                'activo' => true,
            ],

            // Productos de higiene
            [
                'nombre' => 'Shampoo Medicado Antiseborreico',
                'descripcion' => 'Shampoo medicado para dermatitis seborreica y caspa',
                'precio' => 34.50,
                'stock_actual' => 80,
                'stock_minimo' => 15,
                'codigo_barras' => '7891234567801',
                'categoria_id' => 4, // Higiene
                'fecha_vencimiento' => Carbon::now()->addMonths(24),
                'laboratorio' => 'Virbac',
                'presentacion' => 'Frasco 250ml',
                'activo' => true,
            ],
            [
                'nombre' => 'Toallitas Húmedas Antibacteriales',
                'descripcion' => 'Toallitas húmedas antibacteriales para limpieza diaria',
                'precio' => 28.75,
                'stock_actual' => 120,
                'stock_minimo' => 20,
                'codigo_barras' => '7891234567802',
                'categoria_id' => 4,
                'fecha_vencimiento' => Carbon::now()->addMonths(18),
                'laboratorio' => null,
                'presentacion' => 'Paquete 80 unidades',
                'activo' => true,
            ],
            [
                'nombre' => 'Pasta Dental Enzimática',
                'descripcion' => 'Pasta dental enzimática sabor pollo para higiene bucal',
                'precio' => 42.20,
                'stock_actual' => 45,
                'stock_minimo' => 10,
                'codigo_barras' => '7891234567803',
                'categoria_id' => 4,
                'fecha_vencimiento' => Carbon::now()->addMonths(30),
                'laboratorio' => 'Virbac',
                'presentacion' => 'Tubo 70g',
                'activo' => true,
            ],

            // Juguetes
            [
                'nombre' => 'Pelota de Goma Natural Kong',
                'descripcion' => 'Pelota de goma natural ultra resistente para perros destructivos',
                'precio' => 38.90,
                'stock_actual' => 70,
                'stock_minimo' => 12,
                'codigo_barras' => '7891234567804',
                'categoria_id' => 5, // Juguetes
                'fecha_vencimiento' => null,
                'laboratorio' => null,
                'presentacion' => 'Talla M',
                'activo' => true,
            ],
            [
                'nombre' => 'Cuerda de Algodón Trenzada',
                'descripcion' => 'Cuerda de algodón natural trenzada para juego y limpieza dental',
                'precio' => 15.60,
                'stock_actual' => 95,
```php
                'presentacion' => '30cm',
                'activo' => true,
            ],
            [
                'nombre' => 'Ratón de Peluche con Catnip',
                'descripcion' => 'Ratón de peluche relleno con hierba gatera para estimular el juego',
                'precio' => 12.45,
                'stock_actual' => 85,
                'stock_minimo' => 15,
                'codigo_barras' => '7891234567806',
                'categoria_id' => 5,
                'fecha_vencimiento' => null,
                'laboratorio' => null,
                'presentacion' => '8cm',
                'activo' => true,
            ],

            // Suplementos
            [
                'nombre' => 'Omega 3 para Mascotas',
                'descripcion' => 'Suplemento de ácidos grasos Omega 3 para pelaje y piel sana',
                'precio' => 78.90,
                'stock_actual' => 55,
                'stock_minimo' => 10,
                'codigo_barras' => '7891234567807',
                'categoria_id' => 6, // Suplementos
                'fecha_vencimiento' => Carbon::now()->addMonths(24),
                'laboratorio' => 'Nutramax',
                'presentacion' => 'Frasco 60 cápsulas',
                'activo' => true,
            ],
            [
                'nombre' => 'Probióticos para Digestión',
                'descripcion' => 'Probióticos para mejorar la salud digestiva y fortalecer el sistema inmune',
                'precio' => 65.80,
                'stock_actual' => 40,
                'stock_minimo' => 8,
                'codigo_barras' => '7891234567808',
                'categoria_id' => 6,
                'fecha_vencimiento' => Carbon::now()->addMonths(18),
                'laboratorio' => 'Purina',
                'presentacion' => 'Frasco 30 sobres',
                'activo' => true,
            ],
            [
                'nombre' => 'Glucosamina + Condroitina',
                'descripcion' => 'Suplemento para salud articular en mascotas mayores',
                'precio' => 125.70,
                'stock_actual' => 35,
                'stock_minimo' => 7,
                'codigo_barras' => '7891234567809',
                'categoria_id' => 6,
                'fecha_vencimiento' => Carbon::now()->addMonths(30),
                'laboratorio' => 'Cosequin',
                'presentacion' => 'Frasco 120 tabletas',
                'activo' => true,
            ]
        ];

        foreach ($productos as $index => $producto) {
            DB::table('productos')->insert([
                'nombre' => $producto['nombre'],
                'descripcion' => $producto['descripcion'],
                'codigo_interno' => 'PROD' . str_pad($index + 1, 4, '0', STR_PAD_LEFT),
                'precio_venta' => $producto['precio'],
                'precio_compra' => $producto['precio'] * 0.7, // 30% margen aproximado
                'stock_actual' => $producto['stock_actual'],
                'stock_minimo' => $producto['stock_minimo'],
                'codigo_barras' => $producto['codigo_barras'],
                'categoria_id' => $producto['categoria_id'],
                'marca' => $producto['laboratorio'],
                'presentacion' => $producto['presentacion'],
                'activo' => $producto['activo'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
```
