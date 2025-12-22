<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "Creating Empleado factory...\n";
    $e = \App\Models\Empleado::factory()->make();
    echo "Empleado OK\n";
    
    echo "Creating Venta factory...\n";
    $v = \App\Models\Venta::factory()->make();
    echo "Venta OK\n";

    echo "Creating Devolucion factory...\n";
    $d = \App\Models\Devolucion::factory()->make();
    echo "Devolucion OK\n";
} catch (\Throwable $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString();
}
