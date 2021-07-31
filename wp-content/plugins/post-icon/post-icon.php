<?php
/*
Plugin Name: Post Icon
Plugin URI: https://florent.codes
Description: Links an icon or picture to your blog post
Version: 0.1
Author: Florent Drousset
Author URI: https://florent.codes
*/

defined('ABSPATH') or die('Unauthorized.');

//function example_function()
//{
//    $information = 'This is a very basic plugin.';
//    return $information;
//}
//add_shortcode('example', 'example_function');

class PostIconPlugin
{
    function __construct()
    {

    }
}

if (class_exists('PostIconPlugin')) {
    $testIconPlugin = new TestIconPlugin();
}

/*
 * activation
 * deactivation
 * uninstall
 */