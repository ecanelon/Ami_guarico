document.onload = carga();
function carga(){


	//Aqui se definen las ID que van en los campos de los formularios
	var c = document.getElementById("numcont"); //Numero simple
	var n = document.getElementById("cititular"); // nombre alfa numerico
	var co = document.getElementById("idplan"); //precio con decimal





	



	//las letras del inicio son correspondientes a las de las var de arriba, y define si los campos son caracteres alfabeticos o numericos, o mixtos


	c.onkeypress = function(event){
	    var er = /^[0-9]*$/;
		validarkeypress(er,event);
	};

	n.onkeypress = function(event){
		er = /^[0-9]*$/;
		validarkeypress(er,event);
	};
		co.onkeypress = function(event){
			var er = /^[0-9]*$/;
	  validarkeypress(er,event);
	};




	


// aqui tambien van los caracteres si son numericos o alfabeticos como arriba, pero se le añade un corchete con la longitud minima y maxima
// ademas de poner en el getelementid, lo que va a buscar en el span id, y tambien el mensaje a mostrar


	c.onkeyup = function(){
	  var er = /^[0-9]{1,9}$/;
	  validarkeyup(er,this,
		document.getElementById("numconta"),
		"ESTE CAMPO DEBE TENER ENTRE 1 Y 9 DIGITOS");
	};

	n.onkeyup = function(){
	  var er = /^[0-9]{6,8}$/;
	  validarkeyup(er,this,
		document.getElementById("cititulara"),
		"ESTE CAMPO DEBE TENER ENTRE 6 Y 8 CARACTERES");
	};

	co.onkeyup = function(){
			var er = /^[0-9]{1,9}$/;
			validarkeyup(er,this,
			document.getElementById("plana"),
			"EL CAMPO ID PLAN DE SALUD TENER ENTRE 1 y 9 DIGITOS");
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
	if (form.numcont.value == 0) {
		alert("El campo Número de Contrato se encuentra vacío, por favor ingrese los datos correspondientes");
		form.numcont.value ="";
		form.numcont.focus();
		return false;

	}
	if (form.cititular.value == 0) {
		alert("El campo CI del Titular se encuentra vacío, por favor ingrese los datos correspondientes");
		form.cititular.value ="";
		form.cititular.focus();
		return false;

}
if (form.idplan.value == 0) {
	alert("El Campo ID de Salud está vacío por favor ingrese los datos correspondientes");
	form.idplan.value ="";
	form.idplan.focus();
	return false;

}


if (form.fecha_inicio_contrato.value != 0 && form.fecha_cierre_contrato.value ) {
	
	
	var fecha_i  = new Date(form.fecha_inicio_contrato.value);
	var fecha_c = new Date(form.fecha_cierre_contrato.value);
	fecha_inicio=fecha_i.setMinutes(fecha_i.getMinutes() + fecha_i.getTimezoneOffset())
	fecha_cierre=fecha_c.setMinutes(fecha_c.getMinutes() + fecha_c.getTimezoneOffset())

	if (fecha_cierre < fecha_inicio) {
	
		alert("La fecha de cierre no puede ser anterior a la fecha de inicio");
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
