document.addEventListener('DOMContentLoaded', function() {
    const loadingScreen = document.getElementById('loading-screen');
    const progressBar = document.getElementById('progress-bar');
    const loadingText = document.getElementById('loading-text');
    
    let progress = 0;
    let progressInterval;
    let textInterval;
    let startTime;
    const minDuration = 4000; // 4 segundos mínimos de carga

    // Mensajes dinámicos para hacer la espera más amena
    const loadingMessages = [
        'Iniciando sistema...',
        'Conectando con el servidor...',
        'Verificando credenciales...',
        'Cargando recursos...',
        'Preparando interfaz...',
        'Sincronizando datos...',
        'Optimizando experiencia...',
        'Casi listo...'
    ];

    // Función para rotar los mensajes de texto
    function startTextRotation() {
        let index = 0;
        loadingText.textContent = loadingMessages[0];
        loadingText.style.opacity = 1;
        
        clearInterval(textInterval);
        textInterval = setInterval(() => {
            index = (index + 1) % loadingMessages.length;
            
            // Efecto fade out
            loadingText.style.opacity = 0;
            
            setTimeout(() => {
                loadingText.textContent = loadingMessages[index];
                // Efecto fade in
                loadingText.style.opacity = 1;
            }, 200);
            
        }, 800); // Cambiar mensaje cada 800ms
    }

    // Función para iniciar la animación de carga
    function startLoading() {
        loadingScreen.classList.remove('hidden');
        loadingScreen.style.opacity = '1';
        loadingScreen.style.visibility = 'visible';
        
        progress = 0;
        progressBar.style.width = '0%';
        startTime = Date.now();
        
        startTextRotation();

        clearInterval(progressInterval);
        
        // Barra de progreso lenta y constante
        // Queremos llegar al 90% en aproximadamente 3.5 segundos (3500ms)
        // 3500ms / 90 pasos = ~38ms por paso
        progressInterval = setInterval(() => {
            if (progress < 90) {
                // Incremento pequeño para suavidad
                progress += 0.5; 
                progressBar.style.width = `${progress}%`;
            }
        }, 20); 
    }

    // Función para finalizar la carga
    function finishLoading() {
        const elapsedTime = Date.now() - startTime;
        const remainingTime = Math.max(0, minDuration - elapsedTime);

        // Esperar el tiempo restante para cumplir los 4 segundos mínimos
        setTimeout(() => {
            clearInterval(progressInterval);
            clearInterval(textInterval);
            
            // Completar la barra
            progress = 100;
            progressBar.style.width = '100%';
            
            loadingText.style.opacity = 0;
            setTimeout(() => {
                loadingText.textContent = '¡Bienvenido!';
                loadingText.style.opacity = 1;
            }, 200);
            
            // Ocultar pantalla después de un momento de ver el 100%
            setTimeout(() => {
                loadingScreen.style.opacity = '0';
                setTimeout(() => {
                    loadingScreen.classList.add('hidden');
                }, 500); // Esperar a que termine la transición de opacidad
            }, 800); // Mantener "¡Bienvenido!" por casi un segundo
            
        }, remainingTime);
    }

    // Iniciar carga al cargar la página
    startLoading();

    // Cuando la ventana termina de cargar completamente
    window.addEventListener('load', function() {
        finishLoading();
    });

    // Manejar navegación (mostrar loader al salir)
    document.addEventListener('click', function(e) {
        const link = e.target.closest('a');
        
        if (link) {
            const href = link.getAttribute('href');
            const target = link.getAttribute('target');
            
            // Verificar si es un enlace interno válido
            if (href && 
                !href.startsWith('#') && 
                !href.startsWith('javascript:') && 
                target !== '_blank' &&
                !e.ctrlKey && !e.metaKey) {
                
                startLoading();
            }
        }
    });

    // Manejar envío de formularios
    document.addEventListener('submit', function(e) {
        const form = e.target;
        if (!form.target || form.target !== '_blank') {
            startLoading();
        }
    });
});
