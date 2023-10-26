<?php get_header(); ?>
<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name): get_userdata(intval($author));
?>
<?php while ( have_posts() ) : the_post(); ?>

<section itemid="<?php echo get_permalink(); ?>" itemscope itemtype="http://schema.org/BlogPosting" class="single only-single-page page-top container">
		<meta itemprop="description" content="<?php the_excerpt(); ?>">
		<link itemprop="image" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
		<meta itemprop="author" content="<?php the_author(); ?>">
		<meta itemprop="datePublished" content="<?php the_time('c'); ?>">
		<meta itemprop="dateModified" content="<?php the_modified_date('c'); ?>">
	
	<div class="single-top">
		<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs blog-bread">', '</div>'); } ?>
		<h1 itemprop="headline" class="page-title"><?php the_title(); ?></h1>
		<?php if (get_field('subtitle')) { ?>
		<p class="subtitle"><?php the_field('subtitle'); ?></p>
		<?php } ?>
		<div class="author">
			<div class="row">
				<div class="avatar">
					<!-- <?php 
						$author_id = get_the_author_meta('user_email');
						echo get_avatar( $author_id, $size = 60, $default = '', $alt = '', $args = null ) 
					?> -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/favicon/icon-192.png" alt="Avatar">
				</div>
				<div itemprop="author" class="name">
					<p><?php the_author_meta('display_name'); ?></p>
					<span>Автор статьи</span>
				</div>
			</div>
			<!-- <?php the_author_posts_link() ?> -->
			<div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating" class="top-rat">
				<meta itemprop="bestRating" content="5">
				<meta itemprop="ratingValue" content="5">
				<div class="new-rating">
				
				</div>
				<div itemprop="ratingCount" class="votes">

				</div>
			</div>
			<div class="views">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M18.8192 13.3143C16.0873 7.39523 7.91302 7.39523 5.18115 13.3143C5.00757 13.6904 4.56198 13.8546 4.18589 13.681C3.8098 13.5074 3.64563 13.0618 3.81921 12.6857C7.08734 5.60476 16.913 5.60476 20.1812 12.6857C20.3547 13.0618 20.1906 13.5074 19.8145 13.681C19.4384 13.8546 18.9928 13.6904 18.8192 13.3143Z" fill="#FE7300"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M12 13.25C12.6904 13.25 13.25 13.8096 13.25 14.5C13.25 15.1904 12.6904 15.75 12 15.75C11.3096 15.75 10.75 15.1904 10.75 14.5C10.75 13.8096 11.3096 13.25 12 13.25ZM14.75 14.5C14.75 12.9812 13.5188 11.75 12 11.75C10.4812 11.75 9.25 12.9812 9.25 14.5C9.25 16.0188 10.4812 17.25 12 17.25C13.5188 17.25 14.75 16.0188 14.75 14.5Z" fill="#FE7300"/>
					</svg>
				</div>
				<div class="value">
					<?php setPostViews(get_the_ID()); ?>
					<?php echo getPostViews(get_the_ID()); ?>
				</div>
			</div>
			<div class="read-time">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 12.5C5.25 12.0858 5.58579 11.75 6 11.75L11.25 11.75L11.25 6.5C11.25 6.08579 11.5858 5.75 12 5.75C12.4142 5.75 12.75 6.08579 12.75 6.5L12.75 12.5C12.75 12.9142 12.4142 13.25 12 13.25L6 13.25C5.58579 13.25 5.25 12.9142 5.25 12.5Z" fill="#FE7300"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 12.5C2.75 17.6086 6.89137 21.75 12 21.75C17.1086 21.75 21.25 17.6086 21.25 12.5C21.25 7.39137 17.1086 3.25 12 3.25C6.89137 3.25 2.75 7.39137 2.75 12.5ZM12 23.25C6.06294 23.25 1.25 18.4371 1.25 12.5C1.25 6.56294 6.06294 1.75 12 1.75C17.9371 1.75 22.75 6.56294 22.75 12.5C22.75 18.4371 17.9371 23.25 12 23.25Z" fill="#FE7300"/>
					</svg>
				</div>
				<div class="time">
					~ <?php echo gp_read_time(); ?> мин.
				</div>
			</div>
			<div class="share content">
				<div class="icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M18 17.25C16.7574 17.25 15.75 18.2574 15.75 19.5C15.75 20.7426 16.7574 21.75 18 21.75C19.2426 21.75 20.25 20.7426 20.25 19.5C20.25 18.2574 19.2426 17.25 18 17.25ZM14.25 19.5C14.25 17.4289 15.9289 15.75 18 15.75C20.0711 15.75 21.75 17.4289 21.75 19.5C21.75 21.5711 20.0711 23.25 18 23.25C15.9289 23.25 14.25 21.5711 14.25 19.5Z" fill="#FF4848"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M18 3.25C16.7574 3.25 15.75 4.25736 15.75 5.5C15.75 6.74264 16.7574 7.75 18 7.75C19.2426 7.75 20.25 6.74264 20.25 5.5C20.25 4.25736 19.2426 3.25 18 3.25ZM14.25 5.5C14.25 3.42893 15.9289 1.75 18 1.75C20.0711 1.75 21.75 3.42893 21.75 5.5C21.75 7.57107 20.0711 9.25 18 9.25C15.9289 9.25 14.25 7.57107 14.25 5.5Z" fill="#FF4848"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M6 10.25C4.75736 10.25 3.75 11.2574 3.75 12.5C3.75 13.7426 4.75736 14.75 6 14.75C7.24264 14.75 8.25 13.7426 8.25 12.5C8.25 11.2574 7.24264 10.25 6 10.25ZM2.25 12.5C2.25 10.4289 3.92893 8.75 6 8.75C8.07107 8.75 9.75 10.4289 9.75 12.5C9.75 14.5711 8.07107 16.25 6 16.25C3.92893 16.25 2.25 14.5711 2.25 12.5Z" fill="#FF4848"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M8.12695 10.3488L15.127 6.34882L15.8712 7.65118L8.87116 11.6512L8.12695 10.3488Z" fill="#FF4848"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M15.127 18.6512L8.12695 14.6512L8.87116 13.3488L15.8712 17.3488L15.127 18.6512Z" fill="#FF4848"/>
						</svg>
				</div>
				<p>
					Поделиться
				</p>
				<div class="bar">
					
				</div>
			</div>
		</div>
		<div class="thumb">
			<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" >
		</div>
	</div>

	<div class="single-nav">
		<b>Содержание статьи</b>
		<div class="single-nav-wrap">

		</div>
	</div>

	<div class="content">
		<?php the_content(); ?>
	</div>
	<div  class="comments">
		<?php comments_template(); ?>
	</div>
	
</section>


<?php endwhile; ?>




<?php get_footer();