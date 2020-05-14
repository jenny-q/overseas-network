<?php

function overseas_css() {
    wp_register_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic|Montserrat:400,700' );
    wp_enqueue_style('montserrat');
    wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/css/all.min.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style( 'datatablecss', 'https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css' );
    wp_enqueue_style('datatablecss');
    wp_enqueue_style( 'default_css', get_stylesheet_uri());


    wp_enqueue_script( 'jquery', get_theme_file_uri('/js/jquery-3.4.1.slim.min.js'), NULL, '3.4.1', true );
    wp_enqueue_script('popper', get_theme_file_uri('/js/popper.min.js'), NULL, '1.1', true );
    wp_enqueue_script('bootstrapjs', get_theme_file_uri('/js/bootstrap.min.js'), NULL, '4.4.1' , true );
    wp_register_script('datatablejs', 'https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js', NULL, '1.10.21' , true );
    wp_enqueue_script('datatablejs');
    wp_enqueue_script('overseasjs', get_theme_file_uri('/js/overseas.js'), NULL, '4.4.1' , true );
}
add_action('wp_enqueue_scripts', 'overseas_css');

function overseas_features() {
    register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
    add_theme_support( 'title-tag');
    add_theme_support( 'post-thumbnails');
}
add_action( 'after_setup_theme', 'overseas_features' );

//all custom post types
function overseas_post_types() {
    register_post_type( 'home', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-admin-home',
        'labels' => array(
            'name' => 'Home',
            'add_new_item' => 'Add New Home Section',
            'edit_item' => 'Edit Home',
            'all_items' => 'All Home'
        )
    ));
    register_post_type( 'Seen_In', array(
        'supports' => array('title'),
        'public' => true,
        'menu_icon' => 'dashicons-text-page',
        'labels' => array(
            'name' => 'As Seen In',
            'add_new_item' => 'Add New Article Link',
            'edit_item' => 'Edit Article Link',
            'all_items' => 'All Article Links',
            'singular_name' => 'Seen In'
        )
    ));
    register_post_type( 'event_cases', array(
        'supports' => array('title'),
        'taxonomies'  => array( 'category' ),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => array(
            'name' => 'Event Cases',
            'add_new_item' => 'Add New Event Case',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        )
    ));
    register_post_type( 'event_logos', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => array(
            'name' => 'Event Logos',
            'add_new_item' => 'Add New Event Logo',
            'edit_item' => 'Edit Event Logo',
            'all_items' => 'All Events Logos',
            'singular_name' => 'Event Logo'
        )
    ));
    register_post_type( 'travel_sections', array(
        'supports' => array('title'),
        'public' => true,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'labels' => array(
            'name' => 'Travel Sections',
            'add_new_item' => 'Add New Section',
            'edit_item' => 'Edit Section'
        )
    ));
    register_post_type( 'carefree_hotels', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'public' => true,
        'menu_icon' => 'dashicons-building',
        'labels' => array(
            'name' => 'Carefree Hotels',
            'add_new_item' => 'Add New Featured Hotel',
            'edit_item' => 'Edit Hotel',
            'all_items' => 'All Featured Hotels',
            'singular_name' => 'Carefree Hotel'
        )
    ));
    register_post_type( 'carefree_experiences', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'public' => true,
        'menu_icon' => 'dashicons-palmtree',
        'labels' => array(
            'name' => 'Carefree Experiences',
            'add_new_item' => 'Add New Experience',
            'edit_item' => 'Edit Experience',
            'all_items' => 'All Featured Experiences',
            'singular_name' => 'Carefree Experience'
        )
    ));
    register_post_type( 'carefree_support', array(
        'supports' => array('title'),
        'public' => true,
        'menu_icon' => 'dashicons-admin-page',
        'labels' => array(
            'name' => 'Carefree Support',
            'add_new_item' => 'Add New Section',
            'edit_item' => 'Edit Section'
        )
    ));
    register_post_type( 'carefree_supt_intl', array(
        'supports' => array('title'),
        'public' => true,
        'menu_icon' => 'dashicons-admin-page',
        'labels' => array(
            'name' => 'Carefree Intl',
            'add_new_item' => 'Add New Section',
            'edit_item' => 'Edit Section'
        )
    ));
    register_post_type( 'heroes', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'public' => true,
        'menu_icon' => 'dashicons-smiley',
        'labels' => array(
            'name' => 'Heros',
            'add_new_item' => 'Add New Hero',
            'edit_item' => 'Edit Hero',
            'all_items' => 'All Heroes',
            'singular_name' => 'Hero'
        )
    ));
    register_post_type( 'custom_footer', array(
        'supports' => array('title'),
        'public' => true,
        'menu_icon' => 'dashicons-media-code',
        'labels' => array(
            'name' => 'Footer',
            'add_new_item' => 'Add New Footer',
            'edit_item' => 'Edit Footer'
        )
    ));
}
add_action( 'init', 'overseas_post_types');