document.addEventListener('DOMContentLoaded', () => {
    /* --- Variables --- */
    const header = document.getElementById('main-header');
    const mobileMenu = document.getElementById('mobile-menu');
    const navToggle = document.getElementById('mobile-toggle');
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

    /* --- Efecto Ripple (Onda al hacer click) --- */
    const createRipple = (event) => {
        const button = event.currentTarget;
        const circle = document.createElement('span');
        const diameter = Math.max(button.clientWidth, button.clientHeight);
        const radius = diameter / 2;

        circle.style.width = circle.style.height = `${diameter}px`;
        circle.style.left = `${event.clientX - button.getBoundingClientRect().left - radius}px`;
        circle.style.top = `${event.clientY - button.getBoundingClientRect().top - radius}px`;
        circle.classList.add('ripple');

        const ripple = button.getElementsByClassName('ripple')[0];

        if (ripple) {
            ripple.remove();
        }

        button.appendChild(circle);
    };

    const buttons = document.querySelectorAll('.btn-register, .search-btn, .nav-link');
    buttons.forEach(btn => {
        btn.addEventListener('click', createRipple);
        // Asegurar que el botón tenga overflow hidden para que el ripple no se salga
        btn.style.overflow = 'hidden';
        if (getComputedStyle(btn).position === 'static') {
            btn.style.position = 'relative';
        }
    });
});
