<?php
/**
 * Plugin Name: Ozone
 * Description: This enable you to cerate themes option panel for any of you theme
 * Author: Wasif Farooq
 */

//require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . "vender/autoload.php");

add_action('admin_init', 'ozone_init');

add_action('admin_menu', 'add_page_to_theme');


function add_page_to_theme()
{

    add_submenu_page(
        'themes.php',
        'ozone',
        'Ozone Theme Options',
        'manage_options',
        'ozone',
        'theme_option_page'
    );
}

    function ozone_init()
    {
        //wp_enqueue_script('bootstrap-js', plugins_url('/assets/js/bootstrap.min.js', __FILE__), '4.0', array('jquery'));
        //wp_enqueue_style('bootstrap-css', plugins_url('/assets/css/bootstrap.min.css', __FILE__));
    }


    function theme_option_page()
    {
        $content = '<h1>test me</h1>';
        $content = apply_filters('ozone_content', $content);
        echo $content;
        exit;
    }
