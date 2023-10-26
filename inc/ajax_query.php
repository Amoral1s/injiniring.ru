<?php 

//Get Genre Filters
function get_genre_filters()
{
    $terms = get_terms('our_cases');
    $filters_html = false;
 
    if( $terms ):
        $filters_html = '<ul>';
 
        foreach( $terms as $term )
        {
            $term_id = $term->term_id;
            $term_name = $term->name;
 
            $filters_html .= '<li class="term_id_'.$term_id.'">'.$term_name.'<input type="checkbox" name="filter_genre[]" value="'.$term_id.'"></li>';
        }
        /* $filters_html .= '<li class="clear-all">Clear All</li>';
        $filters_html .= '</ul>'; */
 
        return $filters_html;
    endif;
}

//Enqueue Ajax Scripts
function enqueue_genre_ajax_scripts() {
  wp_register_script( 'genre-ajax-js', get_bloginfo('template_url') . '/js/ajax_query.js', array( 'jquery' ), '', true );
  wp_localize_script( 'genre-ajax-js', 'ajax_genre_params', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
  wp_enqueue_script( 'genre-ajax-js' );
}
add_action('wp_enqueue_scripts', 'enqueue_genre_ajax_scripts');


//Add Ajax Actions
add_action('wp_ajax_genre_filter', 'ajax_genre_filter');
add_action('wp_ajax_nopriv_genre_filter', 'ajax_genre_filter');

//Construct Loop & Results
function ajax_genre_filter()
{
    $query_data = $_GET;
    $genre_terms = ($query_data['genres']) ? explode(',',$query_data['genres']) : false;
    $tax_query = ($genre_terms) ? array( array(
      'taxonomy' => 'our_cases',
      'field' => 'id',
      'terms' => $genre_terms
  ) ) : false;
  $search_value = ($query_data['search']) ? $query_data['search'] : false;
  $paged = (isset($query_data['paged']) ) ? intval($query_data['paged']) : 1;
  $book_args = array(
    'post_type' => 'cases',
    's' => $search_value,
    'posts_per_page' => -1,
    'tax_query' => $tax_query,
    'paged' => $paged
  );
  $book_loop = new WP_Query($book_args);
 
    if( $book_loop->have_posts() ):
        while( $book_loop->have_posts() ): $book_loop->the_post(); ?>
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
        <?php
            
        endwhile;
        
    else: echo 'none post';
        
    endif;
    wp_reset_postdata();
 
    die();
}