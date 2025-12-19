{{-- Header del Sistema - ZoofiPets --}}
<header class="dashboard-header">
    <!-- Left: Brand & Search -->
    <div class="header-left">
        <div class="header-brand">
            <h1 class="brand-text">
                <a href="{{ route('admin.dashboard') }}" style="text-decoration: none; color: inherit;">
                    {{ $header_title ?? 'ZOOFIPETS' }}
                </a>
            </h1>
        </div>
        <div class="header-search">
            <form action="#" method="GET" class="search-form">
                <i class="fas fa-search search-icon"></i>
                <input type="text" name="q" id="globalSearch" placeholder="Buscar pacientes, citas..." class="search-input" autocomplete="off">
            </form>
        </div>
    </div>

    <!-- Right: Actions & Profile -->
    <div class="header-right">
        
        <!-- Quick Actions (New) -->
        <div class="action-wrapper">
            <button class="action-btn" id="quickActionsToggle" aria-label="Acciones Rápidas" title="Acciones Rápidas">
                <i class="fas fa-plus-square"></i>
            </button>
            <!-- Quick Actions Dropdown -->
            <div class="quick-actions-dropdown" id="quickActionsDropdown">
                <div class="qa-header">Crear Nuevo</div>
                <div class="qa-grid">
                    <a href="{{ route('recepcionista.citas.create') }}" class="qa-item">
                        <div class="qa-icon blue">
                            <i class="fas fa-calendar-plus"></i>
                        </div>
                        <span>Cita</span>
                    </a>
                    <a href="{{ route('veterinario.mascotas.create') }}" class="qa-item">
                        <div class="qa-icon purple">
                            <i class="fas fa-paw"></i>
                        </div>
                        <span>Paciente</span>
                    </a>
                    <a href="{{ route('vendedor.ventas.create') }}" class="qa-item">
                        <div class="qa-icon green">
                            <i class="fas fa-cash-register"></i>
                        </div>
                        <span>Venta</span>
                    </a>
                    <a href="{{ route('reportes.index') }}" class="qa-item">
                        <div class="qa-icon orange">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <span>Reporte</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Help Button -->
        <a href="#" class="action-btn" title="Ayuda y Soporte">
            <i class="fas fa-question-circle"></i>
        </a>

        <!-- Calendar Link -->
        <a href="{{ route('calendario.index') }}" class="action-btn" title="Calendario">
            <i class="fas fa-calendar-alt"></i>
        </a>

        <!-- Notificaciones -->
        <div class="notification-wrapper">
            <button class="notification-btn" id="notificationToggle" aria-label="Notificaciones">
                <i class="fas fa-bell"></i>
                <span class="notification-badge pulse">3</span>
            </button>
            <div class="notification-dropdown" id="notificationDropdown">
                <div class="dropdown-header">
                    <span>Notificaciones</span>
                    <a href="#" class="mark-read">Marcar leídas</a>
                </div>
                <!-- Mock Items -->
                <div class="notif-item unread">
                    <div class="notif-icon blue"><div class="dot"></div></div>
                    <div class="notif-content">
                        <p class="notif-title">Nueva Cita Solicitada</p>
                        <p class="notif-time">Hace 5 min</p>
                    </div>
                </div>
                <div class="notif-item">
                    <div class="notif-icon green"><div class="dot"></div></div>
                    <div class="notif-content">
                        <p class="notif-title">Inventario Bajo: Vacunas</p>
                        <p class="notif-time">Hace 1 hora</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Perfil de Usuario -->
        <div class="user-profile-container">
            @php
                $loggedInUser = auth()->user() ?? (session('user_id') ? \App\Models\User::find(session('user_id')) : null);
                $initial = $loggedInUser ? substr($loggedInUser->name, 0, 1) : (session('user_name') ? substr(session('user_name'), 0, 1) : 'U');
                $userName = $loggedInUser ? $loggedInUser->name : (session('user_name') ?? 'Usuario');
                $userRole = $loggedInUser ? ($loggedInUser->rol ?? 'Admin') : 'ADMIN';
                $userEmail = $loggedInUser ? $loggedInUser->email : (session('user_email') ?? 'admin@zoofipets.com');
            @endphp

            <button class="profile-trigger" id="profileDropdownToggle" aria-expanded="false">
                <div class="user-avatar-small">
                    @if($loggedInUser && $loggedInUser->avatar && file_exists(public_path('images/avatars/'.$loggedInUser->avatar)))
                        <img src="{{ asset('images/avatars/'.$loggedInUser->avatar) }}" alt="Avatar" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                    @else
                        <span>{{ $initial }}</span>
                    @endif
                </div>
                <div class="user-meta-compact">
                    <span class="user-name">{{ $userName }}</span>
                    <span class="user-role-badge badge-role">{{ $userRole }}</span>
                </div>
                <i class="fas fa-chevron-down dropdown-arrow-small"></i>
            </button>

            <!-- Compact Profile Dropdown -->
            <div class="profile-dropdown compact" id="profileDropdown">
                <div class="pd-header-compact">
                    <div class="user-avatar-med">
                        @if($loggedInUser && $loggedInUser->avatar && file_exists(public_path('images/avatars/'.$loggedInUser->avatar)))
                            <img src="{{ asset('images/avatars/'.$loggedInUser->avatar) }}" alt="Avatar" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                        @else
                            <span>{{ $initial }}</span>
                        @endif
                    </div>
                    <div class="pd-user-info">
                        <strong>{{ $userName }}</strong>
                        <small>{{ $userEmail }}</small>
                    </div>
                </div>
                
                <div class="pd-grid-menu">
                    <!-- 1. Perfil -->
                    <a href="{{ route('perfil.index') }}" class="pd-grid-item" title="Ver Perfil">
                        <i class="fas fa-user-circle"></i>
                        <span>Perfil</span>
                    </a>
                    
                    <!-- 2. Reportes -->
                    <a href="{{ route('reportes.index') }}" class="pd-grid-item" title="Reportes">
                        <i class="fas fa-file-alt"></i>
                        <span>Reportes</span>
                    </a>

                    <!-- 3. Actividad -->
                    <a href="#" class="pd-grid-item" title="Actividad Reciente">
                        <i class="fas fa-history"></i>
                        <span>Actividad</span>
                    </a>

                    <!-- 4. Mensajes -->
                    <a href="#" class="pd-grid-item" title="Mensajes">
                        <i class="fas fa-envelope"></i>
                        <span>Msjs</span>
                    </a>

                    <!-- 5. Soporte -->
                    <a href="#" class="pd-grid-item" title="Soporte Técnico">
                       <i class="fas fa-headset"></i>
                        <span>Soporte</span>
                    </a>

                    <!-- 6. Ajustes -->
                    <a href="{{ route('configuraciones.index') }}" class="pd-grid-item" title="Configuración">
                        <i class="fas fa-cog"></i>
                        <span>Ajustes</span>
                    </a>
                </div>

                <div class="pd-footer-actions">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="w-100">
                        @csrf
                        <button type="submit" class="logout-btn">
                            <i class="fas fa-sign-out-alt"></i>
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header JS Loaded Here -->
<script src="{{ asset('js/layouts/header.js') }}"></script>