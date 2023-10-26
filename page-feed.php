<?php
/**
 Template Name: Отзывы
*/

get_header();
?>

<section class="feed page-feed page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="subtitle" style="width: 100%">
      <?php the_field('subtitle'); ?>
    </div>
    <section class="about-nums">
      <div class=" wrap">
        <?php if(have_rows('features')) : while(have_rows('features')) : the_row(); ?>
        <div class="item">
          <b><?php the_sub_field('czifra'); ?></b>
          <p><?php the_sub_field('tekst'); ?></p>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </section>
    <div class="feed-wrap">
        <?php if(have_rows('feed' )) : while(have_rows('feed')) : the_row(); ?>
        <div class="item">
          <div class="left">
            <b><?php the_sub_field('avtor_otzyva'); ?></b>
            <?php if (get_sub_field('tekst_pod_avtorom')) { ?> 
            <small><?php the_sub_field('tekst_pod_avtorom'); ?></small>
            <?php } ?>
            <div class="content"><?php the_sub_field('otzyv'); ?></div>
          </div> 
          <div class="right">
            <?php if (get_sub_field('foto')) { ?> 
            <a href="<?php the_sub_field('foto'); ?>">
              <img src="<?php the_sub_field('foto'); ?>" alt="<?php the_sub_field('avtor_otzyva'); ?>">
            </a>
            <?php } ?>
          </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php if (get_field('vid_title')) { ?> 
<section class="feed-video">
  <div class="container">
    <h2 class="title"><?php the_field('vid_title'); ?></h2>
    <div class="feed-video-wrap">
      <?php if(have_rows('video_otzyvy')) : while(have_rows('video_otzyvy')) : the_row(); ?>
      <div class="item" data-src="<?php the_sub_field('ssylka_na_video_youtube'); ?>">
        <img src="<?php the_sub_field('prevyu_kartinka'); ?>" alt="Thumbnail">
        <div class="text">
          <b><?php the_sub_field('imya'); ?></b>
          <p><?php the_sub_field('kompaniya'); ?></p>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
<?php } ?>

<?php if (get_field('soc_title')) { ?> 
<section class="feed-soc">
  <div class="container">
    <h2 class="title"><?php the_field('soc_title'); ?></h2>
    <div class="swiper">
      <div class="swiper-wrapper feed-soc-wrap">
        <?php if(have_rows('otzyvy_na_nezavisimyh_ploshhadkah')) : while(have_rows('otzyvy_na_nezavisimyh_ploshhadkah')) : the_row(); ?>
        <div class="item swiper-slide">
          <div class="top">
            <div class="avatar">
                <img src="<?php the_sub_field('ava'); ?>" alt="avatar">
            </div>
            <div class="text">
              <b><?php the_sub_field('imya'); ?></b>
              <p><?php the_sub_field('data'); ?></p>
            </div>
            
          </div>
          <div class="stars">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/stars.svg" alt="rating">
          </div>
          <div class="content">
            <p>
              <?php the_sub_field('otzyv'); ?>
            </p>
          </div>
          <div class="yandex">
            <img src="<?php the_sub_field('ikonka_otkuda_otzyv'); ?>" alt="icon">
            <p><?php the_sub_field('otkuda_otzyv'); ?></p>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="feed-pagination swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"></div>
    </div>
  </div>
</section>
<?php } ?>

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

<?php 
get_footer();
