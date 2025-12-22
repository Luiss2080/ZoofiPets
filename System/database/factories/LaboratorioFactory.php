<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LaboratorioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'mascota_id' => \App\Models\Mascota::factory(),
            'empleado_id' => \App\Models\Empleado::factory(),
            'tipo_examen' => $this->faker->randomElement(['Hemograma', 'Bioquimica', 'Urianalisis', 'Coproparasitoscopico']),
            'fecha_solicitud' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'fecha_resultado' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'resultados_texto' => $this->faker->paragraph(),
            'laboratorio_externo' => $this->faker->boolean(20),
            'nombre_laboratorio_externo' => $this->faker->company(),
            'estado' => $this->faker->randomElement(['Pendiente', 'Completado', 'Cancelado']),
            'costo' => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}
