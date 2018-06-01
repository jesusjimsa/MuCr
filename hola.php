<html>
<body>
	<p>
	<?php
	include "controladorAlbumRelacionado.php";
	$albumA0=new album;
	$albumA0->createAlbumsearched("madonna", "MDNA");
	?></p>
<img src="
<?php

echo $albumA0->getImage();
		 ?>">

<p><?php echo $albumA0->getTitulo();?></p>
</body>
</html>
