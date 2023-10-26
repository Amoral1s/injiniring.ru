<?php
/**
 Template Name: Документы
*/

get_header();
?>

<section class="documents page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
  </div>
  <div class="container documents-wrap">
     <?php if(have_rows('dokumenty')) : while(have_rows('dokumenty')) : the_row(); ?>
    <div class="item">
      <div class="left">
        <?php if (get_sub_field('prevyu_dokumenta_esli_sertifikat')) { ?>
          <a class="sert" target="blank" href="<?php the_sub_field('fajl'); ?>">
            <img src="<?php the_sub_field('prevyu_dokumenta_esli_sertifikat'); ?>" alt="FILE">
          </a>
        <?php } else { ?>
          <a class="file" href="<?php the_sub_field('fajl'); ?>" target="blank" download>
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/doc.svg" alt="FILE">
          </a>
        <?php } ?>
      </div>
      <div class="right">
        <b><?php the_sub_field('nazvanie_dokumenta'); ?></b>
        <p><?php the_sub_field('ves_i_format'); ?></p>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>

</section>




<?php
get_footer();
