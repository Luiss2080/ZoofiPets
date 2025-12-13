<link rel="stylesheet" href="{{ asset('css/components/header.css') }}">

<header class="zoofi-header" id="main-header">
    <div class="header-container">
        <!-- 1. Logo (Izquierda) -->
        <a href="/" class="brand-logo">
            <img src="{{ asset('images/logs/LogoHeader.png') }}" alt="ZoofiPets Logo" class="logo-image">
            <div class="brand-text">
                <span class="brand-title">ZOOFIPETS</span>
                <span class="brand-subtitle">VETERINARY CLINIC</span>
            </div>
        </a>

        <!-- 2. Navegación Central (Cápsula) -->
        <nav class="nav-capsule">
            <ul class="nav-list">
                <li class="nav-item"><a href="#" class="nav-link active">Inicio</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Nosotros</a></li>
                
                <!-- Dropdown Servicios -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">
                        Servicios 
                        <svg class="chevron-icon" width="10" height="6" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 1L5 5L9 1"/></svg>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">
                            <span class="item-icon">🩺</span> Consultas
                        </a></li>
                        <li><a href="#" class="dropdown-item">
                            <span class="item-icon">💉</span> Vacunación
                        </a></li>
                        <li><a href="#" class="dropdown-item">
                            <span class="item-icon">✂️</span> Estética
                        </a></li>
                        <li><a href="#" class="dropdown-item">
                            <span class="item-icon">🏥</span> Urgencias 24h
                        </a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="#" class="nav-link">Especialistas</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
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

            <!-- Icono Carrito (Nuevo) -->
            <a href="#" class="icon-btn cart-btn" aria-label="Carrito">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                <span class="badge">2</span>
            </a>

            <!-- Botones Auth -->
            <div class="auth-buttons">
                <a href="/login" class="btn-login">Ingresar</a>
                <a href="/register" class="btn-register">
                    <span>Únete Ahora</span>
                    <div class="btn-shine"></div>
                </a>
            </div>

            <!-- Mobile Toggle (Hamburguesa) -->
            <div class="mobile-toggle" id="mobile-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </div>
</header>

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

<script src="{{ asset('js/components/header.js') }}"></script>
