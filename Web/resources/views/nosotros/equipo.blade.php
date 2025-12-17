@extends('layouts.app')

@section('title', 'Nuestro Equipo')

@push('styles')
<style>
    .team-hero {
        padding: 100px 0 50px;
        text-align: center;
        position: relative;
        z-index: 10;
    }
    
    .team-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 3rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 15px;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 50px 20px;
        position: relative;
        z-index: 10;
    }

    .team-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        border-color: #4ade80;
    }

    .member-img-container {
        height: 300px;
        background: #1e1b4b; /* Placeholder color */
        position: relative;
        overflow: hidden;
    }

    .member-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .team-card:hover .member-img {
        transform: scale(1.1);
    }

    .member-info {
        padding: 25px;
        text-align: center;
    }

    .member-name {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 5px;
    }

    .member-role {
        color: #4ade80;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
    }

    .member-bio {
        color: rgba(255,255,255,0.7);
        font-size: 0.9rem;
        line-height: 1.5;
        margin-bottom: 20px;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .social-btn {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: rgba(255,255,255,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-btn:hover {
        background: #4ade80;
        color: #0f172a;
    }
</style>
@endpush

@section('content')
    <section class="team-hero">
        <h1 class="team-title">Conoce a los Expertos</h1>
        <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto;">
            Un equipo multidisciplinario dedicado a la salud y bienestar de tu mascota.
        </p>
    </section>

    <div class="team-grid">
        <!-- Miembro 1 -->
        <div class="team-card">
            <div class="member-img-container">
                <!-- Placeholder image, replace with real asset -->
                <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; background: #2d2a5d;">
                    <i class="fas fa-user-md fa-4x" style="color:rgba(255,255,255,0.2)"></i>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Dr. Carlos Ruiz</h3>
                <div class="member-role">Director Médico</div>
                <p class="member-bio">Especialista en cirugía de tejidos blandos con más de 15 años de experiencia.</p>
                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <!-- Miembro 2 -->
        <div class="team-card">
            <div class="member-img-container">
                <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; background: #2d2a5d;">
                    <i class="fas fa-user-nurse fa-4x" style="color:rgba(255,255,255,0.2)"></i>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Dra. Ana López</h3>
                <div class="member-role">Dermatóloga</div>
                <p class="member-bio">Apasionada por el cuidado de la piel y alergias en mascotas pequeñas.</p>
                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Miembro 3 -->
        <div class="team-card">
            <div class="member-img-container">
                <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; background: #2d2a5d;">
                    <i class="fas fa-user-md fa-4x" style="color:rgba(255,255,255,0.2)"></i>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Dr. Miguel Torres</h3>
                <div class="member-role">Cardiólogo</div>
                <p class="member-bio">Experto en diagnóstico por imagen y salud cardiovascular.</p>
                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Miembro 4 -->
        <div class="team-card">
            <div class="member-img-container">
                <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; background: #2d2a5d;">
                    <i class="fas fa-paw fa-4x" style="color:rgba(255,255,255,0.2)"></i>
                </div>
            </div>
            <div class="member-info">
                <h3 class="member-name">Lic. Sofia Méndez</h3>
                <div class="member-role">Etóloga</div>
                <p class="member-bio">Especialista en comportamiento animal y adiestramiento positivo.</p>
                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
