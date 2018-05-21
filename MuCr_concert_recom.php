<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>MuCr - Concerts</title>
	<link rel="stylesheet" href="MuCr.css">
	<link rel="shortcut icon" href="img/MuCr.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/MuCr.js"></script>
</head>

<body class="stage3">
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
	
	<div class="concert_title">
		Concerts
	</div>

	<div class="milibreria_concerts">
		<button class="but_my_concerts" onclick="window.location.href='MuCr_concert_artist.php'">
			<img src="img/icons/tickets_icon.png" alt="tickets_icon"> &nbsp;My concerts
		</button>
		<button class="but_recom_in">
			<img src="img/icons/recommendation_icon.png" alt="recomendation_icon"> &nbsp;Recommendations
		</button>
		<button class="but_near" onclick="window.location.href='MuCr_concert_near.php'">
			<img src="img/icons/pushpin_icon.png" alt="pushpin_icon"> &nbsp;Near
		</button>
	</div>

	<div class="grid-concert">
		<div class="itemo">
			<div class="artist_name">Audioslave</div>
			<img src="img/concerts/recommendations/audioslave.jpg" alt="Audioslave">
		</div>
		<div class="itemo">
			<div class="artist_name">Blink-182</div>
			<img src="img/concerts/recommendations/blink.jpg" alt="Blink-182">
		</div>
		<div class="itemo">
			<div class="artist_name">My Chemical Romance</div>
			<img src="img/concerts/recommendations/chemical.jpg" alt="My Chemical Romance">
		</div>
		<a href="MuCr_Concerts.php">
			<div class="itemo">
				<div class="artist_name">Coldplay</div>
				<img src="img/concerts/recommendations/coldplay.jpg" alt="Coldplay">
			</div>
		</a>
		<div class="itemo">
			<div class="artist_name">Imagine Dragons</div>
			<img src="img/concerts/recommendations/dragons.jpg" alt="Imagine Dragons">
		</div>
		<div class="itemo">
			<div class="artist_name">Evanescence</div>
			<img src="img/concerts/recommendations/evanescence.jpg" alt="Evanescence">
		</div>
		<div class="itemo">
			<div class="artist_name">Fall Out Boy</div>
			<img src="img/concerts/recommendations/fall.jpg" alt="Fall Out Boy">
		</div>
		<div class="itemo">
			<div class="artist_name">OK GO</div>
			<img src="img/concerts/recommendations/go.jpg" alt="OK GO">
		</div>
		<div class="itemo">
			<div class="artist_name">Gorillaz</div>
			<img src="img/concerts/recommendations/gorillaz.jpg" alt="Gorillaz">
		</div>
		<div class="itemo">
			<div class="artist_name">Hoobastank</div>
			<img src="img/concerts/recommendations/hoobastank.jpg" alt="Hoobastank">
		</div>
		<div class="itemo">
			<div class="artist_name">The Killers</div>
			<img src="img/concerts/recommendations/killers.jpg" alt="The Killers">
		</div>
		<div class="itemo">
			<div class="artist_name">Linkin Park</div>
			<img src="img/concerts/recommendations/linkin.jpg" alt="Linkin Park">
		</div>
		<div class="itemo">
			<div class="artist_name">Maroon 5</div>
			<img src="img/concerts/recommendations/maroon.jpg" alt="Maroon 5">
		</div>
		<div class="itemo">
			<div class="artist_name">Paramore</div>
			<img src="img/concerts/recommendations/paramore.png" alt="Paramore">
		</div>
		<div class="itemo">
			<div class="artist_name">Twenty One Pilots</div>
			<img src="img/concerts/recommendations/pilots.png" alt="Twenty One Pilots">
		</div>
		<div class="itemo">
			<div class="artist_name">Slipknot</div>
			<img src="img/concerts/recommendations/slipknot.jpg" alt="Slipknot">
		</div>
		<div class="itemo">
			<div class="artist_name">The White Stripes</div>
			<img src="img/concerts/recommendations/stripes.jpg" alt="The White Stripes">
		</div>
		<div class="itemo">
			<div class="artist_name">ZZ Top</div>
			<img src="img/concerts/recommendations/top.jpg" alt="ZZ Top">
		</div>
	</div>

</body>

</html>