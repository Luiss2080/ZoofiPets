<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo_empleado' => $this->faker->unique()->numerify('EMP-####'),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'cedula' => $this->faker->unique()->numerify('###-######-####'),
            'telefono' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'direccion' => $this->faker->address(),
            'cargo_id' => \App\Models\Cargo::inRandomOrder()->first()->id ?? 1,
            'fecha_ingreso' => $this->faker->date(),
            'salario' => $this->faker->randomFloat(2, 400, 2000),
            'activo' => true,
        ];
    }
}
