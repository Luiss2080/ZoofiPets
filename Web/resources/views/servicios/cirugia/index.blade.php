@extends('layouts.app')

@section('title', 'Cirugía Veterinaria')

@push('styles')
    <!-- Reusing System Styles -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- INDEPENDENT CSS FOR THIS VIEW -->
    <link rel="stylesheet" href="{{ asset('css/servicios/cirugia.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="hero-carousel-section cirugia-hero full-width-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <span class="sub-tag" style="margin-bottom: 20px; display: block;">Excelencia Quirúrgica</span>
                            <h1 class="animate-title">Cirugía Veterinaria <br>Especializada</h1>
                            <p class="animate-subtitle">Procedimientos quirúrgicos de alta complejidad con tecnología de vanguardia y cuidado post-operatorio integral.</p>
                            <div class="hero-actions animate-fade-up">
                                <a href="{{ route('citas.solicitud.index') }}" class="btn btn-primary">Consultar Cirugía</a>
                                <a href="{{ route('nosotros.equipo') }}" class="btn btn-outline">Nuestros Cirujanos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-content-container">

        <!-- Types of Surgery Section -->
        <section class="surgery-types-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Tipos de Cirugía</span>
                <h2>Procedimientos Quirúrgicos</h2>
                <div class="header-line center"></div>
                <p class="section-description">Ofrecemos una amplia gama de cirugías desde procedimientos rutinarios hasta casos de alta complejidad</p>
            </div>

            <div class="surgery-grid">
                <!-- Cirugía 1 -->
                <div class="surgery-card">
                    <div class="surgery-icon soft-tissue">
                        <i class="fas fa-hand-holding-medical"></i>
                    </div>
                    <h3>Tejidos Blandos</h3>
                    <p class="surgery-description">Cirugías abdominales, torácicas y de órganos internos realizadas con técnicas mínimamente invasivas.</p>
                    <ul class="surgery-includes">
                        <li><i class="fas fa-check"></i> Esterilización y castración</li>
                        <li><i class="fas fa-check"></i> Cirugía gastrointestinal</li>
                        <li><i class="fas fa-check"></i> Extirpación de tumores</li>
                        <li><i class="fas fa-check"></i> Cirugía urogenital</li>
                    </ul>
                </div>

                <!-- Cirugía 2 -->
                <div class="surgery-card">
                    <div class="surgery-icon orthopedic">
                        <i class="fas fa-bone"></i>
                    </div>
                    <h3>Ortopedia</h3>
                    <p class="surgery-description">Reparación de fracturas, luxaciones y problemas articulares con tecnología de osteosíntesis avanzada.</p>
                    <ul class="surgery-includes">
                        <li><i class="fas fa-check"></i> Fracturas y luxaciones</li>
                        <li><i class="fas fa-check"></i> Displasia de cadera</li>
                        <li><i class="fas fa-check"></i> Ruptura de ligamentos</li>
                        <li><i class="fas fa-check"></i> Artroscopía</li>
                    </ul>
                </div>

                <!-- Cirugía 3 -->
                <div class="surgery-card">
                    <div class="surgery-icon emergency">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h3>Cirugía de Emergencia</h3>
                    <p class="surgery-description">Intervenciones urgentes disponibles 24/7 para casos críticos que requieren atención inmediata.</p>
                    <ul class="surgery-includes">
                        <li><i class="fas fa-check"></i> Torsión gástrica</li>
                        <li><i class="fas fa-check"></i> Traumatismos severos</li>
                        <li><i class="fas fa-check"></i> Cesáreas de urgencia</li>
                        <li><i class="fas fa-check"></i> Obstrucciones</li>
                    </ul>
                </div>

                <!-- Cirugía 4 -->
                <div class="surgery-card">
                    <div class="surgery-icon oncologic">
                        <i class="fas fa-radiation"></i>
                    </div>
                    <h3>Oncología Quirúrgica</h3>
                    <p class="surgery-description">Extirpación de tumores benignos y malignos con márgenes de seguridad y análisis histopatológico.</p>
                    <ul class="surgery-includes">
                        <li><i class="fas fa-check"></i> Mastectomía</li>
                        <li><i class="fas fa-check"></i> Extirpación de masas</li>
                        <li><i class="fas fa-check"></i> Biopsias quirúrgicas</li>
                        <li><i class="fas fa-check"></i> Cirugía reconstructiva</li>
                    </ul>
                </div>

                <!-- Cirugía 5 -->
                <div class="surgery-card">
                    <div class="surgery-icon ophthalmic">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Oftalmología</h3>
                    <p class="surgery-description">Cirugías oculares especializadas para corregir problemas visuales y preservar la visión.</p>
                    <ul class="surgery-includes">
                        <li><i class="fas fa-check"></i> Cataratas</li>
                        <li><i class="fas fa-check"></i> Entropión/Ectropión</li>
                        <li><i class="fas fa-check"></i> Enucleación</li>
                        <li><i class="fas fa-check"></i> Cirugía de córnea</li>
                    </ul>
                </div>

                <!-- Cirugía 6 -->
                <div class="surgery-card">
                    <div class="surgery-icon dental">
                        <i class="fas fa-tooth"></i>
                    </div>
                    <h3>Odontología</h3>
                    <p class="surgery-description">Procedimientos dentales desde limpiezas hasta extracciones y cirugías maxilofaciales complejas.</p>
                    <ul class="surgery-includes">
                        <li><i class="fas fa-check"></i> Extracciones dentales</li>
                        <li><i class="fas fa-check"></i> Cirugía periodontal</li>
                        <li><i class="fas fa-check"></i> Fracturas mandibulares</li>
                        <li><i class="fas fa-check"></i> Corrección de maloclusión</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Operating Room Section -->
        <section class="operating-room-section animate-fade-up">
            <div class="operating-room-content">
                <div class="or-left">
                    <span class="sub-tag">Instalaciones de Primera</span>
                    <h2>Quirófano de <br>Última Generación</h2>
                    <p>Nuestro quirófano cuenta con tecnología de vanguardia y está diseñado para garantizar la máxima seguridad y éxito en cada procedimiento.</p>

                    <div class="or-features-grid">
                        <div class="or-feature">
                            <div class="or-feature-icon">
                                <i class="fas fa-wind"></i>
                            </div>
                            <div class="or-feature-text">
                                <h4>Sistema de Ventilación</h4>
                                <p>Filtros HEPA para aire estéril</p>
                            </div>
                        </div>

                        <div class="or-feature">
                            <div class="or-feature-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <div class="or-feature-text">
                                <h4>Monitoreo Multiparamétrico</h4>
                                <p>Control constante de signos vitales</p>
                            </div>
                        </div>

                        <div class="or-feature">
                            <div class="or-feature-icon">
                                <i class="fas fa-temperature-low"></i>
                            </div>
                            <div class="or-feature-text">
                                <h4>Control de Temperatura</h4>
                                <p>Mantas térmicas y calefacción</p>
                            </div>
                        </div>

                        <div class="or-feature">
                            <div class="or-feature-icon">
                                <i class="fas fa-lungs"></i>
                            </div>
                            <div class="or-feature-text">
                                <h4>Anestesia Inhalatoria</h4>
                                <p>Sistema Isoflurano de precisión</p>
                            </div>
                        </div>

                        <div class="or-feature">
                            <div class="or-feature-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <div class="or-feature-text">
                                <h4>Instrumental Especializado</h4>
                                <p>Equipamiento quirúrgico avanzado</p>
                            </div>
                        </div>

                        <div class="or-feature">
                            <div class="or-feature-icon">
                                <i class="fas fa-shield-virus"></i>
                            </div>
                            <div class="or-feature-text">
                                <h4>Protocolos de Asepsia</h4>
                                <p>Esterilización por autoclave</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="or-right">
                    <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=800&h=700&fit=crop" alt="Quirófano veterinario">
                    <div class="or-certification">
                        <i class="fas fa-certificate"></i>
                        <span>Certificación Internacional en Cirugía Veterinaria</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Surgery Process Section -->
        <section class="surgery-process-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Proceso Quirúrgico</span>
                <h2>¿Cómo es el Proceso de Cirugía?</h2>
                <div class="header-line center"></div>
            </div>

            <div class="process-timeline-surgery">
                <div class="timeline-step">
                    <div class="timeline-step-number">1</div>
                    <div class="timeline-step-content">
                        <div class="timeline-step-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h3>Consulta Pre-Quirúrgica</h3>
                        <p>Evaluación completa, exámenes pre-operatorios y explicación detallada del procedimiento.</p>
                    </div>
                </div>

                <div class="timeline-connector-surgery"></div>

                <div class="timeline-step">
                    <div class="timeline-step-number">2</div>
                    <div class="timeline-step-content">
                        <div class="timeline-step-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h3>Preparación</h3>
                        <p>Ayuno previo, medicación pre-anestésica y preparación del área quirúrgica.</p>
                    </div>
                </div>

                <div class="timeline-connector-surgery"></div>

                <div class="timeline-step">
                    <div class="timeline-step-number">3</div>
                    <div class="timeline-step-content">
                        <div class="timeline-step-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Procedimiento</h3>
                        <p>Cirugía realizada por cirujanos especializados con monitoreo anestésico continuo.</p>
                    </div>
                </div>

                <div class="timeline-connector-surgery"></div>

                <div class="timeline-step">
                    <div class="timeline-step-number">4</div>
                    <div class="timeline-step-content">
                        <div class="timeline-step-icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <h3>Recuperación</h3>
                        <p>Vigilancia en sala de recuperación hasta despertar completamente de la anestesia.</p>
                    </div>
                </div>

                <div class="timeline-connector-surgery"></div>

                <div class="timeline-step">
                    <div class="timeline-step-number">5</div>
                    <div class="timeline-step-content">
                        <div class="timeline-step-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3>Alta y Seguimiento</h3>
                        <p>Instrucciones post-operatorias, medicación y citas de control para verificar evolución.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pre-Operative Care Section -->
        <section class="preoperative-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Preparación</span>
                <h2>Cuidados Pre-Operatorios</h2>
                <div class="header-line center"></div>
            </div>

            <div class="preoperative-grid">
                <div class="preop-card">
                    <div class="preop-number">1</div>
                    <div class="preop-icon">
                        <i class="fas fa-utensils-slash"></i>
                    </div>
                    <h3>Ayuno</h3>
                    <p>12 horas de ayuno de comida y 4 horas de agua antes de la cirugía para prevenir complicaciones anestésicas.</p>
                </div>

                <div class="preop-card">
                    <div class="preop-number">2</div>
                    <div class="preop-icon">
                        <i class="fas fa-vial"></i>
                    </div>
                    <h3>Exámenes Previos</h3>
                    <p>Análisis de sangre y otros estudios según edad y condición de salud para garantizar seguridad.</p>
                </div>

                <div class="preop-card">
                    <div class="preop-number">3</div>
                    <div class="preop-icon">
                        <i class="fas fa-shower"></i>
                    </div>
                    <h3>Higiene</h3>
                    <p>Baño completo 24 horas antes. Asegúrate de que tu mascota esté limpia y libre de parásitos externos.</p>
                </div>

                <div class="preop-card">
                    <div class="preop-number">4</div>
                    <div class="preop-icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <h3>Medicación</h3>
                    <p>Informa sobre cualquier medicamento que esté tomando. Algunos deben suspenderse días antes.</p>
                </div>
            </div>
        </section>

        <!-- Post-Operative Care Section -->
        <section class="postoperative-section animate-fade-up">
            <div class="postop-content">
                <div class="postop-left">
                    <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=800&h=600&fit=crop" alt="Recuperación post-operatoria">
                </div>
                <div class="postop-right">
                    <span class="sub-tag">Recuperación</span>
                    <h2>Cuidados <br>Post-Operatorios</h2>
                    <p>El éxito de la cirugía también depende de los cuidados posteriores. Te brindamos todas las indicaciones necesarias.</p>

                    <div class="postop-list">
                        <div class="postop-item">
                            <div class="postop-icon">
                                <i class="fas fa-collar"></i>
                            </div>
                            <div class="postop-text">
                                <h4>Collar Isabelino</h4>
                                <p>Uso obligatorio para evitar lamido de heridas y garantizar cicatrización.</p>
                            </div>
                        </div>

                        <div class="postop-item">
                            <div class="postop-icon">
                                <i class="fas fa-capsules"></i>
                            </div>
                            <div class="postop-text">
                                <h4>Medicación</h4>
                                <p>Antibióticos, analgésicos y antiinflamatorios según prescripción veterinaria.</p>
                            </div>
                        </div>

                        <div class="postop-item">
                            <div class="postop-icon">
                                <i class="fas fa-running"></i>
                            </div>
                            <div class="postop-text">
                                <h4>Reposo</h4>
                                <p>Limitar actividad física durante 10-15 días para correcta recuperación.</p>
                            </div>
                        </div>

                        <div class="postop-item">
                            <div class="postop-icon">
                                <i class="fas fa-hand-sparkles"></i>
                            </div>
                            <div class="postop-text">
                                <h4>Cuidado de Herida</h4>
                                <p>Mantener limpia y seca. No bañar hasta remover puntos (10-14 días).</p>
                            </div>
                        </div>

                        <div class="postop-item">
                            <div class="postop-icon">
                                <i class="fas fa-drumstick-bite"></i>
                            </div>
                            <div class="postop-text">
                                <h4>Alimentación</h4>
                                <p>Dieta blanda las primeras 24-48 horas, luego reintroducir comida gradualmente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-surgery-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Preguntas Frecuentes</span>
                <h2>Dudas Sobre Cirugía</h2>
                <div class="header-line center"></div>
            </div>

            <div class="faq-surgery-container">
                <div class="faq-item-surgery">
                    <div class="faq-question-surgery">
                        <h3>¿Es segura la anestesia para mi mascota?</h3>
                        <div class="faq-icon-surgery">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-surgery">
                        <p>Sí, la anestesia moderna es muy segura. Realizamos exámenes pre-anestésicos, usamos protocolos personalizados según edad y condición, y mantenemos monitoreo constante durante todo el procedimiento. El riesgo anestésico es mínimo en manos expertas.</p>
                    </div>
                </div>

                <div class="faq-item-surgery">
                    <div class="faq-question-surgery">
                        <h3>¿Cuánto tiempo dura la recuperación?</h3>
                        <div class="faq-icon-surgery">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-surgery">
                        <p>Depende del tipo de cirugía. Procedimientos menores como esterilización: 7-10 días. Cirugías ortopédicas: 4-6 semanas con restricción de ejercicio. Te proporcionaremos un cronograma específico de recuperación para tu mascota.</p>
                    </div>
                </div>

                <div class="faq-item-surgery">
                    <div class="faq-question-surgery">
                        <h3>¿Mi mascota sentirá dolor después de la cirugía?</h3>
                        <div class="faq-icon-surgery">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-surgery">
                        <p>Manejamos el dolor de forma multimodal con analgésicos potentes durante y después de la cirugía. Tu mascota recibirá medicación para llevar a casa. Si observas signos de dolor excesivo, contáctanos inmediatamente.</p>
                    </div>
                </div>

                <div class="faq-item-surgery">
                    <div class="faq-question-surgery">
                        <h3>¿Puedo estar presente durante la cirugía?</h3>
                        <div class="faq-icon-surgery">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-surgery">
                        <p>Por razones de asepsia y para evitar interferencias, los propietarios no pueden estar en el quirófano. Sin embargo, te mantendremos informado del progreso y podrás contactarnos en cualquier momento durante el procedimiento.</p>
                    </div>
                </div>

                <div class="faq-item-surgery">
                    <div class="faq-question-surgery">
                        <h3>¿Cuándo debo llamar después de la cirugía?</h3>
                        <div class="faq-icon-surgery">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-surgery">
                        <p>Llama inmediatamente si observas: sangrado excesivo, hinchazón severa, vómitos repetidos, falta de apetito por más de 24 horas, letargo extremo, apertura de la herida, o cualquier comportamiento anormal. Nuestro equipo está disponible 24/7.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-surgery-banner animate-fade-up">
            <div class="cta-surgery-content">
                <span class="sub-tag" style="color: #fff; opacity: 0.8;">Cirugía Segura</span>
                <h2>¿Tu Mascota Necesita Cirugía?</h2>
                <p>Agenda una consulta pre-quirúrgica sin compromiso. Evaluaremos el caso y te explicaremos todas las opciones.</p>
                <a href="{{ route('citas.solicitud.index') }}" class="btn btn-white-card" style="color: #e67e22;">
                    <i class="fas fa-stethoscope"></i> Consultar Ahora
                </a>
            </div>
        </section>

    </div>

@endsection

@push('scripts')
<script src="{{ asset('js/pages/welcome.js') }}"></script>
<script>
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item-surgery');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question-surgery');

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
