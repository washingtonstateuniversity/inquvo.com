<?php

add_action( 'after_setup_theme', 'inquvo_setup', 11 );

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
