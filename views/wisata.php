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