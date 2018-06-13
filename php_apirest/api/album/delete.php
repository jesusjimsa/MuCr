<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods');



include_once '../../config/Database.php';
include_once '../../models/albums.php';


//instantiate DB & conncet


$database=new Database();
$db=$database->connect();



//instatiate post object

$salbum=new album($db);


//get the Data

$data=json_decode(file_get_contents("php://input"),true);

$salbum->construct($data["title"],$data["artist"],null, null,null,null,null);

if($salbum->deletealbum()){
echo json_encode(
  array('message'=>'Album delete')
);

}else{
  echo json_encode(
    array('message'=>'Album not deleted')
  );
}

 ?>
