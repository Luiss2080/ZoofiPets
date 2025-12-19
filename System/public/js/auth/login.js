document.addEventListener("DOMContentLoaded", function () {
    console.log("Login Script Loaded");

    // Ensure loading screen is removed if it gets stuck
    window.onload = function () {
        const loadingScreen = document.getElementById("loading-screen");
        if (loadingScreen && loadingScreen.style.display !== "none") {
            // Redundant check to ensure it hides after load
            setTimeout(() => {
                loadingScreen.style.opacity = "0";
                setTimeout(() => {
                    loadingScreen.style.display = "none";
                }, 300);
            }, 800); // Wait a bit for the animation to finish
        }
    };

    // Form submission handling
    const loginForm = document.getElementById("loginForm");
    const loginButton = document.getElementById("loginButton");
    const buttonText = document.querySelector(".button-text");
    const buttonLoader = document.getElementById("buttonLoader");

    if (loginForm) {
        loginForm.addEventListener("submit", function () {
            if (loginButton) {
                loginButton.disabled = true;
                loginButton.classList.add("loading");
                if (buttonText) buttonText.style.display = "none";
                if (buttonLoader) buttonLoader.style.display = "block";
            }
        });
    }
});
