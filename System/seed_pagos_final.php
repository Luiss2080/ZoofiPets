<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "Creating 20 Pagos...\n";
    $pagos = \App\Models\Pago::factory(20)->create();
    echo "PAGO_SUCCESS: " . $pagos->count() . " created.\n";
} catch (\Throwable $e) {
    echo "PAGO_FAIL: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString();
}
