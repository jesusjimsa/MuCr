<?php

class album{
	private $API_KEY;
	private $id;
	private $titulo;
	private $artista;
	private $type;
	private $deluxe;
	private $year;
	private $genres;

	function __construct(){
		$api_file = fopen("API_KEY.txt", "r");
		$this->API_KEY = fread($api_file, filesize("API_KEY.txt"));
		fclose($api_file);
	}

	function getApiKey(){
		return $this->API_KEY;
	}

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
			return $this->type;
	}
	public function getGenres(){
			return $this->genres;
	}
	public function getYear(){
		return $this->year;

	}

	public function getDeluxe(){
		return $this->deluxe;
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
		$link = "http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=" . $this->API_KEY . "&artist=" . $this->artista . "&album=" . $this->titulo . "&format=json";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		$image_link = $response["album"]["image"][4]["#text"];

		return $image_link;
	}

	public function IsEqual($album1){
		if ($album1->getID() == $this->getID()) {
			return true;
		}
		else {
			return false;
		}
	}

	public function addAlbumtoBd(){
		include 'php/connect_db.php';
		$year = $this->getYear();

		$deluxe = $this->getdeluxe();
		$type = $this->getType();
		$artist = $this->getArtista();
		$titulo = $this->getTitulo();

		$sql_order = "INSERT INTO album(name,artist,type,deluxe,year) VALUES ('$titulo', '$artist','$type','$deluxe','$year')";
		$conn->query($sql_order);
	}

	public function isDeluxe($album){
		$result = 0;

		if(strpos($album, "Deluxe") != false){
			$result = 1;
		}

		if(strpos($album, "deluxe") != false){
			$result = 1;
		}

		if(strpos($album, "DELUXE") != false){
			$result = 1;
		}

		return $result;
	}

	public function isContained($var1,$var2){
		if(strpos($var1, $var2) !== false){return true;}
		else{return false;}
	}


	public function setGenress($listas){
			$tagss="";
			$style=array("alternative","punk","rock","blues","classical","country","folk","dance","electronic","easy","gospel","religious","rap","holiday","instrumental","jazz","latin","metal","moods","pop","rnb","soundtrack","world");
			for($i=0;$i<4;$i++){

				//var_dump($selected);
					//echo $listas[$i]["name"];
					if($listas[$i]["name"]==="60s"){$tagss.="60s"."-";}
						else{
								if($listas[$i]["name"]==="70s"){$tagss.="70s"."-";}
								else{
										if($listas[$i]["name"]==="80s"){$tagss.="80s"."-";}
										else{
												if($listas[$i]["name"]==="90s"){$tagss.="90s"."-";}
												else{
														foreach($style as $styleSelected){
															if($this->isContained($listas[$i]["name"], $styleSelected)){
																	$tagss.=$styleSelected."-";
															}
														}
													}
											}
										}
									}
						}
			if($tagss===""){
				$tagss="Other";
			}
			return $tagss;
	}




	public function createAlbumRand($artista1){
		$url = "http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist=" . $artista1 . "&api_key=" . $this->API_KEY . "&format=json";

		//get the ID
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		$numer = rand(0, count($response["topalbums"]["album"]));

		$this->id = $response["topalbums"]["album"][$numer]["mbid"];

		//get the title
		$this->titulo = $response["topalbums"]["album"][$numer]["name"];

		//get the artist
		$this->artista = $response["topalbums"]["album"][$numer]["artist"]["name"];

		$this->genres = $this->setGenress($response["album"]["tags"]["tag"]);
		//$this->type = $response["releases"][$numer]["media"][0]["format"];
		//$this->deluxe = 0;//$this->isDeluxe($response["releases"][$numer]["artist-credit"][0]["artist"]["disambiguation"]);
		//$this->year = substr($response["releases"][$numer]["release-events"][0]["date"],0,4);
		$this->addAlbumtoBd();

		return $this;
	}

	public function createAlbumsearched($artista1, $albumtitle){
		$url = "http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=" . $this->API_KEY . "&artist=" . urlencode($artista1) . "&album=" . urlencode($albumtitle) . "&format=json";

		//get the ID
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		// var_dump($response);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		$this->id = $response["album"]["mbid"];

		//get the title
		$this->titulo = $response["album"]["name"];

		//get the artist
		$this->artista = $response["album"]["artist"];
		$this->genres=$this->setGenress($response["album"]["tags"]["tag"]);

		// $this->type = $response["releases"][$i]["media"][0]["format"];
		// $this->deluxe =0; //$this->isDeluxe($response["releases"][$i]["artist-credit"][0]["artist"]["disambiguation"]);
		// $this->year=substr($response["releases"][$i]["release-events"][0]["date"],0,4);
		$this->addAlbumtoBd();

		return $this;
	}







}

?>
