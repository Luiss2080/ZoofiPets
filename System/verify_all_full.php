<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$models = [
    'Cargo' => \App\Models\Cargo::class,
    'MetodoPago' => \App\Models\MetodoPago::class,
    'Proveedor' => \App\Models\Proveedor::class,
    'CategoriaProducto' => \App\Models\CategoriaProducto::class,
    'Producto' => \App\Models\Producto::class,
    'Cliente' => \App\Models\Cliente::class,
    'Mascota' => \App\Models\Mascota::class,
    'SalaEspera' => \App\Models\SalaEspera::class,
    'Recordatorio' => \App\Models\Recordatorio::class,
    'InteraccionCliente' => \App\Models\InteraccionCliente::class,
    'SesionCaja' => \App\Models\SesionCaja::class,
    'Venta' => \App\Models\Venta::class,
    'Devolucion' => \App\Models\Devolucion::class,
    'MovimientoInventario' => \App\Models\MovimientoInventario::class,
    'ServicioMedico' => \App\Models\ServicioMedico::class,
    'CitaMedica' => \App\Models\CitaMedica::class,
    'RegistroVacuna' => \App\Models\RegistroVacuna::class,
    'HistorialMedico' => \App\Models\HistorialMedico::class,
    'Hospitalizacion' => \App\Models\Hospitalizacion::class,
    'Laboratorio' => \App\Models\Laboratorio::class,
];

foreach ($models as $name => $model) {
    echo "Testing $name... ";
    try {
        $model::factory()->create();
        echo "OK\n";
    } catch (\Throwable $e) {
        echo "FAIL: " . $e->getMessage() . "\n";
        // echo $e->getTraceAsString();
    }
}
