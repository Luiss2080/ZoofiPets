@extends('layouts.app')

@section('title', 'Agendar Cita')

@push('styles')
    <!-- Reusing System Styles -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- INDEPENDENT CSS FOR THIS VIEW -->
    <link rel="stylesheet" href="{{ asset('css/citas/agendar.css') }}">
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="hero-carousel-section citas-hero full-width-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1576201836106-db1758fd1c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <span class="sub-tag" style="margin-bottom: 20px; display: block;">Atención Personalizada</span>
                            <h1 class="animate-title">Agenda tu Cita</h1>
                            <p class="animate-subtitle">Reserva una cita con nuestros especialistas de forma rápida y sencilla. Estamos aquí para cuidar de tu mascota.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-content-container">

        <!-- Appointment Form Section -->
        <section class="appointment-form-section animate-fade-up">
            <div class="form-container">
                <div class="form-header">
                    <div class="form-steps">
                        <div class="step active" data-step="1">
                            <div class="step-number">1</div>
                            <span>Tus Datos</span>
                        </div>
                        <div class="step-connector"></div>
                        <div class="step" data-step="2">
                            <div class="step-number">2</div>
                            <span>Tu Mascota</span>
                        </div>
                        <div class="step-connector"></div>
                        <div class="step" data-step="3">
                            <div class="step-number">3</div>
                            <span>Servicio</span>
                        </div>
                        <div class="step-connector"></div>
                        <div class="step" data-step="4">
                            <div class="step-number">4</div>
                            <span>Fecha y Hora</span>
                        </div>
                    </div>
                </div>

                <form id="appointmentForm" class="appointment-form">
                    <!-- Step 1: Owner Information -->
                    <div class="form-step active" data-step="1">
                        <h2>Información del Propietario</h2>
                        <p class="step-description">Ingresa tus datos de contacto para la cita</p>

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="owner_name">
                                    <i class="fas fa-user"></i> Nombre Completo *
                                </label>
                                <input type="text" id="owner_name" name="owner_name" required placeholder="Juan Pérez">
                            </div>

                            <div class="form-group">
                                <label for="owner_email">
                                    <i class="fas fa-envelope"></i> Correo Electrónico *
                                </label>
                                <input type="email" id="owner_email" name="owner_email" required placeholder="juan@ejemplo.com">
                            </div>

                            <div class="form-group">
                                <label for="owner_phone">
                                    <i class="fas fa-phone"></i> Teléfono *
                                </label>
                                <input type="tel" id="owner_phone" name="owner_phone" required placeholder="+34 123 456 789">
                            </div>

                            <div class="form-group">
                                <label for="owner_address">
                                    <i class="fas fa-map-marker-alt"></i> Dirección
                                </label>
                                <input type="text" id="owner_address" name="owner_address" placeholder="Calle Principal 123">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn-next" onclick="nextStep(1)">
                                Siguiente <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Pet Information -->
                    <div class="form-step" data-step="2">
                        <h2>Información de tu Mascota</h2>
                        <p class="step-description">Cuéntanos sobre tu compañero peludo</p>

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="pet_name">
                                    <i class="fas fa-paw"></i> Nombre de la Mascota *
                                </label>
                                <input type="text" id="pet_name" name="pet_name" required placeholder="Max">
                            </div>

                            <div class="form-group">
                                <label for="pet_species">
                                    <i class="fas fa-dog"></i> Especie *
                                </label>
                                <select id="pet_species" name="pet_species" required>
                                    <option value="">Selecciona...</option>
                                    <option value="perro">Perro</option>
                                    <option value="gato">Gato</option>
                                    <option value="conejo">Conejo</option>
                                    <option value="ave">Ave</option>
                                    <option value="reptil">Reptil</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pet_breed">
                                    <i class="fas fa-certificate"></i> Raza
                                </label>
                                <input type="text" id="pet_breed" name="pet_breed" placeholder="Golden Retriever">
                            </div>

                            <div class="form-group">
                                <label for="pet_age">
                                    <i class="fas fa-calendar"></i> Edad *
                                </label>
                                <input type="text" id="pet_age" name="pet_age" required placeholder="3 años">
                            </div>

                            <div class="form-group">
                                <label for="pet_gender">
                                    <i class="fas fa-venus-mars"></i> Sexo *
                                </label>
                                <select id="pet_gender" name="pet_gender" required>
                                    <option value="">Selecciona...</option>
                                    <option value="macho">Macho</option>
                                    <option value="hembra">Hembra</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pet_weight">
                                    <i class="fas fa-weight"></i> Peso (kg)
                                </label>
                                <input type="number" id="pet_weight" name="pet_weight" placeholder="25" step="0.1">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn-prev" onclick="prevStep(2)">
                                <i class="fas fa-arrow-left"></i> Anterior
                            </button>
                            <button type="button" class="btn-next" onclick="nextStep(2)">
                                Siguiente <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Step 3: Service Type -->
                    <div class="form-step" data-step="3">
                        <h2>Tipo de Servicio</h2>
                        <p class="step-description">Selecciona el servicio que necesitas</p>

                        <div class="service-selection-grid">
                            <label class="service-option">
                                <input type="radio" name="service_type" value="consulta" required>
                                <div class="service-card-option">
                                    <div class="service-icon-option">
                                        <i class="fas fa-stethoscope"></i>
                                    </div>
                                    <h3>Consulta General</h3>
                                    <p>Revisión y diagnóstico</p>
                                </div>
                            </label>

                            <label class="service-option">
                                <input type="radio" name="service_type" value="vacunacion" required>
                                <div class="service-card-option">
                                    <div class="service-icon-option">
                                        <i class="fas fa-syringe"></i>
                                    </div>
                                    <h3>Vacunación</h3>
                                    <p>Protección preventiva</p>
                                </div>
                            </label>

                            <label class="service-option">
                                <input type="radio" name="service_type" value="cirugia" required>
                                <div class="service-card-option">
                                    <div class="service-icon-option">
                                        <i class="fas fa-user-md"></i>
                                    </div>
                                    <h3>Cirugía</h3>
                                    <p>Procedimientos quirúrgicos</p>
                                </div>
                            </label>

                            <label class="service-option">
                                <input type="radio" name="service_type" value="estetica" required>
                                <div class="service-card-option">
                                    <div class="service-icon-option">
                                        <i class="fas fa-cut"></i>
                                    </div>
                                    <h3>Estética</h3>
                                    <p>Grooming profesional</p>
                                </div>
                            </label>

                            <label class="service-option">
                                <input type="radio" name="service_type" value="dermatologia" required>
                                <div class="service-card-option">
                                    <div class="service-icon-option">
                                        <i class="fas fa-microscope"></i>
                                    </div>
                                    <h3>Dermatología</h3>
                                    <p>Problemas de piel</p>
                                </div>
                            </label>

                            <label class="service-option">
                                <input type="radio" name="service_type" value="urgencia" required>
                                <div class="service-card-option emergency-option">
                                    <div class="service-icon-option">
                                        <i class="fas fa-ambulance"></i>
                                    </div>
                                    <h3>Urgencia</h3>
                                    <p>Atención inmediata</p>
                                </div>
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="service_notes">
                                <i class="fas fa-comment"></i> Motivo de la Consulta *
                            </label>
                            <textarea id="service_notes" name="service_notes" rows="4" required placeholder="Describe brevemente el motivo de la cita..."></textarea>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn-prev" onclick="prevStep(3)">
                                <i class="fas fa-arrow-left"></i> Anterior
                            </button>
                            <button type="button" class="btn-next" onclick="nextStep(3)">
                                Siguiente <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Step 4: Date and Time -->
                    <div class="form-step" data-step="4">
                        <h2>Fecha y Hora</h2>
                        <p class="step-description">Selecciona cuándo quieres tu cita</p>

                        <div class="datetime-grid">
                            <div class="form-group">
                                <label for="appointment_date">
                                    <i class="fas fa-calendar-alt"></i> Fecha Preferida *
                                </label>
                                <input type="date" id="appointment_date" name="appointment_date" required min="{{ date('Y-m-d') }}">
                            </div>

                            <div class="form-group">
                                <label for="appointment_time">
                                    <i class="fas fa-clock"></i> Hora Preferida *
                                </label>
                                <select id="appointment_time" name="appointment_time" required>
                                    <option value="">Selecciona hora...</option>
                                    <option value="09:00">09:00 AM</option>
                                    <option value="09:30">09:30 AM</option>
                                    <option value="10:00">10:00 AM</option>
                                    <option value="10:30">10:30 AM</option>
                                    <option value="11:00">11:00 AM</option>
                                    <option value="11:30">11:30 AM</option>
                                    <option value="12:00">12:00 PM</option>
                                    <option value="14:00">02:00 PM</option>
                                    <option value="14:30">02:30 PM</option>
                                    <option value="15:00">03:00 PM</option>
                                    <option value="15:30">03:30 PM</option>
                                    <option value="16:00">04:00 PM</option>
                                    <option value="16:30">04:30 PM</option>
                                    <option value="17:00">05:00 PM</option>
                                    <option value="17:30">05:30 PM</option>
                                    <option value="18:00">06:00 PM</option>
                                </select>
                            </div>
                        </div>

                        <div class="info-box">
                            <i class="fas fa-info-circle"></i>
                            <div>
                                <h4>Información Importante</h4>
                                <p>La disponibilidad será confirmada por nuestro equipo. Te contactaremos en las próximas 24 horas para confirmar tu cita.</p>
                            </div>
                        </div>

                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="terms" required>
                                <span>Acepto los <a href="/legal-modal.blade.php" onclick="showLegalFromUrl('Términos y Condiciones', '/legal/terminos-condiciones'); return false;">términos y condiciones</a> y la <a href="../legal/politica-privacidad" onclick="showLegalFromUrl('Política de Privacidad', '/legal/politica-privacidad'); return false;">política de privacidad</a></span>
                            </label>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn-prev" onclick="prevStep(4)">
                                <i class="fas fa-arrow-left"></i> Anterior
                            </button>
                            <button type="submit" class="btn-submit">
                                <i class="fas fa-check"></i> Agendar Cita
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Summary Sidebar -->
                <div class="appointment-summary">
                    <h3>Resumen de tu Cita</h3>
                    <div class="summary-content">
                        <div class="summary-item">
                            <i class="fas fa-user"></i>
                            <div>
                                <span class="summary-label">Propietario</span>
                                <span class="summary-value" id="summary-owner">-</span>
                            </div>
                        </div>
                        <div class="summary-item">
                            <i class="fas fa-paw"></i>
                            <div>
                                <span class="summary-label">Mascota</span>
                                <span class="summary-value" id="summary-pet">-</span>
                            </div>
                        </div>
                        <div class="summary-item">
                            <i class="fas fa-stethoscope"></i>
                            <div>
                                <span class="summary-label">Servicio</span>
                                <span class="summary-value" id="summary-service">-</span>
                            </div>
                        </div>
                        <div class="summary-item">
                            <i class="fas fa-calendar"></i>
                            <div>
                                <span class="summary-label">Fecha</span>
                                <span class="summary-value" id="summary-date">-</span>
                            </div>
                        </div>
                        <div class="summary-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <span class="summary-label">Hora</span>
                                <span class="summary-value" id="summary-time">-</span>
                            </div>
                        </div>
                    </div>

                    <div class="contact-help">
                        <h4>¿Necesitas ayuda?</h4>
                        <p>Contáctanos y te asistiremos</p>
                        <a href="tel:+751xxxxxxxx" class="help-btn">
                            <i class="fas fa-phone"></i> Llamar Ahora
                        </a>
                        <a href="https://wa.me/+75174940820" class="help-btn whatsapp" target="_blank">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Book With Us Section -->
        <section class="why-book-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Ventajas</span>
                <h2>¿Por Qué Agendar con Nosotros?</h2>
                <div class="header-line center"></div>
            </div>

            <div class="benefits-grid-booking">
                <div class="benefit-booking">
                    <div class="benefit-icon-booking">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Confirmación Rápida</h3>
                    <p>Respuesta en menos de 24 horas para confirmar tu cita.</p>
                </div>

                <div class="benefit-booking">
                    <div class="benefit-icon-booking">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Fácil Reagendamiento</h3>
                    <p>Cambia o cancela tu cita sin costo hasta 12 horas antes.</p>
                </div>

                <div class="benefit-booking">
                    <div class="benefit-icon-booking">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h3>Recordatorios Automáticos</h3>
                    <p>Te enviamos recordatorios por email y SMS antes de tu cita.</p>
                </div>

                <div class="benefit-booking">
                    <div class="benefit-icon-booking">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Equipo Profesional</h3>
                    <p>Veterinarios certificados con años de experiencia.</p>
                </div>

                <div class="benefit-booking">
                    <div class="benefit-icon-booking">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Instalaciones Seguras</h3>
                    <p>Protocolos estrictos de higiene y seguridad.</p>
                </div>

                <div class="benefit-booking">
                    <div class="benefit-icon-booking">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Atención Personalizada</h3>
                    <p>Cada mascota recibe cuidado individualizado.</p>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-booking-section animate-fade-up">
            <div class="section-header text-center">
                <span class="sub-tag">Preguntas Frecuentes</span>
                <h2>Dudas Sobre Agendamiento</h2>
                <div class="header-line center"></div>
            </div>

            <div class="faq-booking-container">
                <div class="faq-item-booking">
                    <div class="faq-question-booking">
                        <h3>¿Cómo sé que mi cita fue confirmada?</h3>
                        <div class="faq-icon-booking">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-booking">
                        <p>Recibirás un email de confirmación dentro de las 24 horas siguientes a tu solicitud. También te llamaremos para confirmar los detalles de la cita.</p>
                    </div>
                </div>

                <div class="faq-item-booking">
                    <div class="faq-question-booking">
                        <h3>¿Puedo cancelar o reprogramar mi cita?</h3>
                        <div class="faq-icon-booking">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-booking">
                        <p>Sí, puedes cancelar o reprogramar sin costo hasta 12 horas antes de tu cita. Contáctanos por teléfono, email o WhatsApp para hacer el cambio.</p>
                    </div>
                </div>

                <div class="faq-item-booking">
                    <div class="faq-question-booking">
                        <h3>¿Qué debo llevar a la cita?</h3>
                        <div class="faq-icon-booking">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-booking">
                        <p>Trae el carnet de vacunación, historial médico si lo tienes, y una lista de síntomas o comportamientos que hayas observado. Si es primera visita, llega 10 minutos antes para completar el registro.</p>
                    </div>
                </div>

                <div class="faq-item-booking">
                    <div class="faq-question-booking">
                        <h3>¿Tienen disponibilidad para citas urgentes?</h3>
                        <div class="faq-icon-booking">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer-booking">
                        <p>Para emergencias, llama directamente a nuestro número de urgencias 24/7. Para citas urgentes (no emergencias), contáctanos y haremos nuestro mejor esfuerzo para acomodarte el mismo día.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection

@push('scripts')
<script src="{{ asset('js/pages/welcome.js') }}"></script>
<script>
    // Multi-step form navigation
    function nextStep(currentStep) {
        // Validate current step
        const currentStepElement = document.querySelector(`.form-step[data-step="${currentStep}"]`);
        const inputs = currentStepElement.querySelectorAll('input[required], select[required], textarea[required]');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.value) {
                isValid = false;
                input.classList.add('error');
            } else {
                input.classList.remove('error');
            }
        });

        if (!isValid) {
            alert('Por favor completa todos los campos requeridos');
            return;
        }

        // Update summary
        updateSummary();

        // Hide current step
        document.querySelector(`.form-step[data-step="${currentStep}"]`).classList.remove('active');
        document.querySelector(`.step[data-step="${currentStep}"]`).classList.remove('active');
        document.querySelector(`.step[data-step="${currentStep}"]`).classList.add('completed');

        // Show next step
        const nextStepNum = currentStep + 1;
        document.querySelector(`.form-step[data-step="${nextStepNum}"]`).classList.add('active');
        document.querySelector(`.step[data-step="${nextStepNum}"]`).classList.add('active');

        // Scroll to top of form
        document.querySelector('.form-container').scrollIntoView({ behavior: 'smooth' });
    }

    function prevStep(currentStep) {
        // Hide current step
        document.querySelector(`.form-step[data-step="${currentStep}"]`).classList.remove('active');
        document.querySelector(`.step[data-step="${currentStep}"]`).classList.remove('active');

        // Show previous step
        const prevStepNum = currentStep - 1;
        document.querySelector(`.form-step[data-step="${prevStepNum}"]`).classList.add('active');
        document.querySelector(`.step[data-step="${prevStepNum}"]`).classList.add('active');
        document.querySelector(`.step[data-step="${prevStepNum}"]`).classList.remove('completed');

        // Scroll to top of form
        document.querySelector('.form-container').scrollIntoView({ behavior: 'smooth' });
    }

    function updateSummary() {
        // Owner
        const ownerName = document.getElementById('owner_name').value;
        if (ownerName) {
            document.getElementById('summary-owner').textContent = ownerName;
        }

        // Pet
        const petName = document.getElementById('pet_name').value;
        const petSpecies = document.getElementById('pet_species').value;
        if (petName) {
            document.getElementById('summary-pet').textContent = `${petName}${petSpecies ? ' (' + petSpecies + ')' : ''}`;
        }

        // Service
        const serviceType = document.querySelector('input[name="service_type"]:checked');
        if (serviceType) {
            const serviceName = serviceType.parentElement.querySelector('h3').textContent;
            document.getElementById('summary-service').textContent = serviceName;
        }

        // Date
        const date = document.getElementById('appointment_date').value;
        if (date) {
            document.getElementById('summary-date').textContent = new Date(date).toLocaleDateString('es-ES', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        }

        // Time
        const time = document.getElementById('appointment_time').value;
        if (time) {
            document.getElementById('summary-time').textContent = document.querySelector(`#appointment_time option[value="${time}"]`).textContent;
        }
    }

    // Form submission
    document.getElementById('appointmentForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Here you would normally send the form data to your backend
        alert('¡Solicitud enviada! Te contactaremos pronto para confirmar tu cita.');

        // Reset form
        this.reset();

        // Go back to step 1
        document.querySelectorAll('.form-step').forEach(step => step.classList.remove('active'));
        document.querySelectorAll('.step').forEach(step => {
            step.classList.remove('active', 'completed');
        });
        document.querySelector('.form-step[data-step="1"]').classList.add('active');
        document.querySelector('.step[data-step="1"]').classList.add('active');

        // Reset summary
        document.querySelectorAll('.summary-value').forEach(el => el.textContent = '-');
    });

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item-booking');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question-booking');

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
