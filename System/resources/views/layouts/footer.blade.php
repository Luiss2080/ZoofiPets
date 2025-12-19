{{-- Footer del Sistema - ZoofiPets --}}
<footer class="dashboard-footer" id="systemFooter">
    <div class="footer-container">
        
        <div class="footer-main-grid">
            <!-- Columna Izquierda: Contacto -->
            <div class="footer-column contact-column">
                <h3 class="footer-heading">Contacto</h3>
                <div class="contact-cards">
                    <!-- Dirección -->
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="card-info">
                            <span class="card-value">Av. Veterinaria #123</span>
                            <span class="card-sub">Santa Cruz, Bolivia</span>
                        </div>
                    </div>

                    <!-- Teléfono -->
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="card-info">
                            <span class="card-value">+591 3 123-4567</span>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="card-info">
                            <span class="card-value">info@zoofipets.com</span>
                        </div>
                    </div>

                    <!-- Horario -->
                    <div class="contact-card">
                        <div class="card-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="card-info">
                            <span class="card-value">Emergencias 24/7</span>
                            <span class="card-sub">Consultas: 8:00 - 20:00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Info ZoofiPets -->
            <div class="footer-column info-column">
                <h3 class="footer-heading">ZOOFIPETS</h3>
                <p class="footer-description">
                    Clínica Veterinaria líder en el cuidado integral de mascotas. Expertos en medicina preventiva, cirugía y bienestar animal.
                </p>

                <div class="feature-badges">
                    <div class="badge">
                        <i class="fas fa-heart"></i>
                        <span>Cuidado</span>
                    </div>
                    <div class="badge">
                        <i class="fas fa-stethoscope"></i>
                        <span>Expertos</span>
                    </div>
                    <div class="badge">
                        <i class="fas fa-award"></i>
                        <span>Calidad</span>
                    </div>
                </div>

                <div class="system-version-container">
                    <button class="version-btn">Versión 1.0</button>
                    <span class="build-text">Build #2025.1</span>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <!-- Brand -->
            <div class="footer-brand-section">
                <div class="brand-logo-container">
                    <img src="{{ asset('images/LogoHeader.png') }}" alt="ZoofiPets Logo" class="footer-logo-img">
                </div>
                <div class="brand-text">
                    <span class="brand-title">ZOOFIPETS</span>
                    <span class="brand-subtitle">Clínica Veterinaria</span>
                </div>
            </div>

            <!-- Social Icons (Purple Background) -->
            <div class="social-links">
                <a href="#" class="social-link facebook" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-link instagram" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-link tiktok" title="TikTok">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="#" class="social-link whatsapp" title="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                 <a href="#" class="social-link twitter" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-link linkedin" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>

            <!-- Copyright & Legal -->
            <div class="footer-legal-section">
                <div class="footer-copyright">
                    <span>&copy; {{ date('Y') }} ZoofiPets. Todos los derechos reservados.</span>
                </div>
                <div class="footer-links-row">
                    <a href="#privacy">Privacidad</a>
                    <span class="sep">|</span>
                    <a href="#terms">Términos</a>
                </div>
            </div>
        </div>
    </div>
</footer>