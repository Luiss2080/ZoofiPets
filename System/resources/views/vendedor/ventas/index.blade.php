@extends('components.admin')

@section('title', 'Historial de Ventas')

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

        /* Invoice PDF Button - Orange (Replacing Edit) */
        .btn-icon.invoice {
            background: #f97316;
            color: white;
            border-color: #f97316;
            box-shadow: 0 2px 4px rgba(249, 115, 22, 0.2);
        }
        .btn-icon.invoice:hover {
            background: #ea580c;
            box-shadow: 0 4px 10px rgba(249, 115, 22, 0.4);
        }

        /* Ticket Button - Purple */
        .btn-icon.ticket {
            background: #a855f7;
            color: white;
            border-color: #a855f7;
            box-shadow: 0 2px 4px rgba(168, 85, 247, 0.2);
        }
        .btn-icon.ticket:hover {
            background: #9333ea;
            box-shadow: 0 4px 10px rgba(168, 85, 247, 0.4);
        }

        /* Cancel/Delete Button - Red */
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
                    <i class="fas fa-cash-register"></i>
                </div>
                <div class="title-content">
                    <h2>Historial de Ventas</h2>
                    <p class="subtitle">Registros de transacciones, facturación y control de caja</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ route('vendedor.ventas.create') }}" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Nueva Venta (POS)</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por factura o cliente..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-file-invoice"></i> FACTURA</th>
                        <th><i class="fas fa-calendar-alt"></i> FECHA Y CLIENTE</th>
                        <th><i class="fas fa-dollar-sign"></i> TOTAL</th>
                        <th><i class="fas fa-user-tie"></i> VENDEDOR</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ventas as $venta)
                        <tr>
                            <td>
                                <span class="badge" style="background: rgba(72, 52, 212, 0.1); color: var(--primary-color); border: 1px solid rgba(72, 52, 212, 0.2); font-family: monospace;">
                                    {{ $venta->numero_factura }}
                                </span>
                            </td>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($venta->cliente->nombre ?? 'G', 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name" style="font-weight: 700; color: var(--text-primary);">{{ $venta->cliente->nombre ?? 'Cliente General' }} {{ $venta->cliente->apellido ?? '' }}</span>
                                        <span class="role">{{ $venta->fecha_venta->format('d/m/Y H:i') }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="status-date">
                                    <span class="date-text" style="font-weight: 800; color: #10b981;">${{ number_format($venta->total, 2) }}</span>
                                    <span class="sub-text">{{ $venta->metodo_pago }}</span>
                                </div>
                            </td>
                            <td>
                                <span class="primary-text">{{ $venta->empleado->nombre ?? 'N/A' }}</span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    {{-- 1. View Details (Blue) --}}
                                    <a href="{{ route('vendedor.ventas.show', $venta->id) }}" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    {{-- 2. Invoice (Orange) --}}
                                    <a href="#" class="btn-icon invoice" title="Imprimir Factura">
                                        <i class="fas fa-file-invoice-dollar"></i>
                                    </a>

                                    {{-- 3. Ticket (Purple) --}}
                                     <a href="#" class="btn-icon ticket" title="Imprimir Ticket">
                                        <i class="fas fa-receipt"></i>
                                    </a>

                                    {{-- 4. Cancel/Delete (Red) --}}
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            title="Cancelar Venta" 
                                            onclick="openDeleteModal('#', '{{ $venta->numero_factura }}')">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay ventas registradas
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $ventas->appends(request()->query())->links('pages.ventas') }}
    </div>
</div>

@include('vendedor.ventas.mod.delete')
@include('vendedor.ventas.mod.error')
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
