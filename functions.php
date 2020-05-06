<?php

function overseas_css() {
    wp_enqueue_style( 'montserrat', get_stylesheet_uri('//fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic|Montserrat:400,700'));
    wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/css/all.min.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'default_css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'overseas_css');
