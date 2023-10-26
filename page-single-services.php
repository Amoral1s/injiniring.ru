<?php
/**
 Template Name: Услуга single
*/

get_header();
?>

<section class="offer offer-single page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); }
    ?>
  </div>
  <div class="container offer-wrap">
    <div class="left">
      <h1 class="page-title">
        <?php the_title(); ?>
      </h1>
      <p class="subtitle">
        <?php the_field('subtitle'); ?>
      </p>
      <div class="btns">
        <div class="button quote-callback">
          Оставить заявку
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
      <?php
        $image2 = get_field('offer_img_mob');
        if( !empty( $image2 ) ) {
      ?>
          <img class="mob-img" src="<?php echo esc_url($image2['url']); ?>" title="<?php echo esc_attr($image2['title']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
      <?php } ?>
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

<?php if (get_field('eth_title')) { ?>
<section class="ethaps">
  <div class="container">
    <div class="ethaps-title">
      <h2 class="title">
        <?php the_field('eth_title'); ?>
      </h2>
      <div class="nav">
        <div class="arr arr-prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.6473 26.2513C22.0622 25.8364 22.0622 25.1636 21.6473 24.7487L13.8986 17L21.6473 9.2513C22.0622 8.83637 22.0622 8.16363 21.6473 7.7487C21.2324 7.33377 20.5596 7.33377 20.1447 7.7487L11.6447 16.2487C11.2298 16.6636 11.2298 17.3364 11.6447 17.7513L20.1447 26.2513C20.5596 26.6662 21.2324 26.6662 21.6473 26.2513Z" fill="#FF4848"/>
          </svg>
        </div>
        <div class="arr arr-next">
          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3527 7.74882C11.9378 8.16375 11.9378 8.83649 12.3527 9.25142L20.1014 17.0001L12.3527 24.7488C11.9378 25.1638 11.9378 25.8365 12.3527 26.2514C12.7676 26.6664 13.4404 26.6664 13.8553 26.2514L22.3553 17.7514C22.7702 17.3365 22.7702 16.6638 22.3553 16.2488L13.8553 7.74882C13.4404 7.33389 12.7676 7.33389 12.3527 7.74882Z" fill="#FF4848"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="swiper">
      <div class="ethaps-wrap swiper-wrapper">
        <?php $eth_index = 1; if(have_rows('ethaps')) : while(have_rows('ethaps')) : the_row(); ?>
        <div class="item swiper-slide">
          <div class="num"><?php echo $eth_index; $eth_index++; ?></div>
          <img src="<?php the_sub_field('izobrazhenie'); ?>" alt="<?php the_sub_field('zagolovok'); ?>">
          <b><?php the_sub_field('zagolovok'); ?></b>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php if (get_field('relaziovannye_proekty')) { ?>
<section class="cases">
  <div class="container">
    <h2 class="title">Реализованные проекты</h2>
    <div class="wrapper">
      <div class="arr-prev arr">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5303 5.46967C15.8232 5.76256 15.8232 6.23744 15.5303 6.53033L10.0607 12L15.5303 17.4697C15.8232 17.7626 15.8232 18.2374 15.5303 18.5303C15.2374 18.8232 14.7626 18.8232 14.4697 18.5303L8.46967 12.5303C8.17678 12.2374 8.17678 11.7626 8.46967 11.4697L14.4697 5.46967C14.7626 5.17678 15.2374 5.17678 15.5303 5.46967Z" fill="#2F2B43"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="cases-wrap swiper-wrapper">
          <?php
            $release = array();

            if(have_rows('relaziovannye_proekty')) : while(have_rows('relaziovannye_proekty')) : the_row(); 

            array_push($release, get_sub_field('id'));

            the_sub_field('brands_img'); 

            endwhile; endif; 
          
            $args = array(
              'post_type' => 'cases',
              'post__in' => $release
            );
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
          ?>
          <a href="<?php the_permalink(); ?>" class="item swiper-slide">
            <div class="left">
              <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="right">
              <div class="date"><?php echo get_the_date('d M Y') ?></div>
              <h3><?php the_title(); ?></h3>
              <div class="content">
                <?php the_field('about'); ?>
              </div>
            </div>
          </a>
          <?php } }  wp_reset_postdata(); ?>
        </div>
      </div>
      <div class="arr-next arr">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 5.46967C8.17678 5.76256 8.17678 6.23744 8.46967 6.53033L13.9393 12L8.46967 17.4697C8.17678 17.7626 8.17678 18.2374 8.46967 18.5303C8.76256 18.8232 9.23744 18.8232 9.53033 18.5303L15.5303 12.5303C15.8232 12.2374 15.8232 11.7626 15.5303 11.4697L9.53033 5.46967C9.23744 5.17678 8.76256 5.17678 8.46967 5.46967Z" fill="#2F2B43"/>
          </svg>
      </div>
    </div>
    
  </div>
</section>
<?php } ?>

<section class="feed bg-dark">
  <div class="container">
    <div class="top">
      <h2 class="title"><?php the_field('feed_title', 166); ?></h2>
      <div class="nav">
        <div class="arr arr-prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7071 7.79289C17.0976 8.18342 17.0976 8.81658 16.7071 9.20711L10.4142 15.5H24.6667C25.219 15.5 25.6667 15.9477 25.6667 16.5C25.6667 17.0523 25.219 17.5 24.6667 17.5H10.4142L16.7071 23.7929C17.0976 24.1834 17.0976 24.8166 16.7071 25.2071C16.3166 25.5976 15.6834 25.5976 15.2929 25.2071L7.29289 17.2071C6.90237 16.8166 6.90237 16.1834 7.29289 15.7929L15.2929 7.79289C15.6834 7.40237 16.3166 7.40237 16.7071 7.79289Z" fill="white"/>
          </svg>
        </div>
        <div class="nums">0 / 0</div>
        <div class="arr arr-next">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9595 7.79289C15.569 8.18342 15.569 8.81658 15.9595 9.20711L22.2524 15.5H7.99996C7.44768 15.5 6.99996 15.9477 6.99996 16.5C6.99996 17.0523 7.44768 17.5 7.99996 17.5H22.2524L15.9595 23.7929C15.569 24.1834 15.569 24.8166 15.9595 25.2071C16.35 25.5976 16.9832 25.5976 17.3737 25.2071L25.3737 17.2071C25.7643 16.8166 25.7643 16.1834 25.3737 15.7929L17.3737 7.79289C16.9832 7.40237 16.35 7.40237 15.9595 7.79289Z" fill="white"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="feed-wrap swiper">
      <div class="swiper-wrapper">
        <?php if(have_rows('feed', 166)) : while(have_rows('feed', 166)) : the_row(); ?>
        <div class="item swiper-slide">
          <div class="left">
            <b><?php the_sub_field('avtor_otzyva'); ?></b>
            <?php if (get_sub_field('tekst_pod_avtorom')) { ?> 
            <small><?php the_sub_field('tekst_pod_avtorom'); ?></small>
            <?php } ?>
            <div class="content"><?php the_sub_field('otzyv'); ?></div>
            <a href="<?php the_permalink(166); ?>" class="button button-transparent-white">
              Смотреть все отзывы
            </a>
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
    <div class="feed-bottom">
      <div class="left">
        <b>Наши клиенты - лидеры в своих отраслях</b>
        <p>Мы сотрудничаем с ведущими компаниями и счастливы быть их надёжным партнёром</p>
      </div>
      <div class="right">
        <?php if(have_rows('brands', 'options')) : while(have_rows('brands', 'options')) : the_row(); ?>
        <div class="item">
          <img src="<?php the_sub_field('brands_img'); ?>" alt="icon">
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="consultation">
  <div class="container">
    <div class="left">
      <img class="pc" src="<?php echo get_stylesheet_directory_uri() ?>/img/form-man.png" alt="form">
      <img class="mob" style="display: none" src="<?php echo get_stylesheet_directory_uri() ?>/img/form-mob.png" alt="form">
    </div>
    <div class="right">
      <b>Закажите консультацию</b>
      <p>
        Менеджеры компании с радостью ответят на ваши вопросы и произведут расчёт стоимости услуг и подготовят индивидуальное коммерческое предложение
      </p>
      <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="21d1abb" title="Закажите консультацию"]'); ?>
      </div>
    </div>
  </div>
</section>

<?php if (get_field('faq_title')) { ?>
<section class="faq">
  <div class="container faq-wrap">
    <div class="left">
      <h2 class="title"><?php the_field('faq_title'); ?></h2>
      <p>
        Мы собрали самые частые вопросы от наших клиентов. Если вы не нашли ответа, свяжитесь с нами
      </p>
      <div class="button faq-callback">
        Задать вопрос
      </div>
    </div>
    <div class="right">
     <?php if(have_rows('faq')) : while(have_rows('faq')) : the_row(); ?>
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"  class="item">
        <b itemprop="name">
          <?php the_sub_field('vopros'); ?>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5303 8.46967C18.2374 8.17678 17.7626 8.17678 17.4697 8.46967L12 13.9393L6.53033 8.46967C6.23744 8.17678 5.76256 8.17678 5.46967 8.46967C5.17678 8.76256 5.17678 9.23744 5.46967 9.53033L11.4697 15.5303C11.7626 15.8232 12.2374 15.8232 12.5303 15.5303L18.5303 9.53033C18.8232 9.23744 18.8232 8.76256 18.5303 8.46967Z" fill="#140A32"/>
            </svg>
          </div>
        </b>
        <p itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" >
          <span itemprop="text"><?php the_sub_field('otvet'); ?></span>
        </p>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
<?php } ?>

<?php if (get_field('seo_title')) { ?>
<section class="seo">
  <div class="container">
    <h2 class="title"><?php the_field('seo_title'); ?></h2>
    <div class="seo-wrap content">
      <?php the_field('seo_content'); ?>
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
