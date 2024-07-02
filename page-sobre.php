<?php
// Template Name: Sobre
?>


<!-- get header php -->
<?php get_header(); ?>
<!-- get header php -->


<!-- FIM DE HEADER -->

<!-- IMAGEM DE SOBRE -->
<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>
    <section id="sobre-titulo">
      <h1 class="titulo-paginas">SOBRE</h1>
    </section>
    <!-- FIM DE IMAGEM DE SOBRE -->

    <!-- NOSSA HISTÓRIA -->
    <article id="nossa-historia">
      <h1 class="titulo-laranja">NOSSA HISTÓRIA</h1>
      <div id="sobre">
        <div class="sobre-img">
          <img src="<?php the_field('imagem_sobre'); ?>" alt="" />
        </div>
        <p>
          <?php the_field('nossa_historia'); ?>
        </p>
      </div>
    </article>
    <!-- FIM DE NOSSA HISTÓRIA -->

    <!-- EQUIPE -->
    <section id="nossa-equipe">
      <h1 class="titulo-cinza-vazado">EQUIPE</h1>
      <div id="equipe">
        <div class="card-membro-equipe">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/berg.jpg" alt="" />
          <h2>Lindemberg Araújo</h2>
          <p>
            Diretor-fundador da AbcTurismo e professor de História especializado
            em História e Cultura Afro-brasileira e Africana. Guia de Turismo
            credenciado pelo Ministério do Turismo, formado pelo Instituto
            Federal de Educação, Ciência e Tecnologia do RN.
          </p>
        </div>

        <div class="card-membro-equipe">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/lavinia.jpg" alt="" />
          <h2>Lavinia Nobrega</h2>
          <p>
            Guia de Turismo formada pelo Instituto Federal do Rio Grande do
            Norte, credenciada pelo Ministério do Turismo. Reconhecida por seu
            papel crucial como tradutora do patrimônio histórico e cultural da
            região. Apresenta dinamismo e proatividade como características
            marcantes em seu perfil profissional.
          </p>
        </div>

        <div class="card-membro-equipe">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/paulo.jpg" alt="" />
          <h2>Paulo Henrique</h2>
          <p>
            Professor de História da rede pública e privada da grande Natal,
            Especialista em História e Cultura Afro-brasileira, assessor
            regional para Turismo Pedagógico.
          </p>
        </div>

        <div class="card-membro-equipe">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/samyla.jpg" alt="" />
          <h2>Sâmyla França</h2>
          <p>
            Estudante de Licenciatura em Geografia na UFRN e Guia de Turismo do
            Rio Grande do Norte, formada pelo Instituto Federal de Educação,
            Ciência e Tecnologia do RN, credenciada pelo Ministério do Turismo.
          </p>
        </div>

        <div class="card-membro-equipe">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/gisseli.jpg" alt="" />
          <h2>Gisseli Leide</h2>
          <p>
            Licenciada em Ciências Biológicas pela Universidade Potiguar e Guia
            de Turismo do Rio Grande do Norte formada pelo Instituto Federal do
            Rio Grande do Norte, credenciada pelo Ministério do Turismo.
          </p>
        </div>

        <div class="card-membro-equipe">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/fernanda.jpg" alt="" />
          <h2>Fernanda Cristiny</h2>
          <p>
            Setor financeiro e atendimento ao cliente. Por trás das câmeras
            sempre garantindo os melhores clicks.
          </p>
        </div>
      </div>
    </section>
  <?php endwhile; else: endif; ?>
<!-- FIM DE EQUIPE -->

<!-- get footer php -->
<?php get_footer(); ?>
<!-- get footer php -->