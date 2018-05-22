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

			<div class="dropdown">
				<button onclick="myFunction()" class="dropbtn">Sorted by</button>
			</div>

			<div class="orden">
			<button class="especialized_back")>Sort by</button>
				<button class="especialized" class="option_sidebar" style="display:block;" onclick="writeClassification(1);">Music Style</button> <!-- 0 -->
				<button class="especialized" class="option_sidebar" style="display:block;" onclick="writeClassification(2);">Rarity</button> <!-- 1 -->
				<button class="especialized_back"  style="display:none;" onclick="writeClassification(0);">Back</button>
				<button class="especialized" class="artist_sidebar" style="display:none;">All</button> <!-- 2 -->
				<button class="especialized"  style="display:none;">Alternative</button> <!-- 3 -->
				<button class="especialized"  style="display:none;">Punk</button> <!-- 4 -->
				<button class="especialized"  style="display:none;">Rock</button> <!-- 5 -->
				<button class="especialized"  style="display:none;">Blues</button> <!-- 6 -->
				<button class="especialized"  style="display:none;">Classical</button> <!-- 7 -->
				<button class="especialized"  style="display:none;">Country</button> <!-- 8 -->
				<button class="especialized"  style="display:none;">Folk</button> <!-- 9 -->
				<button class="especialized"  style="display:none;">Dance</button> <!-- 10 -->
				<button class="especialized"  style="display:none;">Electronic</button> <!-- 11 -->
				<button class="especialized"  style="display:none;">Easy Listening</button> <!-- 12 -->
				<button class="especialized"  style="display:none;">Gospel</button> <!-- 13 -->
				<button class="especialized"  style="display:none;">Religious</button> <!-- 14 -->
				<button class="especialized"  style="display:none;">Rap</button> <!-- 15 -->
				<button class="especialized"  style="display:none;">Holiday</button> <!-- 16 -->
				<button class="especialized"  style="display:none;">Instrumental</button> <!-- 17 -->
				<button class="especialized"  style="display:none;">Jazz</button> <!-- 18 -->
				<button class="especialized"  style="display:none;">Latin</button> <!-- 19 -->
				<button class="especialized"  style="display:none;">Metal</button> <!-- 20 -->
				<button class="especialized"  style="display:none;">Moods</button> <!-- 21 -->
				<button class="especialized"  style="display:none;">Pop</button> <!-- 22 -->
				<button class="especialized"  style="display:none;">Other</button> <!-- 23 -->
				<button class="especialized"  style="display:none;">R'n'B</button> <!-- 24 -->
				<button class="especialized"  style="display:none;">Soundtrack</button> <!-- 25 -->
				<button class="especialized"  style="display:none;">World</button> <!-- 26 -->
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

	<div class="concert_title">
		Concerts
	</div>

	<div class="milibreria_concerts">
		<button class="but_my_concerts_in">
			<img src="img/icons/tickets_icon.png" alt="icon_ticket"> &nbsp;My concerts
		</button>
		<button class="but_recom" onclick="window.location.href='MuCr_concert_recom.php'">
			<img src="img/icons/recommendation_icon.png" alt="recomendation_icon"> &nbsp;Recommendations
		</button>
		<button class="but_near" onclick="window.location.href='MuCr_concert_near.php'">
			<img src="img/icons/pushpin_icon.png" alt="pushpin_icon"> &nbsp;Near
		</button>
	</div>

	<div class="grid-concert">
		<div class="itemo">
			<div class="artist_name">The Beatles</div>
			<img src="img/concerts/artists/beatles.jpg" alt="The Beatles">
		</div>
		<div class="itemo">
			<div class="artist_name">Chuck Berry</div>
			<img src="img/concerts/artists/berry.jpg" alt="Chuck Berry">
		</div>
		<div class="itemo">
			<div class="artist_name">David Bowie</div>
			<img src="img/concerts/artists/bowie.jpg" alt="David Bowie">
		</div>
		<div class="itemo">
			<div class="artist_name">Bob Dylan</div>
			<img src="img/concerts/artists/dylan.jpg" alt="Bob Dylan">
		</div>
		<div class="itemo">
			<div class="artist_name">Electric Light Orchestra</div>
			<img src="img/concerts/artists/elo.jpg" alt="Electric Light Orchestra">
		</div>
		<div class="itemo">
			<div class="artist_name">Elton John</div>
			<img src="img/concerts/artists/elton.jpg" alt="Elton John">
		</div>
		<div class="itemo">
			<div class="artist_name">Elvis Presley</div>
			<img src="img/concerts/artists/elvis.jpg" alt="Elvis Presley">
		</div>
		<div class="itemo">
			<div class="artist_name">Foo Fighters</div>
			<img src="img/concerts/artists/fighters.jpg" alt="Foo Fighters">
		</div>
		<div class="itemo">
			<div class="artist_name">Green Day</div>
			<img src="img/concerts/artists/green.jpg" alt="Green Day">
		</div>
		<div class="itemo">
			<div class="artist_name">George Harrison</div>
			<img src="img/concerts/artists/harrison.jpg" alt="George Harrison">
		</div>
		<div class="itemo">
			<div class="artist_name">John Lennon</div>
			<img src="img/concerts/artists/lennon.jpg" alt="John Lennon">
		</div>
		<div class="itemo">
			<div class="artist_name">Paul McCartney</div>
			<img src="img/concerts/artists/mccartney.jpg" alt="Paul McCartney">
		</div>
		<div class="itemo">
			<div class="artist_name">Nirvana</div>
			<img src="img/concerts/artists/nirvana.jpg" alt="Nirvana">
		</div>
		<div class="itemo">
			<div class="artist_name">Queen</div>
			<img src="img/concerts/artists/queen.jpg" alt="Queen">
		</div>
		<div class="itemo">
			<div class="artist_name">Ringo Starr</div>
			<img src="img/concerts/artists/ringo.jpg" alt="Ringo Starr">
		</div>
		<div class="itemo">
			<div class="artist_name">The Rolling Stones</div>
			<img src="img/concerts/artists/stones.jpg" alt="The Rolling Stones">
		</div>
		<div class="itemo">
			<div class="artist_name">Roger Waters</div>
			<img src="img/concerts/artists/waters.jpg" alt="Roger Waters">
		</div>
		<div class="itemo">
			<div class="artist_name">The Who</div>
			<img src="img/concerts/artists/who.jpg" alt="The Who">
		</div>
	</div>


</body>

</html>