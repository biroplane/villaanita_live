<?php get_header()?>
<div id="app" class="inner">
  <?php require(__DIR__.'/src/components/navbar.php')?>

  <main class="border-grey">

    <?php while ( have_posts() ) :
    the_post();
?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="single-title <?=strpos('Medical Care',get_the_title())>-1 ? 'medcare':''?>">

            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-12"><?php the_content( ); ?></div>
      </div>
    </div>
    <?php

    endwhile; // End of the loop.

    ?>
  </main>
</div>
<?php get_footer()?>