<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DevolucionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'venta_id' => \App\Models\Venta::factory(),
            'autorizado_por' => 1,
            'fecha_devolucion' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'motivo' => $this->faker->sentence(),
            'monto_reembolsado' => $this->faker->randomFloat(2, 10, 100),
            'estado' => $this->faker->randomElement(['Pendiente', 'Aprobada']),
        ];
    }
}
