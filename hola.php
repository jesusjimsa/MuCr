<?php
  	include 'listController.php';


  	$added=array();
 	$lista1 = new lista("foryou",$added,"rodrigranada97@gmail.com");
  	// echo $lista1->searchtopic2("rodrigranada97@gmail.com");
  	var_dump($lista1->getAlbumV1());

  ?>
