@extends('layouts.app')

@section('title', 'Nosotros')

@push('styles')
<style>
    /* Estilos específicos para Nosotros */
    .nosotros-hero {
        padding: 120px 0 60px;
        text-align: center;
        position: relative;
        z-index: 10;
    }
    
    .nosotros-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 3.5rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 20px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }
    
    .nosotros-subtitle {
        font-family: 'Inter', sans-serif;
        font-size: 1.2rem;
        color: rgba(255,255,255,0.9);
        max-width: 700px;
        margin: 0 auto 50px;
        line-height: 1.6;
    }

    .mission-vision-section {
        padding: 80px 0;
        position: relative;
        z-index: 10;
    }

    .mv-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .mv-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 40px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }

    .mv-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        background: rgba(255, 255, 255, 0.1);
    }

    .mv-icon {
        font-size: 3rem;
        color: #4ade80; /* Verde ZoofiPets */
        margin-bottom: 20px;
    }

    .mv-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 15px;
    }

    .mv-text {
        font-family: 'Inter', sans-serif;
        color: rgba(255,255,255,0.8);
        line-height: 1.6;
    }

    .history-section {
        max-width: 1000px;
        margin: 0 auto;
        padding: 60px 20px;
        position: relative;
        z-index: 10;
        color: #fff;
    }

    .history-content {
        background: rgba(30, 27, 75, 0.6); /* Azul oscuro transparente */
        border-radius: 30px;
        padding: 50px;
        border: 1px solid rgba(255,255,255,0.1);
    }

    .history-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 30px;
        text-align: center;
        background: linear-gradient(to right, #fff, #4ade80);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .cta-section {
        text-align: center;
        padding: 80px 0;
        position: relative;
        z-index: 10;
    }

    .btn-team {
        background: linear-gradient(135deg, #4ade80 0%, #22c55e 100%);
        color: #0f172a;
        padding: 15px 40px;
        border-radius: 50px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        box-shadow: 0 4px 15px rgba(74, 222, 128, 0.4);
    }

    .btn-team:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(74, 222, 128, 0.6);
    }
</style>
@endpush

@section('content')
    <!-- Hero Nosotros -->
    <section class="nosotros-hero">
        <h1 class="nosotros-title">Nuestra Pasión son las Mascotas</h1>
        <p class="nosotros-subtitle">
            En ZoofiPets, no solo curamos animales; cuidamos a los miembros más queridos de tu familia con tecnología de punta y un corazón enorme.
        </p>
    </section>

    <!-- Misión y Visión -->
    <section class="mission-vision-section">
        <div class="mv-grid">
            <div class="mv-card">
                <div class="mv-icon"><i class="fas fa-heart-pulse"></i></div>
                <h2 class="mv-title">Nuestra Misión</h2>
                <p class="mv-text">
                    Proporcionar atención veterinaria integral y compasiva, utilizando tecnología avanzada para mejorar la calidad de vida de cada mascota que entra por nuestras puertas.
                </p>
            </div>
            <div class="mv-card">
                <div class="mv-icon"><i class="fas fa-eye"></i></div>
                <h2 class="mv-title">Nuestra Visión</h2>
                <p class="mv-text">
                    Ser la clínica veterinaria líder en innovación y cuidado animal, reconocida por nuestra excelencia médica y el trato humano hacia mascotas y propietarios.
                </p>
            </div>
            <div class="mv-card">
                <div class="mv-icon"><i class="fas fa-hand-holding-heart"></i></div>
                <h2 class="mv-title">Nuestros Valores</h2>
                <p class="mv-text">
                    Compasión, Integridad, Innovación y Excelencia. Creemos que cada vida importa y merece ser tratada con el máximo respeto y dedicación.
                </p>
            </div>
        </div>
    </section>

    <!-- Historia -->
    <section class="history-section">
        <div class="history-content">
            <h2 class="history-title">Nuestra Historia</h2>
            <p style="line-height: 1.8; font-size: 1.1rem; text-align: justify;">
                Fundada en 2020, ZoofiPets nació del sueño de un grupo de veterinarios apasionados por transformar la experiencia de cuidado animal. Comenzamos como una pequeña consulta y hoy somos un centro de referencia con tecnología de vanguardia. A lo largo de estos años, hemos crecido gracias a la confianza de miles de familias que nos han permitido cuidar de sus mejores amigos. Nuestra evolución constante nos impulsa a seguir aprendiendo y mejorando cada día.
            </p>
        </div>
    </section>

    <!-- CTA Equipo -->
    <section class="cta-section">
        <h2 style="color: #fff; font-family: 'Montserrat', sans-serif; margin-bottom: 30px;">¿Quiénes cuidan a tu mascota?</h2>
        <a href="{{ route('nosotros.equipo') }}" class="btn-team">Conoce a Nuestro Equipo <i class="fas fa-arrow-right ml-2"></i></a>
    </section>
@endsection
