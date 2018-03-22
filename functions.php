<?php

add_action( 'after_setup_theme', 'inquvo_setup', 11 );
add_action( 'wp_enqueue_scripts', 'inquvo_styles', 11 );

/**
 * Provides a theme version for use in cache busting.
 *
 * @since 0.0.1
 *
 * @return string
 */
function inquvo_theme_version() {
	return '0.0.1';
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

	remove_action( 'widgets_init', 'twentyseventeen_widgets_init' );
}

/**
 * Enqueues styles and scripts.
 *
 * @since 0.0.1
 */
function inquvo_styles() {
	// Dequeue styles from Twenty Seventeen.
	wp_dequeue_style( 'twentyseventeen-fonts' );
	wp_dequeue_style( 'twentyseventeen-style' );
	wp_dequeue_style( 'twentyseventeen-ie8' );

	// Enqueue InQuvo styles with theme version.
	wp_enqueue_style( 'inquvo-style', get_stylesheet_directory_uri() . '/style.css', array(), inquvo_theme_version() );
}
