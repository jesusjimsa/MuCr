<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

header('Access-Control-Allow-Methods: DELETE');
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




$post->artist=$data->artist;


if($post->delete()){
echo json_encode(
  array('message'=>'Album delete')
);

}else{
  echo json_encode(
    array('message'=>'Album not deleted')
  );
}

 ?>
