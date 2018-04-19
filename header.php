<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="site-header">

		<a href="<?php echo esc_url( home_url() ); ?>" class="logo" aria-label="Inquvo home">
			<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" class="dots">
				<use xlink:href="#icon-dots" />
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" width="90" height="20" viewBox="0 0 229 50">
				<use xlink:href="#logo-inuvo" fill="#404040" />
				<use xlink:href="#logo-q" fill="#404040" class="logo-q" />
			</svg>
		</a>

		<?php if ( has_nav_menu( 'top' ) ) { ?>

		<nav id="site-navigation" role="navigation" aria-label="<?php esc_html_e( 'Top Menu', 'twentyseventeen' ); ?>">

			<button id="js-menu-toggle" aria-controls="top-menu" aria-expanded="false">
				<span class="screen-reader-text">Toggle site menu</span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true">
					<g class="open">
						<path stroke="#404040" stroke-width="4" stroke-dasharray="32" d="M0 4h32"/>
						<path stroke="#404040" stroke-width="4" stroke-dasharray="32" d="M0 16h32"/>
						<path stroke="#404040" stroke-width="4" stroke-dasharray="32" d="M0 28h32"/>
					</g>
					<g class="close">
						<path stroke="#ca1237" stroke-width="4" stroke-dasharray="36" stroke-dashoffset="36" d="M3.436 3.436l25.128 25.128"/>
						<path stroke="#ca1237" stroke-width="4" stroke-dasharray="36" stroke-dashoffset="36" d="M3.436 28.564L28.564 3.436"/>
					</g>
				</svg>
			</button>

			<?php
			wp_nav_menu( array(
				'theme_location' => 'top',
				'menu_id' => 'top-menu',
				'menu_class' => '',
				'container' => '',
				'fallback_cb' => false,
				'depth' => 1,
			) );
			?>

		</nav>

		<?php } ?>

	</header>

	<main id="content">

		<?php
		if ( ! is_single() ) {
			INQUVO\Navigation\get_feature_link();
		}
		?>
