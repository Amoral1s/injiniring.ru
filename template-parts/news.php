<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Main_Theme
 */

?>


<a class="archive-item" href="<?php the_permalink(  ) ?>">
  <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
  <div class="meta">
    #<?php echo get_queried_object()->name; ?>
  </div>
  <h2>
    <?php the_title() ?>
  </h2>
  <p>
    <?php the_excerpt(  )?>
  </p>
  <div class="date">
  <?php echo get_the_date('d.m.y'); ?>
  </div>
</a>