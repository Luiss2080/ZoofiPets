<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetalleVentaFactory extends Factory
{
    public function definition(): array
    {
        $cantidad = $this->faker->numberBetween(1, 5);
        $precio = $this->faker->randomFloat(2, 10, 100);
        
        return [
            'venta_id' => \App\Models\Venta::factory(),
            'producto_id' => \App\Models\Producto::factory(),
            'cantidad' => $cantidad,
            'precio_unitario' => $precio,
            'subtotal' => $cantidad * $precio,
        ];
    }
}
