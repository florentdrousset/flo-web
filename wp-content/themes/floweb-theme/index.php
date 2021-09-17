<?php get_header(); ?>


<section class="dark:text-white main-bg-color m-auto main-section">
    <article class="2xl:font-mono text-3xl main-shade-color bg-opacity-60 dark:bg-opacity-100 border-b-4 border-t-4 border-gray-500 border-opacity-20 border-solid m-auto p-8">
        <div class="flex flex-row m-auto w-1/2">
            <div>
                <h1 class="montserrat text-5xl font-bold mb-5">Bienvenue !</h1>
                <p class="text-base text-sec-color w-3/5">Je suis un développeur web freelance spécialisé dans <a href="https://www.shopify.com/" class="sec-highlight-color" target="_blank">Shopify</a>.
                    Vous trouverez ici des articles sur le développement web en général, ainsi que des informations si vous
                    avez besoin de <a href="index.php/services">mes services</a> pour créer un site web e-commerce pour vous ou votre entreprise.</p>
                <div class="social">
                    <a href="https://github.com/florentdrousset" target="_blank" class="inline"><img src="<?= BASE_FOLDER ?>/assets/icons/github.png" class="w-1/12 mt-3 inline-block"></a>
                    <a href="https://twitter.com/florentdrousset" target="_blank" class="inline"><img src="<?= BASE_FOLDER ?>/assets/icons/twitter.png" class="w-1/12 mt-3 inline-block"></a>
                </div>
            </div>
            <img src="<?= BASE_FOLDER ?>/assets/img/flo.jpg" class="border-4 border-black border-solid w-56 h-56 ml-3">
        </div>
    </article>

    <!-- LAST ARTICLES -->
    <div class="articles m-auto mt-20 w-1/2">
        <h2 class="montserrat text-3xl font-bold">Derniers articles</h2>
        <hr class="mb-5">
        <div class="table w-full">

            <?php
            while(have_posts()) {
            the_post();
            ?>
            <a href="<?php the_permalink();?>"<div class="flex row article-list">

                <div class="flex-auto text-sec-color self-center">
                    <p class="text-sm pl-4"><?php the_date();?></p>
                </div>
                <div class="w-8/12">
                    <h3 class=" m-5 text-xl text-sec-color font-bold self-center content-center p-4"><?php the_title();?></h3>
                </div>
                <div class="w-2/12 self-center">
                    <img src="<?= BASE_FOLDER ?>/assets/icons/plane_window.png" class="w-3/5">
                </div>
                <?php
            }
            ?>

            </div>
        </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
