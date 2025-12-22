<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin;

Route::get('/', function () {
    return redirect()->route('login');
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

// Rutas de restablecimiento de contraseña (Placeholder)
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

// Panel de Administración (Dashboard General)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Módulos de Administración (Usuarios, Roles, Permisos)
    Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios.index');
    Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
    Route::get('/permisos', [App\Http\Controllers\PermisoController::class, 'index'])->name('permisos.index');

    // Recursos Humanos
    Route::get('/empleados', function() { return 'Modulo Empleados'; })->name('empleados.index');
    Route::get('/cargos', function() { return 'Modulo Cargos'; })->name('cargos.index');
    Route::get('/horarios', function() { return 'Modulo Horarios'; })->name('horarios.index');

    // Compras y Proveedores
    Route::get('/proveedores', [App\Http\Controllers\ProveedorController::class, 'index'])->name('proveedores.index');
    Route::get('/compras', function() { return 'Modulo Compras'; })->name('compras.index');

    // Gestión Veterinaria Avanzada
    Route::get('/servicios', [App\Http\Controllers\ServicioController::class, 'index'])->name('servicios.index');

    // Gestión Tienda Avanzada
    Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categorias.index');
    Route::get('/promociones', function() { return 'Modulo Promociones'; })->name('promociones.index');
    Route::get('/movimientos', [App\Http\Controllers\MovimientoController::class, 'index'])->name('movimientos.index');
    Route::get('/alertas', function() { return 'Modulo Alertas de Stock'; })->name('alertas.index');
    
    // Configuración Financiera
    Route::get('/metodos-pago', [App\Http\Controllers\MetodoPagoController::class, 'index'])->name('metodos_pago.index');
    
    // Rutas legacy/placeholders para evitar 404s en enlaces antiguos si quedan
    Route::get('/docentes', function() { return 'Modulo Docentes'; })->name('docentes.index');
    Route::get('/estudiantes', function() { return 'Modulo Estudiantes'; })->name('estudiantes.index');  
});

// Modulo Recepcionista
Route::middleware(['auth'])->prefix('recepcion')->name('recepcionista.')->group(function () {
    // Citas Médicas
    Route::resource('citas', Admin\CitaMedicaController::class);
    // Clientes y Mascotas (Gestión desde recepción)
    Route::resource('clientes', Admin\ClienteController::class);
    // Pagos
    Route::resource('pagos', Admin\PagoController::class)->names([
        'index' => 'pagos.index',
        'create' => 'pagos.create',
        'store' => 'pagos.store',
        'edit' => 'pagos.edit',
        'update' => 'pagos.update',
        'destroy' => 'pagos.destroy',
    ]);
});

// Modulo Veterinario
Route::middleware(['auth'])->prefix('veterinaria')->name('veterinario.')->group(function () {
    // Consultas Médicas
    Route::resource('consultas', Admin\ConsultaController::class);
    // Pacientes (Mascotas)
    Route::resource('mascotas', Admin\MascotaController::class);
    // Vacunas
    Route::resource('vacunas', Admin\VacunaController::class)->names([
        'index' => 'vacunas.index',
        'create' => 'vacunas.create',
        'store' => 'vacunas.store',
        'edit' => 'vacunas.edit',
        'update' => 'vacunas.update',
        'destroy' => 'vacunas.destroy',
    ]);
    // Historiales Médicos
    Route::get('/historiales', [App\Http\Controllers\HistorialMedicoController::class, 'index'])->name('historiales.index');
});

// Modulo Vendedor (Tienda)
Route::middleware(['auth'])->prefix('tienda')->name('vendedor.')->group(function () {
    // Ventas
    Route::resource('ventas', Admin\VentaController::class);
    // Productos
    Route::resource('productos', Admin\ProductoController::class);
    // Inventario (Puede ser una vista diferente de productos)
    Route::get('/inventario', [Admin\InventarioController::class, 'index'])->name('inventario.index');
});

// Rutas Globales / Compartidas
Route::middleware(['auth'])->group(function () {
    Route::get('/calendario', function() { return view('calendario.index'); })->name('calendario.index');
    Route::get('/perfil', function() { return view('perfil.index'); })->name('perfil.index');
    Route::get('/configuraciones', function() { return view('configuraciones.index'); })->name('configuraciones.index');
    Route::get('/reportes', function() { return view('reportes.index'); })->name('reportes.index');
    Route::get('clientes/{id}/mascotas', [Admin\ClienteController::class, 'getMascotas'])->name('clientes.mascotas');
});
