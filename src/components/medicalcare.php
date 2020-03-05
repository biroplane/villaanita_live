<a name="medicalcare"></a>

<div class="page-half page-single border-red ">
  <div class="container-fluid">
    <div class="row bgStruct"><img src="<?=get_template_directory_uri()?>/src/assets/img/medicalcare.jpg" /></div>
  </div>
  <div class="d-flex flex-column align-items-center flex-wrapper-100">
    <div class="container h-50 ">
      <div class="row py-4">
        <?php
              $post= wp_get_single_post( getenv("MEDICALCARE_MAIN") );
              //setup_postdata( $post );

              //var_dump($post);
              ?>
        <h1 class="text-red text-uppercase col-md-12">
          <a href="<?php the_permalink( $post )?>" role="button">
            <img src="<?=get_template_directory_uri()?>/src/assets/img/mc.png" width="300">
          </a></h1>
        <hr />
        <p class="col-md-12"><?=$post->post_excerpt;?></p>

      </div>
      <div class="row">
        <?php
      $args = array( 'category' =>getenv("MEDICALCARE") ,'numberposts'=>-1 );
      $postslist = get_posts( $args );    
      foreach ($postslist as $post) :  setup_postdata($post); 
      ?>
        <div class="col-md-3 col-sm-3">
          <a href="<?php the_permalink(); ?>">
            <div class="card card-borderless">
              <img src="<?= get_the_post_thumbnail_url()?>" class="mc-thumbnail">
              <div class="card-body text-red text-uppercase text-center font-weight-bold">
                <?php the_title(); ?>
              </div>
            </div>
          </a>

        </div>


        <?php endforeach; ?>

      </div>
    </div>
  </div>
</div>