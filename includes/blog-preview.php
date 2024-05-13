<?php
$last_post = get_posts(array('posts_per_page' => 1));
if ($last_post) :
    foreach ($last_post as $post) : setup_postdata($post);

        $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
?>

<section id="ultimo-post">
  <h1 class="titulo-azul">ÚLTIMO POST</h1>

  <div class="ultimo-post">
  <div class="post-thumbnail">
      <?php if (has_post_thumbnail()) : ?>
        <img src="<?php echo $thumbnail_url[0]; ?>" style="max-width: 700px; width: 100%;" alt="<?php the_title(); ?>">
      <?php endif; ?>
    </div>
    <div class="ctd-post">
      <h2><?php the_title(); ?></h2>
      <p>
      <?php the_excerpt(); ?>
      </p>
      <a href="<?php the_permalink(); ?>">+ Leia mais</a>
    </div>
  </div>
</section>

<?php
    endforeach;
    wp_reset_postdata();
    endif;
?>