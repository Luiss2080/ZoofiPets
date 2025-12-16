<div id="loading-screen" class="loading-screen">
    <!-- Background animado (Copiado del estilo de login) -->
    <div class="loading-background">
        <div class="bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>
        <div class="bg-grid"></div>
        <!-- Elementos veterinarios -->
        <div class="vet-elements">
            <div class="floating-items">
                <!-- Huellas -->
                <div class="paw-print paw-1">
                    <div class="pad large"></div>
                    <div class="pad small s-1"></div>
                    <div class="pad small s-2"></div>
                    <div class="pad small s-3"></div>
                </div>
                <div class="paw-print paw-2">
                    <div class="pad large"></div>
                    <div class="pad small s-1"></div>
                    <div class="pad small s-2"></div>
                    <div class="pad small s-3"></div>
                </div>
                <div class="paw-print paw-3">
                    <div class="pad large"></div>
                    <div class="pad small s-1"></div>
                    <div class="pad small s-2"></div>
                    <div class="pad small s-3"></div>
                </div>
                <div class="paw-print paw-4">
                    <div class="pad large"></div>
                    <div class="pad small s-1"></div>
                    <div class="pad small s-2"></div>
                    <div class="pad small s-3"></div>
                </div>

                <!-- Huesos -->
                <div class="bone bone-1"></div>
                <div class="bone bone-2"></div>
                <div class="bone bone-3"></div>

                <!-- Cruces Médicas -->
                <div class="medical-cross cross-1"></div>
                <div class="medical-cross cross-2"></div>
                <div class="medical-cross cross-3"></div>

                <!-- Partículas de vida/salud -->
                <div class="health-particle hp-1"></div>
                <div class="health-particle hp-2"></div>
                <div class="health-particle hp-3"></div>
                <div class="health-particle hp-4"></div>
                <div class="health-particle hp-5"></div>
            </div>
        </div>
    </div>

    <!-- Contenido del Loading -->
    <div class="loading-content">
        <h1 class="loading-title">Bienvenido a <span class="highlight">ZoofiPets</span></h1>
        <div class="progress-container">
            <div class="progress-bar" id="progress-bar"></div>
        </div>
        <div class="percentage-text" id="percentage-text">0%</div>
        <p class="loading-text" id="loading-text">Preparando consulta...</p>
        <div class="loading-dots">
            <span>.</span><span>.</span><span>.</span>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Textos rotativos
        const texts = [
            "Preparando consulta...",
            "Verificando historial médico...",
            "Esterilizando instrumentos...",
            "Llamando a las mascotas...",
            "Organizando fichas...",
            "Cargando sistema..."
        ];
        let textIndex = 0;
        const textElement = document.getElementById('loading-text');
        
        setInterval(() => {
            textIndex = (textIndex + 1) % texts.length;
            if(textElement) {
                textElement.style.opacity = 0;
                setTimeout(() => {
                    textElement.innerText = texts[textIndex];
                    textElement.style.opacity = 1;
                }, 200);
            }
        }, 2000);

        // Simulación de barra de progreso
        const progressBar = document.getElementById('progress-bar');
        const percentageText = document.getElementById('percentage-text');
        const loadingScreen = document.getElementById('loading-screen');
        let progress = 0;

        // Simulación más natural con pausas y acelerones
        const simulateLoading = () => {
            if (progress >= 100) {
                progress = 100;
                updateUI();
                setTimeout(hideLoading, 500);
                return;
            }

            // Incremento variable
            let increment = Math.random() * 2;
            
            // A veces se detiene un poco (simulando carga pesada)
            if (Math.random() > 0.9) increment = 0;
            
            // A veces avanza rápido
            if (Math.random() > 0.95) increment = 10;

            progress += increment;
            if (progress > 100) progress = 100;
            
            updateUI();

            // Velocidad variable
            let nextTick = 30 + Math.random() * 100;
            setTimeout(simulateLoading, nextTick);
        };

        const updateUI = () => {
            if (progressBar) progressBar.style.width = progress + '%';
            if (percentageText) percentageText.innerText = Math.round(progress) + '%';
        };

        const hideLoading = () => {
            if(loadingScreen) {
                loadingScreen.classList.add('hidden');
                setTimeout(() => loadingScreen.remove(), 800);
            }
        };

        // Iniciar simulación
        setTimeout(simulateLoading, 500);
    });
</script>
