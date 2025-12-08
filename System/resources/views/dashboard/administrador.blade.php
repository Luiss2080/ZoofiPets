@extends('layouts.dashboard')

@section('title', 'Dashboard Administrador - ZoofiPets')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}">
@endpush

@section('content')
<div class="dashboard-admin">
    <div class="dashboard-header">
        <h1>Dashboard Administrador</h1>
        <p>Panel de control del sistema veterinario ZoofiPets</p>
    </div>
    
    <div class="dashboard-stats">
        <div class="stat-card">
            <div class="stat-icon clients-stat">
                <i class="clients-icon"></i>
            </div>
            <div class="stat-info">
                <h3>{{ $totalClientes ?? 0 }}</h3>
                <p>Clientes Registrados</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon pets-stat">
                <i class="pets-icon"></i>
            </div>
            <div class="stat-info">
                <h3>{{ $totalMascotas ?? 0 }}</h3>
                <p>Mascotas en Sistema</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon appointments-stat">
                <i class="appointments-icon"></i>
            </div>
            <div class="stat-info">
                <h3>{{ $citasHoy ?? 0 }}</h3>
                <p>Citas de Hoy</p>
            </div>
        </div>
        
        <div class="stat-card">
            <div class="stat-icon revenue-stat">
                <i class="revenue-icon"></i>
            </div>
            <div class="stat-info">
                <h3>${{ number_format($ingresosMes ?? 0, 2) }}</h3>
                <p>Ingresos del Mes</p>
            </div>
        </div>
    </div>
    
    <div class="dashboard-charts">
        <div class="chart-container">
            <h3>Citas por Mes</h3>
            <canvas id="citasChart"></canvas>
        </div>
        
        <div class="chart-container">
            <h3>Ingresos por Servicio</h3>
            <canvas id="ingresosChart"></canvas>
        </div>
    </div>
    
    <div class="recent-activities">
        <h3>Actividades Recientes</h3>
        <div class="activities-list">
            <!-- Lista de actividades recientes -->
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
@endpush