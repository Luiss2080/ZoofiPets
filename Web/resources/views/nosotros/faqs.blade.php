@extends('layouts.app')

@section('title', 'Preguntas Frecuentes')

@push('styles')
    <!-- Reusing System Styles -->
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
    <!-- INDEPENDENT CSS FOR THIS VIEW -->
    <link rel="stylesheet" href="{{ asset('css/nosotros/faqs.css') }}">
@endpush

@section('content')
    <!-- Hero Section (Strict Home Replication) -->
    <section class="hero-carousel-section faqs-hero full-width-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1584467735815-f778f274e296?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                    <div class="slide-overlay">
                        <div class="hero-text centered">
                            <span class="sub-tag" style="margin-bottom: 20px; display: block;">Resolvemos tus Dudas</span>
                            <h1 class="animate-title">Preguntas <br>Frecuentes</h1>
                            <p class="animate-subtitle">Encuentra respuestas rápidas a las consultas más comunes sobre nuestros servicios y el cuidado de tu mascota.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-content-container">

        <!-- Clean Ordered Content -->
        <section class="categories-section animate-fade-up">
            <div class="section-header text-center">
                <h2>Preguntas Frecuentes</h2>
                <div class="header-line center"></div>
            </div>

            <!-- Minimalist Tabs (Home Style) -->
            <div class="faq-tabs-container">
                <button class="tab-btn active" data-filter="all">Todas</button>
                <button class="tab-btn" data-filter="servicios">Servicios</button>
                <button class="tab-btn" data-filter="citas">Citas</button>
                <button class="tab-btn" data-filter="pagos">Pagos</button>
                <button class="tab-btn" data-filter="emergencias">Emergencias</button>
            </div>

            <!-- FAQ Accordion Container -->
            <div class="faq-container" id="faqContainer">

                <!-- Servicios -->
                <div class="faq-item" data-category="servicios">
                    <div class="faq-question">
                        <h3>¿Qué servicios ofrece ZoofiPets?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Ofrecemos servicios completos de veterinaria que incluyen: consultas generales, vacunación, cirugías, urgencias 24/7, dermatología, estética canina, hospitalización, laboratorio clínico, rayos X, y especialidades para animales exóticos.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="servicios">
                    <div class="faq-question">
                        <h3>¿Atienden mascotas exóticas?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, contamos con especialistas en animales exóticos que pueden atender aves, reptiles, conejos, hurones y otros pequeños mamíferos. Recomendamos agendar cita previa para este tipo de consultas.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="servicios">
                    <div class="faq-question">
                        <h3>¿Realizan cirugías complejas?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Contamos con quirófano equipado con tecnología de última generación y cirujanos especializados en ortopedia, tejidos blandos, y cirugías reconstructivas. Todas las cirugías incluyen monitoreo anestésico avanzado y cuidados post-operatorios.</p>
                    </div>
                </div>

                <!-- Citas -->
                <div class="faq-item" data-category="citas">
                    <div class="faq-question">
                        <h3>¿Cómo puedo agendar una cita?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Puedes agendar tu cita de tres formas: en línea a través de nuestra página web, llamando al teléfono de la clínica, o visitándonos directamente. Las citas en línea están disponibles 24/7.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="citas">
                    <div class="faq-question">
                        <h3>¿Con cuánta anticipación debo agendar?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Para consultas generales, recomendamos agendar con al menos 24 horas de anticipación. Para especialidades o cirugías programadas, te sugerimos hacerlo con 3-5 días de antelación para asegurar disponibilidad.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="citas">
                    <div class="faq-question">
                        <h3>¿Puedo cancelar o reprogramar mi cita?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, puedes cancelar o reprogramar tu cita con al menos 12 horas de anticipación sin costo alguno. Puedes hacerlo a través de nuestra web, por teléfono o correo electrónico.</p>
                    </div>
                </div>

                <!-- Pagos -->
                <div class="faq-item" data-category="pagos">
                    <div class="faq-question">
                        <h3>¿Qué métodos de pago aceptan?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Aceptamos efectivo, tarjetas de débito y crédito (Visa, MasterCard, American Express), transferencias bancarias y pagos digitales. También ofrecemos planes de financiamiento para cirugías y tratamientos prolongados.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="pagos">
                    <div class="faq-question">
                        <h3>¿Trabajan con seguros para mascotas?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, trabajamos con las principales aseguradoras de mascotas del país. Proporcionamos toda la documentación necesaria para que puedas hacer el reembolso correspondiente con tu aseguradora.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="pagos">
                    <div class="faq-question">
                        <h3>¿Ofrecen planes de membresía?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, tenemos planes anuales que incluyen consultas ilimitadas, descuentos en vacunas, desparasitación, y servicios de estética. Consulta con nuestro personal por los planes disponibles según las necesidades de tu mascota.</p>
                    </div>
                </div>

                <!-- Emergencias -->
                <div class="faq-item" data-category="emergencias">
                    <div class="faq-question">
                        <h3>¿Tienen servicio de urgencias 24/7?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, contamos con servicio de urgencias disponible las 24 horas del día, los 7 días de la semana, incluyendo feriados. Nuestro equipo de emergencias está siempre listo para atender casos críticos.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="emergencias">
                    <div class="faq-question">
                        <h3>¿Qué debo hacer en caso de emergencia?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Llama inmediatamente a nuestro número de emergencias. Mantén la calma, sigue las instrucciones del personal y trae a tu mascota lo antes posible. Si es posible, llama mientras te diriges a la clínica para que preparemos todo para su llegada.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="emergencias">
                    <div class="faq-question">
                        <h3>¿Tienen servicio de ambulancia para mascotas?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, contamos con servicio de ambulancia equipada para casos de emergencia donde la mascota no pueda ser transportada de forma segura. Este servicio está disponible dentro de la ciudad y zonas cercanas.</p>
                    </div>
                </div>

                <!-- General -->
                <div class="faq-item" data-category="servicios">
                    <div class="faq-question">
                        <h3>¿Debo llevar el carnet de vacunación?</h3>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p>Es altamente recomendable traer el carnet de vacunación y cualquier historial médico previo en la primera consulta. Esto nos permite tener un registro completo y dar el mejor seguimiento a la salud de tu mascota.</p>
                    </div>
                </div>

            </div>

        </section>

        <!-- CTA Promo (Contact Banner) -->
        <section class="cta-promo animate-fade-up">
            <div class="promo-left">
                <span class="sub-tag" style="color: #fff; opacity: 0.8;">¿No encontraste lo que buscabas?</span>
                <h2>Estamos Aquí <br>Para Ayudarte</h2>
                <p style="margin-bottom: 30px; font-size: 1.1rem; opacity: 0.9;">
                    Si tienes alguna pregunta que no está en esta lista, no dudes en contactarnos. Nuestro equipo estará encantado de ayudarte.
                </p>
                <a href="{{ route('contacto.index') }}" class="btn btn-white-card" style="color: #e17055;">Contáctanos <i class="fas fa-envelope"></i></a>
            </div>
            <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Ayuda" class="promo-right-img">
        </section>

    </div>

@endsection

@push('scripts')
<script src="{{ asset('js/pages/welcome.js') }}"></script>
<script>
    // FAQ Accordion Logic
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');

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

    // Filter Logic
    const tabs = document.querySelectorAll('.tab-btn');
    const items = document.querySelectorAll('.faq-item');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Active State
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const filter = tab.getAttribute('data-filter');

            // Filtering
            items.forEach(item => {
                // Close all items when filtering
                item.classList.remove('active');

                if(filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush
