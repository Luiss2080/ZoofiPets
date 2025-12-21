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

    Route::get('/galeria', function () {
        return view('nosotros.galeria');
    })->name('nosotros.galeria');

    Route::get('/testimonios', function () {
        return view('nosotros.testimonios');
    })->name('nosotros.testimonios');

    Route::get('/faqs', function () {
        return view('nosotros.faqs');
    })->name('nosotros.faqs');
});

Route::get('/login', function () {
    return redirect('http://127.0.0.20:9010/login');
})->name('login');

Route::get('/registro', function () {
    return redirect('http://127.0.0.20:9010/registro');
})->name('registro');

// Rutas de Servicios
Route::prefix('servicios')->group(function () {
    Route::get('/', function () {
        return view('servicios.index');
    })->name('servicios.index');

    Route::get('/consultas', function () {
        return view('servicios.consultas.index');
    })->name('servicios.consultas.index');

    Route::get('/vacunacion', function () {
        return view('servicios.vacunacion.index');
    })->name('servicios.vacunacion.index');

    Route::get('/estetica', function () {
        return view('servicios.estetica.index');
    })->name('servicios.estetica.index');
    
    Route::get('/cirugia', function () {
        return view('servicios.cirugia.index');
    })->name('servicios.cirugia.index');

    Route::get('/urgencias', function () {
        return view('servicios.emergencias.index');
    })->name('servicios.emergencias.index');

    Route::get('/dermatologia', function () {
        return view('servicios.dermatologia.index');
    })->name('servicios.dermatologia.index');
});

// Rutas de Especialistas
Route::prefix('especialistas')->group(function () {
    Route::get('/', function () {
        return view('especialistas.index');
    })->name('especialistas.index');
});

// Rutas de Blog
Route::prefix('blog')->group(function () {
    Route::get('/', function () {
        return view('blog.index');
    })->name('blog.index');
});

// Rutas de Contacto
Route::prefix('contacto')->group(function () {
    Route::get('/', function () {
        return view('contacto.index');
    })->name('contacto.index');
});

// Rutas de Tienda (Productos)
Route::prefix('tienda')->group(function () {
    Route::get('/', function () {
        return view('productos.index');
    })->name('productos.index');
});

// Rutas de Citas
Route::prefix('citas')->group(function () {
    Route::get('/agendar', function () {
        return view('citas.solicitud.index');
    })->name('citas.solicitud.index');

    Route::get('/confirmacion', function () {
        return view('citas.confirmacion.index');
    })->name('citas.confirmacion');
});
