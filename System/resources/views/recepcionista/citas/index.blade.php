@extends('components.admin')

@section('title', 'Gestión de Citas Médicas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/citas/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod/confirmar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod/advertencia.css') }}">
@endpush

@section('content')
<div class="citas-container">
    <!-- Control Panel Section -->
    <div class="control-panel">
        <div class="panel-header">
            <div class="header-title">
                <div class="icon-wrapper">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="title-content">
                    <h2>Gestión de Citas Médicas</h2>
                    <p class="subtitle">Administra la agenda médica y el seguimiento de pacientes</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ route('recepcionista.citas.create') }}" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Agendar Cita</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por paciente, dueño o veterinario..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-clock"></i> FECHA/HORA</th>
                        <th><i class="fas fa-paw"></i> PACIENTE</th>
                        <th><i class="fas fa-user"></i> DUEÑO</th>
                        <th><i class="fas fa-user-md"></i> VETERINARIO</th>
                        <th><i class="fas fa-toggle-on"></i> ESTADO</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($citas as $cita)
                        <tr>
                            <td>
                                <div class="id-info">
                                    <span class="primary-text">{{ $cita->fecha_hora->format('d/m/Y') }}</span>
                                    <span class="sub-text">{{ $cita->fecha_hora->format('H:i A') }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($cita->mascota->nombre ?? '?', 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name">{{ $cita->mascota->nombre }}</span>
                                        <span class="role">{{ $cita->mascota->especie }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="details">
                                    <span class="primary-text">{{ $cita->cliente->nombre }} {{ $cita->cliente->apellido }}</span>
                                </div>
                            </td>
                            <td>
                                <span class="primary-text">Dr/a. {{ $cita->veterinario->nombre }} {{ $cita->veterinario->apellido }}</span>
                            </td>
                            <td>
                                <span class="badge 
                                    @if($cita->estado == 'Programada') active 
                                    @elseif($cita->estado == 'Cancelada') inactive 
                                    @else active @endif">
                                    {{ $cita->estado }}
                                </span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('recepcionista.citas.show', $cita->id) }}" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('recepcionista.citas.edit', $cita->id) }}" class="btn-icon edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            title="Cancelar Cita" 
                                            onclick="openDeleteModal('{{ route('recepcionista.citas.destroy', $cita->id) }}', '{{ $cita->mascota->nombre }} ({{ $cita->fecha_hora->format('d/m/Y') }})')">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay citas programadas
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $citas->appends(request()->query())->links('pages.citas') }}
    </div>
</div>

@include('recepcionista.citas.mod.delete')
@include('recepcionista.citas.mod.error')
@endsection

@section('js') {{-- Changed from push scripts to section js to match Pagos pattern --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/mod/confirmar.js') }}"></script>
    <script src="{{ asset('js/mod/advertencia.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                openWarningModal("Operación Exitosa", "{{ session('success') }}");
            @endif

            @if(session('error'))
                openWarningModal("Error", "{{ session('error') }}");
            @endif
        });
    </script>
@endsection

@section('content')
<div class="citas-container">
    <!-- Control Panel Section -->
    <div class="control-panel">
        <div class="panel-header">
            <div class="header-title">
                <div class="icon-wrapper">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="title-content">
                    <h2>Gestión de Citas Médicas</h2>
                    <p class="subtitle">Administra la agenda médica y el seguimiento de pacientes</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ route('recepcionista.citas.create') }}" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Agendar Cita</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por paciente, dueño o veterinario..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-clock"></i> FECHA/HORA</th>
                        <th><i class="fas fa-paw"></i> PACIENTE</th>
                        <th><i class="fas fa-user"></i> DUEÑO</th>
                        <th><i class="fas fa-user-md"></i> VETERINARIO</th>
                        <th><i class="fas fa-toggle-on"></i> ESTADO</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($citas as $cita)
                        <tr>
                            <td>
                                <div class="id-info">
                                    <span class="primary-text">{{ $cita->fecha_hora->format('d/m/Y') }}</span>
                                    <span class="sub-text">{{ $cita->fecha_hora->format('H:i A') }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($cita->mascota->nombre ?? '?', 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name">{{ $cita->mascota->nombre }}</span>
                                        <span class="role">{{ $cita->mascota->especie }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="details">
                                    <span class="primary-text">{{ $cita->cliente->nombre }} {{ $cita->cliente->apellido }}</span>
                                </div>
                            </td>
                            <td>
                                <span class="primary-text">Dr/a. {{ $cita->veterinario->nombre }} {{ $cita->veterinario->apellido }}</span>
                            </td>
                            <td>
                                <span class="badge 
                                    @if($cita->estado == 'Programada') active 
                                    @elseif($cita->estado == 'Cancelada') inactive 
                                    @else active @endif">
                                    {{ $cita->estado }}
                                </span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('recepcionista.citas.show', $cita->id) }}" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('recepcionista.citas.edit', $cita->id) }}" class="btn-icon edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form id="delete-form-{{ $cita->id }}" action="{{ route('recepcionista.citas.destroy', $cita->id) }}" method="POST" class="delete-form" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn-icon delete" title="Cancelar Cita" onclick="confirmDelete('{{ $cita->id }}')">
                                            <i class="fas fa-times-circle"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay citas programadas
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $citas->appends(request()->query())->links('pages.clientes') }} {{-- Using the same pagination view --}}
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: '¿Programar cancelación?',
                text: "Esta acción cambiará el estado de la cita a cancelada.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#3b82f6',
                confirmButtonText: 'Sí, cancelar cita',
                cancelButtonText: 'No, mantener'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endpush
