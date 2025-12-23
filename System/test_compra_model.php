<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "Creating Compra manually...\n";
    $prov = \App\Models\Proveedor::first();
    if (!$prov) { $prov = \App\Models\Proveedor::factory()->create(); }
    $emp = \App\Models\Empleado::first();
    if (!$emp) { $emp = \App\Models\Empleado::factory()->create(); }

    $c = \App\Models\Compra::create([
        'numero_factura' => 'TEST-C-' . rand(100,999),
        'proveedor_id' => $prov->id,
        'empleado_id' => $emp->id,
        'fecha_compra' => now(),
        'fecha_recepcion' => now(),
        'subtotal' => 100,
        'impuesto' => 15,
        'total' => 115,
        'estado' => 'Completada',
        'tipo_pago' => 'Contado',
        'observaciones' => 'Manual test'
    ]);
    echo "COMPRA_OK: " . $c->id . "\n";
} catch (\Throwable $e) {
    echo "COMPRA_FAIL: " . $e->getMessage() . "\n";
}
