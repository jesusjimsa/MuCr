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
			<div class="titulo">jesusjimsa</div>
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
				<div class="especialized_back">New Seacrh</div>
				<div class="especialized">Alternative</div>
				<div class="especialized">Punk</div>
				<a class="blanco" href="MuCr_collection.php">
					<div class="especialized">Rock</div>
				</a>
				<div class="especialized"> Blues</div>
				<div class="especialized"> Classical</div>
				<div class="especialized"> Country</div>
				<div class="especialized">Folk</div>
				<div class="especialized">Dance</div>
				<div class="especialized"> Electronic</div>
				<div class="especialized"> Easy Listening</div>
				<div class="especialized"> Gospel</div>
				<div class="especialized"> Religious</div>
				<div class="especialized"> Rap</div>
				<div class="especialized"> Holiday</div>
				<div class="especialized"> Instrumental</div>
				<div class="especialized"> Jazz</div>
				<div class="especialized"> Latin</div>
				<div class="especialized"> Metal</div>
				<div class="especialized"> Moods</div>
				<div class="especialized"> Pop</div>
				<div class="especialized"> Other</div>
				<div class="especialized"> R'n'B</div>
				<div class="especialized"> Soundtrack</div>
				<div class="especialized"> World</div>
			</div>
	</nav>

	<a href="../php/delete_cookies.php">
		<nav class="exit_sidebar">
			<img src="img/icons/close.png" alt="close">
		</nav>
	</a>

	<div class="genre">
		Rock
	</div>

	<div class="grid-container">
		<a href="MuCr_detailed_album_abbey_road.php">
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