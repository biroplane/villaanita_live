<?php get_header()?>
<article class="page page-single border-green py-4">
  <?php require(__DIR__.'/navbar.php')?>
  <div class="container categorypage">
    <div class="row">

      <?php if(have_posts(  ) ) : ?>
      <?php
  	while ( have_posts() ) :
      the_post();
      ?>
      <?php if (has_post_thumbnail( $post->ID ) ){ 
         $media = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
      }else{
        $media=null;
      } 
         ?>

      <a name="<?=$post->post_name?>"></a>
      <div class="card post-card">
        <div class="card-title">
          <h1><?= the_title(  )?></h1>
          <h4 class="overline"><?= the_date( )?></h4>
        </div>
        <?php if($media){
?>
        <div class="card-img"><img src="<?=$media?>"></div>
        <?php      }?>
        <div class="card-body"><?=the_content()?></div>
        <div class="card-footer"></div>
      </div>
      <?php
    endwhile;
    ?>
      <?php endif; ?>
    </div>
  </div>
</article>
<?php get_footer()  ?>