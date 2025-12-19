<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin;

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

// Autenticación
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Panel de Administración (Protegido)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Modulo Recepción
    Route::resource('clientes', Admin\ClienteController::class);
    Route::resource('mascotas', Admin\MascotaController::class);
    Route::resource('citas', Admin\CitaMedicaController::class);

    // Rutas placeholder para sidebar (evitan crashes)
    Route::get('/docentes', function() { return 'Modulo Docentes'; })->name('docentes.index');
    Route::get('/estudiantes', function() { return 'Modulo Estudiantes'; })->name('estudiantes.index');
    Route::get('/colegios', function() { return 'Modulo Colegios'; })->name('colegios.index');
    Route::get('/cursos', function() { return 'Modulo Cursos'; })->name('cursos.index');
    Route::get('/materias', function() { return 'Modulo Materias'; })->name('materias.index');
    Route::get('/usuarios', function() { return 'Modulo Usuarios'; })->name('usuarios.index');
    Route::get('/materiales', function() { return 'Modulo Materiales'; })->name('materiales.index');
    Route::get('/laboratorios', function() { return 'Modulo Laboratorios'; })->name('laboratorios.index');
    Route::get('/roles', function() { return 'Modulo Roles'; })->name('roles.index');
    Route::get('/permisos', function() { return 'Modulo Permisos'; })->name('permisos.index');
});

// Rutas fuera del prefijo admin (según sidebar)
Route::get('/libros', function() { return 'Modulo Biblioteca'; })->name('libros.index');
Route::get('/reportes', function() { return 'Modulo Reportes'; })->name('reportes.index');
