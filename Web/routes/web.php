<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio.inicio');
})->name('home');

// Rutas de Nosotros
Route::prefix('nosotros')->group(function () {
    Route::get('/', function () {
        return view('nosotros.index');
    })->name('nosotros.index');

    Route::get('/equipo', function () {
        return view('nosotros.equipo');
    })->name('nosotros.equipo');

    Route::get('/instalaciones', function () {
        return view('nosotros.instalaciones');
    })->name('nosotros.instalaciones');
});

Route::get('/login', function () {
    return redirect('http://127.0.0.20:9010/login');
})->name('login');

Route::get('/registro', function () {
    return redirect('http://127.0.0.20:9010/registro');
})->name('registro');
