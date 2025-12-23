@extends('components.admin')

@section('title', 'Servicios Médicos')

@push('styles')
    {{-- Reusing Consultas styles as base since they are very similar (Medical context) --}}
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

        /* Avatar/Icon Styling */
        .avatar-circle {
            background: rgba(72, 52, 212, 0.1);
            color: var(--primary-color);
            font-weight: 700;
        }

        /* ACTIONS STYLING - MATCHING CLIENTES MODULE */
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

        /* View Button - Blue */
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

        /* Config/Details Button - Purple */
        .btn-icon.config {
            background: #a855f7;
            color: white;
            border-color: #a855f7;
            box-shadow: 0 2px 4px rgba(168, 85, 247, 0.2);
        }
        .btn-icon.config:hover {
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

        .badge-category {
            padding: 0.35rem 0.75rem;
            border-radius: 99px;
            font-size: 0.75rem;
            font-weight: 700;
            background: rgba(72, 52, 212, 0.1);
            color: var(--primary-color);
            border: 1px solid rgba(72, 52, 212, 0.2);
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
                    <i class="fas fa-first-aid"></i>
                </div>
                <div class="title-content">
                    <h2>Servicios Médicos</h2>
                    <p class="subtitle">Gestiona el catálogo de servicios veterinarios, precios y configuraciones</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="#" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Nuevo Servicio</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar servicio por nombre..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-tag"></i> SERVICIO</th>
                        <th><i class="fas fa-layer-group"></i> CATEGORÍA</th>
                        <th><i class="fas fa-money-bill-wave"></i> PRECIO</th>
                        <th><i class="fas fa-clock"></i> DURACIÓN</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($servicios as $servicio)
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($servicio->nombre, 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name" style="font-weight: 700; color: var(--text-primary);">{{ $servicio->nombre }}</span>
                                        <span class="role">{{ Str::limit($servicio->descripcion ?? 'Sin descripción', 40) }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge-category">{{ $servicio->categoria ?? 'General' }}</span>
                            </td>
                            <td>
                                <span class="status-label valid" style="background: rgba(16, 185, 129, 0.1); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.2);">
                                    ${{ number_format($servicio->precio, 2) }}
                                </span>
                            </td>
                            <td>
                                <div class="status-date">
                                    <span class="date-text" style="font-weight: 600;">{{ $servicio->duracion_estimada_minutos }} min</span>
                                    <span class="sub-text">Estimado</span>
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    {{-- 1. View (Blue) --}}
                                    <a href="#" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    {{-- 2. Edit (Orange) - Placeholder --}}
                                    <a href="#" class="btn-icon edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- 3. Config (Purple) --}}
                                     <a href="#" class="btn-icon config" title="Configuración Avanzada">
                                        <i class="fas fa-sliders-h"></i>
                                    </a>

                                    {{-- 4. Delete (Red) --}}
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            title="Eliminar Servicio" 
                                            onclick="openDeleteModal('#', '{{ $servicio->nombre }}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay servicios médicos registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $servicios->appends(request()->query())->links('pages.servicios') }}
    </div>
</div>

@include('admin.servicios.mod.delete')
@include('admin.servicios.mod.error')
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
