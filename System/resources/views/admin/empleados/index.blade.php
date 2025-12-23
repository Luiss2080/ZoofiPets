@extends('components.admin')

@section('title', 'Gestión de Empleados')

@push('styles')
    {{-- LINKING SPECIFIC CSS FROM ADMIN/EMPLEADOS FOLDER --}}
    <link rel="stylesheet" href="{{ asset('css/admin/empleados/index.css') }}">
    
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

        /* Schedule/Shift Button - Purple */
        .btn-icon.shift {
            background: #a855f7;
            color: white;
            border-color: #a855f7;
            box-shadow: 0 2px 4px rgba(168, 85, 247, 0.2);
        }
        .btn-icon.shift:hover {
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
                    <i class="fas fa-users"></i>
                </div>
                <div class="title-content">
                    <h2>Gestión de Personal</h2>
                    <p class="subtitle">Administración de empleados y roles</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="#" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Nuevo Empleado</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por nombre, cédula, cargo..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-user-tie"></i> EMPLEADO</th>
                        <th><i class="fas fa-id-badge"></i> CARGO / CÓDIGO</th>
                        <th><i class="fas fa-envelope"></i> CONTACTO</th>
                        <th><i class="fas fa-check-circle"></i> ESTADO</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($empleados as $empleado)
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($empleado->nombre, 0, 1)) }}{{ strtoupper(substr($empleado->apellido, 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name" style="font-weight: 700; color: var(--text-primary);">{{ $empleado->nombre }} {{ $empleado->apellido }}</span>
                                        <span class="role">{{ $empleado->cedula }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="status-date">
                                    <span class="date-text" style="font-weight: 600;">{{ $empleado->cargo->nombre ?? 'N/A' }}</span>
                                    <span class="sub-text">{{ $empleado->codigo_empleado }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="status-date">
                                    <span class="date-text">{{ $empleado->email }}</span>
                                    <span class="sub-text">{{ $empleado->telefono }}</span>
                                </div>
                            </td>
                            <td>
                                @if($empleado->activo)
                                    <span class="status-label valid">ACTIVO</span>
                                @else
                                    <span class="status-label invalid">INACTIVO</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    {{-- 1. View Details (Blue) --}}
                                    <a href="#" class="btn-icon view" title="Ver Perfil">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    {{-- 2. Edit (Orange) --}}
                                    <a href="#" class="btn-icon edit" title="Editar Empleado">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- 3. Schedule/Shifts (Purple) --}}
                                     <a href="#" class="btn-icon shift" title="Horarios">
                                        <i class="fas fa-calendar-alt"></i>
                                    </a>

                                    {{-- 4. Delete/Fire (Red) --}}
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            title="Desvincular" 
                                            onclick="openDeleteModal('#', '{{ $empleado->nombre }} {{ $empleado->apellido }}')">
                                        <i class="fas fa-user-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay empleados registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $empleados->appends(request()->query())->links('pages.empleados') }}
    </div>
</div>

@include('admin.empleados.mod.delete')
@include('admin.empleados.mod.error')
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
