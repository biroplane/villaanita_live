<a name="news"></a>
<article class="page page-single border-grey">
  <a name="news"></a>
  <div class="container-fluid">

    <div class="row ">
      <div class="col-12 news-bg d-flex align-items-center text-center w-100">
        <h1 class="custom-big-text font-weight-bold text-white text-uppercase">News &amp; Eventi</h1>
      </div>
    </div>
  </div>
  <div class="container">

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