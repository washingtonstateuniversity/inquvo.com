<?php get_header(); ?>

	<div class="layout-sidebar-right">

		<div id="primary">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="article-header">

					<span class="screen-reader-text">Posted on</span>

					<time class="entry-date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_attr( get_the_date() ); ?></time>

					<h1><?php the_title(); ?></h1>

				</header>

				<?php the_content(); ?>

			</article>

			<?php endwhile; ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer();
