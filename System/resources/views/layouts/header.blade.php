<header class="dashboard-header">
    <div class="header-left">
        <button class="sidebar-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
        
        <div class="header-brand">
            <img src="{{ asset('images/LogoZoofiPets.png') }}" alt="ZoofiPets">
            <span>ZoofiPets</span>
        </div>
    </div>
    
    <div class="header-center">
        <div class="search-box">
            <input type="text" placeholder="Buscar clientes, mascotas, citas...">
            <button type="submit">
                <i class="search-icon"></i>
            </button>
        </div>
    </div>
    
    <div class="header-right">
        <div class="notifications">
            <button class="notification-btn">
                <i class="bell-icon"></i>
                <span class="notification-count">3</span>
            </button>
        </div>
        
        <div class="user-menu">
            <div class="user-avatar">
                <img src="{{ auth()->user()->avatar ?? asset('images/default-avatar.png') }}" alt="Usuario">
            </div>
            <div class="user-info">
                <span class="user-name">{{ auth()->user()->name }}</span>
                <span class="user-role">{{ auth()->user()->role->name ?? 'Usuario' }}</span>
            </div>
            <div class="user-dropdown">
                <a href="{{ route('perfil.index') }}">Mi Perfil</a>
                <a href="{{ route('configuraciones.index') }}">Configuración</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</header>