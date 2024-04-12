<?php
// Template Name: Home
?>

    <!-- get header php -->
    <?php get_header(); ?>
    <!-- het header php -->
    
    <!-- INTRODUÇÃO -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section id="intro" class="page-home" >
      <h1>ABC TURISMO PEDAGÓGICO</h1>
      <p>
        Agência de viagens, excursões, assessoria em turismo e elaboração de
        roteiros turísticos pedagógicos, histórico-culturais, sol e mar.
        <br />CNPJ: 45.521.987/0001-28
      </p>
      <a
        href="https://api.whatsapp.com/send/?phone=5584988075272&text&type=phone_number&app_absent=0"
        target="_blank"
        ><button>ENTRE EM CONTATO</button></a
      >
    </section>
    <!-- FIM DA INTRODUÇÃO -->

    <!-- RESERVE JÁ! -->
    <article id="reserve-ja" class="carousel-container">
      <h1 class="titulo-laranja">RESERVE JÁ!</h1>
      <div id="crsl-pcts" class="carousel">
        <a href="/pacotes/">
          <div class="pct-item">
            <h2>Dia das Mães<br />Hotel Thermas</h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/thermas.jpg" alt="" />
            <p class="a-partir-de">A partir de <strong>R$ 469,00</strong></p>
            <p>
              - Transporte categoria turismo<br />
              - Diária no Hotel Thermas com café da manhã<br />
              - Acesso ao parque e piscinas termais<br />
              - Almoço no domingo<br />
              - Tour com guias credenciados
            </p>
            <span>+</span>
          </div>
        </a>

        <a href="/pacotes/">
          <div class="pct-item center">
            <h2>PORTO DE GALINHAS<br />BATE-VOLTA</h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/port-de-galinhas.webp" alt="" />
            <p class="a-partir-de">A partir de <strong>R$ 199,00</strong></p>
            <p>
              - Transporte categoria turismo<br />
              - Guias credenciados<br />
              - Seguro viagem<br />
            </p>
            <span>+</span>
          </div>
        </a>

        <a href="/pacotes/">
          <div class="pct-item">
            <h2>Pingo da Mei Dia<br />Mossoró</h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/pingo-mei-dia.png" alt="" />
            <p class="a-partir-de">A partir de <strong>R$ 589,00</strong></p>
            <p>
              - Transporte categoria turismo<br />
              - Duas diárias com café da manhã no Sabinos Palace Hotel<br />
              - Tour histórico<br />
              - Guias credenciados<br />
              - Seguro viagem individual
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
          <a href="" class="depo-foto" data-click="wil"
            ><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/Wil.jpg" alt="" />Wil Silva</a
          >
        </li>
        <li>
          <a href="" class="depo-foto" data-click="igor"
            ><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/Igor.jpg" alt="" />Igor Gomes</a
          >
        </li>
        <li>
          <a href="" class="depo-foto" data-click="jp"
            ><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/JP.jpg" alt="" />João Paulo</a
          >
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
    <section id="ultimo-post">
      <h1 class="titulo-azul">ÚLTIMO POST</h1>

      <div class="ultimo-post">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/pingo-mei-dia.png" alt="" />
        <div class="ctd-post">
          <h2>O Pingo da Mei Dia: A festa que ilumina Mossoró</h2>
          <p>
            No coração do sertão nordestino, uma cidade resplandece em cores
            vivas e energia contagiante: Mossoró, no Rio Grande do Norte. E se
            há uma celebração que encapsula toda a essência vibrante e calorosa
            dessa cidade, é o "Pingo da Mei Dia". Imagine uma tarde quente de
            junho...
          </p>
          <a href="/blog-post/">+ Leia mais</a>
        </div>
      </div>
    </section>
    <?php endwhile; else: endif; ?>
    <!-- FIM DO BLOG -->

        <!-- get footer php -->
        <?php get_footer(); ?>
    <!-- het footer php -->
