<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dermatología Veterinaria | ZoofiPets</title>
	<!-- Fonts y estilos principales -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('css/layouts/loading.css') }}">
	<link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
	<link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
	<link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
</head>
<body>
	@include('components.header')

	<div class="main-content-container">
		<!-- Hero Section -->
		<section class="hero-carousel-section full-width-carousel" style="min-height: 350px;">
			<div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1518717758536-85ae29035b6d?auto=format&fit=crop&w=1200&q=80'); min-height: 350px;">
				<div class="slide-overlay">
					<div class="hero-text centered">
						<h1 class="animate-title">Dermatología Veterinaria</h1>
						<p class="animate-subtitle">Diagnóstico y tratamiento especializado para la piel y pelaje de tu mascota. Cuidamos su salud y bienestar con tecnología avanzada y atención experta.</p>
						<div class="hero-actions animate-fade-up">
							<a href="{{ route('citas.solicitud.index') }}" class="btn btn-primary">Agendar Consulta</a>
							<a href="{{ route('servicios.index') }}" class="btn btn-outline">Ver más servicios</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Info Section -->
		<section class="categories-section">
			<div class="section-header-compact">
				<div class="header-top-row animate-fade-right">
					<div class="title-group">
						<h2>¿Por qué la dermatología es importante?</h2>
					</div>
				</div>
				<div class="header-bottom-row animate-fade-left">
					<div class="subtitle-container">
						<p class="section-subtitle-long">
							La piel es el órgano más grande de tu mascota y su primera barrera de defensa. Nuestros especialistas diagnostican y tratan alergias, infecciones, caída de pelo, parásitos, heridas crónicas y más.
						</p>
						<div class="trust-indicators">
							<span class="trust-item"><i class="fas fa-user-md"></i> Especialistas certificados</span>
							<span class="trust-item"><i class="fas fa-microscope"></i> Diagnóstico preciso</span>
						</div>
					</div>
					<div class="header-stats-column">
						<div class="header-stats">
							<span class="stat-badge"><i class="fas fa-star"></i> Atención personalizada</span>
							<span class="stat-badge"><i class="fas fa-vial"></i> Pruebas de laboratorio</span>
							<span class="stat-badge"><i class="fas fa-heartbeat"></i> Seguimiento integral</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Servicios de Dermatología -->
		<section class="feature-section-wide animate-fade-up-delay">
			<div class="feature-container">
				<div class="feature-visual-left">
					<div class="circle-bg"></div>
					<img src="https://images.unsplash.com/photo-1518715308788-3005759c61d3?auto=format&fit=crop&w=600&q=80" alt="Dermatología Mascotas" class="feature-img">
					<div class="floating-badge">
						<i class="fas fa-leaf"></i> Tratamientos seguros
					</div>
				</div>
				<div class="feature-content-right">
					<div class="feature-header">
						<span class="sub-tag">Salud de Piel & Pelaje</span>
						<h2>¿Qué tratamos?</h2>
					</div>
					<ul class="benefits-grid">
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Alergias y dermatitis</li>
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Infecciones bacterianas y fúngicas</li>
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Parásitos (pulgas, garrapatas, ácaros)</li>
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Caída excesiva de pelo</li>
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Heridas crónicas y cicatrización</li>
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Problemas de uñas y almohadillas</li>
					</ul>
					<div class="feature-actions">
						<a href="{{ route('citas.solicitud.index') }}" class="btn-white-card">Solicitar valoración <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</section>

		<!-- Preguntas Frecuentes -->
		<section class="categories-section animate-fade-up-delay">
			<div class="section-header-compact">
				<div class="header-top-row animate-fade-right">
					<div class="title-group">
						<h2>Preguntas Frecuentes</h2>
					</div>
				</div>
				<div class="header-bottom-row animate-fade-left">
					<div class="subtitle-container">
						<p class="section-subtitle-long">
							¿Tienes dudas sobre síntomas, tratamientos o cuidados? Consulta nuestras respuestas o agenda una cita para asesoría personalizada.
						</p>
					</div>
				</div>
			</div>
			<div class="faq-list">
				<div class="faq-item">
					<h4>¿Cuándo debo llevar a mi mascota al dermatólogo?</h4>
					<p>Si notas picazón constante, enrojecimiento, heridas que no sanan, caída de pelo o mal olor en la piel, es momento de consultar.</p>
				</div>
				<div class="faq-item">
					<h4>¿Qué exámenes se realizan?</h4>
					<p>Realizamos raspados, cultivos, pruebas de alergia y análisis de laboratorio según el caso.</p>
				</div>
				<div class="faq-item">
					<h4>¿El tratamiento es doloroso?</h4>
					<p>No, la mayoría de los tratamientos son tópicos o medicamentos orales, siempre buscando el bienestar de tu mascota.</p>
				</div>
			</div>
		</section>
	</div>

	@include('components.footer')
	<script src="{{ asset('js/pages/welcome.js') }}"></script>
</body>
</html>
