@extends('layouts.admin')

@section('title', 'Editar Cliente')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/clientes/edit.css') }}">
@endsection

@section('content')
<div class="edit-container">
    <!-- Header -->
    <div class="panel-header">
        <div class="header-title">
            <div class="icon-wrapper">
                <i class="fas fa-user-edit"></i>
            </div>
            <div class="title-content">
                <h2>Editar Cliente</h2>
                <p class="subtitle">Actualice la información del cliente</p>
            </div>
        </div>
        <div class="header-actions">
            <a href="{{ route('recepcionista.clientes.index') }}" class="btn-secondary-action">
                <i class="fas fa-arrow-left"></i>
                <span>Volver a la lista</span>
            </a>
        </div>
    </div>

    <!-- Main Form -->
    <form action="{{ route('recepcionista.clientes.update', $cliente->id) }}" method="POST" enctype="multipart/form-data" id="editClienteForm">
        @csrf
        @method('PUT')
        
        <div class="form-content">
            <!-- Left Column: Profile Image & Help -->
            <div class="left-column">
                <div class="form-card profile-card">
                    <div class="card-header">
                        <h3>
                            <i class="fas fa-camera"></i>
                            Foto de Perfil
                        </h3>
                        <p>Actualizar foto de perfil</p>
                    </div>
                    
                    <div class="profile-upload-section">
                        <div class="avatar-preview" id="avatarPreview">
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

                <!-- Help Section -->
                <div class="help-section-container">
                    <div class="help-cards-list">
                        <div class="help-card-item">
                            <div class="help-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="help-text">
                                <h4>Edición</h4>
                                <p>Modifique los datos necesarios y guarde los cambios.</p>
                            </div>
                            <i class="fas fa-chevron-right help-action-icon"></i>
                        </div>
                        <div class="help-card-item">
                            <div class="help-icon">
                                <i class="fas fa-check-double"></i>
                            </div>
                            <div class="help-text">
                                <h4>Validación</h4>
                                <p>Los campos marcados con (*) son obligatorios.</p>
                            </div>
                            <i class="fas fa-chevron-right help-action-icon"></i>
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
                            <label for="nombre">Nombres <span>*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-user"></i>
                                <input type="text" id="nombre" name="nombre" class="form-input" placeholder="Ej: Juan" value="{{ old('nombre', $cliente->nombre) }}" required>
                            </div>
                        </div>

                        <div class="form-group span-2">
                            <label for="apellido">Apellidos <span>*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-user"></i>
                                <input type="text" id="apellido" name="apellido" class="form-input" placeholder="Ej: Pérez" value="{{ old('apellido', $cliente->apellido) }}" required>
                            </div>
                        </div>

                        <div class="form-group span-2">
                            <label for="cedula">Cédula / DNI <span>*</span></label>
                            <div class="input-wrapper">
                                <i class="fas fa-id-card"></i>
                                <input type="text" id="cedula" name="cedula" class="form-input" placeholder="Ej: 1234567" value="{{ old('cedula', $cliente->cedula) }}" required>
                            </div>
                        </div>

                        <div class="form-group span-2">
                            <label for="telefono">Tel./Celular</label>
                            <div class="input-wrapper">
                                <i class="fas fa-phone"></i>
                                <input type="tel" id="telefono" name="telefono" class="form-input" placeholder="+591 ..." value="{{ old('telefono', $cliente->telefono) }}">
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="email">Correo Electrónico</label>
                            <div class="input-wrapper">
                                <i class="fas fa-envelope"></i>
                                <input type="email" id="email" name="email" class="form-input" placeholder="correo@ejemplo.com" value="{{ old('email', $cliente->email) }}">
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="direccion">Dirección Domiciliaria</label>
                            <div class="input-wrapper">
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" id="direccion" name="direccion" class="form-input" placeholder="Ej: Av. Principal #123" value="{{ old('direccion', $cliente->direccion) }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="form-status-badge">
                            <i class="fas fa-shield-alt"></i>
                            <span>Información Segura</span>
                        </div>
                        <div class="action-buttons">
                            <a href="{{ route('recepcionista.clientes.index') }}" class="btn-cancel">Cancelar</a>
                            <button type="submit" class="btn-submit">
                                <i class="fas fa-save"></i>
                                <span>Actualizar Cliente</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Simple preview script specifically for this view
        document.addEventListener('DOMContentLoaded', function() {
           // Add any specific JS behavior here if needed
        });
    </script>
@endsection