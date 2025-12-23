@extends('layouts.admin')

@section('title', 'Gestión de Clientes')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/clientes/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/paginacion.css') }}">
    <!-- Mod CSS -->
    <link rel="stylesheet" href="{{ asset('css/mod/eliminar.css') }}">
    <!-- Filters CSS -->
    <link rel="stylesheet" href="{{ asset('css/filters/filters.css') }}">
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
            
            <div class="toolbar-actions">
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
    
    <!-- Table Section -->
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
                <tbody id="clientesTableBody"> <!-- Added ID for JS targeting -->
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
    
    <div class="pagination-wrapper" id="paginationWrapper">
        {{ $clientes->appends(request()->query())->links('pages.clientes') }}
    </div>
</div>

<!-- Routes for JS -->
<script>
    const routes = {
        base: "{{ url('recepcionista/clientes') }}",
        // Helper to generate full URLs
        show: (id) => `{{ url('recepcionista/clientes') }}/${id}`,
        edit: (id) => `{{ url('recepcionista/clientes') }}/${id}/edit`,
        destroy: (id) => `{{ url('recepcionista/clientes') }}/${id}`
    };
</script>

<!-- Simple Delete Form -->
<form id="delete-form" action="" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<!-- Filter Modal (Hidden) -->
<div class="filters-modal-overlay" id="filtersModal">
    <div class="filters-modal">
        <div class="filters-header">
            <h3 class="filters-title">
                <i class="fas fa-filter"></i> Filtros Avanzados
            </h3>
            <button class="filters-close-btn" onclick="toggleFilters()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="filters-content">
            <form id="filterForm" action="{{ route('recepcionista.clientes.index') }}" method="GET">
                <input type="hidden" name="per_page" value="{{ request('per_page') }}">
                
                <div class="filters-section">
                    <h4 class="section-title">Información Personal</h4>
                    <div class="filters-grid">
                        <div class="filter-group">
                            <label class="filter-label">Cédula</label>
                            <input type="text" name="cedula" class="filter-input" placeholder="Ej: 12345678" value="{{ request('cedula') }}">
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Teléfono</label>
                            <input type="text" name="telefono" class="filter-input" placeholder="Ej: 0912345678" value="{{ request('telefono') }}">
                        </div>
                    </div>
                </div>

                <div class="filters-section">
                    <h4 class="section-title">Ubicación y Otros</h4>
                    <div class="filters-grid">
                        <div class="filter-group">
                            <label class="filter-label">Dirección</label>
                            <input type="text" name="direccion" class="filter-input" placeholder="Buscar en dirección..." value="{{ request('direccion') }}">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="filters-actions">
            <button type="button" class="btn-secondary" onclick="resetFilters()">
                <i class="fas fa-undo"></i> Limpiar
            </button>
            <button type="button" class="btn-primary" onclick="document.getElementById('filterForm').submit()">
                <i class="fas fa-check"></i> Aplicar Filtros
            </button>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/admin/clientes/index.js') }}"></script>
    <script src="{{ asset('js/mod/eliminar.js') }}"></script>
    <script src="{{ asset('js/filters/filters.js') }}"></script>
    <script>
        function toggleFilters() {
            const modal = document.getElementById('filtersModal');
            if(modal) modal.classList.toggle('active');
        }
        function resetFilters() {
            window.location.href = "{{ route('recepcionista.clientes.index') }}";
        }
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.btn-secondary-action');
            filterBtns.forEach(btn => {
                if(btn.textContent.includes('Filtros')) {
                    btn.addEventListener('click', function(e) {
                         e.preventDefault();
                         toggleFilters();
                    });
                }
            });
        });
    </script>
@endsection
