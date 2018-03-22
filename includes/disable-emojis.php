<?php

namespace Inquvo\Disable_Emojis;

// Most of this code is originally from the GPL licensed Disable Emojis plugin.
// https://wordpress.org/plugins/disable-emojis/.

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_filter( 'emoji_svg_url', 'Inquvo\Disable_Emojis\filter_emoji_svg_url' );
add_filter( 'wp_resource_hints', 'Inquvo\Disable_Emojis\remove_emoji_dns_prefetch', 10, 2 );

/**
 * Returns a custom emoji URL so its DNS prefetch can be reliably removed.
 *
 * @since 0.0.1
 *
 * @param string $url Default emoji base URL for svg images.
 *
 * @return string Custom emoji base URL.
 */
function filter_emoji_svg_url( $url ) {
	return 's.w.org';
}

/**
 * Removes the s.w.org DNS prefetch.
 *
 * @since 0.0.1
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 *
 * @return array Difference between the two arrays.
 */
function remove_emoji_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		$urls = array_diff( $urls, array( 's.w.org' ) );
	}

	return $urls;
}
