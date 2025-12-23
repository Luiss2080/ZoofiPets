<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$models = [
    'User' => \App\Models\User::class,
    'Role' => \App\Models\Role::class,
    'Permiso' => \App\Models\Permiso::class,
    'DetalleVenta' => \App\Models\DetalleVenta::class,
    'Pago' => \App\Models\Pago::class,
];

foreach ($models as $name => $model) {
    echo "Testing $name... ";
    try {
        if (!class_exists($model)) {
            echo "SKIP (Class not found)\n";
            continue;
        }
        $model::factory()->create();
        echo "OK\n";
    } catch (\Throwable $e) {
        echo "FAIL: " . $e->getMessage() . "\n";
    }
}
