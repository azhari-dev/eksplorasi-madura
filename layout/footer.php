<?php
// Include konfigurasi jika ada
if (file_exists(__DIR__ . '/config.php')) {
    include_once __DIR__ . '/config.php';
}

// Set default values
$current_year = date('Y');
$university_name = isset($university_name) ? $university_name : 'Universitas Trunojoyo Madura';
$site_name = isset($site_name) ? $site_name : 'Eksplorasi Madura';
?>

<!-- Footer -->
<footer class="bg-white flex justify-center border-t mt-20 px-6 py-8">
    <div class="grid md:grid-cols-3 max-w-6xl gap-36 px-6 mobile">
        <!-- Brand Section -->
        <div class="col-span-1">
            <h3 class="text-lg font-semibold text-madura-orange mb-3">
                <?= $site_name; ?>
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Platform yang didedikasikan untuk memperkenalkan keindahan wisata alam
                dan kuliner khas Madura kepada dunia.
            </p>
        </div>

        <!-- Quick Links -->
        <div class="col-span-1 mx-auto" id="quick-links-2">
            <h4 class="text-md font-medium text-madura-orange mb-3">Quick Links</h4>
            <ul class="space-y-2">
                <li>
                    <a href="#" class="text-gray-600 hover:text-madura-orange transition-colors text-sm">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="#wisata" class="text-gray-600 hover:text-madura-orange transition-colors text-sm">
                        Wisata Alam
                    </a>
                </li>
                <li>
                    <a href="#wisata" class="text-gray-600 hover:text-madura-orange transition-colors text-sm">
                        Wisata Kuliner
                    </a>
                </li>
                <li>
                    <a href="#tentang" class="text-gray-600 hover:text-madura-orange transition-colors text-sm">
                        Tentang Kami
                    </a>
                </li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div class="col-span-1">
            <h4 class="text-md font-medium text-madura-orange mb-3">Kontak</h4>
            <div class="space-y-2 text-sm text-gray-600">
                <p>
                    <svg class="w-4 h-4 inline-block mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                    Bangkalan, Madura, Jawa Timur
                </p>
                <p>
                    <svg class="w-4 h-4 inline-block mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                    info@eksplorasi-madura.ac.id
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Bottom Footer -->
<footer class="bg-white border-t py-6">
    <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0">
        <!-- Copyright -->
        <div class="text-center md:text-left">
            <p class="text-gray-600 text-sm">
                &copy; <?= $current_year; ?> <?= $site_name; ?>.
                <span class="text-madura-brown font-medium"><?= $university_name; ?></span>.
            </p>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="backToTop" class="fixed bottom-8 right-8 bg-madura-orange text-white p-3 rounded-full shadow-lg hover:bg-orange-600 transition-all duration-300 opacity-0 invisible z-50"
    aria-label="Back to top">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
    </svg>
</button>

<script>
    // Back to top functionality
    document.addEventListener('DOMContentLoaded', function() {
        const backToTopBtn = document.getElementById('backToTop');

        // Show/hide button berdasarkan scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.remove('opacity-0', 'invisible');
                backToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                backToTopBtn.classList.add('opacity-0', 'invisible');
                backToTopBtn.classList.remove('opacity-100', 'visible');
            }
        });

        // Smooth scroll to top
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>