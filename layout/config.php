<?php
// Informasi dasar website
$site_name = 'Etnokimia Madura';
$site_description = 'Platform yang didedikasikan untuk memperkenalkan keindahan wisata alam dan kuliner khas Madura';
$site_keywords = 'Madura, wisata, kuliner, alam, Jawa Timur, Indonesia';
$university_name = 'Universitas Trunojoyo Madura';

// URL dan Path settings
$base_url = 'http://localhost/eksplorasi-madura/'; // Ganti sesuai dengan URL Anda
// $base_url = 'https://wisata.triplec.or.id/'; // Ganti sesuai dengan URL Anda
$assets_url = rtrim($base_url, '/') . '/assets';

// ========================================
// FILE PATHS
// ========================================

// Path untuk assets
$css_path = 'assets/css/';
$js_path = 'assets/js/';
$images_path = 'assets/images/';
$videos_path = 'assets/videos/';

// ========================================
// THEME SETTINGS
// ========================================

// Warna tema Madura
// $theme_colors = [
//     'madura-orange' => '#D97706',
//     'madura-purple' => '#8B5CF6',
//     'madura-brown' => '#92400E'
// ];

// ========================================
// CONTENT SETTINGS
// ========================================

$alam1 = "alam-api-tak-kunjung-padam";
$alam2 = "alam-mangrove";  
$alam3 = "alam-pantai-talang-siring";
$alam4 = "alam-pemandian-belerang";
$kuliner1 = "kuliner-campur-lorjuk";
$kuliner2 = "kuliner-es-sudi-mampir";
$kuliner3 = "kuliner-kaldu-kokot";
$kuliner4 = "kuliner-sate-lalat";

// Daftar konten wisata alam
$wisata_alam = [
    [
        'id' => 'alam-1',
        'title' => 'Wisata Api Tak Kunjung Padam',
        'description' => 'Deskripsi wisata alam pertama',
        'video' => 'alam-api-tak-kunjung-padam.mp4',
        'images' => array_map(function($i) use ($alam1) { return "$alam1/$i.png"; }, range(1, 24))
    ],
    [
        'id' => 'alam-2',
        'title' => 'Wisata Mangrove',
        'description' => 'Deskripsi wisata alam kedua',
        'video' => 'alam-mangrove.mp4',
        'images' => array_map(function($i) use ($alam2) { return "$alam2/$i.png"; }, range(1, 24))
    ],
    [
        'id' => 'alam-3',
        'title' => 'Wisata Pemandian Belerang',
        'description' => 'Deskripsi wisata alam keempat',
        'video' => 'alam-pemandian-belerang.mp4',
        'images' => array_map(function($i) use ($alam4) { return "$alam4/$i.png"; }, range(1, 24))
    ],
    [
        'id' => 'alam-4',
        'title' => 'Wisata Pantai Talang Siring',
        'description' => 'Deskripsi wisata alam ketiga',
        'video' => 'alam-pantai-talang-siring.mp4',
        'images' => array_map(function($i) use ($alam3) { return "$alam3/$i.png"; }, range(1, 25))
    ]
];
    
    // Daftar konten wisata kuliner
$wisata_kuliner = [
    [
        'id' => 'kuliner-4',
        'title' => 'Kuliner Campur Lorjuk',
        'description' => 'Deskripsi wisata kuliner keempat',
        'video' => 'kuliner-campur-lorjuk.mp4',
        'images' => array_map(function($i) use ($kuliner1) { return "$kuliner1/$i.png"; }, range(1, 26))
    ],
    [
        'id' => 'kuliner-4',
        'title' => 'Kuliner Es Sudi Mampir',
        'description' => 'Deskripsi wisata kuliner keempat',
        'video' => 'kuliner-es-sudi-mampir.mp4',
        'images' => array_map(function($i) use ($kuliner2) { return "$kuliner2/$i.png"; }, range(1, 26))
    ],
    [
        'id' => 'kuliner-4',
        'title' => 'Kuliner Kaldu Kokot',
        'description' => 'Deskripsi wisata kuliner keempat',
        'video' => 'kuliner-kaldu-kokot.mp4',
        'images' => array_map(function($i) use ($kuliner3) { return "$kuliner3/$i.png"; }, range(1, 26))
    ],
    [
        'id' => 'kuliner-4',
        'title' => 'Kuliner Sate Lalat',
        'description' => 'Deskripsi wisata kuliner keempat',
        'video' => 'kuliner-sate-lalat.mp4',
        'images' => array_map(function($i) use ($kuliner4) { return "$kuliner4/$i.png"; }, range(1, 26))
    ]
];

$btn_alam = [
    [
        'image' => 'api-tak-padam.webp',
        'alt' => 'Wisata Api Tak Kunjung Padam',
        'link' => '#edukasi-alam-1'
    ],
    [
        'image' => 'mangrove.webp',
        'alt' => 'Wisata Mangrove',
        'link' => '#edukasi-alam-2'
    ],
    [
        'image' => 'mandi-belerang.webp',
        'alt' => 'Wisata Pemandian Belerang',
        'link' => '#edukasi-alam-3'
    ],
    [
        'image' => 'pantai.webp',
        'alt' => 'Wisata Pantai Talang Siring',
        'link' => '#edukasi-alam-4'
    ]
];
        
$btn_kuliner = [
    [
        'image' => 'campur-lorjuk.webp',
        'alt' => 'Kuliner Campur Lorjuk',
        'link' => '#edukasi-kuliner-1'
    ],
    [
        'image' => 'sudi-mampir.webp',
        'alt' => 'Kuliner Es Sudi Mampir',
        'link' => '#edukasi-kuliner-2'
    ],
    [
        'image' => 'kaldu-kokot.webp',
        'alt' => 'Kuliner Kaldu Kokot',
        'link' => '#edukasi-kuliner-3'
    ],
    [
        'image' => 'sate-lalat.webp',
        'alt' => 'Kuliner Sate Lalat',
        'link' => '#edukasi-kuliner-4'
    ]
];


// ========================================
// FEATURE FLAGS
// ========================================

// Fitur-fitur yang dapat di-toggle
$show_developer_credit = true;
$enable_carousel = true;
$enable_smooth_scroll = true;
$enable_mobile_menu = true;

// ========================================
// SOCIAL MEDIA LINKS
// ========================================

$social_links = [
    'facebook' => 'https://facebook.com/eksplorasi-madura',
    'instagram' => 'https://instagram.com/eksplorasi_madura',
    'twitter' => 'https://twitter.com/eksplorasi_madura',
    'youtube' => 'https://youtube.com/eksplorasi-madura'
];

// ========================================
// CONTACT INFORMATION
// ========================================

$contact_info = [
    'address' => 'Bangkalan, Madura, Jawa Timur',
    'email' => 'info@eksplorasi-madura.ac.id',
    'phone' => '+62 123 456 7890'
];

// ========================================
// HELPER FUNCTIONS
// ========================================

/**
 * Get asset URL dengan cache busting
 * @param string $path Path ke asset
 * @param string $type Tipe asset (css, js, images, videos)
 * @return string Full URL ke asset
 */
function get_asset_url($path, $type = 'images')
{
    global $assets_url;

    $type_paths = [
        'css' => '/css/',
        'js' => '/js/',
        'images' => '/images/',
        'videos' => '/videos/'
    ];

    $full_path = $assets_url . $type_paths[$type] . $path;

    // Add cache busting parameter jika file exists
    $file_path = $_SERVER['DOCUMENT_ROOT'] . '/assets' . $type_paths[$type] . $path;
    if (file_exists($file_path)) {
        $full_path .= '?v=' . filemtime($file_path);
    }

    return $full_path;
}

/**
 * Get current page untuk navigation highlighting
 * @return string Current page identifier
 */
function get_current_page()
{
    $current_file = basename($_SERVER['PHP_SELF'], '.php');
    return $current_file === 'index' ? 'home' : $current_file;
}

/**
 * Generate meta tags
 * @param string $title Page title
 * @param string $description Page description
 * @param string $keywords Page keywords
 * @return string HTML meta tags
 */
function generate_meta_tags($title = '', $description = '', $keywords = '')
{
    global $site_name, $site_description, $site_keywords;

    $page_title = $title ? $title . ' - ' . $site_name : $site_name;
    $page_description = $description ?: $site_description;
    $page_keywords = $keywords ?: $site_keywords;

    return "
    <title>{$page_title}</title>
    <meta name=\"description\" content=\"{$page_description}\">
    <meta name=\"keywords\" content=\"{$page_keywords}\">
    <meta property=\"og:title\" content=\"{$page_title}\">
    <meta property=\"og:description\" content=\"{$page_description}\">
    <meta property=\"og:type\" content=\"website\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"{$page_title}\">
    <meta name=\"twitter:description\" content=\"{$page_description}\">
    ";
}

// ========================================
// ENVIRONMENT SETTINGS
// ========================================

// Development/Production mode
$is_development = ($_SERVER['HTTP_HOST'] === 'localhost' || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false);

// Error reporting
if ($is_development) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Timezone
date_default_timezone_set('Asia/Jakarta');
