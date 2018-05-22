var fondos = [
	"img/backgrounds/welcome/fondo1.jpg",
	"img/backgrounds/welcome/fondo2.jpg",
	"img/backgrounds/welcome/fondo3.jpg",
	"img/backgrounds/welcome/fondo4.jpg",
	"img/backgrounds/welcome/fondo5.jpg",
	"img/backgrounds/welcome/fondo6.jpg"
];

var informa = [
	"Palau de la Música Catalana, Spain",
	"Teatro Romano de Mérida, Spain",
	"Dreambeach Festival in Almeria, Spain",
	"Tomorrowland in BOOM, Belgica",
	"Opera House in Sydney, Australia",
	"Opera House in Vienna, Austria",
	"Ultra miami, Florida"
];

function cambiarnombre(numero) {
	var aux = informa[numero];
	document.getElementById("info").innerHTML = aux;
}

function fondoBody() {
	var numero = Math.floor(Math.random() * fondos.length);
	cambiarnombre(numero);
	var image = fondos[numero];

	document.body.style.backgroundImage = "url(" + image + ")";
	document.body.style.backgroundRepeat = "no-repeat";
	document.body.style.backgroundSize = "cover";
	document.body.style.backgroundPosition = "bottom center";
	document.body.style.backgroundAttachment = "fixed";
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

function open_images(number) {
	if (number == 0) {
		document.getElementsByClassName("modificar_imagen")[0].style.display = "inherit";
		document.getElementsByClassName("modificar_imagen")[0].style.left = "22%";
	}
	else {
		document.getElementsByClassName("modificar_imagen")[0].style.opacity = "1";
		document.getElementsByClassName("modificar_imagen")[0].style.left = "45%";
	}
}

function close_images() {
	document.getElementsByClassName("modificar_imagen")[0].style.display = "none";
}

function writeClassification(option) {
	if (option == 0){
		document.getElementsByClassName("especialized_back")[0].style.display = "block";

		for(var i = 1; i < 3; i++){
			document.getElementsByClassName("especialized_back")[i].style.display = "none";
		}

		for(var i = 0; i < 2; i++){
			document.getElementsByClassName("especialized")[i].style.display = "block";
		}

		for(var i = 2; i < 29; i++){
			document.getElementsByClassName("especialized")[i].style.display = "none";
		}
	}

	if (option == 1){
		document.getElementsByClassName("especialized_back")[1].style.display = "block";
		document.getElementsByClassName("especialized_back")[0].style.display = "none";

		for(var i = 0; i < 2; i++){
			document.getElementsByClassName("especialized")[i].style.display = "none";
		}

		for(var i = 2; i < 27; i++){
			document.getElementsByClassName("especialized")[i].style.display = "block";
		}
	}

	if (option == 2){
		document.getElementsByClassName("especialized_back")[2].style.display = "block";
		document.getElementsByClassName("especialized_back")[0].style.display = "none";

		for(var i = 0; i < 2; i++){
			document.getElementsByClassName("especialized")[i].style.display = "none";
		}

		for(var i = 27; i < 29; i++){
			document.getElementsByClassName("especialized")[i].style.display = "block";
		}
	}
}

function opencountries(continent){
	if(continent=="europe"){
		//var max=document.getElementsByClassName("flag-europe").length();
		for(var i=0;i<10;i++){
			document.getElementsByClassName("flag-europe").style.display="block";
		}
	}
	if(continent=="africa"){
		for(var i=0;i<10;i++){
			document.getElementsByClassName("flag-african").style.display="block";
		}
	}
	if(continent=="oceania"){
		for(var i=0;i<10;i++){
			document.getElementsByClassName("flag-oceania").style.display="block";
		}
	}
	if(continent=="namerica"){
		for(var i=0;i<10;i++){
			document.getElementsByClassName("flag-namerica").style.display="block";
		}
	}
	if(continent=="samerica"){
		for(var i=0;i<10;i++){
			document.getElementsByClassName("flag-samerica").style.display="block";
		}

	}

}
