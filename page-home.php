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

      <?php $args = array(
    'post_type' => 'nossospacotes',
    'posts_per_page' => 3,
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
    wp_reset_postdata();
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
    <?php 
    $args = array(
        'post_type' => 'depoimentos',
        'posts_per_page' => 10,
        'post_status' => 'publish'
    );
    $depoimentos_query = new WP_Query($args);
    if ($depoimentos_query->have_posts()) : 
      while ($depoimentos_query->have_posts()) : $depoimentos_query->the_post(); ?>
      <?php if (get_field('depoimento_img')): ?>
        <li>
          <a href="<?php the_permalink(); ?>" class="depo-foto" data-click="<?php echo sanitize_title(get_the_title()); ?>">
            <img src="<?php the_field('depoimento_img'); ?>" alt="<?php the_field('depoimento_nome'); ?>" />
            <?php the_field('depoimento_nome'); ?>
          </a>
        </li>
        <?php endif; ?>
      <?php endwhile; wp_reset_postdata(); ?>
    <?php else : ?>
      <p><?php _e('Nenhum depoimento encontrado', 'chaplin-child'); ?></p>
    <?php endif; ?>
  </ul>

  <?php 
  $depoimentos_query = new WP_Query($args);
  if ($depoimentos_query->have_posts()) : 
    while ($depoimentos_query->have_posts()) : $depoimentos_query->the_post(); ?>
    <?php if (get_field('depoimento_texto')): ?>
      <div class="depo-txt" data-target="<?php echo sanitize_title(get_the_title()); ?>">
        <p>
          <?php the_field('depoimento_texto'); ?>
        </p>
        <?php endif; ?>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
  <?php else : ?>
    <p><?php _e('Nenhum depoimento encontrado', 'chaplin-child'); ?></p>
  <?php endif; ?>
</article>
<!-- FIM DE DEPOIMENTOS -->


    <!-- BLOG -->
    <?php include (TEMPLATEPATH . "/includes/blog-preview.php"); ?>

<!-- FIM DO BLOG -->

<!-- get footer php -->
<?php get_footer(); ?>
<!-- het footer php -->