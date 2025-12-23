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
                    <span>Notificación</span>
                    <a href="#" class="mark-read">Marcar leídas</a>
                </div>
                <!-- Mock Items -->
                <div class="notif-item unread">
                    <div class="notif-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="notif-content">
                        <p class="notif-title">Nueva Cita Solicitada</p>
                        <p class="notif-time">Hace 5 min</p>
                    </div>
                </div>
                <div class="notif-item">
                    <div class="notif-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
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
</header>

<style>
/* ============================================
   REFINED NOTIFICATIONS - DUAL MODE (Light & Dark)
   ============================================ */
.notification-dropdown {
    width: 400px !important;
    padding: 0 !important;
    max-height: 550px !important;
    overflow-y: auto !important;
    
    /* DEFAULT (Light Mode) */
    background: #ffffff !important;
    border: 1px solid rgba(72, 52, 212, 0.15) !important;
    border-radius: 24px !important;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1) !important;
    
    position: absolute !important;
    top: calc(100% + 20px) !important;
    right: -10px !important;
    z-index: 9999 !important;
    
    /* Display State */
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px) scale(0.95);
    transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
    display: block !important;
}

/* DARK MODE Override */
body.dark-mode .notification-dropdown {
    background: #050505 !important;
    border: 1px solid rgba(72, 52, 212, 0.3) !important;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.9) !important;
}

.notification-dropdown.show {
    opacity: 1 !important;
    visibility: visible !important;
    transform: translateY(0) scale(1) !important;
}

/* Header Section */
.dropdown-header {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    padding: 1.2rem 1.5rem !important;
    background: #ffffff !important; /* Light Default */
    border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important;
    width: 100% !important;
    box-sizing: border-box !important;
}

body.dark-mode .dropdown-header {
    background: #0a0a0a !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
}

.dropdown-header span {
    font-size: 0.9rem !important;
    font-weight: 900 !important;
    color: #1e293b !important; /* Slate 800 - Visible Dark */
    text-transform: uppercase !important;
    letter-spacing: 1px !important;
}

body.dark-mode .dropdown-header span {
    color: #ffffff !important;
}

/* "Marcar leídas" Button Style */
.mark-read {
    font-size: 0.7rem !important;
    color: var(--primary-color) !important;
    background: rgba(72, 52, 212, 0.05) !important;
    padding: 6px 12px !important;
    border-radius: 8px !important;
    font-weight: 700 !important;
    text-decoration: none !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    transition: all 0.2s ease !important;
    border: 1px solid rgba(72, 52, 212, 0.1) !important;
}

body.dark-mode .mark-read {
    color: #a29bfe !important;
    background: rgba(72, 52, 212, 0.15) !important;
    border-color: rgba(72, 52, 212, 0.2) !important;
}

.mark-read:hover {
    background: var(--primary-color) !important;
    color: #ffffff !important;
}

/* Notification Items */
.notif-item {
    display: flex !important;
    gap: 1.2rem !important;
    padding: 1.2rem 1.5rem !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important;
    align-items: center !important;
    width: 100% !important;
    box-sizing: border-box !important;
    background: transparent !important;
    position: relative !important;
    transition: background 0.2s ease !important;
}

body.dark-mode .notif-item {
    border-bottom: 1px solid rgba(255, 255, 255, 0.03) !important;
}

.notif-item:last-child {
    border-bottom: none !important;
}

.notif-item:hover {
    background: rgba(72, 52, 212, 0.02) !important;
}
body.dark-mode .notif-item:hover {
    background: rgba(255, 255, 255, 0.03) !important;
}

/* Unread Styling */
.notif-item.unread {
    background: rgba(72, 52, 212, 0.03) !important;
}
body.dark-mode .notif-item.unread {
    background: #080808 !important;
}

.notif-item.unread::before {
    content: "" !important;
    position: absolute !important;
    left: 0 !important;
    top: 0 !important;
    bottom: 0 !important;
    width: 4px !important;
    background: var(--primary-color) !important;
}

/* Icons - Solid Purple Squares */
.notif-icon {
    width: 48px !important;
    height: 48px !important;
    border-radius: 14px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
    font-size: 1.2rem !important;
    
    /* Solid Purple Glow */
    background: var(--primary-color) !important; 
    color: #ffffff !important;
    box-shadow: 0 6px 15px rgba(72, 52, 212, 0.25) !important;
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
}

/* Remove colored backgrounds from old CSS */
.notif-icon.blue, .notif-icon.green, .notif-icon.purple, .notif-icon.orange {
    background: var(--primary-color) !important; 
    color: #ffffff !important;
}

/* Text Content */
.notif-content {
    flex: 1 !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 0.3rem !important;
}

.notif-title {
    font-size: 0.95rem !important;
    font-weight: 700 !important;
    color: #334155 !important; /* Slate 700 - Visible Dark */
    margin: 0 !important;
    line-height: 1.3 !important;
}

body.dark-mode .notif-title {
    color: #ffffff !important;
}

.notif-time {
    font-size: 0.75rem !important;
    color: var(--primary-color) !important; /* Purple */
    font-weight: 600 !important;
    margin: 0 !important;
}

body.dark-mode .notif-time {
    color: #a29bfe !important; /* Lighter Purple */
}

/* Dot hidden in new design (using left bar instead) or kept inside? */
/* Screenshot had icons, let's keep icons clean */
.notif-icon .dot { display: none !important; }

</style>

<!-- Header JS Loaded Here -->
<script src="{{ asset('js/layouts/header.js') }}"></script>