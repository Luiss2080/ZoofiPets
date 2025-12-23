@extends('layouts.admin')

@section('title', 'Detalles del Cliente')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/clientes/show.css') }}">
@endsection

@section('content')
<div class="show-container">
    <!-- Header -->
    <div class="panel-header">
        <div class="header-title">
            <div class="icon-wrapper">
                <i class="fas fa-eye"></i>
            </div>
            <div class="title-content">
                <h2>Detalles del Cliente</h2>
                <p class="subtitle">Visualización completa de la información del cliente</p>
            </div>
        </div>
        <div class="header-actions">
            <a href="{{ route('recepcionista.clientes.index') }}" class="btn-secondary-action">
                <i class="fas fa-arrow-left"></i>
                <span>Volver a la lista</span>
            </a>
        </div>
    </div>

    <div class="form-content">
        <!-- Left Column: Profile Image -->
        <div class="left-column">
            <div class="form-card profile-card">
                <div class="card-header">
                    <h3>
                        <i class="fas fa-camera"></i>
                        Foto de Perfil
                    </h3>
                    <p>Imagen actual del cliente</p>
                </div>
                
                <div class="profile-upload-section">
                    <div class="avatar-preview">
                        @if($cliente->avatar)
                            <img src="{{ asset('storage/' . $cliente->avatar) }}" alt="Foto de Perfil">
                        @else
                            <div class="avatar-placeholder">
                                {{ strtoupper(substr($cliente->nombre, 0, 1) . substr($cliente->apellido, 0, 1)) }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Info Summary Card -->
            <div class="form-card">
                 <div class="card-header">
                    <h3><i class="fas fa-info-circle"></i> Resumen</h3>
                </div>
                <div class="info-list">
                    <div class="info-item">
                        <span class="info-label">REGISTRADO</span>
                        <span class="info-value">{{ $cliente->created_at->format('d/m/Y') }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">ACTUALIZADO</span>
                        <span class="info-value">{{ $cliente->updated_at->format('d/m/Y') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Form Panel -->
        <div class="right-column">
            <div class="form-card">
                <div class="card-header">
                    <h3>
                        <i class="fas fa-user-circle"></i>
                        Información Personal
                    </h3>
                    <p>Datos básicos del cliente</p>
                </div>
                
                <div class="form-grid">
                    <div class="form-group span-2">
                        <label>Nombres</label>
                        <div class="input-wrapper">
                            <i class="fas fa-user"></i>
                            <input type="text" class="form-input" value="{{ $cliente->nombre }}" readonly>
                        </div>
                    </div>

                    <div class="form-group span-2">
                        <label>Apellidos</label>
                        <div class="input-wrapper">
                            <i class="fas fa-user"></i>
                            <input type="text" class="form-input" value="{{ $cliente->apellido }}" readonly>
                        </div>
                    </div>

                    <div class="form-group span-2">
                        <label>Cédula / DNI</label>
                        <div class="input-wrapper">
                            <i class="fas fa-id-card"></i>
                            <input type="text" class="form-input" value="{{ $cliente->cedula }}" readonly>
                        </div>
                    </div>

                    <div class="form-group span-2">
                         <label>Tel./Celular</label>
                        <div class="input-wrapper">
                            <i class="fas fa-phone"></i>
                            <input type="text" class="form-input" value="{{ $cliente->telefono ?? 'N/A' }}" readonly>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label>Correo Electrónico</label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope"></i>
                            <input type="email" class="form-input" value="{{ $cliente->email ?? 'N/A' }}" readonly>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label>Dirección Domiciliaria</label>
                        <div class="input-wrapper">
                            <i class="fas fa-map-marker-alt"></i>
                            <input type="text" class="form-input" value="{{ $cliente->direccion ?? 'N/A' }}" readonly>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <a href="{{ route('recepcionista.clientes.edit', $cliente->id) }}" class="btn-edit-action">
                        <i class="fas fa-edit"></i>
                        <span>Editar Cliente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection