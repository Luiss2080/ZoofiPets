<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompraFactory extends Factory
{
    public function definition(): array
    {
        return [
            'numero_factura' => $this->faker->unique()->bothify('FC-#####'),
            'proveedor_id' => \App\Models\Proveedor::factory(),
            'empleado_id' => \App\Models\Empleado::factory(),
            'fecha_compra' => $this->faker->dateTimeBetween('-1 year', '-1 month'),
            'fecha_recepcion' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'subtotal' => 0, // Calculated later
            'impuesto' => 0,
            'descuento' => 0,
            'total' => 0,
            'estado' => $this->faker->randomElement(['Pedido', 'En_Transito', 'Recibida', 'Cancelada']),
            'tipo_pago' => $this->faker->randomElement(['Contado', 'Credito_30', 'Credito_60']),
            'observaciones' => $this->faker->sentence(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (\App\Models\Compra $compra) {
            $total = 0;
            // Create 3 to 5 items
            $detalles = \App\Models\DetalleCompra::factory()->count(rand(3,5))->create([
                'compra_id' => $compra->id
            ]);

            foreach ($detalles as $d) {
                $total += $d->subtotal;
            }

            $compra->subtotal = $total;
            $compra->impuesto = $total * 0.15;
            $compra->total = $compra->subtotal + $compra->impuesto;
            $compra->save();
        });
    }
}
