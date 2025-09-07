<?php namespace ProcessWire;
include_once('layout/header.php');
?>
<main id="news" class="max-w-7xl mx-auto px-4 py-10">
    <!-- Page title + search -->
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl sm:text-5xl font-extrabold"><?= $page->headline ?></h1>
            <p class="text-white/70 mt-2 max-w-2xl"><?= $page->headline_text ?></p>
        </div>
    </div>

    <!-- Featured -->
    <?php
    $latestChild = $page->child("sort=-created, limit=1");
    $newsItems = $pages->find("template=news_detail, sort=-created,  id!=$latestChild->id, limit=6");
    ?>
    <section class="rounded-2xl overflow-hidden ring-1 ring-white/10 bg-white/5 mb-10 grid md:grid-cols-2">
        <div class="relative">
            <img src="<?= $latestChild->image->url ?>" alt="Featured story image" class="w-full h-full object-cover">
        </div>
        <div class="p-6 sm:p-8 flex flex-col justify-center">
            <a href="<?= $latestChild->url ?>" class="group">
                <h2 class="text-2xl sm:text-3xl font-extrabold group-hover:text-shafaq-yellow transition">
                    <?= $latestChild->title ?>
                </h2>
            </a>
            <div class="mt-3 text-white/60 text-sm flex items-center gap-2">
                <span><?= $datetime->date($format = 'd-m-Y', $latestChild->created); ?></span>
            </div>
            <p class="mt-4 text-white/80">
                <?= $sanitizer->truncate($latestChild->text, 200)  ?>
            </p>
            <div class="mt-6">
                <a href="<?= $latestChild->url ?>" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-shafaq-yellow text-neutral-900 font-semibold">
                    Read more
                </a>
            </div>
        </div>
    </section>

    <!-- Grid -->
    <section class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card -->
        <?php
        foreach ($newsItems as $item) {
        ?>
        <article class="rounded-2xl overflow-hidden ring-1 ring-white/10 bg-white/5">
            <a href="<?= $item->url ?>" class="block">
                <img src="<?= $item->image->url ?>" alt="Story 1" class="w-full h-48 object-cover">
            </a>
            <div class="p-5">
                <div class="flex items-center gap-2 text-xs text-white/60 mb-2">
                    <span><?= $datetime->date($format = 'd-m-Y', $item->created); ?></span>
                </div>
                <a href="<?= $item->url ?>" class="group">
                    <h3 class="font-bold text-lg group-hover:text-shafaq-yellow transition">
                        <?= $item->title ?>
                    </h3>
                </a>
                <p class="text-white/70 mt-2">
                    <?= $sanitizer->truncate($item->text, 80)  ?>
                </p>
                <a href="<?= $item->url ?>" class="mt-4 inline-block text-sm text-shafaq-yellow hover:underline"><?= _x('Read more','-') ?></a>
            </div>
        </article>

        <?php } ?>
    </section>

    <?php

    echo $newsItems->renderPager(array(
        'nextItemLabel' => "Next",
        'previousItemLabel' => "Prev",
        'listMarkup' => "<div class='mt-10 flex items-center justify-center gap-2 text-sm'>{out}</div>",
        'itemMarkup' => "{out}",
        'linkMarkup' => "<a href='{url}' class='px-3 py-2 rounded-lg bg-white/10 hover:bg-white/20 transition'>{out}</a>",
        'currentLinkMarkup' => "<span class='px-3 py-2 rounded-lg bg-shafaq-yellow text-neutral-900 font-semibold'>{out}</span>",
        'currentItemClass' => "px-3 py-2 rounded-lg bg-shafaq-yellow text-neutral-900 font-semibold",
        'separatorItemMarkup' => "<span class='px-3 py-2 text-white/60'>…</span>",
        'nextItemMarkup' => "<a href='{url}' class='px-3 py-2 rounded-lg bg-white/10 hover:bg-white/20 transition'>{out}</a>",
        'previousItemMarkup' => "<a href='{url}' class='px-3 py-2 rounded-lg bg-white/10 hover:bg-white/20 transition'>{out}</a>",
        'numPageLinks' => 5,
    ));
    ?>
</main>
<?php include_once('layout/footer.php'); ?>
