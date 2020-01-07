<?php get_header()?>

<?php $main  = home_menu(); ?>
<!--  -->
<article class="app">
  <nav class="navbar d-sm-block d-md-none">
    <button class="btn btn-circle setdrawer"><i class="material-icons">menu</i></button>
  </nav>
  <aside class="drawer">
    <div class="drawer-content">

      <ul>
        <?php foreach($main as $menu) {?>
        <li><a href="<?=$menu->url?>"><?=$menu->title ?></a></li>
        <?php } ?>

      </ul>
    </div>
    <div class="backdrop">&nbsp;</div>
  </aside>
  <main>

    <!-- PAGE 1 -->
    <article class="page page-start border-green middlepage">
      <div class="container-fluid ">
        <div class="offset-md-3 col-md-6">
          <div class="row"><img src="<?=get_template_directory_uri(  )?>/src/assets/img/logo.png" height="100"></div>
          <div class="row">
            <nav class="homemenu">
              <ul>
                <?php foreach($main as $menu) {?>
                <li><a href="<?=$menu->url?>"><?=$menu->title ?></a></li>
                <?php } ?>

              </ul>
            </nav>
          </div>
          <div class="row">
            <div class="img-crop"><img src="<?=get_template_directory_uri()?>/src/assets/img/BZ9A9518.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </article>
    <!-- PAGE 2 -->
    <article class="page page-end border-green">
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
            <button class="btn btn-outline-primary btn-sm">Leggi</button>
          </div>
          <div class="col-md-4"><?php
            $post= wp_get_single_post( getenv("HOME_GARDEN") );
            //var_dump($post);
            ?>
            <h4><?=$post->post_title;?></h4>
            <p><?=$post->post_excerpt;?></p>
            <button class="btn btn-outline-primary btn-sm">Leggi</button>
          </div>
          <div class="col-md-4"><?php
            $post= wp_get_single_post( getenv("HOME_MISSION") );
            //var_dump($post);
            ?>
            <h4><?=$post->post_title;?></h4>
            <p><?=$post->post_excerpt;?></p>
            <button class="btn btn-outline-primary btn-sm">Leggi</button>
          </div>
        </div>
      </div>
    </article>
    <!-- PAGE 3 RICERCA -->
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
            $post= wp_get_single_post( getenv("HOME_MISSION") );
            //var_dump($post);
            print $post->post_excerpt;
            ?>
            </p>
            <button class="btn btn-outline-purple">Scopri di Pi&ugrave;</button>

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