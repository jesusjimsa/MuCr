<?php

class album{
	public $id;
	public $titulo;
	public $artista;
	public $legth;
	public $style;
	public $type;
	public $deluxe;
	public $year;
	public $imagen;

	public function set($id, $titulo, $artista, $length, $style, $type, $deluxe, $year, $imagen){
		$this->id=$id;
		$this->titulo=$titulo;
		$this->artista=$artista;
		$this->length=$length;
		$this->style=$style;
		$this->type=$type;
		$this->year=$year;
		$this->imagen=$imagen;
	}


	public function getID(){
		return $this->id;
	}
	
	public function getTitulo(){
		return $this->titulo;
	}
	
	public function getArtista(){
		return $this->Artista;
	}
	
	public function getLength(){
		return $this->length;
	}
	
	public function getStyle(){
		return $this->style;
	}
	
	public function getType(){
		return $this->type;
	}
	
	public function getDeluxe(){
		return $this->deluxe;
	}
	
	public function getYear(){
		return $this->year;
	}
	
	public function getImage(){
		return $this->imagen;
	}
}




class lista2{
	public $total = 9;
	public $valor0 = 0;
	public $valor1 = 0;
	public $valor2 = 0;
	public $valor3 = 0;
	public $valor4 = 0;
	public $valor5 = 0;
	public $valor6 = 0;
	public $valor7 = 0;
	public $valor8 = 0;
	public $genre;
	public $lista = array();


	public function getAPI($numero, $genre, $search){
		$fmt='json';
		$url = "http://musicbrainz.org/ws/2/release/?query=tag:".urlencode($genre)."&fmt=".$fmt;


		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');
		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);
		
		if ($genre!="artist" and $genre!="lenght") {
			$id1 = $response["releases"][$numero][$search];
		}
		else {
			if ($genre != length) {
				$id1 = $response["releases"][$numero]["artist-credit"]["name"];
			}
			else {
				$id1 = $response["recording"][$numero]["duration"];
			}
		}
		
		return $id1;
	 }

	public function crearalbum($numero, $genre){
		$album=new album;
		$album->set(
			getAPI($numero, $genre, "id"),
			getAPI($numero, $genre, "title"),
			getAPI($numero, $genre, "artist"),
			$genre,
			getAPI($numero, $genre, "status"),
			false,
			getAPI($numero, $genre, "date"),
			"http://coverartarchive.org/release/" . getAPI($numero, $genre, "id") . "/front"
		);

		return $album;
	}

	public function lista2($genre){
		$this->genre = $genre;
		$lista = array(
						crearalbum(0, $genre),
						crearalbum(1, $genre),
						crearalbum(2, $genre),
						crearalbum(3, $genre),
						crearalbum(4, $genre),
						crearalbum(5, $genre),
						crearalbum(6, $genre),
						crearalbum(7, $genre),
						crearalbum(8, $genre)
					);
		return $this;
	}
	
	public function change_album($numero, $genre){
		$valoracumulado = 0;
		switch ($numero){
			case 0:
				$valor0=$valor0+1;
				$valoracumulado=$valor0;
				break;
			case 1:
				$valor1=$valor1+1;
				$valoracumulado=$valor1;
				break;
			case 2:
				$valor2=$valor2+1;
				$valoracumulado=$valor2;
				break;
			case 3:
				$valor3=$valor3+1;
				$valoracumulado=$valor3;
				break;
			case 4:
				$valor4=$valor4+1;
				$valoracumulado=$valor4;
				break;
			case 5:
				$valor5=$valor5+1;
				$valoracumulado=$valor5;
				break;
			case 6:
				$valor6=$valor6+1;
				$valoracumulado=$valor6;
				break;
			case 7:
				$valor7=$valor7+1;
				$valoracumulado=$valor7;
				break;
			case 8:
				$valor8=$valor8+1;
				$valoracumulado=$valor8;
				break;
		}
		
		$calculo=$valoracumulado*$total+$numero;
		$lista[$numero]=crearalbum($calculo, $genre);
	}

	public function addtolove($valor){
		$this->lista[$valor];
		
		//connect to database and update both tables
		include 'connect_db.php';
		
		$delux=0;
		//if($this->lista[$valor].getDeluxe()='true'){$delux=1;}
		$sql_order = "INSERT INTO album(name,artist,length,style,type,deluxe,year) VALUES ('this->lista[$valor].getTitulo()', 'this->lista[$valor].getArtist()','this->lista[$valor].getLength()','this->lista[$valor].getStyle()','this->lista[$valor].getType()','$delux','this->lista[$valor].getYear()' )";
		$conn->query($sql_order);
		$email = $_COOKIE['email'];
		$sql_order2="INSERT INTO U_like_A(user_email,album_name,album_artist) VALUES ('$email','this->lista[$valor].getTitulo()', 'this->lista[$valor].getArtist()')";
		$conn->query($sql_order2);
	}
	 
	public function addtolisten($valor){
		$this->lista[$valor];
		
		//connect to database and update both tables
		include 'connect_db.php';
		
		$delux=0;
		//if($this->lista[$valor].getDeluxe()='true'){$delux=1;}
		$sql_order = "INSERT INTO album(name,artist,length,style,type,deluxe,year) VALUES ('this->lista[$valor].getTitulo()', 'this->lista[$valor].getArtist()','this->lista[$valor].getLength()','this->lista[$valor].getStyle()','this->lista[$valor].getType()','$delux','this->lista[$valor].getYear()' )";
		$conn->query($sql_order);
		$email = $_COOKIE['email'];
		$sql_order2="INSERT INTO U_listen_A(user_email,album_name,album_artist) VALUES ('$email','this->lista[$valor].getTitulo()', 'this->lista[$valor].getArtist()')";
		$conn->query($sql_order2);
	}

	public function love($valor, $genre){
		addtolove($valor);
		change_album($valor, $genre);
	}
	
	public function add($valor, $genre){
		addtolistened($valor);
		change_album($valor, $genre);
	}
	
	public function remove($valor){
		change_album($valor, $genre);
	}

	public function getImageAlbum($valor){
		return lista[$valor].getImage();
	}
}

?>