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
		if (begin != 0){
			return null;
		}
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
	if (option == 0) {
		// Show "Sort by"
		document.getElementsByClassName("especialized_back")[0].style.display = "block";

		// Hide "Back" buttons
		for (var i = 1; i < 3; i++) {
			document.getElementsByClassName("especialized_back")[i].style.display = "none";
		}

		// Show options
		for (var i = 0; i < 2; i++) {
			document.getElementsByClassName("especialized")[i].style.display = "block";
		}
		
		// Hide all classficiations
		for (var i = 2; i < 29; i++) {
			document.getElementsByClassName("especialized")[i].style.display = "none";
		}
	}

	// Show music styles
	if (option == 1) {
		document.getElementsByClassName("especialized_back")[1].style.display = "block";
		document.getElementsByClassName("especialized_back")[0].style.display = "none";

		for (var i = 0; i < 2; i++) {
			document.getElementsByClassName("especialized")[i].style.display = "none";
		}

		for (var i = 2; i < 27; i++) {
			document.getElementsByClassName("especialized")[i].style.display = "block";
		}
	}

	// Show ratity classification
	if (option == 2) {
		document.getElementsByClassName("especialized_back")[2].style.display = "block";
		document.getElementsByClassName("especialized_back")[0].style.display = "none";

		for (var i = 0; i < 2; i++) {
			document.getElementsByClassName("especialized")[i].style.display = "none";
		}

		for (var i = 27; i < 29; i++) {
			document.getElementsByClassName("especialized")[i].style.display = "block";
		}
	}
}

<<<<<<< Updated upstream
function closeALL() {
	var vnamerica = 23;
	var vsamerica = 12;
	var voceania = 13;
	var veurope = 44;
	var vasia = 50;
	var vafrica = 54;

	for (var i = 0; i < vnamerica - 1; i++) {
		document.getElementsByClassName("flag-namerica")[i].style.display = "none";
	}
	
	for (var i = 0; i < vsamerica - 1; i++) {
		document.getElementsByClassName("flag-samerica")[i].style.display = "none";
	}
	
	for (var i = 0; i < voceania - 1; i++) {
		document.getElementsByClassName("flag-oceania")[i].style.display = "none";
	}
	
	for (var i = 0; i < veurope - 1; i++) {
		document.getElementsByClassName("flag-europe")[i].style.display = "none";
	}
	
	for (var i = 0; i < vasia - 1; i++) {
		document.getElementsByClassName("flag-asia")[i].style.display = "none";
	}
	
	for (var i = 0; i < vafrica - 1; i++) {
		document.getElementsByClassName("flag-african")[i].style.display = "none";
	}
}

function openOne(continents) {
	var flag = "flag-europe";
	var maxflag = 0;
=======
function closeALL(){
	var vnamerica=23;
	var vsamerica=12;
	var voceania=13;
	var veurope=44;
	var vasia=50;
	var vafrica=54;
	for(var i=0;i<vnamerica;i++){document.getElementsByClassName("flag-namerica")[i].style.display="none";}
	for(var i=0;i<vsamerica;i++){document.getElementsByClassName("flag-samerica")[i].style.display="none";}
	for(var i=0;i<voceania;i++){document.getElementsByClassName("flag-oceania")[i].style.display="none";}
	for(var i=0;i<veurope;i++){document.getElementsByClassName("flag-europe")[i].style.display="none";}
	for(var i=0;i<vafrica;i++){document.getElementsByClassName("flag-african")[i].style.display="none";}
	for(var i=0;i<vasia;i++){document.getElementsByClassName("flag-asia")[i].style.display="none";}
}

function openOne(continents){
	var flag="flag-europe";
	var maxflag=0;
	if(continents=="europe"){flag="flag-europe";maxflag=44;}
	if(continents=="namerica"){flag="flag-namerica";maxflag=23;}
	if(continents=="samerica"){flag="flag-samerica";maxflag=12;}
	if(continents=="oceania"){flag="flag-oceania";maxflag=13;}
	if(continents=="asia"){flag="flag-asia";maxflag=50;}
	if(continents=="africa"){flag="flag-african";maxflag=54;}
>>>>>>> Stashed changes

	if (continents == "europe") {
		flag = "flag-europe";
		maxflag = 44;
	}
	
	if (continents == "namerica") {
		flag = "flag-namerica";
		maxflag = 23;
	}
	
	if (continents == "samerica") {
		flag = "flag-samerica";
		maxflag = 12;
	}
	
	if (continents == "oceania") {
		flag = "flag-oceania";
		maxflag = 13;
	}
	
	if (continents == "asia") {
		flag = "flag-asia";
		maxflag = 50;
	}
	
	if (continents == "africa") {
		flag = "flag-african";
		maxflag = 54;
	}

	for (var i = 0; i < maxflag - 1; i++) {
		document.getElementsByClassName(flag)[i].style.display = "block";
	}
}



function opencountries(continent) {
	if (continent == 1) {
		closeALL();
		openOne("europe");
	}

	if (continent == 2) {
		closeALL();
		openOne("africa");
	}

	if (continent == 3) {
		closeALL();
		openOne("oceania");
	}

	if (continent == 4) {
		closeALL();
		openOne("namerica");
	}

	if (continent == 5) {
		closeALL();
		openOne("samerica");
	}

	if (continent == 6) {
		closeALL();
		openOne("asia");
	}
}
