<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/registro', function () {
    return view('auth.registro');
})->name('registro');

Route::post('/registro', function () {
    // Lógica de registro (Placeholder)
    return back()->with('success', 'Registro simulado exitoso.');
})->name('register.submit');

Route::post('/registro/verify', function () {
    // Lógica de verificación (Placeholder)
    return back()->with('success', 'Verificación simulada exitosa.');
})->name('register.verify');

// Rutas de restablecimiento de contraseña (Placeholder para evitar errores)
Route::get('/password/reset', function () {
    return view('auth.recuperar');
})->name('password.request');

Route::post('/password/email', function () {
    // Lógica de envío de email
})->name('password.email');

Route::get('/password/reset/{token}', function ($token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->name('password.reset');

Route::post('/password/reset', function () {
    // Lógica de reset
})->name('password.update');
