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

// Custom Post Type => Pacotes

function custom_post_type_pacotes() {
	register_post_type('pacotes', array(
		'label' => 'pacotes',
		'description' => 'pacotes',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'pacotes', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'pacotes
',
			'singular_name' => 'pacotes',
			'menu_name' => 'pacotes
',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo pacotes',
			'edit' => 'Editar',
			'edit_item' => 'Editar pacotes',
			'new_item' => 'Novo pacotes',
			'view' => 'Ver pacotes',
			'view_item' => 'Ver pacotes',
			'search_items' => 'Procurar pacotes
',
			'not_found' => 'Nenhum pacotes Encontrado',
			'not_found_in_trash' => 'Nenhum pacotes Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_pacotes');


?>

