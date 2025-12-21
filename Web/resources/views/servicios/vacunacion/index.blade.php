@extends('layouts.app')

@section('title', 'Vacunación Veterinaria')

@push('styles')
    <!-- Reusing System Styles -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- INDEPENDENT CSS FOR THIS VIEW -->
    <link rel="stylesheet" href="{{ asset('css/servicios/vacunacion.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="hero-carousel-section vacunacion-hero full-width-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1587300003388-59208cc962cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <span class="sub-tag" style="margin-bottom: 20px; display: block;">Protección Total</span>
                            <h1 class="animate-title">Vacunación <br>Veterinaria</h1>
                            <p class="animate-subtitle">Protege a tu mascota de enfermedades graves con nuestros planes de vacunación personalizados.</p>
                            <div class="hero-actions animate-fade-up">
                                <a href="{{ route('citas.solicitud.index') }}" class="btn btn-primary">Agendar Vacunación</a>
                                <a href="{{ route('contacto.index') }}" class="btn btn-outline">Consultar Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-content-container">

        <!-- Vaccination Plans Section -->
        <section class="vaccination-plans-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Planes de Vacunación</span>
                <h2>Protege a tu Mascota</h2>
                <div class="header-line center"></div>
                <p class="section-description">Ofrecemos planes completos de vacunación adaptados a cada especie y edad</p>
            </div>

            <div class="vaccination-tabs">
                <button class="vac-tab-btn active" data-filter="perros">
                    <i class="fas fa-dog"></i> Perros
                </button>
                <button class="vac-tab-btn" data-filter="gatos">
                    <i class="fas fa-cat"></i> Gatos
                </button>
                <button class="vac-tab-btn" data-filter="exoticos">
                    <i class="fas fa-dove"></i> Exóticos
                </button>
            </div>

            <!-- Perros -->
            <div class="vaccination-content active" id="perros">
                <div class="vaccination-grid">
                    <div class="vaccine-card essential">
                        <div class="vaccine-badge">Esencial</div>
                        <div class="vaccine-icon">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <h3>Vacuna Múltiple (DHPP)</h3>
                        <p class="vaccine-description">Protege contra Distemper, Hepatitis, Parvovirus y Parainfluenza.</p>
                        <div class="vaccine-schedule">
                            <h4>Calendario:</h4>
                            <ul>
                                <li><i class="fas fa-syringe"></i> 6-8 semanas (1ra dosis)</li>
                                <li><i class="fas fa-syringe"></i> 10-12 semanas (2da dosis)</li>
                                <li><i class="fas fa-syringe"></i> 14-16 semanas (3ra dosis)</li>
                                <li><i class="fas fa-redo"></i> Refuerzo anual</li>
                            </ul>
                        </div>
                        <div class="vaccine-price">$35/dosis</div>
                    </div>

                    <div class="vaccine-card essential">
                        <div class="vaccine-badge">Esencial</div>
                        <div class="vaccine-icon">
                            <i class="fas fa-virus"></i>
                        </div>
                        <h3>Rabia</h3>
                        <p class="vaccine-description">Obligatoria por ley. Protección contra el virus de la rabia.</p>
                        <div class="vaccine-schedule">
                            <h4>Calendario:</h4>
                            <ul>
                                <li><i class="fas fa-syringe"></i> 12-16 semanas (1ra dosis)</li>
                                <li><i class="fas fa-redo"></i> Refuerzo anual</li>
                            </ul>
                        </div>
                        <div class="vaccine-price">$25/dosis</div>
                    </div>

                    <div class="vaccine-card optional">
                        <div class="vaccine-badge optional-badge">Recomendada</div>
                        <div class="vaccine-icon">
                            <i class="fas fa-bacterium"></i>
                        </div>
                        <h3>Bordetella</h3>
                        <p class="vaccine-description">Previene la tos de las perreras. Ideal para perros sociales.</p>
                        <div class="vaccine-schedule">
                            <h4>Calendario:</h4>
                            <ul>
                                <li><i class="fas fa-syringe"></i> A partir de 8 semanas</li>
                                <li><i class="fas fa-redo"></i> Refuerzo cada 6-12 meses</li>
                            </ul>
                        </div>
                        <div class="vaccine-price">$30/dosis</div>
                    </div>

                    <div class="vaccine-card optional">
                        <div class="vaccine-badge optional-badge">Recomendada</div>
                        <div class="vaccine-icon">
                            <i class="fas fa-biohazard"></i>
                        </div>
                        <h3>Leptospirosis</h3>
                        <p class="vaccine-description">Protección contra bacterias transmitidas por roedores.</p>
                        <div class="vaccine-schedule">
                            <h4>Calendario:</h4>
                            <ul>
                                <li><i class="fas fa-syringe"></i> 12 semanas (1ra dosis)</li>
                                <li><i class="fas fa-syringe"></i> 16 semanas (2da dosis)</li>
                                <li><i class="fas fa-redo"></i> Refuerzo anual</li>
                            </ul>
                        </div>
                        <div class="vaccine-price">$40/dosis</div>
                    </div>
                </div>
            </div>

            <!-- Gatos -->
            <div class="vaccination-content" id="gatos">
                <div class="vaccination-grid">
                    <div class="vaccine-card essential">
                        <div class="vaccine-badge">Esencial</div>
                        <div class="vaccine-icon">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <h3>Triple Felina (FVRCP)</h3>
                        <p class="vaccine-description">Protege contra Rinotraqueítis, Calicivirus y Panleucopenia.</p>
                        <div class="vaccine-schedule">
                            <h4>Calendario:</h4>
                            <ul>
                                <li><i class="fas fa-syringe"></i> 6-8 semanas (1ra dosis)</li>
                                <li><i class="fas fa-syringe"></i> 10-12 semanas (2da dosis)</li>
                                <li><i class="fas fa-syringe"></i> 14-16 semanas (3ra dosis)</li>
                                <li><i class="fas fa-redo"></i> Refuerzo anual</li>
                            </ul>
                        </div>
                        <div class="vaccine-price">$38/dosis</div>
                    </div>

                    <div class="vaccine-card essential">
                        <div class="vaccine-badge">Esencial</div>
                        <div class="vaccine-icon">
                            <i class="fas fa-virus"></i>
                        </div>
                        <h3>Rabia Felina</h3>
                        <p class="vaccine-description">Obligatoria. Protección contra el virus de la rabia.</p>
                        <div class="vaccine-schedule">
                            <h4>Calendario:</h4>
                            <ul>
                                <li><i class="fas fa-syringe"></i> 12-16 semanas (1ra dosis)</li>
                                <li><i class="fas fa-redo"></i> Refuerzo anual</li>
                            </ul>
                        </div>
                        <div class="vaccine-price">$25/dosis</div>
                    </div>

                    <div class="vaccine-card optional">
                        <div class="vaccine-badge optional-badge">Recomendada</div>
                        <div class="vaccine-icon">
                            <i class="fas fa-dna"></i>
                        </div>
                        <h3>Leucemia Felina (FeLV)</h3>
                        <p class="vaccine-description">Importante para gatos con acceso al exterior o contacto con otros gatos.</p>
                        <div class="vaccine-schedule">
                            <h4>Calendario:</h4>
                            <ul>
                                <li><i class="fas fa-syringe"></i> 8-12 semanas (1ra dosis)</li>
                                <li><i class="fas fa-syringe"></i> 12-16 semanas (2da dosis)</li>
                                <li><i class="fas fa-redo"></i> Refuerzo anual</li>
                            </ul>
                        </div>
                        <div class="vaccine-price">$45/dosis</div>
                    </div>
                </div>
            </div>

            <!-- Exóticos -->
            <div class="vaccination-content" id="exoticos">
                <div class="vaccination-grid">
                    <div class="vaccine-card essential">
                        <div class="vaccine-icon">
                            <i class="fas fa-dove"></i>
                        </div>
                        <h3>Conejos - Mixomatosis</h3>
                        <p class="vaccine-description">Protección contra enfermedad viral grave.</p>
                        <div class="vaccine-schedule">
                            <h4>Calendario:</h4>
                            <ul>
                                <li><i class="fas fa-syringe"></i> A partir de 5 semanas</li>
                                <li><i class="fas fa-redo"></i> Refuerzo cada 6 meses</li>
                            </ul>
                        </div>
                        <div class="vaccine-price">$35/dosis</div>
                    </div>

                    <div class="vaccine-card essential">
                        <div class="vaccine-icon">
                            <i class="fas fa-disease"></i>
                        </div>
                        <h3>Conejos - Enfermedad Hemorrágica</h3>
                        <p class="vaccine-description">Prevención de enfermedad viral mortal.</p>
                        <div class="vaccine-schedule">
                            <h4>Calendario:</h4>
                            <ul>
                                <li><i class="fas fa-syringe"></i> A partir de 10 semanas</li>
                                <li><i class="fas fa-redo"></i> Refuerzo anual</li>
                            </ul>
                        </div>
                        <div class="vaccine-price">$40/dosis</div>
                    </div>

                    <div class="vaccine-card">
                        <div class="vaccine-icon">
                            <i class="fas fa-feather-alt"></i>
                        </div>
                        <h3>Hurones - Moquillo</h3>
                        <p class="vaccine-description">Protección contra el virus del moquillo canino.</p>
                        <div class="vaccine-schedule">
                            <h4>Calendario:</h4>
                            <ul>
                                <li><i class="fas fa-syringe"></i> 6-8 semanas (1ra dosis)</li>
                                <li><i class="fas fa-syringe"></i> 10-12 semanas (2da dosis)</li>
                                <li><i class="fas fa-redo"></i> Refuerzo anual</li>
                            </ul>
                        </div>
                        <div class="vaccine-price">$45/dosis</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Vaccinate Section -->
        <section class="why-vaccinate-section animate-fade-up">
            <div class="why-vaccinate-content">
                <div class="why-left">
                    <img src="https://images.unsplash.com/photo-1581594549595-35f6edc7b762?w=800&h=600&fit=crop" alt="Vacunación veterinaria">
                </div>
                <div class="why-right">
                    <span class="sub-tag">Importancia</span>
                    <h2>¿Por Qué Vacunar <br>a tu Mascota?</h2>
                    <p>La vacunación es la forma más efectiva de prevenir enfermedades graves y potencialmente mortales en tu mascota.</p>

                    <div class="reasons-list">
                        <div class="reason-item">
                            <div class="reason-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="reason-text">
                                <h4>Protección contra Enfermedades</h4>
                                <p>Previene enfermedades graves como parvovirus, moquillo y rabia.</p>
                            </div>
                        </div>

                        <div class="reason-item">
                            <div class="reason-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="reason-text">
                                <h4>Protección de Salud Pública</h4>
                                <p>Algunas enfermedades como la rabia pueden transmitirse a humanos.</p>
                            </div>
                        </div>

                        <div class="reason-item">
                            <div class="reason-icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="reason-text">
                                <h4>Ahorro Económico</h4>
                                <p>Prevenir es más económico que tratar enfermedades graves.</p>
                            </div>
                        </div>

                        <div class="reason-item">
                            <div class="reason-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="reason-text">
                                <h4>Requisito Legal</h4>
                                <p>La vacuna antirrábica es obligatoria por ley en muchos lugares.</p>
                            </div>
                        </div>

                        <div class="reason-item">
                            <div class="reason-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="reason-text">
                                <h4>Vida Más Larga y Saludable</h4>
                                <p>Las mascotas vacunadas viven más tiempo y con mejor calidad de vida.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vaccination Process -->
        <section class="vaccination-process-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Proceso</span>
                <h2>¿Cómo es el Proceso de Vacunación?</h2>
                <div class="header-line center"></div>
            </div>

            <div class="process-grid">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Agenda tu Cita</h3>
                    <p>Programa tu cita de vacunación. Te recordaremos las fechas de refuerzo.</p>
                </div>

                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h3>Examen Previo</h3>
                    <p>El veterinario revisa que tu mascota esté saludable antes de vacunar.</p>
                </div>

                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h3>Aplicación de Vacuna</h3>
                    <p>Administración rápida y segura de la vacuna certificada.</p>
                </div>

                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Registro y Seguimiento</h3>
                    <p>Actualizamos el carnet y programamos el próximo refuerzo.</p>
                </div>
            </div>
        </section>

        <!-- Vaccination Packages -->
        <section class="packages-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Ahorra Más</span>
                <h2>Paquetes de Vacunación</h2>
                <div class="header-line center"></div>
                <p class="section-description">Planes completos con descuento para el primer año de tu mascota</p>
            </div>

            <div class="packages-grid">
                <div class="package-card">
                    <div class="package-header">
                        <h3>Plan Cachorro</h3>
                        <div class="package-pet-icon">
                            <i class="fas fa-dog"></i>
                        </div>
                    </div>
                    <div class="package-content">
                        <div class="package-price">
                            <span class="old-price">$180</span>
                            <span class="current-price">$149</span>
                            <span class="price-note">Primer año completo</span>
                        </div>
                        <ul class="package-includes">
                            <li><i class="fas fa-check"></i> 3 dosis DHPP</li>
                            <li><i class="fas fa-check"></i> Vacuna Rabia</li>
                            <li><i class="fas fa-check"></i> Desparasitaciones</li>
                            <li><i class="fas fa-check"></i> Carnet digital</li>
                            <li><i class="fas fa-check"></i> Recordatorios automáticos</li>
                        </ul>
                        <a href="{{ route('citas.solicitud.index') }}" class="btn-package">Contratar Plan</a>
                    </div>
                </div>

                <div class="package-card featured">
                    <div class="package-badge">Más Popular</div>
                    <div class="package-header">
                        <h3>Plan Gatito</h3>
                        <div class="package-pet-icon">
                            <i class="fas fa-cat"></i>
                        </div>
                    </div>
                    <div class="package-content">
                        <div class="package-price">
                            <span class="old-price">$195</span>
                            <span class="current-price">$159</span>
                            <span class="price-note">Primer año completo</span>
                        </div>
                        <ul class="package-includes">
                            <li><i class="fas fa-check"></i> 3 dosis Triple Felina</li>
                            <li><i class="fas fa-check"></i> Vacuna Rabia</li>
                            <li><i class="fas fa-check"></i> Test FeLV/FIV</li>
                            <li><i class="fas fa-check"></i> Desparasitaciones</li>
                            <li><i class="fas fa-check"></i> Carnet digital</li>
                        </ul>
                        <a href="{{ route('citas.solicitud.index') }}" class="btn-package">Contratar Plan</a>
                    </div>
                </div>

                <div class="package-card">
                    <div class="package-header">
                        <h3>Plan Anual</h3>
                        <div class="package-pet-icon">
                            <i class="fas fa-paw"></i>
                        </div>
                    </div>
                    <div class="package-content">
                        <div class="package-price">
                            <span class="old-price">$120</span>
                            <span class="current-price">$99</span>
                            <span class="price-note">Refuerzos anuales</span>
                        </div>
                        <ul class="package-includes">
                            <li><i class="fas fa-check"></i> Refuerzo DHPP/Triple Felina</li>
                            <li><i class="fas fa-check"></i> Refuerzo Rabia</li>
                            <li><i class="fas fa-check"></i> Desparasitación</li>
                            <li><i class="fas fa-check"></i> Consulta preventiva</li>
                            <li><i class="fas fa-check"></i> 15% descuento adicionales</li>
                        </ul>
                        <a href="{{ route('citas.solicitud.index') }}" class="btn-package">Contratar Plan</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-vaccination-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Preguntas Frecuentes</span>
                <h2>Dudas Sobre Vacunación</h2>
                <div class="header-line center"></div>
            </div>

            <div class="faq-vaccination-container">
                <div class="faq-item-vaccination">
                    <div class="faq-question-vaccination">
                        <h3>¿A qué edad debo vacunar a mi cachorro/gatito?</h3>
                        <div class="faq-icon-vaccination">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-vaccination">
                        <p>La primera vacuna debe aplicarse entre las 6-8 semanas de edad. Es importante seguir el calendario completo de vacunación con refuerzos cada 3-4 semanas hasta las 16 semanas de edad para garantizar una protección completa.</p>
                    </div>
                </div>

                <div class="faq-item-vaccination">
                    <div class="faq-question-vaccination">
                        <h3>¿Las vacunas tienen efectos secundarios?</h3>
                        <div class="faq-icon-vaccination">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-vaccination">
                        <p>Las vacunas son muy seguras. Los efectos secundarios más comunes son leves: un poco de molestia en el lugar de la inyección, somnolencia o fiebre leve que desaparece en 24-48 horas. Los efectos graves son extremadamente raros.</p>
                    </div>
                </div>

                <div class="faq-item-vaccination">
                    <div class="faq-question-vaccination">
                        <h3>¿Puedo vacunar a mi mascota si está enferma?</h3>
                        <div class="faq-icon-vaccination">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-vaccination">
                        <p>No es recomendable vacunar a una mascota enferma. El sistema inmune debe estar fuerte para responder adecuadamente a la vacuna. Si tu mascota está enferma, espera a que se recupere completamente antes de vacunar.</p>
                    </div>
                </div>

                <div class="faq-item-vaccination">
                    <div class="faq-question-vaccination">
                        <h3>¿Qué pasa si me retraso en un refuerzo?</h3>
                        <div class="faq-icon-vaccination">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-vaccination">
                        <p>Si se retrasa un refuerzo, la protección puede disminuir. Generalmente, si el retraso es menor a 1 año, solo se necesita una dosis de refuerzo. Si el retraso es mayor, consulta con el veterinario ya que podría ser necesario reiniciar el protocolo.</p>
                    </div>
                </div>

                <div class="faq-item-vaccination">
                    <div class="faq-question-vaccination">
                        <h3>¿Las mascotas de interior necesitan vacunas?</h3>
                        <div class="faq-icon-vaccination">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-vaccination">
                        <p>Sí, incluso las mascotas de interior necesitan vacunas. Los virus pueden entrar en casa a través de ropa, zapatos u otros animales. Además, la vacuna antirrábica es obligatoria por ley independientemente del estilo de vida.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-vaccination-banner animate-fade-up">
            <div class="cta-vaccination-content">
                <span class="sub-tag" style="color: #fff; opacity: 0.8;">Protege a tu Mascota Hoy</span>
                <h2>Agenda su Vacunación</h2>
                <p>Mantén a tu mascota protegida con nuestro plan de vacunación completo. Consulta gratis incluida.</p>
                <a href="{{ route('citas.solicitud.index') }}" class="btn btn-white-card" style="color: #9b59b6;">
                    <i class="fas fa-syringe"></i> Agendar Ahora
                </a>
            </div>
        </section>

    </div>

@endsection

@push('scripts')
<script src="{{ asset('js/pages/welcome.js') }}"></script>
<script>
    // Vaccination Tabs
    const vacTabs = document.querySelectorAll('.vac-tab-btn');
    const vacContents = document.querySelectorAll('.vaccination-content');

    vacTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active from all tabs and contents
            vacTabs.forEach(t => t.classList.remove('active'));
            vacContents.forEach(c => c.classList.remove('active'));

            // Add active to clicked tab
            tab.classList.add('active');

            // Show corresponding content
            const filter = tab.getAttribute('data-filter');
            document.getElementById(filter).classList.add('active');
        });
    });

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item-vaccination');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question-vaccination');

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
