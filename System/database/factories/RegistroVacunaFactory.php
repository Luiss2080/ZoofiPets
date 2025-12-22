<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroVacunaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'mascota_id' => \App\Models\Mascota::factory(),
            'empleado_id' => 1, // Assuming admin/default vet exists, or factory
            'servicio_medico_id' => \App\Models\ServicioMedico::factory(),
            'vacuna' => $this->faker->randomElement(['Rabia', 'Parvovirus', 'Moquillo', 'Triple Felina', 'Leucemia']),
            'laboratorio' => $this->faker->company(),
            'lote' => $this->faker->bothify('LOT-####'),
            'fecha_aplicacion' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'proxima_dosis' => $this->faker->dateTimeBetween('now', '+1 year'),
            'via_administracion' => $this->faker->randomElement(['Subcutanea', 'Intramuscular', 'Oral', 'Intranasal']),
            'ubicacion_aplicacion' => $this->faker->randomElement(['Lomo', 'Pieza Trasera Izq', 'Pieza Trasera Der']),
            'recordatorio_enviado' => $this->faker->boolean(),
            'observaciones' => $this->faker->sentence(),
            'reaccion_adversa' => $this->faker->boolean(5),
        ];
    }
}
