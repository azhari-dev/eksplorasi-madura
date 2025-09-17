<?php
// Include konfigurasi jika ada
if (file_exists(__DIR__ . '/config.php')) {
    include_once __DIR__ . '/config.php';
}
?>

<!-- Navigation -->
<nav class="navbar bg-white/80 backdrop-blur-md sticky top-0 z-50 shadow-md py-6">
    <div class="max-w-6xl mx-auto flex justify-between items-center px-6">
        <!-- Logo/Brand -->
        <h1 class="text-xl font-semibold text-gray-800">
            <?= isset($site_name) ? $site_name : 'Eksplorasi Madura'; ?>
        </h1>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-8">
            <a href="#" class="nav-link text-gray-600 hover:text-madura-orange transition-colors">
                Beranda
            </a>
            <a href="#wisata" class="nav-link text-gray-600 hover:text-madura-orange transition-colors">
                Wisata
            </a>
            <a href="#tentang" class="nav-link text-gray-600 hover:text-madura-orange transition-colors">
                Tentang
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="md:hidden mobile-menu-btn p-2 rounded-lg hover:bg-gray-100 transition-colors"
            aria-label="Toggle mobile menu"
            aria-expanded="false">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation Menu -->
    <div class="mobile-menu hidden md:hidden bg-white border-t shadow-lg">
        <div class="max-w-6xl mx-auto px-6 py-4 space-y-4">
            <a href="#" class="block nav-link text-gray-600 hover:text-madura-orange transition-colors py-2">
                Beranda
            </a>
            <a href="#wisata" class="block nav-link text-gray-600 hover:text-madura-orange transition-colors py-2">
                Wisata
            </a>
            <a href="#tentang" class="block nav-link text-gray-600 hover:text-madura-orange transition-colors py-2">
                Tentang
            </a>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle functionality
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const mobileMenu = document.querySelector('.mobile-menu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';

                // Toggle menu visibility
                mobileMenu.classList.toggle('hidden');

                // Update ARIA expanded state
                mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);

                // Update button icon
                const icon = mobileMenuBtn.querySelector('svg');
                if (!isExpanded) {
                    // Show close icon
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
                } else {
                    // Show hamburger icon
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
                }
            });

            // Close mobile menu saat klik link
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');

                    // Reset icon
                    const icon = mobileMenuBtn.querySelector('svg');
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
                });
            });

            // Close mobile menu saat click outside
            document.addEventListener('click', function(e) {
                if (!mobileMenuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                    mobileMenu.classList.add('hidden');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');

                    // Reset icon
                    const icon = mobileMenuBtn.querySelector('svg');
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
                }
            });
        }
    });
</script>