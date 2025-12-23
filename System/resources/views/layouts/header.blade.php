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
                <div class="qa-header">CREAR NUEVO</div>
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
                <!-- New Items -->
                <div class="notif-item">
                    <div class="notif-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="notif-content">
                        <p class="notif-title">Pago confirmado</p>
                        <p class="notif-time">Hace 2 horas</p>
                    </div>
                </div>
                <div class="notif-item">
                    <div class="notif-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="notif-content">
                        <p class="notif-title">Actualización disponible</p>
                        <p class="notif-time">Hace 3 horas</p>
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
<style>
@keyframes dropdownSlideIn {
    0% {
        opacity: 0;
        transform: translateY(10px) scale(0.95);
    }
    100% {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

/* ============================================
   REFINED NOTIFICATIONS - COMPACT & ANIMATED
   ============================================ */
.notification-dropdown {
    width: 320px !important; /* Compact Width */
    padding: 0 !important;
    max-height: 450px !important;
    overflow-y: auto !important;
    
    /* DEFAULT (Light Mode) */
    background: #ffffff !important;
    border: 1px solid rgba(72, 52, 212, 0.15) !important;
    border-radius: 20px !important;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1) !important;
    
    position: absolute !important;
    top: calc(100% + 15px) !important;
    right: -10px !important;
    z-index: 9999 !important;
    
    /* Display State */
    display: none; /* Default hidden */
}

/* DARK MODE Override */
body.dark-mode .notification-dropdown {
    background: #050505 !important;
    border: 1px solid rgba(72, 52, 212, 0.3) !important;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.9) !important;
}

.notification-dropdown.show {
    display: block !important;
    animation: dropdownSlideIn 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) forwards !important; /* Spring Animation */
}

/* Header Section */
.dropdown-header {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    padding: 1rem 1.25rem !important; /* Compact Padding */
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
    font-size: 0.85rem !important; /* Finer text */
    font-weight: 900 !important;
    color: #1e293b !important; /* Slate 800 - Visible Dark */
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
}

body.dark-mode .dropdown-header span {
    color: #ffffff !important;
}

/* "Marcar leídas" Button Style */
.mark-read {
    font-size: 0.65rem !important;
    color: var(--primary-color) !important;
    background: rgba(72, 52, 212, 0.05) !important;
    padding: 4px 10px !important;
    border-radius: 6px !important;
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
    gap: 0.8rem !important; /* Tighter gap */
    padding: 0.8rem 1.2rem !important; /* Compact padding */
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
    width: 3px !important; /* Thinner accent */
    background: var(--primary-color) !important;
}

/* Icons - Solid Purple Squares */
.notif-icon {
    width: 36px !important; /* Smaller Icon Box */
    height: 36px !important;
    border-radius: 10px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
    font-size: 0.9rem !important; /* Smaller Icon Font */
    
    /* Solid Purple Glow */
    background: var(--primary-color) !important; 
    color: #ffffff !important;
    box-shadow: 0 4px 10px rgba(72, 52, 212, 0.2) !important;
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
    gap: 0.2rem !important;
}

.notif-title {
    font-size: 0.85rem !important; /* Slightly smaller */
    font-weight: 700 !important;
    color: #334155 !important; /* Slate 700 - Visible Dark */
    margin: 0 !important;
    line-height: 1.2 !important;
}

body.dark-mode .notif-title {
    color: #ffffff !important;
}

.notif-time {
    font-size: 0.7rem !important;
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

/* ============================================
   QUICK ACTIONS - COMPACT & ANIMATED
   ============================================ */
.quick-actions-dropdown {
    width: 300px !important; /* Compact Width */
    padding: 0 !important;
    border: 1px solid rgba(72, 52, 212, 0.15) !important;
    background: #ffffff !important;
    border-radius: 20px !important;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15) !important;
    
    position: absolute !important;
    top: calc(100% + 15px) !important;
    right: 0 !important;
    z-index: 9999 !important;
    
    display: none; /* Default hidden */
}

.quick-actions-dropdown.show {
    display: block !important;
    animation: dropdownSlideIn 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) forwards !important;
}

body.dark-mode .quick-actions-dropdown {
    background: #050505 !important;
    border-color: rgba(72, 52, 212, 0.3) !important;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.9) !important;
}

/* QA Header */
.qa-header {
    padding: 1rem 1.25rem !important; /* Compact Padding */
    background: linear-gradient(to right, rgba(72, 52, 212, 0.05), transparent) !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important;
    font-size: 0.85rem !important;
    font-weight: 900 !important;
    color: #1e293b !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
}

body.dark-mode .qa-header {
    background: #0a0a0a !important;
    border-bottom-color: rgba(255, 255, 255, 0.08) !important;
    color: #ffffff !important;
}

/* QA Grid */
.qa-grid {
    display: grid !important;
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 0.8rem !important;
    padding: 1.2rem !important;
}

/* QA Item */
.qa-item {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 1rem 0.5rem !important;
    background: #f8fafc !important;
    border: 1px solid rgba(0,0,0,0.05) !important;
    border-radius: 12px !important; /* Compact Radius */
    text-decoration: none !important;
    transition: all 0.2s ease !important;
}

body.dark-mode .qa-item {
    background: #0a0a0a !important;
    border-color: rgba(255, 255, 255, 0.05) !important;
}

.qa-item:hover {
    background: #ffffff !important;
    border-color: var(--primary-color) !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 10px 20px rgba(72, 52, 212, 0.1) !important;
}

body.dark-mode .qa-item:hover {
    background: rgba(72, 52, 212, 0.15) !important;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5) !important;
}

/* QA Icon */
.qa-icon {
    width: 40px !important; /* Smaller */
    height: 40px !important;
    border-radius: 10px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 1.25rem !important;
    margin-bottom: 0.5rem !important;
    
    background: var(--primary-color) !important;
    color: white !important;
    box-shadow: 0 5px 15px rgba(72, 52, 212, 0.3) !important;
}

/* Ignore individual colors, force uniform purple */
.qa-icon.blue, .qa-icon.green, .qa-icon.orange, .qa-icon.purple {
    background: var(--primary-color) !important;
    color: white !important;
}

/* QA Text */
.qa-item span {
    font-size: 0.75rem !important;
    font-weight: 700 !important;
    color: #334155 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
}

body.dark-mode .qa-item span {
    color: #ffffff !important;
}
</style>

<!-- Header JS Loaded Here -->
<script src="{{ asset('js/layouts/header.js') }}"></script>