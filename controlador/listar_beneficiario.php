<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}
 // Realizado por Lissette
    require_once "modelo/bene.php";
    
    $objBene = new beneficiarios1();
    
    
    // cuando le da al boton de eliminar
    if (isset($_POST['eliminar'])) {

        $ci_beneficiarios = $_POST['eliminar'];
        $objBene->setCedulabeneficiarios($ci_beneficiarios);
        $result = $objBene->Eliminar();
        
        require_once "vista/menu.php";
        $consulta = $objBene->Buscartodo();
        require_once "vista/listar_beneficiario.php";


    }else if(isset($_POST['editar'])){ // boton de modificar 

        require_once "vista/menu.php";
        $ci_beneficiarios = $_POST['editar'];
        $bene = $objBene->Buscar($ci_beneficiarios);
        require_once "vista/actualizar_beneficiario.php";

    }else if(isset($_POST['modificar'])) { // cuando viene de la vsita actualizar y le dio  al boton modificar 

        $ci_beneficiarios= $_POST['ci_beneficiarios'];
        $ci_titular= $_POST['ci_titular'];
        $parentesco= $_POST['parentesco'];
        $nombres= $_POST['nombres'];
        $apellido1= $_POST['apellido1'];
        $apellido2= $_POST['apellido2'];
        $telefono= $_POST['telefono'];
        $direccion= $_POST['direccion'];
        $fecha_de_nacimiento= $_POST['fecha_de_nacimiento'];


        $objBene->setCedulabeneficiarios($ci_beneficiarios);
        $objBene->setCedula($ci_titular);
        $objBene->setParentesco($parentesco);
        $objBene->setNombres($nombres);
        $objBene->setApellido1($apellido1);
        $objBene->setApellido2($apellido2);
        $objBene->setTelefono($telefono);
        $objBene->setDireccion($direccion);
        $objBene->setFnacimiento($fecha_de_nacimiento);


        $objBene->Modificar();

        require_once "vista/menu.php";
        $consulta = $objBene->Buscartodo();
        require_once "vista/listar_beneficiario.php";

    }else{
        require_once "vista/menu.php";
        $consulta = $objBene->Buscartodo();
        require_once "vista/listar_beneficiario.php";
    }

?>