<?php
// Template Name: Home
?>

<!-- get header php -->
<?php get_header(); ?>
<!-- het header php -->

<!-- INTRODUÇÃO -->
    <section id="intro" class="page-home">
      <h1>ABC TURISMO PEDAGÓGICO</h1>
      <p>
        Agência de viagens, excursões, assessoria em turismo e elaboração de
        roteiros turísticos pedagógicos, histórico-culturais, sol e mar.
        <br />CNPJ: 45.521.987/0001-28
      </p>
      <a href="https://api.whatsapp.com/send/?phone=5584988075272&text&type=phone_number&app_absent=0"
        target="_blank"><button>ENTRE EM CONTATO</button></a>
    </section>
    <!-- FIM DA INTRODUÇÃO -->

    <!-- RESERVE JÁ! -->
    <article id="reserve-ja" class="carousel-container">
      <h1 class="titulo-laranja">RESERVE JÁ!</h1>
      <div id="crsl-pcts" class="carousel">

      <?php
// Consulta para obter os posts do tipo personalizado
$args = array(
    'post_type' => 'nossospacotes', // Substitua 'seu_tipo_de_post_personalizado' pelo nome do seu tipo de post personalizado
    'posts_per_page' => 3, // Para recuperar todos os posts
);

$loop = new WP_Query( $args );

if ( $loop->have_posts() ) :
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <a href="<?php the_permalink(); ?>">
          <div class="pct-item">
            <h2><?php the_field('titulo_pacote'); ?></h2>
            <?php if ( has_post_thumbnail() ) :  ?>
            <?php $thumb_id = get_post_thumbnail_id(); ?>
            <?php $thumb_url = wp_get_attachment_image_src( $thumb_id, 'large' ); ?>
            <img src="<?php echo esc_url( $thumb_url[0] ); ?>" alt="">
        <?php endif; ?>
            <p class="a-partir-de">A partir de <strong><?php the_field( 'preco1' ); ?></strong></p>
            <p>
            <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
            </p>
            <span>+</span>
          </div>
        </a>

        <?php endwhile;
    wp_reset_postdata(); // Restaura os dados do post
else : ?>
    <p><?php _e('Desculpe, nenhum post corresponde aos seus critérios.'); ?></p>
<?php endif; ?>

      </div>
    </article>
    <!-- FIM DE RESERVE JÁ -->

    <!-- DEPOIMENTOS -->
    <article id="depoimentos" data-group="depoimentos">
      <h1 class="titulo-cinza-vazado">DEPOIMENTOS</h1>
      <ul class="depoimentos">
        <li>
          <a href="" class="depo-foto" data-click="wil"><img
              src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/Wil.jpg" alt="" />Wil Silva</a>
        </li>
        <li>
          <a href="" class="depo-foto" data-click="igor"><img
              src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/Igor.jpg" alt="" />Igor Gomes</a>
        </li>
        <li>
          <a href="" class="depo-foto" data-click="jp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/JP.jpg"
              alt="" />João Paulo</a>
        </li>
      </ul>
      <div class="depo-txt" data-target="wil">
        <p>
          "Viajar com a ABC Turismo foi ótimo! A segurança de ter um seguro
          viagem individual fez toda a diferença pra mim"
        </p>
      </div>
      <div class="depo-txt" data-target="igor">
        <p>
          "Adorei viajar com a ABC Turismo Pedagógico. Tive a oportunidade de
          fazer uma tour por João Pessoa e tudo foi muito bem organizado e
          seguro. Recomendo a todos!"
        </p>
      </div>
      <div class="depo-txt" data-target="jp">
        <p>
          "Já sou cliente da ABC Turismo há muitos anos, já proporcionou muitos
          momentos inesquecíveis para mim e minha família, recomendo!"
        </p>
      </div>
    </article>
    <!-- FIM DE DEPOIMENTOS -->

    <!-- BLOG -->

    <?php include (TEMPLATEPATH . "/includes/blog-preview.php"); ?>

<!-- FIM DO BLOG -->

<!-- get footer php -->
<?php get_footer(); ?>
<!-- het footer php -->