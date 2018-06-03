<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>MuCr</title>
	<link rel="stylesheet" href="MuCr.css">
	<link rel="shortcut icon" href="img/MuCr.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/MuCr.js"></script>
</head>

<body class="stage5">
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
					include 'php/write_username.php'
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
			<div class="orden">
				<button class="especialized_back")>Sort by</button>
				<button class="especialized" style="display:block;" onclick="writeClassification(1);">Music Style</button> <!-- 0 -->
				<button class="especialized" style="display:block;" onclick="writeClassification(2);">Rarity</button> <!-- 1 -->
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
				<button class="especialized_back" style="display:none;" onclick="writeClassification(0);">Back</button>
				<a href="MuCr_collection.php?title=Deluxe"><button class="especialized" style="display:none;">Deluxe</button> <!-- 27 --></a>
				<a href="MuCr_collection.php?title=Not_Deluxe"><button class="especialized" style="display:none;">Not deluxe</button> <!-- 28 --></a>
			</div>
		</div>
	</nav>

	<a href="../php/delete_cookies.php">
		<nav class="exit_sidebar">
			<img src="img/icons/close.png" alt="close">
		</nav>
	</a>

	<div class="contenedor">
		<?php
		include 'listController.php';
		$added=array();

		?>

		<div class="fila">
			<div class="title">Recomendations</div>
			<div class="row_main">
				<div class="recom1">
					<img src="img/covers/Jazz/Best.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Best.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Best.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Best.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Illusion.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Joy.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Krall.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
			</div>
		</div>

		<div class="fila">
			<?php


			$lista2 = new lista("foryou",$added,$email);

			?>
			<div class="title">For You</div>
			<div class="row_main">
				<div class="recom1">
					<img src="<?php echo	$lista2->getAlbumV1()->getImage();?>"	alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="<?php echo $lista2->getAlbumV1()->getImage();?>" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="<?php echo $lista2->getAlbumV1()->getImage(); ?>" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="<?php echo $lista2->getAlbumV1()->getImage();	?>" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="<?php echo $lista2->getAlbumV1()->getImage();?>" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="<?php echo $lista2->getAlbumV1()->getImage();?>" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="<?php echo $lista2->getAlbumV1()->getImage();?>" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
			</div>
		</div>

		<div class="fila">
			<div class="title"></div>
			<div class="row_main">
				<div class="recom1">
					<img src="img/covers/Jazz/Best.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Illusion.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Joy.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Krall.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Nagula.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Nothing.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
				<div class="recom1">
					<img src="img/covers/Jazz/Nothing.jpg" alt="Album cover">
					<div class="close">
						<img src="img/icons/close.png" alt="close">
					</div>
					<div class="add">
						<img src="img/icons/add.png" alt="add">
					</div>
					<div class="love">
						<img src="img/icons/heart.png" alt="love">
					</div>
				</div>
			</div>
		</div>
	</div>

	<button class="button_studio" onclick="window.location.href='MuCr_mymusic.php'">
		&nbsp;Your Studio
	</button>
</body>

</html>
