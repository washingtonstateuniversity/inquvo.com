<?php

namespace Inquvo\SVG_Functions;

add_action( 'init', 'Inquvo\SVG_Functions\remove_twentyseventeen_icons' );
add_action( 'wp_footer', 'Inquvo\SVG_Functions\include_definitions', 9999 );

/**
 * Remove the SVG definitions added by Twenty Seventeen.
 *
 * @since 0.0.8
 */
function remove_twentyseventeen_icons() {
	remove_action( 'wp_footer', 'twentyseventeen_include_svg_icons', 9999 );
}
/**
 * Adds SVG definitions to the footer.
 *
 * @since 0.0.1
 */
function include_definitions() {
	?>
	<svg id="svg-symbols" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<defs>
			<symbol id="logo-inuvo">
				<path d="M.09 1.89h7.35v42.15H.09zM20.4 44h-7.27V22.29c0-11.47 8.51-20.81 19-20.81s19.1 9.33 19.1 20.81V44H44V22c0-7.28-5.29-13.21-11.8-13.21S20.42 14.71 20.42 22zM134.37 1.6h7.28v21.7c0 11.48-8.51 20.82-19 20.82s-19.09-9.33-19.1-20.81V1.61h7.28v22c0 7.28 5.3 13.21 11.8 13.21s11.74-5.93 11.74-13.22zM151.36 1.59h-7.79l18.14 42.11 10.03-.01 18.12-42.1h-7.72l-15.38 34.96-15.4-34.96zM208.09 1c-11.58 0-21 9.67-21 21.54s9.43 21.53 21 21.53S229 34.42 229 22.54 219.63 1 208.09 1zm13.73 21.53a13.77 13.77 0 1 1-27.53 0 13.77 13.77 0 1 1 27.53 0z"/>
			</symbol>
			<symbol id="logo-q">
				<path d="M94 39.11a23.58 23.58 0 0 0 6-15.83C100 10.44 89.89 0 77.42 0s-22.71 10.45-22.7 23.29 10.18 23.28 22.7 23.27a21.94 21.94 0 0 0 10.84-2.85c1.31 1.19 8.23 7 16.76 6.22h.32a18.86 18.86 0 0 0 8.89-3.33 18.71 18.71 0 0 1-7.23-4.26c-6.65 2.37-13-3.23-13-3.23zm-16.57-.58A15.11 15.11 0 0 1 62.5 23.28a14.88 14.88 0 1 1 29.76 0 15.06 15.06 0 0 1-14.84 15.25z"/>
			</symbol>

			<symbol id="icon-dots" viewBox="0 0 17 16">
				<circle fill="#ca1237" r="3.375" cy="3.375" cx="5.3125"/>
				<circle fill="#68737a" r="3.375" cy="12.59371" cx="5.3125"/>
				<circle fill="#3d8a93" r="3.375" cy="7.99998" cx="13.31246"/>
			</symbol>

			<symbol id="icon-arrow-up" viewBox="0 0 26 26">
				<path d="M24.2 17.6l-1.9 2-9.4-9.4-9.3 9.5-1.9-2L12.9 6.3l11.3 11.3z"/>
			</svg>
		</defs>
	</svg>
	<?php
}
