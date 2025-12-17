document.addEventListener('DOMContentLoaded', function() {
    // Hero Carousel Logic
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');
    const totalSlides = slides.length;
    let slideInterval;

    function goToSlide(n) {
        if (slides.length === 0) return;
        slides[currentSlide].classList.remove('active');
        if(indicators[currentSlide]) indicators[currentSlide].classList.remove('active');
        
        currentSlide = (n + totalSlides) % totalSlides;
        
        slides[currentSlide].classList.add('active');
        if(indicators[currentSlide]) indicators[currentSlide].classList.add('active');
        
        resetInterval();
    }

    function nextSlide() {
        goToSlide(currentSlide + 1);
    }

    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 5000);
    }

    // Initialize Hero Carousel
    if (slides.length > 0) {
        resetInterval();
        
        // Add click events to indicators
        indicators.forEach((ind, index) => {
            ind.addEventListener('click', () => goToSlide(index));
        });
    }

    // Product Carousel Logic
    const track = document.getElementById('categoriesTrack');
    if (track) {
        let scrollAmount = 0;
        const cardWidth = 390; // Card width (350) + gap (40)
        
        window.moveCarousel = function(direction) {
            const maxScroll = track.scrollWidth - track.clientWidth;
            
            if (direction === 1) { // Next
                scrollAmount += cardWidth;
                if (scrollAmount > maxScroll) scrollAmount = 0; // Loop back to start
            } else { // Prev
                scrollAmount -= cardWidth;
                if (scrollAmount < 0) scrollAmount = maxScroll; // Loop to end
            }
            
            track.style.transform = `translateX(-${scrollAmount}px)`;
        };

        // Auto scroll for products (optional, slow)
        let productAutoScroll = setInterval(() => moveCarousel(1), 5000);

        // Pause on hover
        const productWrapper = document.querySelector('.product-carousel-wrapper');
        if(productWrapper) {
            productWrapper.addEventListener('mouseenter', () => clearInterval(productAutoScroll));
            productWrapper.addEventListener('mouseleave', () => {
                productAutoScroll = setInterval(() => moveCarousel(1), 5000);
            });
        }
    }
});
