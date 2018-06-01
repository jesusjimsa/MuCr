<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>MuCr - Collection</title>
	<link rel="stylesheet" href="MuCr.css">
	<link rel="shortcut icon" href="img/MuCr.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/MuCr.js"></script>
</head>

<body class="stage7	">
	<nav class="sidebar">
		<div class="user">
			<div class="imagen">
				<img src="img/amy.jpg" alt="Profile picture">
			</div>
			<div class="titulo">
				<?php
					include 'php/write_username.php';
					include 'controladorAlbumRelacionado.php';
				?>
			</div>
		</div>
		<a class="blanco" href="MuCr_settings.php">
			<div class="options">
				<img src="img/icons/settings.png" alt="Settings">Ajustes
			</div>
		</a>
	</nav>

	<div class="dora">
		<input type="text" class="dorado" value="search" onfocus="if (this.value=='search') this.value='';" onblur="if (this.value=='') this.value='search';"
		/>
	</div>

	<nav class="musica">
		<a href="MuCr_main.php	">
			<div class="boton_derecha">
				<img src="img/icons/music.jpg" alt="Music icon">Music
			</div>
		</a>
		<a href="MuCr_concert_artist.php">
			<div class="boton_izquierda">
				<img src="img/icons/concierto.png" alt="Concert icon">Concerts
			</div>
		</a>
		<div class="collection">

			<div class="dropdown">
				<button onclick="myFunction()" class="dropbtn">Sorted by</button>
			</div>

			<div class="orden">
				<button class="especialized_back")>Sort by</button>
				<button class="especialized" style="display:block;" onclick="writeClassification(1);">Music Style</button> <!-- 0 -->
				<button class="especialized" style="display:block;" onclick="writeClassification(2);">Rarity</button> <!-- 1 -->
				<button class="especialized_back" style="display:none;" onclick="writeClassification(0);">Back</button>
				<button class="especialized" style="display:none;">All</button> <!-- 2 -->
				<button class="especialized" style="display:none;">Alternative</button> <!-- 3 -->
				<button class="especialized" style="display:none;">Punk</button> <!-- 4 -->
				<button class="especialized" style="display:none;">Rock</button> <!-- 5 -->
				<button class="especialized" style="display:none;">Blues</button> <!-- 6 -->
				<button class="especialized" style="display:none;">Classical</button> <!-- 7 -->
				<button class="especialized" style="display:none;">Country</button> <!-- 8 -->
				<button class="especialized" style="display:none;">Folk</button> <!-- 9 -->
				<button class="especialized" style="display:none;">Dance</button> <!-- 10 -->
				<button class="especialized" style="display:none;">Electronic</button> <!-- 11 -->
				<button class="especialized" style="display:none;">Easy Listening</button> <!-- 12 -->
				<button class="especialized" style="display:none;">Gospel</button> <!-- 13 -->
				<button class="especialized" style="display:none;">Religious</button> <!-- 14 -->
				<button class="especialized" style="display:none;">Rap</button> <!-- 15 -->
				<button class="especialized" style="display:none;">Holiday</button> <!-- 16 -->
				<button class="especialized" style="display:none;">Instrumental</button> <!-- 17 -->
				<button class="especialized" style="display:none;">Jazz</button> <!-- 18 -->
				<button class="especialized" style="display:none;">Latin</button> <!-- 19 -->
				<button class="especialized" style="display:none;">Metal</button> <!-- 20 -->
				<button class="especialized" style="display:none;">Moods</button> <!-- 21 -->
				<button class="especialized" style="display:none;">Pop</button> <!-- 22 -->
				<button class="especialized" style="display:none;">Other</button> <!-- 23 -->
				<button class="especialized" style="display:none;">R'n'B</button> <!-- 24 -->
				<button class="especialized" style="display:none;">Soundtrack</button> <!-- 25 -->
				<button class="especialized" style="display:none;">World</button> <!-- 26 -->
				<button class="especialized_back" style="display:none;" onclick="writeClassification(0);">Back</button>
				<button class="especialized" style="display:none;">Deluxe</button> <!-- 27 -->
				<button class="especialized" style="display:none;">Not deluxe</button> <!-- 28 -->
			</div>
	</nav>

	<a href="../php/delete_cookies.php">
		<nav class="exit_sidebar">
			<img src="img/icons/close.png" alt="close">
		</nav>
	</a>

	<div class="genre">
		<?php
			$artist1 = $_GET['artist'];
			$artist1 = str_replace("_"," ",$artist1);
			$artist1 = str_replace("come","'",$artist1);

			echo $artist1;
		?>
	</div>

	<a href="
		<?php
			$url = $_GET['type'];
			if($url == 'main'){
				echo "MuCr_main.php";
			}
			else{
				echo "MuCr_collection.php?title=$url";
			}
		?>">
	>
	<button class="gotostyle">
		<div class="simbolo">
			<img src="img/icons/arrow.png">
		</div>
		<div class="tituloatras">go to
			<?php
				$url = $_GET['type'];
				$url = str_replace("_"," ",$url);
				$url = str_replace("come","'",$url);

				echo $url;
			?>
		</div>
	</button>
</a>
		<div class="seleccionado">
			<?php
				$album_name = $_GET['album'];
				$album_name = str_replace("_", " ", $album_name);
				$albumA0 = new album;
				// echo $_GET['artist'];
				$albumA0->createAlbumsearched($artist1, $album_name);
			 ?>
			<div class="imagen">
				<img src="<?php
								echo $albumA0->getImage();
							?>" alt="cover">
			</div>
			<div class="<?php $url = $_GET['deluxe'];if($url == 'true'){echo "titulo_especial";}else{echo "titulo_normal";} ?>">
				<?php
					echo $albumA0->showTitle();
				?>
			</div>
			<div class="album_artist">(1969) - 47:24</div>
			<div class="album_type">Vinyl 33⅓ 200g</div>
			<div class="listofsongs">
				<div class="songs">Come Together - 4:20
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Something - 3:03
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Maxwell's Silver Hammer - 3:27
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Oh! Darling - 3:26
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Octopus's Garden - 2:51
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">I Want You (She's So Heavy) - 7:47
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Here Comes The Sun - 3:05
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Because - 2:45
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">You Never Give Me Your Money - 4:02
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Sun King - 2:26
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Mean Mr. Mustard - 1:06
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Polythene Pam - 1:12
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">She Came In Through the Bathroom Window - 1:57
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Golden Slumbers - 1:31
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Carry That Weight - 1:36
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">The End - 2:19
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Her Majesty - 0:23
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
			</div>
		</div>

		<?php
				$albumA1 = new album;
				$albumA1->createAlbumRand($artist1);

				while($albumA1->IsEqual($albumA0)){
					$albumA1->createAlbumRand($artist1);
				}

				//echo $albumA1.getImage();
				$albumA2 = new album;
				$albumA2->createAlbumRand($artist1);

				while($albumA2->IsEqual($albumA0) || $albumA2->IsEqual($albumA1)){
					$albumA2->createAlbumRand($artist1);
				}

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

		<div class="recocollect">
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA1->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA1->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA1->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA2->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA2->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA2->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA3->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA3->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA3->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA4->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA4->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA4->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA5->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA5->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA5->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA6->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA6->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA6->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA7->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA7->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA7->getImage();?>" alt="">
				</div>
			</a>
		</div>

		<div class="name_list">
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA1->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA1->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA1->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA2->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA2->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA2->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA3->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA3->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA3->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA4->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA4->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA4->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA5->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA5->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA5->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA6->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA6->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA6->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA7->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=false&album=<?php echo $albumA7->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA7->showTitle();
					?>
				</div>
			</a>
		</div>
</body>

</html>
