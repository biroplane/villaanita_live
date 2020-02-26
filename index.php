<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php get_header()?>


<div id="app">
  <?php require(__DIR__.'/src/components/navbar.php')?>
  <?php require(__DIR__.'/src/components/main.php')?>
  <?php require(__DIR__.'/src/components/struttura.php')?>
  <?php require(__DIR__.'/src/components/medicalcare.php')?>
  <?php require(__DIR__.'/src/components/ricerca.php')?>
  <?php require(__DIR__.'/src/components/news.php')?>


</div>

<?php get_footer()?>