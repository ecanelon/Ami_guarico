document.onload = carga();
function carga(){


	//Aqui se definen las ID que van en los campos de los formularios

	var n = document.getElementById("nombreAN"); // nombre alfa numerico
	var co = document.getElementById("precioPlan"); //precio con decimal
	var d = document.getElementById("numCuotas");




	



	//las letras del inicio son correspondientes a las de las var de arriba, y define si los campos son caracteres alfabeticos o numericos, o mixtos


	n.onkeypress = function(event){
		er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]*$/;
		validarkeypress(er,event);
	};
		co.onkeypress = function(event){
			var er = /^[0-9.]*$/;
	  validarkeypress(er,event);
	};

	d.onkeypress = function(event){

			var er = /^[0-9]*$/;
		validarkeypress(er,event);
	};



// aqui tambien van los caracteres si son numericos o alfabeticos como arriba, pero se le añade un corchete con la longitud minima y maxima
// ademas de poner en el getelementid, lo que va a buscar en el span id, y tambien el mensaje a mostrar




	n.onkeyup = function(){
	  var er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]{3,30}$/;
	  validarkeyup(er,this,
		document.getElementById("alfanum"),
		"ESTE CAMPO DEBE TENER ENTRE 3 Y 30 CARACTERES");
	};

	co.onkeyup = function(){
			var er = /^[0-9.]{1,15}$/;
			validarkeyup(er,this,
			document.getElementById("plan"),
			"EL CAMPO PRECIO PLAN TENER ENTRE 1 y 15 DIGITOS");
	};
	d.onkeyup = function(){
	  var er = /^[0-9]{1,4}$/;
	  validarkeyup(er,this,
		document.getElementById("cuotas"),
		"EL CAMPO NUMERO DE CUOTAS TENER ENTRE 1 Y 4 DIGITOS");
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

	if (form.nombreAN.value == 0) {
		alert("El campo Nombre de Plan de Salud se encuentra vacío, por favor ingrese los datos correspondientes");
		form.nombreAN.value ="";
		form.nombreAN.focus();
		return false;

}
if (form.precioPlan.value == 0) {
	alert("el campo Precio está vacío por favor ingrese los datos correspondientes");
	form.precioPlan.value ="";
	form.precioPlan.focus();
	return false;

}
if (form.numCuotas.value == 0) {
	alert("El campo Numero de Cuotas está vacío por favor ingrese los datos correspondientes");
	form.numCuotas.value ="";
	form.numCuotas.focus();
	return false;

}


//Valida si los campos estan vacios al presionar registrar
/*if (form.erroresd.value == 0) {
	alert("el campo errores está vacío");
	form.erroresd.value ="";
	form.erroresd.focus();
	return false;

}*/





}
