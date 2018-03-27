<?php



function simple_setup(){

    // Add thumbnails to posts/sites
    add_theme_support('post-thumbnails');

    // Few image size functions
    //( string $name, int $width, int $height, bool|array $crop = false )
    add_image_size('small-avatar', 64, 64, false);
    add_image_size('fb-avatar', 170, 170, false);
    add_image_size('fb-avatar-circle', 720, 720, false);
    add_image_size( 'hero', 1060, 550, array( 'center', 'center' ) );
    add_image_size( 'hero-2x', 2120, 1100, array( 'center', 'center' ) );
}

add_action('after_setup_theme', 'simple_setup');


//Add Menus

    function main_menu(){
        register_nav_menu(array(
            'main-menu' => __('Header Menu', 'simple_theme')
        ));
    }

	add_action('init', 'main_menu');