@extends('layouts.admin')

@section('title', 'Gestión de Clientes')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/clientes/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/paginacion.css') }}">
    <!-- Mod CSS -->
    <link rel="stylesheet" href="{{ asset('css/mod/eliminar.css') }}">
@endsection

@section('content')
<div class="clientes-container">
    <!-- Success Message Hidden Input -->
    @if(session('success'))
        <input type="hidden" id="session-success-message" value="{{ session('success') }}">
    @endif

    <!-- Control Panel Section -->
    <div class="control-panel">
        <div class="panel-header">
            <div class="header-title">
                <div class="icon-wrapper">
                    <i class="fas fa-users"></i>
                </div>
                <div class="title-content">
                    <h2>Gestión de Clientes</h2>
                    <p class="subtitle">Administra la información de los clientes y sus mascotas</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ route('recepcionista.clientes.create') }}" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Nuevo Cliente</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por nombre, cédula o email...">
            </div>
            
            <div class="filter-group">
                <!-- Custom Purple Dropdown -->
                <div class="custom-select-wrapper" id="entriesDropdown">
                    <input type="hidden" name="per_page" id="entriesInput" value="{{ request('per_page', 10) }}">
                    <div class="custom-select-trigger">
                        <i class="fas fa-list-ol"></i>
                        <span id="entriesText">{{ request('per_page', 10) }} por pág.</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <!-- Options List -->
                    <div class="custom-options">
                        <div class="custom-option {{ request('per_page', 10) == 10 ? 'selected' : '' }}" data-value="10">10 por pág.</div>
                        <div class="custom-option {{ request('per_page') == 25 ? 'selected' : '' }}" data-value="25">25 por pág.</div>
                        <div class="custom-option {{ request('per_page') == 50 ? 'selected' : '' }}" data-value="50">50 por pág.</div>
                    </div>
                </div>
                
                <button class="btn-secondary-action">
                    <i class="fas fa-filter"></i>
                    <span>Filtros</span>
                </button>

                <button class="btn-secondary-action">
                    <i class="fas fa-file-export"></i>
                    <span>Exportar</span>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Tabla -->
    <div class="table-section">
        <div class="table-responsive">
            <table class="dashboard-table">
                <thead>
                    <tr>
                        <th><i class="fas fa-user-tag"></i> CLIENTE</th>
                        <th><i class="fas fa-id-card"></i> CÉDULA</th>
                        <th><i class="fas fa-phone"></i> CONTACTO</th>
                        <th><i class="fas fa-map-marker-alt"></i> DIRECCIÓN</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($clientes as $cliente)
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($cliente->nombre, 0, 1) . substr($cliente->apellido, 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name">{{ $cliente->nombre }} {{ $cliente->apellido }}</span>
                                        <span class="role">{{ $cliente->email ?? 'Sin email' }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge-id">{{ $cliente->cedula }}</span>
                            </td>
                            <td>
                                <span class="contact-info">
                                    <i class="fas fa-phone-alt"></i> {{ $cliente->telefono ?? 'N/A' }}
                                </span>
                            </td>
                            <td>
                                <span class="address-text">{{ Str::limit($cliente->direccion ?? 'N/A', 30) }}</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('recepcionista.clientes.show', $cliente->id) }}" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('recepcionista.clientes.edit', $cliente->id) }}" class="btn-icon edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            onclick="confirmDelete('{{ route('recepcionista.clientes.destroy', $cliente->id) }}')" 
                                            title="Eliminar">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No se encontraron clientes registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $clientes->appends(request()->query())->links('pages.clientes') }}
    </div>
</div>

<!-- Simple Delete Form -->
<form id="delete-form" action="" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/admin/clientes/index.js') }}"></script>
    <!-- Mod JS -->
    <script src="{{ asset('js/mod/eliminar.js') }}"></script>
@endsection
