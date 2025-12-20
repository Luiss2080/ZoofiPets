<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - ZoofiPets')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    
    <!-- Precargar fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Meta tags -->
    <meta name="description" content="Dashboard administrativo de Tech Home Books. Sistema de gestión educativa.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- CSS del Dashboard -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/loading.css') }}">

    @stack('styles')
</head>

<body>
    
    <!-- Loading Screen -->
    @include('layouts.loading')
    
    <!-- Layout del Dashboard -->
    <div class="dashboard-layout">
        
        <!-- Sidebar Component -->
        @include('layouts.sidebar')
        
        <!-- Main Content -->
        <div class="main-content">
            
            <!-- Header Component -->
            @include('layouts.header', ['header_title' => $header_title ?? 'Dashboard Admin'])
            
            <!-- Contenido principal -->
            <div class="dashboard-content">
                
                <!-- Stats Section -->
                <!-- Stats Section -->
                <div class="stats-grid">
                    <!-- Users Card -->
                    <div class="stat-card rich-stat">
                        <div class="stat-left">
                            <div class="stat-icon-wrapper">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-info">
                                <h3 class="stat-value">{{ $stats['users'] ?? 0 }}</h3>
                                <p class="stat-label">Usuarios</p>
                            </div>
                        </div>
                        <div class="stat-right">
                            <div class="stat-mini-row success">
                                <span>Nuevos</span>
                                <strong>+{{ $stats['recent_users_count'] ?? $stats['new_users_count'] ?? 0 }}</strong>
                            </div>
                            <div class="stat-mini-row">
                                <span>Total</span>
                                <strong>{{ $stats['users'] ?? 0 }}</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Students Card -->
                    <div class="stat-card rich-stat">
                        <div class="stat-left">
                            <div class="stat-icon-wrapper">
                                <i class="fas fa-paw"></i>
                            </div>
                            <div class="stat-info">
                                <h3 class="stat-value">{{ $stats['students'] ?? 0 }}</h3>
                                <p class="stat-label">Mascotas</p>
                            </div>
                        </div>
                        <div class="stat-right">
                            <div class="stat-mini-row success">
                                <span>Activos</span>
                                <i class="fas fa-check-circle" style="font-size: 0.8rem;"></i>
                            </div>
                            <div class="stat-mini-row">
                                <span>Total</span>
                                <strong>{{ $stats['students'] ?? 0 }}</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Teachers Card -->
                    <div class="stat-card rich-stat">
                        <div class="stat-left">
                            <div class="stat-icon-wrapper">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <div class="stat-info">
                                <h3 class="stat-value">{{ $stats['teachers'] ?? 0 }}</h3>
                                <p class="stat-label">Empleados</p>
                            </div>
                        </div>
                        <div class="stat-right">
                            <div class="stat-mini-row">
                                <span>Activos</span>
                                <strong>{{ $stats['teachers'] ?? 0 }}</strong>
                            </div>
                            <div class="stat-mini-row accent">
                                <span>Académicos</span>
                                <i class="fas fa-laptop" style="font-size: 0.8rem;"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Courses Card -->
                    <div class="stat-card rich-stat">
                        <div class="stat-left">
                            <div class="stat-icon-wrapper">
                                <i class="fas fa-box"></i>
                            </div>
                            <div class="stat-info">
                                <h3 class="stat-value">{{ $stats['courses'] ?? 0 }}</h3>
                                <p class="stat-label">Productos</p>
                            </div>
                        </div>
                        <div class="stat-right">
                            <div class="stat-mini-row success">
                                <span>Recientes</span>
                                <strong>+{{ $stats['recent_courses_count'] ?? 0 }}</strong>
                            </div>
                            <div class="stat-mini-row">
                                <span>Total</span>
                                <strong>{{ $stats['courses'] ?? 0 }}</strong>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- LEGACY ANALYTICS SECTION REMOVED -->

                <!-- SECTION: Middle Split (Table + Chart) -->
                <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 1.5rem; margin-top: 2rem;" class="dashboard-split-layout">
                    
                    <!-- Left: Recent Users Table (More space) -->
                    <div class="dashboard-card h-100">
                        <div class="card-header">
                            <h3 class="card-title">Usuarios Recientes</h3>
                            <a href="{{ route('admin.usuarios.index') }}" class="card-action-link">Ver todos</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive-compact">
                                <table class="dashboard-table">
                                    <thead>
                                        <tr>
                                            <th class="ps-3">
                                                <div class="th-content start">
                                                    <i class="fas fa-user text-purple"></i>Usuario
                                                </div>
                                            </th>
                                            <th class="text-center">
                                                <div class="th-content centered">
                                                    <i class="fas fa-user-tag text-purple"></i>Rol
                                                </div>
                                            </th>
                                            <th class="text-center">
                                                <div class="th-content centered">
                                                    <i class="fas fa-clock text-purple"></i>Sesión
                                                </div>
                                            </th>
                                            <th class="text-center">
                                                <div class="th-content centered">
                                                    <i class="fas fa-toggle-on text-purple"></i>Estado
                                                </div>
                                            </th>
                                            <th class="text-center" style="width: 140px; white-space: nowrap;">
                                                <div class="th-content centered">
                                                    ACTIONS <i class="fas fa-cog text-purple"></i>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        @if(isset($recentUsers) && count($recentUsers) > 0)
                                            @foreach($recentUsers as $user)
                                                <tr class="hover-scale">
                                                    <td class="ps-3">
                                                        <div class="user-info-compact">
                                                            <div class="user-avatar-xs {{ $user->rol === 'admin' ? 'pulse-purple' : '' }}">{{ substr($user->name, 0, 1) }}</div>
                                                            <div class="d-flex align-items-center">
                                                                <span class="user-name-styled">{{ $user->name }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge-modern-purple">
                                                            @if($user->rol == 'admin') <i class="fas fa-crown"></i>
                                                            @elseif($user->rol == 'docente') <i class="fas fa-chalkboard-teacher"></i>
                                                            @else <i class="fas fa-user-graduate"></i>
                                                            @endif
                                                            {{ ucfirst($user->rol) }}
                                                        </span>
                                                    </td>
                                                    <!-- More columns handled by next chunk if needed, or I include enough context -->
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center text-muted py-3">No hay usuarios recientes</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                                <td class="text-center">
                                                    <span class="session-time">
                                                        <i class="fas fa-history text-purple me-1"></i> Hace {{ rand(1, 59) }} min
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge-modern-status online">
                                                        <span class="status-dot-pulse"></span> Activo
                                                    </span>
                                                </td>
                                                <td class="text-center" style="white-space: nowrap;">
                                                    <div class="action-buttons-row">
                                                        <button class="btn-icon-modern purple" title="Editar">
                                                            <i class="fas fa-pen"></i>
                                                        </button>
                                                        <button class="btn-icon-modern purple" title="Ver Perfil">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn-icon-modern purple" title="Eliminar">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr><td colspan="5" class="text-center py-4">
                                                <div class="empty-state">
                                                    <i class="fas fa-users-slash mb-2 text-purple" style="font-size: 2rem; opacity: 0.5;"></i>
                                                    <p>No hay usuarios recientes</p>
                                                </div>
                                            </td></tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Right: User Distribution Chart -->
                    <div class="dashboard-card glow-effect h-100 d-flex flex-column">
                        <div class="card-header border-0 pb-0 flex-shrink-0">
                            <h3 class="card-title">Distribución</h3>
                        </div>
                        <div class="card-body d-flex flex-column align-items-center justify-content-center pt-2 pb-4 flex-grow-1" style="gap: 2rem;">
                            
                            <!-- Chart Area with Center Text -->
                            <div style="width: 220px; height: 220px; position: relative; margin: 0 auto !important;">
                                <canvas id="userRolesChart"></canvas>
                                <div class="chart-center-text">
                                    <span class="total-number">{{ array_sum($roleDistribution ?? []) }}</span>
                                    <span class="total-label">Total</span>
                                </div>
                            </div>


                            <!-- Legend Grid (Compact) -->
                            <div class="legend-grid px-3">
                                @php $total = array_sum($roleDistribution ?? []) ?: 1; @endphp
                                
                                <!-- Admin -->
                                <div class="legend-item-compact">
                                    <div class="legend-info">
                                        <div class="legend-box" style="background: #3b82f6;"></div>
                                        <span class="legend-text">Administración</span>
                                    </div>
                                    <span class="legend-percent text-muted fw-bold">{{ round(($roleDistribution['admin'] ?? 0) / $total * 100) }}%</span>
                                </div>

                                <!-- Docente -->
                                <div class="legend-item-compact">
                                    <div class="legend-info">
                                        <div class="legend-box" style="background: #a855f7;"></div>
                                        <span class="legend-text">Veterinario</span>
                                    </div>
                                    <span class="legend-percent text-muted fw-bold">{{ round(($roleDistribution['docente'] ?? 0) / $total * 100) }}%</span>
                                </div>

                                <!-- Estudiante -->
                                <div class="legend-item-compact">
                                    <div class="legend-info">
                                        <div class="legend-box" style="background: #10b981;"></div>
                                        <span class="legend-text">Recepción</span>
                                    </div>
                                    <span class="legend-percent text-muted fw-bold">{{ round(($roleDistribution['estudiante'] ?? 0) / $total * 100) }}%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION: Modules Grid (3 Cols) -->
                <!-- SECTION: Analytics Grid (New Design) -->
                <!-- SECTION: Analytics Grid (New Design) -->
                <!-- SECTION: Analytics Grid (New Design) -->
                <div class="analytics-grid" style="display: flex; flex-direction: column; gap: 1.5rem; margin-top: 2rem;">
                    
                    <!-- Row 1: Large Charts (Attendance & Activity) -->
                    <div class="analytics-row-1" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 1.5rem;">
                        
                        <!-- Chart: Asistencia Mensual -->
                        <div class="dashboard-card glow-effect h-100" style="overflow: hidden;">
                            <div class="card-header border-0 pb-0 d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Citas Mensuales</h3>
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; font-weight: 600;">Semana</button>
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; opacity: 0.6; font-weight: 600;">Mes</button>
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; opacity: 0.6; font-weight: 600;">Año</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="attendanceChart" height="250"></canvas>
                            </div>
                        </div>

                        <!-- Chart: Actividad Global -->
                        <div class="dashboard-card glow-effect h-100" style="overflow: hidden;">
                            <div class="card-header border-0 pb-0 d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Actividad Global</h3>
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; font-weight: 600;">Semana</button>
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; opacity: 0.6; font-weight: 600;">Mes</button>
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; opacity: 0.6; font-weight: 600;">Año</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="activityGlobalChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: Small Charts (Grades, Resources) -->
                    <div class="analytics-row-2" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                        
                        <!-- Chart: Promedios -->
                        <div class="dashboard-card h-100" style="overflow: hidden !important; background-image: none !important;">
                            <div class="card-header border-0 pb-0 d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Inventario Top</h3>
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; font-weight: 600;">Semana</button>
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; opacity: 0.6; font-weight: 600;">Mes</button>
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; opacity: 0.6; font-weight: 600;">Año</button>
                                </div>
                            </div>
                            <div class="card-body" style="position: relative;">
                                <canvas id="gradesBarChart" height="200"></canvas>
                            </div>
                        </div>

                        <!-- Chart: Recursos -->
                        <div class="dashboard-card h-100" style="overflow: hidden !important; background-image: none !important;">
                            <div class="card-header border-0 pb-0 d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Pacientes por Especie</h3>
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; font-weight: 600;">Semana</button>
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; opacity: 0.6; font-weight: 600;">Mes</button>
                                    <button type="button" class="btn" style="background-color: #4834d4 !important; color: #ffffff !important; border: none; border-radius: 8px; padding: 5px 15px; opacity: 0.6; font-weight: 600;">Año</button>
                                </div>
                            </div>
                            <div class="card-body" style="position: relative;">
                                <canvas id="resourcesBarChart" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Footer Component -->
            @include('layouts.footer')
            
        </div>
    </div>
    
    <!-- Configuración global -->
    <script>
        window.appConfig = {
            csrfToken: '{{ csrf_token() }}',
            baseUrl: '{{ url("/") }}',
            user: {
                id: '{{ session("user_id") }}',
                name: '{{ session("user_name") }}',
                role: '{{ session("user_role") }}'
            },
            chartData: @json($chartData ?? []),
            roleDistribution: @json($roleDistribution ?? [])
        };
    </script>
    
    <!-- JavaScript del Dashboard -->
    <script src="{{ asset('js/layouts/sidebar.js') }}"></script>
    <script src="{{ asset('js/layouts/footer.js') }}"></script>
    <script src="{{ asset('js/layouts/loading.js') }}"></script>
    
    <!-- JavaScript del Header -->
    {{-- Script moved to header.blade.php --}}
    
    @stack('scripts')
    <script src="{{ asset('js/dashboard/admin.js') }}"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Additional initializations if needed
        });
    </script>
</body>
</html>
