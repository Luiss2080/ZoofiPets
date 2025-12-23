<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SalaEsperaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'mascota_id' => \App\Models\Mascota::factory(),
            'cita_id' => null, // Optional
            'hora_llegada' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'hora_atencion' => $this->faker->optional(0.7)->dateTimeBetween('-1 week', 'now'),
            'estado' => $this->faker->randomElement(['Esperando', 'En_Consulta', 'Atendido', 'Ausente']),
            'prioridad' => $this->faker->numberBetween(1, 5),
            'motivo_visita' => $this->faker->sentence(),
        ];
    }
}
