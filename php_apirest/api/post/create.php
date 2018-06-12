<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');



include_once '../../config/Database.php';
include_once '../../models/albums.php';

$database=new Database();
$db=$database->connect();
$albumNew=new album($db);


$data=json_decode(file_get_contents('php://input'),true);
//var_dump(file_get_contents("php://input"));
$albumNew->construct($data["albumname"],$data["artist"],$data["length"], $data["style"],$data["type"],$data["deluxe"],$data["year"]);

if($albumNew->createAlbum()){
echo json_encode(
  array('message'=>'Album create')
);

}else{
  echo json_encode(
    array('message'=>'Album not create')
  );
}

 ?>
