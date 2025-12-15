<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZoofiPets - Veterinaria Moderna</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logs/LogoPestaña.png') }}?v=100" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/logs/LogoPestaña.png') }}?v=100">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding-top: 70px; /* Espacio para el header fijo */
            color: #2D3436;
        }
        
        .hero-section {
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(135deg, #6C5CE7 0%, #8e44ad 100%);
            color: white;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            z-index: 2;
            max-width: 800px;
        }
        
        .hero-title {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            font-weight: 300;
        }
        
        .cta-button {
            display: inline-block;
            padding: 1rem 2.5rem;
            background-color: #00CEC9;
            color: white;
            text-decoration: none;
            font-weight: 600;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 206, 201, 0.4);
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 206, 201, 0.6);
            background-color: #00b5b0;
        }

        /* Decoración de fondo abstracta */
        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        .shape-1 { width: 300px; height: 300px; top: -50px; left: -50px; }
        .shape-2 { width: 500px; height: 500px; bottom: -100px; right: -100px; }
    </style>
</head>
<body>

    <!-- Incluir el componente Header -->
    @include('components.header')

    <!-- Contenido Principal -->
    <main>
        <section class="hero-section">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            
            <div class="hero-content">
                <h1 class="hero-title">Cuidado Experto para tus Mascotas</h1>
                <p class="hero-subtitle">Tecnología y amor unidos para el bienestar de tu mejor amigo.</p>
                <a href="#" class="cta-button">Reservar Cita</a>
            </div>
        </section>
    </main>

</body>
</html>
