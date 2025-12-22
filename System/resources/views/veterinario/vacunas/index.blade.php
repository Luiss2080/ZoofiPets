@extends('components.admin')

@section('title', 'Control de Vacunación')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/vacunas/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/paginacion.css') }}">
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
                            // Determine badge class based on vaccine name keyword
                            $vName = strtolower($vacuna->vacuna);
                            $badgeClass = 'default';
                            if(str_contains($vName, 'rabia')) $badgeClass = 'rabia';
                            elseif(str_contains($vName, 'triple')) $badgeClass = 'triple';
                            elseif(str_contains($vName, 'parvo')) $badgeClass = 'parvovirus';
                            elseif(str_contains($vName, 'sextuple')) $badgeClass = 'sextuple';
                            elseif(str_contains($vName, 'quintuple')) $badgeClass = 'quintuple';
                            elseif(str_contains($vName, 'giardia')) $badgeClass = 'giardia';

                            // Determine status for next dose
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
                                    <span class="status-label valid">APLICADA</span>
                                    <span class="date-text">{{ $vacuna->fecha_aplicacion->format('d/m/Y') }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle" style="color: #10b981; border-color: rgba(16, 185, 129, 0.3); background: rgba(16, 185, 129, 0.1);">
                                        {{ strtoupper(substr($vacuna->mascota->nombre ?? '?', 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name">{{ $vacuna->mascota->nombre }}</span>
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
                                    <span class="date-text">{{ $vacuna->proxima_dosis->format('d/m/Y') }}</span>
                                </div>
                                @else
                                <span class="text-muted text-sm">-- No requiere --</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="#" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    {{-- Uncomment and link when edit route exists
                                    <a href="{{ route('veterinario.vacunas.edit', $vacuna->id) }}" class="btn-icon edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a> 
                                    --}}
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
        {{ $vacunas->appends(request()->query())->links('pages.clientes') }}
    </div>
</div>
@endsection
