document.onload = carga();
function carga(){


	//Aqui se definen las ID que van en los campos de los formularios

	var n = document.getElementById("nombreAN"); // nombre alfa numerico
	var co = document.getElementById("detall"); //precio con decimal






	//las letras del inicio son correspondientes a las de las var de arriba, y define si los campos son caracteres alfabeticos o numericos, o mixtos



	n.onkeypress = function(event){
		er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]*$/;
		validarkeypress(er,event);
	};
		co.onkeypress = function(event){
			var er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]*$/;
	  validarkeypress(er,event);
	};



// aqui tambien van los caracteres si son numericos o alfabeticos como arriba, pero se le añade un corchete con la longitud minima y maxima
// ademas de poner en el getelementid, lo que va a buscar en el span id, y tambien el mensaje a mostrar




	n.onkeyup = function(){
	  var er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]{3,15}$/;
	  validarkeyup(er,this,
		document.getElementById("alfanum"),
		"ESTE CAMPO DEBE TENER ENTRE 3 Y 15 CARACTERES");
	};

	co.onkeyup = function(){
			var er = /^[a-zA-Z0-9-_\u00f1\u00d1\u00E0-\u00FC ]{3,50}$/;
			validarkeyup(er,this,
			document.getElementById("detalla"),
			"ESTE CAMPO DEBE TENER ENTRE 3 y 50 DIGITOS");
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

	if (form.nombreAN.value == 0) {
		alert("El campo Nombre de Servicio se encuentra vacío, por favor ingrese los datos correspondientes");
		form.nombreAN.value ="";
		form.nombreAN.focus();
		return false;

}
if (form.detall.value == 0) {
	alert("El campo Detalle del Servicio está vacío por favor ingrese los datos correspondientes");
	form.detall.value ="";
	form.detall.focus();
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
