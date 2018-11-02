<?php 
add_action('wp_enqueue_scripts', 'wpcourse_assets');

function wpcourse_assets(){
    wp_enqueue_style('my-amrit', get_stylesheet_uri());
    wp_enqueue_style('my-amrit-app', get_template_directory_uri() .'/assets/css/blog.css');
    wp_enqueue_script('my-amrit-holder', get_template_directory_uri(). '/assets/js/holder.min.js', array(), '2.9.4', true);
    
}