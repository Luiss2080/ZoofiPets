@extends('components.admin')

@section('title', 'Gestión de Clientes')

@section('content')
<div class="container-fluid">
    <!-- Header de Sección -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="text-white fw-bold mb-1">
                <i class="fas fa-users me-2 text-primary-neon"></i> Gestión de Clientes
            </h2>
            <p class="text-muted small mb-0">Administra la información de los dueños de mascotas.</p>
        </div>
        <div>
            <a href="{{ route('recepcionista.clientes.create') }}" class="btn btn-primary-neon">
                <i class="fas fa-plus me-2"></i> Nuevo Cliente
            </a>
        </div>
    </div>

    <!-- Buscador y Filtros -->
    <div class="card bg-dark-surface border-neon mb-4">
        <div class="card-body p-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="input-group neon-input-group">
                        <span class="input-group-text bg-transparent border-end-0 text-muted">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control bg-transparent border-start-0 text-white" placeholder="Buscar por nombre, cédula o email...">
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <div class="d-inline-flex gap-2">
                        <button class="btn btn-outline-light btn-sm">
                            <i class="fas fa-filter me-1"></i> Filtros
                        </button>
                        <button class="btn btn-outline-light btn-sm">
                            <i class="fas fa-download me-1"></i> Exportar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grid de Clientes -->
    <div class="row">
        @forelse($clientes as $cliente)
            <div class="col-md-6 col-xl-4 mb-4">
                <div class="card h-100 bg-dark-surface card-hover-effect">
                    <div class="card-body">
                        <!-- Cabecera de Tarjeta -->
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-3">
                                    <span class="initials">{{ substr($cliente->nombre, 0, 1) }}{{ substr($cliente->apellido, 0, 1) }}</span>
                                </div>
                                <div>
                                    <h5 class="card-title text-white mb-0">{{ $cliente->nombre }} {{ $cliente->apellido }}</h5>
                                    <span class="badge bg-soft-primary text-primary-neon mt-1">
                                        <i class="fas fa-id-card me-1"></i> {{ $cliente->cedula ?? 'N/A' }}
                                    </span>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-link text-muted p-0" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('recepcionista.clientes.edit', $cliente->id) }}">
                                            <i class="fas fa-edit me-2 text-warning"></i> Editar
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('clientes.mascotas', $cliente->id) }}">
                                            <i class="fas fa-paw me-2 text-success"></i> Ver Mascotas
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider border-secondary"></li>
                                    <li>
                                        <form action="{{ route('recepcionista.clientes.destroy', $cliente->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item text-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">
                                                <i class="fas fa-trash-alt me-2"></i> Eliminar
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Información -->
                        <div class="info-list">
                            <div class="info-item mb-2">
                                <i class="fas fa-envelope text-muted me-2 width-20"></i>
                                <span class="text-light-gray">{{ $cliente->email ?? 'Sin correo' }}</span>
                            </div>
                            <div class="info-item mb-2">
                                <i class="fas fa-phone text-muted me-2 width-20"></i>
                                <span class="text-light-gray">{{ $cliente->telefono ?? 'Sin teléfono' }}</span>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt text-muted me-2 width-20"></i>
                                <span class="text-light-gray small">{{ Str::limit($cliente->direccion, 30) ?? 'Sin dirección' }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Footer de Tarjeta -->
                    <div class="card-footer bg-transparent border-top border-secondary py-3">
                        <div class="row text-center">
                            <div class="col-6 border-end border-secondary">
                                <small class="d-block text-muted text-uppercase font-size-10">Registrado</small>
                                <span class="text-white font-size-12">{{ $cliente->created_at ? $cliente->created_at->format('d/m/Y') : 'N/A' }}</span>
                            </div>
                            <div class="col-6">
                                <small class="d-block text-muted text-uppercase font-size-10">Mascotas</small>
                                <span class="text-white font-size-12 badge bg-dark-light">Ver lista</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info-neondark text-center py-5">
                    <i class="fas fa-users-slash fa-3x mb-3 text-muted"></i>
                    <h4 class="text-white">No hay clientes registrados</h4>
                    <p class="text-muted">Comienza registrando un nuevo cliente en el sistema.</p>
                    <a href="{{ route('recepcionista.clientes.create') }}" class="btn btn-primary-neon mt-2">
                        Crear Primer Cliente
                    </a>
                </div>
            </div>
        @endforelse
    </div>

    <!-- Paginación -->
    <div class="d-flex justify-content-center mt-4">
        {{ $clientes->links('components.pagination') }}
    </div>
</div>

<style>
    /* Estilos Específicos para este Módulo */
    .bg-dark-surface {
        background-color: rgba(255, 255, 255, 0.03) !important;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }
    .text-primary-neon {
        color: var(--primary-color) !important;
        text-shadow: 0 0 10px rgba(72, 52, 212, 0.3);
    }
    .btn-primary-neon {
        background-color: var(--primary-color);
        border: none;
        color: white;
        box-shadow: 0 0 15px rgba(72, 52, 212, 0.4);
        transition: all 0.3s ease;
    }
    .btn-primary-neon:hover {
        background-color: #3c1053; /* Darker shade */
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 0 20px rgba(72, 52, 212, 0.6);
    }
    .avatar-circle {
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, var(--primary-color), #6c5ce7);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 1.1rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }
    .width-20 { width: 20px; text-align: center; }
    .text-light-gray { color: #cbd5e1; }
    .font-size-10 { font-size: 10px; }
    .font-size-12 { font-size: 12px; }
    .card-hover-effect { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .card-hover-effect:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2) !important;
        border-color: var(--primary-color) !important;
    }
    
    /* Input Group Neon Style */
    .neon-input-group {
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        background: rgba(0, 0, 0, 0.2);
        transition: border-color 0.3s ease;
    }
    .neon-input-group:focus-within {
        border-color: var(--primary-color);
        box-shadow: 0 0 10px rgba(72, 52, 212, 0.2);
    }
</style>
@endsection