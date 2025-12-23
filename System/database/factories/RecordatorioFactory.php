<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecordatorioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cliente_id' => \App\Models\Cliente::factory(),
            'mascota_id' => \App\Models\Mascota::factory(),
            'tipo' => $this->faker->randomElement(['Vacuna', 'Cita', 'Control', 'Cumpleaños']),
            'fecha_programada' => $this->faker->dateTimeBetween('now', '+2 months'),
            'estado' => $this->faker->randomElement(['Pendiente', 'Enviado', 'Fallido']),
            'medio' => $this->faker->randomElement(['WhatsApp', 'Email', 'SMS']),
            'mensaje' => $this->faker->sentence(),
        ];
    }
}
