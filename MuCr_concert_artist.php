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
				<img src="img/icons/settings.png" alt="Settings">Settings
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
				<a href="MuCr_Milist.php?mylist=seen"><button class="especialized" style="display:block;">My albums</button> <!-- 27 --></a>
				<a href="MuCr_Milist.php?mylist=like"><button class="especialized" style="display:block;">My likes</button> <!-- 28 --></a>
			</div>

			<form action="php/search_by_artist.php" class="search_artist" method="POST">
				<input type="text" value="Search by artist" name="artist_search" onfocus="if (this.value=='Search by artist') this.value='';"
				onblur="if (this.value == '') this.value = 'Search by artist';" class="search_artist_box">
				<input type="submit" name="search_artist" value="Go" class="search_artist_button">
			</form>
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
		<?php

			include 'php/connect_db.php';

			$user_email = $_COOKIE["email"];

			$api_file = fopen("API_KEY_Lastfm.txt", "r");
			$API_KEY = fread($api_file, filesize("API_KEY_Lastfm.txt"));
			fclose($api_file);


			$sql_myalbums = "SELECT  DISTINCT concert_artist FROM U_attended_C WHERE user_email = '$user_email'";

			$result = $conn->query($sql_myalbums);
			$rows = mysqli_fetch_all($result);

			$num_rows = count($rows);

			for($i = 0; $i < $num_rows; $i++){
				$album_artist = $rows[$i][0];

				$url = "http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist=" . urlencode($album_artist) . "&api_key=" . $API_KEY . "&format=json";

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

				$response = curl_exec($ch);
				curl_close($ch);
				$response = json_decode($response, JSON_FORCE_OBJECT);

				echo "<a href=\"MuCr_Concerts.php?artist=" . urlencode($album_artist) . "\">\n<div class=\"itemo\">\n<div class=\"artist_name\">".$album_artist."</div>\n<img src=\"" . $response["artist"]["image"][4]["#text"] . "\">\n</div>\n</a>";
			}
		?>
<!--
		<a href="MuCr_Concerts.php?artist=The_beatles"><div class="itemo">
			<div class="artist_name">The Beatles</div>
			<img src="img/concerts/artists/beatles.jpg" alt="The Beatles">
		</div></a>
		<div class="itemo">
			<div class="artist_name">Chuck Berry</div>
			<img src="img/concerts/artists/berry.jpg" alt="Chuck Berry">
		</div>
		<a href="MuCr_Concerts.php?artist=David_Bowie">
		<div class="itemo">
			<div class="artist_name">David Bowie</div>
			<img src="img/concerts/artists/bowie.jpg" alt="David Bowie">
		</div>
		</a>
		<a href="MuCr_Concerts.php?artist=Bob_Dylan">
		<div class="itemo">
			<div class="artist_name">Bob Dylan</div>
			<img src="img/concerts/artists/dylan.jpg" alt="Bob Dylan">
		</div>
		</a>
		<a href="MuCr_Concerts.php?artist=Electric_Light_Orchestra">
		<div class="itemo">
			<div class="artist_name">Electric Light Orchestra</div>
			<img src="img/concerts/artists/elo.jpg" alt="Electric Light Orchestra">
		</div>
				</a>
		<a href="MuCr_Concerts.php?artist=Elton_John">
		<div class="itemo">
			<div class="artist_name">Elton John</div>
			<img src="img/concerts/artists/elton.jpg" alt="Elton John">
		</div>
				</a>
		<a href="MuCr_Concerts.php?artist=Elvis_Presley">
		<div class="itemo">
			<div class="artist_name">Elvis Presley</div>
			<img src="img/concerts/artists/elvis.jpg" alt="Elvis Presley">
		</div>
				</a>
		<a href="MuCr_Concerts.php?artist=Foo_Fighters">
		<div class="itemo">
			<div class="artist_name">Foo Fighters</div>
			<img src="img/concerts/artists/fighters.jpg" alt="Foo Fighters">
		</div>
				</a>
		<a href="MuCr_Concerts.php?artist=Green_Day">
		<div class="itemo">
			<div class="artist_name">Green Day</div>
			<img src="img/concerts/artists/green.jpg" alt="Green Day">
		</div>
				</a>
		<a href="MuCr_Concerts.php?artist=George_Harrison">
		<div class="itemo">
			<div class="artist_name">George Harrison</div>
			<img src="img/concerts/artists/harrison.jpg" alt="George Harrison">
		</div>
				</a>
		<a href="MuCr_Concerts.php?artist=John_Lennon">
		<div class="itemo">
			<div class="artist_name">John Lennon</div>
			<img src="img/concerts/artists/lennon.jpg" alt="John Lennon">
		</div>
				</a>
		<a href="MuCr_Concerts.php?artist=Paul_McCartney">
		<div class="itemo">
			<div class="artist_name">Paul McCartney</div>
			<img src="img/concerts/artists/mccartney.jpg" alt="Paul McCartney">
		</div>
				</a>
		<a href="MuCr_Concerts.php?artist=Nirvana">
		<div class="itemo">
			<div class="artist_name">Nirvana</div>
			<img src="img/concerts/artists/nirvana.jpg" alt="Nirvana">
		</div>
				</a>
		<a href="MuCr_Concerts.php?artist=Queen">
		<div class="itemo">
			<div class="artist_name">Queen</div>
			<img src="img/concerts/artists/queen.jpg" alt="Queen">
		</div>
				</a>
		<a href="MuCr_Concerts.php?artist=Ringo_Starr">
		<div class="itemo">
			<div class="artist_name">Ringo Starr</div>
			<img src="img/concerts/artists/ringo.jpg" alt="Ringo Starr">
		</div>
		</a>
		<a href="MuCr_Concerts.php?artist=The_Rolling_Stones">
		<div class="itemo">
			<div class="artist_name">The Rolling Stones</div>
			<img src="img/concerts/artists/stones.jpg" alt="The Rolling Stones">
		</div>
		</a>
		<a href="MuCr_Concerts.php?artist=Roger_Waters">
		<div class="itemo">
			<div class="artist_name">Roger Waters</div>
			<img src="img/concerts/artists/waters.jpg" alt="Roger Waters">
		</div>
		</a>
		<a href="MuCr_Concerts.php?artist=The_Who">
		<div class="itemo">
			<div class="artist_name">The Who</div>
			<img src="img/concerts/artists/who.jpg" alt="The Who">
		</div>
		</a> -->
	</div>


</body>

</html>
