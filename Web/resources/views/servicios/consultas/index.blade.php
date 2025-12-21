@extends('layouts.app')

@section('title', 'Consultas Veterinarias')

@push('styles')
    <!-- Reusing System Styles -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- INDEPENDENT CSS FOR THIS VIEW -->
    <link rel="stylesheet" href="{{ asset('css/servicios/consultas.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="hero-carousel-section consultas-hero full-width-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <span class="sub-tag" style="margin-bottom: 20px; display: block;">Atención Integral</span>
                            <h1 class="animate-title">Consultas <br>Veterinarias</h1>
                            <p class="animate-subtitle">Diagnóstico preciso y atención personalizada para mantener a tu mascota saludable y feliz.</p>
                            <div class="hero-actions animate-fade-up">
                                <a href="{{ route('citas.solicitud.index') }}" class="btn btn-primary">Agendar Consulta</a>
                                <a href="{{ route('contacto.index') }}" class="btn btn-outline">Más Información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-content-container">

        <!-- Types of Consultations Section -->
        <section class="consultation-types-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Tipos de Consultas</span>
                <h2>Servicios de Consulta</h2>
                <div class="header-line center"></div>
                <p class="section-description">Ofrecemos diferentes tipos de consultas adaptadas a las necesidades de tu mascota</p>
            </div>

            <div class="consultation-types-grid">
                <!-- Tipo 1 -->
                <div class="consultation-card">
                    <div class="consultation-icon primary">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h3>Consulta General</h3>
                    <p>Revisión completa del estado de salud, diagnóstico de síntomas y tratamiento preventivo.</p>
                    <ul class="consultation-includes">
                        <li><i class="fas fa-check"></i> Examen físico completo</li>
                        <li><i class="fas fa-check"></i> Revisión de signos vitales</li>
                        <li><i class="fas fa-check"></i> Diagnóstico inicial</li>
                        <li><i class="fas fa-check"></i> Receta médica</li>
                    </ul>
                    <div class="consultation-price">
                        <span class="price-label">Desde</span>
                        <span class="price">$45</span>
                    </div>
                </div>

                <!-- Tipo 2 -->
                <div class="consultation-card">
                    <div class="consultation-icon secondary">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Control Preventivo</h3>
                    <p>Chequeos regulares para prevenir enfermedades y mantener la salud óptima de tu mascota.</p>
                    <ul class="consultation-includes">
                        <li><i class="fas fa-check"></i> Revisión periódica</li>
                        <li><i class="fas fa-check"></i> Control de peso</li>
                        <li><i class="fas fa-check"></i> Revisión dental</li>
                        <li><i class="fas fa-check"></i> Recomendaciones nutricionales</li>
                    </ul>
                    <div class="consultation-price">
                        <span class="price-label">Desde</span>
                        <span class="price">$35</span>
                    </div>
                </div>

                <!-- Tipo 3 -->
                <div class="consultation-card featured">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i> Recomendado
                    </div>
                    <div class="consultation-icon accent">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Consulta Especializada</h3>
                    <p>Atención por especialistas en áreas específicas como cardiología, dermatología u ortopedia.</p>
                    <ul class="consultation-includes">
                        <li><i class="fas fa-check"></i> Especialista certificado</li>
                        <li><i class="fas fa-check"></i> Diagnóstico avanzado</li>
                        <li><i class="fas fa-check"></i> Exámenes complementarios</li>
                        <li><i class="fas fa-check"></i> Plan de tratamiento detallado</li>
                    </ul>
                    <div class="consultation-price">
                        <span class="price-label">Desde</span>
                        <span class="price">$75</span>
                    </div>
                </div>

                <!-- Tipo 4 -->
                <div class="consultation-card">
                    <div class="consultation-icon tertiary">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Consulta a Domicilio</h3>
                    <p>Atención veterinaria en la comodidad de tu hogar para mayor tranquilidad de tu mascota.</p>
                    <ul class="consultation-includes">
                        <li><i class="fas fa-check"></i> Veterinario a domicilio</li>
                        <li><i class="fas fa-check"></i> Sin estrés del traslado</li>
                        <li><i class="fas fa-check"></i> Atención personalizada</li>
                        <li><i class="fas fa-check"></i> Equipo portátil</li>
                    </ul>
                    <div class="consultation-price">
                        <span class="price-label">Desde</span>
                        <span class="price">$95</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Consultation Process Section -->
        <section class="consultation-process-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Proceso de Consulta</span>
                <h2>¿Cómo Funciona?</h2>
                <div class="header-line center"></div>
            </div>

            <div class="process-timeline">
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fas fa-calendar-plus"></i>
                        </div>
                        <h3>Agenda tu Cita</h3>
                        <p>Reserva tu consulta en línea, por teléfono o WhatsApp. Elige el horario que más te convenga.</p>
                    </div>
                </div>

                <div class="timeline-connector"></div>

                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h3>Preparación</h3>
                        <p>Trae el historial médico, carnet de vacunación y anota los síntomas o comportamientos inusuales.</p>
                    </div>
                </div>

                <div class="timeline-connector"></div>

                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Consulta Veterinaria</h3>
                        <p>Nuestro veterinario realizará un examen completo, diagnóstico y responderá todas tus preguntas.</p>
                    </div>
                </div>

                <div class="timeline-connector"></div>

                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fas fa-prescription"></i>
                        </div>
                        <h3>Tratamiento y Seguimiento</h3>
                        <p>Recibirás el plan de tratamiento, recetas y seguimiento para garantizar la recuperación.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Check Section -->
        <section class="what-we-check-section animate-fade-up">
            <div class="check-content">
                <div class="check-left">
                    <span class="sub-tag">Revisión Completa</span>
                    <h2>¿Qué Revisamos en <br>Cada Consulta?</h2>
                    <p>Nuestro examen veterinario integral cubre todos los aspectos de la salud de tu mascota.</p>

                    <div class="check-list">
                        <div class="check-category">
                            <h4><i class="fas fa-heartbeat"></i> Signos Vitales</h4>
                            <ul>
                                <li>Frecuencia cardíaca y respiratoria</li>
                                <li>Temperatura corporal</li>
                                <li>Presión arterial</li>
                            </ul>
                        </div>

                        <div class="check-category">
                            <h4><i class="fas fa-eye"></i> Examen Físico</h4>
                            <ul>
                                <li>Ojos, oídos y nariz</li>
                                <li>Piel y pelaje</li>
                                <li>Dientes y encías</li>
                            </ul>
                        </div>

                        <div class="check-category">
                            <h4><i class="fas fa-bone"></i> Sistema Músculo-Esquelético</h4>
                            <ul>
                                <li>Movilidad articular</li>
                                <li>Masa muscular</li>
                                <li>Condición corporal</li>
                            </ul>
                        </div>

                        <div class="check-category">
                            <h4><i class="fas fa-lungs"></i> Sistemas Internos</h4>
                            <ul>
                                <li>Sistema digestivo</li>
                                <li>Sistema respiratorio</li>
                                <li>Sistema urinario</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="check-right">
                    <img src="https://images.unsplash.com/photo-1628009368231-7bb7cfcb0def?w=800&h=900&fit=crop" alt="Consulta veterinaria">
                    <div class="check-stats">
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Satisfacción</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Años de Experiencia</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">10K+</div>
                            <div class="stat-label">Mascotas Atendidas</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="benefits-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Ventajas</span>
                <h2>Beneficios de Nuestras Consultas</h2>
                <div class="header-line center"></div>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Atención Rápida</h3>
                    <p>Sin largas esperas. Respetamos tu tiempo y el de tu mascota.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Veterinarios Certificados</h3>
                    <p>Equipo con certificaciones internacionales y formación continua.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-laptop-medical"></i>
                    </div>
                    <h3>Tecnología Avanzada</h3>
                    <p>Equipos de diagnóstico de última generación para resultados precisos.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-file-medical"></i>
                    </div>
                    <h3>Historial Digital</h3>
                    <p>Registro completo y accesible de toda la información médica.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h3>Recordatorios</h3>
                    <p>Te avisamos sobre vacunas, desparasitación y próximas citas.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3>Seguimiento Post-Consulta</h3>
                    <p>Llamadas de seguimiento para verificar la evolución del tratamiento.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-consultation-banner animate-fade-up">
            <div class="cta-consultation-content">
                <div class="cta-left">
                    <span class="sub-tag" style="color: #fff; opacity: 0.8;">Primera Consulta</span>
                    <h2>¿Listo Para Cuidar <br>de tu Mascota?</h2>
                    <p>Agenda tu primera consulta y recibe un 15% de descuento. Incluye revisión completa y asesoría nutricional.</p>
                    <div class="cta-features">
                        <div class="cta-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Sin costo de cancelación</span>
                        </div>
                        <div class="cta-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Atención el mismo día</span>
                        </div>
                        <div class="cta-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Todas las formas de pago</span>
                        </div>
                    </div>
                    <a href="{{ route('citas.solicitud.index') }}" class="btn btn-white-card" style="color: #0984e3;">
                        <i class="fas fa-calendar-check"></i> Agendar Ahora
                    </a>
                </div>
                <div class="cta-right">
                    <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=600&h=700&fit=crop" alt="Veterinario con mascota">
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-consultation-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Preguntas Frecuentes</span>
                <h2>Dudas Sobre Consultas</h2>
                <div class="header-line center"></div>
            </div>

            <div class="faq-consultation-container">
                <div class="faq-item-consultation">
                    <div class="faq-question-consultation">
                        <h3>¿Con cuánta anticipación debo agendar?</h3>
                        <div class="faq-icon-consultation">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-consultation">
                        <p>Recomendamos agendar con al menos 24 horas de anticipación. Sin embargo, también ofrecemos citas el mismo día según disponibilidad. Para consultas especializadas, sugerimos agendar con 3-5 días de antelación.</p>
                    </div>
                </div>

                <div class="faq-item-consultation">
                    <div class="faq-question-consultation">
                        <h3>¿Qué debo llevar a la primera consulta?</h3>
                        <div class="faq-icon-consultation">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-consultation">
                        <p>Trae el carnet de vacunación, historial médico previo (si lo tienes), una muestra de heces reciente para análisis parasitológico, y anota cualquier síntoma o comportamiento inusual que hayas observado.</p>
                    </div>
                </div>

                <div class="faq-item-consultation">
                    <div class="faq-question-consultation">
                        <h3>¿Cuánto dura una consulta?</h3>
                        <div class="faq-icon-consultation">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-consultation">
                        <p>Una consulta general dura aproximadamente 20-30 minutos. Las consultas especializadas pueden tomar entre 30-45 minutos, dependiendo de la complejidad del caso y los exámenes necesarios.</p>
                    </div>
                </div>

                <div class="faq-item-consultation">
                    <div class="faq-question-consultation">
                        <h3>¿Ofrecen planes de consultas preventivas?</h3>
                        <div class="faq-icon-consultation">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-consultation">
                        <p>Sí, tenemos planes anuales que incluyen consultas preventivas ilimitadas, descuentos en vacunas, desparasitación, y servicios complementarios. Consulta con nuestro personal por los planes disponibles.</p>
                    </div>
                </div>

                <div class="faq-item-consultation">
                    <div class="faq-question-consultation">
                        <h3>¿Puedo pedir una segunda opinión?</h3>
                        <div class="faq-icon-consultation">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-consultation">
                        <p>Por supuesto. Entendemos la importancia de estar seguro sobre el diagnóstico y tratamiento de tu mascota. Ofrecemos consultas de segunda opinión con nuestros especialistas sin ningún compromiso.</p>
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
    const faqItems = document.querySelectorAll('.faq-item-consultation');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question-consultation');

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
