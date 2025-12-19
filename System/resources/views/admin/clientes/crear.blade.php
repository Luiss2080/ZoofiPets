@extends('layouts.dashboard')

@section('title', 'Nuevo Cliente - ZoofiPets')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/clientes/crear.css') }}">
@endpush

@section('content')
<div class="cliente-create">
    <div class="page-header">
        <h1>Registrar Nuevo Cliente</h1>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
            <i class="arrow-left-icon"></i>
            Volver a Clientes
        </a>
    </div>
    
    <form action="{{ route('clientes.store') }}" method="POST" class="cliente-form">
        @csrf
        
        <div class="form-section">
            <h3>Información Personal</h3>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="nombre">Nombre*</label>
                    <input type="text" id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" 
                           value="{{ old('nombre') }}" required>
                    @error('nombre')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="apellido">Apellido*</label>
                    <input type="text" id="apellido" name="apellido" class="form-control @error('apellido') is-invalid @enderror" 
                           value="{{ old('apellido') }}" required>
                    @error('apellido')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                           value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="telefono">Teléfono*</label>
                    <input type="tel" id="telefono" name="telefono" class="form-control @error('telefono') is-invalid @enderror" 
                           value="{{ old('telefono') }}" required>
                    @error('telefono')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <textarea id="direccion" name="direccion" class="form-control @error('direccion') is-invalid @enderror" 
                          rows="3">{{ old('direccion') }}</textarea>
                @error('direccion')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="form-section">
            <h3>Información Adicional</h3>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" 
                           class="form-control @error('fecha_nacimiento') is-invalid @enderror" 
                           value="{{ old('fecha_nacimiento') }}">
                    @error('fecha_nacimiento')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="ocupacion">Ocupación</label>
                    <input type="text" id="ocupacion" name="ocupacion" class="form-control @error('ocupacion') is-invalid @enderror" 
                           value="{{ old('ocupacion') }}">
                    @error('ocupacion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="form-group">
                <label for="notas">Notas</label>
                <textarea id="notas" name="notas" class="form-control @error('notas') is-invalid @enderror" 
                          rows="3" placeholder="Información adicional sobre el cliente...">{{ old('notas') }}</textarea>
                @error('notas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="save-icon"></i>
                Guardar Cliente
            </button>
            
            <button type="button" class="btn btn-secondary" onclick="window.history.back()">
                Cancelar
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/clientes/crear.js') }}"></script>
@endpush