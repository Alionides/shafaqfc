<?php namespace ProcessWire;
$seo_or_page_title = ($page->seo_title == '') ? $page->title : $page->seo_title;
$title = $seo_or_page_title.' | Shafaq FC';
$share_image = 'https://' . $_SERVER['SERVER_NAME'] . '/site/templates/img/gl-share.jpeg';
$full_url = 'https://' . $_SERVER['SERVER_NAME'] . $page->url;
$home = $pages->get('/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $title ?></title>
    <meta name="description" content="<?= $page->seo_description; ?>">
    <meta name="keywords" content="<?= $page->seo_keywords; ?>" />
    <meta name="image" content="<?= $share_image; ?>" />
    <meta property="og:title" content="<?= $title; ?>" />
    <meta property="og:url" content="<?= $full_url; ?>" />
    <meta property="og:description" content="<?= $page->seo_description; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?= $share_image; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="<?= $_SERVER['SERVER_NAME']; ?>" />
    <meta name="twitter:title" content="<?= $title; ?>" />
    <meta name="twitter:url" content="<?= $full_url; ?>" />
    <meta name="twitter:description" content="<?= $page->seo_description; ?>" />
    <meta name="twitter:image" content="<?= $share_image; ?>" />
    <meta name="twitter:image:alt" content="<?= $_SERVER['SERVER_NAME']; ?>">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $config->urls->templates ;?>img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $config->urls->templates ;?>img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $config->urls->templates ;?>img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $config->urls->templates ;?>img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $config->urls->templates ;?>img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $config->urls->templates ;?>img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $config->urls->templates ;?>img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $config->urls->templates ;?>img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config->urls->templates ;?>img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $config->urls->templates ;?>img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $config->urls->templates ;?>img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $config->urls->templates ;?>img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $config->urls->templates ;?>img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $config->urls->templates ;?>img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $config->urls->templates ;?>img/favicon/ms-icon-144x144.png">




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="<?php echo $config->urls->templates ;?>css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $config->urls->templates ;?>css/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo $config->urls->templates ;?>css/glightbox.min.css" />
    <link href="<?php echo $config->urls->templates ;?>css/main.css" rel="stylesheet" type="text/css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo $config->urls->templates ;?>js/owl.carousel.min.js"></script>
    <script src="<?php echo $config->urls->templates ;?>js/glightbox.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="<?php echo $config->urls->templates ;?>js/main.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

</head>
<body class="bg-neutral-950 text-white font-body">
<!-- Top bar -->
<div class="w-full bg-shafaq-yellow text-neutral-900 text-xs sm:text-sm">
    <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between gap-4">
        <span class="font-semibold"><?= $home->headline ?></span>

        <div class="hidden sm:flex items-center gap-3">
            <?php foreach ($home->socials as $social){ ?>
            <a href="<?= $social->link ?>" target="_blank"
               class="w-7 h-7 flex items-center justify-center rounded-full bg-shafaq-green text-white hover:bg-shafaq-yellow hover:text-neutral-900 transition">
                <i class="fab <?= $social->class_name ?> text-sm"></i>
            </a>
            <?php } ?>

        </div>

    </div>
</div>

<!-- Header -->
<header class="sticky top-0 z-40 bg-shafaq-green backdrop-blur border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="bg-white  w-12 rounded-xl ring-2 ring-shafaq-yellow overflow-hidden">
                <a href="<?= $home->url; ?>">
                    <img src="<?php echo $config->urls->templates ;?>images/logo.png" alt="Shafaq FC crest" class="h-full w-full object-cover" />
                </a>
            </div>
            <div class="leading-tight">
                <div class="font-extrabold text-lg tracking-wide"><?= $home->club_name ?></div>
                <div class="text-white/60 text-xs -mt-0.5"><?= $home->club_slogan ?></div>
            </div>
        </div>
        <nav class="hidden md:flex items-center gap-6 text-sm">
            <a class="navlink hover:text-shafaq-yellow" href="<?= $home->url ?>"><?= $home->title ?></a>
            <?php
            foreach ($home->children as $child){ ?>
                <a class="navlink hover:text-shafaq-yellow" href="<?= $child->url ?>"><?= $child->title ?></a>
            <?php } ?>
        </nav>
        <!-- Language Switcher -->
        <div class="flex items-center gap-2">
            <a class="px-3 py-1.5 rounded-lg text-sm font-semibold bg-shafaq-yellow text-neutral-900"><?= $user->language->title ?></a>
            <?php foreach($languages as $ln) {?>
                <?php if($user->language->id != $ln->id) {?>
                    <a href="<?= $page->localUrl($ln); ?>" class="px-3 py-1.5 rounded-lg text-sm font-semibold bg-white/10 hover:bg-shafaq-yellow hover:text-neutral-900 transition"><?= $ln->title ?></a>
                <?php } ?>
            <?php } ?>
        </div>

    </div>
</header>
