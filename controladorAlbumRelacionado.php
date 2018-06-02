<?php

class album{
	public $id;
	public $titulo;
	public $artista;
	public $type;
	public $deluxe;

	public function getID(){
		return $this->id;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function getArtista(){
		return $this->artista;
	}

	public function getType(){
		$this->type;
	}

	public function getDeluxe(){
		$this->deluxe;
	}

	public function showTitle(){
		echo $this->titulo;
	}

	public function set($id, $titulo, $artista){
		$this->id = $id;
		$this->titulo = $titulo;
		$this->artista = $artista;
	}

	public function getImage(){
		$link = "http://coverartarchive.org/release/" . $this->getID() . "/front";
		return $link;
	}

	public function IsEqual($album1){
		if ($album1->getID() == $this->getID()) {
			return true;
		}
		else {
			return false;
		}
	}

	public function isDeluxe($album){
		$result = false;

		if(strpos($album, "Deluxe") != false){
			$result = true;
		}

		if(strpos($album, "deluxe") != false){
			$result = true;
		}

		if(strpos($album, "DELUXE") != false){
			$result = true;
		}

		return $result;
	}

	public function createAlbumRand($artista1){
		$fmt = 'json';
		$url = "http://musicbrainz.org/ws/2/release/?query=artist:" . urlencode($artista1) . "&fmt=" . $fmt;

		do{
			//get the ID
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

			$response = curl_exec($ch);
			curl_close($ch);
			$response = json_decode($response, JSON_FORCE_OBJECT);

			$numer = rand(0, count($response["releases"]));
		}while(count($response["releases"]) == 0);

		$this->id = $response["releases"][$numer]["id"];

		//get the title
		$fmt='json';
		$url = "http://musicbrainz.org/ws/2/release/?query=tag:" . urlencode($genre) . "&fmt=" . $fmt;

		//get the title
		$this->titulo = $response["releases"][$numer]["title"];

		//get the artist
		$this->artista = $artista1;

		$this->type = $response["releases"][$numer]["media"][0]["format"];
		$this->deluxe = $this->isDeluxe($response["releases"][$numer]["artist-credit"][0]["artist"]["disambiguation"]);

		return $this;
	}

	public function createAlbumsearched($artista1, $albumtitle){
		$fmt = 'json';
		$url = "http://musicbrainz.org/ws/2/release/?query=artist:" . urlencode($artista1) . "&fmt=".$fmt;

		//get the ID
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		// var_dump($response);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

	 	$i = 0;
		// echo $albumtitle;
		while($response["releases"][$i]["title"] != $albumtitle && $i < count($response["releases"])){
			$i++;
		}

		if($response["releases"][$i]["title"] != $albumtitle){
			$this->id = null;
			$this->titulo = null;
			$this->artista = null;
			$this->type = null;
			$this->deluxe = null;
		}
		else{
			$this->id = $response["releases"][$i]["id"];

			//get the title
			$this->titulo = $response["releases"][$i]["title"];

			//get the artist
			$this->artista = str_replace("_", " ", $artista1);

			$this->type = $response["releases"][$i]["media"][0]["format"];
			$this->deluxe = $this->isDeluxe($response["releases"][$i]["artist-credit"][0]["artist"]["disambiguation"]);
		}

		return $this;
	}






public function addAlbumtoBd(){
	include 'php/connect_db.php';
	$year=$this->getYear();
	$deluxe=$this->getdeluxe();
	$type=$this->getType();
	$artist=$this->getArtista();
	$titulo=$this->getTitulo();
	$sql_order = "INSERT INTO album(name,artist,type,deluxe,year) VALUES ('$titulo', '$artist','$type','$deluxe','$year')";
	$conn->query($sql_order);

}

}

?>
