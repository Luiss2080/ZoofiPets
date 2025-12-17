@extends('layouts.app')

@section('title', 'Nuestras Instalaciones')

@push('styles')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<!-- AOS - Animate On Scroll -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- GLightbox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
<style>
    .facilities-hero {
        padding: 120px 0 60px;
        text-align: center;
        position: relative;
        z-index: 10;
    }
    
    .facilities-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 3.5rem;
        font-weight: 900;
        color: #fff;
        margin-bottom: 25px;
        background: linear-gradient(135deg, #fff 0%, #4ade80 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: fadeInDown 0.8s ease;
    }

    .facilities-subtitle {
        color: rgba(255,255,255,0.85);
        max-width: 750px;
        margin: 0 auto 50px;
        font-size: 1.2rem;
        line-height: 1.7;
        animation: fadeInUp 0.8s ease 0.2s both;
    }

    /* Tour Virtual */
    .virtual-tour {
        max-width: 1400px;
        margin: 0 auto 80px;
        padding: 0 20px;
        position: relative;
        z-index: 10;
    }

    .tour-card {
        background: linear-gradient(135deg, rgba(74, 222, 128, 0.1) 0%, rgba(34, 197, 94, 0.05) 100%);
        border: 2px solid rgba(74, 222, 128, 0.3);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        padding: 50px;
        text-align: center;
        animation: fadeIn 1s ease;
    }

    .tour-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 20px;
    }

    .tour-text {
        color: rgba(255,255,255,0.8);
        font-size: 1.1rem;
        margin-bottom: 35px;
        line-height: 1.6;
    }

    .btn-tour {
        background: linear-gradient(135deg, #4ade80 0%, #22c55e 100%);
        color: #0f172a;
        padding: 18px 45px;
        border-radius: 50px;
        font-weight: 800;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        font-size: 1.05rem;
        box-shadow: 0 6px 25px rgba(74, 222, 128, 0.4);
        transition: all 0.4s ease;
        font-family: 'Montserrat', sans-serif;
    }

    .btn-tour:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 10px 35px rgba(74, 222, 128, 0.6);
    }

    /* Galería Interactiva */
    .gallery-section {
        max-width: 1400px;
        margin: 80px auto;
        padding: 0 20px;
        position: relative;
        z-index: 10;
    }

    .section-title {
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        font-size: 2.8rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 20px;
    }

    .section-subtitle {
        text-align: center;
        font-family: 'Inter', sans-serif;
        color: rgba(255,255,255,0.7);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto 60px;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 25px;
        padding: 40px 0;
    }

    .gallery-item {
        position: relative;
        height: 300px;
        border-radius: 20px;
        overflow: hidden;
        cursor: pointer;
        border: 2px solid rgba(255,255,255,0.1);
        background: linear-gradient(135deg, rgba(30, 27, 75, 0.8) 0%, rgba(45, 42, 93, 0.8) 100%);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .gallery-item.large {
        grid-column: span 2;
        height: 400px;
    }

    .gallery-item:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(74, 222, 128, 0.3);
        border-color: #4ade80;
    }

    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .gallery-item:hover .gallery-img {
        transform: scale(1.15) rotate(2deg);
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.7) 50%, transparent 100%);
        padding: 30px 25px;
        transform: translateY(70%);
        transition: transform 0.4s ease;
    }

    .gallery-item:hover .gallery-overlay {
        transform: translateY(0);
    }

    .item-title {
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        font-size: 1.4rem;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .item-desc {
        color: #4ade80;
        font-size: 1rem;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .item-details {
        color: rgba(255,255,255,0.8);
        font-size: 0.9rem;
        line-height: 1.5;
    }

    .zoom-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(74, 222, 128, 0.9);
        color: #0f172a;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        opacity: 0;
        transform: scale(0);
        transition: all 0.3s ease;
        z-index: 2;
    }

    .gallery-item:hover .zoom-icon {
        opacity: 1;
        transform: scale(1);
    }

    /* Features Section */
    .features-list {
        max-width: 1300px;
        margin: 100px auto;
        padding: 0 20px;
        position: relative;
        z-index: 10;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 35px;
        margin-top: 60px;
    }

    .feature-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.1) 100%);
        border: 2px solid rgba(255,255,255,0.1);
        border-radius: 25px;
        padding: 40px 30px;
        backdrop-filter: blur(10px);
        text-align: center;
        transition: all 0.4s ease;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(74, 222, 128, 0.2);
        border-color: #4ade80;
        background: linear-gradient(135deg, rgba(74, 222, 128, 0.08) 0%, rgba(255, 255, 255, 0.12) 100%);
    }

    .feature-icon-wrapper {
        width: 80px;
        height: 80px;
        margin: 0 auto 25px;
        background: linear-gradient(135deg, #4ade80 0%, #22c55e 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 25px rgba(74, 222, 128, 0.4);
        transition: all 0.4s ease;
    }

    .feature-card:hover .feature-icon-wrapper {
        transform: rotateY(360deg) scale(1.1);
        box-shadow: 0 12px 35px rgba(74, 222, 128, 0.6);
    }

    .feature-icon {
        font-size: 2rem;
        color: #0f172a;
    }

    .feature-title {
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 1.4rem;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .feature-text {
        color: rgba(255,255,255,0.8);
        line-height: 1.7;
        font-size: 0.95rem;
    }

    /* Carrusel de Testimonios de Instalaciones */
    .testimonials-section {
        max-width: 1000px;
        margin: 100px auto;
        padding: 0 20px;
        position: relative;
        z-index: 10;
    }

    .testimonial-card {
        background: linear-gradient(135deg, rgba(30, 27, 75, 0.8) 0%, rgba(74, 222, 128, 0.1) 100%);
        backdrop-filter: blur(10px);
        border-radius: 25px;
        padding: 40px;
        border: 2px solid rgba(74, 222, 128, 0.2);
        text-align: center;
    }

    .testimonial-text {
        color: rgba(255,255,255,0.9);
        font-size: 1.15rem;
        line-height: 1.8;
        font-style: italic;
        margin-bottom: 25px;
    }

    .testimonial-author {
        color: #4ade80;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
    }

    .testimonial-rating {
        color: #fbbf24;
        font-size: 1.2rem;
        margin-top: 15px;
    }

    /* Animaciones */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .gallery-item.large {
            grid-column: span 1;
            height: 300px;
        }
    }

    @media (max-width: 768px) {
        .facilities-title {
            font-size: 2.5rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .gallery-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .gallery-item {
            height: 280px;
        }

        .features-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .tour-card {
            padding: 35px 25px;
        }
    }
</style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="facilities-hero">
        <h1 class="facilities-title">Tecnología y Confort para tu Mascota</h1>
        <p class="facilities-subtitle">
            Espacios diseñados con amor y equipados con tecnología de vanguardia para garantizar la seguridad, comodidad y tranquilidad de tu mejor amigo en cada visita.
        </p>
    </section>

    <!-- Tour Virtual CTA -->
    <div class="virtual-tour" data-aos="fade-up">
        <div class="tour-card">
            <h2 class="tour-title">🏥 Recorre Nuestras Instalaciones</h2>
            <p class="tour-text">
                Explora virtualmente cada rincón de nuestra clínica y conoce los espacios donde cuidamos a tu mascota con la máxima dedicación y tecnología.
            </p>
            <a href="#gallery" class="btn-tour">
                <i class="fas fa-video"></i>
                Iniciar Tour Virtual
            </a>
        </div>
    </div>

    <!-- Galería Interactiva -->
    <section class="gallery-section" id="gallery">
        <h2 class="section-title" data-aos="fade-up">Galería de Instalaciones</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
            Descubre nuestros espacios modernos y acogedores
        </p>
        
        <div class="gallery-grid">
            <!-- Recepción -->
            <a href="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?w=1200" class="glightbox gallery-item large" data-aos="fade-up" data-aos-delay="100">
                <img src="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?w=800" alt="Recepción" class="gallery-img">
                <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                <div class="gallery-overlay">
                    <h3 class="item-title"><i class="fas fa-door-open"></i> Recepción y Sala de Espera</h3>
                    <div class="item-desc">Ambiente Confortable</div>
                    <p class="item-details">Espacio amplio y acogedor con áreas separadas para perros y gatos, climatización y Wi-Fi gratuito.</p>
                </div>
            </a>

            <!-- Consultorio -->
            <a href="https://images.unsplash.com/photo-1666214280391-8ff5bd3c0bf0?w=1200" class="glightbox gallery-item" data-aos="fade-up" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1666214280391-8ff5bd3c0bf0?w=800" alt="Consultorio" class="gallery-img">
                <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                <div class="gallery-overlay">
                    <h3 class="item-title"><i class="fas fa-stethoscope"></i> Consultorios Médicos</h3>
                    <div class="item-desc">Atención Personalizada</div>
                    <p class="item-details">4 consultorios equipados con tecnología diagnóstica avanzada.</p>
                </div>
            </a>

            <!-- Quirófano -->
            <a href="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=1200" class="glightbox gallery-item" data-aos="fade-up" data-aos-delay="300">
                <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=800" alt="Quirófano" class="gallery-img">
                <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                <div class="gallery-overlay">
                    <h3 class="item-title"><i class="fas fa-procedures"></i> Quirófanos Modernos</h3>
                    <div class="item-desc">Cirugías de Alta Complejidad</div>
                    <p class="item-details">2 quirófanos con equipamiento laparoscópico y monitoreo avanzado.</p>
                </div>
            </a>

            <!-- Laboratorio -->
            <a href="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=1200" class="glightbox gallery-item large" data-aos="fade-up" data-aos-delay="400">
                <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=800" alt="Laboratorio" class="gallery-img">
                <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                <div class="gallery-overlay">
                    <h3 class="item-title"><i class="fas fa-flask"></i> Laboratorio Clínico</h3>
                    <div class="item-desc">Diagnósticos Rápidos y Precisos</div>
                    <p class="item-details">Laboratorio in-house con analizadores hematológicos, bioquímicos y de urianálisis.</p>
                </div>
            </a>

            <!-- Rayos X -->
            <a href="https://images.unsplash.com/photo-1581594549595-35f6edc7b762?w=1200" class="glightbox gallery-item" data-aos="fade-up" data-aos-delay="500">
                <img src="https://images.unsplash.com/photo-1581594549595-35f6edc7b762?w=800" alt="Radiología" class="gallery-img">
                <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                <div class="gallery-overlay">
                    <h3 class="item-title"><i class="fas fa-x-ray"></i> Sala de Rayos X</h3>
                    <div class="item-desc">Diagnóstico por Imagen Digital</div>
                    <p class="item-details">Equipo de radiología digital con resultados inmediatos.</p>
                </div>
            </a>

            <!-- Hospitalización -->
            <a href="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=1200" class="glightbox gallery-item" data-aos="fade-up" data-aos-delay="600">
                <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=800" alt="Hospitalización" class="gallery-img">
                <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                <div class="gallery-overlay">
                    <h3 class="item-title"><i class="fas fa-bed"></i> Área de Hospitalización</h3>
                    <div class="item-desc">Cuidados Intensivos 24/7</div>
                    <p class="item-details">Jaulas amplias con temperatura controlada y monitoreo constante.</p>
                </div>
            </a>

            <!-- Farmacia -->
            <a href="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=1200" class="glightbox gallery-item" data-aos="fade-up" data-aos-delay="700">
                <img src="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=800" alt="Farmacia" class="gallery-img">
                <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                <div class="gallery-overlay">
                    <h3 class="item-title"><i class="fas fa-pills"></i> Farmacia Veterinaria</h3>
                    <div class="item-desc">Medicamentos Certificados</div>
                    <p class="item-details">Stock completo de medicamentos y productos veterinarios.</p>
                </div>
            </a>

            <!-- Grooming -->
            <a href="https://images.unsplash.com/photo-1548681528-6a5c45b66b42?w=1200" class="glightbox gallery-item" data-aos="fade-up" data-aos-delay="800">
                <img src="https://images.unsplash.com/photo-1548681528-6a5c45b66b42?w=800" alt="Peluquería" class="gallery-img">
                <div class="zoom-icon"><i class="fas fa-search-plus"></i></div>
                <div class="gallery-overlay">
                    <h3 class="item-title"><i class="fas fa-cut"></i> Sala de Estética</h3>
                    <div class="item-desc">Peluquería y Spa</div>
                    <p class="item-details">Servicio completo de grooming y estética canina y felina.</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Features / Características -->
    <section class="features-list">
        <h2 class="section-title" data-aos="fade-up">Nuestras Características</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
            Innovación y cuidado en cada detalle
        </p>

        <div class="features-grid">
            <div class="feature-card" data-aos="flip-up" data-aos-delay="100">
                <div class="feature-icon-wrapper">
                    <i class="fas fa-shield-virus feature-icon"></i>
                </div>
                <h3 class="feature-title">Bioseguridad Total</h3>
                <p class="feature-text">Protocolos estrictos de limpieza y desinfección en todas nuestras áreas para prevenir contagios.</p>
            </div>

            <div class="feature-card" data-aos="flip-up" data-aos-delay="200">
                <div class="feature-icon-wrapper">
                    <i class="fas fa-thermometer-half feature-icon"></i>
                </div>
                <h3 class="feature-title">Climatización Perfecta</h3>
                <p class="feature-text">Temperatura y humedad controladas en todas las áreas para el máximo confort de tu mascota.</p>
            </div>

            <div class="feature-card" data-aos="flip-up" data-aos-delay="300">
                <div class="feature-icon-wrapper">
                    <i class="fas fa-cat feature-icon"></i>
                </div>
                <h3 class="feature-title">Cat-Friendly Certified</h3>
                <p class="feature-text">Espacios exclusivos para gatos, diseñados para reducir el estrés durante su visita.</p>
            </div>

            <div class="feature-card" data-aos="flip-up" data-aos-delay="400">
                <div class="feature-icon-wrapper">
                    <i class="fas fa-video feature-icon"></i>
                </div>
                <h3 class="feature-title">Monitoreo en Vivo</h3>
                <p class="feature-text">Sistema de cámaras que te permite ver a tu mascota hospitalizada desde tu celular.</p>
            </div>

            <div class="feature-card" data-aos="flip-up" data-aos-delay="500">
                <div class="feature-icon-wrapper">
                    <i class="fas fa-parking feature-icon"></i>
                </div>
                <h3 class="feature-title">Estacionamiento Amplio</h3>
                <p class="feature-text">Parking gratuito con espacios amplios para tu comodidad al llegar con tu mascota.</p>
            </div>

            <div class="feature-card" data-aos="flip-up" data-aos-delay="600">
                <div class="feature-icon-wrapper">
                    <i class="fas fa-wifi feature-icon"></i>
                </div>
                <h3 class="feature-title">WiFi Gratuito</h3>
                <p class="feature-text">Internet de alta velocidad disponible en todas las áreas de espera para tu comodidad.</p>
            </div>
        </div>
    </section>

    <!-- Testimonios sobre Instalaciones -->
    <section class="testimonials-section">
        <h2 class="section-title" data-aos="fade-up">Lo Que Dicen Nuestros Clientes</h2>
        
        <div class="swiper testimonials-swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Las instalaciones son impecables, modernas y muy limpias. Mi gato se sintió tranquilo en el consultorio Cat-Friendly. ¡Excelente atención!"
                        </p>
                        <div class="testimonial-author">- María González</div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Me impresionó el quirófano y todo el equipamiento médico. Se nota que invierten en tecnología de punta. Mi perro fue operado exitosamente."
                        </p>
                        <div class="testimonial-author">- Carlos Rodríguez</div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "La sala de espera es muy cómoda y el sistema de monitoreo me permitió ver a mi mascota durante su hospitalización. ¡Muy tranquilizador!"
                        </p>
                        <div class="testimonial-author">- Ana Martínez</div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
@endsection

@push('scripts')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- AOS - Animate On Scroll -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

<script>
    // Inicializar AOS
    AOS.init({
        duration: 800,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic'
    });

    // Inicializar GLightbox para la galería
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true,
        closeButton: true,
    });

    // Inicializar Swiper para testimonios
    const testimonialsSwiper = new Swiper('.testimonials-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    // Smooth scroll para el botón de tour virtual
    document.querySelector('.btn-tour').addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
</script>
@endpush
