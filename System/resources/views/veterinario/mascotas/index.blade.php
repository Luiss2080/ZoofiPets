@extends('components.admin')

@section('title', 'Gestión de Pacientes')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/mascotas/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/paginacion.css') }}">
@endpush

@section('content')
<div class="mascotas-container">
    <!-- Control Panel Section -->
    <div class="control-panel">
        <div class="panel-header">
            <div class="header-title">
                <div class="icon-wrapper">
                    <i class="fas fa-paw"></i>
                </div>
                <div class="title-content">
                    <h2>Gestión de Pacientes</h2>
                    <p class="subtitle">Administra los pacientes veterinarios y sus historiales clínicos</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ route('veterinario.mascotas.create') }}" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Nueva Mascota</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por nombre, código o especie..." value="{{ request('search') }}">
            </div>
            
            <div class="filter-group">
                <div class="select-wrapper">
                    <i class="fas fa-list-ol"></i>
                    <select id="entriesSelect" onchange="window.location.href='?per_page='+this.value">
                        <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10 por pág.</option>
                        <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25 por pág.</option>
                        <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50 por pág.</option>
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
                        <th><i class="fas fa-fingerprint"></i> CÓDIGO</th>
                        <th><i class="fas fa-paw"></i> PACIENTE</th>
                        <th><i class="fas fa-user"></i> DUEÑO</th>
                        <th><i class="fas fa-dna"></i> ESPECIE / RAZA</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mascotas as $mascota)
                        <tr>
                            <td>
                                <div class="id-info">
                                    <span class="primary-text">{{ $mascota->codigo_mascota }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($mascota->nombre, 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name">{{ $mascota->nombre }}</span>
                                        <span class="role">
                                            @if($mascota->sexo == 'Macho') <i class="fas fa-mars text-blue-400"></i>
                                            @elseif($mascota->sexo == 'Hembra') <i class="fas fa-venus text-pink-400"></i>
                                            @endif
                                            {{ $mascota->sexo }}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="details">
                                    <a href="{{ route('recepcionista.clientes.edit', $mascota->cliente_id) }}" class="name hover:text-purple-500 transition">
                                        {{ $mascota->cliente->nombre }} {{ $mascota->cliente->apellido }}
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="details">
                                    <span class="name">{{ $mascota->especie }}</span>
                                    <span class="role">{{ $mascota->raza ?? 'No especificada' }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('veterinario.mascotas.edit', $mascota->id) }}" class="btn-icon edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form id="delete-form-{{ $mascota->id }}" action="{{ route('veterinario.mascotas.destroy', $mascota->id) }}" method="POST" class="delete-form" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn-icon delete" title="Eliminar" onclick="confirmDelete('{{ $mascota->id }}')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay pacientes registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $mascotas->appends(request()->query())->links('pages.clientes') }}
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: '¿Eliminar Mascota?',
                text: "Esta acción no se puede deshacer.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#3b82f6',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endpush
