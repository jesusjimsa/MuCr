/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

var fondos = [
	"img/backgrounds/welcome/fondo1.jpg",
	"img/backgrounds/welcome/fondo2.jpg",
	"img/backgrounds/welcome/fondo3.jpg",
	"img/backgrounds/welcome/fondo4.jpg",
	"img/backgrounds/welcome/fondo5.jpg",
	"img/backgrounds/welcome/fondo6.jpg"
]

var informa = [
	"Palau de la Música Catalana, Spain",
	"Teatro Romano de Mérida, Spain",
	"Dreambeach Festival in Almeria, Spain",
	"Tomorrowland in BOOM, Belgica",
	"Opera House in Sydney, Australia",
	"Opera House in Vienna, Austria",
	"Ultra miami, Florida"
]

function cambiarnombre(numero) {
	var aux = informa[numero]
	document.getElementById("info").innerHTML = aux
}

function fondoBody() {
	var numero = Math.floor(Math.random() * fondos.length)
	cambiarnombre(numero)
	var image = fondos[numero]

	document.body.style.backgroundImage = "url(" + image + ")";
	document.body.style.backgroundRepeat = "no-repeat";
	document.body.style.backgroundSize = "cover";
	document.body.style.backgroundPosition = "bottom center";
	document.body.style.backgroundAttachment = "fixed";
}

function validacionDBemail(email, password) {
	var mysql = require('mysql');


	var con = mysql.createConnection({
		host: "https://www.db4free.net",
		user: "jmrodriguez",
		password: "9uk6vw6e",
		database: "orfeo_mucr"
	});


	con.connect(function (err) {
		if (err) throw err;
		var orden = "SELECT email FROM user WHERE email = \'" + email + "\'"
		con.query(orden, function (err, result) {
			if (err) throw err;
			if (result.length == 0) { return false; }
			else { return true; }
			//console.log(result);
		});
	});
}

function formValidation() {
	var email = document.registration.email.value;
	var password = document.registration.password.value;


	if (validacionDBemail(email, password)) {
		window.location.href = "../MuCr_main.html";
		return true;
	}
	else {
		alert("Login was unsuccessful, please check your username and password");
		return false;
	}
}

function getCookie(name) {
	var dc = document.cookie;
	var prefix = name + "=";
	var begin = dc.indexOf("; " + prefix);

	if (begin == -1) {
		begin = dc.indexOf(prefix);
		if (begin != 0) return null;
	}
	else {
		begin += 2;
		var end = document.cookie.indexOf(";", begin);
		if (end == -1) {
			end = dc.length;
		}
	}

	return decodeURI(dc.substring(begin + prefix.length, end));
}

function callPHPCookies() {
	var email_cookie = getCookie("email");

	if(email_cookie != null){
		window.location.href = "../php/auth_cookies.php";
	}
}