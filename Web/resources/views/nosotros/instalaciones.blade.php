@extends('layouts.app')

@section('title', 'Nuestras Instalaciones')

@push('styles')
    <!-- Reusing System Styles -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- INDEPENDENT CSS FOR THIS VIEW -->
    <link rel="stylesheet" href="{{ asset('css/nosotros/instalaciones.css') }}">
    <!-- GLightbox CSS (Kept for Gallery Functionality) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
@endpush

@section('content')
    <!-- Hero Section (Strict Home Style) -->
    <section class="hero-carousel-section facilities-hero full-width-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <span class="sub-tag" style="margin-bottom: 20px; display: block;">Espacios que Sanan</span>
                            <h1 class="animate-title">Infraestructura <br>de Clase Mundial</h1>
                            <p class="animate-subtitle">Diseñamos cada metro cuadrado pensando en la seguridad, confort y recuperación de tus mascotas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-content-container">
        
        <!-- Clean Features Grid -->
        <section class="categories-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Excelencia Hospitalaria</span>
                <h2>Áreas Médicas</h2>
                <div class="header-line center"></div>
            </div>

            <div class="facilities-grid-clean">
                <!-- Feature 1 -->
                <div class="facility-card-minimal">
                    <i class="fas fa-procedures facility-icon"></i>
                    <h3>Quirófanos Estériles</h3>
                    <p>Dos salas de cirugía equipadas con flujo laminar, anestesia inhalatoria y monitoreo multiparamétrico.</p>
                </div>
                <!-- Feature 2 -->
                <div class="facility-card-minimal">
                    <i class="fas fa-microscope facility-icon"></i>
                    <h3>Laboratorio In-House</h3>
                    <p>Resultados en minutos. Hematología, bioquímica y citología procesadas al momento para diagnósticos rápidos.</p>
                </div>
                <!-- Feature 3 -->
                <div class="facility-card-minimal">
                    <i class="fas fa-bed facility-icon"></i>
                    <h3>Hospitalización UCI</h3>
                    <p>Jaulas individuales climatizadas con bomba de oxígeno y monitoreo 24/7 por personal veterinario.</p>
                </div>
                <!-- Feature 4 -->
                <div class="facility-card-minimal">
                    <i class="fas fa-cat facility-icon"></i>
                    <h3>Zona Cat-Friendly</h3>
                    <p>Sala de espera y consulta exclusiva para gatos, aislada de ruidos y olores caninos.</p>
                </div>
                <!-- Feature 5 -->
                <div class="facility-card-minimal">
                    <i class="fas fa-x-ray facility-icon"></i>
                    <h3>Diagnóstico por Imagen</h3>
                    <p>Rayos X digital y Ecografía Doppler color para una visión precisa del interior de tu mascota.</p>
                </div>
                <!-- Feature 6 -->
                <div class="facility-card-minimal">
                    <i class="fas fa-cut facility-icon"></i>
                    <h3>Spa & Grooming</h3>
                    <p>Estética profesional con productos dermatológicos hipoalergénicos de alta gama.</p>
                </div>
            </div>
        </section>

        <!-- Gallery / Visual Tour (Horizontal Scroll like Home Carousel) -->
        <section class="gallery-section-wide animate-fade-up-delay">
            <div class="section-header-compact" style="margin: 0 5% 30px;">
                <div class="title-group">
                    <h2>Recorrido Visual</h2>
                    <p style="color: rgba(255,255,255,0.6);">Explora nuestras modernas instalaciones.</p>
                </div>
            </div>
            
            <div class="gallery-track-container">
                <!-- Image 1 -->
                <a href="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?w=1200" class="glightbox gallery-card">
                    <img src="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?w=600" alt="Recepción">
                    <div class="gallery-overlay-hover">
                        <div class="gallery-title">Recepción Principal</div>
                    </div>
                </a>
                <!-- Image 2 -->
                <a href="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=1200" class="glightbox gallery-card">
                    <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=600" alt="Quirófano">
                    <div class="gallery-overlay-hover">
                        <div class="gallery-title">Quirófano 1</div>
                    </div>
                </a>
                <!-- Image 3 -->
                <a href="https://images.unsplash.com/photo-1581594549595-35f6edc7b762?w=1200" class="glightbox gallery-card">
                    <img src="https://images.unsplash.com/photo-1581594549595-35f6edc7b762?w=600" alt="Rayos X">
                    <div class="gallery-overlay-hover">
                        <div class="gallery-title">Sala Rayos X</div>
                    </div>
                </a>
                <!-- Image 4 -->
                <a href="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=1200" class="glightbox gallery-card">
                    <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600" alt="Laboratorio">
                    <div class="gallery-overlay-hover">
                        <div class="gallery-title">Laboratorio</div>
                    </div>
                </a>
                 <!-- Image 5 -->
                 <a href="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=1200" class="glightbox gallery-card">
                    <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=600" alt="Hospitalización">
                    <div class="gallery-overlay-hover">
                        <div class="gallery-title">Hospitalización</div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Tech Promo (Wide Banner - Home Style) -->
        <section class="tech-promo animate-fade-up">
            <div class="tech-left">
                <span class="sub-tag" style="color: #fff; opacity: 0.8;">Innovación</span>
                <h2>Tecnología que <br>Salva Vidas</h2>
                <p style="margin-bottom: 30px; font-size: 1.1rem; opacity: 0.9;">
                    Contamos con el equipamiento más avanzado de la región para garantizar diagnósticos precisos y tratamientos efectivos.
                </p>
                <a href="#" class="btn btn-white-card" style="color: #0984e3;">Ver Equipamiento <i class="fas fa-microscope"></i></a>
            </div>
            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Tech" class="tech-right-img">
        </section>

    </div>

@endsection

@push('scripts')
<script src="{{ asset('js/pages/welcome.js') }}"></script>
<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script>
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
</script>
@endpush
