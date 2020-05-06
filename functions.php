<?php

function overseas_css() {
    wp_enqueue_style( 'montserrat', get_stylesheet_uri('//fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic|Montserrat:400,700'));
    wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/css/all.min.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'default_css', get_stylesheet_uri());

    wp_enqueue_script( 'jquery', get_theme_file_uri('/js/jquery-3.4.1.slim.min.js'), NULL, '3.4.1', true );
    wp_enqueue_script('popper', get_theme_file_uri('/js/popper.min.js'), NULL, '1.1', true );
    wp_enqueue_script('bootstrapjs', get_theme_file_uri('/js/bootstrap.min.js'), NULL, '4.4.1' , true );
}
add_action('wp_enqueue_scripts', 'overseas_css');

function overseas_features() {
    register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'overseas_features' );
