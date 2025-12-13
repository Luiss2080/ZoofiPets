document.addEventListener('DOMContentLoaded', () => {
    /* --- Variables --- */
    const header = document.getElementById('main-header');
    const navMenu = document.getElementById('nav-menu');
    const navToggle = document.getElementById('nav-toggle');
    const navClose = document.getElementById('nav-close');
    const navLinks = document.querySelectorAll('.nav-link');

    /* --- Menú Móvil --- */
    // Mostrar menú
    if (navToggle) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.add('show');
        });
    }

    // Ocultar menú
    if (navClose) {
        navClose.addEventListener('click', () => {
            navMenu.classList.remove('show');
        });
    }

    // Ocultar menú al hacer click en un enlace
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('show');
            
            // Activar enlace actual
            navLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
        });
    });

    /* --- Efecto Scroll Header --- */
    const scrollHeader = () => {
        if (window.scrollY >= 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', scrollHeader);

    /* --- Efecto Hover Avanzado (Opcional) --- */
    // Añade una clase al header cuando el mouse entra para efectos adicionales si se desea
    header.addEventListener('mouseenter', () => {
        header.classList.add('hovered');
    });

    header.addEventListener('mouseleave', () => {
        header.classList.remove('hovered');
    });
});
