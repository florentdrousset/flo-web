<?php
define(BASE_FOLDER, "/wp-content/themes/floweb-theme/");

function floweb_files()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/tailwind.css');
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/src/main-script.js' );
}

add_action('wp_enqueue_scripts', 'floweb_files');
