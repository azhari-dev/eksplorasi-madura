<?php

include_once 'layout/config.php';

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= generate_meta_tags(); ?>

    <!-- Tailwind CSS -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: <?= json_encode($theme_colors, JSON_PRETTY_PRINT); ?>
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= get_asset_url('style.css', 'css'); ?>">

    <!-- Preload critical assets -->
    <link rel="preload" href="<?= get_asset_url('main.js', 'js'); ?>" as="script">
    <link rel="preload" href="<?= get_asset_url('carousel.js', 'js'); ?>" as="script">
    <link rel="preload" href="<?= get_asset_url('tabs.js', 'js'); ?>" as="script">
</head>

<body class="bg-gray-50 min-h-screen overflow-x-hidden">

    <?php include 'layout/header.php'; ?>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-6 py-16">

        <img src="assets/images/aset/teleskop.webp" alt="teleskop" class="absolute top-[10rem] left-[2rem] w-28 rotate-[15deg]">
        <img src="assets/images/aset/atom-2.webp" alt="atom-2" class="absolute top-[10rem] right-[10rem] w-28 rotate-[15deg]">
        <img src="assets/images/aset/book.webp" alt="book" class="absolute top-[20rem] -right-[2rem] w-48 rotate-[45deg]">
        <img src="assets/images/aset/poison.webp" alt="poison" class="absolute top-[63rem] left-[7rem] w-24">
        <img src="assets/images/aset/atom-1.webp" alt="atom-1" class="absolute top-[70rem] -right-[2rem] w-48 rotate-[30deg]">
        <img src="assets/images/aset/teleskop.webp" alt="teleskop" class="-scale-x-100 absolute top-[188rem] right-[2rem] w-28 -rotate-[15deg]">
        <img src="assets/images/aset/atom-2.webp" alt="atom-2" class="-scale-x-100 absolute top-[185rem] left-[10rem] w-24 -rotate-[15deg]">
        <img src="assets/images/aset/book.webp" alt="book" class="-z-10 -scale-x-100 absolute top-[200rem] left-[20rem] w-28 -rotate-[45deg]">

        <?php include_once 'views/home.php'; ?>
        <?php include_once 'views/wisata.php'; ?>
        <?php include_once 'views/tentang.php'; ?>

        <div class="absolute -top-[10rem] -left-[10rem] -z-10 size-[35rem] rounded-full bg-green-50 blur-3xl"></div>
        <div class="absolute top-[65rem] -left-[10rem] -z-10 size-[35rem] rounded-full bg-green-50 blur-3xl"></div>
        <div class="absolute top-[150rem] -left-[10rem] -z-10 size-[35rem] rounded-full bg-green-50 blur-3xl"></div>
        <div class="absolute top-[20rem] -right-[10rem] -z-10 size-[35rem] rounded-full bg-green-50 blur-3xl"></div>
        <div class="absolute top-[110rem] -right-[10rem] -z-10 size-[35rem] rounded-full bg-green-50 blur-3xl"></div>
        <div class="absolute top-[190rem] -right-[10rem] -z-10 size-[35rem] rounded-full bg-green-50 blur-3xl"></div>
        
    </main>

    <?php include 'layout/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="<?= get_asset_url('carousel.js', 'js'); ?>"></script>
    <script src="<?= get_asset_url('tabs.js', 'js'); ?>"></script>
    <script src="<?= get_asset_url('main.js', 'js'); ?>"></script>

    <?php if ($is_development): ?>
        <!-- Development Scripts -->
        <script>
            console.log('Development Mode Active');
            console.log('Site Config:', <?= json_encode([
                'site_name' => $site_name,
                'base_url' => $base_url,
                'is_development' => $is_development
            ]); ?>);
        </script>
    <?php endif; ?>
</body>

</html>