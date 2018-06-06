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

	<form action="php/search_by_location.php" class="search_location" method="POST">
		<input type="text" value="City" name="city" onfocus="if (this.value=='City') this.value='';"
		onblur="if (this.value == '') this.value = 'City,Country,...';" class="search_location_box_city">

		<input type="text" value="radius" name="radius" onfocus="if (this.value=='radius') this.value='';"
		onblur="if (this.value == '') this.value = 'radius';" class="search_location_box_radius">
		<input type="submit" name="search_location" value="Go" class="search_location_button">
	</form>

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
		<?php
				if($_GET['type']=="country"){
					$api_file = fopen("API_KEY_Ticketmaster.txt", "r");
					$API_KEY = fread($api_file, filesize("API_KEY_Ticketmaster.txt"));
					fclose($api_file);


				}
				else{
						if($_GET['type']=="locality"){
							$api_file = fopen("API_KEY_Ticketmaster.txt", "r");
							$API_KEY = fread($api_file, filesize("API_KEY_Ticketmaster.txt"));
							fclose($api_file);

							$api_file2 = fopen("API_KEY_Imagenes.txt", "r");
							$API_KEY2 = fread($api_file2, filesize("API_KEY_Imagenes.txt"));
							fclose($api_file2);


							$url = "https://app.ticketmaster.com/discovery/v2/events.json?latlong=".$_GET['lat'].",".$_GET['lng']."&radius=".$_GET['radius']."&apikey=".$API_KEY;
							$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, $url);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');
							$response = curl_exec($ch);
							curl_close($ch);
							$response = json_decode($response, JSON_FORCE_OBJECT);

							$max=count($response['_embedded']['events']);

							for($i=0;$i<$max;$i++){
								$title=$response['_embedded']['events'][$i]['name'];//titulo del evento
								$imge=['_embedded']['events'][$i]["images"][0]['url'];//la imagen
								$date=$response['_embedded']['events'][$i]['dates']['start']['localDate'];//la fecha
								$hour=$response['_embedded']['events'][$i]['dates']['start']['localTime'];//la hora
								$city=$response['_embedded']['events'][$i] ['_embedded']['venues'][0]['city']['name'];//la ciudad
								$coin=$response['_embedded']['events'][$i] ['priceRanges'][0]['currency'];//la moneda
								$min_prec=$response['_embedded']['events'][$i] ['priceRanges'][0]['min'];//minimo precio
								$max_prec=$response['_embedded']['events'][$i] ['priceRanges'][0]['min'];//maximo precio
								$link=$response['_embedded']['events'][$i]['url'];//la url para comprar el ticket

								$uriFlag="img/flags/".strtolower($_GET['country']).".png";//la bandera del pais
								////////////////////////////////////////////////////////////////////////////////////////////
								$imagenes = "https://pixabay.com/api/?key=".$API_KEY2."&q=".$city."&image_type=photo&pretty=true&format=json";
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, $imagenes);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');
								$response = curl_exec($ch);
								curl_close($ch);
								$response = json_decode($response, JSON_FORCE_OBJECT);

								$urlcity=$response['hits'][5]['largeImageURL'];
								////////////////////////////////////////////////////////////////////////////////////////////////
								echo "<div class=\"concert\">";
									echo "<img src=\"".$imge."\" alt=\"".$title."\">";
									echo	"<div class=\"name_artist\">";
										echo $title;
									echo "</div>";
									echo "<div class=\"location_date\">";
										echo $date." at ".$hour;
									echo "<br/> Minimum:".$min_prec." ".$coin." Maximum: ".$max_prec." ".$coin;
									echo "</div>";
									echo "<div class=\"city_near\">";
										echo "	<img src=\"".$urlcity."\" alt=\"ciudad\">";
										echo "<div class=\"flag\">";
											echo "<img src=\"".$uriFlag."\" alt=\"bandera\">";
										echo "</div>";
										echo "<div class=\"titulo\">".$city."</div>";
								echo"</div></div>";


								$title=$imge=$date=$hour=$city=$coin=$min_prec=$max_prec=$link=$uriFlag=$imagenes=NULL;
							}

						}
						else{

								echo "Busca en el buscador";
						}
				}

			?>


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

	</div>

</body>

</html>
