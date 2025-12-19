<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServicioMedico>
 */
class ServicioMedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->words(3, true),
            'descripcion' => $this->faker->sentence(),
            'precio' => $this->faker->randomFloat(2, 20, 300),
            'duracion_estimada_minutos' => $this->faker->randomElement([15, 30, 45, 60]),
            'categoria' => $this->faker->randomElement(['Consulta', 'Vacunacion', 'Cirugia', 'Tratamiento', 'Estetica']),
            'requiere_cita' => true,
            'activo' => true,
        ];
    }
}
