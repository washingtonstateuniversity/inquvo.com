<?php

require_once __DIR__ . '/includes/customizer.php';
require_once __DIR__ . '/includes/disable-emojis.php';
require_once __DIR__ . '/includes/svg-functions.php';
require_once __DIR__ . '/includes/navigation.php';

add_action( 'after_setup_theme', 'inquvo_setup', 11 );
add_action( 'wp_enqueue_scripts', 'inquvo_scripts', 11 );
add_filter( 'body_class', 'inquvo_posts_page_body_class' );

remove_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );

/**
 * Provides a theme version for use in cache busting.
 *
 * @since 0.0.1
 *
 * @return string
 */
function inquvo_theme_version() {
	return '0.0.7';
}

/**
 * Removes support for unneeded theme features.
 *
 * @since 0.0.1
 */
function inquvo_setup() {
	remove_theme_support( 'automatic-feed-links' );
	remove_theme_support( 'custom-background' );
	remove_theme_support( 'custom-header' );
	remove_theme_support( 'post-formats' );

	remove_image_size( 'twentyseventeen-featured-image' );
	remove_image_size( 'twentyseventeen-thumbnail-avatar' );
}

/**
 * Enqueues styles and scripts.
 *
 * @since 0.0.1
 */
function inquvo_scripts() {
	// Dequeue styles from Twenty Seventeen.
	wp_dequeue_style( 'twentyseventeen-fonts' );
	wp_dequeue_style( 'twentyseventeen-style' );
	wp_dequeue_style( 'twentyseventeen-ie8' );

	// Enqueue the Montserrat font family stylesheet.
	wp_enqueue_style( 'montserrat', '//fonts.googleapis.com/css?family=Montserrat:200,200i,400,400i,500,600,700' );

	// Enqueue Inquvo styles with theme version.
	wp_enqueue_style( 'inquvo-style', get_stylesheet_directory_uri() . '/style.css', array(), inquvo_theme_version() );

	// Enqueue Inquvo scripts with theme version.
	wp_enqueue_script( 'inquvo-scripts', get_stylesheet_directory_uri() . '/js/script.js', array(), inquvo_theme_version(), true );
}

/**
 * Filter the body classes for the posts page.
 *
 * @since 0.0.5
 *
 * @param array $classes
 *
 * @return array
 */
function inquvo_posts_page_body_class( $classes ) {
	if ( is_home() && get_option( 'page_for_posts' ) ) {
		$posts_page_id = get_option( 'page_for_posts' );

		if ( has_post_thumbnail( $posts_page_id ) ) {
			$classes[] = 'has-post-thumbnail';
		}
	}

	return $classes;
}
