<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "Creating Pago...\n";
    $pago = \App\Models\Pago::factory()->create();
    echo "Pago ID: " . $pago->id . " - Monto: " . $pago->monto . "\n";
    echo "Metodo: " . $pago->metodoPago->nombre . "\n";
    echo "Venta ID: " . $pago->venta_id . "\n";
} catch (\Throwable $e) {
    echo "FAIL: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString();
}
