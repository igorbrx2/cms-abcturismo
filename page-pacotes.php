<?php
// Template Name: Pacotes Principal
?>


<!-- get header php -->
<?php get_header(); ?>
<!-- get header php -->

<!-- IMAGEM DE PACOTES -->
    <section id="pacotes-titulo">
      <h1 class="titulo-paginas">PACOTES</h1>
    </section>
    <!-- FIM DE IMAGEM DE PACOTES -->

    <!-- INTRODUÇÃO PACOTES -->
    <DIV class="container-intropcts">
    <h1 class="titulo-laranja">VIAJE COM A GENTE!</h1>
    <section class="intro-pcts">
      <div class="intro-pcts-img">
        <img src="<?php the_field('imagem_intropcts') ?>"
          alt="" />
      </div>
      <p>
        <?php the_field('texto_intropcts') ?>
      </p>
    </section>
    </DIV>

    <!-- CARROSSEL DE PACOTES -->
      <?php include (TEMPLATEPATH . "/includes/carrossel-pacotes.php"); ?>



<!-- get footer php -->
<?php get_footer(); ?>
<!-- get footer php -->