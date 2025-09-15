<?php
// Informasi dasar website
$site_name = 'Eksplorasi Madura';
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
$theme_colors = [
    'madura-orange' => '#D97706',
    'madura-purple' => '#8B5CF6',
    'madura-brown' => '#92400E'
];

// ========================================
// CONTENT SETTINGS
// ========================================

// Daftar konten wisata alam
$wisata_alam = [
    [
        'id' => 'alam-1',
        'title' => 'Wisata Alam 1',
        'description' => 'Deskripsi wisata alam pertama',
        'video' => 'alam-api-tak-kunjung-padam.mp4',
        'images' => ['gambar-1.jpg', 'gambar-2.jpg', 'gambar-3.jpg']
    ],
    [
        'id' => 'alam-2',
        'title' => 'Wisata Alam 2',
        'description' => 'Deskripsi wisata alam kedua',
        'video' => 'video-demo-1.mp4',
        'images' => ['gambar-1.jpg', 'gambar-2.jpg', 'gambar-3.jpg']
    ],
    [
        'id' => 'alam-3',
        'title' => 'Wisata Alam 3',
        'description' => 'Deskripsi wisata alam ketiga',
        'video' => 'video-demo-1.mp4',
        'images' => ['gambar-1.jpg', 'gambar-2.jpg', 'gambar-3.jpg']
    ],
    [
        'id' => 'alam-4',
        'title' => 'Wisata Alam 4',
        'description' => 'Deskripsi wisata alam keempat',
        'video' => 'video-demo-1.mp4',
        'images' => ['gambar-1.jpg', 'gambar-2.jpg', 'gambar-3.jpg']
    ]
];

// Daftar konten wisata kuliner
$wisata_kuliner = [
    [
        'id' => 'kuliner-1',
        'title' => 'Wisata Kuliner 1',
        'description' => 'Deskripsi wisata kuliner pertama'
    ],
    [
        'id' => 'kuliner-2',
        'title' => 'Wisata Kuliner 2',
        'description' => 'Deskripsi wisata kuliner kedua'
    ],
    [
        'id' => 'kuliner-3',
        'title' => 'Wisata Kuliner 3',
        'description' => 'Deskripsi wisata kuliner ketiga'
    ],
    [
        'id' => 'kuliner-4',
        'title' => 'Wisata Kuliner 4',
        'description' => 'Deskripsi wisata kuliner keempat'
    ]
];

// $wisata_alam = [
//     [
//         'id' => 'alam-1',
//         'title' => 'Wisata Alam 1',
//         'description' => 'Deskripsi wisata alam pertama',
//         'video' => 'video-demo-1.mp4',
//         'images' => ['gambar-1.jpg', 'gambar-2.jpg', 'gambar-3.jpg']
//     ],
//     [
//         'id' => 'alam-2', 
//         'title' => 'Wisata Alam 2',
//         'description' => 'Deskripsi wisata alam kedua',
//         'video' => 'video-demo-1.mp4',
//         'images' => ['gambar-1.jpg', 'gambar-2.jpg', 'gambar-3.jpg']
//     ],
//     [
//         'id' => 'alam-3',
//         'title' => 'Wisata Alam 3', 
//         'description' => 'Deskripsi wisata alam ketiga',
//         'video' => 'video-demo-1.mp4',
//         'images' => ['gambar-1.jpg', 'gambar-2.jpg', 'gambar-3.jpg']
//     ],
//     [
//         'id' => 'alam-4',
//         'title' => 'Wisata Alam 4',
//         'description' => 'Deskripsi wisata alam keempat', 
//         'video' => 'video-demo-1.mp4',
//         'images' => ['gambar-1.jpg', 'gambar-2.jpg', 'gambar-3.jpg']
//     ]
// ];

// // Daftar konten wisata kuliner
// $wisata_kuliner = [
//     [
//         'id' => 'kuliner-1',
//         'title' => 'Wisata Kuliner 1',
//         'description' => 'Deskripsi wisata kuliner pertama'
//     ],
//     [
//         'id' => 'kuliner-2',
//         'title' => 'Wisata Kuliner 2', 
//         'description' => 'Deskripsi wisata kuliner kedua'
//     ],
//     [
//         'id' => 'kuliner-3',
//         'title' => 'Wisata Kuliner 3',
//         'description' => 'Deskripsi wisata kuliner ketiga'
//     ],
//     [
//         'id' => 'kuliner-4',
//         'title' => 'Wisata Kuliner 4',
//         'description' => 'Deskripsi wisata kuliner keempat'
//     ]
// ];

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
