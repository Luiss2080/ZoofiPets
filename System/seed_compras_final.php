<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "Creating 20 Compras with Details...\n";
    // Ensure we have suppliers and products first
    if (\App\Models\Proveedor::count() < 5) {
        \App\Models\Proveedor::factory(10)->create();
    }
    if (\App\Models\Producto::count() < 5) {
        \App\Models\Producto::factory(10)->create();
    }

    $compras = \App\Models\Compra::factory(20)->create();
    echo "COMPRA_SUCCESS: " . $compras->count() . " created.\n";
} catch (\Throwable $e) {
    echo "COMPRA_FAIL: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString();
}
