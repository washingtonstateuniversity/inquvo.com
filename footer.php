	</div><!-- #content -->

	<footer id="site-footer">

		<div>

			<nav>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class' => '',
					'depth' => 1,
				) );
				?>

			</nav>

			<p class="button accent hack-a-thon"><a href="#">Hack-a-thon﻿</a></p>

		</div>

		<div>

			<a href="#" class="logo">
				<img height="20" width="90" alt="InQuvo logo">
			</a>

			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> InQuvo. All Rights Reserved.</p>

			<?php if ( has_nav_menu( 'social' ) ) { ?>

			<nav class="channels" role="navigation" aria-label="<?php esc_html_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">

				<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'menu_class' => '',
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
