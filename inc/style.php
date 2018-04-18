<?php

function main_styles(){
    // Adding stylesheets

    // Main stylesheets
    wp_register_style('style', get_template_directory_uri() . '/style/style.css', array(), '1.0' );
    
    // Other stylesheets

    // Enqueue the styles

    wp_enqueue_style('style');

    
    // Deregister old jquery
    wp_deregister_script('jquery');
    
    // Register new jquery
    wp_register_script('jquery', get_template_directory_uri() . '/lib/js/jquery/jquery-3.3.1.min.js', array(), '3.3.1', true);
    
    //Other js scripts
    wp_register_script('fontawesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', array(), '5.0.6', true);
    

    // register main script
    wp_register_script('script', get_template_directory_uri() . '/scripts/main.js', array(), '1.0.0', true);
    
    
    //Enqueue the JavaScripts ext lib
	wp_enqueue_script('jquery');
    wp_enqueue_script('fontawesome');
    
    //Enqueue the Main Jasvascript file
    wp_enqueue_script('script');

    /*

    Send variables from PHP to JS

    $dataToBePassed = array(
        'leftArrow'  => get_template_directory_uri()."/img/arrow__left.png",
        'rightArrow' => get_template_directory_uri()."/img/arrow__right.png"
    );

    wp_localize_script( 'script', 'php_vars', $dataToBePassed);

    */
};


add_action('wp_enqueue_scripts', 'main_styles', 999);


/*

Add google font

function add_google_fonts() {
    wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;subset=latin-ext' );
  }
  add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


  */