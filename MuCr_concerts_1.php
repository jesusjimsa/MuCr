<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>MuCr - Concert</title>
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

	<div class="autor">
		<img src="img/covers/pop/Adele.png" alt="artist_pincipal">
	</div>
	<div class="name">
		Adele
	</div>

	<div class="listaciudades">
		<div class="continentes">
			<div class="cont">AFRICA</div>
			<div class="cont">ASIA</div>
			<div class="cont">EUROPE</div>
			<div class="cont">NORTH AMERICA</div>
			<div class="cont">OCEANIA</div>
			<div class="cont">SOUTH AMERICA</div>
		</div>
		<div class="countries">
			<div class="flag">
				<img src="img/flags/alb.jpg" alt="flag">
				<div class="titulo">ALB</div>
			</div>
			<div class="flag">
				<img src="img/flags/arm.jpg" alt="flag">
				<div class="titulo">ARM</div>
			</div>
			<div class="flag">
				<img src="img/flags/aus.jpg" alt="flag">
				<div class="titulo">AUS</div>
			</div>
			<div class="flag">
				<img src="img/flags/aze.jpg" alt="flag">
				<div class="titulo">AZE</div>
			</div>
			<div class="flag">
				<img src="img/flags/bel.jpg" alt="flag">
				<div class="titulo">BEL</div>
			</div>
			<div class="flag">
				<img src="img/flags/bie.jpg" alt="flag">
				<div class="titulo">BIE</div>
			</div>
			<div class="flag">
				<img src="img/flags/bos.jpg" alt="flag">
				<div class="titulo">BOS</div>
			</div>
			<div class="flag">
				<img src="img/flags/bul.jpg" alt="flag">
				<div class="titulo">BUL</div>
			</div>
			<div class="flag">
				<img src="img/flags/cez.jpg" alt="flag">
				<div class="titulo">CEZ</div>
			</div>
			<div class="flag">
				<img src="img/flags/chi.jpg" alt="flag">
				<div class="titulo">CYP</div>
			</div>
			<div class="flag">
				<img src="img/flags/cro.jpg" alt="flag">
				<div class="titulo">CRO</div>
			</div>
			<div class="flag">
				<img src="img/flags/din.jpg" alt="flag">
				<div class="titulo">DEN</div>
			</div>
			<div class="flag">
				<img src="img/flags/esln.jpg" alt="flag">
				<div class="titulo">SVN</div>
			</div>
			<div class="flag">
				<img src="img/flags/eslq.jpg" alt="flag">
				<div class="titulo">SVQ</div>></div>
			<div class="flag">
				<img src="img/flags/esp.jpg" alt="flag">
				<div class="titulo">ESP</div>
			</div>
			<div class="flag">
				<img src="img/flags/est.jpg" alt="flag">
				<div class="titulo">EST</div>
			</div>
			<div class="flag">
				<img src="img/flags/fin.jpg" alt="flag">
				<div class="titulo">FIN</div>
			</div>
			<div class="flag">
				<img src="img/flags/fra.jpg" alt="flag">
				<div class="titulo">FRA</div>
			</div>
			<div class="flag">
				<img src="img/flags/ger.jpg" alt="flag">
				<div class="titulo">GER</div>
			</div>
			<div class="flag">
				<img src="img/flags/gre.jpg" alt="flag">
				<div class="titulo">GRE</div>
			</div>
			<div class="flag">
				<img src="img/flags/hun.jpg" alt="flag">
				<div class="titulo">HUN</div>
			</div>
			<div class="flag">
				<img src="img/flags/irl.jpg" alt="flag">
				<div class="titulo">IRL</div>
			</div>
			<div class="flag">
				<img src="img/flags/isl.jpg" alt="flag">
				<div class="titulo">ICE</div>
			</div>
			<div class="flag">
				<img src="img/flags/ita.jpg" alt="flag">
				<div class="titulo">ITA</div>
			</div>
			<div class="flag">
				<img src="img/flags/lux.jpg" alt="flag">
				<div class="titulo">LUX</div>
			</div>
			<div class="flag">
				<img src="img/flags/mac.jpg" alt="flag">
				<div class="titulo">MAC</div>
			</div>
			<div class="flag">
				<img src="img/flags/mal.jpg" alt="flag">
				<div class="titulo">MAL</div>
			</div>
			<div class="flag">
				<img src="img/flags/mol.png" alt="flag">
				<div class="titulo">MOL</div>
			</div>
			<div class="flag">
				<img src="img/flags/mon.jpg" alt="flag">
				<div class="titulo">MON</div>
			</div>
			<div class="flag">
				<img src="img/flags/nor.jpg" alt="flag">
				<div class="titulo">NOR</div>
			</div>
			<div class="flag">
				<img src="img/flags/pab.jpg" alt="flag">
				<div class="titulo">NET</div>
			</div>
			<div class="flag">
				<img src="img/flags/pol.jpg" alt="flag">
				<div class="titulo">POL</div>
			</div>
			<div class="flag">
				<img src="img/flags/por.jpg" alt="flag">
				<div class="titulo">POR</div>
			</div>
			<div class="flag">
				<img src="img/flags/rom.png" alt="flag">
				<div class="titulo">ROM</div>
			</div>
			<div class="flag">
				<img src="img/flags/ser.jpg" alt="flag">
				<div class="titulo">SER</div>
			</div>
			<div class="flag">
				<img src="img/flags/sue.jpg" alt="flag">
				<div class="titulo">SWE</div>
			</div>
			<div class="flag">
				<img src="img/flags/sui.jpg" alt="flag">
				<div class="titulo">SWI</div>
			</div>
			<div class="flag">
				<img src="img/flags/tur.jpg" alt="flag">
				<div class="titulo">TUR</div>
			</div>
			<div class="flag">
				<img src="img/flags/ucr.jpg" alt="flag">
				<div class="titulo">UKR</div>
			</div>
			<div class="flag">
				<img src="img/flags/uk.jpg" alt="flag">
				<div class="titulo">GRB</div>
			</div>
		</div>

		<div class="horarios">
			<div class="hora">
				<div class="nombre">MADRID</div>
				<div class="imagen">
					<img src="img/ciudades/madrid.jpg" alt="ciudad">
				</div>
				<div class="time">11-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">MALAGA</div>
				<div class="imagen">
					<img src="img/ciudades/malaga.jpg" alt="ciudad">
				</div>
				<div class="time">12-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">SEVILLA</div>
				<div class="imagen">
					<img src="img/ciudades/sevilla.jpg" alt="ciudad">
				</div>
				<div class="time">14-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">GRANADA</div>
				<div class="imagen">
					<img src="img/ciudades/granada.jpg" alt="ciudad">
				</div>
				<div class="time">16-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">TENERIFE</div>
				<div class="imagen">
					<img src="img/ciudades/tenerife.jpg" alt="ciudad">
				</div>
				<div class="time">20-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">TOLEDO</div>
				<div class="imagen">
					<img src="img/ciudades/toledo.jpg" alt="ciudad">
				</div>
				<div class="time">24-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">BARCELONA</div>
				<div class="imagen">
					<img src="img/ciudades/barcelona.jpg" alt="ciudad">
				</div>
				<div class="time">31-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">SALAMANCA</div>
				<div class="imagen">
					<img src="img/ciudades/salamanca.jpg" alt="ciudad">
				</div>
				<div class="time">2-2-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">VALENCIA</div>
				<div class="imagen">
					<img src="img/ciudades/valencia.jpg" alt="ciudad">
				</div>
				<div class="time">7-2-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

		</div>

	</div>

	<div class="artistarel">
		Related artists
	</div>
	<div class="artistarelbox">
		<div class="box">
			<img src="img/covers/dance/axwell_ingrosso.jpg" alt="artista">
			<div class="titulo">Axwell and Ingrosso</div>
		</div>
		<div class="box">
			<img src="img/covers/dance/chainsmokers.jpg" alt="artista">
			<div class="titulo">The chainsmokers</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/beyonce.jpg" alt="artista">
			<div class="titulo">Beyonce</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/rihanna.jpg" alt="artista">
			<div class="titulo">Rihanna</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/shakira.jpg" alt="artista">
			<div class="titulo">Shakira</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/Taylor_Swift.jpg" alt="artista">
			<div class="titulo">Taylor Swift</div>
		</div>
		<a href="MuCr_Concerts.php">
			<div class="box">
				<img src="img/covers/Pop/coldplay.jpg" alt="artista">
				<div class="titulo">Coldplay</div>
			</div>
		</a>
		<div class="box">
			<img src="img/covers/Pop/maroon5.jpg" alt="artista">
			<div class="titulo">Maroon 5</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/katyPerry.jpg" alt="artista">
			<div class="titulo">Katy Perry</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/NickyMinaj.jpg" alt="artista">
			<div class="titulo">Nicky Minaj</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/ArianaGrande.jpg" alt="artista">
			<div class="titulo">Ariana Grande</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/weeknd.jpg" alt="artista">
			<div class="titulo">Weeknd</div>
		</div>
	</div>

</body>

</html>