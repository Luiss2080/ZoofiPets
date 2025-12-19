@extends('layouts.admin')

@section('title', 'Dashboard - ZoofiPets')

@section('content')
<div class="dashboard-welcome">
    <div class="welcome-banner">
        <div class="banner-content">
            <h1>¡Bienvenido, {{ Auth::user()->name }}!</h1>
            <p>Sistema de Gestión Veterinaria ZoofiPets</p>
            <div class="date-badge">
                <i class="fas fa-calendar-alt"></i>
                <span id="current-date">{{ now()->format('d/m/Y') }}</span>
            </div>
        </div>
        <div class="banner-image">
           <!-- <img src="{{ asset('images/dashboard-hero.png') }}" alt="Dashboard"> -->
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon clients">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-info">
                <h3>Clientes</h3>
                <p class="stat-value">{{ \App\Models\Cliente::count() ?? 0 }}</p>
                <span class="stat-trend positive">Total registrados</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon pets">
                <i class="fas fa-paw"></i>
            </div>
            <div class="stat-info">
                <h3>Mascotas</h3>
                <p class="stat-value">{{ \App\Models\Mascota::count() ?? 0 }}</p>
                <span class="stat-trend positive">Pacientes activos</span>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon products">
                <i class="fas fa-box"></i>
            </div>
            <div class="stat-info">
                <h3>Productos</h3>
                <p class="stat-value">{{ \App\Models\Producto::count() ?? 0 }}</p>
                <span class="stat-trend regular">En inventario</span>
            </div>
        </div>
    </div>
</div>
@endsection
