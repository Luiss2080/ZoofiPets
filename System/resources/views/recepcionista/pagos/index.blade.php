@extends('components.admin')

@section('title', 'Gestión de Pagos')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/pagos/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod/confirmar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod/advertencia.css') }}">
@endpush

@section('content')
<div class="pagos-container">
    <!-- Control Panel Section -->
    <div class="control-panel">
        <div class="panel-header">
            <div class="header-title">
                <div class="icon-wrapper">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="title-content">
                    <h2>Gestión de Pagos</h2>
                    <p class="subtitle">Registra y administra los pagos y facturación</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ route('recepcionista.pagos.create') }}" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Registrar Pago</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por referencia, cliente o monto..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-hashtag"></i> REFERENCIA</th>
                        <th><i class="fas fa-user-tag"></i> CLIENTE</th>
                        <th><i class="fas fa-wallet"></i> METODO / FECHA</th>
                        <th><i class="fas fa-dollar-sign"></i> MONTO</th>
                        <th><i class="fas fa-info-circle"></i> ESTADO</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pagos as $pago)
                        @php
                            // Mocking relationships if null for safety
                            $clienteNombre = $pago->venta->cliente->nombre ?? ($pago->cliente->nombre ?? 'Desconocido');
                            $clienteApellido = $pago->venta->cliente->apellido ?? ($pago->cliente->apellido ?? '');
                            $metodoNombre = $pago->metodoPago->nombre ?? 'Efectivo';
                            
                            // Status logic (mocked if column missing)
                            $status = $pago->estado ?? 'Pagado'; 
                            $statusClass = match(strtolower($status)) {
                                'pagado' => 'paid',
                                'pendiente' => 'pending',
                                'parcial' => 'partial',
                                default => 'paid'
                            };
                        @endphp
                        <tr>
                            <td>
                                <div class="id-info">
                                    <span class="user-info name">REF-{{ str_pad($pago->id, 6, '0', STR_PAD_LEFT) }}</span>
                                    <span class="sub-text">{{ $pago->referencia ?? 'Sin ref.' }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($clienteNombre, 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name">{{ $clienteNombre }} {{ $clienteApellido }}</span>
                                        <span class="role">Cliente</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="details">
                                    <span class="badge-method">
                                        <i class="fas fa-credit-card"></i> {{ $metodoNombre }}
                                    </span>
                                    <span class="role" style="margin-top: 0.25rem;">{{ $pago->created_at->format('d/m/Y H:i') }}</span>
                                </div>
                            </td>
                            <td>
                                <span style="font-weight: 700; color: var(--text-dark); font-size: 1rem;">
                                    ${{ number_format($pago->monto, 2) }}
                                </span>
                            </td>
                            <td>
                                <span class="badge-status {{ $statusClass }}">
                                    {{ $status }}
                                </span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="#" class="btn-icon view" title="Ver Detalle">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn-icon print" title="Imprimir Recibo">
                                        <i class="fas fa-print"></i>
                                    </a>
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            onclick="openDeleteModal('{{ route('recepcionista.pagos.destroy', $pago->id) }}', '{{ $clienteNombre }} {{ $clienteApellido }}')" 
                                            title="Eliminar">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay registros de pagos disponibles
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $pagos->appends(request()->query())->links('pages.pagos') }}
    </div>
</div>

@include('recepcionista.pagos.mod.delete')
@include('recepcionista.pagos.mod.error')
<!-- Success modal removed as shared system lacks dedicated support, will use warning logic if needed or toast -->

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/admin/pagos/index.js') }}"></script>
    <script src="{{ asset('js/mod/confirmar.js') }}"></script>
    <script src="{{ asset('js/mod/advertencia.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                // Using Warning Modal type for feedback since Success is not defined in shared
                openWarningModal("Operación Exitosa", "{{ session('success') }}");
            @endif

            @if(session('error'))
                openWarningModal("Error", "{{ session('error') }}");
            @endif
        });
    </script>
@endsection

@section('content')
<div class="pagos-container">
    <!-- Control Panel Section -->
    <div class="control-panel">
        <div class="panel-header">
            <div class="header-title">
                <div class="icon-wrapper">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="title-content">
                    <h2>Gestión de Pagos</h2>
                    <p class="subtitle">Registra y administra los pagos y facturación</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ route('recepcionista.pagos.create') }}" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Registrar Pago</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por referencia, cliente o monto..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-hashtag"></i> REFERENCIA</th>
                        <th><i class="fas fa-user-tag"></i> CLIENTE</th>
                        <th><i class="fas fa-wallet"></i> METODO / FECHA</th>
                        <th><i class="fas fa-dollar-sign"></i> MONTO</th>
                        <th><i class="fas fa-info-circle"></i> ESTADO</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pagos as $pago)
                        @php
                            // Mocking relationships if null for safety
                            $clienteNombre = $pago->venta->cliente->nombre ?? ($pago->cliente->nombre ?? 'Desconocido');
                            $clienteApellido = $pago->venta->cliente->apellido ?? ($pago->cliente->apellido ?? '');
                            $metodoNombre = $pago->metodoPago->nombre ?? 'Efectivo';
                            
                            // Status logic (mocked if column missing)
                            $status = $pago->estado ?? 'Pagado'; 
                            $statusClass = match(strtolower($status)) {
                                'pagado' => 'paid',
                                'pendiente' => 'pending',
                                'parcial' => 'partial',
                                default => 'paid'
                            };
                        @endphp
                        <tr>
                            <td>
                                <div class="id-info">
                                    <span class="user-info name">REF-{{ str_pad($pago->id, 6, '0', STR_PAD_LEFT) }}</span>
                                    <span class="sub-text">{{ $pago->referencia ?? 'Sin ref.' }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($clienteNombre, 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name">{{ $clienteNombre }} {{ $clienteApellido }}</span>
                                        <span class="role">Cliente</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="details">
                                    <span class="badge-method">
                                        <i class="fas fa-credit-card"></i> {{ $metodoNombre }}
                                    </span>
                                    <span class="role" style="margin-top: 0.25rem;">{{ $pago->created_at->format('d/m/Y H:i') }}</span>
                                </div>
                            </td>
                            <td>
                                <span style="font-weight: 700; color: var(--text-dark); font-size: 1rem;">
                                    ${{ number_format($pago->monto, 2) }}
                                </span>
                            </td>
                            <td>
                                <span class="badge-status {{ $statusClass }}">
                                    {{ $status }}
                                </span>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="#" class="btn-icon view" title="Ver Detalle">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn-icon print" title="Imprimir Recibo">
                                        <i class="fas fa-print"></i>
                                    </a>
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            onclick="openDeleteModal('{{ route('recepcionista.pagos.destroy', $pago->id) }}', '{{ $clienteNombre }} {{ $clienteApellido }}', '{{ $pago->referencia ?? 'N/A' }}', '{{ number_format($pago->monto, 2) }}')" 
                                            title="Eliminar">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay registros de pagos disponibles
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $pagos->appends(request()->query())->links('pages.clientes') }}
    </div>
</div>

@include('recepcionista.pagos.mod.delete')
@include('recepcionista.pagos.mod.success')
@include('recepcionista.pagos.mod.error')

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/admin/pagos/index.js') }}"></script>
    <script src="{{ asset('js/admin/pagos/modals.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                openSuccessModal("{{ session('success') }}");
            @endif

            @if(session('error'))
                openErrorModal("{{ session('error') }}");
            @endif
        });
    </script>
@endsection
