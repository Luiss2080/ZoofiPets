<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    echo "Creating Admin User...\n";
    $user = \App\Models\User::factory()->create([
        'name' => 'Admin Sistema',
        'email' => 'admin@zoofipets.com',
        'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
    ]);
    echo "User Created: " . $user->email . "\n";
    echo "ID: " . $user->id . "\n";
} catch (\Throwable $e) {
    echo "FAIL: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString();
}
