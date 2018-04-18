<?php

/*

CUSTOM POST TEMPLATE

function main_Custom_Post() {
	$Custom_Post_labels = array(
		'name'               => _x( 'Custom_Post', 'domain_name' ),
		'singular_name'      => _x( 'Custom_Post', 'post type singular name', 'domain_name' ),
		'menu_name'          => _x( 'Custom_Post', 'admin menu', 'domain_name' ),
		'name_admin_bar'     => _x( 'Custom_Post', 'add new on admin bar', 'domain_name' ),
		'add_new'            => _x( 'Dodaj nową', 'book', 'domain_name' ),
		'add_new_item'       => __( 'Dodaj nowy Custom_Post', 'domain_name' ),
		'edit_item'          => __( 'Edytuj Custom_Post', 'domain_name' ),
		'view_item'          => __( 'Zobacz Custom_Post', 'domain_name' ),
		'all_items'          => __( 'Wszystkie Custom_Post', 'domain_name' ),
		'search_items'       => __( 'Znajdź Custom_Post', 'domain_name' ),
		'parent_item_colon'  => __( 'Element rodzic Custom_Post:', 'domain_name' ),
		'not_found'          => __( 'Nie znaleziono Custom_Post.', 'domain_name' ),
		'not_found_in_trash' => __( 'Nie znaleziono Custom_Post w koszu.', 'domain_name' )
	);

	$args = array(
		'labels'             => $Custom_Post_labels,
    	'description'        => __( 'Description', 'domain_name' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 7,
		'supports'           => array('title', 'editor', 'thumbnail'),
    	'taxonomies'          => array( 'category' ),
	);

	register_post_type('main_Custom_Post', $args );
}

add_action( 'init', 'main_Custom_Post' );
*/