<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods');



include_once '../../config/Database.php';
include_once '../../models/post.php';


//instantiate DB & conncet


$database=new Database();
$db=$database->connect();



//instatiate post object

$post=new Post($db);


//get the Data

$data=json_decode(file_get_contents("php://input"));



$post->albumname=$data->albumname;
$post->artist=$data->artist;
$post->length=$data->length;
$post->type=$data->type;
$post->deluxe=$data->deluxe;
$post->year=$data->year;

if($post->update()){
echo json_encode(
  array('message'=>'Album update')
);

}else{
  echo json_encode(
    array('message'=>'Album not created')
  );
}

 ?>
