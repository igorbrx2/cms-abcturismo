<?php
// Template Name: Pagina Pacote
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
            src="../imgs/wpp-maior.png"
            alt="Entre em contato pelo whatsapp"
          />
        </div>
      </a>
    </button>
    <!-- FIM DO BOTÃO WHATSAPP -->

    <!-- CORPO -->

    <article class="pct-principal">
        
    <h1 class="titulo-laranja"><?php echo get_post_meta(get_the_ID(), 'titulo_laranja', true); ?></h1>
    <div class="container-principal">
      <div class="ft-preco-data">
        <div class="pct-princ-img">
          <img src="<?php echo esc_url(get_post_meta(get_the_ID(), 'imagem', true)); ?>" alt="" />
        </div>
        <div class="preco-data">
          <div class="data">
            <img src="../imgs/icone-calendario.png" alt="" />
            <p><?php echo get_post_meta(get_the_ID(), 'data', true); ?></p>
          </div>
          <div class="preco">
            <h2>valores por pessoa</h2>
            <div class="valores">
              <?php
              $precos = get_post_meta(get_the_ID(), 'preco', true);
              if ($precos) {
                  foreach ($precos as $preco) {
                      echo '<div class="prc">';
                      echo '<span>' . esc_html($preco['valor']) . '</span>';
                      echo '<p>' . esc_html($preco['descricao']) . '</p>';
                      echo '</div>';
                  }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="dsc-reserve">
        <p>
          <?php echo get_post_meta(get_the_ID(), 'descricao', true); ?>
        </p>
      </div>
    </div>
    <button class="reserve-agr">
      <a
        href="<?php echo esc_url(get_post_meta(get_the_ID(), 'link_reserva', true)); ?>"
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