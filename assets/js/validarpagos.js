document.onload = carga();
function carga(){


	//Aqui se definen las ID que van en los campos de los formularios
	var c = document.getElementById("idpago"); //Numero simple.
		var d = document.getElementById("idcont");
			var co = document.getElementById("cant"); //precio con decimal
	var n = document.getElementById("nombreAN"); // nombre alfa numerico






	



	//las letras del inicio son correspondientes a las de las var de arriba, y define si los campos son caracteres alfabeticos o numericos, o mixtos


	c.onkeypress = function(event){
	    var er = /^[0-9]*$/;
		validarkeypress(er,event);
	};

	d.onkeypress = function(event){

			var er = /^[0-9]*$/;
		validarkeypress(er,event);
	};

			co.onkeypress = function(event){
			var er = /^[0-9.]*$/;
	  validarkeypress(er,event);
	};


	n.onkeypress = function(event){
		er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]*$/;
		validarkeypress(er,event);
	};



// aqui tambien van los caracteres si son numericos o alfabeticos como arriba, pero se le añade un corchete con la longitud minima y maxima
// ademas de poner en el getelementid, lo que va a buscar en el span id, y tambien el mensaje a mostrar


	c.onkeyup = function(){
	  var er = /^[0-9]{1,9}$/;
	  validarkeyup(er,this,
		document.getElementById("idpagoa"),
		"EL CAMPO ID DE PAGO DEBE TENER ENTRE 1 Y 9 DIGITOS");
	};

		d.onkeyup = function(){
	  var er = /^[0-9]{1,9}$/;
	  validarkeyup(er,this,
		document.getElementById("idconta"),
		"EL CAMPO ID DE CONTRATO DEBE TENER ENTRE 1 Y 9 DIGITOS");
	};

		co.onkeyup = function(){
			var er = /^[0-9.]{1,10}$/;
			validarkeyup(er,this,
			document.getElementById("canta"),
			"EL CAMPO CANTIDAD DEBE TENER ENTRE 1 y 10 DIGITOS");
	};



	n.onkeyup = function(){
	  var er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]{3,30}$/;
	  validarkeyup(er,this,
		document.getElementById("alfanum"),
		"ESTE CAMPO DEBE TENER ENTRE 3 Y 30 CARACTERES");
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
	if (form.idpago.value == 0) {
		alert("El campo ID del Pago se encuentra vacío, por favor ingrese los datos correspondientes");
		form.idpago.value ="";
		form.idpago.focus();
		return false;

	}
if (form.idcont.value == 0) {
	alert("El campo ID de Contrato está vacío por favor ingrese los datos correspondientes");
	form.idcont.value ="";
	form.idcont.focus();
	return false;

}

if (form.cant.value == 0) {
	alert("El campo Cantidad, está vacío por favor ingrese los datos correspondientes");
	form.cant.value ="";
	form.cant.focus();
	return false;

}	
	if (form.nombreAN.value == 0) {
		alert("El campo Descripción se encuentra vacío, por favor ingrese los datos correspondientes");
		form.nombreAN.value ="";
		form.nombreAN.focus();
		return false;

}


if (form.fecha_pago.value != 0) {
	
	
	var hoy             = new Date();
	var fechaform = new Date(form.fecha_pago.value);
	fechaFormulario=fechaform.setMinutes(fechaform.getMinutes() + fechaform.getTimezoneOffset())
	hoy.setHours(0,0,0,0);

	if (hoy < fechaFormulario) {
	
		alert("Los pagos no pueden registrarse con fechas futuras");
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
