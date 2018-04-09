<?php get_header(); ?>

	<header class="archive-header">
		<?php
		$title = '';

		if ( is_home() ) {
			$title = single_post_title( '', false );
		} elseif ( is_author() ) {
			$title = get_the_author();
		} elseif ( is_tag() ) {
			$title = single_tag_title( '', false );
		} elseif ( is_tax() ) {
			$title = single_term_title( '', false );
		}
		?>
		<h1><?php echo esc_html( $title ); ?></h1>
	</header>

	<div class="archive-columns">

		<div id="primary">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

				<?php the_excerpt(); ?>

			</article>

			<?php endwhile; ?>

			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer();
