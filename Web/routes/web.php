<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return redirect('http://127.0.0.20:9010/login');
})->name('login');

Route::get('/registro', function () {
    return redirect('http://127.0.0.20:9010/registro');
})->name('registro');
