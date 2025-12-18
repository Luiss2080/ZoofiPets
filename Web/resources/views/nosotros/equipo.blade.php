@extends('layouts.app')

@section('title', 'Nuestro Equipo')

@push('styles')
<!-- AOS - Animate On Scroll -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@endpush

@section('content')
    <section class="team-hero">
        <h1 class="team-title">Conoce a los Expertos</h1>
        <p class="team-subtitle">
            Un equipo multidisciplinario de profesionales apasionados y altamente capacitados, dedicados a la salud y bienestar de tu mascota.
        </p>
    </section>

    <!-- Filtros por Especialidad -->
    <div class="filter-container">
        <button class="filter-btn active" data-filter="all">
            <i class="fas fa-globe"></i> Todos
        </button>
        <button class="filter-btn" data-filter="cirugia">
            <i class="fas fa-stethoscope"></i> Cirugía
        </button>
        <button class="filter-btn" data-filter="dermatologia">
            <i class="fas fa-syringe"></i> Dermatología
        </button>
        <button class="filter-btn" data-filter="cardiologia">
            <i class="fas fa-heartbeat"></i> Cardiología
        </button>
        <button class="filter-btn" data-filter="etologia">
            <i class="fas fa-paw"></i> Etología
        </button>
        <button class="filter-btn" data-filter="nutricion">
            <i class="fas fa-utensils"></i> Nutrición
        </button>
    </div>

    <div class="team-grid" id="teamGrid">
        <!-- Miembro 1 -->
        <div class="team-card" data-category="cirugia" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img-container">
                <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=400&fit=crop" 
                     alt="Dr. Carlos Ruiz" class="member-img">
                <span class="specialty-badge">Cirugía</span>
            </div>
            <div class="member-info">
                <h3 class="member-name">Dr. Carlos Ruiz</h3>
                <div class="member-role">
                    <i class="fas fa-user-md"></i> Director Médico
                </div>
                <p class="member-bio">Especialista en cirugía de tejidos blandos con más de 15 años de experiencia. Certificado en técnicas laparoscópicas avanzadas.</p>
                <div class="member-stats">
                    <div class="stat">
                        <span class="stat-value">15+</span>
                        <span class="stat-label">Años</span>
                    </div>
                    <div class="stat">
                        <span class="stat-value">2K+</span>
                        <span class="stat-label">Cirugías</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-btn"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Miembro 2 -->
        <div class="team-card" data-category="dermatologia" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img-container">
                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop" 
                     alt="Dra. Ana López" class="member-img">
                <span class="specialty-badge">Dermatología</span>
            </div>
            <div class="member-info">
                <h3 class="member-name">Dra. Ana López</h3>
                <div class="member-role">
                    <i class="fas fa-microscope"></i> Dermatóloga
                </div>
                <p class="member-bio">Apasionada por el cuidado de la piel y alergias. Especialización en dermatología veterinaria avanzada en Universidad de Cornell.</p>
                <div class="member-stats">
                    <div class="stat">
                        <span class="stat-value">10+</span>
                        <span class="stat-label">Años</span>
                    </div>
                    <div class="stat">
                        <span class="stat-value">3K+</span>
                        <span class="stat-label">Pacientes</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-btn"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Miembro 3 -->
        <div class="team-card" data-category="cardiologia" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img-container">
                <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=400&fit=crop" 
                     alt="Dr. Miguel Torres" class="member-img">
                <span class="specialty-badge">Cardiología</span>
            </div>
            <div class="member-info">
                <h3 class="member-name">Dr. Miguel Torres</h3>
                <div class="member-role">
                    <i class="fas fa-heartbeat"></i> Cardiólogo
                </div>
                <p class="member-bio">Experto en diagnóstico por imagen cardiovascular y ecocardiografía. Certificación internacional en medicina interna.</p>
                <div class="member-stats">
                    <div class="stat">
                        <span class="stat-value">12+</span>
                        <span class="stat-label">Años</span>
                    </div>
                    <div class="stat">
                        <span class="stat-value">1.5K+</span>
                        <span class="stat-label">Ecocardiogramas</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Miembro 4 -->
        <div class="team-card" data-category="etologia" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img-container">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop" 
                     alt="Lic. Sofia Méndez" class="member-img">
                <span class="specialty-badge">Etología</span>
            </div>
            <div class="member-info">
                <h3 class="member-name">Lic. Sofia Méndez</h3>
                <div class="member-role">
                    <i class="fas fa-paw"></i> Etóloga Clínica
                </div>
                <p class="member-bio">Especialista en comportamiento animal y adiestramiento positivo. Máster en Etología Aplicada y Bienestar Animal.</p>
                <div class="member-stats">
                    <div class="stat">
                        <span class="stat-value">8+</span>
                        <span class="stat-label">Años</span>
                    </div>
                    <div class="stat">
                        <span class="stat-value">800+</span>
                        <span class="stat-label">Casos</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-btn"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Miembro 5 -->
        <div class="team-card" data-category="cirugia" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img-container">
                <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=400&fit=crop" 
                     alt="Dra. Laura Fernández" class="member-img">
                <span class="specialty-badge">Cirugía</span>
            </div>
            <div class="member-info">
                <h3 class="member-name">Dra. Laura Fernández</h3>
                <div class="member-role">
                    <i class="fas fa-user-md"></i> Cirujana Ortopédica
                </div>
                <p class="member-bio">Especialista en cirugía ortopédica y traumatología veterinaria. Pionera en técnicas de osteosíntesis mínimamente invasivas.</p>
                <div class="member-stats">
                    <div class="stat">
                        <span class="stat-value">9+</span>
                        <span class="stat-label">Años</span>
                    </div>
                    <div class="stat">
                        <span class="stat-value">1.2K+</span>
                        <span class="stat-label">Cirugías</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-btn"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Miembro 6 -->
        <div class="team-card" data-category="nutricion" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img-container">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=400&h=400&fit=crop" 
                     alt="Lic. Daniela Morales" class="member-img">
                <span class="specialty-badge">Nutrición</span>
            </div>
            <div class="member-info">
                <h3 class="member-name">Lic. Daniela Morales</h3>
                <div class="member-role">
                    <i class="fas fa-apple-alt"></i> Nutricionista Veterinaria
                </div>
                <p class="member-bio">Experta en nutrición clínica y dietética animal. Especialización en alergias alimentarias y dietas terapéuticas personalizadas.</p>
                <div class="member-stats">
                    <div class="stat">
                        <span class="stat-value">7+</span>
                        <span class="stat-label">Años</span>
                    </div>
                    <div class="stat">
                        <span class="stat-value">900+</span>
                        <span class="stat-label">Planes</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<!-- AOS - Animate On Scroll -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // Inicializar AOS
    AOS.init({
        duration: 800,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic'
    });

    // Sistema de Filtros
    const filterButtons = document.querySelectorAll('.filter-btn');
    const teamCards = document.querySelectorAll('.team-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            
            // Actualizar botones activos
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            // Filtrar tarjetas
            teamCards.forEach((card, index) => {
                const category = card.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, index * 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Animación de entrada inicial
    teamCards.forEach(card => {
        card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
    });
</script>
@endpush
