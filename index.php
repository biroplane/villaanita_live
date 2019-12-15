<?php get_header()?>
<article class="app">
  <nav class="navbar d-sm-block d-md-none">
    <button class="btn btn-circle setdrawer"><i class="material-icons">menu</i></button>
  </nav>
  <aside class="drawer">
    <div class="drawer-content">
      <ul>
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        <li><a href="#">Link 5</a></li>
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
                <li><a href="#centrodiurno">Centro Diurno</a></li>
                <li><a href="#">Giardino</a></li>
                <li><a href="#">Ricerca</a></li>
                <li><a href="#">Mappa</a></li>
                <li><a href="#">Contatti</a></li>
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
      <a name="centrodiurno"></a>
      <div class="container">
        <div class="row">
          <div class="jumbotron">
            <h1 class="display-4 text-primary">Villa Anita</h1>
            <?php
            
            $post= get_post( getenv("HOME_JUMBOTRON") );
            //var_dump($post);
            ?>
            <p class="lead"><?=$post->post_excerpt?></p>
            <hr class="my-4">

            <a class="btn btn-primary btn-lg" href="<?=$post->link?>" role="button">Learn more</a>
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
        <img src="<?=get_template_directory_uri(  )?>/src/assets/img/ricerca_crop_fr.png')" class="first">
        <img src="<?=get_template_directory_uri(  )?>/src/assets/img/ricerca_crop_fr.png')" class="second">
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
      <div class="container">
        <div class="row">
          <?php 
            print(getenv('NEWS_CATEGORY'));
            $args = array( 'posts_per_page' => -1, 'category_id' => 2, 'post_status' => 'publish' );
            $news_posts = get_post( $args );
            print_r($args);
            print_r($news_posts);
          ?>
          <div class="col-md-4">
            <h1>CARD</h1>
            <div class="card" style="width:100%">
              <div class="card-header">Card 1</div>
              <div class="card-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est, id nesciunt.
                Distinctio aliquid quas error autem minus reprehenderit explicabo voluptatibus fugit. Soluta incidunt
                sequi ducimus reprehenderit, eveniet nam iusto assumenda?</div>
              <div class="card-footer"></div>
            </div>


          </div>
        </div>
      </div>

    </article>
    <!-- PAGE 5 GOOGLE MAP -->
    <article class="page page-single border-grey">
      <div id="map"></div>
    </article>

  </main>
  </div>
  <?php get_footer()?>