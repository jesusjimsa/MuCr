<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>MuCr - Your Studio</title>
	<link rel="stylesheet" href="MuCr.css">
	<link rel="shortcut icon" href="img/MuCr.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/MuCr.js"></script>
</head>

<body class="stage6">
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
		Your Studio
	</div>
	<div class="mitad_izq">
		<div class="centrado">Your Contributions</div>
		<div class="newstudio">
			<img src="img/amaral/amaral.jpg" alt="grupo">
			<div class="listado">
				<ul>
					<li>
						<h1>Estrellas en el mar1</h1>
					</li>
					<li>Sin ti no soy nada
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Te necesito
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Toda la noche en la calle
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Moriría por vos
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Estrella de mar
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Salir corriendo
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Sin ti no soy nada
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Te necesito
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Toda la noche en la calle
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Moriría por vos
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Estrella de mar
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Salir corriendo
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>
						<button class="addsong" onclick="window.location.href='MuCr_mymusic_addsongs.php'">add a song</button>

					</li>
				</ul>

			</div>
			<button class="deletealbum">Delete album</button>
		</div>

		<div class="newstudio">
			<img src="img/amaral/amaral2.jpg" alt="album">
			<div class="listado">
				<ul>
					<li>
						<h1>Estrellas en el mar2</h1>
					</li>
					<li>Sin ti no soy nada
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Te necesito
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Toda la noche en la calle
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Moriría por vos
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Estrella de mar
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Salir corriendo
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Sin ti no soy nada
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Te necesito
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Toda la noche en la calle
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Moriría por vos
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Estrella de mar
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Salir corriendo
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>

						<button class="addsong" onclick="window.location.href='MuCr_mymusic_addsongs.php'">add a song</button>

					</li>
				</ul>

			</div>
			<button class="deletealbum">Delete album</button>
		</div>
		<div class="newstudio">
			<img src="img/amaral/amaral3.jpg" alt="album">
			<div class="listado">
				<ul>
					<li>
						<h1>Estrellas en el mar3</h1>
					</li>
					<li>Sin ti no soy nada
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Te necesito
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Toda la noche en la calle
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Moriría por vos
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Estrella de mar
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Salir corriendo
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Sin ti no soy nada
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Te necesito
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Toda la noche en la calle
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Moriría por vos
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Estrella de mar
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Salir corriendo
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>

						<button class="addsong" onclick="window.location.href='MuCr_mymusic_addsongs.php'">add a song</button>

					</li>
				</ul>

			</div>
			<button class="deletealbum">Delete album</button>
		</div>
		<div class="newstudio">
			<img src="img/amaral/amaral4.jpg" alt="album">
			<div class="listado">
				<ul>
					<li>
						<h1>Estrellas en el mar4</h1>
					</li>
					<li>Sin ti no soy nada
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Te necesito
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Toda la noche en la calle
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Moriría por vos
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Estrella de mar
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Salir corriendo
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Sin ti no soy nada
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Te necesito
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Toda la noche en la calle
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Moriría por vos
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Estrella de mar
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Salir corriendo
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>
						<button class="addsong" onclick="window.location.href='MuCr_mymusic_addsongs.php'">add a song</button>
					</li>
				</ul>

			</div>
			<button class="deletealbum">Delete album</button>
		</div>
		<div class="newstudio">
			<img src="img/amaral/amaral5.jpg" alt="album">
			<div class="listado">
				<ul>
					<li>
						<h1>Estrellas en el mar5</h1>
					</li>
					<li>Sin ti no soy nada
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Te necesito
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Toda la noche en la calle
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Moriría por vos
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Estrella de mar
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Salir corriendo
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Sin ti no soy nada
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Te necesito
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Toda la noche en la calle
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Moriría por vos
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Estrella de mar
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>Salir corriendo
						<span class="tiempo">3:45</span>
						<button class="deletesong">delete song</button>
					</li>
					<li>

						<button class="addsong" onclick="window.location.href='MuCr_mymusic_addsongs.php'">add a song</button>

				</ul>

			</div>
			<button class="deletealbum">Delete album</button>
		</div>
	</div>
	<div class="mitad_dcha">
		<div class="centrado">Upload a new album</div>
		<div class="abajo">
			The Title of the album:
			<input type=text class="casilla1">
		</div>
		<div class="abajo">
			Select a Cover:
			<input type="file">
		</div>
		<div class="abajo">

			<button class="Addasong" onclick="window.location.href='MuCr_mymusic_addsongs.php'">Add Songs</button>

		</div>
		<div class="abajototal">
			<ul>
				<li>Sin ti no soy nada
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
				<li>Te necesito
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
				<li>Toda la noche en la calle
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
				<li>Moriría por vos
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
				<li>Estrella de mar
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
				<li>Salir corriendo
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
				<li>Sin ti no soy nada
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
				<li>Te necesito
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
				<li>Toda la noche en la calle
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
				<li>Moriría por vos
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
				<li>Estrella de mar
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
				<li>Salir corriendo
					<span class="tiempo">3:45</span>
					<button class="deletesong">delete song</button>
				</li>
			</ul>

		</div>
		<button class="submit">Submit </button>
	</div>
</body>

</html>