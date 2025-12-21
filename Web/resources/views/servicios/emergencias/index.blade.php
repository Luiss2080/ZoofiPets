@extends('layouts.app')

@section('title', 'Urgencias 24/7')

@push('styles')
    <!-- Reusing System Styles -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- INDEPENDENT CSS FOR THIS VIEW -->
    <link rel="stylesheet" href="{{ asset('css/servicios/emergencias.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="hero-carousel-section emergency-hero full-width-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay emergency-overlay">
                        <div class="hero-text centered">
                            <div class="emergency-badge">
                                <i class="fas fa-ambulance"></i>
                                <span>Disponible 24/7</span>
                            </div>
                            <h1 class="animate-title">Urgencias <br>Veterinarias</h1>
                            <p class="animate-subtitle">Atención inmediata cuando tu mascota más lo necesita. Equipo especializado disponible las 24 horas.</p>
                            <div class="hero-actions animate-fade-up">
                                <a href="tel:+1234567890" class="btn btn-emergency">
                                    <i class="fas fa-phone-alt"></i> Llamar Ahora
                                </a>
                                <a href="{{ route('citas.solicitud.index') }}" class="btn btn-outline">Agendar Cita</a>
                            </div>
                            <div class="emergency-info">
                                <div class="info-item">
                                    <i class="fas fa-clock"></i>
                                    <span>Respuesta en menos de 15 min</span>
                                </div>
                                <div class="info-item">
                                    <i class="fas fa-ambulance"></i>
                                    <span>Servicio de ambulancia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-content-container">

        <!-- When to Call Section -->
        <section class="when-to-call-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Situaciones Críticas</span>
                <h2>¿Cuándo Llamar a Urgencias?</h2>
                <div class="header-line center"></div>
                <p class="section-description">Reconoce estas señales de emergencia y actúa inmediatamente</p>
            </div>

            <div class="emergency-situations-grid">
                <!-- Situación 1 -->
                <div class="situation-card">
                    <div class="situation-icon critical">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Dificultad Respiratoria</h3>
                    <p>Jadeo excesivo, respiración rápida o dificultad para respirar</p>
                </div>

                <!-- Situación 2 -->
                <div class="situation-card">
                    <div class="situation-icon critical">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Hemorragia Severa</h3>
                    <p>Sangrado que no se detiene después de 5 minutos de presión</p>
                </div>

                <!-- Situación 3 -->
                <div class="situation-card">
                    <div class="situation-icon critical">
                        <i class="fas fa-pills"></i>
                    </div>
                    <h3>Intoxicación</h3>
                    <p>Ingestión de sustancias tóxicas, productos de limpieza o medicamentos</p>
                </div>

                <!-- Situación 4 -->
                <div class="situation-card">
                    <div class="situation-icon warning">
                        <i class="fas fa-thermometer-full"></i>
                    </div>
                    <h3>Golpe de Calor</h3>
                    <p>Temperatura corporal elevada, colapso o pérdida de conciencia</p>
                </div>

                <!-- Situación 5 -->
                <div class="situation-card">
                    <div class="situation-icon warning">
                        <i class="fas fa-bone"></i>
                    </div>
                    <h3>Trauma Severo</h3>
                    <p>Caídas desde altura, atropellamientos o lesiones graves</p>
                </div>

                <!-- Situación 6 -->
                <div class="situation-card">
                    <div class="situation-icon warning">
                        <i class="fas fa-dizzy"></i>
                    </div>
                    <h3>Convulsiones</h3>
                    <p>Ataques que duran más de 2 minutos o episodios repetidos</p>
                </div>

                <!-- Situación 7 -->
                <div class="situation-card">
                    <div class="situation-icon warning">
                        <i class="fas fa-eye-slash"></i>
                    </div>
                    <h3>Lesiones Oculares</h3>
                    <p>Traumatismos en los ojos, ceguera súbita o dolor ocular</p>
                </div>

                <!-- Situación 8 -->
                <div class="situation-card">
                    <div class="situation-icon warning">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3>Imposibilidad de Orinar</h3>
                    <p>Esfuerzo sin éxito o ausencia de orina por más de 12 horas</p>
                    </div>
            </div>
        </section>

        <!-- Emergency Process Section -->
        <section class="emergency-process-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Proceso de Atención</span>
                <h2>Cómo Funciona Nuestro Servicio</h2>
                <div class="header-line center"></div>
            </div>

            <div class="process-steps">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <h3>Llamada de Emergencia</h3>
                    <p>Contacta a nuestro número de urgencias disponible 24/7. Nuestro equipo te guiará sobre qué hacer mientras llegas.</p>
                </div>

                <div class="step-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h3>Traslado Inmediato</h3>
                    <p>Puedes traer a tu mascota o solicitar nuestro servicio de ambulancia equipada con todo lo necesario.</p>
                </div>

                <div class="step-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Evaluación Inmediata</h3>
                    <p>Veterinario especializado evalúa el caso y comienza tratamiento de estabilización inmediata.</p>
                </div>

                <div class="step-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>

                <div class="step-card">
                    <div class="step-number">4</div>
                    <div class="step-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Tratamiento y Seguimiento</h3>
                    <p>Aplicamos el tratamiento necesario y monitoreamos a tu mascota hasta su completa estabilización.</p>
                </div>
            </div>
        </section>

        <!-- Facilities Section -->
        <section class="facilities-section animate-fade-up">
            <div class="facilities-content">
                <div class="facilities-left">
                    <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=800&h=600&fit=crop" alt="Quirófano de emergencias">
                </div>
                <div class="facilities-right">
                    <span class="sub-tag">Instalaciones de Primera</span>
                    <h2>Equipamiento de <br>Última Generación</h2>
                    <p>Nuestro servicio de urgencias cuenta con tecnología avanzada para atender cualquier emergencia.</p>

                    <div class="facilities-list">
                        <div class="facility-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Quirófano de emergencias equipado</span>
                        </div>
                        <div class="facility-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Unidad de cuidados intensivos (UCI)</span>
                        </div>
                        <div class="facility-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Equipo de rayos X digital</span>
                        </div>
                        <div class="facility-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Laboratorio para análisis urgentes</span>
                        </div>
                        <div class="facility-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Monitoreo cardíaco y de signos vitales</span>
                        </div>
                        <div class="facility-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Ambulancia totalmente equipada</span>
                        </div>
                    </div>

                    <a href="{{ route('nosotros.instalaciones') }}" class="btn btn-primary">Ver Nuestras Instalaciones</a>
                </div>
            </div>
        </section>

        <!-- Contact Emergency Banner -->
        <section class="emergency-contact-banner animate-fade-up">
            <div class="emergency-contact-content">
                <div class="contact-icon-large">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="contact-text">
                    <h2>¿Es una Emergencia?</h2>
                    <p>No esperes más. Cada minuto cuenta cuando se trata de la vida de tu mascota.</p>
                    <div class="contact-buttons">
                        <a href="tel:+1234567890" class="btn btn-emergency-large">
                            <i class="fas fa-phone-alt"></i> Llamar Urgencias: (123) 456-7890
                        </a>
                        <a href="https://wa.me/1234567890" class="btn btn-whatsapp" target="_blank">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                    <p class="contact-note">
                        <i class="fas fa-map-marker-alt"></i>
                        Estamos ubicados en Av. Principal 123, Ciudad - Abiertos 24/7
                    </p>
                </div>
            </div>
        </section>

        <!-- FAQ Emergency -->
        <section class="faq-emergency-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Preguntas Frecuentes</span>
                <h2>Dudas Sobre Urgencias</h2>
                <div class="header-line center"></div>
            </div>

            <div class="faq-emergency-container">
                <div class="faq-item-emergency">
                    <div class="faq-question-emergency">
                        <h3>¿Cuánto cuesta el servicio de urgencias?</h3>
                        <div class="faq-icon-emergency">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-emergency">
                        <p>El costo varía según la gravedad del caso y los tratamientos necesarios. Aceptamos pagos con tarjeta y ofrecemos planes de financiamiento. La primera consulta de emergencia tiene un costo de $75 más los tratamientos requeridos.</p>
                    </div>
                </div>

                <div class="faq-item-emergency">
                    <div class="faq-question-emergency">
                        <h3>¿Qué debo llevar en una emergencia?</h3>
                        <div class="faq-icon-emergency">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-emergency">
                        <p>Trae el historial médico de tu mascota si lo tienes, carnet de vacunación, y cualquier medicamento que esté tomando actualmente. Si es posible, una muestra de lo que pudo haber causado la emergencia (envase de producto, planta, etc.).</p>
                    </div>
                </div>

                <div class="faq-item-emergency">
                    <div class="faq-question-emergency">
                        <h3>¿Tienen servicio de ambulancia?</h3>
                        <div class="faq-icon-emergency">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-emergency">
                        <p>Sí, contamos con ambulancia equipada disponible para casos donde el traslado de la mascota pueda ser riesgoso. El servicio tiene un costo adicional y está disponible dentro de la ciudad y zonas cercanas.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection

@push('scripts')
<script src="{{ asset('js/pages/welcome.js') }}"></script>
<script>
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item-emergency');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question-emergency');

        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');

            // Close all items
            faqItems.forEach(faq => {
                faq.classList.remove('active');
            });

            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
</script>
@endpush
