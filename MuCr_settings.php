<?php
require_once 'php/exit_unauthenticated.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>MuCr - Settings</title>
	<link rel="stylesheet" href="MuCr.css">
	<link rel="shortcut icon" href="img/MuCr.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/MuCr.js"></script>
</head>

<body class="stage4">
	<nav class="sidebar">
		<div class="user">
			<div class="imagen">
				<img src="img/MuCr.png" alt="MuCr">
			</div>
			<div class="titulo">LIRA</div>
		</div>
		<a class="blanco" href="MuCr_main.php">
			<div class="options">
				<img id="cuadrado" src="img/icons/home.png" alt="home">Home
			</div>
		</a>
	</nav>


	<nav class="musica">
		<a href="MuCr_main.php">
			<div class="boton_derecha">
				<img src="img/icons/music.jpg" alt="Music icon">Music
			</div>
		</a>
		<a href="MuCr_concert_artist.php">
			<div class="boton_izquierda">
				<img src="img/icons/concierto.png" alt="Concert icon">Concerts
			</div>
		</a>
		<div class="titulo_grupos">Log in as:</div>
		<div class="grupos">
			<a href="php/change_user_to_group.php?user=<?php echo $_COOKIE['grupo'];?>" >
			<div class="grupis">
				<div class="imagenes">
					<img src="<?php
					 	$email=$_COOKIE['grupo'];
						$sql_imagen="SELECT * FROM user WHERE email='$email'";
						include 'php/connect_db.php';
						$result = mysqli_query($conn, $sql_imagen);
						$row = mysqli_fetch_assoc($result);
							echo $row['URLimage'];
					?>" alt="you">
				</div>
				<div class="nome">MYSELF</div>
			</a>
			</div>
			<?php
				include 'php/connect_db.php';
				$email=$_COOKIE['grupo'];
				$sql_show="SELECT * FROM U_group WHERE user_email='$email'";

				$result = mysqli_query($conn, $sql_show);
				$row = mysqli_fetch_all($result);
				for($i=0;$i<count($row)-1;$i++){
						$name=$row[$i][1];
						$sql_image="SELECT * FROM grupo WHERE name='$name'";
						$result = mysqli_query($conn, $sql_image);
						$row2 = mysqli_fetch_assoc($result);
						$image=$row2['URLimage'];


						echo "<a href=\"php/change_user_to_group.php?user=".$name."\" >";
						echo "<div class=\"grupis\">";
						echo "<div class=\"imagenes\">";
						echo "<img src=\"".$image."\" alt=\"group\">";
						echo "</div>";
						echo "<div class=\"nome\">".$name."</div></div></a>";
				}
			?>

			<!-- <div class="grupis">
				<div class="imagenes">
					<img src="img/amy.jpg" alt="you">
				</div>
				<div class="nome">MYSELF</div>

			</div>
			<div class="grupis">
				<div class="imagenes">
					<img src="img/group.jpg" alt="group">
				</div>
				<div class="nome">#GROUP2</div>
			</div>
			<div class="grupis">
				<div class="imagenes">
					<img src="img/group.jpg" alt="group">
				</div>
				<div class="nome">#GROUP3</div>
			</div>
			<div class="grupis">
				<div class="imagenes">
					<img src="img/group.jpg" alt="group">
				</div>
				<div class="nome">#GROUP4</div>
			</div>
			<div class="grupis">
				<div class="imagenes">
					<img src="img/group.jpg" alt="group">
				</div>
				<div class="nome">#GROUP5</div>
			</div>
			<div class="grupis">
				<div class="imagenes">
					<img src="img/group.jpg" alt="group">
				</div>
				<div class="nome">#GROUP6</div>
			</div>
			<div class="grupis">
				<div class="imagenes">
					<img src="img/group.jpg" alt="group">
				</div>
				<div class="nome">#GROUP7</div>
			</div>
			<div class="grupis">
				<div class="imagenes">
					<img src="img/group.jpg" alt="group">
				</div>
				<div class="nome">#GROUP8</div>
			</div>
			<div class="grupis">
				<div class="imagenes">
					<img src="img/group.jpg" alt="group">
				</div>
				<div class="nome">#GROUP9</div>
			</div>
			<div class="grupis">
				<div class="imagenes">
					<img src="img/group.jpg" alt="group">
				</div>
				<div class="nome">#GROUP10</div>
			</div> -->
		</div>
		</div>

	</nav>

	<a href="../php/delete_cookies.php">
		<nav class="exit_sidebar">
			<img src="img/icons/close.png" alt="close">
		</nav>
	</a>


	<div class="ajustes_principal">
		<img id="ajustesimagen"
			src=
					<?php
						include 'php/connect_db.php';

						$email = $_COOKIE['email'];

						$sql_query = "SELECT URLimage FROM user WHERE email = '$email'";

						$result = mysqli_query($conn, $sql_query);
						$row = mysqli_fetch_assoc($result);


						echo $row['URLimage'];
						ob_flush();
						flush();
					?>
		 alt="Profile picture">
		<div class="nombre">
			<?php
				include 'php/write_username.php'
			?>
		</div>
		<input type="button" class="cambiarimagen" value="cambiar imagen" onclick="open_images(0)">
		<div class="cambiarcontrasena">
			<p>Change Password</p>
			<FORM action="php/modification_password.php" method="post">
				<p>Write your old password:
					<input type="password" name="passwordold" class="casilla">
				</p>
				<p>Write your new password:
					<input type="password" name="password1" class="casilla">
				</p>
				<p>Repeat your new password:
					<input type="password" name="password2" class="casilla">
				</p>
				<input id="boton2" type="submit" value="change">
			</FORM>
		</div>
		<div class="region">
			<p>country:
				<input type="text" class="casilla">
			</p>
			<p>Languaje:
				<input type="text" class="casilla">
			</p>
		</div>
		<p></p>
		<FORM action="php/delete_account.php" method="post">
			<input class="boton3" type="submit" value="Delete account">
		</FORM>
		<p></p>

		<div class="orgrupo">
			<div class="titulo">GROUP ADMINISTRATION</div>
			<FORM action="php/group_creation.php" method="post" class="main">
				<div class="especifico">
					<div class="textillo">Create new group
						<br>choose a name:</div>
					<input class="cajetilla" type="text" name="group_name">
				</div>
				<div class="especifico">
					<div class="textillo">Select User for the group:</div>
					<input class="cajetilla" type="text" name="group_add_user">
				</div>
				<div class="especifico">
					<div class="textillo">Choose an style:</div>
					<input class="cajetilla" type="text" name="group_style">
				</div>
				<div class="especifico">
					<div class="textillo">Click OK to create the group:</div>
					<input class="cajetilla" type="submit" value="OK">
				</div>
			</FORM>
		</div>
	</div>
	</div>

	<div class="modificar_imagen">
		<div class="close1" onclick="close_images()">
			<img src="img/icons/close.png" alt="close">
		</div>
		<div class="contenido">
			<form action="php/change_user_image.php" class="grid" method="post">
				<button type="submit" name="profile_picture" value="img/user/1.png" class="image_user"><img src="img/user/1.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/2.png" class="image_user"><img src="img/user/2.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/3.png" class="image_user"><img src="img/user/3.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/4.png" class="image_user"><img src="img/user/4.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/5.png" class="image_user"><img src="img/user/5.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/6.png" class="image_user"><img src="img/user/6.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/7.png" class="image_user"><img src="img/user/7.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/8.png" class="image_user"><img src="img/user/8.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/9.png" class="image_user"><img src="img/user/9.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/10.png" class="image_user"><img src="img/user/10.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/11.png" class="image_user"><img src="img/user/11.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/12.png" class="image_user"><img src="img/user/12.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/13.png" class="image_user"><img src="img/user/13.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/14.png" class="image_user"><img src="img/user/14.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/15.png" class="image_user"><img src="img/user/15.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/16.png" class="image_user"><img src="img/user/16.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/17.png" class="image_user"><img src="img/user/17.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/18.png" class="image_user"><img src="img/user/18.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/19.png" class="image_user"><img src="img/user/19.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/20.png" class="image_user"><img src="img/user/20.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/21.png" class="image_user"><img src="img/user/21.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/22.png" class="image_user"><img src="img/user/22.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/23.png" class="image_user"><img src="img/user/23.png" alt="1"></button>
				<button type="submit" name="profile_picture" value="img/user/24.png" class="image_user"><img src="img/user/24.png" alt="1"></button>

			</form>
		</div>
	</div>

	<div class="reconocimiento">
		<p>Created by:
			<br/>José Manuel Rodriguez Calvo
			<br/>Jesús Jiménez Sánchez</p>
	</div>

</body>

</html>
