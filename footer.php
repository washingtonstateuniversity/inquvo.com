	</main><!-- #content -->

	<footer id="site-footer">

		<div>

			<nav class="footer-menu">

				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class' => '',
					'container' => '',
					'fallback_cb' => false,
					'depth' => 2,
				) );
				?>

			</nav>

			<?php INQUVO\Navigation\get_feature_link(); ?>

		</div>

		<div>

			<a href="<?php echo esc_url( home_url() ); ?>" class="logo" aria-label="Inquvo">
				<svg xmlns="http://www.w3.org/2000/svg" width="90" height="20" viewBox="0 0 229 50">
					<use xlink:href="#logo-inuvo" fill="#fff" />
					<use xlink:href="#logo-q" fill="#54cad2" />
				</svg>
			</a>

			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Inquvo. All Rights Reserved.</p>

			<?php if ( has_nav_menu( 'social' ) ) { ?>

			<nav class="channels" role="navigation" aria-label="<?php esc_html_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">

				<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'menu_class' => '',
					'container' => '',
					'fallback_cb' => false,
					'depth' => 1,
					'link_before' => '<span class="screen-reader-text">',
					'link_after' => '</span>',
				) );
				?>

			</nav>

			<?php } ?>

		</div>

	</footer>

	<?php wp_footer(); ?>

</body>
</html>
