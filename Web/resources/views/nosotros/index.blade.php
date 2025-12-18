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
    <!-- Custom Styles for Nosotros -->
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
        </div>
    </div>

    <div class="main-content-container">
        
        <!-- Hero Section -->
        <section class="about-hero">
            <div class="about-hero-content">
                <h1 class="about-title">Pasión por el <br><span>Bienestar Animal</span></h1>
                <p class="about-subtitle">En ZoofiPets, no solo cuidamos mascotas; celebramos el vínculo único que compartes con ellas. Somos un equipo dedicado a brindar salud, felicidad y amor en cada visita.</p>
            </div>
        </section>

        <!-- Story Section -->
        <section class="story-section animate-fade-up">
            <div class="story-container">
                <div class="story-visual">
                    <img src="https://images.unsplash.com/photo-1599443015574-be5fe8a05783?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Veterinarian with dog" class="story-img">
                </div>
                <div class="story-content">
                    <h2>Nuestra Historia</h2>
                    <p>Fundada en 2015, ZoofiPets nació de un sueño simple: crear un espacio donde la medicina veterinaria de vanguardia se encuentre con un trato cálido y humano.</p>
                    <p>Lo que comenzó como una pequeña clínica local ha crecido hasta convertirse en un centro integral de bienestar animal, pero nuestra esencia sigue siendo la misma: tratar a cada paciente como si fuera nuestra propia mascota.</p>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="values-section animate-fade-up">
            <div class="section-header">
                <h2>Nuestros Valores</h2>
                <p style="color: rgba(255,255,255,0.7);">Los pilares que guían cada una de nuestras acciones.</p>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-heart"></i></div>
                    <h3>Empatía</h3>
                    <p>Entendemos y compartimos el amor que sientes por tu compañero de vida.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-microscope"></i></div>
                    <h3>Innovación</h3>
                    <p>Utilizamos la última tecnología médica para diagnósticos precisos y tratamientos efectivos.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-hand-holding-heart"></i></div>
                    <h3>Compromiso</h3>
                    <p>Estamos disponibles cuando más nos necesitas, con atención de urgencia 24/7.</p>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section animate-fade-up">
            <div class="section-header">
                <h2>Nuestro Equipo</h2>
                <p style="color: rgba(255,255,255,0.7);">Conoce a los expertos detrás de cada sonrisa saludable.</p>
            </div>
            <div class="team-grid">
                <!-- Team Member 1 -->
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dr. Ana García">
                    </div>
                    <div class="team-info">
                        <h3>Dra. Ana García</h3>
                        <span class="team-role">Directora Médica</span>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dr. Carlos Ruiz">
                    </div>
                    <div class="team-info">
                        <h3>Dr. Carlos Ruiz</h3>
                        <span class="team-role">Cirujano Especialista</span>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dra. Elena Torres">
                    </div>
                    <div class="team-info">
                        <h3>Dra. Elena Torres</h3>
                        <span class="team-role">Dermatóloga Veterinaria</span>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dr. Miguel Ángel">
                    </div>
                    <div class="team-info">
                        <h3>Dr. Miguel Ángel</h3>
                        <span class="team-role">Especialista en Exóticos</span>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer Component -->
    @include('components.footer')

    <!-- Custom Scripts for Nosotros -->
    <script src="{{ asset('js/nosotros/nosotros.js') }}"></script>
</body>
</html>
