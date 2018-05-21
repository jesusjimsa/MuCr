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

	<div class="genre">
		Rock
	</div>

	<div class="grid-container">
		<a href="MuCr_detailed_album_abbey_road.php">
			<div class="itemo">
				<img src="img/covers/Rock/Abbey.jpg" alt="cover">
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
			<img src="img/covers/Rock/Berry.png" alt="cover">
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
			<img src="img/covers/Rock/Bleed.jpg" alt="cover">
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
			<img src="img/covers/Rock/Blue.jpg" alt="cover">
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
			<img src="img/covers/Rock/Creole.jpg" alt="cover">
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
			<div class="close_album">
				<a href="MuCr_collection.php">
					<img id="peque" src="img/icons/close.png" alt="close">
				</a>
			</div>
		</div>

		<div class="itemo">
			<img src="img/covers/Rock/Games.jpg" alt="cover">
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
			<img src="img/covers/Rock/Highway.jpg" alt="cover">
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
			<img src="img/covers/Rock/Idiot.jpg" alt="cover">
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
			<img src="img/covers/Rock/Nevermind.jpg" alt="cover">
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
			<img src="img/covers/Rock/Next.jpg" alt="cover">
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
			<img src="img/covers/Rock/Opera.png" alt="cover">
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
			<img src="img/covers/Rock/Pass.jpg" alt="cover">
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
			<img src="img/covers/Rock/Ringo.jpg" alt="cover">
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
			<img src="img/covers/Rock/Shape.jpg" alt="cover">
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
			<img src="img/covers/Rock/Stardust.jpg" alt="cover">
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
			<img src="img/covers/Rock/Straits.jpg" alt="cover">
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
			<img src="img/covers/Rock/acdc.jpg" alt="cover">
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
		<div class="seleccionado">
			<div class="imagen">
				<img src="img/covers/Rock/Diamonds_Big.jpg" alt="cover">
			</div>
			<div class="titulo_especial">Diamonds</div>
			<div class="album_artist">Elton John - 3:51:54</div>
			<div class="album_type">CD</div>
			<div class="listofsongs">
				<div class="songs">Your Song - 4:03
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Tiny Dancer - 6:16
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Rocket Man - 4:42
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Honky Cat - 5:13
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Crocodile Rock - 3:55
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Daniel - 3:54
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Saturday Night's Alright for Fighting - 4:54
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Goodbye Yellow Brick Road - 3:14
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Candle in the Wind - 3:50
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Bennie and the Jets - 5:23
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">The Bitch Is Back - 3:45
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Philadelphia Freedom - 5:20
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Island Girl - 3:43
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Someone Saved My Life Tonight - 6:45
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Don't Go Breaking My Heart - 4:35
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Sorry Seems to Be the Hardest Word - 3:52
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Little Jeannie - 4:49
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Song for Guy - 6:34
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Blue Eyes - 3:28
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">I'm Still Standing - 3:04
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">I Guess That's Why They Call It the Blues - 4:43
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Sad Songs (Say So Much) - 4:48
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Nikita - 5:44
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">I Don't Wanna Go on with You Like That - 4:34
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Sacrifice - 5:05
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Don't Let the Sun Go Down on Me - 5:48
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Something About the Way You Look Tonight - 4:00
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">I Want Love - 4:37
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Can You Feel the Love Tonight - 4:01
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Are You Ready for Love - 3:32
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Electricity - 3:32
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Home Again - 5:02
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Looking Up - 4:06
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Circle of Life - 4:53
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Skyline Pigeon - 3:54
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Lucy in the Sky with Diamonds - 6:16
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Pinball Wizard - 5:14
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Mama Can't Buy You Love - 4:04
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Part-Time Love - 3:13
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Victim of Love - 3:22
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Empty Garden (Hey Hey Johnny) - 5:10
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Kiss the Bride - 4:23
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">That's What Friends Are For - 4:15
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">The One - 5:53
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">True Love - 3:35
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Believe - 4:47
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Live Like Horses - 5:07
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Written in the Stars - 4:17
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">This Train Don't Stop There Anymore - 4:39
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Good Morning to the Night - 3:24
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
				<div class="songs">Step into Christmas - 4:29
					<div class="love_song">
						<img src="img/icons/heart.png" alt="love_song">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>