<ul id="carrossel-pcts">
      <button class="pre-btn">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/seta-voltar.png" alt="" />
      </button>
      <button class="nxt-btn">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/seta-avancar.png" alt="" />
      </button>

<?php
// Consulta para obter os posts do tipo personalizado
$args = array(
    'post_type' => 'nossospacotes', // Substitua 'seu_tipo_de_post_personalizado' pelo nome do seu tipo de post personalizado
    'posts_per_page' => -1, // Para recuperar todos os posts
);

$loop = new WP_Query( $args );

if ( $loop->have_posts() ) :
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <li class="pct-item">
        <a href="<?php the_permalink(); ?>">
          <h2><?php the_field('titulo_pacote'); ?></h2>
          <img src="<?php the_field( 'img_pacote' ); ?>" alt="" />
          <p class="a-partir-de">A partir de <strong><?php the_field( 'preco1' ); ?></strong></p>
          <p>
          <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
          </p>
          <span>+</span>
        </a>
      </li>

      <?php endwhile;
    wp_reset_postdata(); // Restaura os dados do post
else : ?>
    <p><?php _e('Desculpe, nenhum post corresponde aos seus critérios.'); ?></p>
<?php endif; ?>

</ul>