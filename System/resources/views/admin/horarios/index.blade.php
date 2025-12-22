@extends('components.admin')

@section('title', 'Gestión de Horarios')

@push('styles')
    {{-- LINKING SPECIFIC CSS FROM ADMIN/HORARIOS FOLDER --}}
    <link rel="stylesheet" href="{{ asset('css/admin/horarios/index.css') }}">
    
    {{-- Shared Modals CSS --}}
    <link rel="stylesheet" href="{{ asset('css/mod/confirmar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod/advertencia.css') }}">
    <style>
        /* Table Header Styling per Request - Purple (Inline override/reinforcement) */
        .dashboard-table thead th {
            color: #a855f7 !important; /* Force Purple Color */
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
        }

        /* Avatar/Icon Styling */
        .avatar-circle {
            background: rgba(168, 85, 247, 0.1);
            color: #a855f7;
            font-weight: 700;
        }

        /* ACTIONS STYLING */
        .action-buttons {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-start; 
        }

        .btn-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid transparent;
            transition: all 0.2s ease;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .btn-icon:hover {
            transform: translateY(-2px);
        }

        /* View Details Button - Blue */
        .btn-icon.view {
            background: #3b82f6;
            color: white;
            border-color: #3b82f6;
            box-shadow: 0 2px 4px rgba(59, 130, 246, 0.2);
        }
        .btn-icon.view:hover {
            background: #2563eb;
            box-shadow: 0 4px 10px rgba(59, 130, 246, 0.4);
        }

        /* Edit Button - Orange */
        .btn-icon.edit {
            background: #f97316;
            color: white;
            border-color: #f97316;
            box-shadow: 0 2px 4px rgba(249, 115, 22, 0.2);
        }
        .btn-icon.edit:hover {
            background: #ea580c;
            box-shadow: 0 4px 10px rgba(249, 115, 22, 0.4);
        }

        /* Duplicate/Clone Button - Purple */
        .btn-icon.clone {
            background: #a855f7;
            color: white;
            border-color: #a855f7;
            box-shadow: 0 2px 4px rgba(168, 85, 247, 0.2);
        }
        .btn-icon.clone:hover {
            background: #9333ea;
            box-shadow: 0 4px 10px rgba(168, 85, 247, 0.4);
        }

        /* Delete Button - Red */
        .btn-icon.delete {
            background: #ef4444;
            color: white;
            border-color: #ef4444;
            box-shadow: 0 2px 4px rgba(239, 68, 68, 0.2);
        }
        .btn-icon.delete:hover {
            background: #dc2626;
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.4);
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
                    <i class="fas fa-clock"></i>
                </div>
                <div class="title-content">
                    <h2>Gestión de Horarios</h2>
                    <p class="subtitle">Turnos y disponibilidad del personal</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="#" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Nuevo Horario</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por empleado, día..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-user-clock"></i> EMPLEADO</th>
                        <th><i class="fas fa-calendar-day"></i> DÍA</th>
                        <th><i class="fas fa-hourglass-start"></i> HORARIO</th>
                        <th><i class="fas fa-check-circle"></i> ESTADO</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($horarios as $horario)
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($horario->empleado->nombre ?? 'E', 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name" style="font-weight: 700; color: var(--text-primary);">
                                            {{ $horario->empleado->nombre ?? 'Sin Asignar' }} {{ $horario->empleado->apellido ?? '' }}
                                        </span>
                                        <span class="role">{{ $horario->empleado->cargo->nombre ?? 'N/A' }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span style="font-weight: 600; color: var(--primary-color);">{{ $horario->dia_semana }}</span>
                            </td>
                            <td>
                                <div class="status-date">
                                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                                        <i class="fas fa-sign-in-alt" style="color: #10b981;"></i>
                                        <span class="date-text">{{ \Carbon\Carbon::parse($horario->hora_inicio)->format('H:i') }}</span>
                                    </div>
                                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                                        <i class="fas fa-sign-out-alt" style="color: #ef4444;"></i>
                                        <span class="sub-text">{{ \Carbon\Carbon::parse($horario->hora_fin)->format('H:i') }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if($horario->activo)
                                    <span class="status-label valid">ACTIVO</span>
                                @else
                                    <span class="status-label invalid">INACTIVO</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    {{-- 1. View (Blue) --}}
                                    <a href="#" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    {{-- 2. Edit (Orange) --}}
                                    <a href="#" class="btn-icon edit" title="Editar Horario">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- 3. Clone (Purple) --}}
                                     <a href="#" class="btn-icon clone" title="Duplicar Horario">
                                        <i class="fas fa-copy"></i>
                                    </a>

                                    {{-- 4. Delete (Red) --}}
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            title="Eliminar Horario" 
                                            onclick="openDeleteModal('#', '{{ $horario->dia_semana }} - {{ $horario->empleado->nombre ?? '' }}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay horarios registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $horarios->appends(request()->query())->links('pages.horarios') }}
    </div>
</div>

@include('admin.horarios.mod.delete')
@include('admin.horarios.mod.error')
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
