<?php namespace ProcessWire;
?>

<!-- Footer -->
<footer class="border-t border-white/10 bg-shafaq-green">
    <div class="max-w-7xl mx-auto px-4 py-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-8 text-sm">
        <div>
            <div class="font-extrabold text-lg">Shafaq FC</div>
            <p class="text-white/60 mt-2">© <span id="yr">2025</span> All rights reserved.</p>
            <p class="text-white/40 mt-1">
                Made by
                <a href="https://create.az" target="_blank" rel="noopener"
                   class="text-shafaq-yellow font-semibold hover:underline">
                    Create Solutions
                </a>
            </p>
        </div>
        <div>
            <div class="font-semibold mb-3"><?= _x('Navigation','-') ?></div>
            <ul class="space-y-2 text-white/70">
                <li><a class="hover:text-white" href="<?= $home->url ?>"><?= $home->title ?></a></li>
                <?php foreach ($home->children as $child){ ?>
                    <li><a class="hover:text-white" href="<?= $child->url ?>"><?= $child->title ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <div>
            <div class="font-semibold mb-3"><?= _x('Socials','-') ?></div>
            <ul class="space-y-2 text-white/70">
                <?php foreach ($home->socials as $social){ ?>
                    <li><a href="<?= $social->link ?>" target="_blank" class="hover:text-white"><?= $social->link ?></a></li>

                <?php } ?>
            </ul>
        </div>
        <div>
            <div class="font-semibold mb-3"><?= _x('Contact','-') ?></div>
            <ul class="space-y-2 text-white/70">
                <li>Email: media@shafaqfc.example</li>
                <li>Phone: 0554789079</li>
                <li>Stadium: Shafaq Arena</li>
                <li>City: Sunrise Bay</li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
