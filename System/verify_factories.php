<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$models = [
    \App\Models\ServicioMedico::class,
    \App\Models\CitaMedica::class,
    \App\Models\RegistroVacuna::class,
    \App\Models\HistorialMedico::class,
    \App\Models\Hospitalizacion::class,
    \App\Models\Laboratorio::class,
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
