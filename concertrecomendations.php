<?php
include 'concerts.php';
ini_set('max_execution_time', 300);

class concerRec{
    private $miconcert_artist_1;
    private $miconcert_artist_2;
    private $miconcert_artist_3;
    private $miconcert_artist_4;
    private $miconcert_artist_5;
    private $miconcert_artist_6;
    private $miconcert_artist_7;
    private $miconcert_artist_13;
    // concerts until here are selected from the user data
    // concerts from here are from the entire database
    private $miconcert_artist_8;
    private $miconcert_artist_9;
    private $miconcert_artist_10;
    private $miconcert_artist_11;
    private $miconcert_artist_12;
    private $miconcert_artist_14;
    private $miconcert_artist_15;
    private $miconcert_artist_16;
    private $miconcert_artist_17;
    private $miconcert_artist_18;

    public function getM1(){
        return $this->miconcert_artist_1;
    }
        
    public function getM2(){
        return $this->miconcert_artist_2;
    }
        
    public function getM3(){
        return $this->miconcert_artist_3;
    }
        
    public function getM4(){
        return $this->miconcert_artist_4;
    }
        
    public function getM5(){
        return $this->miconcert_artist_5;
    }
        
    public function getM6(){
        return $this->miconcert_artist_6;
    }
        
    public function getM7(){
        return $this->miconcert_artist_7;
    }
        
    public function getM8(){
        return $this->miconcert_artist_8;
    }
        
    public function getM9(){
        return $this->miconcert_artist_9;
    }
        
    public function getM10(){
        return $this->miconcert_artist_10;
    }
        
    public function getM11(){
        return $this->miconcert_artist_11;
    }
        
    public function getM12(){
        return $this->miconcert_artist_12;
    }
        
    public function getM13(){
        return $this->miconcert_artist_13;
    }
        
    public function getM14(){
        return $this->miconcert_artist_14;
    }
        
    public function getM15(){
        return $this->miconcert_artist_15;
    }
        
    public function getM16(){
        return $this->miconcert_artist_16;
    }
        
    public function getM17(){
        return $this->miconcert_artist_17;
    }
        
    public function getM18(){
        return $this->miconcert_artist_18;
    }

    public function __construct($email){
        $c1 = new concert();
        $i = 0;
		
		$this->miconcert_artist_1 = $c1->createrecomendations($email);
		
		$this->miconcert_artist_2 = $c1->createrecomendations($email);
		
        while (($this->miconcert_artist_2 == $this->miconcert_artist_1) && $i < 30) {
            $i++;
            $this->miconcert_artist_2 = $c1->createrecomendations($email);
		}
		
        if ($i == 30) {
            $this->miconcert_artist_2 = $c1->createrecomendations2();
            $i = 0;
        }

		$this->miconcert_artist_3 = $c1->createrecomendations($email);
		
        while (($this->miconcert_artist_3 == $this->miconcert_artist_1 || $this->miconcert_artist_3 == $this->miconcert_artist_2) && $i < 30) {
            $i++;
            $this->miconcert_artist_3 = $c1->createrecomendations($email);
		}
		
        if ($i == 30) {
            $this->miconcert_artist_3 = $c1->createrecomendations2();
            $i=0;
        }

		$this->miconcert_artist_4 = $c1->createrecomendations($email);
		
        while (($this->miconcert_artist_4 == $this->miconcert_artist_1 || $this->miconcert_artist_4 == $this->miconcert_artist_2 || $this->miconcert_artist_4 == $this->miconcert_artist_3) && $i < 30) {
            $i++;
            $this->miconcert_artist_4 = $c1->createrecomendations($email);
		}
		
        if ($i == 30) {
            $this->miconcert_artist_4 = $c1->createrecomendations2();
            $i=0;
        }

		$this->miconcert_artist_5 = $c1->createrecomendations($email);
		
        while (($this->miconcert_artist_5 == $this->miconcert_artist_1 || $this->miconcert_artist_5 == $this->miconcert_artist_2 || $this->miconcert_artist_5 == $this->miconcert_artist_3|| $this->miconcert_artist_5 == $this->miconcert_artist_4) && $i < 30) {
            $i++;
            $this->miconcert_artist_5 = $c1->createrecomendations($email);
		}
		
        if ($i == 30) {
            $this->miconcert_artist_5 = $c1->createrecomendations2();
            $i=0;
        }

		$this->miconcert_artist_6 = $c1->createrecomendations($email);
		
        while (($this->miconcert_artist_6 == $this->miconcert_artist_1 || $this->miconcert_artist_6 == $this->miconcert_artist_2 || $this->miconcert_artist_6 == $this->miconcert_artist_3|| $this->miconcert_artist_6 == $this->miconcert_artist_4 || $this->miconcert_artist_6 == $this->miconcert_artist_5) && $i < 30) {
            $i++;
            $this->miconcert_artist_6 = $c1->createrecomendations($email);
		}
		
        if ($i == 30) {
            $this->miconcert_artist_6 = $c1->createrecomendations2();
            $i=0;
        }

		$this->miconcert_artist_7 = $c1->createrecomendations($email);
		
        while (($this->miconcert_artist_7 == $this->miconcert_artist_1 || $this->miconcert_artist_7 == $this->miconcert_artist_2 || $this->miconcert_artist_7 == $this->miconcert_artist_3|| $this->miconcert_artist_7 == $this->miconcert_artist_4 || $this->miconcert_artist_7 == $this->miconcert_artist_5|| $this->miconcert_artist_7 == $this->miconcert_artist_6) && $i < 30) {
            $i++;
            $this->miconcert_artist_7 = $c1->createrecomendations($email);
		}
		
        if ($i == 30) {
            $this->miconcert_artist_7 = $c1->createrecomendations2();
            $i=0;
        }


		$this->miconcert_artist_13 = $c1->createrecomendations($email);
		
        while (($this->miconcert_artist_13 == $this->miconcert_artist_1 || $this->miconcert_artist_13 == $this->miconcert_artist_2 || $this->miconcert_artist_13 == $this->miconcert_artist_3|| $this->miconcert_artist_13 == $this->miconcert_artist_4 || $this->miconcert_artist_13 == $this->miconcert_artist_5|| $this->miconcert_artist_13 == $this->miconcert_artist_6 || $this->miconcert_artist_13 == $this->miconcert_artist_7) && $i < 30) {
            $i++;
            $this->miconcert_artist_13 = $c1->createrecomendations($email);
		}
		
        if ($i == 30) {
            $this->miconcert_artist_13 = $c1->createrecomendations2();
            $i=0;
        }

        $this->miconcert_artist_8 = $c1->createrecomendations2();
        $this->miconcert_artist_9 = $c1->createrecomendations2();
        $this->miconcert_artist_10 = $c1->createrecomendations2();
        $this->miconcert_artist_12 = $c1->createrecomendations2();
        $this->miconcert_artist_11 = $c1->createrecomendations2();
        $this->miconcert_artist_14 = $c1->createrecomendations2();
        $this->miconcert_artist_15 = $c1->createrecomendations2();
        $this->miconcert_artist_16 = $c1->createrecomendations2();
        $this->miconcert_artist_17 = $c1->createrecomendations2();
        $this->miconcert_artist_18 = $c1->createrecomendations2();
	}
	
	public function getImage($concert_num){
		$api_file = fopen("API_KEY_Lastfm.txt", "r");
        $API_KEY = fread($api_file, filesize("API_KEY_Lastfm.txt"));
		fclose($api_file);

		$concert_used = $this->miconcert_artist_1;
		
		switch ($concert_num) {
			case 1:
				$concert_used = $this->miconcert_artist_1;
				break;
			case 2:
				$concert_used = $this->miconcert_artist_2;
				break;
			case 3:
				$concert_used = $this->miconcert_artist_3;
				break;
			case 4:
				$concert_used = $this->miconcert_artist_4;
				break;
			case 5:
				$concert_used = $this->miconcert_artist_5;
				break;
			case 6:
				$concert_used = $this->miconcert_artist_6;
				break;
			case 7:
				$concert_used = $this->miconcert_artist_7;
				break;
			case 8:
				$concert_used = $this->miconcert_artist_8;
				break;
			case 9:
				$concert_used = $this->miconcert_artist_9;
				break;
			case 10:
				$concert_used = $this->miconcert_artist_10;
				break;
			case 11:
				$concert_used = $this->miconcert_artist_11;
				break;
			case 12:
				$concert_used = $this->miconcert_artist_12;
				break;
			case 13:
				$concert_used = $this->miconcert_artist_13;
				break;
			case 14:
				$concert_used = $this->miconcert_artist_14;
				break;
			case 15:
				$concert_used = $this->miconcert_artist_15;
				break;
			case 16:
				$concert_used = $this->miconcert_artist_16;
				break;
			case 17:
				$concert_used = $this->miconcert_artist_17;
				break;
			case 18:
				$concert_used = $this->miconcert_artist_18;
				break;
		}

		$url = "http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist=" . urlencode($concert_used) . "&api_key=" . $API_KEY . "&format=json";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		echo $response["artist"]["image"][4]["#text"];
	}
}
?>