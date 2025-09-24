<?php namespace ProcessWire;
include_once('layout/header.php');
?>
<main id="player" class="max-w-7xl mx-auto px-4 py-12">
    <!-- Breadcrumb -->
    <nav class="text-sm text-white/60 mb-6">
        <?php
        foreach($page->parents() as $item) {
            echo "<a class='hover:text-shafaq-yellow' href='$item->url'>$item->title</a> <span class='mx-2'>/</span>";
        }
        echo "<span class='text-white'>$page->title</span> ";
        ?>
    </nav>
    <!-- Player Hero -->
    <section class="grid lg:grid-cols-2 gap-10 items-center mb-12">
        <!-- Player image -->
        <div class="relative">
            <img src="<?= $page->image->url ?>" alt="<?= $page->title ?>" class="w-full h-auto rounded-2xl shadow-lg">
            <div class="absolute bottom-4 left-4 bg-shafaq-yellow text-neutral-900 font-bold px-4 py-2 rounded-lg text-lg">
                #<?= $page->player_number ?>
            </div>
        </div>

        <!-- Player info -->
        <div>
            <h1 class="text-4xl sm:text-5xl font-extrabold mb-4"><?= $page->title ?></h1>
            <p class="text-xl text-shafaq-yellow font-semibold mb-6"><?= $page->player_position ?></p>

            <ul class="grid grid-cols-2 gap-4 text-sm text-white/80">
                <li><span class="font-bold text-white"><?= _x('Age','-') ?>:</span> <?= $page->player_age ?></li>
                <li><span class="font-bold text-white"><?= _x('Nationality','-') ?>:</span> <?= $page->player_nationality ?></li>
                <li><span class="font-bold text-white"><?= _x('Height','-') ?>:</span> <?= $page->player_heght ?> <?= _x('sm','-') ?></li>
                <li><span class="font-bold text-white"><?= _x('Weight','-') ?>:</span> <?= $page->player_weight ?> <?= _x('kg','-') ?></li>
            </ul>
        </div>
    </section>

    <!-- Bio / About -->
    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-4"><?= _x('Player Bio','-') ?></h2>
        <p class="text-white/70 leading-relaxed">
            <?= $page->player_about ?>
        </p>
    </section>
</main>
<?php include_once('layout/footer.php'); ?>
