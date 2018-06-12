<?php

class Database{


//the database parameters
private $host='db4free.net';
private $db_name='orfeo_mucr';
private $username='jmrodriguez';
private $password='9uk6vw6e';


//the field to the connection
private $conn;


//DB connect
    public function connect(){
        $this->conn=null;
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

        // Check connection
        if ($this->conn->connect_error) {
        	die("Connection failed: " . $conn->connect_error);
        	echo "Error connecting to database";
        }

      return $this->conn;
    }
}




?>
