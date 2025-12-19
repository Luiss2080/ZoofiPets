<aside class="dashboard-sidebar" id="systemSidebar">
    <!-- Header del Sidebar -->
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="logo-container" style="text-decoration: none;">
            <div class="logo-icon">
                <img src="{{ asset('images/LogoLogin.png') }}" alt="ZOOFIPETS" class="sidebar-logo">
            </div>
            <div class="logo-text">
                <h1 class="brand-name">ZOOFIPETS</h1>
                <span class="brand-subtitle">Clínica Veterinaria</span>
            </div>
        </a>
    </div>

    <!-- Contenedor de Navegación con Scroll -->
    <div class="sidebar-scroll-content">
        
        <!-- Sección: Recepción -->
        <div class="nav-section">
            <h3 class="section-title">RECEPCIÓN</h3>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('recepcionista.citas.index') }}" class="nav-link {{ request()->routeIs('recepcionista.citas.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-calendar-check"></i></span>
                        <span class="nav-text">Citas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('recepcionista.clientes.index') }}" class="nav-link {{ request()->routeIs('recepcionista.clientes.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-users"></i></span>
                        <span class="nav-text">Clientes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('recepcionista.pagos.index') }}" class="nav-link {{ request()->routeIs('recepcionista.pagos.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-cash-register"></i></span>
                        <span class="nav-text">Pagos</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Sección: Veterinaria -->
        <div class="nav-section">
            <h3 class="section-title">VETERINARIA</h3>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('veterinario.consultas.index') }}" class="nav-link {{ request()->routeIs('veterinario.consultas.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-stethoscope"></i></span>
                        <span class="nav-text">Consultas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('veterinario.mascotas.index') }}" class="nav-link {{ request()->routeIs('veterinario.mascotas.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-paw"></i></span>
                        <span class="nav-text">Pacientes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('veterinario.vacunas.index') }}" class="nav-link {{ request()->routeIs('veterinario.vacunas.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-syringe"></i></span>
                        <span class="nav-text">Vacunas</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Sección: Tienda -->
        <div class="nav-section">
            <h3 class="section-title">TIENDA</h3>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('vendedor.ventas.index') }}" class="nav-link {{ request()->routeIs('vendedor.ventas.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-shopping-cart"></i></span>
                        <span class="nav-text">Ventas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('vendedor.productos.index') }}" class="nav-link {{ request()->routeIs('vendedor.productos.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-box-open"></i></span>
                        <span class="nav-text">Productos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('vendedor.inventario.index') }}" class="nav-link {{ request()->routeIs('vendedor.inventario.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-dolly-flatbed"></i></span>
                        <span class="nav-text">Inventario</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Sección: Administración -->
        <div class="nav-section">
            <h3 class="section-title">ADMINISTRACIÓN</h3>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('admin.usuarios.index') }}" class="nav-link {{ request()->routeIs('admin.usuarios.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-user-shield"></i></span>
                        <span class="nav-text">Usuarios</span>
                    </a>
                </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}" class="nav-link {{ request()->routeIs('admin.roles.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-user-tag"></i></span>
                        <span class="nav-text">Roles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('configuraciones.index') }}" class="nav-link {{ request()->routeIs('configuraciones.*') ? 'active' : '' }}">
                        <span class="nav-icon"><i class="fas fa-cogs"></i></span>
                        <span class="nav-text">Configuración</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Footer del Sidebar -->
    <div class="sidebar-footer">
        <a href="/" target="_blank" class="visit-site-btn">
            <i class="fas fa-external-link-alt"></i>
            <span>Ver Sitio Web</span>
        </a>

        <div class="theme-toggle-card">
            <div class="theme-icon">
                <i class="fas fa-moon"></i>
            </div>
            <span class="theme-text">Modo Oscuro</span>
             <!-- Toggle Switch (Visual only, JS required for logic) -->
            <label class="switch">
                <input type="checkbox" id="themeSwitch" checked>
                <span class="slider round"></span>
            </label>
        </div>
    </div>
</aside>