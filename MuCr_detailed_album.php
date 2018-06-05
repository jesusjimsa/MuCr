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
				<img src="
						<?php
							include 'php/connect_db.php';

							$email = $_COOKIE['email'];

							$sql_query = "SELECT URLimage FROM user WHERE email = '$email'";

							$result = mysqli_query($conn, $sql_query);
							$row = mysqli_fetch_assoc($result);


							echo $row['URLimage'];
							ob_flush();
							flush();
						?>"
				alt="Profile picture">
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
				<a href="MuCr_collection.php?title=Deluxe"><button class="especialized" style="display:block;">Deluxe</button> <!-- 1 --></a>
				<button class="especialized_back" style="display:none;" onclick="writeClassification(0);">Back</button>
				<a href="MuCr_collection.php?title=All"><button class="especialized" style="display:none;">All</button> <!-- 2 --></a>
				<a href="MuCr_collection.php?title=Alternative"><button class="especialized" style="display:none;">Alternative</button> <!-- 3 --></a>
				<a href="MuCr_collection.php?title=Punk"><button class="especialized" style="display:none;">Punk</button> <!-- 4 --></a>
				<a href="MuCr_collection.php?title=Rock"><button class="especialized" style="display:none;">Rock</button> <!-- 5 --></a>
				<a href="MuCr_collection.php?title=Blues"><button class="especialized" style="display:none;">Blues</button> <!-- 6 --></a>
				<a href="MuCr_collection.php?title=Classical"><button class="especialized" style="display:none;">Classical</button> <!-- 7 --></a>
				<a href="MuCr_collection.php?title=Country"><button class="especialized" style="display:none;">Country</button> <!-- 8 --></a>
				<a href="MuCr_collection.php?title=Folk"><button class="especialized" style="display:none;">Folk</button> <!-- 9 --></a>
				<a href="MuCr_collection.php?title=Dance"><button class="especialized" style="display:none;">Dance</button> <!-- 10 --></a>
				<a href="MuCr_collection.php?title=Electronic"><button class="especialized" style="display:none;">Electronic</button> <!-- 11 --></a>
				<a href="MuCr_collection.php?title=Easy_Listening"><button class="especialized" style="display:none;">Easy Listening</button> <!-- 12 --></a>
				<a href="MuCr_collection.php?title=Gospel"><button class="especialized" style="display:none;">Gospel</button> <!-- 13 --></a>
				<a href="MuCr_collection.php?title=Religious"><button class="especialized" style="display:none;">Religious</button> <!-- 14 --></a>
				<a href="MuCr_collection.php?title=Rap"><button class="especialized" style="display:none;">Rap</button> <!-- 15 --></a>
				<a href="MuCr_collection.php?title=Holiday"><button class="especialized" style="display:none;">Holiday</button> <!-- 16 --></a>
				<a href="MuCr_collection.php?title=Instrumental"><button class="especialized" style="display:none;">Instrumental</button> <!-- 17 --></a>
				<a href="MuCr_collection.php?title=Jazz"><button class="especialized" style="display:none;">Jazz</button> <!-- 18 --></a>
				<a href="MuCr_collection.php?title=Latin"><button class="especialized" style="display:none;">Latin</button> <!-- 19 --></a>
				<a href="MuCr_collection.php?title=Metal"><button class="especialized" style="display:none;">Metal</button> <!-- 20 --></a>
				<a href="MuCr_collection.php?title=Moods"><button class="especialized" style="display:none;">Moods</button> <!-- 21 --></a>
				<a href="MuCr_collection.php?title=Other"><button class="especialized" style="display:none;">Other</button> <!-- 23 --></a>
				<a href="MuCr_collection.php?title=Pop"><button class="especialized" style="display:none;">Pop</button> <!-- 22 --></a>
				<a href="MuCr_collection.php?title=Rcomencomeb"><button class="especialized" style="display:none;">R'n'B</button> <!-- 24 --></a>
				<a href="MuCr_collection.php?title=Soundtrack"><button class="especialized" style="display:none;">Soundtrack</button> <!-- 25 --></a>
				<a href="MuCr_collection.php?title=World"><button class="especialized" style="display:none;">World</button> <!-- 26 --></a>
			</div>		
	
			<form action="php/search_by_artist.php" class="search_artist" method="POST">
				<input type="text" value="Search by artist" name="artist_search" onfocus="if (this.value=='Search by artist') this.value='';"
				onblur="if (this.value == '') this.value = 'Search by artist';" class="search_artist_box">
				<input type="submit" name="search_artist" value="Go" class="search_artist_button">
			</form>
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
							?>" alt="">

			</div>
			<form action="" method="POST">
				<input type="hidden" name="album_name" value="<?php echo $albumA0->getTitulo();?>">
				<input type="hidden" name="album_artist" value="<?php echo $albumA0->getArtista();?>">
				<button type="image" name="like_button" value="like" class="like_album">
					<img src="<?php
								$titulo = $albumA0->getTitulo();
								$artista = $albumA0->getArtista();

								include 'php/connect_db.php';

								$sql_query = "SELECT album_name,user_email FROM U_like_A WHERE '$email' = user_email and album_name = '$titulo'";
								$result = $conn->query($sql_query);

								if($result->num_rows == 0){
									echo "img/icons/heart.png";
								}
								else{
									echo "img/icons/red_heart.png";
								}
							?>" alt="">
				</button>
			</form>

			<div class="<?php $url = $_GET['deluxe'];if($url == 1){echo "titulo_especial";}else{echo "titulo_normal";} ?>">
				<?php
					echo $albumA0->showTitle();
				?>
			</div>
			<div class="album_artist"><?php echo $albumA0->getYear();?>{<?php echo $albumA0->getminutes();?>:<?php echo $albumA0->getseconds();?>}</div>
			<div class="album_type"><?php echo $albumA0->getType();?></div>
			<div class="listofsongs">
				<?php
					$albumA0->printSongs();
				?>
			</div>
		</div>

		<form action="" method="POST">
			<input type="hidden" name="album_name" value="<?php echo $albumA0->getTitulo();?>">
			<input type="hidden" name="album_artist" value="<?php echo $albumA0->getArtista();?>">
			<button type="image" name="add_button" value="add" class="add">
				<img src="	<?php
								$titulo = $albumA0->getTitulo();
								$artista = $albumA0->getArtista();

								include 'php/connect_db.php';

								$sql_query = "SELECT album_name, user_email FROM U_listen_A WHERE '$email' = user_email and album_name = '$titulo'";
								$result = $conn->query($sql_query);

								if($result->num_rows == 0){
									echo "img/icons/add.png";
									$valor = true;
								}
								else{
									echo "img/icons/visto.png";
									$valor = false;
								}
							?>"
							alt="add">
							<?php
								if($valor == true){
									echo "Add album";;
								}
								else{
									echo "Added";
								}
						 	?>
			</button>
		</form>

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
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA1->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA1->getDeluxe(); ?>&album=<?php echo $albumA1->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA1->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA2->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA2->getDeluxe(); ?>&album=<?php echo $albumA2->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA2->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA3->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA3->getDeluxe(); ?>&album=<?php echo $albumA3->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA3->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA4->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA4->getDeluxe(); ?>&album=<?php echo $albumA4->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA4->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA5->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA5->getDeluxe(); ?>&album=<?php echo $albumA5->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA5->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA6->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA6->getDeluxe(); ?>&album=<?php echo $albumA6->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA6->getImage();?>" alt="">
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA7->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA7->getDeluxe(); ?>&album=<?php echo $albumA7->getTitulo(); ?>">
				<div class="albumlist">
					<img src="<?php echo $albumA7->getImage();?>" alt="">
				</div>
			</a>
		</div>

		<div class="name_list">
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA1->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA1->getDeluxe(); ?>&album=<?php echo $albumA1->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA1->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA2->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA2->getDeluxe(); ?>&album=<?php echo $albumA2->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA2->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA3->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA3->getDeluxe(); ?>&album=<?php echo $albumA3->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA3->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA4->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA4->getDeluxe(); ?>&album=<?php echo $albumA4->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA4->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA5->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA5->getDeluxe(); ?>&album=<?php echo $albumA5->getTitulo(); ?>">
				<div class="related_name">
					<?php
						$albumA5->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA6->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA6->getDeluxe(); ?>&album=<?php echo urlencode($albumA6->getTitulo()); ?>">
				<div class="related_name">
					<?php
						$albumA6->showTitle();
					?>
				</div>
			</a>
			<a href="MuCr_detailed_album.php?artist=<?php echo $albumA7->getArtista(); ?>&type=<?php $url = $_GET['type']; echo $url;?>&deluxe=<?php echo $albumA7->getDeluxe(); ?>&album=<?php echo urlencode($albumA7->getTitulo()); ?>">
				<div class="related_name">
					<?php
						$albumA7->showTitle();
					?>
				</div>
			</a>
		</div>
</body>

</html>

<?php
	if (isset($_POST['add_button'])){
		include 'php/connect_db.php';
		$email = $_COOKIE['email'];
		$album_name = $_POST['album_name'];
		$album_artist = $_POST['album_artist'];

		$sql_add_album_user = "INSERT INTO U_listen_A(user_email, album_name, album_artist) VALUES ('$email', '$album_name', '$album_artist')";
		$conn->query($sql_add_album_user);
	}

	if (isset($_POST['like_button'])){
		include 'php/connect_db.php';
		$email = $_COOKIE['email'];
		$album_name = $_POST['album_name'];
		$album_artist = $_POST['album_artist'];

		$sql_like_album_user = "INSERT INTO U_like_A(user_email, album_name, album_artist) VALUES ('$email', '$album_name', '$album_artist')";
		$conn->query($sql_like_album_user);
	}
?>
