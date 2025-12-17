@extends('layouts.app')

@section('title', 'Nosotros')

@push('styles')
<!-- Swiper CSS para carruseles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<!-- AOS - Animate On Scroll -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    /* === HERO SECTION MEJORADO === */
    .nosotros-hero {
        padding: 150px 0 80px;
        text-align: center;
        position: relative;
        z-index: 10;
        overflow: hidden;
    }
    
    .hero-content {
        position: relative;
        z-index: 2;
    }
    
    .nosotros-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 4rem;
        font-weight: 900;
        color: #fff;
        margin-bottom: 25px;
        text-shadow: 0 4px 20px rgba(0,0,0,0.4);
        animation: fadeInUp 0.8s ease-out;
    }
    
    .nosotros-subtitle {
        font-family: 'Inter', sans-serif;
        font-size: 1.3rem;
        color: rgba(255,255,255,0.95);
        max-width: 800px;
        margin: 0 auto 40px;
        line-height: 1.8;
        animation: fadeInUp 0.8s ease-out 0.2s both;
    }

    .hero-stats {
        display: flex;
        justify-content: center;
        gap: 60px;
        margin-top: 50px;
        flex-wrap: wrap;
        animation: fadeInUp 0.8s ease-out 0.4s both;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-family: 'Montserrat', sans-serif;
        font-size: 3rem;
        font-weight: 800;
        color: #4ade80;
        display: block;
        text-shadow: 0 0 20px rgba(74, 222, 128, 0.5);
    }

    .stat-label {
        font-family: 'Inter', sans-serif;
        color: rgba(255,255,255,0.8);
        font-size: 0.95rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: 5px;
    }

    /* === MISIÓN, VISIÓN Y VALORES === */
    .mission-vision-section {
        padding: 100px 0;
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
        background: linear-gradient(135deg, #fff 0%, #4ade80 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .section-subtitle {
        text-align: center;
        font-family: 'Inter', sans-serif;
        color: rgba(255,255,255,0.7);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto 60px;
    }

    .mv-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 40px;
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .mv-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.08) 100%);
        backdrop-filter: blur(15px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 25px;
        padding: 50px 35px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .mv-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(74, 222, 128, 0.1) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
    }

    .mv-card:hover::before {
        opacity: 1;
    }

    .mv-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 50px rgba(74, 222, 128, 0.3);
        border-color: #4ade80;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.15) 100%);
    }

    .mv-icon-wrapper {
        width: 100px;
        height: 100px;
        margin: 0 auto 25px;
        background: linear-gradient(135deg, #4ade80 0%, #22c55e 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 30px rgba(74, 222, 128, 0.4);
        transition: all 0.4s ease;
        animation: float 3s ease-in-out infinite;
    }

    .mv-card:hover .mv-icon-wrapper {
        transform: rotateY(360deg) scale(1.1);
        box-shadow: 0 15px 40px rgba(74, 222, 128, 0.6);
    }

    .mv-icon {
        font-size: 2.5rem;
        color: #0f172a;
    }

    .mv-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 20px;
        position: relative;
    }

    .mv-text {
        font-family: 'Inter', sans-serif;
        color: rgba(255,255,255,0.85);
        line-height: 1.8;
        font-size: 1rem;
    }

    /* === TIMELINE / HISTORIA === */
    .history-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 100px 20px;
        position: relative;
        z-index: 10;
        color: #fff;
    }

    .timeline {
        position: relative;
        padding: 50px 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 4px;
        height: 100%;
        background: linear-gradient(180deg, #4ade80 0%, #22c55e 50%, #4ade80 100%);
        border-radius: 2px;
    }

    .timeline-item {
        display: flex;
        justify-content: flex-end;
        padding-right: 50%;
        position: relative;
        margin-bottom: 60px;
    }

    .timeline-item:nth-child(even) {
        justify-content: flex-start;
        padding-left: 50%;
        padding-right: 0;
    }

    .timeline-content {
        background: linear-gradient(135deg, rgba(30, 27, 75, 0.8) 0%, rgba(74, 222, 128, 0.1) 100%);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 30px;
        width: calc(50% - 50px);
        border: 1px solid rgba(255,255,255,0.15);
        position: relative;
        transition: all 0.4s ease;
    }

    .timeline-content:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(74, 222, 128, 0.3);
    }

    .timeline-year {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        background: linear-gradient(135deg, #4ade80 0%, #22c55e 100%);
        color: #0f172a;
        font-family: 'Montserrat', sans-serif;
        font-weight: 900;
        font-size: 1.2rem;
        padding: 12px 25px;
        border-radius: 50px;
        box-shadow: 0 5px 20px rgba(74, 222, 128, 0.5);
        z-index: 2;
    }

    .timeline-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: #4ade80;
    }

    .timeline-text {
        line-height: 1.7;
        color: rgba(255,255,255,0.85);
    }

    /* === GALERÍA / CARRUSEL === */
    .gallery-section {
        padding: 100px 0;
        position: relative;
        z-index: 10;
    }

    .swiper {
        width: 100%;
        padding: 50px 0;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gallery-item {
        width: 100%;
        height: 400px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        transition: transform 0.3s ease;
    }

    .gallery-item:hover {
        transform: scale(1.05);
    }

    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover .gallery-img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
        padding: 30px;
        transform: translateY(100%);
        transition: transform 0.4s ease;
    }

    .gallery-item:hover .gallery-overlay {
        transform: translateY(0);
    }

    .gallery-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        color: #fff;
        margin-bottom: 8px;
    }

    .gallery-description {
        color: rgba(255,255,255,0.85);
        font-size: 0.9rem;
    }

    /* === CTA SECTION === */
    .cta-section {
        text-align: center;
        padding: 100px 20px;
        position: relative;
        z-index: 10;
    }

    .cta-box {
        background: linear-gradient(135deg, rgba(74, 222, 128, 0.1) 0%, rgba(34, 197, 94, 0.1) 100%);
        border: 2px solid rgba(74, 222, 128, 0.3);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        padding: 60px 40px;
        max-width: 800px;
        margin: 0 auto;
    }

    .cta-title {
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .cta-text {
        color: rgba(255,255,255,0.8);
        font-size: 1.1rem;
        margin-bottom: 35px;
        line-height: 1.6;
    }

    .btn-group {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-team, .btn-secondary {
        font-family: 'Montserrat', sans-serif;
        padding: 18px 45px;
        border-radius: 50px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.4s ease;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 1rem;
    }

    .btn-team {
        background: linear-gradient(135deg, #4ade80 0%, #22c55e 100%);
        color: #0f172a;
        box-shadow: 0 6px 20px rgba(74, 222, 128, 0.4);
    }

    .btn-team:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 10px 30px rgba(74, 222, 128, 0.6);
    }

    .btn-secondary {
        background: transparent;
        border: 2px solid #4ade80;
        color: #4ade80;
    }

    .btn-secondary:hover {
        background: #4ade80;
        color: #0f172a;
        transform: translateY(-3px);
    }

    /* === ANIMACIONES === */
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

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    /* === RESPONSIVE === */
    @media (max-width: 768px) {
        .nosotros-title {
            font-size: 2.5rem;
        }

        .hero-stats {
            gap: 30px;
        }

        .stat-number {
            font-size: 2.2rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .mv-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .timeline::before {
            left: 30px;
        }

        .timeline-item,
        .timeline-item:nth-child(even) {
            padding-left: 80px;
            padding-right: 0;
            justify-content: flex-start;
        }

        .timeline-content {
            width: 100%;
        }

        .timeline-year {
            left: 30px;
            transform: translateX(0);
        }

        .gallery-item {
            height: 300px;
        }

        .cta-title {
            font-size: 1.8rem;
        }

        .btn-group {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
@endpush

@section('content')
    <!-- Hero Nosotros con Estadísticas -->
    <section class="nosotros-hero">
        <div class="hero-content">
            <h1 class="nosotros-title" data-aos="fade-down">Nuestra Pasión son las Mascotas</h1>
            <p class="nosotros-subtitle" data-aos="fade-up" data-aos-delay="200">
                En ZoofiPets, no solo curamos animales; cuidamos a los miembros más queridos de tu familia con tecnología de punta y un corazón enorme.
            </p>
            
            <!-- Estadísticas Animadas -->
            <div class="hero-stats">
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="400">
                    <span class="stat-number counter" data-target="5">0</span>
                    <span class="stat-label">Años de Experiencia</span>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="500">
                    <span class="stat-number counter" data-target="15000">0</span>
                    <span class="stat-label">Mascotas Atendidas</span>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="600">
                    <span class="stat-number counter" data-target="98">0</span>
                    <span class="stat-label">% Satisfacción</span>
                </div>
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="700">
                    <span class="stat-number counter" data-target="24">0</span>
                    <span class="stat-label">Especialistas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Misión, Visión y Valores Mejorado -->
    <section class="mission-vision-section">
        <h2 class="section-title" data-aos="fade-up">¿Quiénes Somos?</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
            Descubre los pilares que nos definen como la clínica veterinaria de referencia
        </p>
        
        <div class="mv-grid">
            <div class="mv-card" data-aos="flip-left" data-aos-delay="200">
                <div class="mv-icon-wrapper">
                    <i class="fas fa-heart-pulse mv-icon"></i>
                </div>
                <h2 class="mv-title">Nuestra Misión</h2>
                <p class="mv-text">
                    Proporcionar atención veterinaria integral y compasiva, utilizando tecnología avanzada para mejorar la calidad de vida de cada mascota que entra por nuestras puertas.
                </p>
            </div>
            
            <div class="mv-card" data-aos="flip-left" data-aos-delay="400">
                <div class="mv-icon-wrapper" style="animation-delay: 0.5s">
                    <i class="fas fa-eye mv-icon"></i>
                </div>
                <h2 class="mv-title">Nuestra Visión</h2>
                <p class="mv-text">
                    Ser la clínica veterinaria líder en innovación y cuidado animal, reconocida por nuestra excelencia médica y el trato humano hacia mascotas y propietarios.
                </p>
            </div>
            
            <div class="mv-card" data-aos="flip-left" data-aos-delay="600">
                <div class="mv-icon-wrapper" style="animation-delay: 1s">
                    <i class="fas fa-hand-holding-heart mv-icon"></i>
                </div>
                <h2 class="mv-title">Nuestros Valores</h2>
                <p class="mv-text">
                    Compasión, Integridad, Innovación y Excelencia. Creemos que cada vida importa y merece ser tratada con el máximo respeto y dedicación.
                </p>
            </div>
        </div>
    </section>

    <!-- Timeline / Historia -->
    <section class="history-section">
        <h2 class="section-title" data-aos="fade-up">Nuestra Historia</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
            Un recorrido por los momentos que nos han convertido en quienes somos hoy
        </p>
        
        <div class="timeline">
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-content">
                    <h3 class="timeline-title">Los Inicios</h3>
                    <p class="timeline-text">
                        ZoofiPets nació como un pequeño consultorio veterinario con un gran sueño: revolucionar el cuidado animal en la región con atención personalizada y tecnología de punta.
                    </p>
                </div>
                <div class="timeline-year">2020</div>
            </div>
            
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-content">
                    <h3 class="timeline-title">Expansión y Crecimiento</h3>
                    <p class="timeline-text">
                        Ampliamos nuestras instalaciones e incorporamos equipamiento médico de última generación, incluyendo rayos X digitales, laboratorio propio y quirófanos especializados.
                    </p>
                </div>
                <div class="timeline-year">2021</div>
            </div>
            
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-content">
                    <h3 class="timeline-title">Reconocimiento Nacional</h3>
                    <p class="timeline-text">
                        Alcanzamos más de 10,000 mascotas atendidas y recibimos el premio "Mejor Clínica Veterinaria del Año" por nuestra excelencia en servicio y compromiso con la comunidad.
                    </p>
                </div>
                <div class="timeline-year">2022</div>
            </div>
            
            <div class="timeline-item" data-aos="fade-left">
                <div class="timeline-content">
                    <h3 class="timeline-title">Innovación Digital</h3>
                    <p class="timeline-text">
                        Lanzamos nuestra plataforma digital para citas online, historial médico electrónico y telemedicina, acercando la atención veterinaria a más familias.
                    </p>
                </div>
                <div class="timeline-year">2023</div>
            </div>
            
            <div class="timeline-item" data-aos="fade-right">
                <div class="timeline-content">
                    <h3 class="timeline-title">Líderes en Excelencia</h3>
                    <p class="timeline-text">
                        Superamos las 15,000 mascotas atendidas, contamos con 24 especialistas certificados y nos consolidamos como la clínica de referencia en medicina veterinaria avanzada.
                    </p>
                </div>
                <div class="timeline-year">2025</div>
            </div>
        </div>
    </section>

    <!-- Galería / Carrusel -->
    <section class="gallery-section">
        <h2 class="section-title" data-aos="fade-up">Nuestras Instalaciones</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
            Espacios diseñados con amor y tecnología para el bienestar de tu mascota
        </p>
        
        <div class="swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?w=800" alt="Recepción ZoofiPets" class="gallery-img">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title">Recepción y Sala de Espera</h3>
                            <p class="gallery-description">Ambiente cómodo y acogedor para tu comodidad</p>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=800" alt="Quirófano" class="gallery-img">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title">Quirófanos de Última Generación</h3>
                            <p class="gallery-description">Equipamiento médico de vanguardia para cirugías seguras</p>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1548681528-6a5c45b66b42?w=800" alt="Consultorios" class="gallery-img">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title">Consultorios Especializados</h3>
                            <p class="gallery-description">Espacios diseñados para atención personalizada</p>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=800" alt="Laboratorio" class="gallery-img">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title">Laboratorio Propio</h3>
                            <p class="gallery-description">Diagnósticos rápidos y precisos</p>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=800" alt="Hospitalización" class="gallery-img">
                        <div class="gallery-overlay">
                            <h3 class="gallery-title">Área de Hospitalización</h3>
                            <p class="gallery-description">Cuidados intensivos 24/7 para tu mascota</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Paginación y navegación -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- CTA Mejorado -->
    <section class="cta-section">
        <div class="cta-box" data-aos="zoom-in">
            <h2 class="cta-title">¿Quiénes Cuidan a Tu Mascota?</h2>
            <p class="cta-text">
                Conoce a nuestro equipo de profesionales apasionados, altamente capacitados y comprometidos con el bienestar de tu mejor amigo.
            </p>
            <div class="btn-group">
                <a href="{{ route('nosotros.equipo') }}" class="btn-team">
                    <i class="fas fa-user-doctor"></i>
                    Conoce al Equipo
                </a>
                <a href="{{ route('nosotros.instalaciones') }}" class="btn-secondary">
                    <i class="fas fa-building"></i>
                    Ver Instalaciones
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- AOS - Animate On Scroll -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // Inicializar AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic'
    });

    // Inicializar Swiper
    const swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });

    // Contador Animado
    const counters = document.querySelectorAll('.counter');
    const speed = 200;
    let started = false;

    const animateCounters = () => {
        if (started) return;
        
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const increment = target / speed;
            let count = 0;
            
            const updateCount = () => {
                count += increment;
                if (count < target) {
                    counter.innerText = Math.ceil(count);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };
            
            updateCount();
        });
        
        started = true;
    };

    // Observador para iniciar contador cuando esté visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
            }
        });
    }, { threshold: 0.5 });

    const heroSection = document.querySelector('.nosotros-hero');
    if (heroSection) {
        observer.observe(heroSection);
    }
</script>
@endpush
