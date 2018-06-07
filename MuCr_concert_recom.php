<?php
require_once 'php/exit_unauthenticated.php';
?>
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
		<?php
			include 'concertrecomendations.php';
			$recommendation = new concerRec($_COOKIE['email']);
		?>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM1(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM1(); ?></div>
				<img src="<?php $recommendation->getImage(1); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM2(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM2(); ?></div>
				<img src="<?php $recommendation->getImage(2); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM3(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM3(); ?></div>
				<img src="<?php $recommendation->getImage(3); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM4(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM4(); ?></div>
				<img src="<?php $recommendation->getImage(4); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM5(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM5(); ?></div>
				<img src="<?php $recommendation->getImage(5); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM6(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM6(); ?></div>
				<img src="<?php $recommendation->getImage(6); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM7(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM7(); ?></div>
				<img src="<?php $recommendation->getImage(7); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM8(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM8(); ?></div>
				<img src="<?php $recommendation->getImage(8); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM9(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM9(); ?></div>
				<img src="<?php $recommendation->getImage(9); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM10(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM10(); ?></div>
				<img src="<?php $recommendation->getImage(10); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM11(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM11(); ?></div>
				<img src="<?php $recommendation->getImage(11); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM12(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM12(); ?></div>
				<img src="<?php $recommendation->getImage(12); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM13(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM13(); ?></div>
				<img src="<?php $recommendation->getImage(13); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM14(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM14(); ?></div>
				<img src="<?php $recommendation->getImage(14); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM15(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM15(); ?></div>
				<img src="<?php $recommendation->getImage(15); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM16(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM16(); ?></div>
				<img src="<?php $recommendation->getImage(16); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM17(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM17(); ?></div>
				<img src="<?php $recommendation->getImage(17); ?>" alt="Artist image">
			</div>
		</a>
		<a href="MuCr_Concerts.php?artist=<?php echo $recommendation->getM18(); ?>">
			<div class="itemo">
				<div class="artist_name"><?php echo $recommendation->getM18(); ?></div>
				<img src="<?php $recommendation->getImage(18); ?>" alt="Artist image">
			</div>
		</a>
	</div>

</body>

</html>
