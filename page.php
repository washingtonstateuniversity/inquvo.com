<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="page-header">
			<?php if ( has_post_thumbnail() ) { ?>
			<div class="header-image" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>);"></div>
			<?php } ?>
			<h1><?php the_title(); ?></h1>
		</header>

		<div class="article-content">
			<?php the_content(); ?>
		</div>

	</article>

	<?php endwhile; ?>

<?php get_footer();
