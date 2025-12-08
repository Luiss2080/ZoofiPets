<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ZoofiPets - Sistema Veterinario')</title>
    <link rel="stylesheet" href="{{ asset('css/auth/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/loading.css') }}">
</head>
<body class="auth-body">
    <div id="loading" class="loading-overlay">
        <div class="loading-spinner"></div>
    </div>
    
    <div class="auth-wrapper">
        <div class="auth-brand">
            <img src="{{ asset('images/LogoZoofiPets.png') }}" alt="ZoofiPets">
            <h1>ZoofiPets</h1>
            <p>Sistema de Gestión Veterinaria</p>
        </div>
        
        <div class="auth-content">
            @yield('content')
        </div>
    </div>
    
    <script src="{{ asset('js/components/loading.js') }}"></script>
    <script src="{{ asset('js/auth/auth.js') }}"></script>
</body>
</html>