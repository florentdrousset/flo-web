<?php
/*
Template Name: services
*/

get_header(); ?>
<section class="bg-white dark:text-white dark:bg-gray-800 m-auto">
    <article class="2xl:font-mono text-3xl bg-gray-200 dark:bg-gray-700 bg-opacity-60 dark:bg-opacity-100 border-b-4 border-gray-500 border-opacity-20 border-solid m-auto p-8">
        <div class="flex flex-row justify-between m-auto w-1/2">
            <div>
                <h1 class="montserrat text-5xl font-bold mb-5"><?php the_title() ?></h1>
            </div>
            <img src="<?= BASE_FOLDER ?>/assets/icons/services.png" class="w-56 h-56">
        </div>
    </article>

    <!-- LAST ARTICLES -->
    <div class="articles m-auto mt-8 w-1/2">
        <div>
            <h2 class="montserrat text-3xl font-bold text-black dark:text-yellow-200">Présentation</h2>
            <hr class="border-2 border-black dark:border-gray-700 border-solid mb-5">
            <div class="roboto mb-3">
                <p class="mb-2">Je m'appelle Florent, et je suis un développeur web fullstack spécialisé dans <strong>Shopify</strong> et <strong>Wordpress/WooCommerce</strong>. Avant de me lancer en freelance, j'ai travaillé à plein temps en tant que développeur web back-end dans une ESN.
                J'ai bien conscience du fait qu'un site est souvent modifié par plusieurs personnes sur de nombreuses années, et c'est pourquoi je suis particulièrement attentif au fait de produire du code <strong>compréhensible</strong> et facilement <strong>réutilisable</strong>.
                </p>
                <p>Que vous ayez pour projet de créer un <strong>site de e-commerce</strong> ou un <strong>site vitrine</strong> pour votre activité, je peux vous aider. Je travaille également en partenariat avec des graphistes qui pourront vous aider à élaborer une charte graphique et un design pour votre site que je me chargerai ensuite d'intégrer.</p>
                <p>Je peux vous aider si vous avez besoin de :</p>
                <div class="bg-blue-400 bg-opacity-60 rounded border-opacity-60 border-2 border-blue-700 p-4 pl-8 mt-5 mb-5">
                    <ul class="list-disc">
                        <li>Créer un site web de A à Z pour votre activité.</li>
                        <li>Ajouter une nouvelle fonctionnalité sur votre site web, que ce soit en développant un plugin à partir de 0 ou en étendant un plugin déjà existant.</li>
                        <li>Créer un nouveau thème pour votre site ou en modifier un déjà existant.</li>
                        <li>Débugger ou trouver une solution à un problème technique que rencontre votre site.</li>
                    </ul>
                </div>

                <p><a href="mailto:florent.drousset@gmail.com">Envoyez-moi un mail</a> afin de discuter de votre projet et pour établir un devis.</p>

                <h2 class="text-3xl font-bold text-black dark:text-yellow-200 mt-4">Mes compétences</h2>
                <hr class="border-2 border-black dark:border-gray-700 border-solid mb-5">
                <div class="bg-gray-100 dark:bg-gray-700">
                    <article class="flex mt-5 p-12 justify-between">
                        <div class="mr-3 flex-1 skill">
                            <img src="<?=BASE_FOLDER?>/assets/icons/client.png" class="m-auto w-32"/>
                            <h5 class="montserrat font-bold text-center skill-title">A votre écoute</h5>
                            <p class="text-center">Je travaille avec des humains avant de travailler avec un ordinateur : bien définir vos besoins et répondre à vos questions est ma priorité.</p>
                        </div>
                        <div class="flex-1 skill">
                            <img src="<?=BASE_FOLDER?>/assets/icons/web_dev.png" class="m-auto w-32"/>
                            <h5 class="montserrat font-bold text-center skill-title">Code propre</h5>
                            <p class="text-center">Du code de qualité, moderne et facilement réutilisable pour les prochains développeurs qui travailleront sur votre site.</p>
                        </div>
                        <div class="ml-3 flex-1 skill"><img src="<?=BASE_FOLDER?>/assets/icons/smartphone.png" class="m-auto w-32"/>
                            <h5 class="montserrat font-bold text-center skill-title">Responsive</h5>
                            <p class="text-center">Un site qui s'adapte à tous les formats : mobile, tablette, ordinateur.</p>
                        </div>
                    </article>
                    <article class="flex p-12 justify-between">

                        <div class="flex-1 skill"><img src="<?=BASE_FOLDER?>/assets/icons/objectif.png" class="m-auto w-32"/>
                            <h5 class="montserrat font-bold text-center skill-title">SEO & accessibilité</h5>
                            <p class="text-center">Référencement naturel boosté par les bonnes pratiques sémantiques, site accessible à tous.</p>
                        </div>
                        <div class="mr-3 flex-1 skill">
                            <img src="<?=BASE_FOLDER?>/assets/icons/engagement.png" class="m-auto w-32"/>
                            <h5 class="montserrat font-bold text-center skill-title">Solution clé en main</h5>
                            <p class="text-center">Une fois votre site livré, vous êtes autonome, mais je reste joignable en cas de question.</p>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
