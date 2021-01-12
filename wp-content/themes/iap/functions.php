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

	/*
	 * Let WordPress manage the document title.
	 * This theme does not use a hard-coded <title> tag in the document head,
	 * WordPress will provide it for us.
	 */
	add_theme_support( 'title-tag' );
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

/**
 * Register widget area.
 *
 * @since 1.0.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function iap_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'iap' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'iap_widgets_init' );

// Remove widget title
add_filter( 'widget_title', 'remove_widget_title' );
function remove_widget_title( $widget_title ) {
    return;
}