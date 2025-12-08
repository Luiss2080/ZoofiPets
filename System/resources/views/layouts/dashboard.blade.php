<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard - ZoofiPets')</title>
    <link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}">
    @stack('styles')
</head>
<body class="dashboard-body">
    @include('layouts.loading')
    
    <div class="dashboard-wrapper">
        @include('layouts.header')
        
        <div class="dashboard-main">
            @include('layouts.sidebar')
            
            <div class="dashboard-content">
                <main class="content-main">
                    @yield('content')
                </main>
                
                @include('layouts.footer')
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/components/header.js') }}"></script>
    <script src="{{ asset('js/components/sidebar.js') }}"></script>
    <script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
    @stack('scripts')
</body>
</html>