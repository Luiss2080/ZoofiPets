@extends('components.admin')

@section('title', 'Métodos de Pago')

@push('styles')
    {{-- Reusing Consultas styles as base (unified system style) --}}
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

        /* Transactions/Config Button - Purple */
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
    </style>
@endpush

@section('content')
<div class="consultas-container">
    <!-- Control Panel Section -->
    <div class="control-panel">
        <div class="panel-header">
            <div class="header-title">
                <div class="icon-wrapper">
                    <i class="fas fa-wallet"></i>
                </div>
                <div class="title-content">
                    <h2>Métodos de Pago</h2>
                    <p class="subtitle">Gestiona las opciones de facturación y configuración de pasarelas</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="#" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Nuevo Método</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar método de pago..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-credit-card"></i> MÉTODO DE PAGO</th>
                        <th><i class="fas fa-percentage"></i> COMISIÓN</th>
                        <th><i class="fas fa-exchange-alt"></i> TRANSACCIONES</th>
                        <th><i class="fas fa-check-circle"></i> ESTADO</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($metodos as $metodo)
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($metodo->nombre, 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name" style="font-weight: 700; color: var(--text-primary);">{{ $metodo->nombre }}</span>
                                        <span class="role">{{ $metodo->descripcion ?? 'Sin descripción' }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge" style="background: rgba(16, 185, 129, 0.1); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.2);">
                                    {{ $metodo->comision_porcentaje ? $metodo->comision_porcentaje . '%' : '0%' }}
                                </span>
                            </td>
                            <td>
                                <div class="status-date">
                                    <span class="date-text" style="font-weight: 600;">{{ $metodo->pagos_count ?? 0 }}</span>
                                    <span class="sub-text">Registrados</span>
                                </div>
                            </td>
                            <td>
                                @if($metodo->activo)
                                    <span class="status-label valid">ACTIVO</span>
                                @else
                                    <span class="status-label pending">INACTIVO</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    {{-- 1. View (Blue) --}}
                                    <a href="#" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    {{-- 2. Edit (Orange) --}}
                                    <a href="#" class="btn-icon edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- 3. Config (Purple) --}}
                                     <a href="#" class="btn-icon config" title="Configurar">
                                        <i class="fas fa-sliders-h"></i>
                                    </a>

                                    {{-- 4. Delete (Red) --}}
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            title="Eliminar Método" 
                                            onclick="openDeleteModal('#', '{{ $metodo->nombre }}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay métodos de pago registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $metodos->appends(request()->query())->links('pages.metodos_pago') }}
    </div>
</div>

@include('admin.metodos_pago.mod.delete')
@include('admin.metodos_pago.mod.error')
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
