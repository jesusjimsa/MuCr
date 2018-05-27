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

<body class="stage2">
	<nav class="sidebar">
		<div class="user">
			<div class="imagen">
				<img src="img/amy.jpg" alt="Profile picture">
			</div>
			<div class="titulo">
				<?php
					include 'php/write_username.php'
				?>
			</div>>
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
		$url = $_GET['title'];
 		$url = str_replace("_"," ",$url);
		$url = str_replace("come","'",$url);
		echo $url;
 		?>
	</div>

	<div class="grid-container">
		<a href="MuCr_detailed_album.php?artist=The_Beatles&type=<?php $url = $_GET['title']; echo $url;?>&deluxe=true">
		<div class="itemo">
				<img src="img/covers/Rock/Abbey.jpg" alt="artist">
				<div class="type">Vinyl</div>
				<div class="add">
					<img src="img/icons/add.png" alt="add">
				</div>
				<div class="love">
					<img src="img/icons/heart.png" alt="love">
				</div>
				<div class="close">
					<img src="img/icons/close.png" alt="close">
				</div>
			</div>
		</a>
		<div class="itemo">
			<img src="img/covers/Rock/Berry.png" alt="artist">
			<div class="type">MP3</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Bleed.jpg" alt="artist">
			<div class="type">CD</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Blue.jpg" alt="artist">
			<div class="type">Tape</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Creole.jpg" alt="artist">
			<div class="type">Vinyl</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<a href="MuCr_detailed_album_diamonds.php">
			<div class="itemo">
				<img src="img/covers/Rock/Diamonds.jpg" alt="artist">
				<div class="type">MP3</div>
				<div class="add">
					<img src="img/icons/add.png" alt="add">
				</div>
				<div class="love">
					<img src="img/icons/heart.png" alt="love">
				</div>
				<div class="close">
					<img src="img/icons/close.png" alt="close">
				</div>
			</div>
		</a>
		<div class="itemo">
			<img src="img/covers/Rock/Games.jpg" alt="artist">
			<div class="type">CD</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Highway.jpg" alt="artist">
			<div class="type">Tape</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Idiot.jpg" alt="artist">
			<div class="type">Vinyl</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Nevermind.jpg" alt="artist">
			<div class="type">MP3</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Next.jpg" alt="artist">
			<div class="type">CD</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Opera.png" alt="artist">
			<div class="type">Tape</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Pass.jpg" alt="artist">
			<div class="type">Vinyl</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Ringo.jpg" alt="artist">
			<div class="type">MP3</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Shape.jpg" alt="artist">
			<div class="type">CD</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Stardust.jpg" alt="artist">
			<div class="type">Tape</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/Straits.jpg" alt="artist">
			<div class="type">CD</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
		<div class="itemo">
			<img src="img/covers/Rock/acdc.jpg" alt="artist">
			<div class="type">CD</div>
			<div class="add">
				<img src="img/icons/add.png" alt="add">
			</div>
			<div class="love">
				<img src="img/icons/heart.png" alt="love">
			</div>
			<div class="close">
				<img src="img/icons/close.png" alt="close">
			</div>
		</div>
	</div>



</body>

</html>
