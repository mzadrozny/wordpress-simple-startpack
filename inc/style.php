<?php

function main_styles(){
    // Adding stylesheets

    // Main stylesheets
    wp_register_style('style', get_template_directory_uri() . 'style/main.css', array(), '1.0' );
    
    // Normalize stylesheets
    wp_register_style('normalize', get_template_directory_uri() . 'lib/css/normalize.min.css', array(), '1.0' );
    
    // Enqueue the styles
    wp_enqueue_style('style');



    // Deregister old jquery
    wp_deregister_script('jquery');
    
    // Register new jquery
    wp_register_script('jquery', get_template_directory_uri() . '/lib/js/jquery/jquery-3.3.1.min.js', array(), '3.3.1', true);
    
    // register main script
    wp_register_script('script', get_template_directory_uri() . '/scripts/main.js', array(), '1.0.0', true);
    
    
    //Enqueue the JavaScripts
	wp_enqueue_script('jquery');
    wp_enqueue_script('script');
    
};

add_action('wp_enqueue_scripts', 'main_styles', 999);