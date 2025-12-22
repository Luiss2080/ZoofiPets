<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InteraccionClienteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cliente_id' => \App\Models\Cliente::factory(),
            'empleado_id' => 1,
            'tipo' => $this->faker->randomElement(['Llamada', 'Visita', 'Mensaje', 'Correo']),
            'fecha_interaccion' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'motivo' => $this->faker->sentence(3),
            'detalle' => $this->faker->paragraph(),
            'resultado' => $this->faker->sentence(),
            'estado' => $this->faker->randomElement(['Abierto', 'Cerrado']),
        ];
    }
}
