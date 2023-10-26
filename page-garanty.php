<?php
/**
 Template Name: Гарантии
*/

get_header();
?>

<section class="garanty page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="subtitle" style="width: 100%; max-width: 100%;"><?php the_field('subtitle'); ?></div>
    <div class="forma">
      <b>
        Прием претензий: 
        <a target="blank" href="mailto:<?php the_field('pochta_dlya_pretenzij'); ?>">
          <?php the_field('pochta_dlya_pretenzij'); ?>
        </a>
      </b>
      <b>
        Форма заявки на рассмотрение сервисного случая:
        <a target="blank" href="<?php the_field('fajl'); ?>" download>
          Скачать
        </a>
      </b>
    </div>
    <div class="usl">
      <h2 class="title">
        <?php the_field('usl_title'); ?>
      </h2>
      <div class="usl-wrap">
        <?php if(have_rows('usloviya')) : while(have_rows('usloviya')) : the_row(); ?>
        <div class="item">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.48816 16.1548C4.83728 16.8057 4.83728 17.861 5.48816 18.5119L10.8215 23.8452C11.4724 24.4961 12.5276 24.4961 13.1785 23.8452L26.5118 10.5119C27.1627 9.86099 27.1627 8.80572 26.5118 8.15484C25.861 7.50397 24.8057 7.50397 24.1548 8.15484L12 20.3097L7.84518 16.1548C7.1943 15.504 6.13903 15.504 5.48816 16.1548Z" fill="#FF4848"/>
            </svg>
          </div>
          <b><?php the_sub_field('zagolovok'); ?></b>
          <p><?php the_sub_field('tekst'); ?></p>
        </div>
        <?php endwhile; endif; ?>
      </div>
     
    </div>
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>
</section>



<?php
get_footer();
