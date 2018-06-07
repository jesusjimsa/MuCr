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
//post $query
$result=$post->read();
$num=$result->rowCount();

//check if anypost
if($num>0){
  $posts_arr=array();
  $posts_arr['data']=array();

  while($row=$result->fetch(PDO::FETCH_ASOOC)){
      extract($row);
      $album_item=array(
          'artist'=>$artist,
          'title'=>$albumname,
          'length'=>$length,
          'style'=>$style,
          'type'=>$type,
          'deluxe'=>$deluxe,
          'year'=>$year
      );
      //push to data
        array_push($posts_arr['data'],$album_item);
  }
  //TURN TO json &outpout
    echo json_encode($posts_arr);
}else{
  //NO POSTs
echo json_encode(array('message'=>'No Posts Found'));

}

?>
