@extends('layouts.app')

@section('title', 'Nuestras Instalaciones')

@push('styles')
<style>
    .facilities-hero {
        padding: 100px 0 50px;
        text-align: center;
        position: relative;
        z-index: 10;
    }
    
    .facilities-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 3rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 15px;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
        position: relative;
        z-index: 10;
    }

    .gallery-item {
        position: relative;
        height: 250px;
        border-radius: 15px;
        overflow: hidden;
        cursor: pointer;
        border: 1px solid rgba(255,255,255,0.1);
    }

    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
        background: #2d2a5d; /* Placeholder */
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
        padding: 20px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .gallery-item:hover .gallery-img {
        transform: scale(1.1);
    }

    .gallery-item:hover .gallery-overlay {
        transform: translateY(0);
    }

    .item-title {
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
    }

    .item-desc {
        color: #4ade80;
        font-size: 0.9rem;
    }

    .features-list {
        max-width: 1000px;
        margin: 60px auto;
        padding: 0 20px;
        position: relative;
        z-index: 10;
    }

    .feature-row {
        display: flex;
        align-items: center;
        margin-bottom: 40px;
        background: rgba(255,255,255,0.05);
        border-radius: 20px;
        padding: 30px;
        backdrop-filter: blur(5px);
    }

    .feature-icon {
        font-size: 2.5rem;
        color: #4ade80;
        margin-right: 30px;
        min-width: 60px;
        text-align: center;
    }

    .feature-content h3 {
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .feature-content p {
        color: rgba(255,255,255,0.8);
        line-height: 1.6;
    }
</style>
@endpush

@section('content')
    <section class="facilities-hero">
        <h1 class="facilities-title">Tecnología y Confort</h1>
        <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto;">
            Espacios diseñados para la seguridad y tranquilidad de tus mascotas, equipados con la última tecnología médica.
        </p>
    </section>

    <div class="gallery-grid">
        <div class="gallery-item">
            <div class="gallery-img" style="display:flex; align-items:center; justify-content:center;"><i class="fas fa-hospital fa-3x" style="color:rgba(255,255,255,0.2)"></i></div>
            <div class="gallery-overlay">
                <h3 class="item-title">Recepción</h3>
                <span class="item-desc">Área de espera confortable</span>
            </div>
        </div>
        <div class="gallery-item">
            <div class="gallery-img" style="display:flex; align-items:center; justify-content:center;"><i class="fas fa-procedures fa-3x" style="color:rgba(255,255,255,0.2)"></i></div>
            <div class="gallery-overlay">
                <h3 class="item-title">Quirófano</h3>
                <span class="item-desc">Equipamiento de alta complejidad</span>
            </div>
        </div>
        <div class="gallery-item">
            <div class="gallery-img" style="display:flex; align-items:center; justify-content:center;"><i class="fas fa-flask fa-3x" style="color:rgba(255,255,255,0.2)"></i></div>
            <div class="gallery-overlay">
                <h3 class="item-title">Laboratorio</h3>
                <span class="item-desc">Análisis clínicos inmediatos</span>
            </div>
        </div>
        <div class="gallery-item">
            <div class="gallery-img" style="display:flex; align-items:center; justify-content:center;"><i class="fas fa-x-ray fa-3x" style="color:rgba(255,255,255,0.2)"></i></div>
            <div class="gallery-overlay">
                <h3 class="item-title">Rayos X</h3>
                <span class="item-desc">Diagnóstico por imagen digital</span>
            </div>
        </div>
    </div>

    <div class="features-list">
        <div class="feature-row">
            <div class="feature-icon"><i class="fas fa-shield-virus"></i></div>
            <div class="feature-content">
                <h3>Bioseguridad Garantizada</h3>
                <p>Protocolos estrictos de limpieza y desinfección en todas nuestras áreas para prevenir contagios y asegurar un ambiente estéril.</p>
            </div>
        </div>
        <div class="feature-row">
            <div class="feature-icon"><i class="fas fa-couch"></i></div>
            <div class="feature-content">
                <h3>Áreas Cat-Friendly</h3>
                <p>Espacios exclusivos para gatos, diseñados para reducir el estrés durante su visita, separados de la zona de perros.</p>
            </div>
        </div>
    </div>
@endsection
