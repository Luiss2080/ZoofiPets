@extends('components.admin')

@section('title', 'Gestión de Pacientes')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/mascotas/index.css') }}">
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

        /* History/Pets Button - Purple */
        .btn-icon.history {
            background: #a855f7;
            color: white;
            border-color: #a855f7;
            box-shadow: 0 2px 4px rgba(168, 85, 247, 0.2);
        }
        .btn-icon.history:hover {
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
<div class="mascotas-container">
    <!-- Control Panel Section -->
    <div class="control-panel">
        <div class="panel-header">
            <div class="header-title">
                <div class="icon-wrapper">
                    <i class="fas fa-paw"></i>
                </div>
                <div class="title-content">
                    <h2>Gestión de Pacientes</h2>
                    <p class="subtitle">Administra los pacientes veterinarios y sus historiales clínicos</p>
                </div>
            </div>
            <div class="header-actions">
                <a href="{{ route('veterinario.mascotas.create') }}" class="btn-primary-action">
                    <i class="fas fa-plus"></i>
                    <span>Nueva Mascota</span>
                </a>
            </div>
        </div>

        <div class="panel-content">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Buscar por nombre, código o especie..." value="{{ request('search') }}">
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
                        <th><i class="fas fa-fingerprint"></i> CÓDIGO</th>
                        <th><i class="fas fa-paw"></i> PACIENTE</th>
                        <th><i class="fas fa-user"></i> DUEÑO</th>
                        <th><i class="fas fa-dna"></i> ESPECIE / RAZA</th>
                        <th><i class="fas fa-cogs"></i> ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mascotas as $mascota)
                        <tr>
                            <td>
                                <div class="id-info">
                                    <span class="primary-text" style="font-weight: 700;">{{ $mascota->codigo_mascota }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="user-info">
                                    <div class="avatar-circle">
                                        {{ strtoupper(substr($mascota->nombre, 0, 1)) }}
                                    </div>
                                    <div class="details">
                                        <span class="name" style="font-weight: 700; color: var(--text-primary);">{{ $mascota->nombre }}</span>
                                        <span class="role">
                                            @if($mascota->sexo == 'Macho') <i class="fas fa-mars text-blue-400"></i>
                                            @elseif($mascota->sexo == 'Hembra') <i class="fas fa-venus text-pink-400"></i>
                                            @endif
                                            {{ $mascota->sexo }}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="details">
                                    {{-- Link to client profile if possible --}}
                                    <a href="{{ route('recepcionista.clientes.edit', $mascota->cliente_id) }}" class="name hover:text-purple-500 transition" style="font-weight: 600; text-decoration: none; color: var(--primary-color);">
                                        {{ $mascota->cliente->nombre }} {{ $mascota->cliente->apellido }}
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="details">
                                    <span class="name">{{ $mascota->especie }}</span>
                                    <span class="role">{{ $mascota->raza ?? 'No especificada' }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    {{-- 1. View (Blue) --}}
                                    <a href="#" class="btn-icon view" title="Ver Detalles">
                                        <i class="fas fa-eye"></i>
                                    </a>

                                    {{-- 2. Edit (Orange) --}}
                                    <a href="{{ route('veterinario.mascotas.edit', $mascota->id) }}" class="btn-icon edit" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- 3. Medical History (Purple) --}}
                                    <a href="#" class="btn-icon history" title="Historial Médico">
                                        <i class="fas fa-file-medical-alt"></i>
                                    </a>

                                    {{-- 4. Delete (Red) --}}
                                    <button type="button" 
                                            class="btn-icon delete" 
                                            title="Eliminar" 
                                            onclick="openDeleteModal('{{ route('veterinario.mascotas.destroy', $mascota->id) }}', '{{ $mascota->nombre }}')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                                No hay pacientes registrados
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="pagination-wrapper">
        {{ $mascotas->appends(request()->query())->links('pages.mascotas') }}
    </div>
</div>

@include('veterinario.mascotas.mod.delete')
@include('veterinario.mascotas.mod.error')
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
