<?php
//header
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/post.php';


//instantiate DB & conncet


$database=new Database();
$db=$database->connect();



//instatiate post object

$post=new Post($db);

//get

$post->albumname=isset($_GET['artist'])? $_GET['asrtist']:die();

//get albumname
$post->read_single_album();

$post_arr= array(
  'title'=>$posr->albumname,
  'length'=>$posr->length,
  'style'=>$posr->style,
  'type'=>$posr->type,
  'deluxe'=>$posr->deluxe,
  'year'=>$posr->year
);

//print an array
print_r(json_encode($post_arr));
