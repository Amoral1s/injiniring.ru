<?php if (get_field('ban_title', 'options')) { ?>
<section class="banner plane-banner container">
  <div class="banner-wrap">
    <img src="<?php the_field('ban_img', 'options'); ?>" alt="banner">
    <div class="banner-wrap-text">
      <h2 class="title">
        <?php the_field('ban_title', 'options'); ?>
      </h2>
      <p class="subtitle">
        <?php the_field('ban_subtitle', 'options'); ?>
      </p>
    </div>
    <div class="button reserved">
      Забронировать
    </div>
  </div>
</section>
<?php } ?>