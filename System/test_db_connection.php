<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $config = config('database.connections.mysql');
    echo "Host: " . $config['host'] . "\n";
    echo "Port: " . $config['port'] . "\n";
    echo "Database: " . $config['database'] . "\n";
    echo "Username: " . $config['username'] . "\n";
    // echo "Password: " . $config['password'] . "\n"; // sensitive

    \Illuminate\Support\Facades\DB::connection()->getPdo();
    echo "Connection Successful!\n";
} catch (\Throwable $e) {
    echo "Connection Failed: " . $e->getMessage() . "\n";
}
