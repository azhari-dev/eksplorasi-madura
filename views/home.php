<!-- Hero Section -->
<section class="text-center mb-16" role="banner">
    <h2 class="text-4xl md:text-5xl font-bold text-green-800 mb-6 leading-tight">
        Pengetahuan Tentang Wisata Alam <br>
        dan Wisata Kuliner Madura
    </h2>
    <p class="text-lg text-gray-600 max-w-xl mx-auto">
        <?= $site_description; ?>
    </p>
</section>

<!-- Cards Section -->
<section class="grid md:grid-cols-2 gap-12 mb-8 cards-section" role="region" aria-label="Kategori Wisata">
    <!-- Wisata Alam Card -->
    <div class="card bg-green-50 rounded-2xl p-8 shadow-sm hover:shadow-lg transition-shadow">
        <p class="text-gray-600 text-base mb-6 leading-relaxed">
            Nikmati panorama alam, budaya dan keunikan tempat wisata terbaik dari berbagai daerah di Madura
        </p>
        <button class="card-button bg-transparent px-6 py-2 rounded-lg font-medium">
            Wisata Alam
        </button>
    </div>

    <!-- Wisata Kuliner Card -->
    <div class="card bg-green-50 rounded-2xl p-8 shadow-sm hover:shadow-md transition-shadow">
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
        <?php foreach ($btn_alam as $index => $wisata): ?>
            <!-- <a href="#edukasi-alam-<?= $index + 1; ?>"
                class="card-button flex items-center justify-center bg-transparent nav-button text-center px-6 py-2 rounded-lg font-medium transition-colors">
                Edukasi Alam <?= $index + 1; ?>
                <?= $wisata['title']; ?>
            </a> -->
            <div class="flex justify-end items-start rounded-[16px] bg-[url('assets/images/btn-wisata/alam/<?= $wisata['image'] ?>')] bg-no-repeat bg-cover w-full h-40 border-2 border-green-700">
                <a href="<?= $wisata['link']; ?>">
                    <div class="bg-green-50 text-green-800 hover:bg-green-800 hover:text-white flex w-6 h-6 p-6 flex-col justify-center items-center aspect-square rounded-[16px] border-2 border-green-700">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <path class="bg-green-800" d="M1.10051 19.4853C0.709986 19.8758 0.709986 20.509 1.10051 20.8995C1.49103 21.29 2.1242 21.29 2.51472 20.8995L1.80762 20.1924L1.10051 19.4853ZM21.1924 1.80761C21.1924 1.25532 20.7447 0.807607 20.1924 0.807606L11.1924 0.807607C10.6401 0.807607 10.1924 1.25532 10.1924 1.80761C10.1924 2.35989 10.6401 2.80761 11.1924 2.80761L19.1924 2.80761L19.1924 10.8076C19.1924 11.3599 19.6401 11.8076 20.1924 11.8076C20.7447 11.8076 21.1924 11.3599 21.1924 10.8076L21.1924 1.80761ZM1.80762 20.1924L2.51472 20.8995L20.8995 2.51471L20.1924 1.80761L19.4853 1.1005L1.10051 19.4853L1.80762 20.1924Z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
        
    <!-- Wisata Kuliner Buttons -->
    <div class="grid grid-cols-2 gap-6">
        <?php foreach ($btn_kuliner as $index => $wisata): ?>
            <div class="flex justify-end align-start rounded-[16px] bg-[url('assets/images/btn-wisata/kuliner/<?= $wisata['image'] ?>')] bg-no-repeat bg-cover bg-lightgray-200 w-full h-40 border-2 border-green-700">
                <a href="<?= $wisata['link']; ?>">
                    <div class="bg-green-50 text-green-800 hover:bg-green-800 hover:text-white flex w-6 h-6 p-6 flex-col justify-center items-center aspect-square rounded-[16px] border-2 border-green-700">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <path d="M1.10051 19.4853C0.709986 19.8758 0.709986 20.509 1.10051 20.8995C1.49103 21.29 2.1242 21.29 2.51472 20.8995L1.80762 20.1924L1.10051 19.4853ZM21.1924 1.80761C21.1924 1.25532 20.7447 0.807607 20.1924 0.807606L11.1924 0.807607C10.6401 0.807607 10.1924 1.25532 10.1924 1.80761C10.1924 2.35989 10.6401 2.80761 11.1924 2.80761L19.1924 2.80761L19.1924 10.8076C19.1924 11.3599 19.6401 11.8076 20.1924 11.8076C20.7447 11.8076 21.1924 11.3599 21.1924 10.8076L21.1924 1.80761ZM1.80762 20.1924L2.51472 20.8995L20.8995 2.51471L20.1924 1.80761L19.4853 1.1005L1.10051 19.4853L1.80762 20.1924Z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>