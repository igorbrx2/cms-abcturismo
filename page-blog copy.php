<?php
// Template Name: Blog
?>

<!-- get header php -->
<?php get_header(); ?>
<!-- get header php -->

<!-- IMAGEM DE BLOG -->
<section id="blog-titulo">
  <h1 class="titulo-paginas">BLOG</h1>
</section>
<!-- FIM DA IMAGEM DE BLOG -->

<!-- ÚLTIMA POSTAGEM -->

<?php include (TEMPLATEPATH . "/includes/blog-preview.php"); ?>

<!-- FIM DA ÚLTIMA POSTAGEM -->

<!-- LINHA DIVISÓRIA PARA POSTS -->
<div class="divisao-blog-pg">
  <div class="linha-horizontal"></div>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/icone-livro.png" alt="" />
  <div class="linha-horizontal"></div>
</div>
<!-- FIM DA LINHA DIVISÓRIA PARA POSTS -->

<!-- TODOS OS TEXTOS -->

<div class="pesquisa">
  <label for="searchInput">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/icone-busca.png" alt="" />
  </label>
  <input type="text" id="searchInput" placeholder="Pesquisar por texto" onkeyup="search()" />
</div>

<ul id="posts-container">

  <?php if (have_posts()):
    while (have_posts()):
      the_post(); ?>

      <li class="post-card">
        <a href="./blog-post.html">
          <div class="post-card-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/pingo-mei-dia.png" alt="" />
          </div>
          <h2>Pingo da Mei Dia</h2>
          <p>
            No coração do sertão nordestino, uma cidade resplandece em cores
            vivas e energia contagiante: Mossoró, no Rio Grande do Norte. E se
            há uma celebração que encapsula toda a essência vibrante e calorosa
            dessa cidade, é o "Pingo da Mei Dia".
          </p>
          <span>+ Leia Mais</span>
        </a>
      </li>

    <?php endwhile; else: endif ?>

</ul>

<!-- get footer php -->
<?php get_footer(); ?>
<!-- get footer php -->