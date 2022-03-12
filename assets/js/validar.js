document.onload = carga();



function carga(){
	//1 paso, asociar las etiquetas
	//a variables

	var c = document.getElementById("idcontrato");
	var n = document.getElementById("nameContrato");
	var co = document.getElementById("precioPlan");

	//2 paso, indicar el evento con que se desea
	//validar para evitar
	// que se escriban caracteres
	//invalidos en este caso sera keypress

	c.onkeypress = function(event){
		//la palabra reservada
		//event, se usa para los eventos
		//de teclado y retorna el valor
		//ascii de la tecla pulsada dentro de la
		//etiqueta
	    var er = /^[0-9]*$/;
		validarkeypress(er,event);
	};

	n.onkeypress = function(event){
		//las cadenas
		//\u00f1\u00d1\u00E0-\u00FC
		//son para la ñ y los acentos
		er = /^[a-zA-Z\u00f1\u00d1\u00E0-\u00FC ]*$/;
		validarkeypress(er,event);
	};
		co.onkeypress = function(event){
		presiono = false;
		er = /^[a-zA-Z0-9.-_\u00f1\u00d1\u00E0-\u00FC]*$/;
		validarkeypress(er,event);
	};
		//3er paso, aca se usara
	//para validar el contenido
	//al soltar la tecla pulsada
	//se usara la misma expresion regular
	//pero con el formato exacto

	c.onkeyup = function(){
	  var er = /^[0-9]{6,8}$/;
	  validarkeyup(er,this,
		document.getElementById("idcontrato"),
		"LA CEDULA DEBE TENER ENTRE 6 Y 8 DIGITOS");
	};

	n.onkeyup = function(){
	  var er = /^[a-zA-Z0-9.-_\u00f1\u00d1\u00E0-\u00FC ]{3,20}$/;
	  validarkeyup(er,this,
		document.getElementById("nameContrato"),
		"EL NOMBRE DEBE TENER ENTRE 3 Y 20 LETRAS");
	};

	co.onkeyup = function(){
	  var er = /^[a-zA-Z0-9.-_\u00f1\u00d1\u00E0-\u00FC]{3,20}[@][A-Za-z]{3,10}[.][A-Za-z]{2,3}$/;
	  validarkeyup(er,this,
		document.getElementById("mcorreo"),
		"NO ES UN CORREO VALIDO");
	};


}

function validarkeypress(er,e){
	//key obtiene el codigo ascii
	//del evento recuerde que
	key = e.keyCode || e.which;

	//luego se transforma el codigo ascii
	//en un caracter
    tecla = String.fromCharCode(key);

	//se procede a comparar con
	//la expresion regular usando la funcion test
    a = er.test(tecla);

    if(!a){
		//si no coincide, se elimna la
		//pulsacion del teclado usando
		//prevent default
		e.preventDefault();
    }
   }
function validarkeyup(er,etiqueta,etiquetamensaje,
mensaje){
	a = er.test(etiqueta.value);
	if(a){
		etiquetamensaje.innerText = "";
	}
	else{
		etiquetamensaje.innerText = mensaje;
	}
}
function validar(){
	var form= document.form;
	if (form.idcontrato.value == 0) {
		alert("el campo  numéro de contrato está vacío");
		form.idcontrato.value ="";
		form.idcontrato.focus();
		return false;

	}
	if (form.nameContrato.value == 0) {
		alert("el campo nombre está vacío");
		form.nameContrato.value ="";
		form.nameContrato.focus();
		return false;

}
if (form.precioPlan.value == 0) {
	alert("el campo precio está vacío");
	form.precioPlan.value ="";
	form.precioPlan.focus();
	return false;

}
if (form.numCuotas.value == 0) {
	alert("el campo numero de cuotas está vacío");
	form.numCuotas.value ="";
	form.numCuotas.focus();
	return false;

}
/*if (form.erroresd.value == 0) {
	alert("el campo errores está vacío");
	form.erroresd.value ="";
	form.erroresd.focus();
	return false;

}*/

}
