<?php

function followmax_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('followmax-style', get_template_directory_uri() . "/assets/css/style.css", array('followmax-bootstrap'), $version, 'all');
    wp_enqueue_style('followmax-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '4.0', 'all');
    wp_enqueue_style('followmax-font', get_template_directory_uri() . "/assets/fonts/css/all.css", array(), '5.10.2', 'all');
}

add_action('wp_enqueue_scripts', 'followmax_register_styles');

?>