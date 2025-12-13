<link rel="stylesheet" href="{{ asset('css/components/header.css') }}">

<header class="zoofi-header" id="main-header">
    <div class="header-container">
        <!-- 1. Logo (Izquierda) -->
        <a href="/" class="brand-logo">
            <div class="logo-icon-container">
                <svg class="logo-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="brand-text">
                <span class="brand-title">ZOOFIPETS</span>
                <span class="brand-subtitle">VETERINARY CLINIC</span>
            </div>
        </a>

        <!-- 2. Navegación Central (Cápsula) -->
        <nav class="nav-capsule">
            <ul class="nav-list">
                <li class="nav-item"><a href="#" class="nav-link active">Inicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Servicios</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Especialistas</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Tienda</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
            </ul>
        </nav>

        <!-- 3. Acciones (Derecha: Buscador + Auth) -->
        <div class="header-right">
            <!-- Buscador Expandido -->
            <div class="search-bar">
                <input type="text" placeholder="¿Qué buscas?" class="search-input">
                <button class="search-btn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </button>
            </div>

            <!-- Botones Auth -->
            <div class="auth-buttons">
                <a href="/login" class="btn-login">Iniciar Sesión</a>
                <a href="/register" class="btn-register">Únete Ahora</a>
            </div>

            <!-- Toggle Móvil -->
            <div class="nav-toggle" id="nav-toggle">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </div>
        </div>
    </div>

    <!-- Menú Móvil Overlay (Separado para mejor control) -->
    <div class="mobile-menu-overlay" id="mobile-menu">
        <div class="mobile-menu-content">
            <div class="mobile-header">
                <span class="brand-title">ZOOFIPETS</span>
                <div class="nav-close" id="nav-close">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </div>
            </div>
            <ul class="mobile-nav-list">
                <li><a href="#" class="mobile-link active">Inicio</a></li>
                <li><a href="#" class="mobile-link">Servicios</a></li>
                <li><a href="#" class="mobile-link">Especialistas</a></li>
                <li><a href="#" class="mobile-link">Tienda</a></li>
                <li><a href="#" class="mobile-link">Contacto</a></li>
            </ul>
            <div class="mobile-auth">
                <a href="/login" class="btn-login full-width">Iniciar Sesión</a>
                <a href="/register" class="btn-register full-width">Únete Ahora</a>
            </div>
        </div>
    </div>
</header>

<script src="{{ asset('js/components/header.js') }}"></script>
