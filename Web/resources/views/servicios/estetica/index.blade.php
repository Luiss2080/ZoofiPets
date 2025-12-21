<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Estética Veterinaria | ZoofiPets</title>
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
			<div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1518715308788-3005759c61d3?auto=format&fit=crop&w=1200&q=80'); min-height: 350px;">
				<div class="slide-overlay">
					<div class="hero-text centered">
						<h1 class="animate-title">Estética Veterinaria</h1>
						<p class="animate-subtitle">Cuidado profesional para la imagen, higiene y bienestar de tu mascota. Servicios de baño, corte, spa y más, en manos de expertos.</p>
						<div class="hero-actions animate-fade-up">
							<a href="{{ route('citas.solicitud.index') }}" class="btn btn-primary">Agendar Estética</a>
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
						<h2>¿Por qué la estética es importante?</h2>
					</div>
				</div>
				<div class="header-bottom-row animate-fade-left">
					<div class="subtitle-container">
						<p class="section-subtitle-long">
							La higiene y el cuidado estético no solo mejoran la apariencia de tu mascota, también previenen enfermedades de piel, parásitos y mejoran su calidad de vida.
						</p>
						<div class="trust-indicators">
							<span class="trust-item"><i class="fas fa-scissors"></i> Groomers certificados</span>
							<span class="trust-item"><i class="fas fa-bath"></i> Productos hipoalergénicos</span>
						</div>
					</div>
					<div class="header-stats-column">
						<div class="header-stats">
							<span class="stat-badge"><i class="fas fa-star"></i> Atención personalizada</span>
							<span class="stat-badge"><i class="fas fa-spa"></i> Spa relajante</span>
							<span class="stat-badge"><i class="fas fa-paw"></i> Mascotas felices</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Servicios de Estética -->
		<section class="feature-section-wide animate-fade-up-delay">
			<div class="feature-container">
				<div class="feature-visual-left">
					<div class="circle-bg"></div>
					<img src="https://images.unsplash.com/photo-1518717758536-85ae29035b6d?auto=format&fit=crop&w=600&q=80" alt="Estética Mascotas" class="feature-img">
					<div class="floating-badge">
						<i class="fas fa-leaf"></i> Productos naturales
					</div>
				</div>
				<div class="feature-content-right">
					<div class="feature-header">
						<span class="sub-tag">Belleza & Bienestar</span>
						<h2>¿Qué ofrecemos?</h2>
					</div>
					<ul class="benefits-grid">
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Baño y secado profesional</li>
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Corte de pelo y uñas</li>
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Limpieza de oídos y glándulas</li>
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Spa relajante y masajes</li>
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Deslanado y desenredado</li>
						<li class="benefit-item"><i class="fas fa-check-circle"></i> Accesorios y fragancias</li>
					</ul>
					<div class="feature-actions">
						<a href="{{ route('citas.solicitud.index') }}" class="btn-white-card">Solicitar servicio <i class="fas fa-arrow-right"></i></a>
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
							¿Tienes dudas sobre el proceso, productos o cuidados? Consulta nuestras respuestas o agenda una cita para asesoría personalizada.
						</p>
					</div>
				</div>
			</div>
			<div class="faq-list">
				<div class="faq-item">
					<h4>¿Cada cuánto debo llevar a mi mascota a estética?</h4>
					<p>Se recomienda cada 4-6 semanas, dependiendo del tipo de pelaje y estilo de vida.</p>
				</div>
				<div class="faq-item">
					<h4>¿Qué productos utilizan?</h4>
					<p>Solo productos hipoalergénicos, naturales y adaptados a cada tipo de piel y pelaje.</p>
				</div>
				<div class="faq-item">
					<h4>¿Puedo solicitar solo corte de uñas?</h4>
					<p>Sí, puedes agendar servicios individuales como corte de uñas, limpieza de oídos, etc.</p>
				</div>
			</div>
		</section>
	</div>

	@include('components.footer')
	<script src="{{ asset('js/pages/welcome.js') }}"></script>
</body>
</html>
