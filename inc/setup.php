<?php

//Add Menu

function main_menus(){
    register_nav_menus(array(
        // You can have one main menu, or special menu for mobile 
        'main-menu' => __('Main Menu', 'simple-theme'),
        'mobile-menu' => __('Mobile Menu', 'simple-theme')
    ));
}

add_action('init', 'main_menus');

function themename_custom_logo_setup() {
    $defaults = array(
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();
    
}

function taxonomy_context($file) {

    global $wp_query;

    $object = $wp_query->get_queried_object();

    $templates = array(
        'template-taxonomy/' . $object->taxonomy . '.php',
        'template-taxonomy/' . $object->term_id . '.php',
        'template-taxonomy/taxonomy.php',
        'taxonomy.php',
        'index.php'
    );

    $file = locate_template($templates);

    return $file;
}

add_filter('taxonomy_template', 'taxonomy_context');

function single_context($file) {

    global $wp_query;

    $object = $wp_query->get_queried_object();

    $templates = array(
        'template-parts/single/' . $object->post_type . '.php',
        'template-parts/single/' . $object->ID . '.php',
        'template-parts/single/' . $object->post_name . '.php',
        'single.php',
        'index.php'
    );

    $file = locate_template($templates);
    return $file;
}

add_filter('single_template', 'single_context');

add_theme_support( 'post-thumbnails' );
