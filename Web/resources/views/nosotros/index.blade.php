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
            <div class="shape shape-5"></div>
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
                    <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1599443015574-be5fe8a05783?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                        <div class="slide-overlay">
                            <div class="hero-text centered">
                                <h1 class="animate-title">Pasión por el <br>Bienestar Animal</h1>
                                <p class="animate-subtitle">En ZoofiPets, no solo cuidamos mascotas; celebramos el vínculo único que compartes con ellas.</p>
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

        <!-- Values Section (4 Columns, Standard Header) -->
        <section class="categories-section animate-fade-up-delay" id="valores" style="margin-top: -50px; position: relative; z-index: 10;">
            <div class="section-header text-center">
                <span class="sub-tag">Nuestra Esencia</span>
                <h2>Valores Fundamentales</h2>
                <div class="header-line center"></div>
                <p class="section-subtitle-long mx-auto">
                    Los pilares inquebrantables que sostienen cada decisión médica, cada diagnóstico y cada interacción humana en nuestra clínica.
                </p>
            </div>
            
            <div class="values-grid-row">
                <!-- Card 1 -->
                <div class="product-card-modern glass-card hover-glow">
                    <div class="icon-wrapper-gradient">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="card-content centered-content">
                        <h3 class="text-emphasis">Empatía</h3>
                        <p class="card-description">Tratamos a tu mascota con la misma delicadeza que a la nuestra.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="product-card-modern glass-card hover-glow">
                    <div class="icon-wrapper-gradient">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <div class="card-content centered-content">
                        <h3 class="text-emphasis">Innovación</h3>
                        <p class="card-description">Tecnología de última generación para diagnósticos precisos.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="product-card-modern glass-card hover-glow">
                    <div class="icon-wrapper-gradient">
                        <i class="fas fa-hand-holding-medical"></i>
                    </div>
                    <div class="card-content centered-content">
                        <h3 class="text-emphasis">Compromiso</h3>
                        <p class="card-description">Disponibles cuando más importa, tu confianza es nuestra prioridad.</p>
                    </div>
                </div>
                 <!-- Card 4 -->
                 <div class="product-card-modern glass-card hover-glow">
                    <div class="icon-wrapper-gradient">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-content centered-content">
                        <h3 class="text-emphasis">Comunidad</h3>
                        <p class="card-description">Educación y apoyo para dueños responsables y mascotas felices.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Story Section -->
        <section class="feature-section-wide animate-fade-up-delay" id="nuestra-historia">
            <div class="feature-container">
                <div class="feature-visual-left">
                    <div class="circle-bg"></div>
                    <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Historia de ZoofiPets" class="feature-img">
                    
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
                    <p>ZoofiPets no nació en una sala de juntas, sino en una pequeña consulta con un gran propósito: transformar la experiencia veterinaria. Lo que nos movía entonces, y nos mueve ahora, es la convicción de que las mascotas merecen una atención médica de excelencia.</p>
                    <p>A lo largo de los años, hemos crecido incorporando especialistas y tecnología avanzada, pero nuestro corazón sigue latiendo al ritmo de la pasión por salvar vidas.</p>
                    
                    <div class="benefits-grid dense-grid">
                        <div class="benefit-item"><i class="fas fa-check-double"></i><span>Atención 24/7</span></div>
                        <div class="benefit-item"><i class="fas fa-check-double"></i><span>Hospitalización</span></div>
                        <div class="benefit-item"><i class="fas fa-check-double"></i><span>Laboratorio</span></div>
                        <div class="benefit-item"><i class="fas fa-check-double"></i><span>Cirugía</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section (Enhanced Content & Buttons) -->
        <section class="categories-section animate-fade-up-delay bg-dark-glass">
            <div class="section-header text-center">
                <span class="sub-tag">Excelencia Clínica</span>
                <h2>¿Por qué Elegirnos?</h2>
                <div class="header-line center"></div>
                <p class="section-subtitle-long mx-auto">
                    No solo somos veterinarios, somos guardianes de la salud de tu mejor amigo. Descubre lo que nos hace diferentes y por qué miles de familias confían en nosotros.
                </p>
            </div>
            
            <div class="grid-feature-detailed">
                <!-- Card 1 -->
                <div class="detailed-card">
                    <div class="icon-box-small"><i class="fas fa-user-md"></i></div>
                    <h4>Especialistas Certificados</h4>
                    <p>Contamos con un equipo multidisciplinario con postgrados internacionales. Tu mascota será atendida por verdaderos expertos en cada área.</p>
                    <a href="#" class="btn-white-sm">Conocer especialistas</a>
                </div>
                <!-- Card 2 -->
                <div class="detailed-card">
                    <div class="icon-box-small"><i class="fas fa-flask"></i></div>
                    <h4>Tecnología de Punta</h4>
                    <p>Laboratorio propio y equipos de diagnóstico por imagen de última generación para resultados precisos y tratamientos inmediatos.</p>
                    <a href="#" class="btn-white-sm">Ver equipamiento</a>
                </div>
                <!-- Card 3 -->
                <div class="detailed-card">
                    <div class="icon-box-small"><i class="fas fa-cat"></i></div>
                    <h4>Certificación Cat Friendly</h4>
                    <p>Comprendemos a los felinos. Nuestras instalaciones y manejo están diseñados para reducir su estrés y ansiedad al mínimo.</p>
                    <a href="#" class="btn-white-sm">Área felina</a>
                </div>
                <!-- Card 4 -->
                <div class="detailed-card">
                    <div class="icon-box-small"><i class="fas fa-shield-alt"></i></div>
                    <h4>Protocolos Seguros</h4>
                    <p>Bioseguridad estricta y monitoreo anestésico constante. La seguridad de tu compañero es nuestra regla de oro innegociable.</p>
                    <a href="#" class="btn-white-sm">Nuestros protocolos</a>
                </div>
            </div>
        </section>

        <!-- Team Preview Section -->
        <section class="categories-section" id="equipo">
            <div class="section-header-compact">
                <div class="header-top-row animate-fade-right">
                    <div class="title-group">
                        <h2>Líderes Veterinarios</h2>
                    </div>
                    <div class="header-actions">
                        <a href="{{ route('nosotros.equipo') }}" class="btn-white-card">Ver Todo <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="product-carousel-wrapper animate-fade-up-delay">
                <div class="product-carousel-track" id="teamTrack">
                    <!-- Cards (Already enhanced previously) -->
                    <!-- Re-pasting simplified structure for brevity, logic remains same -->
                    <div class="product-card-modern team-card-enhanced">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dra. Ana García">
                            <div class="card-badge">Directora</div>
                        </div>
                        <div class="card-content">
                            <h3>Dra. Ana García</h3>
                            <p class="role-text">Medicina Interna</p>
                            <div class="quote-box">"La salud de tu mascota es mi propósito."</div>
                            <div class="card-footer centered-footer">
                                <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- (Other team cards...) -->
                    <div class="product-card-modern team-card-enhanced">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dr. Carlos Ruiz">
                            <div class="card-badge">Cirujano</div>
                        </div>
                        <div class="card-content">
                            <h3>Dr. Carlos Ruiz</h3>
                            <p class="role-text">Tejidos Blandos</p>
                            <div class="quote-box">"Precisión y recuperación rápida."</div>
                            <div class="card-footer centered-footer">
                                <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                     <div class="product-card-modern team-card-enhanced">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dra. Elena">
                            <div class="card-badge">Dermo</div>
                        </div>
                        <div class="card-content">
                            <h3>Dra. Elena Torres</h3>
                            <p class="role-text">Dermatología</p>
                            <div class="quote-box">"Piel sana, vida feliz."</div>
                            <div class="card-footer centered-footer">
                                <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                     <div class="product-card-modern team-card-enhanced">
                        <div class="card-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dr. Miguel">
                            <div class="card-badge">Exóticos</div>
                        </div>
                        <div class="card-content">
                            <h3>Dr. Miguel Ángel</h3>
                            <p class="role-text">Especies Especiales</p>
                            <div class="quote-box">"Atención para todos."</div>
                            <div class="card-footer centered-footer">
                                <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wide Promo -->
        <section class="promo-wide-section animate-fade-up-delay" style="background: linear-gradient(135deg, #00b894 0%, #0984e3 100%); margin-bottom: 0;">
            <div class="decor-shape shape-1"></div>
            <div class="decor-shape shape-2"></div>
            <div class="promo-container" style="justify-content: center; text-align: center; flex-direction: column;">
                <h2 style="margin-bottom: 2rem;">¿Listo para visitar ZoofiPets?</h2>
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
