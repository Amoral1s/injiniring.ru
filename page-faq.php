<?php
/**
 Template Name: FAQ
*/

get_header();
?>

<section class="faq page-faq page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
  </div>
  <div class="container faq-wrap">
    
    <div class="right" style="width: 100%">
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
