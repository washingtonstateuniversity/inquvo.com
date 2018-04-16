<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="page-header">
			<h1><?php the_title(); ?></h1>
		</header>

		<div class="article-content">

			<span class="screen-reader-text">Posted on</span>

			<time class="entry-date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_attr( get_the_date() ); ?></time>

			<?php the_content(); ?>

		</div>

	</article>

	<?php endwhile; ?>

<?php get_footer();
