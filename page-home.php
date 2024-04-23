<?php
// Template Name: Home
?>

<!-- get header php -->
<?php get_header(); ?>
<!-- het header php -->

<!-- INTRODUÇÃO -->
<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>
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
        <a href="/pacotes/">
          <div class="pct-item">
            <h2><?php the_field('titulo_pacote1_reserveja'); ?></h2>
            <img src="<?php the_field('img_pacote1_reserveja'); ?>" alt="" />
            <p class="a-partir-de">A partir de <strong>R$ <?php the_field('preco_pacote1_reserveja'); ?></strong></p>
            <p>
              <?php the_field('conteudo_pacote1'); ?>
            </p>
            <span>+</span>
          </div>
        </a>

        <a href="/pacotes/">
          <div class="pct-item center">
            <h2><?php the_field('titulo_pacote2_reserveja'); ?></h2>
            <img src="<?php the_field('img_pacote2_reserveja'); ?>" alt="" />
            <p class="a-partir-de">A partir de <strong>R$ <?php the_field('preco_pacote2_reserveja'); ?></strong></p>
            <p>
              <?php the_field('conteudo_pacote2'); ?>
            </p>
            <span>+</span>
          </div>
        </a>

        <a href="/pacotes/">
          <div class="pct-item">
            <h2><?php the_field('titulo_pacote3_reserveja'); ?></h2>
            <img src="<?php the_field('img_pacote3_reserveja'); ?>" alt="" />
            <p class="a-partir-de">A partir de <strong>R$ <?php the_field('preco_pacote3_reserveja'); ?></strong></p>
            <p>
              <?php the_field('conteudo_pacote3'); ?>
            </p>
            <span>+</span>
          </div>
        </a>
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

  <?php endwhile; else: endif; ?>
<!-- FIM DO BLOG -->

<!-- get footer php -->
<?php get_footer(); ?>
<!-- het footer php -->