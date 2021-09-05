<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Florent Drousset - Développeur E-commerce</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body class="bg-white dark:bg-gray-800 text-gray-800 dark:text-white">
<nav class="bg-gray-800 dark:bg-black dark:opacity-10">
    <div class="shadow-lg max-v-lg flex justify-between align-text-bottom p-3 w-2/3 m-auto">
        <p class="montserrat font-bold leading-12 align-middle ml-2 p-3 text-gray-300"><a href="<?php echo get_home_url() ?>">Florent Drousset</a></p>
        <ul class="list-none montserrat flex flex-row">
            <a href="/index.php/" class="nav-ele text-gray-300"><li class="block font-bold bg-gray-900 dark:bg-gray-900 hover:bg-yellow-400 dark:hover:bg-yellow-400 p-3 ml-3">Accueil</li></a>
            <a href="/index.php/blog" class="nav-ele text-gray-300"><li class="block font-bold bg-gray-900 dark:bg-gray-900 hover:bg-yellow-400 dark:hover:bg-yellow-400 p-3 ml-3">Blog</li></a>
            <a href="/index.php/services" class="nav-ele text-gray-300"><li class="block font-bold bg-gray-900 dark:bg-gray-900 hover:bg-yellow-400 dark:hover:bg-yellow-400 p-3 ml-3">Services</li></a>
            <a href="mailto:florent.drousset@gmail.com" class="nav-ele text-gray-300"><li class="block font-bold bg-gray-900 dark:bg-gray-900 hover:bg-yellow-400 dark:hover:bg-yellow-400 p-3 ml-3">Contact</li></a>
            <li id="darkmode-icon" class="flex ml-3"><img src="<?= BASE_FOLDER ?>/assets/icons/moon.png" class="w-6 h-6 m-auto align-bottom"></li>
        </ul>
    </div>

</nav>