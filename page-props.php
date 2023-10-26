<?php
/**
 Template Name: Реквизиты
*/

get_header();
?>

<section class="page-top props">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); }
    ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="props-wrap">
      <div class="left">
        <?php if(have_rows('rekvizity')) : while(have_rows('rekvizity')) : the_row();  ?>
          <div class="item">
            <p><?php the_sub_field('nazvanie'); ?></p>
            <b><?php the_sub_field('dannye'); ?></b>
          </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="right">
        <div class="wrap">
          <?php if(have_rows('personal')) : while(have_rows('personal')) : the_row();  ?>
          <div class="person">
            <p><?php the_sub_field('dolzhnost'); ?></p>
            <b><?php the_sub_field('imya'); ?></b>
            <?php if (get_sub_field('pochta')) { ?>
            <a href="mailto:<?php the_sub_field('pochta'); ?>" target="blank"><?php the_sub_field('pochta'); ?></a>
            <?php } ?>
          </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="files">
          <?php if(have_rows('files')) : while(have_rows('files')) : the_row();  ?>
          <a href="<?php the_sub_field('fajl'); ?>" target="blank" class="file" download>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.25 17.5C8.25 17.0858 8.58579 16.75 9 16.75L15 16.75C15.4142 16.75 15.75 17.0858 15.75 17.5C15.75 17.9142 15.4142 18.25 15 18.25L9 18.25C8.58579 18.25 8.25 17.9142 8.25 17.5Z" fill="#FF4848"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4697 14.0303C11.7626 14.3232 12.2374 14.3232 12.5303 14.0303L16.0303 10.5303C16.3232 10.2374 16.3232 9.76256 16.0303 9.46967C15.7374 9.17678 15.2626 9.17678 14.9697 9.46967L12.75 11.6893V6.5C12.75 6.08579 12.4142 5.75 12 5.75C11.5858 5.75 11.25 6.08579 11.25 6.5V11.6893L9.03033 9.46967C8.73744 9.17678 8.26256 9.17678 7.96967 9.46967C7.67678 9.76256 7.67678 10.2374 7.96967 10.5303L11.4697 14.0303Z" fill="#FF4848"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C6.89137 3.25 2.75 7.39137 2.75 12.5C2.75 17.6086 6.89137 21.75 12 21.75C17.1086 21.75 21.25 17.6086 21.25 12.5C21.25 7.39137 17.1086 3.25 12 3.25ZM1.25 12.5C1.25 6.56294 6.06294 1.75 12 1.75C17.9371 1.75 22.75 6.56294 22.75 12.5C22.75 18.4371 17.9371 23.25 12 23.25C6.06294 23.25 1.25 18.4371 1.25 12.5Z" fill="#FF4848"/>
              </svg>
            </div>
            <div class="name">
              <b><?php the_sub_field('nazvanie_fajla'); ?></b>
              <p><?php the_sub_field('format_i_ves'); ?></p>
            </div>
          </a>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
