document.addEventListener('DOMContentLoaded', function() {
    const loadingScreen = document.getElementById('loading-screen');
    const progressBar = document.getElementById('progress-bar');
    const loadingText = document.getElementById('loading-text');
    
    let progress = 0;
    let interval;

    // Función para iniciar la animación de carga
    function startLoading() {
        loadingScreen.classList.remove('hidden');
        progress = 0;
        progressBar.style.width = '0%';
        
        clearInterval(interval);
        interval = setInterval(() => {
            // Incremento aleatorio para simular carga
            progress += Math.random() * 10;
            if (progress > 90) {
                progress = 90; // Mantener en 90% hasta que termine la carga real
            }
            progressBar.style.width = `${progress}%`;
        }, 200);
    }

    // Función para finalizar la carga
    function finishLoading() {
        clearInterval(interval);
        progress = 100;
        progressBar.style.width = '100%';
        loadingText.textContent = 'Carga completa';
        
        setTimeout(() => {
            loadingScreen.classList.add('hidden');
        }, 500); // Pequeño retardo para ver el 100%
    }

    // Iniciar carga al cargar la página (si no se ha ocultado ya por el script inline o CSS)
    // En este caso, asumimos que el loader es visible por defecto en el HTML
    startLoading();

    // Cuando la ventana termina de cargar completamente (imágenes, scripts, etc.)
    window.addEventListener('load', function() {
        finishLoading();
    });

    // Manejar navegación (mostrar loader al salir)
    document.addEventListener('click', function(e) {
        const link = e.target.closest('a');
        
        if (link) {
            const href = link.getAttribute('href');
            const target = link.getAttribute('target');
            
            // Verificar si es un enlace interno válido y no abre en nueva pestaña
            if (href && 
                !href.startsWith('#') && 
                !href.startsWith('javascript:') && 
                target !== '_blank' &&
                !e.ctrlKey && !e.metaKey) {
                
                // Mostrar loader antes de navegar
                loadingText.textContent = 'Procesando...';
                startLoading();
                
                // La navegación ocurrirá naturalmente
            }
        }
    });

    // Manejar envío de formularios
    document.addEventListener('submit', function(e) {
        const form = e.target;
        if (!form.target || form.target !== '_blank') {
            loadingText.textContent = 'Enviando datos...';
            startLoading();
        }
    });
});
