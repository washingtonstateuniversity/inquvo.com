<?php

namespace Inquvo\Navigation;

add_filter( 'wp_nav_menu_items', 'Inquvo\Navigation\back_to_top', 10, 2 );

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
