<?php
include 'concerts.php';
ini_set('max_execution_time', 300);

class concerRec{
  private $miconcert1;
  private $miconcert2;
  private $miconcert3;
  private $miconcert4;
  private $miconcert5;
  private $miconcert6;
  private $miconcert7;
  private $miconcert13;
  //this up are selected from the user iteration
  //this down are from the iterations of all
  private $miconcert8;
  private $miconcert9;
  private $miconcert10;
  private $miconcert11;
  private $miconcert12;
  private $miconcert14;
  private $miconcert15;
  private $miconcert16;
  private $miconcert17;
  private $miconcert18;

    public function getM1(){return $this->$miconcert1;}
    public function getM2(){return $this->$miconcert2;}
    public function getM3(){return $this->$miconcert3;}
    public function getM4(){return $this->$miconcert4;}
    public function getM5(){return $this->$miconcert5;}
    public function getM6(){return $this->$miconcert6;}
    public function getM7(){return $this->$miconcert7;}
    public function getM8(){return $this->$miconcert8;}
    public function getM9(){return $this->$miconcert9;}
    public function getM10(){return $this->$miconcert10;}
    public function getM11(){return $this->$miconcert11;}
    public function getM12(){return $this->$miconcert12;}
    public function getM13(){return $this->$miconcert13;}
    public function getM14(){return $this->$miconcert14;}
    public function getM15(){return $this->$miconcert15;}
    public function getM16(){return $this->$miconcert16;}
    public function getM17(){return $this->$miconcert17;}
    public function getM18(){return $this->$miconcert18;}



    function __construct($email){
        $c1=new concert();
        $i=0;
       $this->miconcert1=$c1->createrecomendations($email);

       $this->miconcert2=$c1->createrecomendations($email);
       while($this->miconcert2==$this->miconcert1 || $i<50){$i++;$this->miconcert2=$c1->createrecomendations($email);}
       if($i==50){$this->miconcert2=$c1->createrecomendations2();$i=0;}

       $this->miconcert2=$c1->createrecomendations($email);
       while($this->miconcert3==$this->miconcert1|| $this->miconcert3==$this->miconcert2 || $i<50){$i++;$this->miconcert3=$c1->createrecomendations($email);}
       if($i==50){$this->miconcert3=$c1->createrecomendations2();$i=0;}

       $this->miconcert4=$c1->createrecomendations($email);
       while($this->miconcert4==$this->miconcert1|| $this->miconcert4==$this->miconcert2||$this->miconcert4==$this->miconcert3 || $i<50){$i++;$this->miconcert4=$c1->createrecomendations($email);}
       if($i==50){$this->miconcert4=$c1->createrecomendations2();$i=0;}

       $this->miconcert5=$c1->createrecomendations($email);
       while($this->miconcert5==$this->miconcert1|| $this->miconcert5==$this->miconcert2||$this->miconcert5==$this->miconcert3|| $this->miconcert5==$this->miconcert4 || $i<50){$i++;$this->miconcert5=$c1->createrecomendations($email);}
       if($i==50){$this->miconcert5=$c1->createrecomendations2();$i=0;}

       $this->miconcert6=$c1->createrecomendations($email);
       while($this->miconcert6==$this->miconcert1|| $this->miconcert6==$this->miconcert2||$this->miconcert6==$this->miconcert3|| $this->miconcert6==$this->miconcert4 || $this->miconcert6==$this->miconcert5 || $i<50){$i++;$this->miconcert6=$c1->createrecomendations($email);}
       if($i==50){$this->miconcert6=$c1->createrecomendations2();$i=0;}

       $this->miconcert7=$c1->createrecomendations($email);
       while($this->miconcert7==$this->miconcert1|| $this->miconcert7==$this->miconcert2||$this->miconcert7==$this->miconcert3|| $this->miconcert7==$this->miconcert4 || $this->miconcert7==$this->miconcert5|| $this->miconcert7==$this->miconcert6 || $i<50){$i++;$this->miconcert7=$c1->createrecomendations($email);}
       if($i==50){$this->miconcert7=$c1->createrecomendations2();$i=0;}


       $this->miconcert13=$c1->createrecomendations($email);
       while($this->miconcert13==$this->miconcert1|| $this->miconcert13==$this->miconcert2||$this->miconcert13==$this->miconcert3|| $this->miconcert13==$this->miconcert4 || $this->miconcert13==$this->miconcert5|| $this->miconcert13==$this->miconcert6 || $this->miconcert13==$this->miconcert7 || $i<50){$i++;$this->miconcert13=$c1->createrecomendations($email);}
       if($i==50){$this->miconcert13=$c1->createrecomendations2();$i=0;}


       $this->miconcert8=$c1->createrecomendations2();
       $this->miconcert9=$c1->createrecomendations2();
       $this->miconcert10=$c1->createrecomendations2();
       $this->miconcert12=$c1->createrecomendations2();
       $this->miconcert11=$c1->createrecomendations2();
       $this->miconcert14=$c1->createrecomendations2();
       $this->miconcert15=$c1->createrecomendations2();
       $this->miconcert16=$c1->createrecomendations2();
       $this->miconcert17=$c1->createrecomendations2();
       $this->miconcert18=$c1->createrecomendations2();
    }

}


?>
