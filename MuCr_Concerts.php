<?php
require_once 'php/exit_unauthenticated.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Concerts by <?php echo urldecode($_GET['artist']); ?></title>
	<link rel="stylesheet" href="MuCr.css">
	<link rel="shortcut icon" href="img/MuCr.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/MuCr.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
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
				<button class="especialized_back">Sort by</button>
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

	<div class="autor">
		<img src="
			<?php
				$api_file = fopen("API_KEY_Lastfm.txt", "r");
				$API_KEY = fread($api_file, filesize("API_KEY_Lastfm.txt"));
				fclose($api_file);

				$artista = $_GET['artist'];
				$artista = str_replace(" ","+",$artista);
				$artista = str_replace("_","+",$artista);

				$imagenes="http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist=".$artista."&api_key=".$API_KEY."&format=json";

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $imagenes);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

				$response = curl_exec($ch);
				curl_close($ch);
				$response = json_decode($response, JSON_FORCE_OBJECT);

				echo $response['artist']['image'][3]['#text'];

			?>" alt="artist_principal">
	</div>
	<div class="name">
		<?php
			$url = $_GET['artist'];
			$url = str_replace("_"," ",$url);
			echo $url;
		 ?>
	</div>

	<div class="listaciudades">
		<div class="continentes">
			<button class="cont" onclick="opencountries(2);">AFRICA</button>
			<button class="cont" onclick="opencountries(6);">ASIA</button>
			<button class="cont" onclick="opencountries(1);">EUROPE</button>
			<button class="cont" onclick="opencountries(4);">NORTH AMERICA</button>
			<button class="cont" onclick="opencountries(3);">OCEANIA</button>
			<button class="cont" onclick="opencountries(5);">SOUTH AMERICA</button>
		</div>

		<div class="countries">
			<!-- AFRICA -->
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=AO">
				<div class="flag-african">
					<img src="img/flags/ao.png" alt="bandera">
					<div class="titulo">AO</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BF">
				<div class="flag-african">
					<img src="img/flags/bf.png" alt="bandera">
					<div class="titulo">BF</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BI">
				<div class="flag-african">
					<img src="img/flags/bi.png" alt="bandera">
					<div class="titulo">BI</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BJ">
				<div class="flag-african">
					<img src="img/flags/bj.png" alt="bandera">
					<div class="titulo">BJ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BW">
				<div class="flag-african">
					<img src="img/flags/bw.png" alt="bandera">
					<div class="titulo">BW</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CD">
				<div class="flag-african">
					<img src="img/flags/cd.png" alt="bandera">
					<div class="titulo">CD</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CF">
				<div class="flag-african">
					<img src="img/flags/cf.png" alt="bandera">
					<div class="titulo">CF</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CG">
				<div class="flag-african">
					<img src="img/flags/cg.png" alt="bandera">
					<div class="titulo">CG</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CI">
				<div class="flag-african">
					<img src="img/flags/ci.png" alt="bandera">
					<div class="titulo">CI</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CM">
				<div class="flag-african">
					<img src="img/flags/cm.png" alt="bandera">
					<div class="titulo">CM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CV">
				<div class="flag-african">
					<img src="img/flags/cv.png" alt="bandera">
					<div class="titulo">CV</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=DJ">
				<div class="flag-african">
					<img src="img/flags/dj.png" alt="bandera">
					<div class="titulo">DJ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=DZ">
				<div class="flag-african">
					<img src="img/flags/dz.png" alt="bandera">
					<div class="titulo">DZ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=EG">
				<div class="flag-african">
					<img src="img/flags/eg.png" alt="bandera">
					<div class="titulo">EG</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=EH">
				<div class="flag-african">
					<img src="img/flags/eh.png" alt="bandera">
					<div class="titulo">EH</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=ER">
				<div class="flag-african">
					<img src="img/flags/er.png" alt="bandera">
					<div class="titulo">ER</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=ET">
				<div class="flag-african">
					<img src="img/flags/et.png" alt="bandera">
					<div class="titulo">ET</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GA">
				<div class="flag-african">
					<img src="img/flags/ga.png" alt="bandera">
					<div class="titulo">GA</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GH">
				<div class="flag-african">
					<img src="img/flags/gh.png" alt="bandera">
					<div class="titulo">GH</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GM">
				<div class="flag-african">
					<img src="img/flags/gm.png" alt="bandera">
					<div class="titulo">GM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GN">
				<div class="flag-african">
					<img src="img/flags/gn.png" alt="bandera">
					<div class="titulo">GN</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GQ">
				<div class="flag-african">
					<img src="img/flags/gq.png" alt="bandera">
					<div class="titulo">GQ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GW">
				<div class="flag-african">
					<img src="img/flags/gw.png" alt="bandera">
					<div class="titulo">GW</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=KE">
				<div class="flag-african">
					<img src="img/flags/ke.png" alt="bandera">
					<div class="titulo">KE</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=KM">
				<div class="flag-african">
					<img src="img/flags/km.png" alt="bandera">
					<div class="titulo">KM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=LR">
				<div class="flag-african">
					<img src="img/flags/lr.png" alt="bandera">
					<div class="titulo">LR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=LS">
				<div class="flag-african">
					<img src="img/flags/ls.png" alt="bandera">
					<div class="titulo">LS</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=LY">
				<div class="flag-african">
					<img src="img/flags/ly.png" alt="bandera">
					<div class="titulo">LY</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MA">
				<div class="flag-african">
					<img src="img/flags/ma.png" alt="bandera">
					<div class="titulo">MA</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MG">
				<div class="flag-african">
					<img src="img/flags/mg.png" alt="bandera">
					<div class="titulo">MG</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=ML">
				<div class="flag-african">
					<img src="img/flags/ml.png" alt="bandera">
					<div class="titulo">ML</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MR">
				<div class="flag-african">
					<img src="img/flags/mr.png" alt="bandera">
					<div class="titulo">MR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MU">
				<div class="flag-african">
					<img src="img/flags/mu.png" alt="bandera">
					<div class="titulo">MU</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MW">
				<div class="flag-african">
					<img src="img/flags/mw.png" alt="bandera">
					<div class="titulo">MW</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MZ">
				<div class="flag-african">
					<img src="img/flags/mz.png" alt="bandera">
					<div class="titulo">MZ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=NA">
				<div class="flag-african">
					<img src="img/flags/na.png" alt="bandera">
					<div class="titulo">NA</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=NE">
				<div class="flag-african">
					<img src="img/flags/ne.png" alt="bandera">
					<div class="titulo">NE</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=NG">
				<div class="flag-african">
					<img src="img/flags/ng.png" alt="bandera">
					<div class="titulo">NG</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=RW">
				<div class="flag-african">
					<img src="img/flags/rw.png" alt="bandera">
					<div class="titulo">RW</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SC">
				<div class="flag-african">
					<img src="img/flags/sc.png" alt="bandera">
					<div class="titulo">SC</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SD">
				<div class="flag-african">
					<img src="img/flags/sd.png" alt="bandera">
					<div class="titulo">SD</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SL">
				<div class="flag-african">
					<img src="img/flags/sl.png" alt="bandera">
					<div class="titulo">SL</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SN">
				<div class="flag-african">
					<img src="img/flags/sn.png" alt="bandera">
					<div class="titulo">SN</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SO">
				<div class="flag-african">
					<img src="img/flags/so.png" alt="bandera">
					<div class="titulo">SO</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=ST">
				<div class="flag-african">
					<img src="img/flags/st.png" alt="bandera">
					<div class="titulo">ST</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SZ">
				<div class="flag-african">
					<img src="img/flags/sz.png" alt="bandera">
					<div class="titulo">SZ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TD">
				<div class="flag-african">
					<img src="img/flags/td.png" alt="bandera">
					<div class="titulo">TD</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TG">
				<div class="flag-african">
					<img src="img/flags/tg.png" alt="bandera">
					<div class="titulo">TG</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TN">
				<div class="flag-african">
					<img src="img/flags/tn.png" alt="bandera">
					<div class="titulo">TN</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TZ">
				<div class="flag-african">
					<img src="img/flags/tz.png" alt="bandera">
					<div class="titulo">TZ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=UG">
				<div class="flag-african">
					<img src="img/flags/ug.png" alt="bandera">
					<div class="titulo">UG</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=ZA">
				<div class="flag-african">
					<img src="img/flags/za.png" alt="bandera">
					<div class="titulo">ZA</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=ZM">
				<div class="flag-african">
					<img src="img/flags/zm.png" alt="bandera">
					<div class="titulo">ZM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=ZW">
				<div class="flag-african">
					<img src="img/flags/zw.png" alt="bandera">
					<div class="titulo">ZW</div>
				</div>
			</a>
			<!-- ASIA -->
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=AE">
				<div class="flag-asia">
					<img src="img/flags/ae.png" alt="bandera">
					<div class="titulo">AE</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=AF">
				<div class="flag-asia">
					<img src="img/flags/af.png" alt="bandera">
					<div class="titulo">AF</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=AM">
				<div class="flag-asia">
					<img src="img/flags/am.png" alt="bandera">
					<div class="titulo">AM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=AZ">
				<div class="flag-asia">
					<img src="img/flags/az.png" alt="bandera">
					<div class="titulo">AZ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BD">
				<div class="flag-asia">
					<img src="img/flags/bd.png" alt="bandera">
					<div class="titulo">BD</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BH">
				<div class="flag-asia">
					<img src="img/flags/bh.png" alt="bandera">
					<div class="titulo">BH</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BN">
				<div class="flag-asia">
					<img src="img/flags/bn.png" alt="bandera">
					<div class="titulo">BN</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BT">
				<div class="flag-asia">
					<img src="img/flags/bt.png" alt="bandera">
					<div class="titulo">BT</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CN">
				<div class="flag-asia">
					<img src="img/flags/cn.png" alt="bandera">
					<div class="titulo">CN</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CY">
				<div class="flag-asia">
					<img src="img/flags/cy.png" alt="bandera">
					<div class="titulo">CY</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GE">
				<div class="flag-asia">
					<img src="img/flags/ge.png" alt="bandera">
					<div class="titulo">GE</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=ID">
				<div class="flag-asia">
					<img src="img/flags/id.png" alt="bandera">
					<div class="titulo">ID</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=IL">
				<div class="flag-asia">
					<img src="img/flags/il.png" alt="bandera">
					<div class="titulo">IL</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=IN">
				<div class="flag-asia">
					<img src="img/flags/in.png" alt="bandera">
					<div class="titulo">IN</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=IQ">
				<div class="flag-asia">
					<img src="img/flags/iq.png" alt="bandera">
					<div class="titulo">IQ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=IR">
				<div class="flag-asia">
					<img src="img/flags/ir.png" alt="bandera">
					<div class="titulo">IR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=JO">
				<div class="flag-asia">
					<img src="img/flags/jo.png" alt="bandera">
					<div class="titulo">JO</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=JP">
				<div class="flag-asia">
					<img src="img/flags/jp.png" alt="bandera">
					<div class="titulo">JP</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=KG">
				<div class="flag-asia">
					<img src="img/flags/kg.png" alt="bandera">
					<div class="titulo">KG</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=KH">
				<div class="flag-asia">
					<img src="img/flags/kh.png" alt="bandera">
					<div class="titulo">KH</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=KI">
				<div class="flag-asia">
					<img src="img/flags/ki.png" alt="bandera">
					<div class="titulo">KI</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=KP">
				<div class="flag-asia">
					<img src="img/flags/kp.png" alt="bandera">
					<div class="titulo">KP</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=KR">
				<div class="flag-asia">
					<img src="img/flags/kr.png" alt="bandera">
					<div class="titulo">KR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=KW">
				<div class="flag-asia">
					<img src="img/flags/kw.png" alt="bandera">
					<div class="titulo">KW</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=KZ">
				<div class="flag-asia">
					<img src="img/flags/kz.png" alt="bandera">
					<div class="titulo">KZ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=LA">
				<div class="flag-asia">
					<img src="img/flags/la.png" alt="bandera">
					<div class="titulo">LA</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=LB">
				<div class="flag-asia">
					<img src="img/flags/lb.png" alt="bandera">
					<div class="titulo">LB</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=LK">
				<div class="flag-asia">
					<img src="img/flags/lk.png" alt="bandera">
					<div class="titulo">LK</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MM">
				<div class="flag-asia">
					<img src="img/flags/mm.png" alt="bandera">
					<div class="titulo">MM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MV">
				<div class="flag-asia">
					<img src="img/flags/mv.png" alt="bandera">
					<div class="titulo">MV</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MY">
				<div class="flag-asia">
					<img src="img/flags/my.png" alt="bandera">
					<div class="titulo">MY</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=NP">
				<div class="flag-asia">
					<img src="img/flags/np.png" alt="bandera">
					<div class="titulo">NP</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=OM">
				<div class="flag-asia">
					<img src="img/flags/om.png" alt="bandera">
					<div class="titulo">OM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=PH">
				<div class="flag-asia">
					<img src="img/flags/ph.png" alt="bandera">
					<div class="titulo">PH</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=PK">
				<div class="flag-asia">
					<img src="img/flags/pk.png" alt="bandera">
					<div class="titulo">PK</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=QA">
				<div class="flag-asia">
					<img src="img/flags/qa.png" alt="bandera">
					<div class="titulo">QA</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=RU">
				<div class="flag-asia">
					<img src="img/flags/Asia/ru.png" alt="bandera">
					<div class="titulo">RU</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SA">
				<div class="flag-asia">
					<img src="img/flags/sa.png" alt="bandera">
					<div class="titulo">SA</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SG">
				<div class="flag-asia">
					<img src="img/flags/sg.png" alt="bandera">
					<div class="titulo">SG</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SY">
				<div class="flag-asia">
					<img src="img/flags/sy.png" alt="bandera">
					<div class="titulo">SY</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TH">
				<div class="flag-asia">
					<img src="img/flags/th.png" alt="bandera">
					<div class="titulo">TH</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TJ">
				<div class="flag-asia">
					<img src="img/flags/tj.png" alt="bandera">
					<div class="titulo">TJ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TL">
				<div class="flag-asia">
					<img src="img/flags/tl.png" alt="bandera">
					<div class="titulo">TL</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TM">
				<div class="flag-asia">
					<img src="img/flags/tm.png" alt="bandera">
					<div class="titulo">TM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TR">
				<div class="flag-asia">
					<img src="img/flags/tr.png" alt="bandera">
					<div class="titulo">TR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TW">
				<div class="flag-asia">
					<img src="img/flags/tw.png" alt="bandera">
					<div class="titulo">TW</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=UZ">
				<div class="flag-asia">
					<img src="img/flags/uz.png" alt="bandera">
					<div class="titulo">UZ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=VN">
				<div class="flag-asia">
					<img src="img/flags/vn.png" alt="bandera">
					<div class="titulo">VN</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=YE">
				<div class="flag-asia">
					<img src="img/flags/ye.png" alt="bandera">
					<div class="titulo">YE</div>
				</div>
			</a>
			<!-- EUROPE -->
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=AD">
				<div class="flag-europe">
					<img src="img/flags/ad.png" alt="bandera">
					<div class="titulo">AD</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=AL">
				<div class="flag-europe">
					<img src="img/flags/al.png" alt="bandera">
					<div class="titulo">AL</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=AT">
				<div class="flag-europe">
					<img src="img/flags/at.png" alt="bandera">
					<div class="titulo">AT</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BA">
				<div class="flag-europe">
					<img src="img/flags/ba.png" alt="bandera">
					<div class="titulo">BA</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BE">
				<div class="flag-europe">
					<img src="img/flags/be.png" alt="bandera">
					<div class="titulo">BE</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BG">
				<div class="flag-europe">
					<img src="img/flags/bg.png" alt="bandera">
					<div class="titulo">BG</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BY">
				<div class="flag-europe">
					<img src="img/flags/by.png" alt="bandera">
					<div class="titulo">BY</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CH">
				<div class="flag-europe">
					<img src="img/flags/ch.png" alt="bandera">
					<div class="titulo">CH</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CZ">
				<div class="flag-europe">
					<img src="img/flags/cz.png" alt="bandera">
					<div class="titulo">CZ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=DE">
				<div class="flag-europe">
					<img src="img/flags/de.png" alt="bandera">
					<div class="titulo">DE</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=DK">
				<div class="flag-europe">
					<img src="img/flags/dk.png" alt="bandera">
					<div class="titulo">DK</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=EE">
				<div class="flag-europe">
					<img src="img/flags/ee.png" alt="bandera">
					<div class="titulo">EE</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=ES">
				<div class="flag-europe">
					<img src="img/flags/es.png" alt="bandera">
					<div class="titulo">ES</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=FI">
				<div class="flag-europe">
					<img src="img/flags/fi.png" alt="bandera">
					<div class="titulo">FI</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=FR">
				<div class="flag-europe">
					<img src="img/flags/fr.png" alt="bandera">
					<div class="titulo">FR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GB">
				<div class="flag-europe">
					<img src="img/flags/gb.png" alt="bandera">
					<div class="titulo">GB</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GR">
				<div class="flag-europe">
					<img src="img/flags/gr.png" alt="bandera">
					<div class="titulo">GR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=HR">
				<div class="flag-europe">
					<img src="img/flags/hr.png" alt="bandera">
					<div class="titulo">HR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=HU">
				<div class="flag-europe">
					<img src="img/flags/hu.png" alt="bandera">
					<div class="titulo">HU</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=IE">
				<div class="flag-europe">
					<img src="img/flags/ie.png" alt="bandera">
					<div class="titulo">IE</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=IS">
				<div class="flag-europe">
					<img src="img/flags/is.png" alt="bandera">
					<div class="titulo">IS</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=IT">
				<div class="flag-europe">
					<img src="img/flags/it.png" alt="bandera">
					<div class="titulo">IT</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=KS">
				<div class="flag-europe">
					<img src="img/flags/ks.png" alt="bandera">
					<div class="titulo">KS</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=LI">
				<div class="flag-europe">
					<img src="img/flags/li.png" alt="bandera">
					<div class="titulo">LI</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=LT">
				<div class="flag-europe">
					<img src="img/flags/lt.png" alt="bandera">
					<div class="titulo">LT</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=LU">
				<div class="flag-europe">
					<img src="img/flags/lu.png" alt="bandera">
					<div class="titulo">LU</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=LV">
				<div class="flag-europe">
					<img src="img/flags/lv.png" alt="bandera">
					<div class="titulo">LV</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MC">
				<div class="flag-europe">
					<img src="img/flags/mc.png" alt="bandera">
					<div class="titulo">MC</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MD">
				<div class="flag-europe">
					<img src="img/flags/md.png" alt="bandera">
					<div class="titulo">MD</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=ME">
				<div class="flag-europe">
					<img src="img/flags/me.png" alt="bandera">
					<div class="titulo">ME</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MK">
				<div class="flag-europe">
					<img src="img/flags/mk.png" alt="bandera">
					<div class="titulo">MK</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MT">
				<div class="flag-europe">
					<img src="img/flags/mt.png" alt="bandera">
					<div class="titulo">MT</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=NL">
				<div class="flag-europe">
					<img src="img/flags/nl.png" alt="bandera">
					<div class="titulo">NL</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=NO">
				<div class="flag-europe">
					<img src="img/flags/no.png" alt="bandera">
					<div class="titulo">NO</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=PL">
				<div class="flag-europe">
					<img src="img/flags/pl.png" alt="bandera">
					<div class="titulo">PL</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=PT">
				<div class="flag-europe">
					<img src="img/flags/pt.png" alt="bandera">
					<div class="titulo">PT</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=RO">
				<div class="flag-europe">
					<img src="img/flags/ro.png" alt="bandera">
					<div class="titulo">RO</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=RS">
				<div class="flag-europe">
					<img src="img/flags/rs.png" alt="bandera">
					<div class="titulo">RS</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SE">
				<div class="flag-europe">
					<img src="img/flags/se.png" alt="bandera">
					<div class="titulo">SE</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SI">
				<div class="flag-europe">
					<img src="img/flags/si.png" alt="bandera">
					<div class="titulo">SI</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SK">
				<div class="flag-europe">
					<img src="img/flags/sk.png" alt="bandera">
					<div class="titulo">SK</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SM">
				<div class="flag-europe">
					<img src="img/flags/sm.png" alt="bandera">
					<div class="titulo">SM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=UA">
				<div class="flag-europe">
					<img src="img/flags/ua.png" alt="bandera">
					<div class="titulo">UA</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=VA">
				<div class="flag-europe">
					<img src="img/flags/va.png" alt="bandera">
					<div class="titulo">VA</div>
				</div>
			</a>
			<!-- NORTH AMERICA -->
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=AG">
				<div class="flag-namerica">
					<img src="img/flags/ag.png" alt="bandera">
					<div class="titulo">AG</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BB">
				<div class="flag-namerica">
					<img src="img/flags/bb.png" alt="bandera">
					<div class="titulo">BB</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BS">
				<div class="flag-namerica">
					<img src="img/flags/bs.png" alt="bandera">
					<div class="titulo">BS</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BZ">
				<div class="flag-namerica">
					<img src="img/flags/bz.png" alt="bandera">
					<div class="titulo">BZ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CA">
				<div class="flag-namerica">
					<img src="img/flags/ca.png" alt="bandera">
					<div class="titulo">CA</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CR">
				<div class="flag-namerica">
					<img src="img/flags/cr.png" alt="bandera">
					<div class="titulo">CR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CU">
				<div class="flag-namerica">
					<img src="img/flags/cu.png" alt="bandera">
					<div class="titulo">CU</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=DM">
				<div class="flag-namerica">
					<img src="img/flags/dm.png" alt="bandera">
					<div class="titulo">DM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=DO">
				<div class="flag-namerica">
					<img src="img/flags/do.png" alt="bandera">
					<div class="titulo">DO</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GD">
				<div class="flag-namerica">
					<img src="img/flags/gd.png" alt="bandera">
					<div class="titulo">GD</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GT">
				<div class="flag-namerica">
					<img src="img/flags/gt.png" alt="bandera">
					<div class="titulo">GT</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=HN">
				<div class="flag-namerica">
					<img src="img/flags/hn.png" alt="bandera">
					<div class="titulo">HN</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=HT">
				<div class="flag-namerica">
					<img src="img/flags/ht.png" alt="bandera">
					<div class="titulo">HT</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=JM">
				<div class="flag-namerica">
					<img src="img/flags/jm.png" alt="bandera">
					<div class="titulo">JM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=KN">
				<div class="flag-namerica">
					<img src="img/flags/kn.png" alt="bandera">
					<div class="titulo">KN</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=LC">
				<div class="flag-namerica">
					<img src="img/flags/lc.png" alt="bandera">
					<div class="titulo">LC</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MX">
				<div class="flag-namerica">
					<img src="img/flags/mx.png" alt="bandera">
					<div class="titulo">MX</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=NI">
				<div class="flag-namerica">
					<img src="img/flags/ni.png" alt="bandera">
					<div class="titulo">NI</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=PA">
				<div class="flag-namerica">
					<img src="img/flags/pa.png" alt="bandera">
					<div class="titulo">PA</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SV">
				<div class="flag-namerica">
					<img src="img/flags/sv.png" alt="bandera">
					<div class="titulo">SV</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TT">
				<div class="flag-namerica">
					<img src="img/flags/tt.png" alt="bandera">
					<div class="titulo">TT</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=US">
				<div class="flag-namerica">
					<img src="img/flags/us.png" alt="bandera">
					<div class="titulo">US</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=VC">
				<div class="flag-namerica">
					<img src="img/flags/vc.png" alt="bandera">
					<div class="titulo">VC</div>
				</div>
			</a>
			<!-- OCEANIA -->
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=AU">
				<div class="flag-oceania">
					<img src="img/flags/au.png" alt="bandera">
					<div class="titulo">AU</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=FJ">
				<div class="flag-oceania">
					<img src="img/flags/fj.png" alt="bandera">
					<div class="titulo">FJ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=FM">
				<div class="flag-oceania">
					<img src="img/flags/fm.png" alt="bandera">
					<div class="titulo">FM</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=MH">
				<div class="flag-oceania">
					<img src="img/flags/mh.png" alt="bandera">
					<div class="titulo">MH</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=NR">
				<div class="flag-oceania">
					<img src="img/flags/nr.png" alt="bandera">
					<div class="titulo">NR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=NZ">
				<div class="flag-oceania">
					<img src="img/flags/nz.png" alt="bandera">
					<div class="titulo">NZ</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=PG">
				<div class="flag-oceania">
					<img src="img/flags/pg.png" alt="bandera">
					<div class="titulo">PG</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=PW">
				<div class="flag-oceania">
					<img src="img/flags/pw.png" alt="bandera">
					<div class="titulo">PW</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SB">
				<div class="flag-oceania">
					<img src="img/flags/sb.png" alt="bandera">
					<div class="titulo">SB</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TO">
				<div class="flag-oceania">
					<img src="img/flags/to.png" alt="bandera">
					<div class="titulo">TO</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=TV">
				<div class="flag-oceania">
					<img src="img/flags/tv.png" alt="bandera">
					<div class="titulo">TV</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=VU">
				<div class="flag-oceania">
					<img src="img/flags/vu.png" alt="bandera">
					<div class="titulo">VU</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=WS">
				<div class="flag-oceania">
					<img src="img/flags/ws.png" alt="bandera">
					<div class="titulo">WS</div>
				</div>
			</a>
			<!-- SOUTH AMERICA -->
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=AR">
				<div class="flag-samerica">
					<img src="img/flags/ar.png" alt="bandera">
					<div class="titulo">AR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BO">
				<div class="flag-samerica">
					<img src="img/flags/bo.png" alt="bandera">
					<div class="titulo">BO</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=BR">
				<div class="flag-samerica">
					<img src="img/flags/br.png" alt="bandera">
					<div class="titulo">BR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CL">
				<div class="flag-samerica">
					<img src="img/flags/cl.png" alt="bandera">
					<div class="titulo">CL</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=CO">
				<div class="flag-samerica">
					<img src="img/flags/co.png" alt="bandera">
					<div class="titulo">CO</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=EC">
				<div class="flag-samerica">
					<img src="img/flags/ec.png" alt="bandera">
					<div class="titulo">EC</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=GY">
				<div class="flag-samerica">
					<img src="img/flags/gy.png" alt="bandera">
					<div class="titulo">GY</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=PE">
				<div class="flag-samerica">
					<img src="img/flags/pe.png" alt="bandera">
					<div class="titulo">PE</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=PY">
				<div class="flag-samerica">
					<img src="img/flags/py.png" alt="bandera">
					<div class="titulo">PY</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=SR">
				<div class="flag-samerica">
					<img src="img/flags/sr.png" alt="bandera">
					<div class="titulo">SR</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=UY">
				<div class="flag-samerica">
					<img src="img/flags/uy.png" alt="bandera">
					<div class="titulo">UY</div>
				</div>
			</a>
			<a href="MuCr_Concerts.php?artist=<?php echo $_GET['artist']; ?>&country=VE">
				<div class="flag-samerica">
					<img src="img/flags/ve.png" alt="bandera">
					<div class="titulo">VE</div>
				</div>
			</a>

		</div>

		<div class="current_country">
			<?php
				if(isset($_GET['country']) && $_GET['country'] != ""){
					if($_GET['country'] == "Not yet"){
						echo "Country not supported yet";
					}
					else{
						echo $_GET['country'];
						echo "<img src=\"img/flags/" . strtolower($_GET['country']) . ".png\" alt=\"Flag\">";
					}
				}
				else{
					echo "Select a country";
				}
			?>
		</div>
		<div class="horarios">
			<?php
				include 'php/fill_concert.php';

				if(isset($_GET['country']) && $_GET['country'] != ""){
					printConcerts($_GET['artist'], $_GET['country']);
				}
			?>
		</div>
	</div>

	<div class="artistarel">
		Related artists
	</div>

	<div class="artistarelbox">
		<?php
			$api_file = fopen("API_KEY_Lastfm.txt", "r");
			$API_KEY = fread($api_file, filesize("API_KEY_Lastfm.txt"));
			fclose($api_file);


			$artista=$_GET['artist'];
			$url="http://ws.audioscrobbler.com/2.0/?method=artist.getsimilar&artist=".$artista."&api_key=".$API_KEY."&format=json";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

			$response = curl_exec($ch);
			curl_close($ch);
			$response = json_decode($response, JSON_FORCE_OBJECT);

			for($i = 0; $i < 12; $i++){
				echo "<a href=\"MuCr_Concerts.php?artist=".urlencode($response['similarartists']['artist'][$i]['name'])."\">";
				echo "<div class=\"box\">";
				echo "<img src=\"".$response['similarartists']['artist'][$i]['image'][2]['#text']."\" alt=\"artist\">";
				echo "<div class=\"titulo\">".$response['similarartists']['artist'][$i]['name']."</div>";
				echo "</div></a>";
			}
		?>

	</div>
	<button class="button_studio" onclick="window.location.href='MuCr_mymusic.php'">
		&nbsp;Your Studio
	</button>

</body>

</html>
