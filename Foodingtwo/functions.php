<?php

function enqueue_Foodingtwo_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'app-style', get_stylesheet_directory_uri().'/assets/css/app.css' );
}
    add_action( 'wp_enqueue_scripts', 'enqueue_Foodingtwo_theme_styles');
?>