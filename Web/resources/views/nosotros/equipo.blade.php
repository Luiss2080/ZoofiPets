@extends('layouts.app')

@section('title', 'Nuestro Equipo')

@push('styles')
<!-- AOS - Animate On Scroll -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    .team-hero {
        padding: 80px 0 40px;
        text-align: center;
        position: relative;
        z-index: 10;
        /* Background removed to show global animated background */
        background: transparent;
    }
    
    .team-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 2.8rem;
        font-weight: 900;
        color: #fff;
        margin-bottom: 15px;
        background: linear-gradient(135deg, #fff 0%, #4ade80 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: fadeInDown 0.8s ease;
    }

    .team-subtitle {
        color: rgba(255,255,255,0.85);
        max-width: 650px;
        margin: 0 auto 30px;
        font-size: 1.05rem;
        line-height: 1.5;
        animation: fadeInUp 0.8s ease 0.2s both;
    }

    /* Filtros de Especialidad */
    .filter-container {
        display: flex;
        justify-content: center;
        gap: 12px;
        flex-wrap: wrap;
        margin-bottom: 35px;
        padding: 0 20px;
        position: relative;
        z-index: 10;
        animation: fadeInUp 0.8s ease 0.4s both;
    }

    .filter-btn {
        font-family: 'Inter', sans-serif;
        padding: 10px 22px;
        border: 2px solid rgba(74, 222, 128, 0.3);
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        color: rgba(255,255,255,0.8);
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .filter-btn:hover {
        border-color: #4ade80;
        background: rgba(74, 222, 128, 0.1);
        color: #4ade80;
        transform: translateY(-2px);
    }

    .filter-btn.active {
        background: linear-gradient(135deg, #4ade80 0%, #22c55e 100%);
        color: #0f172a;
        border-color: #4ade80;
        box-shadow: 0 5px 20px rgba(74, 222, 128, 0.4);
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
        max-width: 1300px;
        margin: 0 auto;
        padding: 30px 20px 60px;
        position: relative;
        z-index: 10;
    }

    .team-card {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.1) 100%);
        backdrop-filter: blur(15px);
        border-radius: 25px;
        overflow: hidden;
        border: 2px solid rgba(255, 255, 255, 0.1);
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
    }

    .team-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(74, 222, 128, 0.2) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
        z-index: 1;
    }

    .team-card:hover::before {
        opacity: 1;
    }

    .team-card:hover {
        transform: translateY(-15px) scale(1.03);
        box-shadow: 0 25px 50px rgba(0,0,0,0.4), 0 0 30px rgba(74, 222, 128, 0.3);
        border-color: #4ade80;
    }

    .member-img-container {
        height: 280px;
        background: linear-gradient(135deg, #1e1b4b 0%, #2d2a5d 100%);
        position: relative;
        overflow: hidden;
    }

    .member-img-container::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 80px;
        background: linear-gradient(to top, rgba(15, 23, 42, 0.9) 0%, transparent 100%);
        z-index: 1;
    }

    .member-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .team-card:hover .member-img {
        transform: scale(1.15) rotate(2deg);
    }

    .specialty-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #4ade80 0%, #22c55e 100%);
        color: #0f172a;
        padding: 8px 16px;
        border-radius: 20px;
        font-family: 'Inter', sans-serif;
        font-weight: 700;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 5px 15px rgba(74, 222, 128, 0.4);
        z-index: 2;
    }

    .member-info {
        padding: 25px 20px;
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .member-name {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.35rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 6px;
        transition: color 0.3s ease;
    }

    .team-card:hover .member-name {
        color: #4ade80;
    }

    .member-role {
        color: #4ade80;
        font-family: 'Inter', sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }

    .member-bio {
        color: rgba(255,255,255,0.8);
        font-size: 0.88rem;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .member-stats {
        display: flex;
        justify-content: space-around;
        margin-bottom: 18px;
        padding-top: 15px;
        border-top: 1px solid rgba(255,255,255,0.1);
    }

    .stat {
        text-align: center;
    }

    .stat-value {
        display: block;
        font-family: 'Montserrat', sans-serif;
        font-size: 1.5rem;
        font-weight: 800;
        color: #4ade80;
        margin-bottom: 5px;
    }

    .stat-label {
        font-size: 0.75rem;
        color: rgba(255,255,255,0.6);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 12px;
    }

    .social-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255,255,255,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1rem;
    }

    .social-btn:hover {
        background: #4ade80;
        color: #0f172a;
        transform: translateY(-3px) scale(1.1);
        box-shadow: 0 5px 15px rgba(74, 222, 128, 0.4);
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

    /* Responsive */
    @media (max-width: 768px) {
        .team-title {
            font-size: 2.5rem;
        }

        .filter-container {
            gap: 10px;
        }

        .filter-btn {
            padding: 10px 20px;
            font-size: 0.8rem;
        }

        .team-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .member-img-container {
            height: 300px;
        }
    }
</style>
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
