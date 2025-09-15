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
        'images' => ["$alam1/1.png", "$alam1/2.png", "$alam1/3.png", "$alam1/4.png", "$alam1/5.png", "$alam1/6.png", "$alam1/7.png", "$alam1/8.png", "$alam1/9.png", "$alam1/10.png", "$alam1/11.png", "$alam1/12.png", "$alam1/13.png", "$alam1/14.png", "$alam1/15.png", "$alam1/16.png", "$alam1/17.png", "$alam1/18.png", "$alam1/19.png", "$alam1/20.png", "$alam1/21.png", "$alam1/22.png", "$alam1/23.png", "$alam1/24.png"]
    ],
    [
        'id' => 'alam-2',
        'title' => 'Wisata Mangrove',
        'description' => 'Deskripsi wisata alam kedua',
        'video' => 'alam-mangrove.mp4',
        'images' => ["$alam2/1.png", "$alam2/2.png", "$alam2/3.png", "$alam2/4.png", "$alam2/5.png", "$alam2/6.png", "$alam2/7.png", "$alam2/8.png", "$alam2/9.png", "$alam2/10.png", "$alam2/11.png", "$alam2/12.png", "$alam2/13.png", "$alam2/14.png", "$alam2/15.png", "$alam2/16.png", "$alam2/17.png", "$alam2/18.png", "$alam2/19.png", "$alam2/20.png", "$alam2/21.png", "$alam2/22.png", "$alam2/23.png", "$alam2/24.png"]
    ],
    [
        'id' => 'alam-3',
        'title' => 'Wisata Pantai Talang Siring',
        'description' => 'Deskripsi wisata alam ketiga',
        'video' => 'alam-pantai-talang-siring.mp4',
        'images' => ["$alam3/1.png", "$alam3/2.png", "$alam3/3.png", "$alam3/4.png", "$alam3/5.png", "$alam3/6.png", "$alam3/7.png", "$alam3/8.png", "$alam3/9.png", "$alam3/10.png", "$alam3/11.png", "$alam3/12.png", "$alam3/13.png", "$alam3/14.png", "$alam3/15.png", "$alam3/16.png", "$alam3/17.png", "$alam3/18.png", "$alam3/19.png", "$alam3/20.png", "$alam3/21.png", "$alam3/22.png", "$alam3/23.png", "$alam3/24.png", "$alam3/25.png"]
    ],
    [
        'id' => 'alam-4',
        'title' => 'Wisata Pemandian Belerang',
        'description' => 'Deskripsi wisata alam keempat',
        'video' => 'alam-pemandian-belerang.mp4',
        'images' => ["$alam4/1.png", "$alam4/2.png", "$alam4/3.png", "$alam4/4.png", "$alam4/5.png", "$alam4/6.png", "$alam4/7.png", "$alam4/8.png", "$alam4/9.png", "$alam4/10.png", "$alam4/11.png", "$alam4/12.png", "$alam4/13.png", "$alam4/14.png", "$alam4/15.png", "$alam4/16.png", "$alam4/17.png", "$alam4/18.png", "$alam4/19.png", "$alam4/20.png", "$alam4/21.png", "$alam4/22.png", "$alam4/23.png", "$alam4/24.png"]
        ]
    ];
    
    // Daftar konten wisata kuliner
    $wisata_kuliner = [
        [
            'id' => 'kuliner-4',
            'title' => 'Kuliner Campur Lorjuk',
            'description' => 'Deskripsi wisata kuliner keempat',
            'video' => 'kuliner-campur-lorjuk.mp4',
            'images' => ["$kuliner1/1.png", "$kuliner1/2.png", "$kuliner1/3.png", "$kuliner1/4.png", "$kuliner1/5.png", "$kuliner1/6.png", "$kuliner1/7.png", "$kuliner1/8.png", "$kuliner1/9.png", "$kuliner1/10.png", "$kuliner1/11.png", "$kuliner1/12.png", "$kuliner1/13.png", "$kuliner1/14.png", "$kuliner1/15.png", "$kuliner1/16.png", "$kuliner1/17.png", "$kuliner1/18.png", "$kuliner1/19.png", "$kuliner1/20.png", "$kuliner1/21.png", "$kuliner1/22.png", "$kuliner1/23.png", "$kuliner1/24.png", "$kuliner1/25.png", "$kuliner1/26.png"]
        ],
        [
            'id' => 'kuliner-4',
            'title' => 'Kuliner Es Sudi Mampir',
            'description' => 'Deskripsi wisata kuliner keempat',
            'video' => 'kuliner-es-sudi-mampir.mp4',
            'images' => ["$kuliner2/1.png", "$kuliner2/2.png", "$kuliner2/3.png", "$kuliner2/4.png", "$kuliner2/5.png", "$kuliner2/6.png", "$kuliner2/7.png", "$kuliner2/8.png", "$kuliner2/9.png", "$kuliner2/10.png", "$kuliner2/11.png", "$kuliner2/12.png", "$kuliner2/13.png", "$kuliner2/14.png", "$kuliner2/15.png", "$kuliner2/16.png", "$kuliner2/17.png", "$kuliner2/18.png", "$kuliner2/19.png", "$kuliner2/20.png", "$kuliner2/21.png", "$kuliner2/22.png", "$kuliner2/23.png", "$kuliner2/24.png", "$kuliner2/25.png", "$kuliner2/26.png"]
        ],
        [
        'id' => 'kuliner-4',
        'title' => 'Kuliner Kaldu Kokot',
        'description' => 'Deskripsi wisata kuliner keempat',
        'video' => 'kuliner-kaldu-kokot.mp4',
        'images' => ["$kuliner3/1.png", "$kuliner3/2.png", "$kuliner3/3.png", "$kuliner3/4.png", "$kuliner3/5.png", "$kuliner3/6.png", "$kuliner3/7.png", "$kuliner3/8.png", "$kuliner3/9.png", "$kuliner3/10.png", "$kuliner3/11.png", "$kuliner3/12.png", "$kuliner3/13.png", "$kuliner3/14.png", "$kuliner3/15.png", "$kuliner3/16.png", "$kuliner3/17.png", "$kuliner3/18.png", "$kuliner3/19.png", "$kuliner3/20.png", "$kuliner3/21.png", "$kuliner3/22.png", "$kuliner3/23.png", "$kuliner3/24.png", "$kuliner3/25.png", "$kuliner3/26.png"]
    ],
    [
        'id' => 'kuliner-4',
        'title' => 'Kuliner Sate Lalat',
        'description' => 'Deskripsi wisata kuliner keempat',
        'video' => 'kuliner-sate-lalat.mp4',
        'images' => ["$kuliner4/1.png", "$kuliner4/2.png", "$kuliner4/3.png", "$kuliner4/4.png", "$kuliner4/5.png", "$kuliner4/6.png", "$kuliner4/7.png", "$kuliner4/8.png", "$kuliner4/9.png", "$kuliner4/10.png", "$kuliner4/11.png", "$kuliner4/12.png", "$kuliner4/13.png", "$kuliner4/14.png", "$kuliner4/15.png", "$kuliner4/16.png", "$kuliner4/17.png", "$kuliner4/18.png", "$kuliner4/19.png", "$kuliner4/20.png", "$kuliner4/21.png", "$kuliner4/22.png", "$kuliner4/23.png", "$kuliner4/24.png", "$kuliner4/25.png", "$kuliner4/26.png"]
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
