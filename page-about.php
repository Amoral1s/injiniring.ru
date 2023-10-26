<?php
/**
 Template Name: О нас
*/

get_header();
?>

<section class="offer offer-single offer-about page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); }
    ?>
  </div>
  <div class="container offer-wrap">
    <div class="left">
      <h1 class="page-title">
        <?php the_field('title'); ?>
      </h1>
      <p class="subtitle">
        <?php the_field('subtitle'); ?>
      </p>
      <div class="btns">
        <div class="button faq-callback">
          Свяжитесь с нами
        </div>
        <div class="button button-accent callback">
          Заказать звонок
        </div>
      </div>
    </div>
    <div class="right">
      <?php
        $image = get_field('offer_img');
        if( !empty( $image ) ) {
      ?>
          <img class="pc-img" src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['title']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php } ?>
    </div>
    
  </div>
</section>

<section class="about-nums">
  <div class="container wrap">
    <?php if(have_rows('features')) : while(have_rows('features')) : the_row(); ?>
    <div class="item">
      <b><?php the_sub_field('czifra'); ?></b>
      <p><?php the_sub_field('tekst'); ?></p>
    </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<section class="hod">
  <div class="container hod-wrap">
    <div class="left">
      <h2 class="title"><?php the_field('hod_title'); ?></h2>
      <p><?php the_field('hod_text'); ?></p>
      <div class="chart">
        <b><?php the_field('hod_name'); ?></b>
        <small><?php the_field('hod_dol'); ?></small>
      </div>
    </div>
    <div class="right">
      <img src="<?php the_field('foto_390h390_png'); ?>" alt="<?php the_field('hod_name'); ?>">
    </div>
  </div>
</section>

<section class="features">
  <div class="container">
    <div class="features-wrap">
      <?php if(have_rows('feat')) : while(have_rows('feat')) : the_row(); ?>
      <div class="item">
        <div class="icon">
          <img src="<?php the_sub_field('feat_icon'); ?>" alt="icon">
        </div>
        <b><?php the_sub_field('zagolovok'); ?></b>
        <p><?php the_sub_field('tekst'); ?></p>
      </div>
      <?php endwhile; endif; ?>
    </div>

  </div>
</section>

<section class="history">
  <div class="container ">
    <div class="wrap">
      <?php if(have_rows('history')) : while(have_rows('history')) : the_row(); ?>
      <div class="item">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <circle cx="12" cy="12" r="11" fill="white" stroke="#FF4848" stroke-width="2"/>
            <circle cx="12" cy="12" r="5" fill="#FF4848"/>
          </svg>
        </div>
        <strong><?php the_sub_field('god'); ?></strong>
        <b><?php the_sub_field('zagolovok'); ?></b>
        <p><?php the_sub_field('tekst'); ?></p>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php if (get_field('sert', 'options')) { ?>
<section class="sert">
  <div class="container">
    <h2 class="title"><?php the_field('sert_title', 'options'); ?></h2>
    <div class="swiper">
      <div class="sert-wrap swiper-wrapper">
        <?php $images = get_field('sert', 'options'); if( $images ): ?>
        <?php foreach( $images as $image ): ?>
          <a class="item swiper-slide" href="<?php echo esc_url($image['url']); ?>">
            <img src="<?php echo esc_url($image['sizes']['medium']); ?>" 
                title="<?php echo esc_attr($image['title']); ?>" 
                alt="<?php echo esc_attr($image['alt']); ?>" 
            />
          </a>
        <?php endforeach; endif;  ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php if (get_field('team', 'options')) { ?>
<section class="team">
  <div class="container">
    <h2 class="title"><?php the_field('team_title', 'options'); ?></h2>
    <div class="swiper">
      <div class="team-wrap swiper-wrapper">
        <?php if(have_rows('team', 'options')) : while(have_rows('team', 'options')) : the_row(); ?>
          <div class="item swiper-slide">
            <img src="<?php the_sub_field('foto') ?>" alt="<?php the_sub_field('imya'); ?>">
            <b><?php the_sub_field('imya'); ?></b>
            <p><?php the_sub_field('dolzhnost'); ?></p>
            <?php if (get_sub_field('email')) { ?>
            <a target="blank" href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
            <?php } ?>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<section class="news">
  <div class="container">
    <h2 class="title">
      Последние новости
    </h2>
    <div class="swiper">
      <div class="news-wrap swiper-wrapper">
        <?php 
          $my_posts = get_posts('numberposts=4');
          foreach ($my_posts as $post) :
          setup_postdata($post);
        ?>
        <a href="<?php the_permalink(); ?>" class="item swiper-slide">
          <img src="<?php the_post_thumbnail_url('medium') ?>" alt="post thumbnail">
          <div class="date"><?php echo get_the_date('d M') ?></div>
          <b><?php the_title(); ?></b>
          <?php if (get_field('kratkoe_opisanie')) { ?>
            <p><?php the_field('kratkoe_opisanie'); ?></p>
          <?php } ?>
        </a>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
    
  </div>
</section>

<?php if (get_field('ab_title')) { ?>
<section class="seo">
  <div class="container">
    <h2 class="title"><?php the_field('ab_title'); ?></h2>
    <div class="seo-wrap content">
      <?php the_field('ab_content'); ?>
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
