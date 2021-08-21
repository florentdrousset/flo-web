<?php get_header(); ?>


<section class="bg-white dark:text-white dark:bg-gray-800 m-auto">
    <article class="2xl:font-mono text-3xl bg-gray-200 dark:bg-gray-700 bg-opacity-60 dark:bg-opacity-100 border-b-4 border-gray-500 border-opacity-20 border-solid m-auto p-8">
        <div class="flex flex-row m-auto w-1/2">
            <div>
                <h1 class="montserrat text-5xl font-bold mb-5">Je suis Florent Drousset.</h1>
                <p class="roboto text-base w-3/5">Je suis un développeur web freelance spécialisé en PHP et WordPress.
                    Vous trouverez ici des articles sur le développement web en général, ainsi que des informations si vous
                    avez besoin de <a href="index.php/services">mes services</a> pour créer un site web pour vous ou votre entreprise.</p>
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
        <h2 class="montserrat text-3xl font-bold text-black dark:text-yellow-200">Derniers articles</h2>
        <hr class="border-2 border-black dark:border-gray-700 border-solid mb-5">
        <div class="table w-full">

            <?php
            while(have_posts()) {
            the_post();
            ?>
            <a href="<?php the_permalink();?>"<div class="flex row hover:bg-gray-100">

                <div class="flex-auto self-center">
                    <p class="text-sm text-gray-600"><?php the_date();?></p>
                </div>
                <div class="w-8/12">
                    <h3 class="2xl:font-mono m-5 text-xl font-bold text-gray-600 self-center content-center p-4"><?php the_title();?></h3>
                </div>
                <div class="w-2/12 self-center">
                    <img src="<?= BASE_FOLDER ?>/assets/icons/plane_window.png" class="w-3/5">
                </div>
                <?php
            }
            ?>

            </div>
        </a>
            <!--
           <div class="flex row hover:bg-gray-100">
               <div class="flex-auto self-center">
                   <p class="text-sm text-gray-600">2 Juil. 2021</p>
               </div>
               <div class="w-8/12">
                   <h3 class="2xl:font-mono m-5 text-xl font-bold text-gray-600 self-center content-center p-4">Développer sous Windows ?</h3>
               </div>
               <div class="w-2/12 self-center">
                   <img src="assets/icons/plane_window.png" class="w-3/5">
               </div>
           </div>
           <div class="flex row hover:bg-gray-100">
               <div class="flex-auto w-1/12 self-center">
                   <p class="text-sm text-gray-600">2 Juil. 2021</p>
               </div>
               <div class="w-8/12">
                   <h3 class="2xl:font-mono m-5 text-xl font-bold text-gray-600 self-center content-center p-4">WordPress + Docker</h3>
               </div>
               <div class="w-2/12 self-center">
                   <img src="assets/icons/cargo-ship.png" class="w-3/5">
               </div>
           </div>
           <div class="flex row hover:bg-gray-100">
               <div class="flex-auto self-center">
                   <p class="text-sm text-gray-600">2 Juil. 2021</p>
               </div>
               <div class="w-8/12">
                   <h3 class="2xl:font-mono m-5 text-xl font-bold text-gray-600 self-center content-center p-4">Les bases de WordPress</h3>
               </div>
               <div class="w-2/12 self-center">
                   <img src="assets/icons/foundation.png" class="w-3/5">
               </div>
           </div>
           -->
        </div>
    </div>
</section>
<?php get_footer(); ?>

<!--<script src="--><?//= BASE_FOLDER ?><!--/src/main-script.js"></script>-->
</body>
</html>
