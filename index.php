<?php get_header()?>

<?php $main  = home_menu(); ?>
<!--  -->
<div class="app">


  <nav class="navbar navbar-expand-lg fixed-top d-md-none navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="mainMenu">
      <ul class="navbar-nav">
        <?php foreach($main as $menu) {?>
        <li class="nav-item"><a class="nav-link" href="<?=$menu->url?>"><?=$menu->title ?></a></li>
        <?php } ?>

      </ul>
    </div>
  </nav>
  <main>

    <!-- PAGE 1 -->
    <article class="page ">

      <div class="carousel">
        <div class="item">
          <img src="<?=get_template_directory_uri()?>/src/assets/img/villa-anita_fronte.jpg" alt="" srcset="">
        </div>
        <div class="item">
          <img src="<?=get_template_directory_uri()?>/src/assets/img/sollievo.jpg" alt="" srcset="">
        </div>
      </div>
      <div class="container d-none d-md-block">
        <div class="row py-4 d-flex align-items-end">
          <div class=" col-md-1 col-sm-2">
            <img src="<?=get_template_directory_uri()?>/src/assets/img/logo.png" alt="logo villa anita" height="60">
          </div>
          <div class="col-md-8 align-bottom ml-4">
            <nav class="homemenu">
              <ul>
                <?php foreach($main as $menu) {?>
                <li><a href="<?=$menu->url?>"><?=$menu->title ?></a></li>
                <?php } ?>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </article>
    <!-- PAGE 2 -->
    <article class="page page-single border-green">
      <a name="struttura"></a>
      <div class="container">
        <div class="row">
          <div class="jumbotron">
            <h1 class="display-4 text-primary">Villa Anita</h1>
            <?php
            
            $post= get_post( getenv("HOME_JUMBOTRON") );
            $cat = get_the_category( getenv("HOME_JUMBOTRON") );
            $category = get_term_link( $cat[0] );

            //var_dump($cat);
            //var_dump($category);
            ?>
            <p class="lead"><?=$post->post_excerpt?></p>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="<?=$category."#"?>" role="button">Leggi</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php
            $post= wp_get_single_post( getenv("HOME_STRUCT") );
            //var_dump($post);
            ?>
            <h4><?=$post->post_title;?></h4>
            <p><?=$post->post_excerpt;?></p>
            <a href="<?=get_home_url().'/'.$post->post_name?>" class="btn btn-outline-primary btn-sm">Leggi</a>
          </div>
          <div class="col-md-4"><?php
            $post= wp_get_single_post( getenv("HOME_GARDEN") );
            //var_dump($post);
            ?>
            <h4><?=$post->post_title;?></h4>
            <p><?=$post->post_excerpt;?></p>
            <a href="<?=get_home_url().'/'.$post->post_name?>" class="btn btn-outline-primary btn-sm">Leggi</a>
          </div>
          <div class="col-md-4"><?php
            $post= wp_get_single_post( getenv("HOME_MISSION") );
            //var_dump($post);
            ?>
            <h4><?=$post->post_title;?></h4>
            <p><?=$post->post_excerpt;?></p>
            <a href="<?=get_home_url().'/'.$post->post_name?>" class="btn btn-outline-primary btn-sm">Leggi</a>
          </div>
        </div>
      </div>
    </article>
    <!-- PAGE 3 RICERCA -->
    <article class="page page-single border-purple ricerca" id="ricerca">
      <a name="ricerca"></a>
      <div class="dna">
        <img src="<?=get_template_directory_uri()?>/src/assets/img/ricerca_crop_fr.png" class="first">
        <img src="<?=get_template_directory_uri()?>/src/assets/img/ricerca_crop_fr.png" class="second">
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
            //$post= wp_get_single_post( getenv("HOME_MISSION") );
            $post= get_post( getenv("HOME_MISSION") );
            //var_dump($post);
            print $post->post_excerpt;
            ?>
            </p>
            <a class="btn btn-outline-purple" href="<?=get_home_url().'/'.$post->post_name?>">Scopri di Pi&ugrave;</a>

          </div>
        </div>
      </div>

    </article>
    <article class="page page-single border-grey">
      <a name="news"></a>
      <div class="container">
        <div class="row py-4">
          <div class="col-12">
            <h1>News &amp; Eventi</h1>
          </div>
        </div>
        <div class="row">

          <?php 

            $args = array( 'posts_per_page' => -1, 'cat' => getenv('NEWS_CATEGORY'), 'post_status' => 'publish' );
            $news_posts = get_posts( $args );

            //var_dump($news_posts);
            foreach($news_posts as $np){

          ?>
          <?php if (has_post_thumbnail( $np->ID ) ): ?>
          <?php $media = wp_get_attachment_image_src( get_post_thumbnail_id( $np->ID ), 'single-post-thumbnail' ); ?>
          <?PHP $permalink = get_permalink( $np->ID ); ?>


        </div>
        <?php endif; ?>

        <div class="col-md-4 col-sm-6 col-xl-3">

          <div class="card" style="width:100%">
            <div class="card-header">
              <h4><?=$np->post_title?></h4>
            </div>
            <div class="card-image"><img src="<?php print $media[0] ?>"></div>
            <div class="card-body"><?=$np->post_excerpt?></div>
            <div class="card-footer">
              <a href="<?=$permalink?>">
                <div class="btn btn-outline-secondary btn-block">Leggi
                </div>
              </a>
            </div>
          </div>
          <?php
            }
?>

        </div>
      </div>
</div>

</article>
<!-- PAGE 5 GOOGLE MAP -->
<article class="page page-single border-grey">
  <a href="" name="contatti"></a>
  <div id="map"></div>
</article>

</main>
</div>
<?php get_footer()?>