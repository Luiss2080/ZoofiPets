document.addEventListener('DOMContentLoaded', () => {
    /* --- Variables --- */
    const header = document.getElementById('main-header');
    const mobileMenu = document.getElementById('mobile-menu');
    const navToggle = document.getElementById('nav-toggle');
    const navClose = document.getElementById('nav-close');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    /* --- Menú Móvil --- */
    // Mostrar menú
    if (navToggle) {
        navToggle.addEventListener('click', () => {
            mobileMenu.classList.add('show');
            document.body.style.overflow = 'hidden'; // Prevenir scroll
        });
    }

    // Ocultar menú
    const closeMenu = () => {
        mobileMenu.classList.remove('show');
        document.body.style.overflow = ''; // Restaurar scroll
    };

    if (navClose) {
        navClose.addEventListener('click', closeMenu);
    }

    // Cerrar al hacer click fuera del contenido (en el overlay oscuro)
    if (mobileMenu) {
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                closeMenu();
            }
        });
    }

    // Ocultar menú al hacer click en un enlace
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            closeMenu();
            
            // Activar enlace actual
            mobileLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
        });
    });

    /* --- Efecto Scroll Header --- */
    const scrollHeader = () => {
        if (window.scrollY >= 20) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', scrollHeader);
});
