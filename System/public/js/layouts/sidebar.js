/**
 * Sidebar Logic for ZoofiPets
 * Handles Theme Toggle and Mobile Menu
 */

document.addEventListener("DOMContentLoaded", function () {
    const themeSwitch = document.getElementById("themeSwitch");
    const body = document.body;

    // Check local storage for theme preference
    const currentTheme = localStorage.getItem("theme");
    if (currentTheme) {
        if (currentTheme === "dark") {
            body.classList.add("dark-mode");
            themeSwitch.checked = true;
        } else {
            body.classList.remove("dark-mode");
            themeSwitch.checked = false;
        }
    } else {
        // Default to dark mode for ZoofiPets
        body.classList.add("dark-mode");
        themeSwitch.checked = true;
    }

    // Toggle Theme
    const themeLabel = document.getElementById("theme-label");

    function updateThemeLabel(isDark) {
        if (themeLabel) {
            themeLabel.textContent = isDark ? "Modo Oscuro" : "Modo Claro";
        }
    }

    // Initial State Label
    if (
        localStorage.getItem("theme") === "dark" ||
        (!localStorage.getItem("theme") && true)
    ) {
        // Default dark
        updateThemeLabel(true);
    } else {
        updateThemeLabel(false);
    }

    if (themeSwitch) {
        themeSwitch.addEventListener("change", function (e) {
            if (e.target.checked) {
                body.classList.add("dark-mode");
                localStorage.setItem("theme", "dark");
                updateThemeLabel(true);
            } else {
                body.classList.remove("dark-mode");
                localStorage.setItem("theme", "light");
                updateThemeLabel(false);
            }
        });
    }

    // Active Link Highlight (Simple logic if not handled by server)
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach((link) => {
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("active");
        }
    });
});
