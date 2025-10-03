<!-- Hero Section -->
<section class="text-center mb-16" role="banner">
    <h2 class="text-4xl md:text-5xl font-bold text-madura-orange mb-6 leading-tight">
        Pengetahuan Tentang Wisata Alam dan<br>
        Wisata Kuliner Madura
    </h2>
    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        <?= $site_description; ?>
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
<section class="mb-16 grid grid-cols-2 gap-12" role="navigation" aria-label="Navigation Video">
    <!-- Wisata Alam Buttons -->
    <div class="grid grid-cols-2 gap-6">
        <?php foreach ($wisata_alam as $index => $wisata): ?>
            <a href="#edukasi-alam-<?= $index + 1; ?>"
                class="card-button flex items-center justify-center bg-transparent nav-button text-center px-6 py-2 rounded-lg font-medium transition-colors">
                <!-- Edukasi Alam <?= $index + 1; ?> -->
                <?= $wisata['title']; ?>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- Wisata Kuliner Buttons -->
    <div class="grid grid-cols-2 gap-6">
        <?php foreach ($wisata_kuliner as $index => $wisata): ?>
            <a href="#edukasi-kuliner-<?= $index + 1; ?>"
                class="card-button flex items-center justify-center bg-transparent nav-button text-center px-6 py-2 rounded-lg font-medium transition-colors">
                <?= $wisata['title']; ?>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<!-- Video Navigation Buttons -->
<section class="mb-16 grid grid-cols-2 gap-12" role="navigation" aria-label="Navigation Video">
    <!-- Wisata Alam Buttons -->
    <div class="grid grid-cols-2 gap-6">
        <?php foreach ($btn_alam as $index => $wisata): ?>
            <a href="#edukasi-alam-<?= $index + 1; ?>"
                class="card-button flex items-center justify-center bg-transparent nav-button text-center px-6 py-2 rounded-lg font-medium transition-colors">
                <!-- Edukasi Alam <?= $index + 1; ?> -->
                <?= $wisata['title']; ?>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- Wisata Kuliner Buttons -->
    <div class="grid grid-cols-2 gap-6">
        <?php foreach ($btn_kuliner as $index => $wisata): ?>
            <a href="#edukasi-kuliner-<?= $index + 1; ?>"
                class="card-button flex items-center justify-center bg-transparent nav-button text-center px-6 py-2 rounded-lg font-medium transition-colors">
                <?= $wisata['title']; ?>
            </a>
        <?php endforeach; ?>
    </div>
</section>