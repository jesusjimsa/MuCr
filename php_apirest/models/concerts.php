<?php
class Concert{
	// db
	private $conn;

	private $artist;
	private $date;
	private $city;
	private $user_email;
	
	public function __construct($db){
		$this->conn = $db;
	}

	public function construct($artist, $date, $city, $user_email){
		$this->city = $this->artist = $this->user_email = $this->date = null;
		$this->artist = $artist;
		$this->date = $date;
		$this->city = $city;
		$this->user_email = $user_email;
	}

	// get
	public function read(){
		$query = 'SELECT user_email, concert_artist, concert_date, concert_city FROM U_attended_C';

		$result = mysqli_query($this->conn, $query);
		$rows = mysqli_fetch_all($result);

		return $rows;
	}

	// get single concert
	public function read_single_concert($search){
		$query = "SELECT user_email, concert_artist, concert_date, concert_city FROM U_attended_C " . $search;

		$result = mysqli_query($this->conn, $query);
		$rows = mysqli_fetch_all($result);

		return $rows;
	}

	public function createConcert(){
		$tdate = $this->date;
		$tartist = $this->artist;
		$tcity = $this->city;
		$temail = $this->user_email;

		$query = "INSERT INTO concert(user_email, concert_artist, concert_date, concert_city) VALUES ('$tartist', '$tdate', '$tcity', '$temail')";

		return mysqli_query($this->conn, $query);
	}

	public function updateConcert(){
		$ucity = $this->city;
		$uemail = $this->user_email;
		$udate = $this->date;
		$uartist = $this->artist;

		$query = "UPDATE concert SET user_email = '$uemail' WHERE concert_city = '$ucity' and concert_date = '$udate' and concert_artist = '$uartist' ";

		return mysqli_query($this->conn, $query);
	}

	public function deleteConcert(){
		$dartist = $this->artist;
		$ddate = $this->date;
		$dcity = $this->city;

		$query = "DELETE FROM U_attended_C WHERE concert_artist = '$dartist' and concert_date = '$ddate' and concert_city = '$dcity'";

		return mysqli_query($this->conn, $query);
	}
  }
