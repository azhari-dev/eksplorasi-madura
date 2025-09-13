<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksplorasi Madura</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'madura-orange': '#D97706',
                        'madura-purple': '#8B5CF6',
                        'madura-brown': '#92400E'
                    }
                }
            }
        }
    </script>
    <style>
        .carousel-img {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            transition: transform 0.6s cubic-bezier(.4,0,.2,1), opacity 0.6s;
            opacity: 0;
            transform: translateX(100%);
            z-index: 0;
        }
        .carousel-img.active {
            opacity: 1;
            transform: translateX(0);
            z-index: 1;
        }
        .carousel-img.exit {
            opacity: 0;
            transform: translateX(-100%);
            z-index: 0;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 shadow-md py-6">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-6">
            <h1 class="text-xl font-semibold text-gray-800">Eksplorasi Madura</h1>
            <div class="flex space-x-8">
                <a href="#" class="text-gray-600 hover:text-madura-orange transition-colors">Beranda</a>
                <a href="#wisata" class="text-gray-600 hover:text-madura-orange transition-colors">Wisata</a>
                <a href="#tentang" class="text-gray-600 hover:text-madura-orange transition-colors">Tentang</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-6 py-16">
        <!-- Hero Section -->
        <section class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-madura-orange mb-6 leading-tight">
                Pengetahuan Tentang Wisata Alam dan<br>
                Wisata Kuliner Madura
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Temukan keindahan destinasi wisata dan ragam kuliner khas Madura melalui video interaktif dan presentasi informatif
            </p>
        </section>

        <!-- Cards Section -->
        <section class="grid md:grid-cols-2 gap-12 mb-8 cards-section">
            <!-- Wisata Alam Card -->
            <div class="bg-white rounded-2xl border-2 border-madura-brown p-8 shadow-sm hover:shadow-lg transition-shadow">
                <p class="text-gray-600 text-base mb-6 leading-relaxed">
                    Nikmati panorama alam, budaya dan keunikan tempat wisata terbaik dari berbagai daerah di Madura
                </p>
                <button class="bg-transparent border-2 border-madura-brown text-madura-brown px-6 py-2 rounded-lg hover:bg-madura-brown hover:text-white transition-colors font-medium">
                    Wisata Alam
                </button>
                
            </div>
            
            <!-- Wisata Kuliner Card -->
            <div class="bg-white rounded-2xl border-2 border-madura-brown p-8 shadow-sm hover:shadow-md transition-shadow">
                <p class="text-gray-600 text-base mb-6 leading-relaxed">
                    Jelajahi cita rasa kuliner tradisional hingga modern yang menjadi kebanggaan kuliner Madura
                </p>
                <button class="bg-transparent border-2 border-madura-brown text-madura-brown px-6 py-2 rounded-lg hover:bg-madura-brown hover:text-white transition-colors font-medium">
                    Wisata Kuliner
                </button>
            </div>
        </section>
        
        <!-- Video Button -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
            <a href="#video-alam-1" class="mx-auto bg-transparent border-2 border-madura-brown text-madura-brown px-6 py-2 rounded-lg hover:bg-madura-brown hover:text-white transition-colors font-medium">
                Video Alam 1
            </a>
            <a href="#video-alam-2" class="mx-auto bg-transparent border-2 border-madura-brown text-madura-brown px-6 py-2 rounded-lg hover:bg-madura-brown hover:text-white transition-colors font-medium">
                Video Alam 2
            </a>
            <a href="#video-alam-3" class="mx-auto bg-transparent border-2 border-madura-brown text-madura-brown px-6 py-2 rounded-lg hover:bg-madura-brown hover:text-white transition-colors font-medium">
                Video Alam 3
            </a>
            <a href="#video-alam-4" class="mx-auto bg-transparent border-2 border-madura-brown text-madura-brown px-6 py-2 rounded-lg hover:bg-madura-brown hover:text-white transition-colors font-medium">
                Video Alam 4
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <a href="#video-alam-5" class="mx-auto bg-transparent border-2 border-madura-brown text-madura-brown px-6 py-2 rounded-lg hover:bg-madura-brown hover:text-white transition-colors font-medium">
                Video Kuliner 1
            </a>
            <a href="#video-alam-6" class="mx-auto bg-transparent border-2 border-madura-brown text-madura-brown px-6 py-2 rounded-lg hover:bg-madura-brown hover:text-white transition-colors font-medium">
                Video Kuliner 2
            </a>
            <a href="#video-alam-7" class="mx-auto bg-transparent border-2 border-madura-brown text-madura-brown px-6 py-2 rounded-lg hover:bg-madura-brown hover:text-white transition-colors font-medium">
                Video Kuliner 3
            </a>
            <a href="#video-alam-8" class="mx-auto bg-transparent border-2 border-madura-brown text-madura-brown px-6 py-2 rounded-lg hover:bg-madura-brown hover:text-white transition-colors font-medium">
                Video Kuliner 4
            </a>
        </div>

        <!-- Toggle Buttons -->
        <section class="flex justify-center pt-24" id="wisata">
            <div class="flex border-2 border-amber-800 rounded-full p-1 space-x-1 bg-white shadow-sm">
                <button id="tab-alam" class="tab-button active py-2 px-10 rounded-full transition-colors duration-300 font-semibold bg-amber-800 text-white">
                    Wisata Alam
                </button>
                <button id="tab-kuliner" class="tab-button py-2 px-10 rounded-full transition-colors duration-300 font-semibold text-amber-800">
                    Wisata Kuliner
                </button>
            </div>
        </section>

         <!-- Content Display Section -->
        <div class="mb-8">
            <section id="content-alam" class="tab-content">
                <div class="pt-24" id="video-alam-1">
                    <!-- Section Title -->
                    <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                        Wisata Alam 1
                    </h3>
                    <!-- Image Gallery -->
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Image 1 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group aspect-video">
                            <video controls class="w-full h-full object-cover">
                                <source src="video-demo-1.mp4" type="video/mp4">
                                Browser Anda tidak mendukung video.
                            </video>
                        </div>
            
                        <!-- Image 2 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group aspect-video carousel-active hover:cursor-pointer" id="carousel-alam-1">
                            <img src="gambar-1.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img active">
                            <img src="gambar-2.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img">
                            <img src="gambar-3.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img">
                        </div>
                    </div>
                </div>
                <div class="pt-24" id="video-alam-2">
                    <!-- Section Title -->
                    <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                        Wisata Alam 2
                    </h3>
                    <!-- Image Gallery -->
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Image 1 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group aspect-video">
                            <video controls class="w-full h-full object-cover">
                                <source src="video-demo-1.mp4" type="video/mp4">
                                Browser Anda tidak mendukung video.
                            </video>
                        </div>
            
                        <!-- Image 2 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group aspect-video hover:cursor-pointer" id="carousel-alam-2">
                            <img src="gambar-1.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img active">
                            <img src="gambar-2.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img">
                            <img src="gambar-3.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img">
                        </div>
                    </div>
                </div>
                <div class="pt-24" id="video-alam-3">
                    <!-- Section Title -->
                    <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                        Wisata Alam 3
                    </h3>
                    <!-- Image Gallery -->
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Image 1 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group aspect-video">
                            <video controls class="w-full h-full object-cover">
                                <source src="video-demo-1.mp4" type="video/mp4">
                                Browser Anda tidak mendukung video.
                            </video>
                        </div>
            
                        <!-- Image 2 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group aspect-video hover:cursor-pointer" id="carousel-alam-3">
                            <img src="gambar-1.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img active">
                            <img src="gambar-2.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img">
                            <img src="gambar-3.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img">
                        </div>
                    </div>
                </div>
                <div class="pt-24" id="video-alam-4">
                    <!-- Section Title -->
                    <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                        Wisata Alam 4
                    </h3>
                    <!-- Image Gallery -->
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Image 1 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group aspect-video">
                            <video controls class="w-full h-full object-cover">
                                <source src="video-demo-1.mp4" type="video/mp4">
                                Browser Anda tidak mendukung video.
                            </video>
                        </div>
            
                        <!-- Image 2 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group aspect-video hover:cursor-pointer" id="carousel-alam-4">
                            <img src="gambar-1.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img active">
                            <img src="gambar-2.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img">
                            <img src="gambar-3.jpg" alt="alam-1" class="w-full h-full object-cover carousel-img">
                        </div>
                    </div>
                </div>
            </section>

            <section id="content-kuliner" class="tab-content hidden">
                <div class="pt-24" id="video-alam-5">
                    <!-- Section Title -->
                    <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                        Wisata Kuliner 1
                    </h3>
                    <!-- Image Gallery -->
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Image 1 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                            <div class="bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 h-64 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <svg class="w-16 h-16 mx-auto mb-2 opacity-70" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                    <p class="text-lg font-medium">Video Alam</p>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                        </div>
            
                        <!-- Image 2 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                            <div class="bg-gradient-to-br from-green-400 via-green-500 to-green-600 h-64 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <svg class="w-16 h-16 mx-auto mb-2 opacity-70" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                    <p class="text-lg font-medium">Presentasi Alam</p>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                        </div>
                    </div>
                </div>
                <div class="pt-24" id="video-alam-6">
                    <!-- Section Title -->
                    <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                        Wisata Kuliner 2
                    </h3>
                    <!-- Image Gallery -->
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Image 1 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                            <div class="bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 h-64 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <svg class="w-16 h-16 mx-auto mb-2 opacity-70" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                    <p class="text-lg font-medium">Video Alam</p>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                        </div>
            
                        <!-- Image 2 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                            <div class="bg-gradient-to-br from-green-400 via-green-500 to-green-600 h-64 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <svg class="w-16 h-16 mx-auto mb-2 opacity-70" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                    <p class="text-lg font-medium">Presentasi Alam</p>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                        </div>
                    </div>
                </div>
                <div class="pt-24" id="video-alam-7">
                    <!-- Section Title -->
                    <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                        Wisata Kuliner 3
                    </h3>
                    <!-- Image Gallery -->
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Image 1 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                            <div class="bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 h-64 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <svg class="w-16 h-16 mx-auto mb-2 opacity-70" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                    <p class="text-lg font-medium">Video Alam</p>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                        </div>
            
                        <!-- Image 2 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                            <div class="bg-gradient-to-br from-green-400 via-green-500 to-green-600 h-64 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <svg class="w-16 h-16 mx-auto mb-2 opacity-70" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                    <p class="text-lg font-medium">Presentasi Alam</p>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                        </div>
                    </div>
                </div>
                <div class="pt-24" id="video-alam-8">
                    <!-- Section Title -->
                    <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                        Wisata Kuliner 4
                    </h3>
                    <!-- Image Gallery -->
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Image 1 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                            <div class="bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 h-64 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <svg class="w-16 h-16 mx-auto mb-2 opacity-70" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                    <p class="text-lg font-medium">Video Alam</p>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                        </div>
            
                        <!-- Image 2 -->
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                            <div class="bg-gradient-to-br from-green-400 via-green-500 to-green-600 h-64 flex items-center justify-center">
                                <div class="text-white text-center">
                                    <svg class="w-16 h-16 mx-auto mb-2 opacity-70" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                    <p class="text-lg font-medium">Presentasi Alam</p>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- About Section -->
        <section class="text-center pt-12" id="tentang">
            <h3 class="text-4xl font-bold text-madura-orange mb-6">
                Tentang Kami
            </h3>
            <p class="text-lg text-gray-600 mx-auto max-w-3xl">
                Eksplorasi Madura adalah platform yang didedikasikan untuk memperkenalkan keindahan wisata alam dan kuliner khas Madura. Kami berkomitmen untuk memberikan informasi yang akurat dan menarik bagi para wisatawan yang ingin menjelajahi pesona Madura.
            </p>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-20">
        <div class="container mx-auto px-6 py-6 text-center text-gray-600">
            <p>&copy; 2024 Eksplorasi Madura. Universitas Trunojoyo Madura.</p>
        </div>
    </footer>

    <script>
        // JavaScript untuk fungsionalitas Tab
        document.addEventListener('DOMContentLoaded', () => {
            // Carousel otomatis untuk section wisata alam

            // Carousel logic untuk semua carousel
            const carousels = document.querySelectorAll('[id^="carousel-alam-"]');
            let activeCarousel = null;
            let slideInterval = null;

            function startCarousel(carousel, startIdx = 0) {
                const images = carousel.querySelectorAll('.carousel-img');
                // let idx = Array.from(images).findIndex(img => img.classList.contains('active'));
                let idx = startIdx;
                if (idx === -1) idx = 0;

                // Bersihkan interval sebelumnya
                if (slideInterval) clearInterval(slideInterval);

                slideInterval = setInterval(() => {
                    images[idx].classList.remove('active');
                    images[idx].classList.add('exit');
                    let nextIdx = (idx + 1) % images.length;
                    images[nextIdx].classList.add('active');
                    images[nextIdx].classList.remove('exit');
                    setTimeout(() => {
                        images[idx].classList.remove('exit');
                        idx = nextIdx;
                    }, 600);
                }, 1500);
            }

            function stopCarousel() {
                if (slideInterval) clearInterval(slideInterval);
                slideInterval = null;
            }

            carousels.forEach(carousel => {
                carousel.addEventListener('click', function(e) {
                    // Jika klik pada gambar
                    if (e.target.classList.contains('carousel-img')) {
                        // Nonaktifkan semua carousel
                        carousels.forEach(c => c.classList.remove('carousel-active'));
                        // Aktifkan carousel yang diklik
                        carousel.classList.add('carousel-active');
                        activeCarousel = carousel;
                        // Set semua gambar nonaktif
                        const images = carousel.querySelectorAll('.carousel-img');
                        images.forEach(img => img.classList.remove('active', 'exit'));

                        // Aktifkan gambar yang diklik
                        e.target.classList.add('active');

                        stopCarousel();

                        // Mulai slide dari gambar yang diklik
                        const startIdx = Array.from(images).indexOf(e.target);
                        startCarousel(carousel, startIdx);
                    }
                });
            });

            // Jika klik di luar carousel, matikan slide
            document.addEventListener('click', function(e) {
                if (![...carousels].some(c => c.contains(e.target))) {
                    carousels.forEach(c => c.classList.remove('carousel-active'));
                    stopCarousel();
                }
            });


            // Fungsi untuk mengaktifkan tab dan konten sesuai id
            function activateTab(tabId, contentId) {
                const tabs = document.querySelectorAll('.tab-button');
                const contents = document.querySelectorAll('.tab-content');
                tabs.forEach(t => {
                    t.classList.remove('active', 'bg-amber-800', 'text-white');
                    t.classList.add('text-amber-800');
                });
                const activeTab = document.getElementById(tabId);
                if (activeTab) {
                    activeTab.classList.add('active', 'bg-amber-800', 'text-white');
                    activeTab.classList.remove('text-amber-800');
                }
                contents.forEach(content => {
                    content.classList.add('hidden');
                });
                const activeContent = document.getElementById(contentId);
                if (activeContent) {
                    activeContent.classList.remove('hidden');
                }
            }

            document.querySelectorAll('a[href^="#video-alam-"]').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = btn.getAttribute('href').replace('#', '');
                    const targetEl = document.getElementById(targetId);
                    if (targetEl) {
                        // Cek parent section (content-alam atau content-kuliner)
                        const parentSection = targetEl.closest('.tab-content');
                        if (parentSection && parentSection.id === 'content-kuliner') {
                            activateTab('tab-kuliner', 'content-kuliner');
                        } else {
                            activateTab('tab-alam', 'content-alam');
                        }
                        setTimeout(() => {
                            targetEl.scrollIntoView({ behavior: 'smooth' });
                        }, 100);
                    }
                });
            });

            // Event untuk tombol di cards section
            document.querySelectorAll('.cards-section button').forEach(btn => {
                btn.addEventListener('click', function() {
                    if (btn.textContent.includes('Alam')) {
                        activateTab('tab-alam', 'content-alam');
                        document.getElementById('wisata').scrollIntoView({ behavior: 'smooth' });
                    } else if (btn.textContent.includes('Kuliner')) {
                        activateTab('tab-kuliner', 'content-kuliner');
                        document.getElementById('wisata').scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });

            // segmented control
            const tabs = document.querySelectorAll('.tab-button');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Hapus kelas 'active' dari semua tab
                    tabs.forEach(t => {
                        t.classList.remove('active', 'bg-amber-800', 'text-white');
                        t.classList.add('text-amber-800');
                    });

                    // Tambahkan kelas 'active' ke tab yang diklik
                    tab.classList.add('active', 'bg-amber-800', 'text-white');
                    tab.classList.remove('text-amber-800');

                    // Sembunyikan semua konten
                    contents.forEach(content => {
                        content.classList.add('hidden');
                    });

                    // Tampilkan konten yang sesuai dengan tab yang diklik
                    const targetId = tab.id === 'tab-alam' ? 'content-alam' : 'content-kuliner';
                    const targetContent = document.getElementById(targetId);
                    if (targetContent) {
                        targetContent.classList.remove('hidden');
                    }
                });
            });
        });
    </script>
</body>
</html>