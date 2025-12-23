<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $precio = $this->faker->randomFloat(2, 10, 500);
        return [
            'codigo_interno' => $this->faker->unique()->bothify('PROD-####'),
            'codigo_barras' => $this->faker->ean13(),
            'nombre' => $this->faker->randomElement([
                'Alimento Premium Perro Adulto 15kg', 'Alimento Gato Salmón 3kg', 'Pelota de Goma Resistente', 
                'Hueso de Carnaza Mediano', 'Collar Antipulgas Gatos', 'Shampoo Hipoalergénico 500ml', 
                'Pipeta Antiparasitaria Perros 10-20kg', 'Arena Aglutinante Lavanda', 'Rascador Torre 3 Niveles',
                'Cama Acolchada L', 'Transportadora Rígida M', 'Juguete Interactivo Ratón',
                'Cepillo Carda Suave', 'Cortaúñas Ergonómico', 'Suplemento Calcio Tabletas',
                'Vitaminas Caninas Multi', 'Arnés Pechera Reflectivo', 'Correa Extensible 5m',
                'Plato Acero Antideslizante', 'Fuente de Agua Automática', 'Bolsas Recogedoras Biodegradables',
                'Pañales de Entrenamiento', 'Limpiador de Oídos', 'Pasta Dental Canina',
                'Spray Calmante Feromonas', 'Jerky de Pollo Natural', 'Galletas Integrales Perro',
                'Lata Paté Ternera', 'Sobres Salsa Pavo', 'Collar Isabelino 20cm',
                'Bozal Nylon Talla M', 'Silbato Entrenamiento', 'Clicker Adiestramiento',
                'Abrigo Impermeable Rojo', 'Suéter Lana Azul', 'Dispensador Comida Auto',
                'Camita Cueva Gato', 'Tunel de Juego Plegable', 'Catnip en Spray'
            ]),
            'descripcion' => $this->faker->sentence(),
            'marca' => $this->faker->company(),
            'precio_compra' => $precio * 0.7,
            'precio_venta' => $precio,
            'stock_actual' => $this->faker->numberBetween(0, 100),
            'stock_minimo' => 5,
            'categoria_id' => \App\Models\CategoriaProducto::inRandomOrder()->first()?->id ?? \App\Models\CategoriaProducto::factory(),
            'activo' => true,
        ];
    }
}
