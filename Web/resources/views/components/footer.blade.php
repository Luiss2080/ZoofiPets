<footer class="zoofi-footer">
    <div class="footer-container">
        <div class="footer-top">
            <!-- Column 1: Contacto -->
            <div class="footer-column">
                <h3>Contacto</h3>
                
                <div class="footer-card">
                    <i class="fas fa-map-marker-alt footer-icon"></i>
                    <div class="footer-text">
                        <strong>Ubicación</strong>
                        Av. Principal #123, Santa Cruz
                    </div>
                </div>

                <div class="footer-card">
                    <i class="fas fa-phone-alt footer-icon"></i>
                    <div class="footer-text">
                        <strong>Llámanos</strong>
                        +591 3 456-7890
                    </div>
                </div>

                <div class="footer-card">
                    <i class="fas fa-envelope footer-icon"></i>
                    <div class="footer-text">
                        <strong>Email</strong>
                        info@zoofipets.com
                    </div>
                </div>

                <div class="footer-card">
                    <i class="fas fa-clock footer-icon"></i>
                    <div class="footer-text">
                        <strong>Horario</strong>
                        Lun - Dom: 24 Horas
                    </div>
                </div>
            </div>

            <!-- Column 2: Sistema -->
            <div class="footer-column">
                <h3>Sistema</h3>
                
                <a href="#" class="footer-card">
                    <i class="fas fa-home footer-icon"></i>
                    <div class="footer-text">Inicio</div>
                </a>

                <a href="#" class="footer-card active">
                    <i class="fas fa-stethoscope footer-icon"></i>
                    <div class="footer-text">Servicios</div>
                </a>

                <a href="#" class="footer-card">
                    <i class="fas fa-user-md footer-icon"></i>
                    <div class="footer-text">Especialistas</div>
                </a>

                <a href="#" class="footer-card">
                    <i class="fas fa-calendar-check footer-icon"></i>
                    <div class="footer-text">Reservar Cita</div>
                </a>

                <a href="#" class="footer-card">
                    <i class="fas fa-blog footer-icon"></i>
                    <div class="footer-text">Blog Veterinario</div>
                </a>
            </div>

            <!-- Column 3: ZoofiPets Info -->
            <div class="footer-column">
                <h3>ZoofiPets</h3>
                <p style="color: rgba(255,255,255,0.6); margin-bottom: 1.5rem; line-height: 1.6;">
                    Comprometidos con la salud y el bienestar de tus mascotas a través de tecnología y amor.
                </p>

                <div class="footer-card">
                    <i class="fas fa-check-circle footer-icon"></i>
                    <div class="footer-text">Atención Confiable</div>
                </div>

                <div class="footer-card">
                    <i class="fas fa-star footer-icon"></i>
                    <div class="footer-text">Tecnología Innovadora</div>
                </div>

                <div class="footer-card">
                    <i class="fas fa-heart footer-icon"></i>
                    <div class="footer-text">Trato Humanizado</div>
                </div>

                <div style="margin-top: 2rem;">
                    <span class="version-badge">VERSIÓN 2.0</span>
                    <span class="build-text">Build #2025.12</span>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="footer-bottom">
            <div class="brand-section">
                <img src="{{ asset('images/logs/LogoHeader.png') }}" alt="ZoofiPets" class="footer-logo">
                <div class="brand-info">
                    <h4>ZOOFIPETS</h4>
                    <span>VETERINARY CLINIC</span>
                </div>
            </div>

            <div class="social-links">
                <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
            </div>

            <div class="legal-links">
                <span>&copy; {{ date('Y') }} ZoofiPets. Todos los derechos reservados.</span>
                <div class="legal-nav">
                    <a href="#">Política de Privacidad</a>
                    <a href="#">Términos de Servicio</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Top Button -->
    <div class="scroll-top" id="scrollTopBtn">
        <i class="fas fa-chevron-up"></i>
    </div>

    <script>
        // Scroll Top Logic
        const scrollTopBtn = document.getElementById('scrollTopBtn');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</footer>
