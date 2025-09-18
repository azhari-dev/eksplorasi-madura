<!-- Toggle Buttons (Segmented Control) -->
<section class="flex justify-center pt-8" id="wisata" role="tablist" aria-label="Pilihan Konten Wisata">
    <div class="tab-container flex rounded-full p-1 space-x-1">
        <button id="btn-alam"
            class="tab-button active py-2 px-10 rounded-full font-semibold bg-amber-800 text-white"
            role="tab"
            aria-selected="true"
            aria-controls="alam-content">
            Wisata Alam
        </button>
        <button id="btn-kuliner"
            class="tab-button py-2 px-10 rounded-full font-semibold text-amber-800"
            role="tab"
            aria-selected="false"
            aria-controls="kuliner-content">
            Wisata Kuliner
        </button>
    </div>
</section>

<!-- Content Display Section -->
<div class="mb-8">
    <!-- Wisata Alam Content -->
    <section id="alam-content"
        class="content-section visible-section"
        role="tabpanel"
        aria-labelledby="btn-alam">
        <?php foreach ($wisata_alam as $index => $wisata): ?>
            <div class="video-section" id="edukasi-alam-<?= $index + 1; ?>">
                <!-- Section Title -->
                <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                    <?= $wisata['title']; ?>
                </h3>

                <!-- Media Gallery -->
                <div class="image-gallery">
                    <!-- Video Container -->
                    <div class="video-container">
                        <video controls class="w-full h-full object-cover" preload="metadata">
                            <source src="<?= get_asset_url($wisata['video'], 'videos'); ?>" type="video/mp4">
                            Browser Anda tidak mendukung video.
                        </video>
                    </div>

                    <!-- Image Carousel -->
                    <div class="gallery-item" id="carousel-alam-<?= $index + 1; ?>">
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
                            <img src="<?= get_asset_url($image, 'images'); ?>"
                                alt="<?= $wisata['title']; ?> - Foto <?= $imgIndex + 1; ?>"
                                class="carousel-img <?= $imgIndex === 0 ? 'active' : ''; ?>">
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- Wisata kuliner Content -->
    <section id="kuliner-content"
        class="content-section"
        role="tabpanel"
        aria-labelledby="btn-kuliner">
        <?php foreach ($wisata_kuliner as $index => $wisata): ?>
            <div class="video-section" id="edukasi-kuliner-<?= $index + 1; ?>">
                <!-- Section Title -->
                <h3 class="text-4xl font-bold text-madura-orange text-center mb-6">
                    <?= $wisata['title']; ?>
                </h3>

                <!-- Media Gallery -->
                <div class="image-gallery">
                    <!-- Video Container -->
                    <div class="video-container">
                        <video controls class="w-full h-full object-cover" preload="metadata">
                            <source src="<?= get_asset_url($wisata['video'], 'videos'); ?>" type="video/mp4">
                            Browser Anda tidak mendukung video.
                        </video>
                    </div>

                    <!-- Image Carousel -->
                    <div class="gallery-item" id="carousel-kuliner-<?= $index + 1; ?>">
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
                            <img src="<?= get_asset_url($image, 'images'); ?>"
                                alt="<?= $wisata['title']; ?> - Foto <?= $imgIndex + 1; ?>"
                                class="carousel-img <?= $imgIndex === 0 ? 'active' : ''; ?>">
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

</div>