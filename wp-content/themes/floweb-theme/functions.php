<?php
const BASE_FOLDER = "/wp-content/themes/floweb-theme/";

function floweb_files()
{
    wp_enqueue_style('prism-style', get_template_directory_uri() . '/prism.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/tailwind.css');
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/src/main-script.js' );
    wp_enqueue_script( 'prism-script', get_template_directory_uri() . '/src/prism.js' );
}

function sky_date_french($format, $timestamp = null, $echo = null) {
    $param_D = array('', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim');
    $param_l = array('', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
    $param_F = array('', 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    $param_M = array('', 'Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc');
    $return = '';
    if(is_null($timestamp)) { $timestamp = mktime(); }
    for($i = 0, $len = strlen($format); $i < $len; $i++) {
        switch($format[$i]) {
            case '\\' : // fix.slashes
                $i++;
                $return .= $format[$i] ?? '';
                break;
            case 'D' :
                $return .= $param_D[date('N', $timestamp)];
                break;
            case 'l' :
                $return .= $param_l[date('N', $timestamp)];
                break;
            case 'F' :
                $return .= $param_F[date('n', $timestamp)];
                break;
            case 'M' :
                $return .= $param_M[date('n', $timestamp)];
                break;
            default :
                $return .= date($format[$i], $timestamp);
                break;
        }
    }
    if(is_null($echo)) { return $return;} else { echo $return;}
}

add_action('wp_enqueue_scripts', 'floweb_files');
