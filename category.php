<?php get_header(); ?>
<article class="page   py-4">
  <?php require __DIR__.'/src/components/navbar.php'; ?>
  <div class="container-fluid mb-4">
    <div class="row">
      <div class="col-12">
        <div class="category-thumbnail">
          <img src="<?=get_template_directory_uri(); ?>/src/assets/img/home.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="container-grid ">


    <?php if (have_posts()) : ?>
    <?php while (have_posts()) :
        the_post();
      ?>
    <?php if (has_post_thumbnail($post->ID)) {
          $media = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
      } else {
          $media = null;
      }
         ?>
    <!-- <div class="col-md-4 col-sm-6 col-xl-3"> -->
    <div class="grid-card">
      <a name="<?=$post->post_name; ?>"></a>
      <div class="card">
        <?php if ($media) {
             ?>
        <div class="card-img-top"><img src="<?=$media[0]; ?>" class="img-fluid"></div>
        <?php
         }?>
        <div class="card-title">
          <h1><?= the_title(); ?></h1>

        </div>
        <div class="card-body"><?=the_excerpt(); ?></div>
        <div class="card-footer"><a class="btn btn-outline-primary" href="<?=the_permalink(  )?>">Leggi</a></div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</article>
<?php get_footer(); ?>