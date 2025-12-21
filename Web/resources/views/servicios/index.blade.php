@extends('layouts.app')

@section('title', 'Nuestros Servicios')

@push('styles')
    <!-- Reusing System Styles -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- INDEPENDENT CSS FOR THIS VIEW -->
    <link rel="stylesheet" href="{{ asset('css/servicios/servicios.css') }}">
@endpush

@section('content')
    <!-- Hero Carousel -->
    <section class="hero-carousel-section full-width-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <!-- Slide 1 -->
                <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1576201836106-db1758fd1c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <span class="sub-tag" style="margin-bottom: 20px; display: block;">Cuidado Profesional</span>
                            <h1 class="animate-title">Servicios Veterinarios <br>de Excelencia</h1>
                            <p class="animate-subtitle">Tecnología de punta y atención personalizada para garantizar la salud y bienestar de tu mascota.</p>
                            <div class="hero-actions animate-fade-up">
                                <a href="{{ route('citas.solicitud.index') }}" class="btn btn-primary">Agendar Cita</a>
                                <a href="{{ route('servicios.emergencias.index') }}" class="btn btn-outline">Urgencias 24/7</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-slide" style="background-image: url('https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <h1 class="animate-title">Cirugía Especializada <br>y Cuidados Críticos</h1>
                            <p class="animate-subtitle">Quirófanos equipados con la última tecnología y cirujanos altamente capacitados.</p>
                            <div class="hero-actions animate-fade-up">
                                <a href="{{ route('servicios.cirugia.index') }}" class="btn btn-primary">Ver Cirugía</a>
                                <a href="{{ route('nosotros.equipo') }}" class="btn btn-outline">Nuestro Equipo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-slide" style="background-image: url('https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <h1 class="animate-title">Estética y <br>Bienestar</h1>
                            <p class="animate-subtitle">Servicios de grooming profesional para mantener a tu mascota saludable y feliz.</p>
                            <div class="hero-actions animate-fade-up">
                                <a href="{{ route('servicios.estetica.index') }}" class="btn btn-primary">Ver Estética</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-indicators">
                <button class="indicator active" onclick="goToSlide(0)"></button>
                <button class="indicator" onclick="goToSlide(1)"></button>
                <button class="indicator" onclick="goToSlide(2)"></button>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="categories-section">
        <div class="section-header-compact">
            <div class="header-top-row animate-fade-right">
                <div class="title-group">
                    <h2>Nuestros Servicios</h2>
                </div>
                <div class="header-actions">
                    <a href="{{ route('contacto.index') }}" class="btn-white-card">Contáctanos <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="header-bottom-row animate-fade-left">
                <div class="subtitle-container">
                    <p class="section-subtitle-long">
                        Ofrecemos una amplia gama de servicios veterinarios diseñados para cubrir todas las necesidades de salud, bienestar y cuidado de tu mascota. Desde consultas preventivas hasta cirugías especializadas.
                    </p>
                    <div class="trust-indicators">
                        <span class="trust-item"><i class="fas fa-paw"></i> +15 años de experiencia</span>
                        <span class="trust-item"><i class="fas fa-user-md"></i> Veterinarios Certificados</span>
                    </div>
                </div>
                <div class="header-stats-column">
                    <div class="header-stats">
                        <span class="stat-badge"><i class="fas fa-star"></i> Mejor Calificados</span>
                        <span class="stat-badge"><i class="fas fa-clock"></i> Urgencias 24/7</span>
                        <span class="stat-badge"><i class="fas fa-shield-alt"></i> Garantía Total</span>
                    </div>
                    <div class="extra-benefits">
                        <span class="benefit-pill"><i class="fas fa-stethoscope"></i> Tecnología Avanzada</span>
                        <span class="benefit-pill"><i class="fas fa-headset"></i> Soporte 24/7</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-carousel-wrapper animate-fade-up-delay">
            <div class="services-grid" id="servicesGrid">
                <!-- Servicio 1: Urgencias -->
                <div class="service-card-modern">
                    <div class="card-image-wrapper">
                        <div class="blob-bg emergency"></div>
                        <img src="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?w=600&h=400&fit=crop" alt="Urgencias 24/7">
                        <div class="card-badge emergency">Urgente</div>
                    </div>
                    <div class="card-content">
                        <div class="service-icon">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <h3>Urgencias 24/7</h3>
                        <p class="card-description">Atención inmediata para emergencias, disponible las 24 horas del día, todos los días del año.</p>
                        <div class="card-features">
                            <span><i class="fas fa-check"></i> Respuesta inmediata</span>
                            <span><i class="fas fa-check"></i> Equipo especializado</span>
                        </div>
                        <a href="{{ route('servicios.emergencias.index') }}" class="service-btn">Ver Detalles <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Servicio 2: Consultas -->
                <div class="service-card-modern">
                    <div class="card-image-wrapper">
                        <div class="blob-bg"></div>
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=600&h=400&fit=crop" alt="Consultas Generales">
                    </div>
                    <div class="card-content">
                        <div class="service-icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3>Consultas Generales</h3>
                        <p class="card-description">Revisiones completas, diagnósticos precisos y seguimiento personalizado de la salud de tu mascota.</p>
                        <div class="card-features">
                            <span><i class="fas fa-check"></i> Chequeos completos</span>
                            <span><i class="fas fa-check"></i> Historial digital</span>
                        </div>
                        <a href="{{ route('servicios.consultas.index') }}" class="service-btn">Ver Detalles <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Servicio 3: Vacunación -->
                <div class="service-card-modern">
                    <div class="card-image-wrapper">
                        <div class="blob-bg"></div>
                        <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&h=400&fit=crop" alt="Vacunación">
                    </div>
                    <div class="card-content">
                        <div class="service-icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <h3>Vacunación</h3>
                        <p class="card-description">Planes de vacunación personalizados para proteger a tu mascota de enfermedades.</p>
                        <div class="card-features">
                            <span><i class="fas fa-check"></i> Vacunas certificadas</span>
                            <span><i class="fas fa-check"></i> Recordatorios automáticos</span>
                        </div>
                        <a href="{{ route('servicios.vacunacion.index') }}" class="service-btn">Ver Detalles <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Servicio 4: Cirugía -->
                <div class="service-card-modern">
                    <div class="card-image-wrapper">
                        <div class="blob-bg"></div>
                        <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=600&h=400&fit=crop" alt="Cirugía">
                    </div>
                    <div class="card-content">
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Cirugía Especializada</h3>
                        <p class="card-description">Procedimientos quirúrgicos con equipamiento de última generación y cuidado post-operatorio.</p>
                        <div class="card-features">
                            <span><i class="fas fa-check"></i> Quirófano equipado</span>
                            <span><i class="fas fa-check"></i> Monitoreo anestésico</span>
                        </div>
                        <a href="{{ route('servicios.cirugia.index') }}" class="service-btn">Ver Detalles <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Servicio 5: Dermatología -->
                <div class="service-card-modern">
                    <div class="card-image-wrapper">
                        <div class="blob-bg"></div>
                        <img src="https://images.unsplash.com/photo-1581594549595-35f6edc7b762?w=600&h=400&fit=crop" alt="Dermatología">
                    </div>
                    <div class="card-content">
                        <div class="service-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h3>Dermatología</h3>
                        <p class="card-description">Tratamiento especializado para problemas de piel, alergias y condiciones dermatológicas.</p>
                        <div class="card-features">
                            <span><i class="fas fa-check"></i> Diagnóstico preciso</span>
                            <span><i class="fas fa-check"></i> Tratamientos efectivos</span>
                        </div>
                        <a href="{{ route('servicios.dermatologia.index') }}" class="service-btn">Ver Detalles <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Servicio 6: Estética -->
                <div class="service-card-modern">
                    <div class="card-image-wrapper">
                        <div class="blob-bg"></div>
                        <img src="https://images.unsplash.com/photo-1558788353-f76d92427f16?w=600&h=400&fit=crop" alt="Estética">
                    </div>
                    <div class="card-content">
                        <div class="service-icon">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h3>Estética Canina</h3>
                        <p class="card-description">Servicios de grooming profesional para mantener a tu mascota limpia, saludable y con estilo.</p>
                        <div class="card-features">
                            <span><i class="fas fa-check"></i> Grooming completo</span>
                            <span><i class="fas fa-check"></i> Productos premium</span>
                        </div>
                        <a href="{{ route('servicios.estetica.index') }}" class="service-btn">Ver Detalles <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section animate-fade-up">
        <div class="why-choose-content">
            <div class="why-left">
                <span class="sub-tag">¿Por qué elegirnos?</span>
                <h2>Tu Mejor Opción en <br>Cuidado Veterinario</h2>
                <p>En ZoofiPets combinamos experiencia, tecnología y amor por los animales para ofrecer el mejor servicio veterinario.</p>

                <div class="features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Profesionales Certificados</h4>
                            <p>Equipo de veterinarios con certificaciones internacionales</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-medical"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Tecnología Avanzada</h4>
                            <p>Equipamiento de última generación para diagnóstico y tratamiento</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Atención Personalizada</h4>
                            <p>Cuidado individualizado para cada mascota</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('nosotros.index') }}" class="btn btn-primary">Conoce Más Sobre Nosotros</a>
            </div>
            <div class="why-right">
                <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=800&h=900&fit=crop" alt="Veterinaria profesional">
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section animate-fade-up">
        <div class="cta-content">
            <span class="sub-tag" style="color: #fff; opacity: 0.8;">Agenda tu Cita</span>
            <h2>¿Listo para cuidar <br>de tu mascota?</h2>
            <p>Agenda una cita hoy y descubre por qué miles de familias confían en ZoofiPets.</p>
            <div class="cta-buttons">
                <a href="{{ route('citas.solicitud.index') }}" class="btn btn-white-card" style="color: #0984e3;">Agendar Cita <i class="fas fa-calendar-check"></i></a>
                <a href="{{ route('servicios.emergencias.index') }}" class="btn btn-outline-white">Urgencias 24/7 <i class="fas fa-phone"></i></a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script src="{{ asset('js/pages/welcome.js') }}"></script>
@endpush
