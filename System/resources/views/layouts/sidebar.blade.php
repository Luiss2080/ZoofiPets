<aside class="dashboard-sidebar">
    <nav class="sidebar-nav">
        <div class="nav-section">
            <h3>Principal</h3>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon dashboard-icon"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="nav-section">
            <h3>Gestión de Pacientes</h3>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('clientes.index') }}" class="nav-link {{ request()->routeIs('clientes.*') ? 'active' : '' }}">
                        <i class="nav-icon clients-icon"></i>
                        <span>Clientes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('mascotas.index') }}" class="nav-link {{ request()->routeIs('mascotas.*') ? 'active' : '' }}">
                        <i class="nav-icon pets-icon"></i>
                        <span>Mascotas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('historial-medico.index') }}" class="nav-link {{ request()->routeIs('historial-medico.*') ? 'active' : '' }}">
                        <i class="nav-icon medical-icon"></i>
                        <span>Historial Médico</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="nav-section">
            <h3>Citas y Servicios</h3>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('citas.index') }}" class="nav-link {{ request()->routeIs('citas.*') ? 'active' : '' }}">
                        <i class="nav-icon appointments-icon"></i>
                        <span>Citas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('servicios.index') }}" class="nav-link {{ request()->routeIs('servicios.*') ? 'active' : '' }}">
                        <i class="nav-icon services-icon"></i>
                        <span>Servicios Clínicos</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="nav-section">
            <h3>Inventario</h3>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('productos.index') }}" class="nav-link {{ request()->routeIs('productos.*') ? 'active' : '' }}">
                        <i class="nav-icon products-icon"></i>
                        <span>Productos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('inventario.index') }}" class="nav-link {{ request()->routeIs('inventario.*') ? 'active' : '' }}">
                        <i class="nav-icon inventory-icon"></i>
                        <span>Inventario</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="nav-section">
            <h3>Personal</h3>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('veterinarios.index') }}" class="nav-link {{ request()->routeIs('veterinarios.*') ? 'active' : '' }}">
                        <i class="nav-icon vets-icon"></i>
                        <span>Veterinarios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('usuarios.index') }}" class="nav-link {{ request()->routeIs('usuarios.*') ? 'active' : '' }}">
                        <i class="nav-icon users-icon"></i>
                        <span>Usuarios</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="nav-section">
            <h3>Reportes</h3>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('reportes.index') }}" class="nav-link {{ request()->routeIs('reportes.*') ? 'active' : '' }}">
                        <i class="nav-icon reports-icon"></i>
                        <span>Reportes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pagos.index') }}" class="nav-link {{ request()->routeIs('pagos.*') ? 'active' : '' }}">
                        <i class="nav-icon payments-icon"></i>
                        <span>Pagos</span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="nav-section">
            <h3>Configuración</h3>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('configuraciones.index') }}" class="nav-link {{ request()->routeIs('configuraciones.*') ? 'active' : '' }}">
                        <i class="nav-icon settings-icon"></i>
                        <span>Configuraciones</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('permisos.index') }}" class="nav-link {{ request()->routeIs('permisos.*') ? 'active' : '' }}">
                        <i class="nav-icon permissions-icon"></i>
                        <span>Permisos</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>