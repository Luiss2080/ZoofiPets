@extends('components.admin')

@section('title', 'Control de Vacunación')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/vacunas/index.css') }}">
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

        /* Certificate/Extra Button - Purple */
        .btn-icon.cert {
            background: #a855f7;
            color: white;
            border-color: #a855f7;
            box-shadow: 0 2px 4px rgba(168, 85, 247, 0.2);
        }
        .btn-icon.cert:hover {
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
<div class="vacunas-container">
    <!-- Control Panel Section -->
    <div class="control-panel">
        <div class="panel-header">
            <div class="header-title">
                <div class="icon-wrapper">
                    <i class="fas fa-syringe"></i>
                </div>
                <div class="title-content">
                    <h2>Control de Vacunación</h2>
                    <p class="subtitle">Registra y monitorea el esquema de vacunación de tus pacientes</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ route('veterinario.vacunas.create') }}" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Registrar Vacuna</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por paciente, vacuna o lote..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-calendar-check"></i> FECHA APLICACIÓN</th>
                        <th><i class="fas fa-paw"></i> PACIENTE</th>
                        <th><i class="fas fa-syringe"></i> VACUNA / DOSIS</th>
                        <th><i class="fas fa-hourglass-half"></i> PROXIMA DOSIS</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($vacunas as $vacuna)
                        @php
                            $vName = strtolower($vacuna->vacuna);
                            $badgeClass = 'default';
                            if(str_contains($vName, 'rabia')) $badgeClass = 'rabia';
                            elseif(str_contains($vName, 'triple')) $badgeClass = 'triple';
                            elseif(str_contains($vName, 'parvo')) $badgeClass = 'parvovirus';
                            elseif(str_contains($vName, 'sextuple')) $badgeClass = 'sextuple';
                            elseif(str_contains($vName, 'quintuple')) $badgeClass = 'quintuple';
                            elseif(str_contains($vName, 'giardia')) $badgeClass = 'giardia';

                            $nextDoseStatus = 'valid';
                            $nextDoseLabel = 'VIGENTE';
                            if($vacuna->proxima_dosis) {
                                if($vacuna->proxima_dosis->isPast()) {
                                    $nextDoseStatus = 'overdue';
                                    $nextDoseLabel = 'VENCIDA';
                                } elseif($vacuna->proxima_dosis->diffInDays(now()) < 7) {
                                    $nextDoseStatus = 'upcoming';
                                    $nextDoseLabel = 'PRÓXIMA';
                                }
                            } else {
                                $nextDoseLabel = 'FINALIZADA';
                            }
                        @endphp
                        <tr>
                            <td>
                                <div class="status-date">
                                    <span class="status-label valid" style="color: #10b981;">APLICADA</span>
                                    <span class="date-text" style="font-weight: 700;">{{ $vacuna->fecha_aplicacion->format('d/m/Y') }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($vacuna->mascota->nombre ?? '?', 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name" style="font-weight: 700; color: var(--text-primary);">{{ $vacuna->mascota->nombre }}</span>
                                        <span class="role">{{ $vacuna->mascota->especie }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="details">
                                    <span class="badge-vaccine {{ $badgeClass }}">
                                        <i class="fas fa-shield-virus"></i> {{ $vacuna->vacuna }}
                                    </span>
                                    <span class="role" style="margin-top: 0.25rem;">Lote: {{ $vacuna->lote ?? 'N/A' }}</span>
                                </div>
                            </td>
                            <td>
                                @if($vacuna->proxima_dosis)
                                <div class="status-date">
                                    <span class="status-label {{ $nextDoseStatus }}">{{ $nextDoseLabel }}</span>
                                    <span class="date-text" style="font-weight: 700;">{{ $vacuna->proxima_dosis->format('d/m/Y') }}</span>
                                </div>
                                @else
                                <span class="text-muted text-sm">-- No requiere --</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    {{-- 1. View (Blue) --}}
                                    <a href="#" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    {{-- 2. Edit (Orange) --}}
                                    {{-- Using placeholder for now, replace with route('veterinario.vacunas.edit', $vacuna->id) if it exists --}}
                                    <a href="#" class="btn-icon edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a> 

                                    {{-- 3. Certificate/Extra (Purple) --}}
                                     <a href="#" class="btn-icon cert" title="Certificado">
                                        <i class="fas fa-file-contract"></i>
                                    </a>

                                    {{-- 4. Delete (Red) --}}
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            title="Eliminar Registro" 
                                            onclick="openDeleteModal('{{ route('veterinario.vacunas.destroy', $vacuna->id) }}', '{{ $vacuna->vacuna }} - {{ $vacuna->mascota->nombre }}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay registros de vacunación disponibles
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $vacunas->appends(request()->query())->links('pages.vacunas') }}
    </div>
</div>

@include('veterinario.vacunas.mod.delete')
@include('veterinario.vacunas.mod.error')
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
