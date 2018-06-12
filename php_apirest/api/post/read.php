<?php
//header
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/albums.php';


//instantiate DB & conncet


$database=new Database();
$db=$database->connect();



//instatiate post object

$post=new Album($db);
//post $query
$result=$post->read();
$num=count($result);

//check if anypost
if($num>0){
  $albums=array();
  $total=0;

  while($total<$num){
    $albums[$total]=array();

      $album_item=array(
          'name'=>$result[$total][0],
          'artist'=>$result[$total][1],
          'length'=>$result[$total][2],
          'style'=>$result[$total][3],
          'type'=>$result[$total][4],
          'deluxe'=>$result[$total][5],
          'year'=>$result[$total][6]
      );
      $albums[$total]=$album_item;
      $total++;

  }
  //TURN TO json &outpout
    echo json_encode($albums);
}else{
  //NO POSTs
echo json_encode(array('message'=>'No Posts Found'));

}

?>
