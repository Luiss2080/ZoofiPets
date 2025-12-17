@extends('layouts.app')

@section('title', 'Nosotros')

@push('styles')
<!-- Swiper CSS para carruseles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<!-- AOS - Animate On Scroll -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    /* === GLOBAL & UTILS === */
    :root {
        --primary: #4ade80;
        --primary-dark: #22c55e;
        --secondary: #3b82f6;
        --dark-bg: #0f172a;
        --card-bg: rgba(255, 255, 255, 0.05);
        --text-light: #f8fafc;
        --text-dim: #cbd5e1;
    }

    /* === HERO SECTION PREMIUM === */
    .nosotros-hero {
        padding: 140px 0 100px;
        text-align: center;
        position: relative;
        z-index: 10;
        overflow: hidden;
        background-attachment: fixed;
    }

    .nosotros-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* Background removed to show global animated background */
        z-index: -1;
    }

    /* Animated Particles Background */
    .particles-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 0;
        pointer-events: none;
    }

    .particle {
        position: absolute;
        border-radius: 50%;
        background: rgba(74, 222, 128, 0.3);
        animation: floatUp linear infinite;
    }

    @keyframes floatUp {
        0% { transform: translateY(100vh) scale(0); opacity: 0; }
        50% { opacity: 0.6; }
        100% { transform: translateY(-100px) scale(1); opacity: 0; }
    }
    
    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .nosotros-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 4rem;
        font-weight: 900;
        color: #fff;
        margin-bottom: 20px;
        text-shadow: 0 10px 30px rgba(0,0,0,0.5);
        letter-spacing: -1px;
        background: linear-gradient(to right, #fff, #bbf7d0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .nosotros-subtitle {
        font-family: 'Inter', sans-serif;
        font-size: 1.25rem;
        color: var(--text-dim);
        max-width: 750px;
        margin: 0 auto 40px;
        line-height: 1.7;
        font-weight: 300;
    }

    /* Hero Buttons */
    .hero-actions {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 60px;
    }

    .btn-hero {
        padding: 15px 35px;
        border-radius: 50px;
        font-weight: 600;
        font-family: 'Montserrat', sans-serif;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-hero-primary {
        background: var(--primary);
        color: #064e3b;
        box-shadow: 0 0 20px rgba(74, 222, 128, 0.4);
    }

    .btn-hero-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 0 30px rgba(74, 222, 128, 0.6);
        background: #fff;
    }

    .btn-hero-outline {
        border: 2px solid rgba(255,255,255,0.2);
        color: #fff;
        backdrop-filter: blur(5px);
    }

    .btn-hero-outline:hover {
        background: rgba(255,255,255,0.1);
        border-color: #fff;
        transform: translateY(-3px);
    }

    /* Stats Cards */
    .hero-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .stat-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 25px;
        border-radius: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        border-color: var(--primary);
        background: rgba(255, 255, 255, 0.08);
    }

    .stat-icon {
        font-size: 2rem;
        color: var(--primary);
        margin-bottom: 15px;
        display: inline-block;
    }

    .stat-number {
        font-family: 'Montserrat', sans-serif;
        font-size: 2.5rem;
        font-weight: 800;
        color: #fff;
        display: block;
        line-height: 1;
        margin-bottom: 5px;
    }

    .stat-label {
        font-family: 'Inter', sans-serif;
        color: var(--text-dim);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 500;
    }

    /* Scroll Down */
    .scroll-down {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 10;
        opacity: 0.7;
        transition: opacity 0.3s;
        cursor: pointer;
    }
    
    .scroll-down:hover { opacity: 1; }

    .mouse {
        width: 30px;
        height: 50px;
        border: 2px solid #fff;
        border-radius: 20px;
        position: relative;
    }

    .mouse::before {
        content: '';
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        width: 6px;
        height: 6px;
        background: #fff;
        border-radius: 50%;
        animation: scrollMouse 2s infinite;
    }

    @keyframes scrollMouse {
        0% { opacity: 1; top: 10px; }
        100% { opacity: 0; top: 30px; }
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
        40% { transform: translateX(-50%) translateY(-10px); }
        60% { transform: translateX(-50%) translateY(-5px); }
    }

    /* === MISSION VISION VALUES === */
    .mission-vision-section {
        padding: 100px 0;
        position: relative;
        z-index: 10;
        /* Fondo transparente para mostrar el global */
        background: transparent;
        border-top: 1px solid rgba(255,255,255,0.05);
        border-bottom: 1px solid rgba(255,255,255,0.05);
    }

    .section-title {
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        font-size: 2.5rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 15px;
        background: linear-gradient(135deg, #fff 0%, #4ade80 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .section-subtitle {
        text-align: center;
        font-family: 'Inter', sans-serif;
        color: var(--text-dim);
        font-size: 1.1rem;
        max-width: 650px;
        margin: 0 auto 60px;
    }

    .mv-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .mv-card {
        background: rgba(30, 41, 59, 0.4); /* Más transparente para que se vea el fondo morado */
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 24px;
        padding: 40px 30px;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        backdrop-filter: blur(10px);
    }

    .mv-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary), var(--secondary));
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s ease;
    }

    .mv-card:hover {
        transform: translateY(-10px);
        background: rgba(30, 41, 59, 0.8);
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        border-color: var(--primary);
    }

    .mv-card:hover::after {
        transform: scaleX(1);
    }

    .mv-icon-wrapper {
        width: 90px;
        height: 90px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.4s ease;
    }

    .mv-card:hover .mv-icon-wrapper {
        background: var(--primary);
        transform: rotate(10deg) scale(1.1);
        box-shadow: 0 0 30px rgba(74, 222, 128, 0.4);
        border-color: transparent;
    }

    .mv-icon {
        font-size: 2.5rem;
        color: var(--primary);
        transition: color 0.4s ease;
    }

    .mv-card:hover .mv-icon {
        color: #064e3b;
    }

    .mv-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.8rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 20px;
    }

    .mv-text {
        font-family: 'Inter', sans-serif;
        color: var(--text-dim);
        font-size: 1.05rem;
        line-height: 1.8;
    }

    /* Values List */
    .values-list {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
        width: 100%;
    }

    .values-list li {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        color: var(--text-dim);
        font-size: 1rem;
    }

    .values-list li i {
        color: var(--primary);
        margin-right: 15px;
        font-size: 1.2rem;
        background: rgba(74, 222, 128, 0.1);
        padding: 8px;
        border-radius: 8px;
    }

    .values-list li strong {
        color: #fff;
        margin-right: 5px;
    }

    /* === TIMELINE / HISTORIA === */
    .history-section {
        max-width: 1100px;
        margin: 0 auto;
        padding: 60px 20px;
        position: relative;
        z-index: 10;
        color: #fff;
    }

    .timeline {
        position: relative;
        padding: 30px 0;
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
        margin-bottom: 40px;
    }

    .timeline-item:nth-child(even) {
        justify-content: flex-start;
        padding-left: 50%;
        padding-right: 0;
    }

    .timeline-content {
        background: linear-gradient(135deg, rgba(30, 27, 75, 0.8) 0%, rgba(74, 222, 128, 0.1) 100%);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 20px 25px;
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
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #4ade80;
    }

    .timeline-text {
        line-height: 1.6;
        color: rgba(255,255,255,0.85);
        font-size: 0.95rem;
    }

    /* === GALERÍA / CARRUSEL === */
    .gallery-section {
        padding: 80px 0;
        position: relative;
        z-index: 10;
        background: transparent; /* Fondo transparente para mostrar el global */
    }

    .swiper {
        width: 100%;
        padding: 50px 20px;
    }

    .gallery-item {
        width: 100%;
        height: 500px; /* Más alto para mejor visualización */
        border-radius: 24px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 20px 50px rgba(0,0,0,0.4);
        transition: all 0.4s ease;
        border: 1px solid rgba(255,255,255,0.1);
    }

    .gallery-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(74, 222, 128, 0.2);
        border-color: var(--primary);
    }

    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    .gallery-item:hover .gallery-img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.8) 60%, transparent 100%);
        padding: 40px 30px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        height: 100%;
        opacity: 1;
    }
    
    .gallery-content {
        transform: translateY(30px);
        transition: transform 0.4s ease;
    }

    .gallery-item:hover .gallery-content {
        transform: translateY(0);
    }

    .gallery-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        font-size: 1.8rem;
        color: #fff;
        margin-bottom: 10px;
        text-shadow: 0 2px 10px rgba(0,0,0,0.5);
    }

    .gallery-description {
        color: rgba(255,255,255,0.9);
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 20px;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.4s ease 0.1s;
    }

    .gallery-item:hover .gallery-description {
        opacity: 1;
        transform: translateY(0);
    }
    
    .gallery-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 25px;
        background: var(--primary);
        color: #064e3b;
        border-radius: 50px;
        font-weight: 700;
        text-decoration: none;
        font-size: 0.9rem;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.4s ease 0.2s;
        width: fit-content;
    }
    
    .gallery-btn:hover {
        background: #fff;
        color: var(--primary-dark);
    }
    
    .gallery-item:hover .gallery-btn {
        opacity: 1;
        transform: translateY(0);
    }

    /* === CTA SECTION === */
    .cta-section {
        padding: 80px 20px;
        position: relative;
        z-index: 10;
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
    }

    .cta-box {
        background: rgba(30, 27, 75, 0.4);
        border: 1px solid rgba(74, 222, 128, 0.3);
        backdrop-filter: blur(20px);
        border-radius: 30px;
        padding: 60px;
        width: 100%;
        max-width: 100%;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        position: relative;
        overflow: hidden;
    }
    
    .cta-box::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 400px;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(74, 222, 128, 0.05));
        pointer-events: none;
    }

    .cta-content {
        flex: 1;
        text-align: left;
    }

    .cta-title {
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 2.8rem;
        font-weight: 900;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    .cta-text {
        color: rgba(255,255,255,0.8);
        font-size: 1.2rem;
        margin-bottom: 0;
        line-height: 1.6;
        max-width: 800px;
    }

    .btn-group {
        display: flex;
        gap: 20px;
        flex-shrink: 0;
    }
    
    @media (max-width: 992px) {
        .cta-box {
            flex-direction: column;
            text-align: center;
            padding: 40px;
        }
        
        .cta-content {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .cta-text {
            margin: 0 auto;
        }
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
        <!-- Animated Particles -->
        <div class="particles-container">
            <div class="particle" style="width: 10px; height: 10px; left: 10%; animation-duration: 15s;"></div>
            <div class="particle" style="width: 15px; height: 15px; left: 30%; animation-duration: 20s; animation-delay: 2s;"></div>
            <div class="particle" style="width: 8px; height: 8px; left: 70%; animation-duration: 18s; animation-delay: 5s;"></div>
            <div class="particle" style="width: 12px; height: 12px; left: 90%; animation-duration: 22s; animation-delay: 1s;"></div>
            <div class="particle" style="width: 6px; height: 6px; left: 50%; animation-duration: 25s; animation-delay: 8s;"></div>
        </div>

        <div class="hero-content">
            <h1 class="nosotros-title" data-aos="fade-down" data-aos-duration="1000">Nuestra Pasión son las Mascotas</h1>
            <p class="nosotros-subtitle" data-aos="fade-up" data-aos-delay="200">
                En ZoofiPets, no solo curamos animales; cuidamos a los miembros más queridos de tu familia con tecnología de punta y un corazón enorme.
            </p>
            
            <!-- Hero Actions -->
            <div class="hero-actions" data-aos="fade-up" data-aos-delay="300">
                <a href="#equipo" class="btn-hero btn-hero-primary">
                    <i class="fas fa-user-md"></i> Conoce al Equipo
                </a>
                <a href="#contacto" class="btn-hero btn-hero-outline">
                    <i class="fas fa-envelope"></i> Contáctanos
                </a>
            </div>
            
            <!-- Estadísticas Animadas -->
            <div class="hero-stats">
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="400">
                    <i class="fas fa-calendar-check stat-icon"></i>
                    <span class="stat-number counter" data-target="5">0</span>
                    <span class="stat-label">Años de Experiencia</span>
                </div>
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="500">
                    <i class="fas fa-paw stat-icon"></i>
                    <span class="stat-number counter" data-target="15000">0</span>
                    <span class="stat-label">Mascotas Atendidas</span>
                </div>
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="600">
                    <i class="fas fa-smile-beam stat-icon"></i>
                    <span class="stat-number counter" data-target="98">0</span>
                    <span class="stat-label">% Satisfacción</span>
                </div>
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="700">
                    <i class="fas fa-user-nurse stat-icon"></i>
                    <span class="stat-number counter" data-target="24">0</span>
                    <span class="stat-label">Especialistas</span>
                </div>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="scroll-down" data-aos="fade-up" data-aos-delay="1000">
            <div class="mouse"></div>
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
                <ul class="values-list">
                    <li><i class="fas fa-heart"></i> <span><strong>Compasión:</strong> Empatía en cada consulta.</span></li>
                    <li><i class="fas fa-shield-alt"></i> <span><strong>Integridad:</strong> Honestidad total.</span></li>
                    <li><i class="fas fa-microchip"></i> <span><strong>Innovación:</strong> Tecnología punta.</span></li>
                    <li><i class="fas fa-star"></i> <span><strong>Excelencia:</strong> Calidad superior.</span></li>
                </ul>
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
            Espacios diseñados con amor y tecnología para el bienestar de tu mascota. Cada rincón de ZoofiPets está pensado para brindar seguridad, confort y la mejor atención médica posible.
        </p>
        
        <div class="swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?w=800" alt="Recepción ZoofiPets" class="gallery-img">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h3 class="gallery-title"><i class="fas fa-couch"></i> Recepción y Sala de Espera</h3>
                                <p class="gallery-description">Un ambiente cómodo, tranquilo y libre de estrés tanto para ti como para tu mascota. Contamos con áreas separadas para perros y gatos para minimizar la ansiedad.</p>
                                <a href="#" class="gallery-btn">Ver Detalles <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=800" alt="Quirófano" class="gallery-img">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h3 class="gallery-title"><i class="fas fa-procedures"></i> Quirófanos Avanzados</h3>
                                <p class="gallery-description">Equipados con monitoreo multiparamétrico, anestesia inhalatoria y tecnología de mínima invasión para garantizar la máxima seguridad en cada procedimiento quirúrgico.</p>
                                <a href="#" class="gallery-btn">Ver Detalles <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1548681528-6a5c45b66b42?w=800" alt="Consultorios" class="gallery-img">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h3 class="gallery-title"><i class="fas fa-stethoscope"></i> Consultorios Modernos</h3>
                                <p class="gallery-description">Espacios amplios y luminosos diseñados para una evaluación exhaustiva. Cada consultorio cuenta con todo lo necesario para un diagnóstico inicial preciso.</p>
                                <a href="#" class="gallery-btn">Ver Detalles <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=800" alt="Laboratorio" class="gallery-img">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h3 class="gallery-title"><i class="fas fa-microscope"></i> Laboratorio Propio</h3>
                                <p class="gallery-description">Realizamos análisis de sangre, orina y coprológicos en minutos. La rapidez en el diagnóstico es clave para un tratamiento efectivo y oportuno.</p>
                                <a href="#" class="gallery-btn">Ver Detalles <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=800" alt="Hospitalización" class="gallery-img">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h3 class="gallery-title"><i class="fas fa-heartbeat"></i> Área de Hospitalización</h3>
                                <p class="gallery-description">Cuidados intensivos 24/7 con personal dedicado. Jaulas cómodas, climatizadas y con oxigenoterapia para la recuperación óptima de pacientes críticos.</p>
                                <a href="#" class="gallery-btn">Ver Detalles <i class="fas fa-arrow-right"></i></a>
                            </div>
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
            <div class="cta-content">
                <h2 class="cta-title">¿Quiénes Cuidan a Tu Mascota?</h2>
                <p class="cta-text">
                    Detrás de cada diagnóstico y tratamiento hay un equipo de profesionales apasionados. Nuestros veterinarios, auxiliares y especialistas se capacitan constantemente para ofrecer lo mejor a tu mejor amigo. ¡Ven a conocernos!
                </p>
            </div>
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
