<?php

namespace Inquvo\Navigation;

add_action( 'init', 'Inquvo\Navigation\register_menus' );
add_filter( 'wp_nav_menu_items', 'Inquvo\Navigation\back_to_top', 10, 2 );

/**
 * Registers additional navigation menus.
 *
 * @since 0.0.1
 */
function register_menus() {
	register_nav_menus( array(
		'footer' => 'Footer',
		'feature' => 'Feature',
	) );
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

/**
 * Outputs the first item from the feature menu location in custom markup.
 *
 * @since 0.0.2
 */
function get_feature_link() {
	if ( ! isset( get_nav_menu_locations()['feature'] ) ) {
		return;
	}

	$feature_menu = get_term( get_nav_menu_locations()['feature'], 'nav_menu' )->term_id;

	if ( ! $feature_menu ) {
		return;
	}

	$menu_items = wp_get_nav_menu_items( $feature_menu );

	if ( ! $menu_items ) {
		return;
	}

	?>
	<p class="button crimson feature-link">
		<a href="<?php echo esc_url( $menu_items[0]->url ); ?>"><?php echo esc_html( $menu_items[0]->title ); ?></a>
	</p>
	<?php
}
