<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SesionCajaFactory extends Factory
{
    public function definition(): array
    {
        $apertura = $this->faker->dateTimeBetween('-1 month', 'now');
        $cierre = clone $apertura;
        $cierre->modify('+8 hours');
        
        return [
            'empleado_id' => 1, // Default user
            'fecha_apertura' => $apertura,
            'fecha_cierre' => $cierre,
            'monto_inicial' => $this->faker->randomFloat(2, 50, 200),
            'monto_final' => $this->faker->randomFloat(2, 500, 2000),
            'diferencia' => $this->faker->randomFloat(2, -10, 10),
            'estado' => 'Cerrada',
            'notas' => $this->faker->sentence(),
        ];
    }
}
