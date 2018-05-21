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

	<div class="autor">
		<img src="img/covers/pop/coldplay.jpg" alt="artist_principal">
	</div>
	<div class="name">
		Coldplay
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
				<img src="img/flags/alb.jpg" alt="bandera">
				<div class="titulo">ALB</div>
			</div>
			<div class="flag">
				<img src="img/flags/arm.jpg" alt="bandera">
				<div class="titulo">ARM</div>
			</div>
			<div class="flag">
				<img src="img/flags/aus.jpg" alt="bandera">
				<div class="titulo">AUS</div>
			</div>
			<div class="flag">
				<img src="img/flags/aze.jpg" alt="bandera">
				<div class="titulo">AZE</div>
			</div>
			<div class="flag">
				<img src="img/flags/bel.jpg" alt="bandera">
				<div class="titulo">BEL</div>
			</div>
			<div class="flag">
				<img src="img/flags/bie.jpg" alt="bandera">
				<div class="titulo">BIE</div>
			</div>
			<div class="flag">
				<img src="img/flags/bos.jpg" alt="bandera">
				<div class="titulo">BOS</div>
			</div>
			<div class="flag">
				<img src="img/flags/bul.jpg" alt="bandera">
				<div class="titulo">BUL</div>
			</div>
			<div class="flag">
				<img src="img/flags/cez.jpg" alt="bandera">
				<div class="titulo">CEZ</div>
			</div>
			<div class="flag">
				<img src="img/flags/chi.jpg" alt="bandera">
				<div class="titulo">CYP</div>
			</div>
			<div class="flag">
				<img src="img/flags/cro.jpg" alt="bandera">
				<div class="titulo">CRO</div>
			</div>
			<div class="flag">
				<img src="img/flags/din.jpg" alt="bandera">
				<div class="titulo">DEN</div>
			</div>
			<div class="flag">
				<img src="img/flags/esln.jpg" alt="bandera">
				<div class="titulo">SVN</div>
			</div>
			<div class="flag">
				<img src="img/flags/eslq.jpg" alt="bandera">
				<div class="titulo">SVQ</div>></div>
			<div class="flag">
				<img src="img/flags/esp.jpg" alt="bandera">
				<div class="titulo">ESP</div>
			</div>
			<div class="flag">
				<img src="img/flags/est.jpg" alt="bandera">
				<div class="titulo">EST</div>
			</div>
			<div class="flag">
				<img src="img/flags/fin.jpg" alt="bandera">
				<div class="titulo">FIN</div>
			</div>
			<div class="flag">
				<img src="img/flags/fra.jpg" alt="bandera">
				<div class="titulo">FRA</div>
			</div>
			<div class="flag">
				<img src="img/flags/ger.jpg" alt="bandera">
				<div class="titulo">GER</div>
			</div>
			<div class="flag">
				<img src="img/flags/gre.jpg" alt="bandera">
				<div class="titulo">GRE</div>
			</div>
			<div class="flag">
				<img src="img/flags/hun.jpg" alt="bandera">
				<div class="titulo">HUN</div>
			</div>
			<div class="flag">
				<img src="img/flags/irl.jpg" alt="bandera">
				<div class="titulo">IRL</div>
			</div>
			<div class="flag">
				<img src="img/flags/isl.jpg" alt="bandera">
				<div class="titulo">ICE</div>
			</div>
			<div class="flag">
				<img src="img/flags/ita.jpg" alt="bandera">
				<div class="titulo">ITA</div>
			</div>
			<div class="flag">
				<img src="img/flags/lux.jpg" alt="bandera">
				<div class="titulo">LUX</div>
			</div>
			<div class="flag">
				<img src="img/flags/mac.jpg" alt="bandera">
				<div class="titulo">MAC</div>
			</div>
			<div class="flag">
				<img src="img/flags/mal.jpg" alt="bandera">
				<div class="titulo">MAL</div>
			</div>
			<div class="flag">
				<img src="img/flags/mol.png" alt="bandera">
				<div class="titulo">MOL</div>
			</div>
			<div class="flag">
				<img src="img/flags/mon.jpg" alt="bandera">
				<div class="titulo">MON</div>
			</div>
			<div class="flag">
				<img src="img/flags/nor.jpg" alt="bandera">
				<div class="titulo">NOR</div>
			</div>
			<div class="flag">
				<img src="img/flags/pab.jpg" alt="bandera">
				<div class="titulo">NET</div>
			</div>
			<div class="flag">
				<img src="img/flags/pol.jpg" alt="bandera">
				<div class="titulo">POL</div>
			</div>
			<div class="flag">
				<img src="img/flags/por.jpg" alt="bandera">
				<div class="titulo">POR</div>
			</div>
			<div class="flag">
				<img src="img/flags/rom.png" alt="bandera">
				<div class="titulo">ROM</div>
			</div>
			<div class="flag">
				<img src="img/flags/ser.jpg" alt="bandera">
				<div class="titulo">SER</div>
			</div>
			<div class="flag">
				<img src="img/flags/sue.jpg" alt="bandera">
				<div class="titulo">SWE</div>
			</div>
			<div class="flag">
				<img src="img/flags/sui.jpg" alt="bandera">
				<div class="titulo">SWI</div>
			</div>
			<div class="flag">
				<img src="img/flags/tur.jpg" alt="bandera">
				<div class="titulo">TUR</div>
			</div>
			<div class="flag">
				<img src="img/flags/ucr.jpg" alt="bandera">
				<div class="titulo">UKR</div>
			</div>
			<div class="flag">
				<img src="img/flags/uk.jpg" alt="bandera">
				<div class="titulo">GRB</div>
			</div>
		</div>

		<div class="horarios">
			<div class="hora">
				<div class="nombre">MADRID</div>
				<div class="imagen">
					<img src="img/ciudades/madrid.jpg" alt="ciudades">
				</div>
				<div class="time">11-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">MALAGA</div>
				<div class="imagen">
					<img src="img/ciudades/malaga.jpg" alt="ciudades">
				</div>
				<div class="time">12-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">SEVILLA</div>
				<div class="imagen">
					<img src="img/ciudades/sevilla.jpg" alt="ciudades">
				</div>
				<div class="time">14-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">GRANADA</div>
				<div class="imagen">
					<img src="img/ciudades/granada.jpg" alt="ciudades">
				</div>
				<div class="time">16-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">TENERIFE</div>
				<div class="imagen">
					<img src="img/ciudades/tenerife.jpg" alt="ciudades">
				</div>
				<div class="time">20-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">TOLEDO</div>
				<div class="imagen">
					<img src="img/ciudades/toledo.jpg" alt="ciudades">
				</div>
				<div class="time">24-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">BARCELONA</div>
				<div class="imagen">
					<img src="img/ciudades/barcelona.jpg" alt="ciudades">
				</div>
				<div class="time">31-1-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">SALAMANCA</div>
				<div class="imagen">
					<img src="img/ciudades/salamanca.jpg" alt="ciudades">
				</div>
				<div class="time">2-2-2001</div>
				<div class="price">80$</div>
				<button class="asistir">Attended</button>
			</div>

			<div class="hora">
				<div class="nombre">VALENCIA</div>
				<div class="imagen">
					<img src="img/ciudades/valencia.jpg" alt="ciudades">
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
			<img src="img/covers/dance/axwell_ingrosso.jpg" alt="artist">
			<div class="titulo">Axwell and Ingrosso</div>
		</div>
		<div class="box">
			<img src="img/covers/dance/chainsmokers.jpg" alt="artist">
			<div class="titulo">The chainsmokers</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/beyonce.jpg" alt="artist">
			<div class="titulo">Beyonce</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/rihanna.jpg" alt="artist">
			<div class="titulo">Rihanna</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/shakira.jpg" alt="artist">
			<div class="titulo">Shakira</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/Taylor_Swift.jpg" alt="artist">
			<div class="titulo">Taylor Swift</div>
		</div>
		<a href="MuCr_concerts_1.php">
			<div class="box">
				<img src="img/covers/Pop/Adele.png" alt="artist">
				<div class="titulo">Adele</div>
			</div>
		</a>
		<div class="box">
			<img src="img/covers/Pop/maroon5.jpg" alt="artist">
			<div class="titulo">Maroon 5</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/katyPerry.jpg" alt="artist">
			<div class="titulo">Katy Perry</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/NickyMinaj.jpg" alt="artist">
			<div class="titulo">Nicky Minaj</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/ArianaGrande.jpg" alt="artist">
			<div class="titulo">Ariana Grande</div>
		</div>
		<div class="box">
			<img src="img/covers/Pop/weeknd.jpg" alt="artist">
			<div class="titulo">Weeknd</div>
		</div>
	</div>
	<button class="button_studio" onclick="window.location.href='MuCr_mymusic.php'">
		&nbsp;Your Studio
	</button>

</body>

</html>