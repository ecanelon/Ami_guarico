<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol_usuario'] != "administrador") {
  header('location: ./');
  exit();
}
      require_once "modelo/regempleado.php";
      require_once "vista/menu.php";
      require_once "vista/regempleado.php";
      $objEmpl = new empleado1();


      if (isset($_POST['btnguardar'])) {

        
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

        $result =$objEmpl->Buscar($ci_empleado);
        
        if($result){
         
      echo'<script type="text/javascript">
          alert("La Cédula del Empleado ya existe");
          </script>';
        }
       else{

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

       


        $result = $objEmpl->Registrar();
        echo'<script type="text/javascript">
    alert("Registro guardado exitosamente");
    </script>';

           }

      } // fin de Guardar

?>
