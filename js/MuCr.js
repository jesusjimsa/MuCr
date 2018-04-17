/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
	if (!event.target.matches(".dropbtn")) {

		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;

		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];

			if (openDropdown.classList.contains("show")) {
				openDropdown.classList.remove("show");
			}
		}
	}
}


var fondos = ["img/backgrounds/welcome/fondo1.jpg", "img/backgrounds/welcome/fondo2.jpg", "img/backgrounds/welcome/fondo3.jpg", "img/backgrounds/welcome/fondo4.jpg", "img/backgrounds/welcome/fondo5.jpg", "img/backgrounds/welcome/fondo6.jpg",]
var informa = ["Palau de la Música Catalana, Spain", "Teatro Romano de Mérida, Spain", "Dreambeach Festival in Almeria, Spain", "Tomorrowland in BOOM, Belgica", "Opera House in Sydney, Australia", "Opera House in Vienna, Austria","Ultra miami, Florida"]

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



//FUncion para poner nuevos albumes y nuevos estilos
function elegiralbum(){
var sol="<img src=\"img/covers/Jazz/Best.jpg\" alt=\"Album cover\">";
return sol
}



function pintarcuadrado(numeroC){
	var sol=""
	while(numeroC>0){
	sol=sol+"<div class=\"recom1\">"
	+elegiralbum()
	+"<div class=\"close\">"+
	"<img src=\"img/icons/close.png\" alt=\"close\">"
	+"</div>"+
	"<div class=\"add\">"
	+"<img src=\"img/icons/add.png\" alt=\"add\">"+
	"</div>"+
	"<div class=\"love\">"+
	"<img src=\"img/icons/heart.png\" alt=\"love\">"+
	"</div>"+
	"</div>";
	numeroC--
}
return sol;
}


function pintarlista(numero,numeroC){

		var respuesta = document.getElementById("contenedor");
		while(numero>0){
			var newDiv = document.createElement(div);
			newDiv.id= "lista";
			respuesta.appendto(newID);

		numero--;
	}


}

function funcion2(){
var capa = document.getElementById("contenedor");
var h1 = document.createElement("h1");
h1.innerHTML = texto;
capa.appendChild(h1);}


function listas(){
	pintarlista(3,4);
/*
	var contenedor_height= document.getElementsByClassName("contenedor").offsetHeigh;
	var fila_height= document.getElementsByClassName("fila").offsetHeigh;
	var fila_margin=document.getElementByByClassName("fila").style.marginTop;
	var fila_size=fila_height+fila_margin;
	var i;var tam=0;
	for (i = 0; i <contenedor_height;i=i+fila_size) {
			tam++;
	}
	var tam1=0;
	var fila_width= document.getElementsByClassName("fila").offsetWidth;
	var recom_margin=document.getElementByByClassName("recom1").style.marginRight;
	var recom_wiwdth=document.getElementByByClassName("recom1").style.offsetWidth;
	var recom_size=recom_margin+recom_wiwdth;
	for (i = 0; i <fila_width;i=i+recom_size) {
			tam1++;
	}

	pintarlista(tam,tam1);
*/

}
