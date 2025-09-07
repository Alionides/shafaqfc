<?php namespace ProcessWire;
include_once('layout/header.php');
?>
<main id="about" class="">
    <!-- About Hero -->
    <section class="relative bg-neutral-900">
        <div class="max-w-7xl mx-auto px-4 py-20 grid md:grid-cols-2 gap-12 items-center">
            <!-- Text -->
            <div>
                <h1 class="text-4xl sm:text-5xl font-extrabold mb-6">
                    <?php
                        $words = explode(" ",  $page->headline);
                        $firstWord = array_shift($words);
                        $otherWords = implode(" ", $words);
                        $highlighted = $firstWord . ' <span class="text-shafaq-yellow">' . $otherWords . '</span>';
                    ?>
                    <?= $highlighted ?>
                </h1>
                <p class="text-lg leading-relaxed mb-4">
                    <?= $page->headline_text ?>
                </p>
            </div>

            <!-- Image -->
            <div>
                <img src="<?= $page->image->url ?>" alt="<?= $page->headline ?>" class="rounded-2xl object-cover ring-2 ring-shafaq-yellow/60 shadow-lg"/>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section id="mission" class="bg-neutral-800 border-y border-white/10">
        <div class="max-w-7xl mx-auto px-4 py-20 grid md:grid-cols-2 gap-12">
            <?php foreach($page->vision_or_mission as $mv){ ?>
            <div class="p-8 rounded-2xl bg-neutral-900 shadow-md ring-1 ring-white/10 hover:ring-shafaq-yellow/70 transition">
                <h3 class="text-2xl font-bold mb-4 text-shafaq-yellow"><?= $mv->headline ?></h3>
                <p class="text-lg leading-relaxed">
                    <?= $mv->headline_text ?>
                </p>
            </div>
            <?php } ?>

        </div>
    </section>

    <!-- Timeline / History -->
    <section class="bg-neutral-900 border-y border-white/10">
        <div class="max-w-7xl mx-auto px-4 py-20">
            <h2 class="text-3xl sm:text-4xl font-extrabold mb-12 text-center">
                Our <span class="text-shafaq-yellow">Journey</span>
            </h2>
            <div class="relative border-l-4 border-shafaq-yellow pl-8 space-y-12">
                <?php foreach($page->our_journey as $oj){ ?>
                <div>
                    <h4 class="text-xl font-bold text-shafaq-yellow"><?= $oj->headline ?></h4>
                    <p class="text-lg leading-relaxed">
                        <?= $oj->headline_text ?>
                    </p>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>

</main>

<?php include_once('layout/footer.php'); ?>
