@extends('components.admin')

@section('title', 'Gestión de Productos')

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

        /* Stock/History Button - Purple */
        .btn-icon.stock {
            background: #a855f7;
            color: white;
            border-color: #a855f7;
            box-shadow: 0 2px 4px rgba(168, 85, 247, 0.2);
        }
        .btn-icon.stock:hover {
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
                    <i class="fas fa-boxes"></i>
                </div>
                <div class="title-content">
                    <h2>Gestión de Productos</h2>
                    <p class="subtitle">Inventario, precios y control de stock de la tienda</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ route('vendedor.productos.create') }}" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Nuevo Producto</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por nombre o código..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-box"></i> PRODUCTO</th>
                        <th><i class="fas fa-barcode"></i> CÓDIGO</th>
                        <th><i class="fas fa-tags"></i> PRECIO</th>
                        <th><i class="fas fa-layer-group"></i> STOCK</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($productos as $producto)
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($producto->nombre, 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name" style="font-weight: 700; color: var(--text-primary);">{{ $producto->nombre }}</span>
                                        <span class="role">{{ $producto->categoria_producto->nombre ?? 'Sin Categoría' }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge" style="background: rgba(168, 85, 247, 0.1); color: #a855f7; border: 1px solid rgba(168, 85, 247, 0.2); font-family: monospace;">
                                    {{ $producto->codigo_interno }}
                                </span>
                            </td>
                            <td>
                                <div class="status-date">
                                    <span class="date-text" style="font-weight: 800; color: #10b981;">${{ number_format($producto->precio_venta, 2) }}</span>
                                </div>
                            </td>
                            <td>
                                @if($producto->stock_actual > 10)
                                    <span class="status-label valid">{{ $producto->stock_actual }} Unidades</span>
                                @elseif($producto->stock_actual > 0)
                                    <span class="status-label pending">{{ $producto->stock_actual }} Unidades</span>
                                @else
                                    <span class="status-label invalid">AGOTADO</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    {{-- 1. View Details (Blue) --}}
                                    <a href="#" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    {{-- 2. Edit (Orange) --}}
                                    <a href="{{ route('vendedor.productos.edit', $producto->id) }}" class="btn-icon edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- 3. Stock/History (Purple) --}}
                                     <a href="#" class="btn-icon stock" title="Movimientos">
                                        <i class="fas fa-dolly"></i>
                                    </a>

                                    {{-- 4. Delete (Red) --}}
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            title="Eliminar Producto" 
                                            onclick="openDeleteModal('{{ route('vendedor.productos.destroy', $producto->id) }}', '{{ $producto->nombre }}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay productos registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $productos->appends(request()->query())->links('pages.productos') }}
    </div>
</div>

@include('vendedor.productos.mod.delete')
@include('vendedor.productos.mod.error')
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
