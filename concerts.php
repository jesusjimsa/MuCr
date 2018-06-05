<?php

class concert{
  private $artista;
  private $fecha;
  private $city;
  private $country;
  private $API_KEY;
  private $API_KEY2;

  function __construct(){
		$api_file = fopen("API_KEY.txt", "r");
		$this->API_KEY = fread($api_file, filesize("API_KEY.txt"));
		fclose($api_file);

    $api_file2 = fopen("API_KEY_2.txt", "r");
		$this->API_KEY2 = fread($api_file2, filesize("API_KEY_2.txt"));
		fclose($api_file2);

	}

  public function getArtist(){
    return $this->artista;
  }
  public function getfecha(){
    return $this->fecha;
  }

  public function createrecomendations($email){
    $artistas=array();
    include 'php/connect_db.php';
    $sql="SELECT album_artist,user_email from U_like_A WHERE '$email'=user_email";
    $result = mysqli_query($conn, $sql);
  	$row = mysqli_fetch_all($result);
    //var_dump($row);
    for($i=0;$i<count($row);$i++){
      array_push($artistas,$row[$i][0]);
    }

    $sql="SELECT concert_artist,user_email from U_attended_C WHERE '$email'=user_email";
    $result2 = mysqli_query($conn, $sql);
  	$row2 = mysqli_fetch_all($result2);
    //var_dump($row);
    for($i=0;$i<count($row2);$i++){
      array_push($artistas,$row2[$i][0]);
    }

    $numer=rand(0,count($artistas)-1);
    return $artistas[$numer];
  }
  public function createrecomendations2(){
    $artistas=array();
    include 'php/connect_db.php';
    $sql="SELECT album_artist from U_like_A";
    $result = mysqli_query($conn, $sql);
  	$row = mysqli_fetch_all($result);
    //var_dump($row);
    for($i=0;$i<count($row);$i++){
      array_push($artistas,$row[$i][0]);
    }
    $sql="SELECT concert_artist from U_attended_C";
    $result2 = mysqli_query($conn, $sql);
  	$row2 = mysqli_fetch_all($result2);
    //var_dump($row);
    for($i=0;$i<count($row2);$i++){
      array_push($artistas,$row2[$i][0]);
    }

    $numer=rand(0,count($artistas));
    return $artistas[$numer];
  }



}


 ?>
