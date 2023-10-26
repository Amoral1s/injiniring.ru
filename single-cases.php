<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="single only-single-case page-top container">
	<div class="single-top">
		<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs case-bread">', '</div>'); } ?>
		<h1 itemprop="headline" class="page-title"><?php the_title(); ?></h1>
		<?php if (get_field('subtitle')) { ?>
		<p class="subtitle"><?php the_field('subtitle'); ?></p>
		<?php } ?>
		<div class="thumb">
			<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" >
		</div>
	</div>
	<?php if (get_field('about')) { ?>
	<h2 class="title">О проекте</h2>
	<div class="case-about content">
		<?php the_field('about'); ?>
	</div>
	<?php } ?>
	<?php if (get_field('proczess_raboty')) { ?>
	<div class="case-process">
		<h2 class="title">Процесс работы</h2>
		<div class="wrap">
			<?php if(have_rows('proczess_raboty')) : while(have_rows('proczess_raboty')) : the_row(); ?>
			<div class="item">
				<?php if (get_sub_field('foto')) { ?>
				<img src="<?php the_sub_field('foto'); ?>" alt="<?php the_sub_field('zagolovok'); ?>">
				<?php } ?>
				<b><?php the_sub_field('zagolovok'); ?></b>
				<p><?php the_sub_field('tekst'); ?></p>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<?php } ?>

	<?php if (get_field('proczess_raboty')) { ?>
	<div class="case-process-noimg">
		<h2 class="title">Процесс работы</h2>
		<div class="wrap">
			<?php $proc_i = 1; if(have_rows('proczess_raboty_bez_foto')) : while(have_rows('proczess_raboty_bez_foto')) : the_row(); ?>
			<div class="item">
				<div class="num"><?php echo $proc_i; $proc_i++; ?></div>
				<b><?php the_sub_field('zagolovok'); ?></b>
				<p><?php the_sub_field('tekst'); ?></p>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<?php } ?>

	<?php if (get_field('kontent')) { ?>
	<div class="case-end">
		<h2 class="title">Заключение</h2>
		<div class="content">
			<?php the_field('kontent'); ?>
		</div>
	</div>
	<?php } ?>

	<?php if (get_field('galereya')) { ?>
	<div class="case-gallery">
		<h2 class="title">Галерея</h2>
		<div class="case-gallery-wrap">
			<?php if (get_field('galereya')) {
				$images = get_field('galereya');
				if( $images ): ?>
					<?php foreach( $images as $image ): ?>
						<a class="item" href="<?php echo esc_url($image['url']); ?>">
								<img src="<?php echo esc_url($image['url']); ?>" 
										title="<?php echo esc_attr($image['title']); ?>" 
										alt="<?php echo esc_attr($image['alt']); ?>" 
								/>
						</a>
			<?php endforeach; endif; } ?>
		</div>
	</div>
	<?php } ?>
</section>

<?php endwhile; ?>

<section class="project bg-dark">
  <div class="container project-wrap">
    <div class="left">
      <b>Есть проект? Давайте обсудим</b>
      <p>
        Инженеры компании с радостью ответят на ваши вопросы и произведут расчёт стоимости услуг и подготовят индивидуальное коммерческое предложение
      </p>
      <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="b87fa71" title="Есть проект? Давайте обсудим"]'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();