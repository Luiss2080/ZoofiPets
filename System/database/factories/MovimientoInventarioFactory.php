<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovimientoInventarioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'producto_id' => \App\Models\Producto::factory(),
            'tipo' => $this->faker->randomElement(['Entrada', 'Salida', 'Ajuste']),
            'cantidad' => $this->faker->numberBetween(1, 100),
            'motivo' => $this->faker->sentence(),
            'fecha' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'usuario_id' => \App\Models\User::factory(), // Or null
        ];
    }
}
