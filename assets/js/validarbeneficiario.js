document.onload = carga();
function carga(){


	//Aqui se definen las ID que van en los campos de los formularios
	var cb = document.getElementById("ciben"); //Numero simple.
	var c = document.getElementById("cititul"); //Numero simple.
	var n = document.getElementById("nom"); // nom alfa numerico
	var d = document.getElementById("apel");
	var co = document.getElementById("telf"); //precio con decimal
	var di = document.getElementById("dire"); // nom alfa numerico






	



	//las letras del inicio son correspondientes a las de las var de arriba, y define si los campos son caracteres alfabeticos o numericos, o mixtos


		cb.onkeypress = function(event){
	    var er = /^[0-9]*$/;
		validarkeypress(er,event);
	};

	c.onkeypress = function(event){
	    var er = /^[0-9]*$/;
		validarkeypress(er,event);
	};



	n.onkeypress = function(event){
		er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]*$/;
		validarkeypress(er,event);
	};

	d.onkeypress = function(event){

			var er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]*$/;
		validarkeypress(er,event);
	};

			co.onkeypress = function(event){
			var er = /^[0-9]*$/;
	  validarkeypress(er,event);
	};
		di.onkeypress = function(event){
		er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]*$/;
		validarkeypress(er,event);
	};





// aqui tambien van los caracteres si son numericos o alfabeticos como arriba, pero se le añade un corchete con la longitud minima y maxima
// ademas de poner en el getelementid, lo que va a buscar en el span id, y tambien el mensaje a mostrar

		cb.onkeyup = function(){
	  var er = /^[0-9]{1,9}$/;
	  validarkeyup(er,this,
		document.getElementById("cibene"),
		"EL CAMPO CI BENEFICIARIO DEBE TENER ENTRE 1 Y 9 DIGITOS");
	};
	
	c.onkeyup = function(){
	  var er = /^[0-9]{1,9}$/;
	  validarkeyup(er,this,
		document.getElementById("citit"),
		"EL CAMPO CI TITULAR DEBE TENER ENTRE 1 Y 9 DIGITOS. POR FAVOR ASEGURESE QUE SEA UNA CI REGISTRADA");
	};

		n.onkeyup = function(){
	  var er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]{3,30}$/;
	  validarkeyup(er,this,
		document.getElementById("noma"),
		"EL CAMPO NOMBRE DEBE TENER ENTRE 3 Y 30 CARACTERES");
	};

		d.onkeyup = function(){
	  var er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]{3,30}$/;
	  validarkeyup(er,this,
		document.getElementById("apela"),
		"EL CAMPO PRIMER APELLIDO DEBE TENER ENTRE 1 Y 9 DIGITOS");
	};

		co.onkeyup = function(){
			var er = /^[0-9]{1,11}$/;
			validarkeyup(er,this,
			document.getElementById("telfa"),
			"EL CAMPO TELEFONO DEBE TENER ENTRE 1 y 11 DIGITOS");
	};
			di.onkeyup = function(){
	  var er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]{3,30}$/;
	  validarkeyup(er,this,
		document.getElementById("direa"),
		"EL CAMPO DIRECCIÓN DEBE TENER ENTRE 3 Y 30 CARACTERES");
	};








}




function validarkeypress(er,e){

	key = e.keyCode || e.which;
    tecla = String.fromCharCode(key);
    a = er.test(tecla);

    if(!a){
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





//Validaciones de campos en blanco, form.---van con los campos declarado en los var arriba


function validar(){
	var form= document.form;

			if (form.ciben.value == 0) {
		alert("El campo CI Beneficiario se encuentra vacío, por favor ingrese los datos correspondientes");
		form.ciben.value ="";
		form.ciben.focus();
		return false;

	}
	

	if (form.cititul.value == 0) {
		alert("El campo CI Titular se encuentra vacío, por favor ingrese la CI de un Titular que ya este registrado");
		form.cititul.value ="";
		form.cititul.focus();
		return false;

	}



		if (form.nom.value == 0) {
		alert("El campo Nombre se encuentra vacío, por favor ingrese los datos correspondientes");
		form.nom.value ="";
		form.nom.focus();
		return false;

}
if (form.apel.value == 0) {
	alert("El campo Primer Apellido está vacío, por favor ingrese los datos correspondientes");
	form.apel.value ="";
	form.apel.focus();
	return false;

}

if (form.telf.value == 0) {
	alert("El campo Teléfono está vacío, por favor ingrese los datos correspondientes");
	form.telf.value ="";
	form.telf.focus();
	return false;

}	
if (form.dire.value == 0) {
	alert("El campo Dirección está vacío, por favor ingrese los datos correspondientes");
	form.dire.value ="";
	form.dire.focus();
	return false;

}	

if (form.fecha_nacimiento.value != 0) {
	
	
	var hoy             = new Date();
	var fechaform = new Date(form.fecha_nacimiento.value);
	fechaFormulario=fechaform.setMinutes(fechaform.getMinutes() + fechaform.getTimezoneOffset())
	hoy.setHours(0,0,0,0);

	if (hoy <= fechaFormulario) {
	
		alert("La fecha de nacimiento es incorrecta");
		return false;  
	}
	else {
		return true; 
	}

}






//Valida si los campos estan vacios al presionar registrar
/*if (form.erroresd.value == 0) {
	alert("el campo errores está vacío");
	form.erroresd.value ="";
	form.erroresd.focus();
	return false;

}*/





}
