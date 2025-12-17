<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'ZoofiPets') }} - Cuidado Veterinario Experto</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/layouts/loading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/welcome.css') }}">
</head>
<body>

    <!-- Header Component -->
    @include('components.header')

    <!-- Background Animado -->
    <div class="welcome-background">
        <div class="bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>
        <div class="bg-grid"></div>
        
        <!-- Elementos Veterinarios Flotantes -->
        <div class="vet-elements">
            <div class="floating-items">
                <!-- Huellas -->
                <div class="paw-print paw-1"><div class="pad large"></div><div class="pad small s-1"></div><div class="pad small s-2"></div><div class="pad small s-3"></div></div>
                <div class="paw-print paw-2"><div class="pad large"></div><div class="pad small s-1"></div><div class="pad small s-2"></div><div class="pad small s-3"></div></div>
                <div class="paw-print paw-3"><div class="pad large"></div><div class="pad small s-1"></div><div class="pad small s-2"></div><div class="pad small s-3"></div></div>
                
                <!-- Huesos -->
                <div class="bone bone-1"></div>
                <div class="bone bone-2"></div>
                
                <!-- Cruces Médicas -->
                <div class="medical-cross cross-1"></div>
                <div class="medical-cross cross-2"></div>
                
                <!-- Partículas -->
                <div class="health-particle hp-1"></div>
                <div class="health-particle hp-2"></div>
                <div class="health-particle hp-3"></div>
            </div>
        </div>
    </div>

    <div class="main-content-container">
        
        <!-- Hero Carousel -->
        <section class="hero-carousel-section full-width-carousel">
            <div class="carousel-container">
                <div class="carousel-track">
                    <!-- Slide 1 -->
                    <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1450778869180-41d0601e046e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                        <div class="slide-overlay">
                            <div class="hero-text centered">
                                <h1 class="animate-title">Lo mejor para <br>tu mascota</h1>
                                <p class="animate-subtitle">En ZoofiPets combinamos tecnología avanzada con amor incondicional. Todo lo que necesitas para su viaje y bienestar.</p>
                                <div class="hero-search animate-fade-up">
                                    <input type="text" placeholder="Buscar productos, servicios...">
                                    <button><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-slide" style="background-image: url('https://images.unsplash.com/photo-1548199973-03cce0bbc87b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                        <div class="slide-overlay">
                            <div class="hero-text centered">
                                <h1 class="animate-title">Salud y <br>Bienestar</h1>
                                <p class="animate-subtitle">Servicios veterinarios de primera clase y productos especializados para mantener a tu amigo feliz y saludable.</p>
                                <div class="hero-actions animate-fade-up">
                                    <a href="#" class="btn btn-primary">Agendar Cita</a>
                                    <a href="#" class="btn btn-outline">Ver Servicios</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-slide" style="background-image: url('https://images.unsplash.com/photo-1583337130417-3346a1be7dee?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
                        <div class="slide-overlay">
                            <div class="hero-text centered">
                                <h1 class="animate-title">Juguetes y <br>Accesorios</h1>
                                <p class="animate-subtitle">Descubre nuestra nueva colección de juguetes interactivos y accesorios de moda para tu peludo.</p>
                                <div class="hero-actions animate-fade-up">
                                    <a href="#" class="btn btn-primary">Ver Catálogo</a>
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

        <!-- Categories Carousel -->
        <section class="categories-section">
            <div class="section-header-row">
                <h2>Categorías Destacadas</h2>
                <div class="carousel-nav-buttons">
                    <button class="nav-btn prev-btn" onclick="moveCarousel(-1)"><i class="fas fa-chevron-left"></i></button>
                    <button class="nav-btn next-btn" onclick="moveCarousel(1)"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            
            <div class="product-carousel-wrapper">
                <div class="product-carousel-track" id="categoriesTrack">
                    <!-- Card 1 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1591337819702-5c21810edd47?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Travel Bag">
                        </div>
                        <div class="card-content">
                            <h3>Travel Bag</h3>
                            <span class="price">$120</span>
                            <a href="#" class="action-btn">Ver más</a>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pet Carrier">
                        </div>
                        <div class="card-content">
                            <h3>Pet Carrier</h3>
                            <span class="price">$85</span>
                            <a href="#" class="action-btn">Ver más</a>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Grooming Kit">
                        </div>
                        <div class="card-content">
                            <h3>Grooming Kit</h3>
                            <span class="price">$45</span>
                            <a href="#" class="action-btn">Ver más</a>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1576201836106-db1758fd1c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Flight Box">
                        </div>
                        <div class="card-content">
                            <h3>Flight Box</h3>
                            <span class="price">$210</span>
                            <a href="#" class="action-btn">Ver más</a>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1585837575652-267c041d77d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Soft Toy">
                        </div>
                        <div class="card-content">
                            <h3>Soft Toy</h3>
                            <span class="price">$25</span>
                            <a href="#" class="action-btn">Ver más</a>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1548767797-d8c844163c4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Food Bowl">
                        </div>
                        <div class="card-content">
                            <h3>Food Bowl</h3>
                            <span class="price">$15</span>
                            <a href="#" class="action-btn">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Banners -->
        <section class="banners-section">
            <div class="banners-grid">
                <div class="promo-banner banner-green">
                    <div class="banner-content">
                        <h3>Winter Set</h3>
                        <p>¡Prepárate para el frío!</p>
                        <a href="#" class="btn-sm" style="background:white; color:#16a085;">Comprar</a>
                    </div>
                    <!-- Image removed -->
                </div>
                <div class="promo-banner banner-teal">
                    <div class="banner-content">
                        <h3>Cozy Cats</h3>
                        <p>Camas calientitas.</p>
                        <a href="#" class="btn-sm" style="background:white; color:#2980b9;">Comprar</a>
                    </div>
                    <!-- Image removed -->
                </div>
            </div>
        </section>

        <!-- Feature (Orange) -->
        <section class="feature-section">
            <div class="feature-image">
                <!-- Image removed -->
            </div>
            <div class="feature-content">
                <h2>Nutrición y Bienestar</h2>
                <p>Descubre la mejor alimentación y suplementos para las necesidades específicas de tu mascota. Nos importa su salud tanto como a ti.</p>
                <div style="margin-top: 20px;">
                    <a href="#" class="btn-sm" style="background:white; color:#e67e22; padding: 10px 25px; font-size: 1rem;">Saber Más</a>
                </div>
            </div>
        </section>

        <!-- Products Grid -->
        <section class="products-section">
            <div class="section-header-row">
                <h2>Shop Pet</h2>
                <div class="filter-tabs">
                    <a href="#" class="btn-sm" style="background:#e67e22;">Todo</a>
                    <a href="#" class="btn-sm" style="background:transparent; border:1px solid white;">Perros</a>
                    <a href="#" class="btn-sm" style="background:transparent; border:1px solid white;">Gatos</a>
                </div>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-img-container"><!-- Image removed --></div>
                    <h4>Premium Cat Food</h4>
                    <span class="category-price">$45.00</span>
                </div>
                <div class="product-card">
                    <div class="product-img-container"><!-- Image removed --></div>
                    <h4>Chew Toy</h4>
                    <span class="category-price">$15.00</span>
                </div>
                <div class="product-card">
                    <div class="product-img-container"><!-- Image removed --></div>
                    <h4>Leather Leash</h4>
                    <span class="category-price">$35.00</span>
                </div>
                <div class="product-card">
                    <div class="product-img-container"><!-- Image removed --></div>
                    <h4>Comfy Bed</h4>
                    <span class="category-price">$80.00</span>
                </div>
            </div>
        </section>

        <!-- Footer Promo -->
        <section class="footer-promo">
            <div class="promo-left">
                <h2 style="font-size: 3rem; margin-bottom: 10px;">$1,000</h2>
                <p>¡Gana un día de compras para tu mascota!</p>
                <a href="#" class="btn-sm" style="background:white; color:#e67e22; width: fit-content; margin-top: 20px;">Participar</a>
            </div>
            <div class="promo-right">
                <h2 style="font-size: 2.5rem; z-index: 2;">Got You Pet</h2>
                <!-- Image removed -->
            </div>
        </section>

    </div>

    <!-- Footer Component -->
    @include('components.footer')

    <script>
        // Carousel Logic
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.indicator');
        const totalSlides = slides.length;
        let slideInterval;

        function goToSlide(n) {
            if (slides.length === 0) return;
            slides[currentSlide].classList.remove('active');
            indicators[currentSlide].classList.remove('active');
            currentSlide = (n + totalSlides) % totalSlides;
            slides[currentSlide].classList.add('active');
            indicators[currentSlide].classList.add('active');
            resetInterval();
        }

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }

        // Initialize
        if (slides.length > 0) {
            resetInterval();
        }

        // Product Carousel Logic
        const track = document.getElementById('categoriesTrack');
        let scrollAmount = 0;
        const cardWidth = 310; // Card width + gap (280 + 30)
        
        function moveCarousel(direction) {
            const maxScroll = track.scrollWidth - track.clientWidth;
            
            if (direction === 1) { // Next
                scrollAmount += cardWidth;
                if (scrollAmount > maxScroll) scrollAmount = 0; // Loop back to start
            } else { // Prev
                scrollAmount -= cardWidth;
                if (scrollAmount < 0) scrollAmount = maxScroll; // Loop to end
            }
            
            track.style.transform = `translateX(-${scrollAmount}px)`;
        }

        // Auto scroll for products (optional, slow)
        let productAutoScroll = setInterval(() => moveCarousel(1), 4000);

        // Pause on hover
        const productWrapper = document.querySelector('.product-carousel-wrapper');
        if(productWrapper) {
            productWrapper.addEventListener('mouseenter', () => clearInterval(productAutoScroll));
            productWrapper.addEventListener('mouseleave', () => {
                productAutoScroll = setInterval(() => moveCarousel(1), 4000);
            });
        }
    </script>
</body>
</html>
