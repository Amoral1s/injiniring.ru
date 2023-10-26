<?php get_header(); ?>



<section class="offer page-top" style="background-image: url(<?php the_field('offer_background', 'options'); ?>);">
  <div class="container offer-wrap">
    <div class="left">
      <h1 class="page-title">
        <?php the_field('offer_title', 'options'); ?>
      </h1>
      <p class="subtitle">
        <?php the_field('offer_subtitle', 'options'); ?>
      </p>
      <div class="button callback">
        Заказать звонок
      </div>
    </div>
    <div class="right">
      <?php
        $image = get_field('offer_img', 'options');
        if( !empty( $image ) ) {
      ?>
          <img class="pc-img" src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['title']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php } ?>
      <?php
        $image2 = get_field('offer_img_mob', 'options');
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
      <?php if(have_rows('feat', 'options')) : while(have_rows('feat', 'options')) : the_row(); ?>
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

<section class="brands">
  <div class="container">
    <div class="brands-wrap">
      <?php if(have_rows('brands', 'options')) : while(have_rows('brands', 'options')) : the_row(); ?>
      <div class="item">
        <img src="<?php the_sub_field('brands_img'); ?>" alt="icon">
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="services">
  <div class="container">
    <h2 class="title">Наши услуги</h2>
    <div class="services-toggles">
      <?php $serv_i_toggle = 1; if(have_rows('services', 'options')) : while(have_rows('services', 'options')) : the_row(); ?>
      <div class="item <?php if ($serv_i_toggle == 1) { echo 'active'; $serv_i_toggle++; } ?>">
        <p><?php the_sub_field('services_title'); ?></p>
      </div>
      <?php endwhile; endif; ?>
    </div>
    <?php $serv_i = 1; if(have_rows('services', 'options')) : while(have_rows('services', 'options')) : the_row();  ?>
    <div class="services-wrap" style="display: <?php if ($serv_i == 1) { echo 'block'; $serv_i++; } ?> ">
      <div class="title-toggle" style="display: none">
        <p><?php the_sub_field('services_title'); ?></p>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5303 8.46967C18.2374 8.17678 17.7626 8.17678 17.4697 8.46967L12 13.9393L6.53033 8.46967C6.23744 8.17678 5.76256 8.17678 5.46967 8.46967C5.17678 8.76256 5.17678 9.23744 5.46967 9.53033L11.4697 15.5303C11.7626 15.8232 12.2374 15.8232 12.5303 15.5303L18.5303 9.53033C18.8232 9.23744 18.8232 8.76256 18.5303 8.46967Z" fill="#140A32"/>
          </svg>
        </div>
      </div>
      <div class="wrapper">
        <?php if(have_rows('services_inner')) : while(have_rows('services_inner')) : the_row(); ?>
        <a class="item" href="<?php the_sub_field('ssylka_na_uslugu'); ?>">
          <b><?php the_sub_field('nazvanie_uslugi'); ?></b>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"  fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1511 11.371C11.1511 11.9923 11.6547 12.496 12.2761 12.496H22.288L10.9502 23.8337C10.5109 24.2731 10.5109 24.9854 10.9502 25.4247C11.3896 25.8641 12.1019 25.8641 12.5412 25.4247L23.879 14.087L23.879 24.0989C23.879 24.7202 24.3827 25.2239 25.004 25.2239C25.6253 25.2239 26.129 24.7202 26.129 24.0989L26.129 11.371C26.129 10.7496 25.6253 10.246 25.004 10.246H12.2761C11.6547 10.246 11.1511 10.7496 11.1511 11.371Z" fill="#FF4848"/>
            </svg>
          </div>
        </a>
        <?php endwhile; endif; ?>
      </div>
    </div>
    <?php endwhile; endif; ?>
      
  </div>
</section>

<section class="about">
  <div class="container about-wrap">
    <div class="left">
      <h2 class="title"><?php the_field('about_title', 'options'); ?></h2>
      <div class="content"><?php the_field('about_text', 'options'); ?></div>
      <div class="nums">
        <?php if(have_rows('about_nums', 'options')) : while(have_rows('about_nums', 'options')) : the_row(); ?>
        <div class="item">
          <b><?php the_sub_field('czifra'); ?></b>
          <p><?php the_sub_field('tekst'); ?></p>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <a href="<?php the_permalink(21); ?>">
        Подробнее о компании  
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.43406 7.58065C7.43406 7.99486 7.76984 8.33065 8.18406 8.33065L14.8587 8.33064L7.30017 15.8892C7.00728 16.182 7.00728 16.6569 7.30017 16.9498C7.59306 17.2427 8.06794 17.2427 8.36083 16.9498L15.9193 9.3913L15.9193 16.0659C15.9193 16.4801 16.2551 16.8159 16.6693 16.8159C17.0836 16.8159 17.4193 16.4801 17.4193 16.0659L17.4193 7.58064C17.4193 7.16643 17.0836 6.83064 16.6693 6.83064L8.18406 6.83065C7.76984 6.83065 7.43406 7.16643 7.43406 7.58065Z" fill="#FF4848"/>
          </svg>
        </div>
      </a>
    </div>
    <div class="right">
      <img src="<?php the_field('about_img', 'options'); ?>" alt="<?php the_field('about_title'); ?>">
    </div>
  </div>
</section>

<section class="cases">
  <div class="container">
    <h2 class="title">Примеры наших работ</h2>
    <div class="cases-menu" id="genre-filter">
      <?php echo get_genre_filters(); ?>
    </div>
    <div class="wrapper">
      <div class="arr-prev arr">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5303 5.46967C15.8232 5.76256 15.8232 6.23744 15.5303 6.53033L10.0607 12L15.5303 17.4697C15.8232 17.7626 15.8232 18.2374 15.5303 18.5303C15.2374 18.8232 14.7626 18.8232 14.4697 18.5303L8.46967 12.5303C8.17678 12.2374 8.17678 11.7626 8.46967 11.4697L14.4697 5.46967C14.7626 5.17678 15.2374 5.17678 15.5303 5.46967Z" fill="#2F2B43"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="cases-wrap swiper-wrapper" id="genre-results"></div>
      </div>
      <div class="arr-next arr">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 5.46967C8.17678 5.76256 8.17678 6.23744 8.46967 6.53033L13.9393 12L8.46967 17.4697C8.17678 17.7626 8.17678 18.2374 8.46967 18.5303C8.76256 18.8232 9.23744 18.8232 9.53033 18.5303L15.5303 12.5303C15.8232 12.2374 15.8232 11.7626 15.5303 11.4697L9.53033 5.46967C9.23744 5.17678 8.76256 5.17678 8.46967 5.46967Z" fill="#2F2B43"/>
          </svg>
      </div>
    </div>
    
  </div>
</section>

<section class="feed bg-dark">
  <div class="container">
    <div class="top">
      <h2 class="title">Отзывы о нас</h2>
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

<?php if (get_field('seo_title', 'options')) { ?>
<section class="seo">
  <div class="container">
    <h2 class="title"><?php the_field('seo_title', 'options'); ?></h2>
    <div class="seo-wrap content">
      <?php the_field('seo_content', 'options'); ?>
    </div>
  </div>
</section>
<?php } ?>

<section class="faq">
  <div class="container faq-wrap">
    <div class="left">
      <h2 class="title"><?php the_field('faq_title', 'options'); ?></h2>
      <p>
        Мы собрали самые частые вопросы от наших клиентов. Если вы не нашли ответа, свяжитесь с нами
      </p>
      <div class="button faq-callback">
        Задать вопрос
      </div>
    </div>
    <div class="right">
     <?php if(have_rows('faq', 'options')) : while(have_rows('faq', 'options')) : the_row(); ?>
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



<?php get_footer(); ?>
