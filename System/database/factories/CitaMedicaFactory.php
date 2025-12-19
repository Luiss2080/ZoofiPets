<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CitaMedica>
 */
class CitaMedicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fecha = $this->faker->dateTimeBetween('now', '+1 month');
        return [
            'fecha_hora' => $fecha,
            'motivo_consulta' => $this->faker->sentence(),
            'estado' => $this->faker->randomElement(['Programada', 'Confirmada', 'Cancelada', 'Completada']),
            // We'll override these in seeder or let them be created
            'cliente_id' => \App\Models\Cliente::factory(),
            'mascota_id' => \App\Models\Mascota::factory(), 
            // 'empleado_id' (vet) usually assigned later or now
            'empleado_id' => 1, 
        ];
    }
}
