@extends('layouts.dashboard')

@section('title', 'Dashboard Veterinario - ZoofiPets')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}">
@endpush

@section('content')
<div class="dashboard-veterinario">
    <div class="dashboard-header">
        <h1>Dashboard Veterinario</h1>
        <p>Panel de trabajo veterinario - {{ auth()->user()->name }}</p>
    </div>
    
    <div class="vet-schedule">
        <div class="schedule-today">
            <h3>Citas de Hoy</h3>
            <div class="appointments-list">
                @forelse($citasHoy ?? [] as $cita)
                <div class="appointment-card">
                    <div class="appointment-time">{{ $cita->hora }}</div>
                    <div class="appointment-info">
                        <h4>{{ $cita->mascota->nombre }}</h4>
                        <p>Cliente: {{ $cita->cliente->nombre }}</p>
                        <p>Servicio: {{ $cita->servicio->nombre }}</p>
                    </div>
                    <div class="appointment-actions">
                        <a href="{{ route('citas.show', $cita) }}" class="btn btn-primary">Ver</a>
                    </div>
                </div>
                @empty
                <p>No hay citas programadas para hoy</p>
                @endforelse
            </div>
        </div>
        
        <div class="quick-actions">
            <h3>Acciones Rápidas</h3>
            <div class="actions-grid">
                <a href="{{ route('citas.create') }}" class="action-card">
                    <i class="calendar-icon"></i>
                    <span>Nueva Cita</span>
                </a>
                
                <a href="{{ route('mascotas.create') }}" class="action-card">
                    <i class="pet-icon"></i>
                    <span>Registrar Mascota</span>
                </a>
                
                <a href="{{ route('historial-medico.create') }}" class="action-card">
                    <i class="medical-icon"></i>
                    <span>Nuevo Historial</span>
                </a>
                
                <a href="{{ route('productos.index') }}" class="action-card">
                    <i class="inventory-icon"></i>
                    <span>Ver Inventario</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="recent-patients">
        <h3>Pacientes Recientes</h3>
        <div class="patients-list">
            <!-- Lista de pacientes recientes -->
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/dashboard/veterinario.js') }}"></script>
@endpush