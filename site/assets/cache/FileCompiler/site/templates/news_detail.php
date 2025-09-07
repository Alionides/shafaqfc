<?php namespace ProcessWire;
include_once('layout/header.php');
?>
<main id="news-article" class="max-w-4xl mx-auto px-4 py-10">
    <!-- Breadcrumb -->
    <nav class="text-sm text-white/60 mb-6">
        <?php
            foreach($page->parents() as $item) {
                echo "<a class='hover:text-shafaq-yellow' href='$item->url'>$item->title</a> <span class='mx-2'>/</span>";
            }
            echo "<span class='text-white'>$page->title</span> ";
            ?>
    </nav>

    <!-- Title -->
    <h1 class="text-3xl sm:text-5xl font-extrabold leading-tight">
        <?= $page->title ?>
    </h1>

    <!-- Meta -->
    <div class="mt-4 flex flex-wrap items-center gap-3 text-sm text-white/60">
        <span class="w-1 h-1 rounded-full bg-white/30"></span>
        <span><?= $datetime->date($format = 'd-m-Y', $ts = null); ?></span>
        <span class="w-1 h-1 rounded-full bg-white/30"></span>
    </div>

    <!-- Hero image -->
    <figure class="mt-6 rounded-2xl overflow-hidden ring-1 ring-white/10">
        <img src="<?= $page->image->url ?>" alt="<?= $page->title ?>" class="w-full h-auto object-cover">
        <figcaption class="p-3 text-xs text-white/60 bg-white/5"><?= $page->title ?></figcaption>
    </figure>

    <!-- Article body -->
    <article class="prose prose-invert prose-emerald max-w-none mt-8">
        <?= $page->text ?>
    </article>

    <!-- Prev / Next -->
    <nav class="mt-10 grid sm:grid-cols-2 gap-4">

        <?php if(!empty($page->prev()->url)): ?>
            <a href="<?= $page->prev()->url ?>" class="group p-4 rounded-xl ring-1 ring-white/10 bg-white/5 hover:bg-white/10 transition">
                <div class="text-xs text-white/60"><?= _x('Previous','-') ?></div>
                <div class="font-semibold group-hover:text-shafaq-yellow">
                    <?= $page->prev()->title ?>
                </div>
            </a>
        <?php endif; ?>

        <?php if(!empty($page->next()->url)): ?>
            <a href="<?= $page->next()->url ?>" class="group p-4 rounded-xl ring-1 ring-white/10 bg-white/5 hover:bg-white/10 transition text-right">
                <div class="text-xs text-white/60"><?= _x('Next','-') ?></div>
                <div class="font-semibold group-hover:text-shafaq-yellow">
                    <?= $page->next()->title ?>
                </div>
            </a>
        <?php endif; ?>

    </nav>




</main>
<?php include_once('layout/footer.php'); ?>
