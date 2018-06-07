<?php
  class Post{
    //db
    private $conn;
    private $table='album';


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

    //get
    public function read(){
      $query='SELECT name,artist,length,style,type,deluxe,year FROM'. $this->table;
      $stmt=$this->conn->prepare($query);
      $stmt->execute();
      return $stmt;
    }

    //get single album

    public function read_single_album(){
      $query='SELECT name,artist,length,style,type,deluxe,year FROM '.$this->table. ' WHERE artist=?';

      $stmt=$this->conn->prepare($query);
      $stmt->bindParam(1,$this->artist);


      $row=Stmt->fetch(PDO::FETCH_ASOOC);

      //set property

      $this->ablumname=$row['name'];
      $this->length=$row['length'];
      $this->style=$row['style'];
      $this->type=$row['type'];
      $this->deluxe=$row['deluxe'];
      $this->year=$row['year'];


    }





    public function createAlbum(){
      $query='INSERT INTO '.$this->table.'
        SET
          name =:albumname,
          artist =:artist,
          length =:length,
          style =:style,
          type =:type,
          deluxe =:deluxe,
          year =:year';

        $stmt=$this->conn->prepare($query);

        //clean Data

        $this->artist=htmlspecialchars($this->artist);
        $this->albumname=htmlspecialchars($this->albumname);
        $this->length=htmlspecialchars($this->length);
        $this->style=htmlspecialchars($this->style);
        $this->type=htmlspecialchars($this->type);
        $this->deluxe=htmlspecialchars($this->deluxe);
        $this->year=htmlspecialchars($this->year);

        $stmt->bindParam('title',$this->title);
        $stmt->bindParam('length',$this->length);
        $stmt->bindParam('style',$this->style);
        $stmt->bindParam('type',$this->type);
        $stmt->bindParam('deluxe',$this->deluxee);
        $stmt->bindParam('year',$this->year);
        $stmt->bindParam('albumane',$this->albuname);

        if(stmt->execute()){
          return true;
        }


        //print error if the if doesnt work
        print("Error: %s.\n",$stmt->error) ;

        return false;

    }





        public function updateAlbum(){
          $query='INSERT INTO '.$this->table.'
            SET
              name =:albumname,
              artist =:artist,
              length =:length,
              style =:style,
              type =:type,
              deluxe =:deluxe,
              year =:year WHERE artist=artist';

            $stmt=$this->conn->prepare($query);

            //clean Data

            $this->artist=htmlspecialchars(strip_tags($this->artist));
            $this->albumname=htmlspecialchars($this->albumname);
            $this->length=htmlspecialchars($this->length);
            $this->style=htmlspecialchars($this->style);
            $this->type=htmlspecialchars($this->type);
            $this->deluxe=htmlspecialchars($this->deluxe);
            $this->year=htmlspecialchars($this->year);

            $stmt->bindParam('title',$this->title);
            $stmt->bindParam('length',$this->length);
            $stmt->bindParam('style',$this->style);
            $stmt->bindParam('type',$this->type);
            $stmt->bindParam('deluxe',$this->deluxee);
            $stmt->bindParam('year',$this->year);
            $stmt->bindParam('albumane',$this->albuname);
            $stmt->bindParam('artist',$this->artist);

            if(stmt->execute()){
              return true;
            }


            //print error if the if doesnt work
            print("Error: %s.\n",$stmt->error) ;

            return false;

        }

        public function deletealbum(){
          $query='DELETE FROM' $this->table .'WHERE artist=artist';

          $stmt=$this->conn->prepare($query);

          $this->artist=htmlspecialchars(strip_tags($this->artist));

          $stmt->bindParam('artist',$this->artist);


          if(stmt->execute()){
            return true;
          }


          //print error if the if doesnt work
          print("Error: %s.\n",$stmt->error) ;

          return false;
        }
  }



 ?>
