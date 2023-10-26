<?php
/**
 Template Name: Вакансии
*/

get_header();
?>

<section class="vacancy page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="vacancy-wrap">
    <?php if(have_rows('vakansii')) : while(have_rows('vakansii')) : the_row();  ?>
    <div class="item">
      <h3><?php the_sub_field('nazvanie_vakansii'); ?></h3>
      <div class="content">
        <?php the_sub_field('opisanie_vakansii'); ?>
      </div>
      <div class="row">
        <?php if (get_sub_field('obyazannosti')) { ?>
        <div class="row-item">
          <b>Обязанности</b>
          <?php if(have_rows('obyazannosti')) : while(have_rows('obyazannosti')) : the_row();  ?>
          <div class="line"><?php the_sub_field('obyazannost'); ?></div>
          <?php endwhile; endif; ?>
        </div>
        <?php } ?>
        <?php if (get_sub_field('trebovaniya')) { ?>
        <div class="row-item">
          <b>Требования</b>
          <?php if(have_rows('trebovaniya')) : while(have_rows('trebovaniya')) : the_row();  ?>
          <div class="line"><?php the_sub_field('trebovanie'); ?></div>
          <?php endwhile; endif; ?>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php endwhile; endif; ?>
    </div>
    <div class="blog-page-sub">
      <div class="left">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/letter.png" alt="icon">
      </div>
      <div class="right">
        <div class="text">
          <b>Подпишитесь на нашу рассылку</b>
          <p>Будьте в курсе последних новостей и выгодных предложений</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="cf48b7d" title="Подписка"]'); ?>
      </div>
    </div>
  </div>
</section>



<?php
get_footer();
