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
  <!-- <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="446c1e0f-e662-46e6-895f-3572fee9f028"
    data-blockingmode="auto" type="text/javascript"></script> -->
  <?php wp_head(); ?>

</head>

<body>