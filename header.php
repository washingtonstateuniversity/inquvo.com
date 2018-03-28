<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="site-header">

		<!-- logo -->

		<?php if ( has_nav_menu( 'top' ) ) { ?>

		<nav id="site-navigation" role="navigation" aria-label="<?php esc_html_e( 'Top Menu', 'twentyseventeen' ); ?>">

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
