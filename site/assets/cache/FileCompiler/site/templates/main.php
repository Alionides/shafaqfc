<?php namespace ProcessWire;
include_once('layout/header.php');

?>

<!-- Hero Carousel -->
<section class="relative overflow-hidden">
    <div class="owl-carousel main-carousel owl-theme">

        <?php foreach ($page->slider as $slider){ ?>
        <div class="relative h-[500px] sm:h-[600px] bg-neutral-900">
            <img src="<?= $slider->image->url ?>" class="w-full h-full object-cover" alt="<?= $slider->title ?>" />
            <div class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-center px-6">
                <h1 class="text-4xl sm:text-6xl font-extrabold leading-tight">
                    <?= $slider->title ?>
                </h1>
                <p class="mt-4 text-white/80 max-w-2xl">
                    <?= $slider->text ?>
                </p>
                <div class="mt-6 flex flex-wrap gap-3 justify-center">
                    <?php foreach ($slider->links as $links) { ?>
                            <a class="px-5 py-3 rounded-xl bg-shafaq-yellow text-neutral-900 font-semibold shadow-glow" href="<?= ($links->redirect->url) ? $links->redirect->url : $links->link; ?>"><?= $links->title ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<!-- Sponsors (Owl Carousel) -->
<section class="bg-neutral-900/60 border-y border-white/10">
    <div class="max-w-7xl mx-auto px-4 py-6">
        <div class="owl-carousel owl-theme sponsors-carousel">

            <?php foreach ($page->sponsors as $sponsor){ ?>
            <a href="#" class="flex items-center justify-center h-16 px-6">
                <img src="<?= $sponsor->image->url ?>" alt="<?= $sponsor->image->title ?>"
                     class="h-14 object-contain opacity-80 grayscale hover:grayscale-0 hover:opacity-100 transition" />
            </a>
            <?php } ?>

        </div>
    </div>
</section>

<!-- News -->
<?php
$newsItems = $pages->find("template=news_detail, sort=-created, limit=3");
$newsPage = $pages->get("template=news");
?>
<section id="news" class="max-w-7xl mx-auto px-4 py-16">
    <div class="flex items-end justify-between mb-8">
        <h2 class="text-3xl sm:text-4xl font-extrabold"><?= _x('News','-') ?></h2>
        <a class="text-shafaq-yellow hover:underline" href="<?= $newsPage->url ?>"><?= _x('View all','-') ?></a>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <?php foreach ($newsItems as $item) { ?>
        <article class="glass rounded-2xl p-5 ring-1 ring-white/10 hover:ring-white/20 transition">
            <div class="aspect-video rounded-xl overflow-hidden bg-neutral-800 mb-4">
                <img src="<?= $item->image->url ?>" alt="<?= $item->title ?>" class="w-full h-full object-cover" />
            </div>
            <h3 class="font-bold text-lg"><?= $item->title ?></h3>
            <p class="text-white/70 mt-2"><?= $sanitizer->truncate($item->text, 80)  ?></p>
            <a href="<?= $item->url ?>" class="mt-4 inline-block text-sm text-shafaq-yellow hover:underline"><?= _x('Read more','-') ?></a>
        </article>
        <?php } ?>
    </div>
</section>

<!-- Fixtures -->
<section id="fixtures" class="bg-gradient-to-b from-neutral-950 to-neutral-900 border-y border-white/10">
    <div class="max-w-7xl mx-auto px-4 py-16">
        <h2 class="text-3xl sm:text-4xl font-extrabold mb-8"><?= _x('Upcoming Fixtures','-') ?></h2>
        <div class="overflow-hidden rounded-2xl ring-1 ring-white/10">
            <table class="w-full text-left text-sm md:text-base">
                <thead class="bg-white/5">
                <tr class="text-white/70">
                    <th class="p-4"><?= _x('Date','-') ?></th>
                    <th class="p-4"><?= _x('Competition','-') ?></th>
                    <th class="p-4"><?= _x('Match','-') ?></th>
                    <th class="p-4"><?= _x('Stadium','-') ?></th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($page->games as $g) { ?>
                <tr class="odd:bg-white/0 even:bg-white/[0.03]">
                    <td class="p-4"><?= $datetime->date($format = 'd-m-Y', $g->date); ?></td>
                    <td class="p-4"><?= $g->competition ?></td>
                    <td class="p-4 font-semibold"><?= $g->match ?></td>
                    <td class="p-4"><?= $g->stadium ?></td>
                </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Squad -->
<?php
 $teamPage = $pages->get("template=team");
 $teamItem = $pages->find("template=team_detail, limit=4");
?>
<section id="squad" class="max-w-7xl mx-auto px-4 py-16">
    <div class="flex items-end justify-between mb-8">
        <h2 class="text-3xl sm:text-4xl font-extrabold"><?= _x('Team','-') ?></h2>
        <a href="<?= $teamPage->url ?>" class="text-shafaq-yellow hover:underline"><?= _x('All Team','-') ?></a>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Player card (repeat as needed) -->
        <?php
        foreach ($teamItem as $item) {
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

    </div>
</section>

<!-- Gallery -->
<section id="gallery" class="bg-neutral-900/60 border-y border-white/10">
    <div class="max-w-7xl mx-auto px-4 py-16">
        <h2 class="text-3xl sm:text-4xl font-extrabold mb-8"><?= _x('Gallery','-') ?></h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Example image -->
            <?php foreach ($page->images as $galleryItem){ ?>
            <a href="<?= $galleryItem->url ?>" class="glightbox" data-gallery="shafaq-gallery">
                <img class="rounded-xl object-cover aspect-square ring-1 ring-white/10 hover:scale-105 transition-transform duration-300"
                     src="<?= $galleryItem->url ?>" alt="Jersey" />
            </a>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Club info / CTA -->
<?php
$aboutPage = $pages->get("template=about");
?>
<section id="club" class="max-w-7xl mx-auto px-4 py-16 grid lg:grid-cols-2 gap-10 items-center">
    <div class="order-2 lg:order-1">
        <h2 class="text-3xl sm:text-4xl font-extrabold"><?= $aboutPage->headline ?></h2>
        <p class="text-white/80 mt-4"><?= $aboutPage->headline_text ?></p>
        <div class="mt-6 flex gap-3">
            <a href="<?= $aboutPage->url ?>" id="tickets" class="px-5 py-3 rounded-xl bg-shafaq-yellow text-neutral-900 font-semibold shadow-glow"><?= $aboutPage->title ?></a>
        </div>
    </div>
    <div class="order-1 lg:order-2">
        <div class="rounded-3xl overflow-hidden ring-1 ring-white/10 shadow-glow">
            <div class="bg-pitch-gradient aspect-[16/10]">
                <img src="<?= $aboutPage->image->url ?>"/>
            </div>
        </div>
    </div>
</section>


<!-- Newsletter -->
<section id="newsletter" class="max-w-7xl mx-auto px-4 py-16">
    <div class="glass rounded-3xl p-8 ring-1 ring-white/10 grid md:grid-cols-3 gap-6 items-center">
        <div class="md:col-span-2">
            <h3 class="font-extrabold text-2xl">Get sunrise updates</h3>
            <p class="text-white/70 mt-1">News, tickets, and exclusive drops from Shafaq FC, straight to your inbox.</p>
        </div>
        <form class="flex gap-2">
            <input type="email" required placeholder="you@example.com" class="flex-1 px-4 py-3 rounded-xl bg-white/5 ring-1 ring-white/10 placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-shafaq-yellow">
            <button class="px-4 py-3 rounded-xl bg-shafaq-yellow text-neutral-900 font-semibold">Subscribe</button>
        </form>
    </div>
</section>
<?php include_once('layout/footer.php'); ?>
