<?php get_header(); ?>

<section class="page page-search">
	<?php if ( have_posts() ) : ?>
	<h1 class="title">
		<?php printf( esc_html__( 'Search Results for: %s', 'main-theme' ), '<span>' . get_search_query() . '</span>' ); ?>
	</h1>
	<?php while ( have_posts() ) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_title( sprintf( '<h2 class="title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="post-meta">
					<?php echo get_the_date('n-j-Y'); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>

			<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
			<div class="post-content">
				<?php the_excerpt(); ?>
			</div>
		</div><!-- #post-<?php the_ID(); ?> -->

	<?php	endwhile;

	the_posts_navigation();

	else : ?>

	<h1 class="title">
		По вашему запросу ничего не найдено
	</h1>

	<?php endif; ?>

</section><!-- #main -->

<?php get_footer();
