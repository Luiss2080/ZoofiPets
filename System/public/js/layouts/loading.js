document.addEventListener("DOMContentLoaded", function () {
    const loadingScreen = document.getElementById("loading-screen");
    const progressBar = document.getElementById("loadingProgressBar");
    const percentage = document.getElementById("loadingPercentage");
    const systemLog = document.getElementById("systemLog");

    if (loadingScreen) {
        // Simulate loading progress
        let progress = 0;
        const logs = [
            "> Verificando módulos veterinarios...",
            "> Conectando base de datos...",
            "> Cargando interfaz de usuario...",
        ];

        const interval = setInterval(() => {
            progress += Math.floor(Math.random() * 10) + 5;
            if (progress > 100) progress = 100;

            if (progressBar) progressBar.style.width = `${progress}%`;
            if (percentage) percentage.textContent = `${progress}%`;

            // Add random logs
            if (progress % 30 === 0 && logs.length > 0) {
                const p = document.createElement("p");
                p.className = "log-line";
                p.textContent = logs.shift();
                if (systemLog) systemLog.appendChild(p);
            }

            if (progress === 100) {
                clearInterval(interval);
                setTimeout(() => {
                    loadingScreen.style.opacity = "0";
                    setTimeout(() => {
                        loadingScreen.style.display = "none";
                    }, 500);
                }, 500);
            }
        }, 100);
    }
});
