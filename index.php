<?php get_header(); ?>

	<?php
	$featured_image = false;

	if ( is_home() && get_option( 'page_for_posts' ) ) {
		$posts_page_id = get_option( 'page_for_posts' );

		if ( has_post_thumbnail( $posts_page_id ) ) {
			$featured_image = get_the_post_thumbnail_url( $posts_page_id, 'full' );
		}
	}
	?>

	<header class="article-header"<?php if ( $featured_image ) { ?> style="background-image:url(<?php echo esc_url( $featured_image ); ?> );"<?php } ?>>
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
