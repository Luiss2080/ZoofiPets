@extends('layouts.app')

@section('title', 'Confirmación de Cita - ZoofiPets')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/citas/confirmacion.css') }}">
@endsection

@section('content')
<!-- Hero de Confirmación -->
<section class="confirmation-hero">
    <div class="confirmation-container">
        <div class="success-animation">
            <div class="checkmark-circle">
                <div class="checkmark-icon">
                    <i class="fas fa-check"></i>
                </div>
            </div>
        </div>
        <h1 class="animate-fade-up">¡Cita Agendada con Éxito!</h1>
        <p class="animate-fade-up">Hemos recibido tu solicitud de cita. Te enviaremos una confirmación por correo electrónico.</p>
    </div>
</section>

<!-- Resumen de la Cita -->
<section class="appointment-summary-section">
    <div class="summary-container">
        <div class="summary-card">
            <div class="summary-header">
                <i class="fas fa-calendar-check"></i>
                <div>
                    <h2>Resumen de tu Cita</h2>
                    <p class="confirmation-number">Número de Confirmación: <strong>#CITA-{{ rand(10000, 99999) }}</strong></p>
                </div>
            </div>

            <div class="summary-grid">
                <!-- Información del Propietario -->
                <div class="info-block">
                    <div class="block-header">
                        <i class="fas fa-user"></i>
                        <h3>Información del Propietario</h3>
                    </div>
                    <div class="block-content">
                        <div class="info-row">
                            <span class="label">Nombre:</span>
                            <span class="value">{{ request()->get('owner_name', 'Juan Pérez') }}</span>
                        </div>
                        <div class="info-row">
                            <span class="label">Email:</span>
                            <span class="value">{{ request()->get('owner_email', 'juan@example.com') }}</span>
                        </div>
                        <div class="info-row">
                            <span class="label">Teléfono:</span>
                            <span class="value">{{ request()->get('owner_phone', '+593 99 123 4567') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Información de la Mascota -->
                <div class="info-block">
                    <div class="block-header">
                        <i class="fas fa-paw"></i>
                        <h3>Información de la Mascota</h3>
                    </div>
                    <div class="block-content">
                        <div class="info-row">
                            <span class="label">Nombre:</span>
                            <span class="value">{{ request()->get('pet_name', 'Max') }}</span>
                        </div>
                        <div class="info-row">
                            <span class="label">Especie:</span>
                            <span class="value">{{ request()->get('pet_species', 'Perro') }}</span>
                        </div>
                        <div class="info-row">
                            <span class="label">Raza:</span>
                            <span class="value">{{ request()->get('pet_breed', 'Labrador') }}</span>
                        </div>
                        <div class="info-row">
                            <span class="label">Edad:</span>
                            <span class="value">{{ request()->get('pet_age', '3 años') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Detalles del Servicio -->
                <div class="info-block highlighted">
                    <div class="block-header">
                        <i class="fas fa-stethoscope"></i>
                        <h3>Servicio Solicitado</h3>
                    </div>
                    <div class="block-content">
                        <div class="service-badge">
                            <i class="fas fa-hospital"></i>
                            <span>{{ request()->get('service', 'Consulta General') }}</span>
                        </div>
                        <div class="info-row" style="margin-top: 15px;">
                            <span class="label">Fecha:</span>
                            <span class="value">{{ request()->get('appointment_date', date('d/m/Y', strtotime('+3 days'))) }}</span>
                        </div>
                        <div class="info-row">
                            <span class="label">Hora:</span>
                            <span class="value">{{ request()->get('appointment_time', '10:00 AM') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Notas Adicionales -->
                @if(request()->get('notes'))
                <div class="info-block full-width">
                    <div class="block-header">
                        <i class="fas fa-comment-medical"></i>
                        <h3>Notas Adicionales</h3>
                    </div>
                    <div class="block-content">
                        <p class="notes-text">{{ request()->get('notes', 'Mi mascota ha estado presentando algunos síntomas que me gustaría que revisaran.') }}</p>
                    </div>
                </div>
                @endif
            </div>

            <!-- Botones de Acción -->
            <div class="action-buttons">
                <button class="btn-action btn-calendar" onclick="addToCalendar()">
                    <i class="far fa-calendar-plus"></i>
                    Añadir al Calendario
                </button>
                <button class="btn-action btn-print" onclick="window.print()">
                    <i class="fas fa-print"></i>
                    Imprimir Confirmación
                </button>
                <button class="btn-action btn-share" onclick="shareAppointment()">
                    <i class="fas fa-share-alt"></i>
                    Compartir
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Próximos Pasos -->
<section class="next-steps-section">
    <div class="steps-container">
        <div class="section-header-center">
            <h2>Próximos Pasos</h2>
            <p>Qué esperar antes de tu cita</p>
        </div>

        <div class="steps-grid">
            <div class="step-card">
                <div class="step-number">1</div>
                <div class="step-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Confirmación por Email</h3>
                <p>Recibirás un correo electrónico con todos los detalles de tu cita en los próximos minutos.</p>
            </div>

            <div class="step-card">
                <div class="step-number">2</div>
                <div class="step-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <h3>Recordatorio</h3>
                <p>Te enviaremos un recordatorio 24 horas antes de tu cita por email y SMS.</p>
            </div>

            <div class="step-card">
                <div class="step-number">3</div>
                <div class="step-icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <h3>Preparación</h3>
                <p>Prepara el historial médico de tu mascota y llega 10 minutos antes de la cita.</p>
            </div>

            <div class="step-card">
                <div class="step-number">4</div>
                <div class="step-icon">
                    <i class="fas fa-hospital"></i>
                </div>
                <h3>Tu Visita</h3>
                <p>Acude a nuestra clínica en la fecha y hora programada. ¡Te esperamos!</p>
            </div>
        </div>
    </div>
</section>

<!-- Información Importante -->
<section class="important-info-section">
    <div class="info-container">
        <div class="info-grid">
            <div class="info-card">
                <i class="fas fa-clock"></i>
                <h3>Política de Llegada</h3>
                <p>Por favor llega 10 minutos antes de tu cita para completar el registro.</p>
            </div>

            <div class="info-card">
                <i class="fas fa-calendar-times"></i>
                <h3>Cancelaciones</h3>
                <p>Si necesitas cancelar, hazlo con al menos 24 horas de anticipación.</p>
            </div>

            <div class="info-card">
                <i class="fas fa-file-medical"></i>
                <h3>Documentos</h3>
                <p>Trae el carnet de vacunación y cualquier resultado de exámenes previos.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contacto de Emergencia -->
<section class="emergency-contact-section">
    <div class="emergency-container">
        <div class="emergency-content">
            <i class="fas fa-phone-volume"></i>
            <div class="emergency-text">
                <h3>¿Necesitas modificar o cancelar tu cita?</h3>
                <p>Contáctanos directamente y te ayudaremos de inmediato</p>
            </div>
            <div class="emergency-buttons">
                <a href="tel:+593999999999" class="emergency-btn phone">
                    <i class="fas fa-phone"></i>
                    <span>Llamar Ahora</span>
                </a>
                <a href="https://wa.me/593999999999" class="emergency-btn whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Acciones Finales -->
<section class="final-actions-section">
    <div class="final-container">
        <h2>¿Qué deseas hacer ahora?</h2>
        <div class="final-buttons">
            <a href="{{ route('inicio') }}" class="btn-final btn-home">
                <i class="fas fa-home"></i>
                Volver al Inicio
            </a>
            <a href="{{ route('citas.solicitud.index') }}" class="btn-final btn-new">
                <i class="fas fa-plus-circle"></i>
                Agendar Otra Cita
            </a>
            <a href="#" class="btn-final btn-services">
                <i class="fas fa-th-large"></i>
                Ver Servicios
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Animación del checkmark al cargar
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.checkmark-circle').classList.add('animate');
        }, 200);
    });

    // Función para añadir al calendario
    function addToCalendar() {
        const title = 'Cita en ZoofiPets';
        const description = 'Cita veterinaria para {{ request()->get("pet_name", "mi mascota") }}';
        const location = 'ZoofiPets - Clínica Veterinaria';
        const startDate = '{{ request()->get("appointment_date", date("Ymd", strtotime("+3 days"))) }}T{{ request()->get("appointment_time", "10:00") }}';

        // Google Calendar URL
        const googleCalendarUrl = `https://calendar.google.com/calendar/render?action=TEMPLATE&text=${encodeURIComponent(title)}&details=${encodeURIComponent(description)}&location=${encodeURIComponent(location)}&dates=${startDate}/${startDate}`;

        window.open(googleCalendarUrl, '_blank');
    }

    // Función para compartir
    function shareAppointment() {
        const shareData = {
            title: 'Cita en ZoofiPets',
            text: 'He agendado una cita en ZoofiPets para el {{ request()->get("appointment_date", date("d/m/Y", strtotime("+3 days"))) }} a las {{ request()->get("appointment_time", "10:00 AM") }}',
            url: window.location.href
        };

        if (navigator.share) {
            navigator.share(shareData)
                .catch((error) => console.log('Error sharing:', error));
        } else {
            // Fallback: copiar al portapapeles
            navigator.clipboard.writeText(window.location.href)
                .then(() => {
                    alert('Enlace copiado al portapapeles');
                });
        }
    }
</script>
@endpush
