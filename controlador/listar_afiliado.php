<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}
   require_once "modelo/afilm.php";
  $objAfil = new afiliados1();

    // cuando le da al boton de eliminar
    if (isset($_POST['eliminar'])) {

        $ci_titular = $_POST['eliminar'];
        $objAfil->setCedula($ci_titular);
        $result = $objAfil->Eliminar();

        require_once "vista/menu.php";
        $consulta = $objAfil->Buscartodo();
        require_once "vista/listar_afiliado.php";


    }else if(isset($_POST['editar'])){ // boton de modificar

        require_once "vista/menu.php";
        $ci_titular = $_POST['editar'];
        $afili = $objAfil->Buscar($ci_titular);
        require_once "vista/actualizar_afiliado.php";

    }else if(isset($_POST['modificar'])) { // cuando viene de la vsita actualizar y le dio  al boton modificar

        $ci_titular= $_POST['ci_titular'];
        $nombres= $_POST['nombres'];
        $apellido1= $_POST['apellido1'];
        $apellido2= $_POST['apellido2'];
        $telefono= $_POST['telefono'];
        $direccion= $_POST['direccion'];
        $fecha_nacimiento= $_POST['fecha_nacimiento'];


        $objAfil->setCedula($ci_titular);
        $objAfil->setNombres($nombres);
        $objAfil->setApellido1($apellido1);
        $objAfil->setApellido2($apellido2);
        $objAfil->setTelefono($telefono);
        $objAfil->setDireccion($direccion);
        $objAfil->setFnacimiento($fecha_nacimiento);


        $objAfil->Modificar();

        require_once "vista/menu.php";
                 $consulta = $objAfil->Buscartodo();
         require_once "vista/listar_afiliado.php";


        
       

    }else{
                require_once "vista/menu.php";
           $consulta = $objAfil->Buscartodo();
        require_once "vista/listar_afiliado.php";
     

        
        
    }

?>
