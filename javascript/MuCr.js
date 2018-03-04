var visto = null;

function mostrar(num) {
	obj = document.getElementById(num);
	obj.style.display = (obj == visto) ? 'none' : 'block';
	if (visto != null)
		visto.style.display = 'none';
	visto = (obj == visto) ? null : obj;
}
