/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
	if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;

		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];

			if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}


var fondos = ["../img/backgrounds/welcome/fondo1.jpg", "../img/backgrounds/welcome/fondo2.jpg", "../img/backgrounds/welcome/fondo3.jpg", "../img/backgrounds/welcome/fondo4.jpg", "../img/backgrounds/welcome/fondo5.jpg", "../img/backgrounds/welcome/fondo6.jpg"]
var informa = ["Palau de la Música Catalana, Spain", "Teatro Romano de Mérida, Spain", "Dreambeach Festival in Almeria, Spain", "Tomorrowland in BOOM, Belgica", "Opera House in Sydney, Australia", "Opera House in Vienna, Austria"]

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
