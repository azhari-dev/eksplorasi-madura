class CarouselManager {
    constructor() {
        this.carousels = document.querySelectorAll('[id^="carousel-alam-"]');
        this.activeCarousel = null;
        this.slideInterval = null;
        this.transitionDuration = 600; // 0.6 detik
        
        this.init();
    }

    init() {
        this.setupCarousels();
        this.bindEvents();
    }

    setupCarousels() {
        this.carousels.forEach(carousel => {
            const images = carousel.querySelectorAll('.carousel-img');
            let idx = Array.from(images).findIndex(img => img.classList.contains('active'));
            if (idx === -1) idx = 0;

            // Setup prev button
            const prevBtn = carousel.querySelector('.carousel-prev');
            if (prevBtn) {
                prevBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    this.handlePrevClick(carousel, images, idx);
                });
            }

            // Setup next button
            const nextBtn = carousel.querySelector('.carousel-next');
            if (nextBtn) {
                nextBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    this.handleNextClick(carousel, images, idx);
                });
            }
        });
    }

    handlePrevClick(carousel, images, currentIdx) {
        const idx = Array.from(images).findIndex(img => img.classList.contains('active'));
        
        // Remove all transition classes
        images[idx].classList.remove('active', 'slide-in-right', 'slide-in-left', 'slide-out-left', 'slide-out-right');
        images[idx].classList.add('slide-out-right');

        // Calculate previous index
        const prevIdx = (idx - 1 + images.length) % images.length;

        // Setup previous image
        images[prevIdx].classList.remove('active', 'slide-in-right', 'slide-in-left', 'slide-out-left', 'slide-out-right');
        images[prevIdx].classList.add('slide-in-left');

        // Complete transition after animation
        setTimeout(() => {
            images[idx].classList.remove('slide-out-right');
            images[prevIdx].classList.remove('slide-in-left');
            images[idx].classList.remove('active');
            images[prevIdx].classList.add('active');
        }, this.transitionDuration);
    }

    handleNextClick(carousel, images, currentIdx) {
        const idx = Array.from(images).findIndex(img => img.classList.contains('active'));
        
        // Remove all transition classes
        images[idx].classList.remove('active', 'slide-in-right', 'slide-in-left', 'slide-out-left', 'slide-out-right');
        images[idx].classList.add('slide-out-left');

        // Calculate next index
        const nextIdx = (idx + 1) % images.length;

        // Setup next image
        images[nextIdx].classList.remove('active', 'slide-in-right', 'slide-in-left', 'slide-out-left', 'slide-out-right');
        images[nextIdx].classList.add('slide-in-right');

        // Complete transition after animation
        setTimeout(() => {
            images[idx].classList.remove('slide-out-left');
            images[nextIdx].classList.remove('slide-in-right');
            images[idx].classList.remove('active');
            images[nextIdx].classList.add('active');
        }, this.transitionDuration);
    }

    bindEvents() {
        // Handle clicks outside carousel
        document.addEventListener('click', (e) => {
            const isCarouselClick = [...this.carousels].some(carousel => 
                carousel.contains(e.target)
            );
            
            if (!isCarouselClick) {
                this.deactivateAllCarousels();
            }
        });

        // Handle visibility change
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                this.deactivateAllCarousels();
            }
        });
    }

    deactivateAllCarousels() {
        this.carousels.forEach(carousel => {
            carousel.classList.remove('carousel-active');
        });
        this.activeCarousel = null;
    }

    destroy() {
        this.deactivateAllCarousels();
    }
}

// Export untuk kemudahan testing dan reusability
if (typeof module !== 'undefined' && module.exports) {
    module.exports = CarouselManager;
}