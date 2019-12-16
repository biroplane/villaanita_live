<?php

include 'autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= get_bloginfo( 'name')?></title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="<?= get_template_directory_uri( )?>/dist/css/main.css">
  <?php wp_head(); ?>
</head>

<body>
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