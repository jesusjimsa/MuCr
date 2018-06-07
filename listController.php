<?php
include 'controladorAlbumRelacionado.php';
error_reporting(E_ERROR);
ini_set('max_execution_time', 300);

class lista{
	public $topico1 = "";
	public $topico2 = "";
	private $albumV1;
	private $albumV2;
	private $albumV3;
	private $albumV4;
	private $albumV5;
	private $albumV6;
	private $albumV7;

	public function isInsidesql($titulo, $row){
		$max = count($row);
		for ($i = 0; $i < $max; $i++) {
			if ($row[$i][0] == $titulo) {
				return true;
			}
		}

		return false;
	}

	public function isInside($titulo, $row){
		$max = count($row);

		for ($i = 0; $i < $max; $i++){
			if ($row[$i] == $titulo){
					return true;
				}
		}

		return false;
	}


	public function searchrecommendations(&$albumvn,$added, $user){
		include 'php/connect_db.php';

		$api_file = fopen("API_KEY_Lastfm.txt", "r");
		$API_KEY = fread($api_file, filesize("API_KEY_Lastfm.txt"));
		fclose($api_file);

		if(rand(0, 50) < 25){
			$sql_order = "SELECT DISTINCT album_artist FROM U_like_A WHERE '$user' = user_email";
			$result = $conn->query($sql_order);
			$rows = mysqli_fetch_all($result);
		}
		else{
			$sql_order = "SELECT DISTINCT album_artist FROM U_listen_A WHERE '$user' = user_email";
			$result = $conn->query($sql_order);
			$rows = mysqli_fetch_all($result);
		}

		$artista_seleccionado = $rows[rand(0, count($rows) - 1)][0];

		$url = "http://ws.audioscrobbler.com/2.0/?method=artist.getsimilar&artist=" . $artista_seleccionado . "&api_key=" . $API_KEY . "&format=json";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		$similar_artist = $response['similarartists']['artist'][rand(0, count($response['similarartists']['artist']) - 1)]['name'];

		$url = "http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist=" . $similar_artist . "&api_key=" . $API_KEY . "&format=json";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		$titulo_seleccionado = $response["topalbums"]["album"][rand(0, count($response["topalbums"]["album"]) - 1)]["name"];

		array_push($added, $titulo_seleccionado);
		$albumvn->createAlbumByTitle($titulo_seleccionado);
	}

	public function searchtopic2($user){
		include 'php/connect_db.php';

		$sql_order = "SELECT album_artist FROM U_like_A WHERE '$user' = user_email";
		$result = $conn->query($sql_order);

		$row = mysqli_fetch_all($result);

		if (count($row) > 1) {
			$numero = rand(0, count($row) - 1);
			return $row[$numero][0];
		}
		else {
			$sql_order = "SELECT album_artist FROM U_like_A";
			$result = $conn->query($sql_order);

			$row = mysqli_fetch_all($result);
			$numero = rand(0, count($row) - 1);

			return $row[$numero][0];
		}
	}

	public function searchtopic3($user){
		include 'php/connect_db.php';

		$sql_order = "SELECT Genre FROM U_like_A WHERE '$user' = user_email";
		$result = $conn->query($sql_order);
		$row = mysqli_fetch_all($result);

		if (count($row) > 1) {
			$numero = rand(0, count($row) - 1);
			return $row[$numero][0];
		}
		else {
			$sql_order = "SELECT Genre FROM U_like_A";
			$result = $conn->query($sql_order);

			$row = mysqli_fetch_all($result);
			$numero = rand(0, count($row) - 1);

			return $row[$numero][0];
		}
	}


	public function crearlstaB(&$albumvn, &$added, $user){
	  	$albumvn = new album;

		include 'php/connect_db.php';

		$api_file = fopen("API_KEY_Lastfm.txt", "r");
		$API_KEY = fread($api_file, filesize("API_KEY_Lastfm.txt"));
		fclose($api_file);

		if(rand(0, 50) < 25){
			$sql_order = "SELECT DISTINCT album_artist FROM U_like_A WHERE '$user' = user_email";
			$result = $conn->query($sql_order);
			$rows = mysqli_fetch_all($result);
		}
		else{
			$sql_order = "SELECT DISTINCT album_artist FROM U_listen_A WHERE '$user' = user_email";
			$result = $conn->query($sql_order);
			$rows = mysqli_fetch_all($result);
		}

		$artista_seleccionado = $rows[rand(0, count($rows) - 1)][0];

		$url = "http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist=" . $artista_seleccionado . "&api_key=" . $API_KEY . "&format=json";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		$titulo_seleccionado = $response["topalbums"]["album"][rand(0, count($response["topalbums"]["album"]) - 1)]["name"];

		array_push($added, $titulo_seleccionado);    //it is added to not repeat
		$albumvn->createAlbumByTitle($titulo_seleccionado);
	}

	public function __construct($construction, &$added, $user){
		$this->albumV1 = new album;
		$this->albumV2 = new album;
		$this->albumV3 = new album;
		$this->albumV4 = new album;
		$this->albumV5 = new album;
		$this->albumV6 = new album;
		$this->albumV7 = new album;

		if ($construction == "recommendations") {
			while($this->albumV1->getImage() == NULL){ $this->searchrecommendations($this->albumV1, $added, $user); }
			while($this->albumV2->getImage() == NULL){ $this->searchrecommendations($this->albumV2, $added, $user); }
			while($this->albumV3->getImage() == NULL){ $this->searchrecommendations($this->albumV3, $added, $user); }
			while($this->albumV4->getImage() == NULL){ $this->searchrecommendations($this->albumV4, $added, $user); }
			while($this->albumV5->getImage() == NULL){ $this->searchrecommendations($this->albumV5, $added, $user); }
			while($this->albumV6->getImage() == NULL){ $this->searchrecommendations($this->albumV6, $added, $user); }
			while($this->albumV7->getImage() == NULL){ $this->searchrecommendations($this->albumV7, $added, $user); }

		}
		else {
			while($this->albumV1->getImage() == NULL){ $this->crearlstaB($this->albumV1, $added, $user); }
			while($this->albumV2->getImage() == NULL){ $this->crearlstaB($this->albumV2, $added, $user); }
			while($this->albumV3->getImage() == NULL){ $this->crearlstaB($this->albumV3, $added, $user); }
			while($this->albumV4->getImage() == NULL){ $this->crearlstaB($this->albumV4, $added, $user); }
			while($this->albumV5->getImage() == NULL){ $this->crearlstaB($this->albumV5, $added, $user); }
			while($this->albumV6->getImage() == NULL){ $this->crearlstaB($this->albumV6, $added, $user); }
			while($this->albumV7->getImage() == NULL){ $this->crearlstaB($this->albumV7, $added, $user); }
		}
	}

	public function getAlbumV1(){
		return $this->albumV1;
	}

	public function getAlbumV2(){
		return $this->albumV2;
	}

	public function getAlbumV3(){
		return $this->albumV3;
	}

	public function getAlbumV4(){
		return $this->albumV4;
	}

	public function getAlbumV5(){
		return $this->albumV5;
	}

	public function getAlbumV6(){
		return $this->albumV6;
	}

	public function getAlbumV7(){
		return $this->albumV7;
	}

	public function changeV1(){
		$this->crearlstaB($this->$albumV1, $added, $user);
	}

	public function changeV2(){
		$this->crearlstaB($this->$albumV2, $added, $user);
	}

	public function changeV3(){
		$this->crearlstaB($this->$albumV3, $added, $user);
	}

	public function changeV4(){
		$this->crearlstaB($this->$albumV4, $added, $user);
	}

	public function changeV5(){
		$this->crearlstaB($this->$albumV5, $added, $user);
	}

	public function changeV6(){
		$this->crearlstaB($this->$albumV6, $added, $user);
	}

	public function changeV7(){
		$this->crearlstaB($this->$albumV7, $added, $user);
	}
}
