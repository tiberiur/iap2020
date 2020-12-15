<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function iap2020_theme_support() {

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	$logo_width  = 182;
	$logo_height = 56;

	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);
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