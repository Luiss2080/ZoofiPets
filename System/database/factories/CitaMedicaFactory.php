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
            'numero_cita' => $this->faker->unique()->numerify('CITA-#######'),
            'fecha_hora' => $fecha,
            'duracion_minutos' => 30,
            'motivo_consulta' => $this->faker->sentence(),
            'estado' => $this->faker->randomElement(['Programada', 'Confirmada', 'Cancelada', 'Completada']),
            'prioridad' => $this->faker->randomElement(['Normal', 'Alta', 'Baja']),
            
            // Relationships (resolved at runtime or via factory)
            'cliente_id' => \App\Models\Cliente::factory(),
            'mascota_id' => \App\Models\Mascota::factory(), 
            'empleado_id' => \App\Models\Empleado::inRandomOrder()->first()->id ?? \App\Models\Empleado::factory(), 
            'servicio_medico_id' => \App\Models\ServicioMedico::inRandomOrder()->first()->id ?? \App\Models\ServicioMedico::factory(),
        ];
    }
}
