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
 
var music_styles = [
	"<div class=\"especialized_back\">Back</div>",
	"<div class=\"especialized\">Alternative</div>",
	"<div class=\"especialized\">Punk</div>",
	"<div class=\"especialized\">Rock</div>",
	"<div class=\"especialized\"> Blues</div>",
	"<div class=\"especialized\"> Classical</div>",
	"<div class=\"especialized\"> Country</div>",
	"<div class=\"especialized\">Folk</div>",
	"<div class=\"especialized\">Dance</div>",
	"<div class=\"especialized\"> Electronic</div>",
	"<div class=\"especialized\"> Easy Listening</div>",
	"<div class=\"especialized\"> Gospel</div>",
	"<div class=\"especialized\"> Religious</div>",
	"<div class=\"especialized\"> Rap</div>",
	"<div class=\"especialized\"> Holiday</div>",
	"<div class=\"especialized\"> Instrumental</div>",
	"<div class=\"especialized\"> Jazz</div>",
	"<div class=\"especialized\"> Latin</div>",
	"<div class=\"especialized\"> Metal</div>",
	"<div class=\"especialized\"> Moods</div>",
	"<div class=\"especialized\"> Pop</div>",
	"<div class=\"especialized\"> Other</div>",
	"<div class=\"especialized\"> R'n'B</div>",
	"<div class=\"especialized\"> Soundtrack</div>",
	"<div class=\"especialized\"> World</div>"
]

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

	if (email_cookie != null) {
		window.location.href = "../php/auth_cookies.php";
	}
}

changeImage(archivo){



}

function open_images(number){
  if(number==0){
    document.getElementsByClassName("modificar_imagen")[0].style.opacity="1";
    document.getElementsByClassName("modificar_imagen")[0].style.left="22%";
    for(var i=0;i<24;i++){
      var j=i+1;
      var archivo="../img/user/"+j+".png"
      
      document.getElementsByClassName("image_user")[i].style.backgroundImage = "url("+archivo+ ")";
      document.getElementsByClassName("image_user")[i].style.backgroundRepeat = "no-repeat";
      document.getElementsByClassName("image_user")[i].style.backgroundSize = "100% 100%";
      document.getElementsByClassName("image_user")[i].style.backgroundPosition = "bottom center";
      document.getElementsByClassName("image_user")[i].style.backgroundAttachment = "relative";
    }
  }
  else{
    document.getElementsByClassName("modificar_imagen")[0].style.opacity="1";
    document.getElementsByClassName("modificar_imagen")[0].style.left="45%";
    for(var i=0;i<24;i++){
      var j=i+1;
      var archivo="../img/groups/"+j+".jpg"
      document.getElementsByClassName("image_user")[i].style.backgroundImage = "url("+archivo+ ")";
      document.getElementsByClassName("image_user")[i].style.backgroundRepeat = "no-repeat";
      document.getElementsByClassName("image_user")[i].style.backgroundSize = "100% 100%";
      document.getElementsByClassName("image_user")[i].style.backgroundPosition = "bottom center";
      document.getElementsByClassName("image_user")[i].style.backgroundAttachment = "relative";
    }
}

function close_images(){
  document.getElementsByClassName("modificar_imagen")[0].style.opacity="0";
 }



function writeClassification() {
	for (var i = 0; i < music_styles.length; i++) {
		document.write(music_styles[i]);
	}
}
