@extends('components.admin')

@section('title', 'Agenda Veterinaria')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/consultas/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod/confirmar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod/advertencia.css') }}">
    <style>
        /* Table Header Styling per Request - Purple */
        .dashboard-table thead th {
            color: var(--primary-color) !important; /* Force Purple Color */
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
        }

        /* Avatar Styling */
        .avatar-circle {
            background: rgba(72, 52, 212, 0.1);
            color: var(--primary-color);
            font-weight: 700;
        }

        /* Action Buttons - Green for Atender */
        .btn-icon.start {
            background-color: #10b981; /* Green-500 */
            color: white;
            width: auto;
            padding: 0 1rem;
            border-radius: 8px;
            font-weight: 600;
            height: 38px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-icon.start:hover {
            background-color: #059669; /* Green-600 */
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.3);
        }
    </style>
@endpush

@section('content')
<div class="consultas-container">
    <!-- Control Panel Section -->
    <div class="control-panel">
        <div class="panel-header">
            <div class="header-title">
                <div class="icon-wrapper">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <div class="title-content">
                    <h2>Agenda Veterinaria</h2>
                    <p class="subtitle">Gestiona tus consultas programadas y atiende a los pacientes</p>
                </div>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por paciente o dueño..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-clock"></i> HORA</th>
                        <th><i class="fas fa-paw"></i> PACIENTE</th>
                        <th><i class="fas fa-user"></i> DUEÑO</th>
                        <th><i class="fas fa-notes-medical"></i> MOTIVO</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($citas as $cita)
                        <tr>
                            <td>
                                <div class="id-info">
                                    <span class="primary-text" style="font-weight: 800;">{{ $cita->fecha_hora->format('H:i') }}</span>
                                    <span class="sub-text">{{ $cita->fecha_hora->format('d/m/Y') }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($cita->mascota->nombre ?? '?', 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name" style="font-weight: 700; color: var(--text-primary);">{{ $cita->mascota->nombre }}</span>
                                        <span class="role">{{ $cita->mascota->especie }} - {{ $cita->mascota->raza }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="details">
                                    <span class="primary-text">{{ $cita->cliente->nombre }} {{ $cita->cliente->apellido }}</span>
                                    <span class="sub-text">Cliente #{{ $cita->cliente->id }}</span>
                                </div>
                            </td>
                            <td>
                                <span class="sub-text" style="max-width: 250px; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    {{ $cita->motivo_consulta ?? 'Consulta General' }}
                                </span>
                            </td>
                            <td>
                                    <div class="action-buttons">
                                        {{-- Standard Actions --}}
                                        <a href="#" class="btn-icon view" title="Ver Detalles">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn-icon edit" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" 
                                                class="btn-icon delete" 
                                                title="Cancelar Cita" 
                                                onclick="openDeleteModal('{{ route('recepcionista.citas.destroy', $cita->id) }}', '{{ $cita->mascota->nombre }}')">
                                            <i class="fas fa-times-circle"></i>
                                        </button>
                                        
                                        {{-- Primary Action --}}
                                        <a href="{{ route('veterinario.consultas.create', ['cita_id' => $cita->id]) }}" class="btn-icon start" title="Iniciar Consulta">
                                            <i class="fas fa-file-medical"></i> <span>Atender</span>
                                        </a>
                                    </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay citas programadas pendientes para hoy
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    @if(method_exists($citas, 'links'))
    <div class="pagination-wrapper">
        {{ $citas->appends(request()->query())->links('pages.consultas') }}
    </div>
    @endif
</div>

@include('veterinario.consultas.mod.delete')
@include('veterinario.consultas.mod.error')
@endsection

@section('js')
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
