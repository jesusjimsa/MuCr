<?php
include "controladorAlbumRelacionado.php";
			$artist1 = $_GET['artist'];
			$artist1 = str_replace("_"," ",$artist1);
			$artist1 = str_replace("come","'",$artist1);

			// echo $artist1;
		?>
<?php
					$album_name = $_GET['album'];
					$album_name = str_replace("_", " ", $album_name);
					$albumA0 = new album;
					
					$albumA0->createAlbumsearched($artist1, $album_name);
// var_dump($album0);
					// echo $album0->showTitle();
				?>
<?php
				$albumA1 = new album;
				$albumA1->createAlbumRand($artist1);
				// var_dump($albumA1);

				while($albumA1->IsEqual($albumA0)){
					$albumA1->createAlbumRand($artist1);
				}
				
				//echo $albumA1.getImage();
				$albumA2 = new album;
				$albumA2->createAlbumRand($artist1);
				
				
				while($albumA2->IsEqual($albumA0) || $albumA2->IsEqual($albumA1)){
					$albumA2->createAlbumRand($artist1);
				}
				var_dump($albumA2);
				//	echo $albumA2->getImage();
				$albumA3 = new album;
				$albumA3->createAlbumRand($artist1);
				
				while($albumA3->IsEqual($albumA0) || $albumA3->IsEqual($albumA1) || $albumA3->IsEqual($albumA2)){
					$albumA3->createAlbumRand($artist1);
				}
				
				//echo $albumA3->getImage();
				$albumA4 = new album;
				$albumA4->createAlbumRand($artist1);
				
				while($albumA4->IsEqual($albumA0) || $albumA4->IsEqual($albumA1) || $albumA4->IsEqual($albumA2)|| $albumA4->IsEqual($albumA3)){
					$albumA4->createAlbumRand($artist1);
				}
				
				//echo $albumA3->getImage();
				$albumA5 = new album;
				$albumA5->createAlbumRand($artist1);
				
				while($albumA5->IsEqual($albumA0) || $albumA5->IsEqual($albumA1) || $albumA5->IsEqual($albumA2)|| $albumA5->IsEqual($albumA3)|| $albumA5->IsEqual($albumA4)){
					$albumA5->createAlbumRand($artist1);
				}
				
				//echo $albumA3->getImage();
				$albumA6 = new album;
				$albumA6->createAlbumRand($artist1);
				
				while($albumA6->IsEqual($albumA0) || $albumA6->IsEqual($albumA1) || $albumA6->IsEqual($albumA2)|| $albumA6->IsEqual($albumA3)|| $albumA6->IsEqual($albumA4)|| $albumA6->IsEqual($albumA5)){
					$albumA6->createAlbumRand($artist1);
				}
				
				//echo $albumA3->getImage();
				$albumA7 = new album;
				$albumA7->createAlbumRand($artist1);
				
				while($albumA7->IsEqual($albumA0) || $albumA7->IsEqual($albumA1) || $albumA7->IsEqual($albumA2)|| $albumA7->IsEqual($albumA3)|| $albumA7->IsEqual($albumA4)|| $albumA7->IsEqual($albumA5)|| $albumA7->IsEqual($albumA6)){
					$albumA7->createAlbumRand($artist1);
				}
				
				//echo $albumA3->getImage();
		 ?>