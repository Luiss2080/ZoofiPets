@extends('components.admin')

@section('title', 'Gestión de Compras')

@push('styles')
    {{-- LINKING SPECIFIC CSS FROM ADMIN/COMPRAS FOLDER --}}
    <link rel="stylesheet" href="{{ asset('css/admin/compras/index.css') }}">
    
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

        /* Print/File Button - Purple */
        .btn-icon.print {
            background: #a855f7;
            color: white;
            border-color: #a855f7;
            box-shadow: 0 2px 4px rgba(168, 85, 247, 0.2);
        }
        .btn-icon.print:hover {
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
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="title-content">
                    <h2>Gestión de Compras</h2>
                    <p class="subtitle">Registros de abastecimiento e inventario</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="#" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Nueva Compra</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por factura, proveedor..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-receipt"></i> FACTURA / FECHA</th>
                        <th><i class="fas fa-truck"></i> PROVEEDOR</th>
                        <th><i class="fas fa-money-bill-wave"></i> TOTAL</th>
                        <th><i class="fas fa-clipboard-check"></i> ESTADO</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($compras as $compra)
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        <i class="fas fa-file-invoice-dollar"></i>
                                    </div>
                                    <div class="details">
                                        <span class="name" style="font-weight: 700; color: var(--text-primary);">{{ $compra->numero_factura }}</span>
                                        <span class="role">{{ $compra->fecha_compra->format('d/m/Y') }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="status-date">
                                    <span class="date-text" style="font-weight: 600;">{{ $compra->proveedor->nombre ?? 'N/A' }}</span>
                                    <span class="sub-text">{{ $compra->proveedor->ruc ?? '-' }}</span>
                                </div>
                            </td>
                            <td>
                                <span class="badge" style="background: rgba(16, 185, 129, 0.1); color: #10b981; font-weight: 700; font-size: 0.9rem;">
                                    ${{ number_format($compra->total, 2) }}
                                </span>
                            </td>
                            <td>
                                @php
                                    $statusClass = match($compra->estado) {
                                        'Recibida' => 'received',
                                        'En_Transito' => 'transit',
                                        'Cancelada' => 'cancelled',
                                        default => 'pending',
                                    };
                                    $statusLabel = str_replace('_', ' ', $compra->estado);
                                @endphp
                                <span class="status-label {{ $statusClass }}">{{ strtoupper($statusLabel) }}</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    {{-- 1. View Details (Blue) --}}
                                    <a href="#" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    {{-- 2. Edit (Orange) - Only if not cancelled/completed maybe? Keeping enabled for now --}}
                                    <a href="#" class="btn-icon edit" title="Editar Compra">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- 3. Print/PDF (Purple) --}}
                                     <a href="#" class="btn-icon print" title="Imprimir Comprobante">
                                        <i class="fas fa-print"></i>
                                    </a>

                                    {{-- 4. Delete/Cancel (Red) --}}
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            title="Anular Compra" 
                                            onclick="openDeleteModal('#', '{{ $compra->numero_factura }}')">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay compras registradas
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $compras->appends(request()->query())->links('pages.compras') }}
    </div>
</div>

@include('admin.compras.mod.delete')
@include('admin.compras.mod.error')
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
