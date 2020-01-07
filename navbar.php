<?php $main  = home_menu(); ?>

<nav class="navbar navbar-expand-md bg-light fixed-top ">
  <a class="navbar-brand" href="<?=get_home_url(  )?>"><img
      src="<?=get_template_directory_uri(  )?>/src/assets/img/logo.png" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <?php foreach($main as $menu) {?>
      <li class="nav-item"><a class="nav-link" href="<?=$menu->url?>"><?=$menu->title ?></a></li>
      <?php } ?>

    </ul>

  </div>
</nav>