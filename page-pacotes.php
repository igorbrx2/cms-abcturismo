<?php
// Template Name: Pacotes
?>


<!-- get header php -->
<?php get_header(); ?>
<!-- get header php -->

<!-- IMAGEM DE PACOTES -->
<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>
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
    <ul id="carrossel-pcts">
      <button class="pre-btn">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/seta-voltar.png" alt="" />
      </button>
      <button class="nxt-btn">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/seta-avancar.png" alt="" />
      </button>

      <li class="pct-item">
        <a href="./pacotes/gameleiras.html">
          <h2>Serra de São Bento e<br />Monte das Gameleiras</h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/gameleiras.jpg" alt="" />
          <p class="a-partir-de">A partir de 5x <strong>R$ 145,80</strong></p>
          <p>
            - Transporte categoria turismo<br />
            - Duas diárias com café da manhã na pousada Monte das Serras<br />
            - Almoço no domingo<br />
            - Equipe especializada<br />
            - Guias credenciados<br />
            - Seguro viagem individual
          </p>
          <span>+</span>
        </a>
      </li>

      <li class="pct-item">
        <a href="./pacotes/pingo.html">
          <h2>Pingo da <br />Mei Dia</h2>
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
        </a>
      </li>

      <li class="pct-item">
        <a href="./pacotes/thermas.html">
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
        </a>
      </li>

      <li class="pct-item">
        <a href="./pacotes/olinda.html">
          <h2>
            Olinda, Recife<br />
            e Oficina de Brennand
          </h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/olinda.webp" alt="" />
          <p class="a-partir-de">A partir de <strong>R$ 169,00</strong></p>
          <p>
            - Transporte categoria turismo<br />
            - Água à bordo<br />
            - Guias credenciados<br />
            - Seguro viagem individual
          </p>
          <span>+</span>
        </a>
      </li>

      <li class="pct-item">
        <a href="./pacotes/fortaleza.html">
          <h2>Fortaleza<br />para lazer e compras</h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/fortaleza.jpg" alt="" />
          <p class="a-partir-de">A partir de <strong>R$ 849,00</strong></p>
          <p>
            - Transporte categoria turismo<br />
            - 3 diárias no Hotel Praia Centro com café da manhã<br />
            - City Tour e Praia do Futuro<br />
            - Guias Credenciados - Seguro viagem individual
          </p>
          <span>+</span>
        </a>
      </li>

      <li class="pct-item">
        <a href="./pacotes/salvador.html">
          <h2>Salvador<br />visite a boa terra</h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/salvador.jpg" alt="" />
          <p class="a-partir-de">A partir de <strong>R$ 1299,00</strong></p>
          <p>
            - Transporte luxo turismo<br />
            - 3 diárias com café da manhã no Hotel Portobello Ondina Praia<br />
            - City Tour histórico com guia local credenciado<br />
            - Brinde exclusivo personalizado da ABC Turismo <br />
          </p>
          <span>+</span>
        </a>
      </li>

      <li class="pct-item">
        <a href="./pacotes/martins.html">
          <h2>Festival de Fondue<br />Martins</h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/martins.jpg" alt="" />
          <p class="a-partir-de">A partir de <strong>R$ 1599,00</strong></p>
          <p>
            - Transporte categoria turismo<br />
            - Estadia completa com todas as refeições no Apt luxo do Hotel
            Serrano<br />
            - Guias credenciados<br />
            - Ingresso no Museu da cidade - Seguro viagem individual
          </p>
          <span>+</span>
        </a>
      </li>

      <li class="pct-item">
        <a href="./pacotes/gramado.html">
          <h2>Natal Luz em Gramado<br />e Canela</h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/gramado.jpg" alt="" />
          <p class="a-partir-de">Até 12x de <strong>R$ 204,08</strong></p>
          <p>
            - Passagens áreas<br />
            - 4 diárias com café da manhã em hotel 3 estrelas em Canela<br />
            - bagagens até 23kg despachadas<br />
          </p>
          <span>+</span>
        </a>
      </li>
    </ul>

  <?php endwhile; else: endif; ?>

<!-- get footer php -->
<?php get_footer(); ?>
<!-- get footer php -->