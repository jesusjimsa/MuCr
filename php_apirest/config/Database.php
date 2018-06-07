<?php

class Database{

private $host='localhost';
private $db_name='orfeo_mucr';
private $username='root';
private $password='';
private $conn;


//DB connect
public function connect(){
  $this->conn=null;

  try{
    $this->conn=new PDO('mysql:host=' .$this->host.';dbname='.$this->db_name,
    $this->username, $this->password);

    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }catch(PDOException $e){
    echo 'connecion Error: '.$e->getMessage();
  }
  return $this->conn;
}
}




?>
