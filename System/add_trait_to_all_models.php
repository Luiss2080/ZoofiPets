<?php

$dir = __DIR__ . '/app/Models';
$files = glob($dir . '/*.php');

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Check if it's a class extending Model
    if (strpos($content, 'extends Model') !== false || strpos($content, 'extends Authenticatable') !== false) {
        // Check if HasFactory is imported
        if (strpos($content, 'use Illuminate\Database\Eloquent\Factories\HasFactory;') === false) {
            // Add import after namespace
            $content = preg_replace(
                '/namespace App\\\Models;/',
                "namespace App\Models;\n\nuse Illuminate\Database\Eloquent\Factories\HasFactory;",
                $content
            );
        }
        
        // Check if HasFactory is used in class
        if (strpos($content, 'use HasFactory;') === false) {
            // Add use trait inside class
            $content = preg_replace(
                '/class\s+\w+\s+extends\s+\w+\s*\{/',
                "$0\n    use HasFactory;",
                $content
            );
        }
        
        file_put_contents($file, $content);
        echo "Updated $file\n";
    }
}
