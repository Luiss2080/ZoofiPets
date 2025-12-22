<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PagoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'venta_id' => \App\Models\Venta::factory(),
            'metodo_pago_id' => \App\Models\MetodoPago::inRandomOrder()->first()?->id ?? \App\Models\MetodoPago::factory(),
            'monto' => $this->faker->randomFloat(2, 10, 100),
            'moneda' => 'USD',
            'tipo_comprobante' => 'Ticket',
        ];
    }
}
