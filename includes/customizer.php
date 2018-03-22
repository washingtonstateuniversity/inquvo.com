<?php

namespace Inquvo\Customizer;

remove_action( 'customize_controls_enqueue_scripts', 'twentyseventeen_panels_js' );
remove_action( 'customize_preview_init', 'twentyseventeen_customize_preview_js' );

add_action( 'customize_register', 'Inquvo\Customizer\customize_register', 11 );

/**
 * Removes unneeded Customizer options.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function customize_register( $wp_customize ) {
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'custom_css' );
	$wp_customize->remove_section( 'theme_options' );
	$wp_customize->remove_setting( 'site_icon' );
	$wp_customize->remove_control( 'site_icon' );
	$wp_customize->remove_setting( 'blogdescription' );
	$wp_customize->remove_control( 'blogdescription' );
}
