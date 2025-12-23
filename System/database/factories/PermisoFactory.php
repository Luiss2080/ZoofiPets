<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PermisoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->word() . '_' . $this->faker->unique()->word(),
            'descripcion' => $this->faker->sentence(),
        ];
    }
}
