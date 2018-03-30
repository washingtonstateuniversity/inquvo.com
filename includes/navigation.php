<?php

namespace Inquvo\Navigation;

add_action( 'init', 'Inquvo\Navigation\register_footer_menu' );
add_filter( 'wp_nav_menu_items', 'Inquvo\Navigation\back_to_top', 10, 2 );

/**
 * Registers a navigation menu for the footer.
 *
 * @since 0.0.1
 */
function register_footer_menu() {
	register_nav_menu( 'footer', 'Footer' );
}

/**
 * Appends a "back to top" link to the social menu.
 *
 * @since 0.0.1
 *
 * @param string $items
 * @param array  $args
 *
 * @return string
 */
function back_to_top( $items, $args ) {
	if ( 'social' !== $args->theme_location ) {
		return $items;
	}

	$items .= '<li class="back-to-top">
		<a href="#">
			<span class="screen-reader-text">Go back to the top of this page</span>
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
				<use xlink:href="#icon-arrow-up" fill="#fff" />
			</svg>
		</a>
	</li>';

	return $items;
}
