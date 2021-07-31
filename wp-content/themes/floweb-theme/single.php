<?php get_header() ?>

<section class="bg-white dark:text-white dark:bg-gray-800 m-auto">
    <article class="2xl:font-mono text-3xl bg-gray-200 dark:bg-gray-700 bg-opacity-60 dark:bg-opacity-100 border-b-4 border-gray-500 border-opacity-20 border-solid m-auto p-8">
        <div class="flex flex-row m-auto w-1/2">
            <div>
                <h1 class="3xl:font-mono text-5xl font-bold mb-5"><?php the_title() ?></h1>
                <p class="font-sans text-base w-3/5">par <b><?php the_author() ?></b>, le <?php the_date() ?>.</p>
                <div id="tags" class="mt-2">
                    <?php
                    $tags = get_tags();
                    ?>
                    <a href="#" class="text-sm text-white border-2 border-blue-400 p-2 bg-blue-300">windows</a>
                    <a href="#" class="text-sm text-white border-2 border-blue-400 p-2 bg-blue-300">terminal</a>
                    <a href="#" class="text-sm text-white border-2 border-blue-400 p-2 bg-blue-300">productivity</a>
                </div>
            </div>
            <img src="assets/icons/plane_window.png" class="w-56 h-56">
        </div>
    </article>

    <!-- LAST ARTICLES -->
    <div class="articles m-auto mt-8 w-1/2">
        <article>
            <h2 class="2xl:font-mono text-3xl font-bold text-black dark:text-yellow-200">Here is a subtitle</h2>
            <hr class="border-2 border-black dark:border-gray-700 border-solid mb-5">
            <p class="mb-3">
                <?php echo the_content(); ?>
                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
            </p>
            <h2 class="2xl:font-mono text-3xl font-bold text-black dark:text-yellow-200">And another one</h2>
            <hr class="border-2 border-black dark:border-gray-700 border-solid mb-5">
            <p>
                On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.
            </p>
            <pre><code class="language-php">
                class ThisIsATest
                {
                    function jazz($age) {
                    $name = 'Flo';
                }
                }

            </code></pre>
        </article>

    </div>
</section>

</body>
</html>
