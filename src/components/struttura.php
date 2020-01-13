<div class="page-half page-single border-green py-4 d-flex align-items-center">
  <div class="container">
    <div class="row">
      <?php
            $post= wp_get_single_post( getenv("HOME_STRUCT") );
            //setup_postdata( $post );
            //var_dump($post);
            ?>
      <h1 class="text-primary text-uppercase col-md-12"><a href="<?php the_permalink( $post )?>" role="button">Villa
          Anita</a></h1>
      <hr />
      <p class="col-md-12"><?=$post->post_excerpt;?></p>

    </div>
    <div class="row">
      <?php
    $args = array( 'category' =>17 ,'numberposts'=>-1 );
    $postslist = get_posts( $args );    
    foreach ($postslist as $post) :  setup_postdata($post); 
    ?>
      <div class="col-md-3 col-sm-3">
        <h5 class="text-uppercase font-weight-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      </div>


      <?php endforeach; ?>

    </div>
  </div>
</div>