  <nav class="nav navbar navbar-expand-md fixed-top <?= is_home() ? 'homenav':'navbar-light bg-light'?>">
    <div class="container">

      <a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
        <img src="<?=get_template_directory_uri(  )?>/src/assets/img/logo.png" height="50"
          alt="<?php bloginfo( 'name' )?>"></a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigazione"
        aria-controls="navigazione" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-iconz"><i class="material-icons">menu</i></span>
      </button>
      <?php
 wp_nav_menu( array(
 'menu' => get_post_meta( $post->ID, 'transparent_menu', true),

 'depth' => 2,
 'container' => 'div',
 'container_class' => 'collapse navbar-collapse',
 'container_id' => 'navigazione',
 'menu_class' => 'navbar-nav mr-auto',
 'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
 'walker' => new wp_bootstrap_navwalker())
 );
 ?>
    </div>
  </nav>