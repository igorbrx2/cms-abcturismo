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
        <li>
          <a href="" class="depo-foto" data-click="soraia"><img
              src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/soraia marrocos.jpg" alt="" />Soraia Marrocos</a>
        </li>
        
        <li>
          <a href="" class="depo-foto" data-click="silvana"><img
              src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/silvana.jpg" alt="" />Silvana França</a>
        </li>

        <li>
          <a href="" class="depo-foto" data-click="aluizia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/aluizia freire.jpg"
              alt="" />Aluizia Freire</a>
        </li>

        <li>
          <a href="" class="depo-foto" data-click="leticia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/leticia ferreira.jpg"
              alt="" />Leticia Ferreira</a>
        </li>

        <li>
          <a href="" class="depo-foto" data-click="ana"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/ana cassia.jpg"
              alt="" />Ana Cassia</a>
        </li>

        <li>
          <a href="" class="depo-foto" data-click="auricelia"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/auricelia melo.jpg"
              alt="" />Auricelia Melo</a>
        </li>

        <li>
          <a href="" class="depo-foto" data-click="israel"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/israel de souza.jpg"
              alt="" />Israel de Souza</a>
        </li>

      </ul>
      <div class="depo-txt" data-target="leticia">
        <p>
        Passando pra agradecer pelo maravilhoso dia, ABC Turismo e equipe, sempre nos ofertando o melhor e sempre com algo mais. Meus pais amaram, não param de falar !❤💐🙏🏽

        </p>
      </div>
      <div class="depo-txt" data-target="ana">
        <p>
        Boa noite, Grupo Gratidão por todas as pessoas que cruzaram o meu caminho hoje e por tudo o que me aconteceu para que ele fosse realmente especial. Obg Berg,  Sâmyla e Fernanda vcs são maravilhosos e atenciosos. Que Deus nos permita viver muitos outros momentos assim 🙌🏻. Fiquem na Paz e até a próxima
        </p>
      </div>
      <div class="depo-txt" data-target="auricelia">
        <p>
        Quero agradecer a Berg e as meninas da ABC turismo, passeio maravilhoso, valeu cada centavo que paguei, a minha primeira experiência ficou gravada, até o próximo passeio se Deus quiser.
        </p>
      </div>
      <div class="depo-txt" data-target="israel">
        <p>
        Boa noite pessoal. Quero parabenizar mais uma vez à essa Grande pessoa, que é BERG . Por mais um passeio incrível, que vc nos proporcionou, e a essas duas jovens, Samyla e Fernanda por serem excelentes profissionais. Aqui fica minha Gratidão a ABC TURISMO.
        </p>
      </div>
      <div class="depo-txt" data-target="soraia">
        <p>
        Bom dia! ABC turismo como sempre arrasando. Parabéns  a Bergue por conseguir tornar cada viagem em momentos inesquecíveis.  Parabéns a sua equipe,  sempre presente em atender todos! E por isso que ABC turismo  é referencia em confiança  e atendimento diferenciado a todos que escolhe viajar com eles! Arrasaram!
        </p>
      </div>
      <div class="depo-txt" data-target="silvana">
        <p>
        A todos da ABC turismo, agradeço demais, por toda gentileza, profissionalismo dos serviços e a todo grupo que fez parte da meu primeiro bate volta com a empresa. Valeuuuuuuuuu!!!!!!✨💫🧳🚌✈🚍⛱🏜🏖🏕⛪🎑⛰✨🌹✨❤

        </p>
      </div>
      <div class="depo-txt" data-target="aluizia">
        <p>
        Amei o passeio, conhecer novas pessoas, maravilhoso, Pureza café da manhã da manhã excelente, a fazenda São João Me emocionei com a banda de frevo em Ceará Mirim. Gosto muito de carnaval. A recepção da organização da excursão, parabéns.
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