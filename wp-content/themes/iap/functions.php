<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function iap2020_theme_support() {
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size(304, 176);
}

add_action( 'after_setup_theme', 'iap2020_theme_support' );

/**
 * Register and Enqueue Styles.
 */
function iap2020_register_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'iap2020-google-fonts', 'https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap', false ); 
}

add_action( 'wp_enqueue_scripts', 'iap2020_register_styles' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function iap2020_menus() {

	$locations = array(
		'primary'  => __( 'Header navigation', 'iap2020' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'iap2020_menus' );