<?php
// Template Name: Single Pacotes
?>

<!-- get header php -->
<?php get_header(); ?>
<!-- het header php -->

<!-- IMAGEM DE PACOTES -->
<section id="pacotes-titulo">
      <h1 class="titulo-paginas">PACOTES</h1>
    </section>
    <!-- FIM DE IMAGEM DE PACOTES -->

    <!-- BOTÃO WHATSAPP  -->
    <button class="btn-wpp">
      <a
        href="https://api.whatsapp.com/send/?phone=5584988075272&text&type=phone_number&app_absent=0"
        target="_blank"
      >
        <div class="botao-zap">
          <img
            src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/wpp-maior.png"
            alt="Entre em contato pelo whatsapp"
          />
        </div>
      </a>
    </button>
    <!-- FIM DO BOTÃO WHATSAPP -->

    <!-- CORPO -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    

    <article class="pct-principal">

    <h1 class="titulo-laranja"><?php the_title(); ?></h1>
    <div class="container-principal">
      <div class="ft-preco-data">
        <div class="pct-princ-img">
          <img src="<?php the_field( 'img_pacote' ); ?>" alt="" />
        </div>
        <div class="preco-data">
          <div class="data">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/icone-calendario.png" alt="" />
            <p><?php the_field( 'data_pacote' ); ?></p>
          </div>
          <div class="preco">
            <h2>valores por pessoa</h2>
            <div class="valores">

                  <div class="prc">
                    <p><?php the_field( 'preco1' ); ?></p>
                    <span><?php the_field( 'caracteristica_preco1' ); ?></span>
                  </div>

                  <div class="prc">
                    <p><?php the_field( 'preco2' ); ?></p>
                    <span><?php the_field( 'caracteristica_preco2' ); ?></span>
                  </div>

                  <div class="prc">
                    <p><?php the_field( 'preco3' ); ?></p>
                    <span><?php the_field( 'caracteristica_preco3' ); ?></span>
                  </div>

                  <div class="prc">
                    <p><?php the_field( 'preco4' ); ?></p>
                    <span><?php the_field( 'caracteristica_preco4' ); ?></span>
                  </div>

                </div>
          </div>
        </div>
      </div>
      <div class="dsc-reserve">
        <p><?php the_content(); ?></p>
        <button class="reserve-agr">
      <a
        href="https://api.whatsapp.com/send/?phone=5584988075272&text&type=phone_number&app_absent=0"
        target="_blank"
      >
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/icone-carrinho.png" alt="" />
        <span>RESERVE AGORA</span>
      </a>
    </button>
      </div>
    </div>

</article>

<!-- CARROSSEL DE PACOTES -->
<?php include (TEMPLATEPATH . "/includes/carrossel-pacotes.php"); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

    <!-- FIM DE CORPO -->


<!-- get footer php -->
<?php get_footer(); ?>
<!-- het footer php -->