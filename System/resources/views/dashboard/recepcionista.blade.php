@extends('layouts.dashboard')

@section('title', 'Dashboard Recepcionista - ZoofiPets')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}">
@endpush

@section('content')
<div class="dashboard-recepcionista">
    <div class="dashboard-header">
        <h1>Dashboard Recepcionista</h1>
        <p>Panel de recepción - {{ auth()->user()->name }}</p>
    </div>
    
    <div class="reception-tools">
        <div class="appointment-management">
            <h3>Gestión de Citas</h3>
            <div class="management-actions">
                <a href="{{ route('citas.create') }}" class="btn btn-primary">
                    <i class="plus-icon"></i>
                    Nueva Cita
                </a>
                
                <a href="{{ route('citas.index') }}" class="btn btn-secondary">
                    <i class="calendar-icon"></i>
                    Ver Todas las Citas
                </a>
            </div>
            
            <div class="today-appointments">
                <h4>Citas de Hoy</h4>
                <div class="appointments-timeline">
                    <!-- Timeline de citas del día -->
                </div>
            </div>
        </div>
        
        <div class="client-management">
            <h3>Gestión de Clientes</h3>
            <div class="client-search">
                <input type="text" placeholder="Buscar cliente o mascota...">
                <button type="submit">Buscar</button>
            </div>
            
            <div class="quick-register">
                <a href="{{ route('clientes.create') }}" class="btn btn-outline">
                    <i class="user-plus-icon"></i>
                    Registrar Nuevo Cliente
                </a>
                
                <a href="{{ route('mascotas.create') }}" class="btn btn-outline">
                    <i class="pet-plus-icon"></i>
                    Registrar Nueva Mascota
                </a>
            </div>
        </div>
    </div>
    
    <div class="reception-stats">
        <div class="stat-item">
            <h4>Clientes Atendidos Hoy</h4>
            <span class="stat-number">{{ $clientesHoy ?? 0 }}</span>
        </div>
        
        <div class="stat-item">
            <h4>Citas Pendientes</h4>
            <span class="stat-number">{{ $citasPendientes ?? 0 }}</span>
        </div>
        
        <div class="stat-item">
            <h4>Ingresos del Día</h4>
            <span class="stat-number">${{ number_format($ingresosDia ?? 0, 2) }}</span>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/dashboard/recepcionista.js') }}"></script>
@endpush