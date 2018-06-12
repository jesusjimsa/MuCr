<?php
  class Album{
    //db
    private $conn;

    private $artist;
    private $albumname;
    private $length;
    private $style;
    private $type;
    private $deluxe;
    private $year;


    public function __construct($db){
        $this->conn=$db;
    }
    public function construct($name,$artist,$length,$style,$type,$deluxe,$year){
        $this->length=$this->type=$this->style=$this->deluxe=$this->year=NULL;

        $this->artist=$artist;
        $this->albumname=$name;
        $this->length=$length;
        $this->type=$type;
        $this->style=$style;
        $this->deluxe=$deluxe;
        $this->year=$year;


    }

    //get
    public function read(){
      $query='SELECT name,artist,length,style,type,deluxe,year FROM album';
      // $stmt=$this->conn->prepare($query);
      // $stmt->execute();
      // return $stmt;
      $result = mysqli_query($this->conn, $query);
			$rows=mysqli_fetch_all($result);
      return $rows;
    }

    //get single album

    public function read_single_album($artista){
      $query="SELECT name,artist,length,style,type,deluxe,year FROM album ".$artista;
      $result = mysqli_query($this->conn, $query);
      $rows=mysqli_fetch_all($result);
      return $rows;
    }


    public function createAlbum(){
      $talbums=$this->albumname;
      $tartist=$this->artist;
      $tlength=$this->length;
      $tstyle=$this->style;
      $ttype=$this->type;
      $tdeluxe=$this->deluxe;
      $tyear=$this->year;

      $query="INSERT INTO album(name,artist,length,style,type,deluxe,year) VALUES ('$talbums','$tartist','$tlength','$tstyle','$ttype','$tdeluxe','$tyear')";
        return mysqli_query($this->conn, $query);
    }

        public function updateAlbum(){
          $ulength=$this->length;
          $ustyle=$this->style;
          $utype=$this->type;
          $udeluxe=$this->deluxe;
          $uyear=$this->year;
          $ualbumname=$this->albumname;
          $uartist=$this->artist;

          $query="UPDATE album SET length='$ulength',style='$ustyle',type='$utype',deluxe='$udeluxe',year='$uyear' WHERE name='$ualbumname' and artist='$uartist' ";

          return mysqli_query($this->conn, $query);
        }

        public function deletealbum(){
          $dartist=$this->artist;
          $dalbum=$this->albumname;



          $query="DELETE FROM album WHERE artist='$dartist' and name='$dalbum'";
          return mysqli_query($this->conn, $query);
        }
}

         ?>
