<?php get_header(); ?>

<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

<section class="page page-top">
	<div class="single container">
		<?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); }
    ?>
		<h1 class="page-title" style="text-align: left">
			<?php the_title() ?>
		</h1>
		<div class="single-content content">
			<?php the_content() ?>
		</div>
	</div>
	<!-- /.single container -->
</section>

<?php endwhile; endif; ?>

<?php get_footer();