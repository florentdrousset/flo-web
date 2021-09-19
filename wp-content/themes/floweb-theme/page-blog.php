<?php
/*
Template Name: services
*/
$args = array(
    'post_type'=> 'post',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => -1 // this will retrive all the post that is published
);
$result = new WP_Query( $args );



get_header(); ?>
<section class="main-bg-color m-auto blog-section">
    <article class="2xl:font-mono text-3xl main-shade-color border-b-4 border-t-4 border-gray-500 border-opacity-20 border-solid m-auto p-8">
        <div class="flex flex-row justify-between m-auto w-1/2">
            <div>
                <h1 class="montserrat text-5xl font-bold mb-5"><?php the_title() ?></h1>
            </div>
            <img src="<?= BASE_FOLDER ?>/assets/icons/blog.png" class="w-56 h-56">
        </div>
    </article>

    <!-- LAST ARTICLES -->
    <div class="articles m-auto mt-20 w-1/2">
        <h2 class="montserrat text-3xl font-bold">Tous les articles</h2>
        <hr class="border-2 border-black dark:border-gray-700 border-solid mb-5">
        <div class="table w-full">
            <?php if ( $result-> have_posts() ) : ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                    <a href="<?php the_permalink();?>">
                        <div class="flex row text-sec-color article-list">
                            <div class="flex-auto self-center">
                                <p class="text-sm pl-4 text-sec-color"><?php the_date();?></p>
                            </div>
                            <div class="w-8/12">
                                <h3 class=" m-5 text-xl font-bold text-sec-color self-center content-center p-4"><?php the_title();?></h3>
                            </div>
                            <div class="w-2/12 self-center">
                                <img src="<?= BASE_FOLDER ?>/assets/icons/plane_window.png" class="w-3/5">
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
