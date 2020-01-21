<a name="ricerca"></a>
<article class="page page-single border-purple ricerca" id="ricerca">
  <a name="ricerca"></a>
  <div class="dna">
    <img src="<?=get_template_directory_uri(  )?>/src/assets/img/ricerca_crop_fr.png" class="first">
    <img src="<?=get_template_directory_uri(  )?>/src/assets/img/ricerca_crop_fr.png" class="second">
  </div>
  <div class="container d-flex flex-column justify-content-center full-height">
    <div class="row">
      <div class="col-md-12">
        <h1 class="display-1 sf_font d-none d-md-block">Ricerca e<br>Sviluppo</h1>
        <h1 class="display-4 sf_font d-block d-md-none">Ricerca e<br>Sviluppo</h1>
      </div>
    </div>
    <div class="row">

      <div class="col-md-6 justify-content-center">
        <p class="text-white">
          <?php
              $research_post= wp_get_single_post( getenv("RESEARCH") );
              //setup_postdata( $post );
              //var_dump($post);
              ?>


          <?= $research_post->post_excerpt; ?>
        </p>
        <a class="btn btn-outline-purple" href="<?php the_permalink( $research_post)?>">Scopri di Pi&ugrave;</a>


      </div>
    </div>
  </div>

</article>