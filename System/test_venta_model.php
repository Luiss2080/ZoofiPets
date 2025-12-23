<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "Creating Venta directly...\n";
    $v = \App\Models\Venta::create([
        'numero_factura' => 'TEST-' . rand(1000,9999),
        'cliente_id' => 1, // Assumes ID 1 exists
        'empleado_id' => 1,
        'sesion_caja_id' => 1, // Assumes ID 1 exists? If not, foreign key error (not 1364)
        'fecha_venta' => now(),
        'subtotal' => 100,
        'total' => 100,
        'estado' => 'Pagada',
        'tipo_venta' => 'Contado'
    ]);
    echo "VENTA_OK: " . $v->id . "\n";
} catch (\Throwable $e) {
    echo "VENTA_FAIL: " . $e->getMessage() . "\n";
}
