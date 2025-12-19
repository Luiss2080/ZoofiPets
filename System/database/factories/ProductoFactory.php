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
            'nombre' => $this->faker->words(3, true),
            'descripcion' => $this->faker->sentence(),
            'marca' => $this->faker->company(),
            'precio_compra' => $precio * 0.7,
            'precio_venta' => $precio,
            'stock_actual' => $this->faker->numberBetween(0, 100),
            'stock_minimo' => 5,
            'categoria_id' => \App\Models\CategoriaProducto::inRandomOrder()->first()?->id ?? 1,
            'activo' => true,
        ];
    }
}
