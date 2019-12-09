<?php


$json = file_get_contents(__DIR__.'/env.json');
$vars = json_decode($json,true);
// $vars = [
//   "GOOGLE_KEY" => '',
//   "HOME_JUMBOTRON"=>346,
//   "HOME_MISSION" => 370,
//   "HOME_GARDEN" => 343,
//   "HOME_STRUCT" => 340,
//   "RESEARCH" => 367
// ];

foreach($vars as $k=>$v){

  putenv("$k=$v");
}