<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body class="bg-white dark:bg-gray-800">
<nav class="bg-gray-800 dark:bg-black shadow-lg max-v-lg flex justify-between align-text-bottom p-3">
    <p class="montserrat font-bold leading-10 align-middle ml-2 text-gray-300"><a href="<?php echo get_home_url() ?>">Florent Drousset</a></p>
    <ul class="list-none montserrat flex flex-row">
        <li class="px-5 py-2 block font-bold"><a href="#" class="text-gray-300">Home</a></li>
        <li class="px-5 py-2 block font-bold"><a href="index.html" class="text-gray-300">Blog</a></li>
        <li class="px-5 py-2 block font-bold"><a href="index.php/services" class="text-gray-300">Services</a></li>
        <li class="px-5 py-2 block font-bold"><a href="mailto:florent.drousset@gmail.com" class="text-gray-300">Contact</a></li>
        <li id="darkmode-icon" class="flex"><img src="<?= BASE_FOLDER ?>/assets/icons/moon.png" class="w-6 h-6 m-auto align-bottom"></li>
    </ul>
</nav>