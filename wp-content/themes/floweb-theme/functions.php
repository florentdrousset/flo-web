<?php
define(BASE_FOLDER, "/wp-content/themes/floweb-theme/");

function floweb_files()
{
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/tailwind.css');
}

add_action('wp_enqueue_scripts', 'floweb_files');
