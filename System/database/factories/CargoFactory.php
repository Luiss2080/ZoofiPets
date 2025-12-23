<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CargoFactory extends Factory
{
    protected $model = \App\Models\Cargo::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->jobTitle(),
            'descripcion' => $this->faker->sentence(),
        ];
    }
}
