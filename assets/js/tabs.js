class TabsManager {
    constructor() {
        this.tabs = document.querySelectorAll('.tab-button');
        this.contents = document.querySelectorAll('.content-section');
        this.navButtons = document.querySelectorAll('a[href^="#edukasi-alam-"], a[href^="#edukasi-kuliner-"]');
        this.cardButtons = document.querySelectorAll('.cards-section button');
        
        this.init();
    }

    /**
     * Inisialisasi tabs manager
     */
    init() {
        this.bindTabEvents();
        this.bindNavButtonEvents();
        this.bindCardButtonEvents();
        this.setupInitialState();

        // Mekanisme 2: hash URL
        this.handleNavigation(window.location.hash);

        // Back/forward browser
        window.addEventListener('popstate', () => {
            this.handleNavigation(window.location.hash);
        });
    }

    /**
     * Setup state awal tabs
     */
    setupInitialState() {
        // Pastikan tab wisata alam aktif secara default
        this.activateTab('btn-alam', 'alam-content');
    }

    /**
     * Bind event listeners untuk tab buttons
     */
    bindTabEvents() {
        this.tabs.forEach(tab => {
            tab.addEventListener('click', (e) => {
                e.preventDefault();
                this.handleTabClick(tab);
            });
        });
    }

    /**
     * Handle klik pada tab
     * @param {HTMLElement} tab - Tab yang diklik
     */
    handleTabClick(tab) {
        const targetId = tab.id === 'btn-alam' ? 'alam-content' : 'kuliner-content';
        this.activateTab(tab.id, targetId);
    }

    /**
     * Aktifkan tab dan konten yang sesuai
     * @param {string} tabId - ID tab yang akan diaktifkan
     * @param {string} contentId - ID konten yang akan ditampilkan
     */
    // activateTab(tabId, contentId) {
    //     // Reset semua tabs
    //     this.tabs.forEach(tab => {
    //         tab.classList.remove('active', 'bg-green-800', 'text-white');
    //         tab.classList.add('text-green-800');
    //     });

    //     // Aktifkan tab yang dipilih
    //     const activeTab = document.getElementById(tabId);
    //     if (activeTab) {
    //         activeTab.classList.add('active', 'bg-green-800', 'text-white');
    //         activeTab.classList.remove('text-green-800');
    //     }

    //     // Sembunyikan semua konten
    //     this.contents.forEach(content => {
    //         content.classList.add('hidden');
    //     });

    //     // Tampilkan konten yang sesuai
    //     const activeContent = document.getElementById(contentId);
    //     if (activeContent) {
    //         activeContent.classList.remove('hidden');
    //     }
    // }
    
    activateTab(tabId, contentId) {
        // Reset semua tabs
        this.tabs.forEach(tab => {
            tab.classList.remove('active', 'bg-green-800', 'text-white');
            tab.classList.add('text-green-800');
            tab.setAttribute('aria-selected', 'false');
        });
        // Aktifkan tab yang dipilih
        const activeTab = document.getElementById(tabId);
        if (activeTab) {
            activeTab.classList.add('active', 'bg-green-800', 'text-white');
            activeTab.classList.remove('text-green-800');
            activeTab.setAttribute('aria-selected', 'true');
        }
        // Sembunyikan semua konten
        this.contents.forEach(content => {
            content.classList.add('hidden');
            content.setAttribute('aria-hidden', 'true');
        });
        // Tampilkan konten yang sesuai
        const activeContent = document.getElementById(contentId);
        if (activeContent) {
            activeContent.classList.remove('hidden');
            activeContent.setAttribute('aria-hidden', 'false');
        }
    }

    /**
     * Bind event listeners untuk tombol video
     */
    bindNavButtonEvents() {
        this.navButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                this.handleVideoButtonClick(btn);
            });
        });

        this.navButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const hash = button.getAttribute('href');
                history.pushState(null, null, hash);
                this.handleNavigation(hash);
            });
        });
    }

    handleNavigation(hash) {
        if (!hash) {
            this.activateTab('btn-alam', 'alam-content');
            return;
        }
        const targetElement = document.querySelector(hash);
        if (!targetElement) return;
        const category = hash.includes('alam') ? 'alam' : 'kuliner';
        this.activateTab(`btn-${category}`, `${category}-content`);
        setTimeout(() => {
            targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 100);
    }

    /**
     * Handle klik pada tombol video
     * @param {HTMLElement} btn - Button yang diklik
     */
    handleVideoButtonClick(btn) {
        const targetId = btn.getAttribute('href').replace('#', '');
        const targetElement = document.getElementById(targetId);
        
        if (targetElement) {
            // Tentukan parent section
            const parentSection = targetElement.closest('.content-section');
            
            if (parentSection) {
                // Aktifkan tab yang sesuai
                if (parentSection.id === 'kuliner-content') {
                    this.activateTab('btn-kuliner', 'kuliner-content');
                } else {
                    this.activateTab('btn-alam', 'alam-content');
                }

                // Scroll ke element setelah tab aktif
                setTimeout(() => {
                    this.scrollToElement(targetElement);
                }, 100);
            }
        }
    }

    /**
     * Bind event listeners untuk tombol di cards section
     */
    bindCardButtonEvents() {
        this.cardButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                this.handleCardButtonClick(btn);
            });
        });
    }

    /**
     * Handle klik pada tombol card
     * @param {HTMLElement} btn - Button yang diklik
     */
    handleCardButtonClick(btn) {
        const buttonText = btn.textContent.trim();
        
        if (buttonText.includes('Alam')) {
            this.activateTab('btn-alam', 'alam-content');
        } else if (buttonText.includes('Kuliner')) {
            this.activateTab('btn-kuliner', 'kuliner-content');
        }

        // Scroll ke section wisata
        const wisataSection = document.getElementById('wisata');
        if (wisataSection) {
            this.scrollToElement(wisataSection);
        }
    }

    /**
     * Smooth scroll ke element tertentu
     * @param {HTMLElement} element - Element tujuan scroll
     */
    scrollToElement(element) {
        element.scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
        });
    }

    /**
     * Get tab yang sedang aktif
     * @returns {HTMLElement|null} Tab yang sedang aktif
     */
    getActiveTab() {
        return document.querySelector('.tab-button.active');
    }

    /**
     * Get content yang sedang aktif
     * @returns {HTMLElement|null} Content yang sedang aktif
     */
    getActiveContent() {
        return document.querySelector('.content-section:not(.hidden)');
    }

    /**
     * Programmatically switch tab
     * @param {string} tabType - 'alam' atau 'kuliner'
     */
    switchTab(tabType) {
        if (tabType === 'alam') {
            this.activateTab('btn-alam', 'alam-content');
        } else if (tabType === 'kuliner') {
            this.activateTab('btn-kuliner', 'kuliner-content');
        }
    }

    /**
     * Check apakah tab tertentu sedang aktif
     * @param {string} tabType - 'alam' atau 'kuliner'
     * @returns {boolean} True jika tab sedang aktif
     */
    isTabActive(tabType) {
        const activeTab = this.getActiveTab();
        if (!activeTab) return false;

        if (tabType === 'alam') {
            return activeTab.id === 'btn-alam';
        } else if (tabType === 'kuliner') {
            return activeTab.id === 'btn-kuliner';
        }
        
        return false;
    }

    /**
     * Destroy tabs manager
     */
    destroy() {
        // Event listeners akan otomatis dibersihkan saat page unload
        this.tabs = null;
        this.contents = null;
        this.navButtons = null;
        this.cardButtons = null;
    }
}


document.addEventListener('DOMContentLoaded', function () {
    const tabsManager = new TabsManager();

    function handleInitialHash() {
        const hash = window.location.hash;
        if (hash) {
            const targetElement = document.querySelector(hash);
            if (targetElement) {
                // Cari parent .content-section
                const parentTabContent = targetElement.closest('.content-section');
                if (parentTabContent) {
                    // Aktifkan tab yang sesuai
                    if (parentTabContent.id === 'alam-content') {
                        tabsManager.activateTab('btn-alam', 'alam-content');
                    } else if (parentTabContent.id === 'kuliner-content') {
                        tabsManager.activateTab('btn-kuliner', 'kuliner-content');
                    }
                }
                // Scroll setelah tab aktif
                function tryScrollToTarget(retry = 0) {
                    if (
                        targetElement.offsetParent !== null &&
                        !targetElement.classList.contains('hidden')
                    ) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    } else if (retry < 20) {
                        setTimeout(() => tryScrollToTarget(retry + 1), 50);
                    }
                }
                tryScrollToTarget();
            }
        }
    }

    handleInitialHash();
    window.addEventListener('hashchange', handleInitialHash);
});


// Export untuk kemudahan testing dan reusability
if (typeof module !== 'undefined' && module.exports) {
    module.exports = TabsManager;
}