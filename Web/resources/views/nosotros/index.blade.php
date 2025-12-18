<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nosotros - {{ config('app.name', 'ZoofiPets') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/layouts/loading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    <!-- Reusing Welcome Styles for Consistency -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- Custom Styles for Nosotros Overrides -->
    <link rel="stylesheet" href="{{ asset('css/nosotros/nosotros.css') }}">
</head>
<body>

    <!-- Header Component -->
    @include('components.header')

    <!-- Background Animado -->
    <div class="welcome-background">
        <div class="bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
            <div class="shape shape-5"></div> <!-- Extra shape for density -->
        </div>
        <div class="bg-grid"></div>
        
        <div class="vet-elements">
            <div class="floating-items">
                <div class="paw-print paw-1"><div class="pad large"></div><div class="pad small s-1"></div><div class="pad small s-2"></div><div class="pad small s-3"></div></div>
                <div class="medical-cross cross-1"></div>
                <div class="health-particle hp-1"></div>
                <div class="health-particle hp-2"></div>
                <div class="health-particle hp-3"></div>
            </div>
        </div>
    </div>

    <div class="main-content-container">
        
        <!-- Hero Carousel -->
        <section class="hero-carousel-section full-width-carousel">
            <div class="carousel-container">
                <div class="carousel-track">
                    <!-- Slide 1 -->
                    <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1599443015574-be5fe8a05783?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                        <div class="slide-overlay">
                            <div class="hero-text centered">
                                <h1 class="animate-title">Pasión por el <br>Bienestar Animal</h1>
                                <p class="animate-subtitle">En ZoofiPets, no solo cuidamos mascotas; celebramos el vínculo único que compartes con ellas. Tu tranquilidad es nuestra misión.</p>
                                <div class="hero-actions animate-fade-up">
                                    <a href="#nuestra-historia" class="btn btn-primary">Conoce nuestra historia</a>
                                    <a href="#valores" class="btn btn-outline">Nuestros Valores</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section (Refined: No gray placeholders, more vibrant) -->
        <section class="categories-section animate-fade-up-delay" id="valores" style="margin-top: -50px; position: relative; z-index: 10;">
            <div class="section-header-compact text-center">
                <h2>Nuestros Valores Fundamentales</h2>
                <p class="section-subtitle-long mx-auto">
                    Los pilares que sostienen cada decisión médica y cada interacción humana en nuestra clínica.
                </p>
            </div>
            
            <div class="services-grid">
                <!-- Card 1 -->
                <div class="product-card-modern glass-card hover-glow">
                    <div class="icon-wrapper-gradient">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="card-content centered-content">
                        <h3 class="text-emphasis">Empatía Profunda</h3>
                        <p class="card-description">Entendemos el amor incondicional. Tratamos a tu mascota con la misma delicadeza que trataríamos a la nuestra.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="product-card-modern glass-card hover-glow">
                    <div class="icon-wrapper-gradient">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <div class="card-content centered-content">
                        <h3 class="text-emphasis">Innovación Científica</h3>
                        <p class="card-description">Buscamos incansablemente las mejores soluciones médicas, invirtiendo en tecnología de última generación.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="product-card-modern glass-card hover-glow">
                    <div class="icon-wrapper-gradient">
                        <i class="fas fa-hand-holding-medical"></i> <!-- Improved Icon -->
                    </div>
                    <div class="card-content centered-content">
                        <h3 class="text-emphasis">Compromiso Total</h3>
                        <p class="card-description">Estamos disponibles cuando más importa. Tu confianza es nuestra responsabilidad más sagrada.</p>
                    </div>
                </div>
                 <!-- Card 4 (Added for symmetry/density) -->
                 <div class="product-card-modern glass-card hover-glow">
                    <div class="icon-wrapper-gradient">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-content centered-content">
                        <h3 class="text-emphasis">Comunidad</h3>
                        <p class="card-description">Fomentamos una comunidad de dueños responsables y mascotas felices a través de la educación.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Story Section with Timeline (Enriched) -->
        <section class="feature-section-wide animate-fade-up-delay" id="nuestra-historia">
            <div class="feature-container">
                <div class="feature-visual-left">
                    <div class="circle-bg"></div>
                    <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Historia de ZoofiPets" class="feature-img">
                    
                    <!-- Timeline Component -->
                    <div class="story-timeline">
                        <div class="timeline-item">
                            <span class="year">2015</span>
                            <span class="milestone">Fundación</span>
                        </div>
                        <div class="timeline-line"></div>
                        <div class="timeline-item">
                            <span class="year">2018</span>
                            <span class="milestone">Expansión</span>
                        </div>
                        <div class="timeline-line"></div>
                        <div class="timeline-item">
                            <span class="year">2024</span>
                            <span class="milestone">Líderes</span>
                        </div>
                    </div>
                </div>
                
                <div class="feature-content-right">
                    <div class="feature-header">
                        <span class="sub-tag">Nuestra Trayectoria</span>
                        <h2>De un Sueño a una <br>Familia Veterinaria</h2>
                    </div>
                    <p>ZoofiPets no nació en una sala de juntas, sino en una pequeña consulta con un gran propósito: transformar la experiencia veterinaria. Lo que nos movía entonces, y nos mueve ahora, es la convicción de que las mascotas merecen una atención médica al mismo nivel que los humanos.</p>
                    <p>A lo largo de los años, hemos crecido en tamaño y capacidad, incorporando especialistas, quirófanos avanzados y laboratorio propio. Pero nuestro corazón sigue latiendo al mismo ritmo: el de la pasión por salvar vidas y regalar salud.</p>
                    
                    <div class="benefits-grid dense-grid">
                        <div class="benefit-item">
                            <i class="fas fa-check-double"></i>
                            <span>Atención de Urgencia 24/7</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-double"></i>
                            <span>Hospitalización Monitorizada</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-double"></i>
                            <span>Laboratorio Clínico In-House</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-double"></i>
                            <span>Cirugía de Mínima Invasión</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NEW: Why Choose Us Section (Grid for Density) -->
        <section class="categories-section animate-fade-up-delay" style="background: rgba(0,0,0,0.1); padding: 50px; border-radius: 30px;">
            <div class="section-header-row text-center" style="display: block;">
                <h2>¿Por qué Elegirnos?</h2>
                <p style="max-width: 600px; margin: 10px auto; color: rgba(255,255,255,0.7);">La diferencia está en los detalles y en la excelencia clínica.</p>
            </div>
            
            <div class="grid-feature-detailed">
                <div class="detailed-card">
                    <div class="icon-box-small"><i class="fas fa-user-md"></i></div>
                    <h4>Especialistas Certificados</h4>
                    <p>Nuestro equipo cuenta con postgrados y certificaciones internacionales en diversas especialidades.</p>
                </div>
                <div class="detailed-card">
                    <div class="icon-box-small"><i class="fas fa-flask"></i></div>
                    <h4>Diagnóstico Preciso</h4>
                    <p>Resultados en minutos gracias a nuestro laboratorio completo, permitiendo tratamientos inmediatos.</p>
                </div>
                <div class="detailed-card">
                    <div class="icon-box-small"><i class="fas fa-cat"></i></div>
                    <h4>Cat Friendly</h4>
                    <p>Espacios y protocolos diseñados específicamente para reducir el estrés en nuestros pacientes felinos.</p>
                </div>
                <div class="detailed-card">
                    <div class="icon-box-small"><i class="fas fa-shield-alt"></i></div>
                    <h4>Seguridad Garantizada</h4>
                    <p>Protocolos estrictos de bioseguridad y anestesia monitorizada para la máxima seguridad.</p>
                </div>
            </div>
        </section>

        <!-- Team Preview Section (Enhanced) -->
        <section class="categories-section" id="equipo">
            <div class="section-header-compact">
                <div class="header-top-row animate-fade-right">
                    <div class="title-group">
                        <h2>Líderes en Medicina Veterinaria</h2>
                    </div>
                    <div class="header-actions">
                        <a href="{{ route('nosotros.equipo') }}" class="btn-white-card">Conocer a todo el equipo <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="product-carousel-wrapper animate-fade-up-delay">
                <div class="product-carousel-track" id="teamTrack">
                    <!-- Team Member 1 -->
                    <div class="product-card-modern team-card-enhanced">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dra. Ana García">
                            <div class="card-badge">Directora</div>
                        </div>
                        <div class="card-content">
                            <h3>Dra. Ana García</h3>
                            <p class="role-text">Medicina Interna</p>
                            <div class="quote-box">"La salud de tu mascota es mi propósito de vida."</div>
                            <div class="card-footer centered-footer">
                                <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="product-card-modern team-card-enhanced">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dr. Carlos Ruiz">
                            <div class="card-badge">Cirujano</div>
                        </div>
                        <div class="card-content">
                            <h3>Dr. Carlos Ruiz</h3>
                            <p class="role-text">Tejidos Blandos & Ortopedia</p>
                            <div class="quote-box">"Precisión quirúrgica, recuperación rápida."</div>
                            <div class="card-footer centered-footer">
                                <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="product-card-modern team-card-enhanced">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dra. Elena Torres">
                            <div class="card-badge">Dermo</div>
                        </div>
                        <div class="card-content">
                            <h3>Dra. Elena Torres</h3>
                            <p class="role-text">Dermatología</p>
                            <div class="quote-box">"Piel sana, mascota feliz."</div>
                            <div class="card-footer centered-footer">
                                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 4 -->
                    <div class="product-card-modern team-card-enhanced">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dr. Miguel Ángel">
                            <div class="card-badge">Exóticos</div>
                        </div>
                        <div class="card-content">
                            <h3>Dr. Miguel Ángel</h3>
                            <p class="role-text">Especies No Convencionales</p>
                            <div class="quote-box">"Cuidando de todos, grandes y pequeños."</div>
                            <div class="card-footer centered-footer">
                                <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wide Promo (Stats) - Enhanced Background -->
        <section class="promo-wide-section animate-fade-up-delay" style="background: linear-gradient(135deg, #00b894 0%, #0984e3 100%); margin-bottom: 0;">
            <div class="decor-shape shape-1"></div>
            <div class="decor-shape shape-2"></div>
            <div class="promo-container" style="justify-content: center; text-align: center; flex-direction: column;">
                <h2 style="margin-bottom: 2rem;">¿Listo para visitar ZoofiPets?</h2>
                <p style="margin-bottom: 3rem; font-size: 1.2rem;">Tu mejor amigo merece lo mejor. Agenda tu cita hoy mismo.</p>
                
                <a href="#" class="btn btn-white-card" style="padding: 15px 40px; font-size: 1.2rem;">Reservar Cita Ahora <i class="fas fa-calendar-alt"></i></a>
            </div>
        </section>

    </div>

    <!-- Footer Component -->
    @include('components.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/pages/welcome.js') }}"></script>
    <script src="{{ asset('js/nosotros/nosotros.js') }}"></script>
</body>
</html>
