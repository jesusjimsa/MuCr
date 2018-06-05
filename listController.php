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

        for ($i = 0; $i < $max; $i++) {
            if ($row[$i] == $titulo) {
                return true;
            }
        }

        return false;
    }


    public function searchrecommendations(&$albumvn, $added, $user){
        include 'php/connect_db.php';

        $sql_order = "SELECT album_name FROM U_like_A WHERE '$user' = user_email";
        $result = $conn->query($sql_order);
        $albumlikes = mysqli_fetch_all($result);

        $sql_order = "SELECT album_name FROM U_listen_A WHERE '$user' = user_email";
        $result = $conn->query($sql_order);
        $albumlisten = mysqli_fetch_all($result);

        //  get the albumlistened and liked
        $sql_order = "SELECT album_name, COUNT(*) FROM U_like_A GROUP BY(album_name) ";
        $result = $conn->query($sql_order);

        $row = mysqli_fetch_all($result);

        $max = count($row);
        $min = 0;
        if (count($row) > 50) {
            $max=50;
        }
        
        $i = 0;
        
        do {
            $seleccion = rand($min, $max);
            $titulo_seleccionado = $row[$seleccion][0];
            
            if ($i > 30) {
                break;
            }
        } while ($this->isInsidesql($titulo_seleccionado, $albumlikes) || $this->isInsidesql($titulo_seleccionado, $albumlisten) || $this->isInsidesql($titulo_seleccionado, $added));

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


    public function crearlstaB(&$albumseleccionado, &$added, $user){
        $alb = new album;

        if ($this->topico1 == "recomendations") {
            $this->searchrecommendations($albumseleccionado, $added, $user);
        }
        else {   //primero vamos a guardar la lista de los albumes que ya ha escuchado y que le ha dado a me gusta
            include 'php/connect_db.php';

            $sql_order = "SELECT album_name FROM U_like_A WHERE '$user' = user_email";
            $result = $conn->query($sql_order);
            $albumlikes = mysqli_fetch_all($result);

            $sql_order = "SELECT album_name FROM U_listen_A WHERE '$user' = user_email";
            $result = $conn->query($sql_order);
            $albumlisten = mysqli_fetch_all($result);
            
            // I have collected them
            $i = 0;
            $titulo_seleccionado="";

            do {
                $i++;

                if ($this->topico1 == "foryou") {
                    $albumseleccionado->createAlbumRand($this->topico2);
                    $titulo_seleccionado = ($albumseleccionado)->getTitulo();
                }
                else {
                    $mytag = substr($this->topico2, 0, strpos($this->topico2, "-"));
                    $i = 30;

                    $albumseleccionado = $albumseleccionado->createAlbumRandByTag($mytag);
                    $titulo_seleccionado = ($albumseleccionado)->getTitulo();
                }
                
                if ($i == 30) {
                    break;
                }
            } while ($this->isInsidesql($titulo_seleccionado, $albumlikes) || $this->isInsidesql($titulo_seleccionado, $albumlisten) || $this->isInsidesql($titulo_seleccionado, $added));

            if ($i == 30) {
                $i = 0;

                if ($this->topico1 == "foryou") {
                    $this->topico2 = $this->searchtopic2($user);
                }
                else {
                    $this->topico2 = $this->searchtopic3($user);
                }
            }

            array_push($added, $titulo_seleccionado);    //it is added to not repeat
        }
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
            $this->topico1 = $this->topico2 = "recomendations";
            while ($this->albumV1->getImage() == null) {
                $this->searchrecommendations($this->albumV1, $added, $user);
            }
            
            while ($this->albumV2->getImage() == null) {
                $this->searchrecommendations($this->albumV2, $added, $user);
            }
            
            while ($this->albumV3->getImage() == null) {
                $this->searchrecommendations($this->albumV3, $added, $user);
            }
            
            while ($this->albumV4->getImage() == null) {
                $this->searchrecommendations($this->albumV4, $added, $user);
            }
            
            while ($this->albumV5->getImage() == null) {
                $this->searchrecommendations($this->albumV5, $added, $user);
            }
            
            while ($this->albumV6->getImage() == null) {
                $this->searchrecommendations($this->albumV6, $added, $user);
            }
            
            while ($this->albumV7->getImage() == null) {
                $this->searchrecommendations($this->albumV7, $added, $user);
            }
        }
        else {
            if ($construction == "foryou") {
                $this->topico1 = "foryou";
                $this->topico2 = $this->searchtopic2($user);

                while ($this->albumV1->getImage() == null) {
                    $this->crearlstaB($this->albumV1, $added, $user);
                }

                while ($this->albumV2->getImage() == null) {
                    $this->crearlstaB($this->albumV2, $added, $user);
                }

                while ($this->albumV3->getImage() == null) {
                    $this->crearlstaB($this->albumV3, $added, $user);
                }

                while ($this->albumV4->getImage() == null) {
                    $this->crearlstaB($this->albumV4, $added, $user);
                }

                while ($this->albumV5->getImage() == null) {
                    $this->crearlstaB($this->albumV5, $added, $user);
                }

                while ($this->albumV6->getImage() == null) {
                    $this->crearlstaB($this->albumV6, $added, $user);
                }

                while ($this->albumV7->getImage() == null) {
                    $this->crearlstaB($this->albumV7, $added, $user);
                }
            }
            else {
                $this->topico1 = "artistvalored";
                $this->topico2 = $this->searchtopic3($user);

                while ($this->albumV1->getImage() == null) {
                    $this->crearlstaB($this->albumV1, $added, $user);
                }

                while ($this->albumV2->getImage() == null) {
                    $this->crearlstaB($this->albumV2, $added, $user);
                }

                while ($this->albumV3->getImage() == null) {
                    $this->crearlstaB($this->albumV3, $added, $user);
                }

                while ($this->albumV4->getImage() == null) {
                    $this->crearlstaB($this->albumV4, $added, $user);
                }

                while ($this->albumV5->getImage() == null) {
                    $this->crearlstaB($this->albumV5, $added, $user);
                }

                while ($this->albumV6->getImage() == null) {
                    $this->crearlstaB($this->albumV6, $added, $user);
                }

                while ($this->albumV7->getImage() == null) {
                    $this->crearlstaB($this->albumV7, $added, $user);
                }
            }
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
