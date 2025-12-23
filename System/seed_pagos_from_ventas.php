<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "Seeding Pagos for existing Ventas...\n";
    $ventas = \App\Models\Venta::all();
    if ($ventas->count() === 0) {
        echo "No sales found. Creating 20 independent sales...\n";
        \App\Models\Venta::factory(20)->create(); // Hopefully works in isolation
        $ventas = \App\Models\Venta::all();
    }
    
    echo "Found " . $ventas->count() . " sales.\n";
    
    foreach ($ventas as $venta) {
        // Skip if already paid? No, force create for demo.
        if (\App\Models\Pago::where('venta_id', $venta->id)->exists()) {
            continue;
        }

        try {
             \App\Models\Pago::factory()->create([
                'venta_id' => $venta->id,
                'metodo_pago_id' => \App\Models\MetodoPago::inRandomOrder()->first()?->id ?? \App\Models\MetodoPago::factory(),
                'monto' => $venta->total,
                'fecha_pago' => $venta->fecha_venta // Align dates
            ]);
            echo ".";
        } catch (\Throwable $e2) {
            echo "!";
        }
    }
    echo "\n PAGO_DONE: " . \App\Models\Pago::count() . "\n";
} catch (\Throwable $e) {
    echo "FAIL: " . $e->getMessage() . "\n";
}
