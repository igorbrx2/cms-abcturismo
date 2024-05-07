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

/* Adiciona um novo custom post type */
function add_cpt() { 

    /* Informa os nomes que serão exibidos na dashboard do WordPress */
    $labels = [
        "name" => __( "Pacotes", "chaplin-child" ),
        "singular_name" => __( "Pacotes", "chaplin-child" ),
        "menu_name" => __( "Pacotes", "chaplin-child" ),
        "all_items" => __( "Todos os itens", "chaplin-child" ),
    ];

    /* Informa os argumentos do custom post type */
    $args = [
        "label" => __( "Pacotes", "chaplin-child" ),
        "labels" => $labels,
        "description" => "Nossos pacotes disponíveis.",
        "public" => true,
           "has_archive" => true,
        "show_in_menu" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "pacotes", "with_front" => true ],
        "menu_icon" => "dashicons-text-page",
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "comments", "revisions", "author", "page-attributes", "post-formats" ],
    ];

    /* Registra o custom post type */
    register_post_type( "pacotes", $args );
}

/* Adiciona a função que acabou de ser criada */
add_action( 'init', 'add_cpt' );

?>