<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'ZoofiPets') }} - Cuidado Veterinario Experto</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/layouts/loading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
</head>
<body>

    <!-- Header Component -->
    @include('components.header')

    <!-- Background Animado -->
    <div class="welcome-background">
        <div class="bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>
        <div class="bg-grid"></div>
        
        <!-- Elementos Veterinarios Flotantes -->
        <div class="vet-elements">
            <div class="floating-items">
                <!-- Huellas -->
                <div class="paw-print paw-1"><div class="pad large"></div><div class="pad small s-1"></div><div class="pad small s-2"></div><div class="pad small s-3"></div></div>
                <div class="paw-print paw-2"><div class="pad large"></div><div class="pad small s-1"></div><div class="pad small s-2"></div><div class="pad small s-3"></div></div>
                <div class="paw-print paw-3"><div class="pad large"></div><div class="pad small s-1"></div><div class="pad small s-2"></div><div class="pad small s-3"></div></div>
                
                <!-- Huesos -->
                <div class="bone bone-1"></div>
                <div class="bone bone-2"></div>
                
                <!-- Cruces Médicas -->
                <div class="medical-cross cross-1"></div>
                <div class="medical-cross cross-2"></div>
                
                <!-- Partículas -->
                <div class="health-particle hp-1"></div>
                <div class="health-particle hp-2"></div>
                <div class="health-particle hp-3"></div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Cuidado experto para tus <br><span>Mejores Amigos</span></h1>
            <p class="hero-subtitle">
                En ZoofiPets combinamos tecnología avanzada con amor incondicional para brindar la mejor atención veterinaria. Tu mascota merece lo mejor.
            </p>
            <div class="cta-buttons">
                <a href="{{ route('login') }}" class="btn btn-primary">
                    <i class="fas fa-paw"></i> Iniciar Sesión
                </a>
                <a href="#servicios" class="btn btn-outline">
                    <i class="fas fa-stethoscope"></i> Nuestros Servicios
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="services-section">
        <div class="section-header">
            <h2 class="section-title">Nuestros Servicios</h2>
            <p class="section-subtitle">Soluciones integrales para la salud y felicidad de tu mascota</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-user-md"></i></div>
                <h3>Consultas Generales</h3>
                <p>Atención personalizada para el diagnóstico y tratamiento de enfermedades comunes. Tu mascota en las mejores manos.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-syringe"></i></div>
                <h3>Vacunación</h3>
                <p>Programas de vacunación completos para prevenir enfermedades y mantener a tu amigo protegido y saludable.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-heartbeat"></i></div>
                <h3>Cirugía Avanzada</h3>
                <p>Quirófanos equipados con tecnología de punta para procedimientos seguros y recuperación rápida.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-cut"></i></div>
                <h3>Estética y Spa</h3>
                <p>Baño, corte y cuidados estéticos para que tu mascota luzca y se sienta increíble.</p>
            </div>

            <div class="service-card">
                <div class="service-icon"><i class="fas fa-microscope"></i></div>
                <h3>Laboratorio Clínico</h3>
                <p>Análisis rápidos y precisos para diagnósticos certeros en el menor tiempo posible.</p>
            </div>

            <div class="service-card">
                <div class="service-icon"><i class="fas fa-ambulance"></i></div>
                <h3>Urgencias 24/7</h3>
                <p>Estamos disponibles en todo momento para atender cualquier emergencia que se presente.</p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-item">
                <span class="stat-number" data-target="5000">0+</span>
                <span class="stat-label">Mascotas Felices</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="15">0+</span>
                <span class="stat-label">Especialistas</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="10">0+</span>
                <span class="stat-label">Años de Experiencia</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="24">0/7</span>
                <span class="stat-label">Atención</span>
            </div>
        </div>
    </section>

    <!-- Footer Component -->
    @include('components.footer')

    <script>
        // Simple Counter Animation for Stats
        const stats = document.querySelectorAll('.stat-number');
        
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const targetValue = parseInt(target.getAttribute('data-target'));
                    if (targetValue > 0) { // Only animate numbers
                        animateValue(target, 0, targetValue, 2000);
                    }
                    observer.unobserve(target);
                }
            });
        }, observerOptions);

        stats.forEach(stat => observer.observe(stat));

        function animateValue(obj, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                obj.innerHTML = Math.floor(progress * (end - start) + start) + "+";
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }
    </script>
</body>
</html>
