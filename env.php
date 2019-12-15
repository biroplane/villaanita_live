<?php


$json = file(__DIR__.'/.env',FILE_SKIP_EMPTY_LINES);

foreach($json as $v){
  putenv($v);
}
//$vars = json_decode($json,true);
// $vars = [
//   "GOOGLE_KEY" => '',
//   "HOME_JUMBOTRON"=>346,
//   "HOME_MISSION" => 370,
//   "HOME_GARDEN" => 343,
//   "HOME_STRUCT" => 340,
//   "RESEARCH" => 367
// ];