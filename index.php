<?php

include_once 'layout/config.php';

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php echo generate_meta_tags(); ?>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: <?php echo json_encode($theme_colors, JSON_PRETTY_PRINT); ?>
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_asset_url('style.css', 'css'); ?>">
    
    <!-- Preload critical assets -->
    <link rel="preload" href="<?php echo get_asset_url('main.js', 'js'); ?>" as="script">
    <link rel="preload" href="<?php echo get_asset_url('carousel.js', 'js'); ?>" as="script">
    <link rel="preload" href="<?php echo get_asset_url('tabs.js', 'js'); ?>" as="script">
</head>
<body class="bg-gray-50 min-h-screen">
    
    <?php include 'layout/header.php'; ?>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-6 py-16">
        
        <!-- Hero Section -->
        <section class="text-center mb-16" role="banner">
            <h2 class="text-4xl md:text-5xl font-bold text-madura-orange mb-6 leading-tight">
                Pengetahuan Tentang Wisata Alam dan<br>
                Wisata Kuliner Madura
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                <?php echo $site_description; ?>
            </p>
        </section>

        <!-- Cards Section -->
        <section class="grid md:grid-cols-2 gap-12 mb-8 cards-section" role="region" aria-label="Kategori Wisata">
            <!-- Wisata Alam Card -->
            <div class="card bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-shadow">
                <p class="text-gray-600 text-base mb-6 leading-relaxed">
                    Nikmati panorama alam, budaya dan keunikan tempat wisata terbaik dari berbagai daerah di Madura
                </p>
                <button class="card-button bg-transparent px-6 py-2 rounded-lg font-medium">
                    Wisata Alam
                </button>
            </div>
            
            <!-- Wisata Kuliner Card -->
            <div class="card bg-white rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow">
                <p class="text-gray-600 text-base mb-6 leading-relaxed">
                    Jelajahi cita rasa kuliner tradisional hingga modern yang menjadi kebanggaan kuliner Madura
                </p>
                <button class="card-button bg-transparent px-6 py-2 rounded-lg font-medium">
                    Wisata Kuliner
                </button>
            </div>
        </section>
        
        <!-- Video Navigation Buttons -->
        <section class="mb-16" role="navigation" aria-label="Navigation Video">
            <!-- Wisata Alam Buttons -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">
                <?php foreach ($wisata_alam as $index => $wisata): ?>
                <a href="#video-alam-<?php echo $index + 1; ?>" 
                   class="card-button bg-transparent text-center px-6 py-2 rounded-lg font-medium transition-colors">
                    Video Alam <?php echo $index + 1; ?>
                </a>
                <?php endforeach; ?>
            </div>
            
            <!-- Wisata Kuliner Buttons -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <?php foreach ($wisata_kuliner as $index => $kuliner): ?>
                <a href="#video-alam-<?php echo $index + 5; ?>" 
                   class="card-button bg-transparent text-center px-6 py-2 rounded-lg font-medium transition-colors">
                    Video Kuliner <?php echo $index + 1; ?>
                </a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Toggle Buttons (Segmented Control) -->
        <section class="flex justify-center pt-8" id="wisata" role="tablist" aria-label="Pilihan Konten Wisata">
            <div class="tab-container flex rounded-full p-1 space-x-1">
                <button id="tab-alam" 
                        class="tab-button active py-2 px-10 rounded-full font-semibold bg-amber-800 text-white"
                        role="tab" 
                        aria-selected="true" 
                        aria-controls="content-alam">
                    Wisata Alam
                </button>
                <button id="tab-kuliner" 
                        class="tab-button py-2 px-10 rounded-full font-semibold text-amber-800"
                        role="tab" 
                        aria-selected="false" 
                        aria-controls="content-kuliner">
                    Wisata Kuliner
                </button>
            </div>
        </section>

        <!-- Content Display Section -->
        <div class="mb-8">
            <!-- Wisata Alam Content -->
            <section id="content-alam" 
                     class="tab-content" 
                     role="tabpanel" 
                     aria-labelledby="tab-alam">
                <?php foreach ($wisata_alam as $index => $wisata): ?>
                <div class="video-section" id="video-alam-<?php echo $index + 1; ?>">
                    <!-- Section Title -->
                    <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                        <?php echo $wisata['title']; ?>
                    </h3>
                    
                    <!-- Media Gallery -->
                    <div class="image-gallery">
                        <!-- Video Container -->
                        <div class="video-container">
                            <video controls class="w-full h-full object-cover" preload="metadata">
                                <source src="<?php echo get_asset_url($wisata['video'], 'videos'); ?>" type="video/mp4">
                                Browser Anda tidak mendukung video.
                            </video>
                        </div>
            
                        <!-- Image Carousel -->
                        <div class="gallery-item" id="carousel-alam-<?php echo $index + 1; ?>">
                            <button class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 rounded-full p-2 shadow z-10 carousel-prev" aria-label="Sebelumnya">
                                <!-- SVG kiri -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-madura-brown" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 rounded-full p-2 shadow z-10 carousel-next" aria-label="Berikutnya">
                                <!-- SVG kanan -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-madura-brown" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                            <?php foreach ($wisata['images'] as $imgIndex => $image): ?>
                            <img src="<?php echo get_asset_url($image, 'images'); ?>" 
                                 alt="<?php echo $wisata['title']; ?> - Foto <?php echo $imgIndex + 1; ?>" 
                                 class="carousel-img <?php echo $imgIndex === 0 ? 'active' : ''; ?>">
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </section>

            <!-- Wisata Kuliner Content -->
            <section id="content-kuliner" 
                     class="tab-content hidden" 
                     role="tabpanel" 
                     aria-labelledby="tab-kuliner">
                <?php foreach ($wisata_kuliner as $index => $kuliner): ?>
                <div class="video-section" id="video-alam-<?php echo $index + 5; ?>">
                    <!-- Section Title -->
                    <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                        <?php echo $kuliner['title']; ?>
                    </h3>
                    
                    <!-- Placeholder Content untuk Kuliner -->
                    <div class="image-gallery">
                        <!-- Video Placeholder -->
                        <div class="placeholder-card rounded-2xl shadow-lg">
                            <div class="text-white text-center">
                                <svg class="placeholder-icon" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                </svg>
                                <p class="text-lg font-medium">Video Kuliner</p>
                            </div>
                        </div>
            
                        <!-- Presentation Placeholder -->
                        <div class="placeholder-card rounded-2xl shadow-lg" style="background: linear-gradient(135deg, #10B981, #047857);">
                            <div class="text-white text-center">
                                <svg class="placeholder-icon" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                </svg>
                                <p class="text-lg font-medium">Presentasi Kuliner</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </section>
        </div>

        <!-- About Section -->
        <section class="text-center pt-12" id="tentang" role="region" aria-label="Tentang Kami">
            <h3 class="text-4xl font-bold text-madura-orange mb-6">
                Tentang Kami
            </h3>
            <p class="text-lg text-gray-600 mx-auto max-w-3xl">
                <?php echo $site_name; ?> adalah platform yang didedikasikan untuk memperkenalkan keindahan wisata alam dan kuliner khas Madura. Kami berkomitmen untuk memberikan informasi yang akurat dan menarik bagi para wisatawan yang ingin menjelajahi pesona Madura.
            </p>
        </section>
    </main>

    <?php include 'layout/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="<?php echo get_asset_url('carousel.js', 'js'); ?>"></script>
    <script src="<?php echo get_asset_url('tabs.js', 'js'); ?>"></script>
    <script src="<?php echo get_asset_url('main.js', 'js'); ?>"></script>
    
    <?php if ($is_development): ?>
    <!-- Development Scripts -->
    <script>
        console.log('Development Mode Active');
        console.log('Site Config:', <?php echo json_encode([
            'site_name' => $site_name,
            'base_url' => $base_url,
            'is_development' => $is_development
        ]); ?>);
    </script>
    <?php endif; ?>
</body>
</html>