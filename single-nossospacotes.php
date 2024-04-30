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

    <article class="pct-principal">

    <h1 class="titulo-laranja"><?php the_title(); ?></h1>
    <div class="container-principal">
      <div class="ft-preco-data">
        <div class="pct-princ-img">
          <img src="<?php the_field('img_pacote'); ?>" alt="" />
        </div>
        <div class="preco-data">
          <div class="data">
            <img src="../imgs/icone-calendario.png" alt="" />
            <p><?php the_field('data_pacote'); ?></p>
          </div>
          <div class="preco">
            <h2>valores por pessoa</h2>
            <div class="valores">

                  <div class="prc">
                    <span>R$ <?php the_field('preco1') ?></span>
                    <p><?php the_field('caracteristica_preco1') ?></p>
                  </div>

                  <div class="prc">
                    <span>R$ <?php the_field('preco2') ?></span>
                    <p><?php the_field('caracteristica_preco2') ?></p>
                  </div>

                  <div class="prc">
                    <span>R$ <?php the_field('preco3') ?></span>
                    <p><?php the_field('caracteristica_preco3') ?></p>
                  </div>

                  <div class="prc">
                    <span>R$ <?php the_field('preco4') ?></span>
                    <p><?php the_field('caracteristica_preco4') ?></p>
                  </div>

                </div>
          </div>
        </div>
      </div>
      <div class="dsc-reserve">
        <p>
          <?php the_content(); ?>
        </p>
      </div>
    </div>
    <button class="reserve-agr">
      <a
        href="https://api.whatsapp.com/send/?phone=5584988075272&text&type=phone_number&app_absent=0"
        target="_blank"
      >
        <img src="../imgs/icone-carrinho.png" alt="" />
        <span>RESERVE AGORA</span>
      </a>
    </button>

</article>

    <!-- FIM DE CORPO -->


<!-- get footer php -->
<?php get_footer(); ?>
<!-- het footer php -->