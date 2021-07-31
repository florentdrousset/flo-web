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
            <h2 class="2xl:font-mono text-3xl font-bold text-black dark:text-yellow-200">Présentation</h2>
            <hr class="border-2 border-black dark:border-gray-700 border-solid mb-5">
            <article class="mb-3">
                Je m'appelle Florent, et je suis un développeur fullstack spécialisé dans WordPress. Avant de me lancer en freelance, j'ai travaillé à plein temps en tant que développeur web back-end dans une ESN.

                J'ai bien conscience du fait qu'un site est souvent modifié par plusieurs personnes sur de nombreuses années, et c'est pourquoi je suis particulièrement attentif au fait de produire du code <strong>compréhensible</strong> et facilement <strong>réutilisable</strong>.

                <p>Que vous ayez pour projet de créer un <strong>site de e-commerce</strong> ou un site vitrine pour votre activité, je peux vous aider.</p>

                <h2 class="2xl:font-mono text-3xl font-bold text-black dark:text-yellow-200 mt-4">Mes compétences</h2>
                <hr class="border-2 border-black dark:border-gray-700 border-solid mb-5">
                <article class="flex mt-5">
                    <div><img src="<?=BASE_FOLDER?>/assets/icons/mentalite.png"/><h5 class="font-bold">Solution clé en main</h5><p>Du code de qualité, moderne et réutilisable.</p></div>
                    <div><img src="<?=BASE_FOLDER?>/assets/icons/mentalite.png"/><h5 class="font-bold">Code propre</h5><p>Du code de qualité, moderne et réutilisable.</p></div>
                    <div><img src="<?=BASE_FOLDER?>/assets/icons/mentalite.png"/><h5 class="font-bold">Code propre</h5><p>Du code de qualité, moderne et réutilisable.</p></div>
                    <div><img src="<?=BASE_FOLDER?>/assets/icons/mentalite.png"/><h5 class="font-bold">Code propre</h5><p>Du code de qualité, moderne et réutilisable.</p></div>
                </article>

                <h2 class="2xl:font-mono text-3xl font-bold text-black dark:text-yellow-200 mt-4">Tâches courantes</h2>
                <hr class="border-2 border-black dark:border-gray-700 border-solid mb-5">
                <p>Voici quelques unes des tâches auxquelles je suis régulièrement confronté :</p>
                <br/>
                <div class="bg-blue-400 bg-opacity-60 rounded border-opacity-60 border-2 border-blue-700 p-4 pl-8">
                    <ul class="list-disc">
                        <li>Ajouter une nouvelle fonctionnalité sur votre site web, que ce soit en développant un plugin à partir de 0 ou en étendant un plugin déjà existant.</li>
                        <li>Créer un nouveau thème pour votre site ou en modifier un déjà existant.</li>
                        <li>Mettre en place des formulaires.</li>
                        <li>Débugger ou trouver une solution à un problème technique que rencontre votre site.</li>
                    </ul>
                </div>


            </article>

        </article>

    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
