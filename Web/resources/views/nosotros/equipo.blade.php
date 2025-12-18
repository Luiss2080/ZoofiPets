@extends('layouts.app')

@section('title', 'Nuestro Equipo')

@push('styles')
    <!-- Reusing System Styles -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- INDEPENDENT CSS FOR THIS VIEW -->
    <link rel="stylesheet" href="{{ asset('css/nosotros/equipo.css') }}">
@endpush

@section('content')
    <!-- Hero Section (Strict Home Replication) -->
    <section class="hero-carousel-section team-hero full-width-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1629909613654-28e377c37b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <span class="sub-tag" style="margin-bottom: 20px; display: block;">Profesionales de Confianza</span>
                            <h1 class="animate-title">Expertos en <br>Salud Animal</h1>
                            <p class="animate-subtitle">Conoce a las personas detrás de cada diagnóstico, cada cirugía y cada recuperación exitosa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-content-container">
        
        <!-- Clean Ordered Content -->
        <section class="categories-section animate-fade-up">
            <div class="section-header text-center">
                <h2>Nuestro Equipo</h2>
                <div class="header-line center"></div>
            </div>

            <!-- Minimalist Tabs (Home Style) -->
            <div class="team-tabs-container">
                <button class="tab-btn active" data-filter="all">Todos</button>
                <button class="tab-btn" data-filter="cirugia">Cirugía</button>
                <button class="tab-btn" data-filter="medicina">Medicina General</button>
                <button class="tab-btn" data-filter="especialidades">Especialidades</button>
            </div>

            <!-- Clean 4-Col Grid -->
            <div class="team-grid-clean" id="teamGrid">
                <!-- Member 1 -->
                <div class="team-card-minimal" data-category="cirugia">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=400&fit=crop" class="card-img-top" alt="Dr. Carlos">
                    <div class="card-body-clean">
                        <h3>Dr. Carlos Ruiz</h3>
                        <span class="role">Director & Cirujano</span>
                        <p style="font-size: 0.9rem; color: #ccc;">Especialista en ortopedia y tejidos blandos con 15 años de experiencia.</p>
                        <div class="social-row">
                            <a href="#" class="social-mini"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-mini"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Member 2 -->
                <div class="team-card-minimal" data-category="medicina">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop" class="card-img-top" alt="Dra. Ana">
                    <div class="card-body-clean">
                        <h3>Dra. Ana García</h3>
                        <span class="role">Medicina Interna</span>
                        <p style="font-size: 0.9rem; color: #ccc;">Experta en diagnóstico clínico y manejo de pacientes crónicos.</p>
                        <div class="social-row">
                            <a href="#" class="social-mini"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="team-card-minimal" data-category="especialidades">
                    <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=400&h=400&fit=crop" class="card-img-top" alt="Dr. Miguel">
                    <div class="card-body-clean">
                        <h3>Dr. Miguel Ángel</h3>
                        <span class="role">Exóticos</span>
                        <p style="font-size: 0.9rem; color: #ccc;">Atención especializada para aves, reptiles y pequeños mamíferos.</p>
                        <div class="social-row">
                            <a href="#" class="social-mini"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Member 4 -->
                <div class="team-card-minimal" data-category="medicina">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=400&fit=crop" class="card-img-top" alt="Dr. John">
                    <div class="card-body-clean">
                        <h3>Dr. John Doe</h3>
                        <span class="role">Urgencias</span>
                        <p style="font-size: 0.9rem; color: #ccc;">Disponible 24/7 para el cuidado crítico de tu mascota.</p>
                         <div class="social-row">
                            <a href="#" class="social-mini"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                 <!-- Member 5 -->
                 <div class="team-card-minimal" data-category="especialidades">
                    <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=400&fit=crop" class="card-img-top" alt="Dra. Laura">
                    <div class="card-body-clean">
                        <h3>Dra. Laura P.</h3>
                        <span class="role">Dermatología</span>
                        <p style="font-size: 0.9rem; color: #ccc;">Soluciones avanzadas para alergias y problemas cutáneos.</p>
                         <div class="social-row">
                            <a href="#" class="social-mini"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                 <!-- Member 6 -->
                 <div class="team-card-minimal" data-category="medicina">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop" class="card-img-top" alt="Lic. Sofia">
                    <div class="card-body-clean">
                        <h3>Lic. Sofia M.</h3>
                        <span class="role">Etología</span>
                        <p style="font-size: 0.9rem; color: #ccc;">Mejorando la conducta y el bienestar emocional.</p>
                         <div class="social-row">
                            <a href="#" class="social-mini"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Recruitment Promo (Strict Home Style - Wide Banner) -->
        <section class="recruitment-promo animate-fade-up">
            <div class="promo-left">
                <span class="sub-tag" style="color: #fff; opacity: 0.8;">Carreras</span>
                <h2>Únete a la <br>Manada ZoofiPets</h2>
                <p style="margin-bottom: 30px; font-size: 1.1rem; opacity: 0.9;">
                    Buscamos veterinarios y asistentes apasionados que quieran marcar la diferencia. Ofrecemos crecimiento profesional y un ambiente de primer nivel.
                </p>
                <a href="#" class="btn btn-white-card" style="color: #6c5ce7;">Ver Vacantes <i class="fas fa-arrow-right"></i></a>
            </div>
            <img src="https://images.unsplash.com/photo-1576201836106-db1758fd1c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Team" class="promo-right-img">
        </section>

    </div>

@endsection

@push('scripts')
<script src="{{ asset('js/pages/welcome.js') }}"></script>
<script>
    // Clean Filter Logic (No Animations clutter)
    const tabs = document.querySelectorAll('.tab-btn');
    const cards = document.querySelectorAll('.team-card-minimal');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Active State
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const filter = tab.getAttribute('data-filter');

            // Filtering
            cards.forEach(card => {
                if(filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush
