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

$albums=new Album($db);

$albumN2="";
//get
if(isset($_GET['artist'])){
  $albumN1=isset($_GET['artist'])? $_GET['artist']:die();
  $albumN2="WHERE artist= '$albumN1'";
}else{
    if(isset($_GET['name'])){
      $albumN1=isset($_GET['name'])? $_GET['name']:die();
      $albumN2="WHERE name= '$albumN1'";
    }else{
      if(isset($_GET['length'])){
            $albumN1=isset($_GET['length'])? $_GET['length']:die();
            $albumN2="WHERE length= '$albumN1' ";
      }else{
        if(isset($_GET['style'])){
              $albumN1=isset($_GET['style'])? $_GET['style']:die();
              $albumN2="WHERE style= '$albumN1' ";
        }else{
          if(isset($_GET['type'])){
                $albumN1=isset($_GET['type'])? $_GET['type']:die();
                $albumN2="WHERE type= '$albumN1' ";
          }else{
            if(isset($_GET['deluxe'])){
                  $albumN1=isset($_GET['deluxe'])? $_GET['deluxe']:die();
                  $albumN2="WHERE deluxe= '$albumN1' ";
            }else{
                if(isset($_GET['year'])){
                      $albumN1=isset($_GET['year'])? $_GET['year']:die();
                      $albumN2="WHERE year= '$albumN1' ";
              }
            }
          }
        }
      }
    }
  }  



//get albumname
$result=$albums->read_single_album($albumN2);
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

//
// $post_arr= array(
//   'title'=>$posr->albumname,
//   'length'=>$posr->length,
//   'style'=>$posr->style,
//   'type'=>$posr->type,
//   'deluxe'=>$posr->deluxe,
//   'year'=>$posr->year
// );

//print an array
//print_r(json_encode($post_arr));
