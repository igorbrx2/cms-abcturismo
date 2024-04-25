<?php
// Template Name: Blog Posts
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


<div id="posts-container">

  <?php if (have_posts()): ?>
    <?php while (have_posts()):
      the_post(); ?>

      <div class="post-card">
        <a href="<?php the_permalink(); ?>">
          <div class="post-card-img">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
          <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
          <span>+ Leia Mais</span>
        </a>
      </div>

    <?php endwhile; ?>
  <?php else: ?>
    <p><?php esc_html_e('Nenhum post encontrado.'); ?></p>
  <?php endif; ?>

</div>

<!-- get footer php -->
<?php get_footer(); ?>
<!-- get footer php -->