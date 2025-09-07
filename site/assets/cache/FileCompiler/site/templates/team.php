<?php namespace ProcessWire;
include_once('layout/header.php');
?>
<main id="squad" class="max-w-7xl mx-auto px-4 py-12">
    <!-- Page title -->
    <div class="flex items-end justify-between mb-10">
        <h1 class="text-3xl sm:text-5xl font-extrabold"><?= $page->headline ?></h1>
    </div>
    <!-- Squad grid -->
    <?php
    $items = $pages->find("template=team_detail, sort=-created");
    ?>
    <section class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Player card -->
        <?php
        foreach ($items as $item) {
        ?>
        <div class="glass rounded-2xl p-5 ring-1 ring-white/10">
            <a href="<?= $item->url ?>" class="block">
                <div class="aspect-[4/5] rounded-xl overflow-hidden bg-pitch-gradient relative">
                    <img src="<?= $item->image->url ?>" alt="<?= $item->title ?>" class="w-full h-full object-cover">
                    <div class="absolute bottom-3 left-3 bg-shafaq-yellow text-neutral-900 font-bold px-3 py-1 rounded-lg text-sm">#<?= $item->player_number ?></div>
                </div>
            </a>
            <a href="<?= $item->url ?>" class="group">
                <h3 class="mt-4 font-bold text-lg group-hover:text-shafaq-yellow transition"><?= $item->title ?></h3>
            </a>
            <p class="text-white/70 text-sm"><?= $item->player_position ?></p>
        </div>
        <?php } ?>
    </section>
</main>

<?php include_once('layout/footer.php'); ?>
