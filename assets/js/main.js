const App = {
    carouselManager: null,
    tabsManager: null,
    isInitialized: false,

    /**
     * Inisialisasi aplikasi utama
     */
    init() {
        if (this.isInitialized) {
            console.warn('App sudah diinisialisasi sebelumnya');
            return;
        }

        console.log('🚀 Menginisialisasi Eksplorasi Madura...');
        
        try {
            // Inisialisasi managers
            this.initializeManagers();
            
            // Setup global event listeners
            this.setupGlobalEvents();
            
            // Setup accessibility features
            this.setupAccessibility();
            
            this.isInitialized = true;
            console.log('✅ Eksplorasi Madura berhasil diinisialisasi');
            
        } catch (error) {
            console.error('❌ Error saat inisialisasi:', error);
        }
    },

    /**
     * Inisialisasi semua managers
     */
    initializeManagers() {
        // Inisialisasi Carousel Manager
        if (typeof CarouselManager !== 'undefined') {
            this.carouselManager = new CarouselManager();
            console.log('📸 Carousel Manager diinisialisasi');
        }

        // Inisialisasi Tabs Manager  
        if (typeof TabsManager !== 'undefined') {
            this.tabsManager = new TabsManager();
            console.log('🗂️ Tabs Manager diinisialisasi');
        }
    },

    /**
     * Setup global event listeners
     */
    setupGlobalEvents() {
        // Smooth scroll untuk anchor links
        this.setupSmoothScroll();
        
        // Keyboard navigation
        this.setupKeyboardNavigation();
        
        // Window resize handler
        window.addEventListener('resize', this.debounce(this.handleResize.bind(this), 250));
        
        // Page visibility change
        document.addEventListener('visibilitychange', this.handleVisibilityChange.bind(this));
    },

    /**
     * Setup smooth scroll untuk semua anchor links
     */
    setupSmoothScroll() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                
                // Skip jika sudah dihandle oleh tabs manager
                if (href.startsWith('#edukasi-alam-') || href.startsWith('#edukasi-kuliner-')) {
                    return;
                }
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    },

    /**
     * Setup keyboard navigation untuk accessibility
     */
    setupKeyboardNavigation() {
        // Tab navigation untuk carousel
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                // ESC untuk menutup carousel aktif
                if (this.carouselManager && this.carouselManager.activeCarousel) {
                    this.carouselManager.deactivateAllCarousels();
                    this.carouselManager.stopCarousel();
                }
            }
            
            // Arrow keys untuk navigasi tabs
            if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
                const focusedElement = document.activeElement;
                if (focusedElement && focusedElement.classList.contains('tab-button')) {
                    e.preventDefault();
                    this.handleTabArrowNavigation(e.key, focusedElement);
                }
            }
        });
    },

    /**
     * Handle arrow navigation pada tabs
     * @param {string} key - Arrow key yang ditekan
     * @param {HTMLElement} currentTab - Tab yang sedang fokus
     */
    handleTabArrowNavigation(key, currentTab) {
        const tabs = Array.from(document.querySelectorAll('.tab-button'));
        const currentIndex = tabs.indexOf(currentTab);
        
        let newIndex;
        if (key === 'ArrowLeft') {
            newIndex = currentIndex > 0 ? currentIndex - 1 : tabs.length - 1;
        } else {
            newIndex = currentIndex < tabs.length - 1 ? currentIndex + 1 : 0;
        }
        
        const newTab = tabs[newIndex];
        if (newTab) {
            newTab.focus();
            newTab.click();
        }
    },

    /**
     * Handle window resize
     */
    handleResize() {
        // Restart carousel jika ada yang aktif (untuk responsive handling)
        if (this.carouselManager && this.carouselManager.activeCarousel) {
            this.carouselManager.stopCarousel();
            const images = this.carouselManager.activeCarousel.querySelectorAll('.carousel-img');
            const activeIndex = Array.from(images).findIndex(img => 
                img.classList.contains('active')
            );
            this.carouselManager.startCarousel(this.carouselManager.activeCarousel, activeIndex);
        }
    },

    /**
     * Handle visibility change (tab browser berubah)
     */
    handleVisibilityChange() {
        if (document.hidden) {
            // Pause carousel saat tab tidak aktif
            if (this.carouselManager) {
                this.carouselManager.stopCarousel();
            }
        } else {
            // Resume carousel saat tab aktif kembali
            if (this.carouselManager && this.carouselManager.activeCarousel) {
                const images = this.carouselManager.activeCarousel.querySelectorAll('.carousel-img');
                const activeIndex = Array.from(images).findIndex(img => 
                    img.classList.contains('active')
                );
                this.carouselManager.startCarousel(this.carouselManager.activeCarousel, activeIndex);
            }
        }
    },

    /**
     * Setup accessibility features
     */
    setupAccessibility() {
        // Add ARIA labels untuk carousel
        const carousels = document.querySelectorAll('[id^="carousel-alam-"]');
        carousels.forEach((carousel, index) => {
            carousel.setAttribute('role', 'region');
            carousel.setAttribute('aria-label', `Galeri gambar wisata ${index + 1}`);
            
            const images = carousel.querySelectorAll('.carousel-img');
            images.forEach((img, imgIndex) => {
                img.setAttribute('alt', `Gambar wisata ${index + 1} - foto ${imgIndex + 1}`);
            });
        });

        // Add ARIA labels untuk tabs
        const tabs = document.querySelectorAll('.tab-button');
        tabs.forEach(tab => {
            tab.setAttribute('role', 'tab');
            tab.setAttribute('tabindex', '0');
        });

        // Add skip link untuk keyboard users
        this.addSkipLink();
    },

    /**
     * Tambahkan skip link untuk accessibility
     */
    addSkipLink() {
        const skipLink = document.createElement('a');
        skipLink.href = '#wisata';
        skipLink.textContent = 'Skip to main content';
        skipLink.className = 'sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-blue-600 text-white p-2 rounded z-50';
        
        // Tambahkan CSS untuk sr-only jika belum ada
        if (!document.querySelector('.sr-only-styles')) {
            const style = document.createElement('style');
            style.className = 'sr-only-styles';
            style.textContent = `
                .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0, 0, 0, 0); white-space: nowrap; border: 0; }
                .focus\\:not-sr-only:focus { position: static; width: auto; height: auto; padding: 0.5rem; margin: 0; overflow: visible; clip: auto; white-space: normal; }
            `;
            document.head.appendChild(style);
        }
        
        document.body.insertBefore(skipLink, document.body.firstChild);
    },

    /**
     * Utility function untuk debouncing
     * @param {Function} func - Function yang akan di-debounce
     * @param {number} wait - Waktu tunggu dalam ms
     * @returns {Function} Debounced function
     */
    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },

    /**
     * Utility function untuk logging dengan timestamp
     * @param {string} message - Pesan log
     * @param {string} type - Tipe log (log, warn, error)
     */
    log(message, type = 'log') {
        const timestamp = new Date().toLocaleTimeString();
        console[type](`[${timestamp}] ${message}`);
    },

    /**
     * Get informasi status aplikasi
     * @returns {Object} Status aplikasi
     */
    getStatus() {
        return {
            isInitialized: this.isInitialized,
            hasCarouselManager: !!this.carouselManager,
            hasTabsManager: !!this.tabsManager,
            activeTab: this.tabsManager ? this.tabsManager.getActiveTab()?.id : null,
            activeCarousel: this.carouselManager ? this.carouselManager.activeCarousel?.id : null
        };
    },

    /**
     * Cleanup dan destroy aplikasi
     */
    destroy() {
        if (this.carouselManager) {
            this.carouselManager.destroy();
            this.carouselManager = null;
        }

        if (this.tabsManager) {
            this.tabsManager.destroy();
            this.tabsManager = null;
        }

        this.isInitialized = false;
        this.log('🧹 Aplikasi telah di-cleanup');
    }
};

// Auto-initialize saat DOM ready
document.addEventListener('DOMContentLoaded', () => {
    App.init();
});

// Cleanup saat page unload
window.addEventListener('beforeunload', () => {
    App.destroy();
});

// Export App untuk debugging di console
if (typeof window !== 'undefined') {
    window.ExploreMadura = App;
}

// Export untuk Node.js environment (testing)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = App;
}