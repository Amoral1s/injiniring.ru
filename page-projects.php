<?php
/**
 Template Name: Наши работы
 */

get_header();
?>


<section  class="news-page page-top">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); } ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="news-cats case-cats start-cats">
      <?php
        $args = array(
          'show_option_all'    => '',
          'show_option_none'   => __('No categories'),
          'orderby'            => 'ID',
          'order'              => 'DECS',
          'style'              => 'list',
          'show_count'         => 0,
          'hide_empty'         => 1,
          'use_desc_for_title' => 0,
          'child_of'           => 0,
          'feed'               => '',
          'feed_type'          => '',
          'feed_image'         => '',
          'exclude'            => '',
          'exclude_tree'       => '',
          'include'            => '',
          'hierarchical'       => false,
          'title_li'           => '',
          'number'             => NULL,
          'echo'               => 1,
          'depth'              => 0,
          'current_category'   => 0,
          'pad_counts'         => 0,
          'taxonomy'           => 'our_cases',
          'walker'             => 'Walker_Category',
          'hide_title_if_empty' => false,
          'separator'          => '',
        );
          echo '<ul>';
          wp_list_categories( $args );
          echo '</ul>';

      ?>
    </div>
    <div class="case-wrap">
      <?php
        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
        $args = array(
          'posts_per_page' => 8, // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
          'paged'          => $current_page, // текущая страница
          'post_type'      => 'cases',
          'taxonomy'       => 'our_cases',
        );
        query_posts( $args );
        $wp_query->is_archive = true;
        $wp_query->is_home = false;
        while(have_posts()): the_post();
      ?>
      <a href="<?php the_permalink(); ?>" class="item ">
        <img src="<?php the_post_thumbnail_url('large') ?>" alt="post thumbnail">
        <b><?php the_title(); ?></b>
        <div class="date"><?php echo get_the_date('M Y') ?></div>
      </a>
      <?php endwhile; ?>
    </div>
    <?php if( function_exists('wp_pagenavi') ) wp_pagenavi();?>
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
