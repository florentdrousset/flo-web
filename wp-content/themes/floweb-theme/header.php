<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./tailwind.css">
</head>
<body class="bg-white dark:bg-gray-800">
<nav class="bg-gray-800 dark:bg-black shadow-lg max-v-lg flex justify-between align-text-bottom p-3">
    <p class="2xl:font-mono font-bold leading-10 align-middle ml-2 text-gray-300"><a href="<?php echo get_home_url() ?>">Florent Drousset</a></p>
    <ul class="list-none lg:font-mono flex flex-row">
        <li class="px-5 py-2 block font-bold"><a href="#" class="text-gray-300">Home</a></li>
        <li class="px-5 py-2 block font-bold"><a href="index.html" class="text-gray-300">Blog</a></li>
        <li class="px-5 py-2 block font-bold"><a href="#" class="text-gray-300">Services</a></li>
        <li class="px-5 py-2 block font-bold"><a href="mailto:florent.drousset@gmail.com" class="text-gray-300">Contact</a></li>
        <li id="darkmode-icon" class="flex"><img src="assets/icons/moon.png" class="w-6 h-6 m-auto align-bottom"></li>
    </ul>
</nav>