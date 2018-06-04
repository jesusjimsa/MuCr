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

			<div class="dropdown">
				<button onclick="myFunction()" class="dropbtn">Sorted by</button>
			</div>

			<div class="orden">
				<button class="especialized_back")>Sort by</button>
				<button class="especialized" style="display:block;" onclick="writeClassification(1);">Music Style</button> <!-- 0 -->
				<a href="MuCr_collection.php?title=Deluxe"><button class="especialized" style="display:block;">Deluxe</button> <!-- 27 --></a>
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
			<img src="img/icons/tickets_icon.png" alt="ticket_icon"> &nbsp;My concerts
		</button>
		<button class="but_recom" onclick="window.location.href='MuCr_concert_recom.php'">
			<img src="img/icons/recommendation_icon.png" alt="recommendation_icon"> &nbsp;Recommendations
		</button>
		<button class="but_near_in">
			<img src="img/icons/pushpin_icon.png" alt="pushpin_icon"> &nbsp;Near
		</button>
	</div>

	<div class="near_scroll">
		<div class="concert">
			<img src="img/concerts/posters/bowie.jpg" alt="David Bowie">
			<div class="name_artist">
				David Bowie
			</div>
			<div class="location_date">
				10 April 2018
				<br/> Cheapest: 80€
			</div>
			<div class="city_near">
				<img src="img/ciudades/iasi.jpg" alt="ciudad">
				<div class="flag">
					<img src="img/flags/rom.png" alt="bandera">
				</div>
				<div class="titulo">IASI</div>
			</div>
		</div>
		<div class="concert">
			<img src="img/concerts/posters/McCartney.jpg" alt="Paul McCartney">
			<div class="name_artist">
				Paul McCartney
			</div>
			<div class="location_date">
				29 May 2018
				<br/> Cheapest: 80€
			</div>
			<div class="city_near">
				<img src="img/ciudades/budapest.jpg" alt="ciudad">
				<div class="flag">
					<img src="img/flags/hun.jpg" alt="bandera">
				</div>
				<div class="titulo">BUDAPEST</div>
			</div>
		</div>
		<div class="concert">
			<img src="img/concerts/posters/foo_fighters.jpg" alt="Foo Fighters">
			<div class="name_artist">
				Foo Fighters
			</div>
			<div class="location_date">
				16 June 2018
				<br/> Cheapest: 80€
			</div>
			<div class="city_near">
				<img src="img/ciudades/Bucuresti.jpg" alt="ciudad">
				<div class="flag">
					<img src="img/flags/rom.png" alt="bandera">
				</div>
				<div class="titulo">BUCHAREST</div>
			</div>
		</div>
		<div class="concert">
			<img src="img/concerts/posters/rolling_stones.jpg" alt="The Rolling Stones">
			<div class="name_artist">
				The Rolling Stones
			</div>
			<div class="location_date">
				18 June 2018
				<br/> Cheapest: 80€
			</div>
			<div class="city_near">
				<img src="img/ciudades/cluj.jpg" alt="ciudad">
				<div class="flag">
					<img src="img/flags/rom.png" alt="bandera">
				</div>
				<div class="titulo">CLUJ</div>
			</div>
		</div>
		<div class="concert">
			<img src="img/concerts/posters/general.jpg" alt="Basic">
			<div class="name_artist">
				Paco paquez
			</div>
			<div class="location_date">
				5 August 2018
				<br/> Cheapest: 2€
			</div>
			<div class="city_near">
				<img src="img/ciudades/chisinau.jpg" alt="ciudad">
				<div class="flag">
					<img src="img/flags/mol.png" alt="bandera">
				</div>
				<div class="titulo">CHISINAU</div>
			</div>
		</div>
	</div>

</body>

</html>