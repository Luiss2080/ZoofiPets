@extends('components.admin')

@section('title', 'Movimientos de Stock')

@push('styles')
    {{-- LINKING SPECIFIC CSS FROM ADMIN/MOVIMIENTOS FOLDER --}}
    <link rel="stylesheet" href="{{ asset('css/admin/movimientos/index.css') }}">
    
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

        /* Product Details Button - Purple */
        .btn-icon.product {
            background: #a855f7;
            color: white;
            border-color: #a855f7;
            box-shadow: 0 2px 4px rgba(168, 85, 247, 0.2);
        }
        .btn-icon.product:hover {
            background: #9333ea;
            box-shadow: 0 4px 10px rgba(168, 85, 247, 0.4);
        }

        /* Delete/Revert Button - Red */
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
                    <i class="fas fa-dolly-flatbed"></i>
                </div>
                <div class="title-content">
                    <h2>Movimientos de Stock</h2>
                    <p class="subtitle">Historial de entradas, salidas y ajustes de inventario</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="#" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Nuevo Movimiento</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por motivo, producto..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-exchange-alt"></i> TIPO / PRODUCTO</th>
                        <th><i class="fas fa-cubes"></i> CANTIDAD</th>
                        <th><i class="fas fa-sticky-note"></i> MOTIVO / FECHA</th>
                        <th><i class="fas fa-user-circle"></i> RESPONSABLE</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($movimientos as $movimiento)
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        @if($movimiento->tipo == 'entrada')
                                            <i class="fas fa-arrow-up" style="color: #10b981;"></i>
                                        @else
                                            <i class="fas fa-arrow-down" style="color: #ef4444;"></i>
                                        @endif
                                    </div>
                                    <div class="details">
                                        <span class="name" style="font-weight: 700; color: var(--text-primary);">
                                            {{ ucfirst($movimiento->tipo) }}
                                        </span>
                                        <span class="role">{{ $movimiento->producto->nombre ?? 'Producto Eliminado' }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge" style="background: rgba(168, 85, 247, 0.1); color: #a855f7; border: 1px solid rgba(168, 85, 247, 0.2);">
                                    {{ $movimiento->cantidad }} Unidades
                                </span>
                            </td>
                            <td>
                                <div class="status-date">
                                    <span class="date-text">{{ $movimiento->motivo }}</span>
                                    <span class="sub-text">{{ $movimiento->created_at->format('d/m/Y H:i') }}</span>
                                </div>
                            </td>
                            <td>
                                <span class="sub-text" style="font-weight: 600;">{{ $movimiento->usuario->name ?? 'Sistema' }}</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    {{-- 1. View Details (Blue) --}}
                                    <a href="#" class="btn-icon view" title="Ver Detalle">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    {{-- 2. Edit (Orange) - Usually restricted for history but included for consistency --}}
                                    <a href="#" class="btn-icon edit" title="Editar Nota">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- 3. Product Link (Purple) --}}
                                     <a href="#" class="btn-icon product" title="Ver Producto">
                                        <i class="fas fa-box"></i>
                                    </a>

                                    {{-- 4. Delete/Revert (Red) --}}
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            title="Revertir Movimiento" 
                                            onclick="openDeleteModal('#', '{{ $movimiento->motivo }}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay movimientos registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $movimientos->appends(request()->query())->links('pages.movimientos') }}
    </div>
</div>

@include('admin.movimientos.mod.delete')
@include('admin.movimientos.mod.error')
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
