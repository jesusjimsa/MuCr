<?php

class album{
  var $id;
  var $titulo;
  var $artista;

  public function getID(){
      return $this->id;
    }
  public function getTitulo(){
    return $this->titulo;
  }
  public function getArtista(){
    return $this->Artista;
  }
  public function set($id,$titulo,$artista){
    $this->id=$id;
    $this->titulo=$titulo;
    $this->artista=$artista;
  }
  public function getImage(){

    $link="http://coverartarchive.org/release/".$this->getID()."/front";
    return $link;
  }

  public function IsEqual($album1){
    if($album1.getID()==$this->getID()){return TRUE;}
    else{return FALSE;}
  }

  public function createAlbumrand($artista1){
      $numer=rand();
      $fmt='json';
      $url = "http://musicbrainz.org/ws/2/release/?query=artist:".urlencode($artista1)."&fmt=".$fmt;

      //get the ID
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');
        $response = curl_exec ($ch);
        curl_close($ch);
        $response = json_decode($response, JSON_FORCE_OBJECT);
        $this->id=$response["releases"][$numer]["id"];
      //get the title
      $fmt='json';
      $url = "http://musicbrainz.org/ws/2/release/?query=tag:".urlencode($genre)."&fmt=".$fmt;

      //get the title
        $this->titulo=$response["releases"][$numer]["title"];

        //get the artist
        $this->artista=$artista1;


    return $this;
  }
  public function createAlbumsearched($artista1,$albumtitle){
      $fmt='json';
      $url = "http://musicbrainz.org/ws/2/release/?query=artist:".urlencode($artista1)."&title=".urlencode($albumtitle)."&fmt=".$fmt;

      //get the ID
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');
        $response = curl_exec ($ch);
        curl_close($ch);
        $response = json_decode($response, JSON_FORCE_OBJECT);
        $this->id=$response["releases"][0]["id"];
      //get the title
      $fmt='json';
      $url = "http://musicbrainz.org/ws/2/release/?query=tag:".urlencode($genre)."&fmt=".$fmt;

      //get the title
        $this->titulo=$response["releases"][0]["title"];

        //get the artist
        $this->artista=$artista1;


    return $this;
  }

}




 ?>
