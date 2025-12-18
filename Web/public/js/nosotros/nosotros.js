document.addEventListener("DOMContentLoaded", function () {
    // Note: Main Hero Carousel logic is handled by welcome.js which is now included in the blade file.
    // We just need to initialize the Team Carousel here if it differs or needs specific handling.
    // Since welcome.js initializes 'categoriesTrack' and 'servicesTrack', and we used 'teamTrack' in blade,
    // we need to initialize 'teamTrack' here using similar logic or ensure welcome.js is generic enough.

    // Copying initCarousel function to ensure independence if welcome.js changes
    function initCarousel(trackId) {
        const track = document.getElementById(trackId);
        if (!track) return;

        let scrollAmount = 0;
        const cardWidth = 390; // Card width (350) + gap (40) roughly

        function moveCarousel(direction) {
            const maxScroll = track.scrollWidth - track.clientWidth;

            if (direction === 1) {
                // Next
                scrollAmount += cardWidth;
                if (scrollAmount > maxScroll) scrollAmount = 0; // Loop back to start
            } else {
                // Prev
                scrollAmount -= cardWidth;
                if (scrollAmount < 0) scrollAmount = maxScroll; // Loop to end
            }

            track.style.transform = `translateX(-${scrollAmount}px)`;
        }

        // Auto scroll
        let productAutoScroll = setInterval(() => moveCarousel(1), 5000);

        // Pause on hover
        const productWrapper = track.parentElement;
        if (productWrapper) {
            productWrapper.addEventListener("mouseenter", () =>
                clearInterval(productAutoScroll)
            );
            productWrapper.addEventListener("mouseleave", () => {
                productAutoScroll = setInterval(() => moveCarousel(1), 5000);
            });
        }
    }

    // Initialize Team Carousel
    initCarousel("teamTrack");
});
