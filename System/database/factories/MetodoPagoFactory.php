<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MetodoPagoFactory extends Factory
{
    protected $model = \App\Models\MetodoPago::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->word(),
            'descripcion' => $this->faker->sentence(),
            'activo' => true,
        ];
    }
}
