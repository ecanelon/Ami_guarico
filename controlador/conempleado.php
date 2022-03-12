<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol_usuario'] != "administrador") {
  header('location: ./');
  exit();
}
 // Realizado por Lissette
    require_once "modelo/regempleado.php";
    
    $objEmpl = new empleado1();
    
    
    // cuando le da al boton de eliminar
    if (isset($_POST['eliminar'])) {

        $ci_empleado = $_POST['eliminar'];
        $objEmpl->setCedula($ci_empleado);
        $result = $objEmpl->Eliminar();
        
        require_once "vista/menu.php";
        $consulta = $objEmpl->Buscartodo();
        require_once "vista/conempleado.php";


    }else if(isset($_POST['editar'])){ // boton de modificar 

        require_once "vista/menu.php";
        $ci_empleado = $_POST['editar'];
        $empl = $objEmpl->Buscar($ci_empleado);
        require_once "vista/actempleado.php";

    }else if(isset($_POST['modificar'])) { // cuando viene de la vsita actualizar y le dio  al boton modificar 

        $ci_empleado= $_POST['ci_empleado'];
        $nombres= $_POST['nombres'];
        $apellido1= $_POST['apellido1'];
        $apellido2= $_POST['apellido2'];
        $telefono= $_POST['telefono'];
        $direccion= $_POST['direccion'];
        $fecha_de_nacimiento= $_POST['fecha_de_nacimiento'];
        $cargo= $_POST['cargo'];
        $rol_usuario= $_POST['rol_usuario'];
        $usuario= $_POST['usuario'];
        $contrasena= $_POST['contrasena'];


        $objEmpl->setCedula($ci_empleado);
        $objEmpl->setNombres($nombres);
        $objEmpl->setApellido1($apellido1);
        $objEmpl->setApellido2($apellido2);
        $objEmpl->setTelefono($telefono);
        $objEmpl->setDireccion($direccion);
        $objEmpl->setFnacimiento($fecha_de_nacimiento);
        $objEmpl->setCargo($cargo);
        $objEmpl->setRol_usuario($rol_usuario);
        $objEmpl->setUsuario($usuario);
        $objEmpl->setContrasena($contrasena);


        $objEmpl->Modificar();

        require_once "vista/menu.php";
        $consulta = $objEmpl->Buscartodo();
        require_once "vista/conempleado.php";

    }else{
        require_once "vista/menu.php";
        $consulta = $objEmpl->Buscartodo();
        require_once "vista/conempleado.php";
    }

?>