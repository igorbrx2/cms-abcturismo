<?php
// Template Name: Single Post
?>

<!-- get header php -->
<?php get_header(); ?>
<!-- het header php -->

<!-- IMAGEM DE BLOG -->
<section id="blog-titulo">
  <h1 class="titulo-paginas">BLOG</h1>
</section>
<!-- FIM DA IMAGEM DE BLOG -->

<!-- CORPO DO POST -->

<!-- BOTAO VOLTAR AO BLOG -->
<a href="/blog/" class="btn-voltar-blog">
  <button class="voltar-p-blog">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/seta-voltar-blog.png" alt="voltar para o blog">
    <p>voltar para o blog</p>
  </button>
</a>
<!-- BOTAO VOLTAR AO BLOG -->

<article class="blog-post">
  
<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>
    <article>
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; ?>
<?php else: ?>
  <p><?php esc_html_e('Nenhum post encontrado.'); ?></p>
<?php endif; ?>

</article>

<!-- get footer php -->
<?php get_footer(); ?>
<!-- het footer php -->