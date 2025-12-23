<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "Creating Proveedor...\n";
    \App\Models\Proveedor::factory()->create();
    echo "Creating CategoriaProducto...\n";
    \App\Models\CategoriaProducto::factory()->create();
    
    echo "Creating Producto...\n";
    $p = \App\Models\Producto::factory()->create();
    echo "Producto OK: " . $p->nombre . "\n";
} catch (\Throwable $e) {
    echo "FAIL: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString();
}
