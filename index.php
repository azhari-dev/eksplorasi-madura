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
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
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

        <?php include_once 'views/home.php'; ?>
        <?php include_once 'views/wisata.php'; ?>
        <?php include_once 'views/tentang.php'; ?>

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