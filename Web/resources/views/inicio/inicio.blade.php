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
            <div class="section-header-compact">
                <div class="header-top-row animate-fade-right">
                    <div class="title-group">
                        <h2>Categorías Destacadas</h2>
                    </div>
                    <div class="header-actions">
                        <a href="#" class="btn-white-card">Ver todo el catálogo <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="header-bottom-row animate-fade-left">
                    <div class="subtitle-container">
                        <p class="section-subtitle-long">
                            Descubre nuestra exclusiva gama de productos seleccionados por expertos para garantizar el máximo confort, seguridad y felicidad de tu mascota. Desde camas ortopédicas hasta juguetes interactivos de última generación.
                        </p>
                        <div class="trust-indicators">
                            <span class="trust-item"><i class="fas fa-paw"></i> +10k Mascotas Felices</span>
                            <span class="trust-item"><i class="fas fa-user-md"></i> Aprobado por Veterinarios</span>
                        </div>
                    </div>
                    <div class="header-stats-column">
                        <div class="header-stats">
                            <span class="stat-badge"><i class="fas fa-star"></i> Top Rated</span>
                            <span class="stat-badge"><i class="fas fa-shipping-fast"></i> Envío Rápido</span>
                            <span class="stat-badge"><i class="fas fa-shield-alt"></i> Garantía</span>
                        </div>
                        <div class="extra-benefits">
                            <span class="benefit-pill"><i class="fas fa-undo"></i> Devolución 30 días</span>
                            <span class="benefit-pill"><i class="fas fa-headset"></i> Soporte 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="product-carousel-wrapper animate-fade-up-delay">
                <div class="product-carousel-track" id="categoriesTrack">
                    <!-- Card 1 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1591337819702-5c21810edd47?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Travel Bag">
                            <div class="card-badge">Nuevo</div>
                        </div>
                        <div class="card-content">
                            <div class="rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                <span>(4.8)</span>
                            </div>
                            <h3>Travel Bag</h3>
                            <p class="card-description">Mochila ergonómica y ventilada para viajes largos con tu mascota.</p>
                            <div class="card-footer">
                                <span class="price">$120</span>
                                <button class="add-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1601758228041-f3b2795255f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pet Carrier">
                        </div>
                        <div class="card-content">
                            <div class="rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                <span>(4.0)</span>
                            </div>
                            <h3>Pet Carrier</h3>
                            <p class="card-description">Transportadora segura y cómoda, aprobada por aerolíneas.</p>
                            <div class="card-footer">
                                <span class="price">$85</span>
                                <button class="add-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Grooming Kit">
                            <div class="card-badge sale">Oferta</div>
                        </div>
                        <div class="card-content">
                            <div class="rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <span>(5.0)</span>
                            </div>
                            <h3>Grooming Kit</h3>
                            <p class="card-description">Set completo de cuidado y aseo para mantener su pelaje brillante.</p>
                            <div class="card-footer">
                                <span class="price">$45</span>
                                <button class="add-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1576201836106-db1758fd1c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Flight Box">
                        </div>
                        <div class="card-content">
                            <div class="rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                <span>(4.5)</span>
                            </div>
                            <h3>Flight Box</h3>
                            <p class="card-description">Jaula resistente de alto impacto para máxima seguridad en vuelos.</p>
                            <div class="card-footer">
                                <span class="price">$210</span>
                                <button class="add-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1585837575652-267c041d77d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Soft Toy">
                        </div>
                        <div class="card-content">
                            <div class="rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                <span>(4.2)</span>
                            </div>
                            <h3>Soft Toy</h3>
                            <p class="card-description">Juguete de felpa suave, ideal para cachorros y juegos tranquilos.</p>
                            <div class="card-footer">
                                <span class="price">$25</span>
                                <button class="add-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="product-card-modern">
                        <div class="card-image-wrapper">
                            <div class="blob-bg"></div>
                            <img src="https://images.unsplash.com/photo-1548767797-d8c844163c4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Food Bowl">
                        </div>
                        <div class="card-content">
                            <div class="rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <span>(4.9)</span>
                            </div>
                            <h3>Food Bowl</h3>
                            <p class="card-description">Plato antideslizante de diseño moderno y fácil limpieza.</p>
                            <div class="card-footer">
                                <span class="price">$15</span>
                                <button class="add-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wide Promo Section (Replaces Banners) -->
        <section class="promo-wide-section animate-fade-up-delay">
            <div class="decor-shape shape-1"></div>
            <div class="decor-shape shape-2"></div>
            <div class="promo-container">
                <div class="promo-content-left">
                    <div class="promo-tags">
                        <span class="promo-badge">Nueva Colección</span>
                        <span class="promo-badge outline">Edición Limitada</span>
                    </div>
                    <h2>Estilo & Confort <br>Para Tu Mascota</h2>
                    <p>Descubre accesorios diseñados para destacar. Calidad premium que combina con tu estilo de vida y la personalidad de tu mejor amigo.</p>
                    
                    <div class="promo-actions">
                        <a href="#" class="btn-white-card">Explorar Colección <i class="fas fa-arrow-right"></i></a>
                        <div class="promo-timer">
                            <span>Oferta termina en:</span>
                            <div class="timer-box">
                                <span class="time-part">24<small>h</small></span> : 
                                <span class="time-part">00<small>m</small></span>
                            </div>
                            <div class="progress-bar-mini"><div class="progress-fill"></div></div>
                        </div>
                    </div>
                </div>
                
                <div class="promo-visual-center">
                    <div class="glow-effect"></div>
                    <div class="floating-review">
                        <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <span>"A mi perro le encanta"</span>
                    </div>
                    <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Happy Dog" class="floating-img main-pet">
                </div>
                
                <div class="promo-content-right">
                    <div class="mini-feature-card animate-zoom-in" style="animation-delay: 0.2s;">
                        <div class="icon-box"><i class="fas fa-gift"></i></div>
                        <div class="text-box">
                            <h4>Regalo Gratis</h4>
                            <small>En compras > $50</small>
                        </div>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                    <div class="mini-feature-card animate-zoom-in" style="animation-delay: 0.4s;">
                        <div class="icon-box"><i class="fas fa-truck"></i></div>
                        <div class="text-box">
                            <h4>Envío Express</h4>
                            <small>Recíbelo mañana</small>
                        </div>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                    <div class="mini-feature-card animate-zoom-in" style="animation-delay: 0.6s;">
                        <div class="icon-box"><i class="fas fa-medal"></i></div>
                        <div class="text-box">
                            <h4>Calidad Premium</h4>
                            <small>Garantía de por vida</small>
                        </div>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature Wide Section (Nutrition) -->
        <section class="feature-section-wide animate-fade-up-delay">
            <div class="feature-container">
                <div class="feature-visual-left">
                    <div class="circle-bg"></div>
                    <img src="https://images.unsplash.com/photo-1589924691195-41432c84c161?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Healthy Dog Food" class="feature-img">
                    <div class="floating-badge">
                        <i class="fas fa-leaf"></i> 100% Natural
                    </div>
                </div>
                
                <div class="feature-content-right">
                    <div class="feature-header">
                        <span class="sub-tag">Salud & Vitalidad</span>
                        <h2>Nutrición Premium <br>Para Una Vida Larga</h2>
                    </div>
                    <p>Formulaciones científicas con ingredientes reales. Sin rellenos, sin conservantes artificiales. Solo lo mejor para su bienestar.</p>
                    
                    <div class="benefits-grid">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Proteína Real</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Sin Granos</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Vitaminas A+E</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Digestión Fácil</span>
                        </div>
                    </div>
                    
                    <div class="feature-actions">
                        <a href="#" class="btn-white-card">Ver Planes de Alimentación <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Grid -->
        <section class="products-section">
            <div class="section-header-compact">
                <div class="header-top-row animate-fade-right">
                    <div class="title-group">
                        <h2>Nuestros Productos</h2>
                    </div>
                    <div class="filter-tabs animate-fade-left">
                        <a href="#" class="filter-btn active">Todo</a>
                        <a href="#" class="filter-btn">Perros</a>
                        <a href="#" class="filter-btn">Gatos</a>
                    </div>
                </div>
                <div class="header-bottom-row animate-fade-left">
                    <p class="section-subtitle-long">
                        Explora nuestra colección completa de alimentos, juguetes y accesorios. Cada artículo ha sido probado para asegurar la máxima diversión y seguridad.
                    </p>
                    <div class="header-stats">
                        <span class="stat-badge"><i class="fas fa-check-circle"></i> Verificado</span>
                        <span class="stat-badge"><i class="fas fa-heart"></i> Favoritos</span>
                    </div>
                </div>
            </div>
            <div class="products-grid">
                <div class="product-card animate-zoom-in" style="animation-delay: 0.1s;">
                    <div class="product-img-container"><!-- Image removed --></div>
                    <h4>Premium Cat Food</h4>
                    <span class="category-price">$45.00</span>
                </div>
                <div class="product-card animate-zoom-in" style="animation-delay: 0.2s;">
                    <div class="product-img-container"><!-- Image removed --></div>
                    <h4>Chew Toy</h4>
                    <span class="category-price">$15.00</span>
                </div>
                <div class="product-card animate-zoom-in" style="animation-delay: 0.3s;">
                    <div class="product-img-container"><!-- Image removed --></div>
                    <h4>Leather Leash</h4>
                    <span class="category-price">$35.00</span>
                </div>
                <div class="product-card animate-zoom-in" style="animation-delay: 0.4s;">
                    <div class="product-img-container"><!-- Image removed --></div>
                    <h4>Comfy Bed</h4>
                    <span class="category-price">$80.00</span>
                </div>
            </div>
        </section>

        <!-- Footer Promo -->
        <section class="footer-promo">
            <div class="promo-left animate-fade-right">
                <h2 class="promo-amount">$1,000</h2>
                <p class="promo-text">¡Gana un día de compras para tu mascota!</p>
                <a href="#" class="btn-white-card">Participar Ahora <i class="fas fa-ticket-alt"></i></a>
            </div>
            <div class="promo-right animate-fade-left">
                <h2 class="promo-brand">Got You Pet</h2>
                <!-- Image removed -->
            </div>
        </section>

    </div>

    <!-- Footer Component -->
    @include('components.footer')

    <script src="{{ asset('js/pages/welcome.js') }}"></script>
</body>
</html>
