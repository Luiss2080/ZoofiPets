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
        
        <!-- Hero -->
        <section class="new-hero">
            <div class="hero-text">
                <h1>Best for <br>your little pet</h1>
                <p>En ZoofiPets combinamos tecnología avanzada con amor incondicional para brindar la mejor atención veterinaria. Tu mascota merece lo mejor.</p>
                <div class="hero-search">
                    <input type="text" placeholder="Buscar productos, servicios...">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="hero-image-container">
                <div class="glass-card">
                    <img src="https://placehold.co/500x500/png?text=Happy+Pets" alt="Pets">
                </div>
            </div>
        </section>

        <!-- Categories -->
        <section class="categories-section">
            <div class="section-header-row">
                <h2>Your plays</h2>
                <a href="#" class="btn-sm">Ver todo <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="categories-grid">
                <!-- 5 Cards -->
                <div class="category-card">
                    <div class="category-image"><img src="https://placehold.co/150x150/png?text=Bag" alt="Bag"></div>
                    <div class="category-title">Travel Bag</div>
                    <span class="category-price">$120</span>
                    <a href="#" class="btn-sm">Shop</a>
                </div>
                <div class="category-card">
                    <div class="category-image"><img src="https://placehold.co/150x150/png?text=Carrier" alt="Carrier"></div>
                    <div class="category-title">Pet Carrier</div>
                    <span class="category-price">$85</span>
                    <a href="#" class="btn-sm">Shop</a>
                </div>
                <div class="category-card">
                    <div class="category-image"><img src="https://placehold.co/150x150/png?text=Kit" alt="Kit"></div>
                    <div class="category-title">Grooming Kit</div>
                    <span class="category-price">$45</span>
                    <a href="#" class="btn-sm">Shop</a>
                </div>
                <div class="category-card">
                    <div class="category-image"><img src="https://placehold.co/150x150/png?text=Flight" alt="Flight"></div>
                    <div class="category-title">Flight Box</div>
                    <span class="category-price">$210</span>
                    <a href="#" class="btn-sm">Shop</a>
                </div>
                <div class="category-card">
                    <div class="category-image"><img src="https://placehold.co/150x150/png?text=Toy" alt="Toy"></div>
                    <div class="category-title">Soft Toy</div>
                    <span class="category-price">$25</span>
                    <a href="#" class="btn-sm">Shop</a>
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
                    <img src="https://placehold.co/200x200/png?text=Dog" class="banner-img" alt="Dog">
                </div>
                <div class="promo-banner banner-teal">
                    <div class="banner-content">
                        <h3>Cozy Cats</h3>
                        <p>Camas calientitas.</p>
                        <a href="#" class="btn-sm" style="background:white; color:#2980b9;">Comprar</a>
                    </div>
                    <img src="https://placehold.co/200x200/png?text=Cat" class="banner-img" alt="Cat">
                </div>
            </div>
        </section>

        <!-- Feature (Orange) -->
        <section class="feature-section">
            <div class="feature-image">
                <img src="https://placehold.co/600x400/png?text=Owner+and+Pet" alt="Owner">
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
                    <div class="product-img-container"><img src="https://placehold.co/200x200/png?text=Cat+Food" alt="Product"></div>
                    <h4>Premium Cat Food</h4>
                    <span class="category-price">$45.00</span>
                </div>
                <div class="product-card">
                    <div class="product-img-container"><img src="https://placehold.co/200x200/png?text=Dog+Toy" alt="Product"></div>
                    <h4>Chew Toy</h4>
                    <span class="category-price">$15.00</span>
                </div>
                <div class="product-card">
                    <div class="product-img-container"><img src="https://placehold.co/200x200/png?text=Leash" alt="Product"></div>
                    <h4>Leather Leash</h4>
                    <span class="category-price">$35.00</span>
                </div>
                <div class="product-card">
                    <div class="product-img-container"><img src="https://placehold.co/200x200/png?text=Bed" alt="Product"></div>
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
                <img src="https://placehold.co/300x300/png?text=Puppy" class="promo-dog-img" alt="Puppy">
            </div>
        </section>

    </div>

    <!-- Footer Component -->
    @include('components.footer')
</body>
</html>
