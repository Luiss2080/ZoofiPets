@extends('layouts.app')

@section('title', 'Testimonios')

@push('styles')
    <!-- Reusing System Styles -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- INDEPENDENT CSS FOR THIS VIEW -->
    <link rel="stylesheet" href="{{ asset('css/nosotros/testimonios.css') }}">
@endpush

@section('content')
    <!-- Hero Section (Strict Home Replication) -->
    <section class="hero-carousel-section testimonials-hero full-width-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1450778869180-41d0601e046e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <span class="sub-tag" style="margin-bottom: 20px; display: block;">Voces de Confianza</span>
                            <h1 class="animate-title">Lo Que Dicen <br>Nuestros Clientes</h1>
                            <p class="animate-subtitle">Historias reales de familias que confían en nosotros para el cuidado de sus mejores amigos.</p>
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
                <h2>Testimonios</h2>
                <div class="header-line center"></div>
            </div>

            <!-- Minimalist Tabs (Home Style) -->
            <div class="testimonial-tabs-container">
                <button class="tab-btn active" data-filter="all">Todos</button>
                <button class="tab-btn" data-filter="consultas">Consultas</button>
                <button class="tab-btn" data-filter="cirugias">Cirugías</button>
                <button class="tab-btn" data-filter="urgencias">Urgencias</button>
            </div>

            <!-- Clean 4-Col Grid -->
            <div class="testimonial-grid-clean" id="testimonialGrid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card-minimal" data-category="consultas">
                    <div class="card-header-clean">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop" class="client-avatar" alt="María López">
                        <div class="client-info">
                            <h3>María López</h3>
                            <span class="pet-name">Dueña de Max</span>
                        </div>
                    </div>
                    <div class="card-body-clean">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Excelente atención y profesionalismo. Mi perro Max fue atendido con mucho cariño y dedicación. Totalmente recomendado."</p>
                        <span class="service-tag">Consulta General</span>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card-minimal" data-category="cirugias">
                    <div class="card-header-clean">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop" class="client-avatar" alt="Carlos Ruiz">
                        <div class="client-info">
                            <h3>Carlos Ruiz</h3>
                            <span class="pet-name">Dueño de Luna</span>
                        </div>
                    </div>
                    <div class="card-body-clean">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Mi gata Luna tuvo una cirugía compleja y la recuperación fue exitosa gracias al equipo de ZoofiPets. ¡Increíble servicio!"</p>
                        <span class="service-tag">Cirugía</span>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card-minimal" data-category="urgencias">
                    <div class="card-header-clean">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop" class="client-avatar" alt="Ana García">
                        <div class="client-info">
                            <h3>Ana García</h3>
                            <span class="pet-name">Dueña de Rocky</span>
                        </div>
                    </div>
                    <div class="card-body-clean">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"En una emergencia nocturna, el equipo respondió inmediatamente y salvaron a Rocky. Estoy eternamente agradecida."</p>
                        <span class="service-tag">Urgencias 24h</span>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card-minimal" data-category="consultas">
                    <div class="card-header-clean">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop" class="client-avatar" alt="Pedro Martínez">
                        <div class="client-info">
                            <h3>Pedro Martínez</h3>
                            <span class="pet-name">Dueño de Toby</span>
                        </div>
                    </div>
                    <div class="card-body-clean">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"El Dr. Carlos es un excelente profesional. Toby siempre sale feliz de sus consultas. ¡Gracias por cuidar tan bien de él!"</p>
                        <span class="service-tag">Consulta Rutinaria</span>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="testimonial-card-minimal" data-category="cirugias">
                    <div class="card-header-clean">
                        <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=100&h=100&fit=crop" class="client-avatar" alt="Laura Fernández">
                        <div class="client-info">
                            <h3>Laura Fernández</h3>
                            <span class="pet-name">Dueña de Michi</span>
                        </div>
                    </div>
                    <div class="card-body-clean">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"La esterilización de Michi fue un proceso sin complicaciones. El seguimiento post-operatorio fue excepcional."</p>
                        <span class="service-tag">Cirugía Menor</span>
                    </div>
                </div>

                <!-- Testimonial 6 -->
                <div class="testimonial-card-minimal" data-category="consultas">
                    <div class="card-header-clean">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&h=100&fit=crop" class="client-avatar" alt="Miguel Ángel">
                        <div class="client-info">
                            <h3>Miguel Ángel</h3>
                            <span class="pet-name">Dueño de Thor</span>
                        </div>
                    </div>
                    <div class="card-body-clean">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Las instalaciones son de primera calidad y el trato es muy humano. Thor ama ir a ZoofiPets para sus chequeos."</p>
                        <span class="service-tag">Chequeo Anual</span>
                    </div>
                </div>

                <!-- Testimonial 7 -->
                <div class="testimonial-card-minimal" data-category="urgencias">
                    <div class="card-header-clean">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100&h=100&fit=crop" class="client-avatar" alt="Sofía Morales">
                        <div class="client-info">
                            <h3>Sofía Morales</h3>
                            <span class="pet-name">Dueña de Bella</span>
                        </div>
                    </div>
                    <div class="card-body-clean">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Bella tuvo una intoxicación y el equipo actuó rápidamente. Su profesionalismo y empatía fueron reconfortantes en un momento difícil."</p>
                        <span class="service-tag">Emergencia</span>
                    </div>
                </div>

                <!-- Testimonial 8 -->
                <div class="testimonial-card-minimal" data-category="consultas">
                    <div class="card-header-clean">
                        <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?w=100&h=100&fit=crop" class="client-avatar" alt="Roberto Silva">
                        <div class="client-info">
                            <h3>Roberto Silva</h3>
                            <span class="pet-name">Dueño de Zeus</span>
                        </div>
                    </div>
                    <div class="card-body-clean">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Llevo a Zeus desde que era cachorro. El equipo conoce su historial perfectamente y siempre nos brindan la mejor atención."</p>
                        <span class="service-tag">Cliente Frecuente</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- CTA Promo (Strict Home Style - Wide Banner) -->
        <section class="cta-promo animate-fade-up">
            <div class="promo-left">
                <span class="sub-tag" style="color: #fff; opacity: 0.8;">Comparte Tu Historia</span>
                <h2>¿Quieres Compartir <br>Tu Experiencia?</h2>
                <p style="margin-bottom: 30px; font-size: 1.1rem; opacity: 0.9;">
                    Tu opinión nos ayuda a mejorar cada día. Comparte tu testimonio y ayuda a otras familias a tomar la mejor decisión para sus mascotas.
                </p>
                <a href="{{ route('contacto.index') }}" class="btn btn-white-card" style="color: #0984e3;">Enviar Testimonio <i class="fas fa-comments"></i></a>
            </div>
            <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Mascotas Felices" class="promo-right-img">
        </section>

    </div>

@endsection

@push('scripts')
<script src="{{ asset('js/pages/welcome.js') }}"></script>
<script>
    // Clean Filter Logic (No Animations clutter)
    const tabs = document.querySelectorAll('.tab-btn');
    const cards = document.querySelectorAll('.testimonial-card-minimal');

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
