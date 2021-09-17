<?php get_header() ?>

<section class="main-bg-color m-auto">
    <article class="2xl:font-mono text-3xl main-shade-color border-b-4 border-t-4 border-gray-500 border-opacity-20 border-solid m-auto p-8">
        <div class="flex flex-row justify-between m-auto w-1/2">
            <div>
                <h1 class="3xl:font-mono text-5xl font-bold mb-5"><?php the_title() ?></h1>
                <p class="font-sans text-base text-sec-color w-3/5">par <b>Florent Drousset</b>, le <?= sky_date_french('l d F Y', get_post_time('U', true), 1); ?>.</p>
                <div id="tags" class="mt-2">
                    <?php
                    $tags = get_tags();
                    ?>
                    <a href="#" class="text-sm text-white border-2 border-blue-400 p-2 bg-blue-300">shopify</a>
                    <a href="#" class="text-sm text-white border-2 border-blue-400 p-2 bg-blue-300">terminal</a>
                    <a href="#" class="text-sm text-white border-2 border-blue-400 p-2 bg-blue-300">shell</a>
                </div>
            </div>
            <img src="<?= BASE_FOLDER ?>/assets/icons/plane_window.png" class="w-56 h-56">
        </div>
    </article>

    <!-- LAST ARTICLES -->
    <div class="articles m-auto mt-8 w-1/2">
        <article class="text-sec-color">
                <?php echo the_content(); ?>
        </article>
        <hr class="border-2 border-gray-700 dark:border-gray-700 border-solid mb-3 mt-14">
        <section>
            <h2 class="2xl:font-mono text-3xl font-bold mt-12 mb-2">Commentaires</h2>
            <script src="https://utteranc.es/client.js"
                    repo="florentdrousset/comment-section"
                    issue-term="pathname"
                    theme="dark-blue"
                    crossorigin="anonymous"
                    async>
            </script>
        </section>
    </div>
</section>

<?php get_footer(); ?>
</body>
</html>
