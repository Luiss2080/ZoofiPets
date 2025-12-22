<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HistorialMedicoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'mascota_id' => \App\Models\Mascota::factory(),
            'empleado_id' => 1,
            'fecha_consulta' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'peso' => $this->faker->randomFloat(2, 1, 50),
            'temperatura' => $this->faker->randomFloat(1, 37.5, 40.0),
            'sintomas' => $this->faker->sentence(),
            'diagnostico' => $this->faker->paragraph(),
            'tratamiento' => $this->faker->paragraph(),
            'peso_salida' => $this->faker->randomFloat(2, 1, 50),
            'temperatura_salida' => $this->faker->randomFloat(1, 37.5, 40.0),
            'recomendaciones' => $this->faker->sentence(),
        ];
    }
}
