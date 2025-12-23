<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetalleCompraFactory extends Factory
{
    protected $model = \App\Models\DetalleCompra::class;

    public function definition(): array
    {
        $cantidad = $this->faker->numberBetween(1, 50);
        $precio = $this->faker->randomFloat(2, 5, 200);

        return [
            'compra_id' => \App\Models\Compra::factory(),
            'producto_id' => \App\Models\Producto::inRandomOrder()->first()?->id ?? \App\Models\Producto::factory(),
            'cantidad' => $cantidad,
            'precio_unitario' => $precio,
            'subtotal' => $cantidad * $precio,
        ];
    }
}
