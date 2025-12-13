<link rel="stylesheet" href="{{ asset('css/components/header.css') }}">

<header class="zoofi-header" id="main-header">
    <div class="header-container">
        <!-- Logo -->
        <a href="/" class="brand-logo">
            <div class="logo-icon">
                <!-- Icono abstracto moderno -->
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="brand-name">Zoofi<span class="highlight">Pets</span></span>
        </a>

        <!-- Navegación -->
        <nav class="nav-menu" id="nav-menu">
            <ul class="nav-list">
                <li class="nav-item"><a href="#" class="nav-link active">Inicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Servicios</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Especialistas</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Tienda</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
            </ul>
            
            <!-- Botón cerrar menú móvil -->
            <div class="nav-close" id="nav-close">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </div>
        </nav>

        <!-- Acciones -->
        <div class="header-actions">
            <button class="search-toggle" aria-label="Buscar">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
            
            <div class="auth-buttons">
                <a href="/login" class="btn-login">Iniciar Sesión</a>
                <a href="/register" class="btn-register">Registrarse</a>
            </div>
            
            <!-- Botón menú móvil -->
            <div class="nav-toggle" id="nav-toggle">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </div>
        </div>
    </div>
</header>

<script src="{{ asset('js/components/header.js') }}"></script>
