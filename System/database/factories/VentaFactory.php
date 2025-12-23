<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    public function definition(): array
    {
        $data = [
            'numero_factura' => $this->faker->unique()->bothify('FAC-#####'),
            'cliente_id' => \App\Models\Cliente::factory(),
            'empleado_id' => \App\Models\Empleado::factory(),
            'sesion_caja_id' => \App\Models\SesionCaja::factory(),
            'fecha_venta' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'subtotal' => $this->faker->randomFloat(2, 50, 500),
            'impuesto' => 0, // Calculated later usually, but seed mock
            'descuento' => 0,
            'total' => 0, // Should be sum, will fix in configure
            'estado' => $this->faker->randomElement(['Pagada', 'Pendiente']),
            'tipo_venta' => 'Contado',
        ];
        var_dump($data);
        return $data;
    }

    public function configure()
    {
        return $this->afterCreating(function (\App\Models\Venta $venta) {
            // Create details
            $total = 0;
            $detalles = \App\Models\DetalleVenta::factory()->count(3)->create(['venta_id' => $venta->id]);
            foreach ($detalles as $detalle) {
                $total += $detalle->subtotal;
            }
            $venta->subtotal = $total;
            $venta->impuesto = $total * 0.15; // Example tax
            $venta->total = $venta->subtotal + $venta->impuesto;
            $venta->save();
            
            // Create Pago if Paid
            if ($venta->estado === 'Pagada') {
                 \App\Models\Pago::factory()->create([
                     'venta_id' => $venta->id,
                     'monto' => $venta->total
                 ]);
            }
        });
    }
}
