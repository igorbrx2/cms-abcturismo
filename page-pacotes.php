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
    <section class="intro-pcts">
      <div class="intro-pcts-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/onibus-lotado.jpg"
          alt="ônibus da ABC turismo lotado" />
      </div>
      <p>
        É aqui que você irá escolher o seu destino com a gente! A ABC Turismo
        Pedagógico dispõe de vários destinos sazonais, sempre muito bem
        esquematizados pela nossa equipe de guias credenciados.<br />

        <br />A segurança é de extrema importância para nós, por isso, contamos
        com seguro viagem nas nossas excursões, bem como sempre viajamos em
        ônibus categoria turismo, que além de prover maior segurança, provém
        também maior conforto.<br />

        <br />Escolha seu pacote abaixo e vem viver momentos inesquecíveis com a
        ABC Turismo Pedagógico!
      </p>
    </section>

    <!-- CARROSSEL DE PACOTES -->
      <?php include (TEMPLATEPATH . "/includes/carrossel-pacotes.php"); ?>



<!-- get footer php -->
<?php get_footer(); ?>
<!-- get footer php -->