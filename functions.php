<?php

function followmax_theme_support() {
    //Add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'followmax_theme_support');

function followmax_menus() {
    $locations = array(
        'primary' => "Descktop Primary Left Sidebar",
        'footer' => "Footer Menu Ittems"
    );

    register_nav_menus($locations);
}

add_action('init', 'followmax_menus');

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}

add_filter('wp_nav_menu', 'add_menuclass');

function followmax_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('followmax-style', get_template_directory_uri() . "/assets/css/style.css", array('followmax-bootstrap'), $version, 'all');
    wp_enqueue_style('followmax-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '4.0', 'all');
    wp_enqueue_style('followmax-font', get_template_directory_uri() . "/assets/fonts/css/all.css", array(), '5.10.2', 'all');
}

add_action('wp_enqueue_scripts', 'followmax_register_styles');

function followmax_register_scripts() {
    wp_enqueue_script( 'followmax-jquery', get_template_directory_uri() . "/assets/js/jquery-slim.min.js", array(), '3.2.1', true);
    wp_enqueue_script( 'followmax-popper', get_template_directory_uri() . "/assets/js/popper.min.js", array(), '1.0', true);
    wp_enqueue_script( 'followmax-bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), '4.0', true);
    wp_enqueue_script( 'followmax-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'followmax_register_scripts');

?>