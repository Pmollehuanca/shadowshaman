function hide(elemento) {
	if (document.getElementById) {
		var toHide= document.getElementById(elemento).style;
		if (toHide.display == "block") {
			toHide.display = "none";
		}
		else {
		toHide.display = "block";
		}
		return false;
	}
	else {
		return true;
	}
}
/*
function hide(elemento) {
	if (document.getElementById) {
		var toHide= document.getElementById(elemento);
		if (toHide.display == "block") {
		alert("ENTRO");
		toHide.classList.add("desaparece");
		toHide.classList.remove("aparece");
		}
		else {
		toHide.classList.add("aparece");
		toHide.classList.remove("desaparece");
		}
		return false;
	}
	else {
		return true;
	}
}
*/