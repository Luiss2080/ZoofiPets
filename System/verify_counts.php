<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$tables = [
    'cargos' => 5,
    'metodos_pago' => 5,
    'proveedores' => 20,
    'productos' => 20,
    'clientes' => 20,
    'mascotas' => 20,
    'sala_espera' => 20,
    'recordatorios' => 20,
    'interacciones_clientes' => 20,
    'sesiones_caja' => 20,
    'ventas' => 20,
    'devoluciones' => 20,
    'movimientos_inventario' => 20,
    'servicios_medicos' => 20,
    'citas_medicas' => 20,
    'registro_vacunas' => 20,
    'historiales_medicos' => 20,
    'hospitalizaciones' => 20,
    'laboratorios' => 20,
];

foreach ($tables as $table => $expected) {
    $count = Illuminate\Support\Facades\DB::table($table)->count();
    echo "Table '$table': $count records (Expected >= $expected) - " . ($count >= $expected ? "OK" : "FAIL") . "\n";
}
