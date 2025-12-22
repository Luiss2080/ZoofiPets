<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HospitalizacionFactory extends Factory
{
    public function definition(): array
    {
        $fechaIngreso = $this->faker->dateTimeBetween('-1 month', 'now');
        return [
            'mascota_id' => \App\Models\Mascota::factory(),
            'empleado_id' => 1,
            'motivo_ingreso' => $this->faker->sentence(),
            'fecha_ingreso' => $fechaIngreso,
            'fecha_alta_estimada' => $this->faker->dateTimeBetween($fechaIngreso, '+5 days'),
            'fecha_alta_real' => $this->faker->optional(0.7)->dateTimeBetween($fechaIngreso, '+7 days'),
            'estado' => $this->faker->randomElement(['Ingresado', 'Alta', 'Fallecido', 'Transferido']),
            'jaula_habitacion' => 'Jaula ' . $this->faker->numberBetween(1, 20),
            'costo_total' => $this->faker->randomFloat(2, 100, 2000),
            'dieta_especial' => $this->faker->sentence(),
            'tratamiento_actual' => $this->faker->sentence(),
        ];
    }
}
