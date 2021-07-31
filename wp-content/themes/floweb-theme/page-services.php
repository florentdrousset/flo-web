<?php
/*
Template Name: services
*/

get_header(); ?>
<section class="bg-white dark:text-white dark:bg-gray-800 m-auto">
    <article class="2xl:font-mono text-3xl bg-gray-200 dark:bg-gray-700 bg-opacity-60 dark:bg-opacity-100 border-b-4 border-gray-500 border-opacity-20 border-solid m-auto p-8">
        <div class="flex flex-row m-auto w-1/2">
            <div>
                <h1 class="3xl:font-mono text-5xl font-bold mb-5"><?php the_title() ?></h1>
            </div>
<!--            <img src="--><?//= BASE_FOLDER ?><!--/assets/icons/plane_window.png" class="w-56 h-56">-->
        </div>
    </article>

    <!-- LAST ARTICLES -->
    <div class="articles m-auto mt-8 w-1/2">
        <article>
            <h2 class="2xl:font-mono text-3xl font-bold text-black dark:text-yellow-200">Here is a subtitle</h2>
            <hr class="border-2 border-black dark:border-gray-700 border-solid mb-5">
            <p class="mb-3">
                <?php echo the_content(); ?>
            </p>

        </article>

    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
