@extends('components.admin')

@section('title', 'Gestión de Clientes')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/clientes/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/paginacion.css') }}">
@endpush

@section('content')
<div class="clientes-container">
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
                <input type="text" id="searchInput" placeholder="Buscar por nombre, cédula o teléfono..." value="{{ request('search') }}">
            </div>
            
            <div class="filter-group">
                <div class="select-wrapper">
                    <i class="fas fa-list-ol"></i>
                    <select id="entriesSelect" onchange="window.location.href='?per_page='+this.value">
                        <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10 por pág.</option>
                        <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25 por pág.</option>
                        <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50 por pág.</option>
                        <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100 por pág.</option>
                    </select>
                </div>
                
                <button type="button" class="btn-secondary-action">
                    <i class="fas fa-filter"></i> Filtros
                </button>
                
                <button type="button" class="btn-secondary-action">
                    <i class="fas fa-file-export"></i> Exportar
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
                        <th><i class="fas fa-user"></i> CLIENTE</th>
                        <th><i class="fas fa-id-card"></i> CÉDULA</th>
                        <th><i class="fas fa-phone"></i> CONTACTO</th>
                        <th><i class="fas fa-map-marker-alt"></i> DIRECCIÓN</th>
                        <th><i class="fas fa-toggle-on"></i> ESTADO</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($clientes as $cliente)
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($cliente->nombre ?? '?', 0, 1) . substr($cliente->apellido ?? '?', 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name">{{ $cliente->nombre }} {{ $cliente->apellido }}</span>
                                        <span class="role">{{ $cliente->email ?? 'Sin email' }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="id-info">
                                    <span class="primary-text">{{ $cliente->cedula ?? '-' }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="id-info">
                                    <span class="primary-text">{{ $cliente->telefono ?? '-' }}</span>
                                    @if($cliente->telefono_secundario)
                                        <span class="sub-text">{{ $cliente->telefono_secundario }}</span>
                                    @endif
                                </div>
                            </td>
                             <td>
                                <span class="sub-text" style="max-width: 200px; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    {{ $cliente->direccion ?? '-' }}
                                </span>
                            </td>
                            <td>
                                <span class="badge {{ $cliente->activo ? 'active' : 'inactive' }}">
                                    {{ $cliente->activo ? 'Activo' : 'Inactivo' }}
                                </span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('recepcionista.clientes.show', $cliente->id) }}" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('recepcionista.clientes.edit', $cliente->id) }}" class="btn-icon edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('clientes.mascotas', $cliente->id) }}" class="btn-icon pets" title="Ver Mascotas">
                                        <i class="fas fa-paw"></i>
                                    </a>
                                    <form id="delete-form-{{ $cliente->id }}" action="{{ route('recepcionista.clientes.destroy', $cliente->id) }}" method="POST" class="delete-form" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn-icon delete" title="Eliminar" onclick="confirmDelete('{{ $cliente->id }}')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No se encontraron clientes registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $clientes->appends(request()->query())->links('pages.clientes') }} {{-- Reusing the pagination style requested --}}
    </div>
</div>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/admin/clientes/index.js') }}"></script>
@endpush
