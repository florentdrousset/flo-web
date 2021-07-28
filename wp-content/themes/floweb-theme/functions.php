<?php

function floweb_files()
{
    wp_enqueue_style('floweb_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'floweb_files');
