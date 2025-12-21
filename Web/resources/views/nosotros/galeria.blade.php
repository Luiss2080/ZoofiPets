@extends('layouts.app')

@section('title', 'Galería ZoofiPets')

@push('styles')
    <!-- Reusing System Styles -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- INDEPENDENT CSS FOR THIS VIEW -->
    <link rel="stylesheet" href="{{ asset('css/nosotros/galeria.css') }}">
    <!-- GLightbox CSS (Gallery Functionality) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="hero-carousel-section gallery-hero full-width-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1450778869180-41d0601e046e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <span class="sub-tag" style="margin-bottom: 20px; display: block;">Momentos que Inspiran</span>
                            <h1 class="animate-title">Galería <br>ZoofiPets</h1>
                            <p class="animate-subtitle">Descubre nuestra historia a través de imágenes: instalaciones, mascotas felices y eventos que transforman vidas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-content-container">

        <!-- Section 1: Instalaciones -->
        <section class="gallery-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Nuestro Hogar</span>
                <h2>Instalaciones Modernas</h2>
                <div class="header-line center"></div>
                <p class="section-description">Espacios diseñados para el bienestar y la recuperación de tus mascotas.</p>
            </div>

            <div class="gallery-grid">
                <!-- Image 1 -->
                <a href="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?w=600" alt="Recepción Principal">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Recepción Principal</h3>
                            <p>Espacio acogedor para nuestros clientes</p>
                        </div>
                    </div>
                </a>
                <!-- Image 2 -->
                <a href="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=600" alt="Quirófano">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Quirófano Estéril</h3>
                            <p>Tecnología de punta para cirugías</p>
                        </div>
                    </div>
                </a>
                <!-- Image 3 -->
                <a href="https://images.unsplash.com/photo-1581594549595-35f6edc7b762?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1581594549595-35f6edc7b762?w=600" alt="Sala de Rayos X">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Sala de Rayos X</h3>
                            <p>Diagnóstico por imagen digital</p>
                        </div>
                    </div>
                </a>
                <!-- Image 4 -->
                <a href="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600" alt="Laboratorio">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Laboratorio Clínico</h3>
                            <p>Análisis rápidos y precisos</p>
                        </div>
                    </div>
                </a>
                <!-- Image 5 -->
                <a href="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=600" alt="Hospitalización">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Área de Hospitalización</h3>
                            <p>Cuidados intensivos 24/7</p>
                        </div>
                    </div>
                </a>
                <!-- Image 6 -->
                <a href="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=600" alt="Área de Consultas">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Consultorios Médicos</h3>
                            <p>Atención personalizada</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Section 2: Mascotas Atendidas -->
        <section class="gallery-section animate-fade-up-delay">
            <div class="section-header text-center">
                <span class="sub-tag">Historias de Éxito</span>
                <h2>Mascotas Felices</h2>
                <div class="header-line center"></div>
                <p class="section-description">Cada mascota tiene una historia única de recuperación y amor.</p>
            </div>

            <div class="gallery-grid">
                <!-- Image 1 -->
                <a href="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=600" alt="Perro Golden Retriever">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Max - Golden Retriever</h3>
                            <p>Recuperación post-quirúrgica exitosa</p>
                        </div>
                    </div>
                </a>
                <!-- Image 2 -->
                <a href="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=600" alt="Gato Naranja">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Luna - Gato Persa</h3>
                            <p>Tratamiento dermatológico</p>
                        </div>
                    </div>
                </a>
                <!-- Image 3 -->
                <a href="https://images.unsplash.com/photo-1587559070757-f72a388eef2a?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1587559070757-f72a388eef2a?w=600" alt="Perro Husky">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Thor - Husky Siberiano</h3>
                            <p>Chequeo anual completo</p>
                        </div>
                    </div>
                </a>
                <!-- Image 4 -->
                <a href="https://images.unsplash.com/photo-1574158622682-e40e69881006?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1574158622682-e40e69881006?w=600" alt="Gato con veterinario">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Michi - Gato Doméstico</h3>
                            <p>Vacunación anual</p>
                        </div>
                    </div>
                </a>
                <!-- Image 5 -->
                <a href="https://images.unsplash.com/photo-1601758125946-6ec2ef64daf8?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1601758125946-6ec2ef64daf8?w=600" alt="Perro Labrador">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Rocky - Labrador</h3>
                            <p>Rehabilitación física</p>
                        </div>
                    </div>
                </a>
                <!-- Image 6 -->
                <a href="https://images.unsplash.com/photo-1537151608828-ea2b11777ee8?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1537151608828-ea2b11777ee8?w=600" alt="Cachorro Beagle">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Toby - Beagle</h3>
                            <p>Primera consulta veterinaria</p>
                        </div>
                    </div>
                </a>
                <!-- Image 7 -->
                <a href="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?w=600" alt="Gato Bengalí">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Simba - Bengalí</h3>
                            <p>Control post-esterilización</p>
                        </div>
                    </div>
                </a>
                <!-- Image 8 -->
                <a href="https://images.unsplash.com/photo-1558788353-f76d92427f16?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1558788353-f76d92427f16?w=600" alt="Perro Pastor Alemán">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Zeus - Pastor Alemán</h3>
                            <p>Sesión de grooming profesional</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Section 3: Eventos de Ayuda Social -->
        <section class="gallery-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Compromiso Social</span>
                <h2>Eventos & Ayuda Comunitaria</h2>
                <div class="header-line center"></div>
                <p class="section-description">Trabajamos por el bienestar animal en nuestra comunidad.</p>
            </div>

            <div class="gallery-grid">
                <!-- Image 1 -->
                <a href="https://images.unsplash.com/photo-1444212477490-ca407925329e?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1444212477490-ca407925329e?w=600" alt="Campaña de Vacunación">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Campaña de Vacunación</h3>
                            <p>Vacunas gratuitas en comunidad</p>
                        </div>
                    </div>
                </a>
                <!-- Image 2 -->
                <a href="https://images.unsplash.com/photo-1504595403659-9088ce801e29?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1504595403659-9088ce801e29?w=600" alt="Adopción Responsable">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Feria de Adopción</h3>
                            <p>Encuentro con familias amorosas</p>
                        </div>
                    </div>
                </a>
                <!-- Image 3 -->
                <a href="https://images.unsplash.com/photo-1522276498395-f4f68f7f8454?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1522276498395-f4f68f7f8454?w=600" alt="Charla Educativa">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Charlas Educativas</h3>
                            <p>Cuidado responsable de mascotas</p>
                        </div>
                    </div>
                </a>
                <!-- Image 4 -->
                <a href="https://images.unsplash.com/photo-1425082661705-1834bfd09dca?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1425082661705-1834bfd09dca?w=600" alt="Rescate Animal">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Jornada de Rescate</h3>
                            <p>Salvando vidas en la calle</p>
                        </div>
                    </div>
                </a>
                <!-- Image 5 -->
                <a href="https://images.unsplash.com/photo-1529472119196-cb724127a98e?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1529472119196-cb724127a98e?w=600" alt="Esterilización Masiva">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Campaña de Esterilización</h3>
                            <p>Control poblacional responsable</p>
                        </div>
                    </div>
                </a>
                <!-- Image 6 -->
                <a href="https://images.unsplash.com/photo-1548681528-6a5c45b66b42?w=1200" class="glightbox gallery-item">
                    <img src="https://images.unsplash.com/photo-1548681528-6a5c45b66b42?w=600" alt="Donación de Alimentos">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Donación de Alimentos</h3>
                            <p>Apoyo a refugios locales</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- CTA Banner -->
        <section class="cta-banner animate-fade-up">
            <div class="cta-content">
                <span class="sub-tag" style="color: #fff; opacity: 0.8;">Únete a Nuestra Familia</span>
                <h2>¿Quieres Ser Parte de <br>Nuestra Historia?</h2>
                <p style="margin-bottom: 30px; font-size: 1.1rem; opacity: 0.9;">
                    Agenda una cita hoy y descubre por qué miles de familias confían en ZoofiPets para el cuidado de sus mascotas.
                </p>
                <a href="{{ route('citas.solicitud.index') }}" class="btn btn-white-card" style="color: #0984e3;">Agendar Cita <i class="fas fa-calendar-check"></i></a>
            </div>
            <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Mascota Feliz" class="cta-image">
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
