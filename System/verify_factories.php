<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$models = [
    \App\Models\Cargo::class,
    \App\Models\MetodoPago::class,
    \App\Models\Proveedor::class,
    \App\Models\CategoriaProducto::class,
    \App\Models\Producto::class,
    \App\Models\Cliente::class,
    \App\Models\Mascota::class,
    // Add others if these pass
];

foreach ($models as $model) {
    echo "Testing $model... ";
    try {
        $model::factory()->make();
        echo "OK\n";
    } catch (\Throwable $e) {
        echo "FAIL: " . $e->getMessage() . "\n";
    }
}
