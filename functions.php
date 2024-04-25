<?php 

add_theme_support('post-thumbnails'); 

add_action('wp_ajax_get_new_posts', 'get_new_posts_callback');
add_action('wp_ajax_nopriv_get_new_posts', 'get_new_posts_callback');

function get_new_posts_callback() {
  $args = array(
    'posts_per_page' => 8, // Altere o número conforme necessário
    'post_status' => 'publish'
  );

  $new_posts_query = new WP_Query($args);

  if ($new_posts_query->have_posts()) :
    while ($new_posts_query->have_posts()) : $new_posts_query->the_post(); ?>

      <li class="post-card">
        <a href="<?php the_permalink(); ?>">
          <div class="post-card-img">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <span>+ Leia Mais</span>
        </a>
      </li>

  <?php endwhile;
    wp_reset_postdata();
  endif;

  die();
}


?>

