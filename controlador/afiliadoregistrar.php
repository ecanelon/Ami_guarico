<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}
      require_once "modelo/afilm.php";
      require_once "vista/menu.php";
      require_once "vista/afiliadoregistrar.php";
      $objAfil = new afiliados1();

      if (isset($_POST['btnguardar'])) {

        $ci_titular= $_POST['ci_titular'];
        $nombres= $_POST['nombres'];
        $apellido1= $_POST['apellido1'];
        $apellido2= $_POST['apellido2'];
        $telefono= $_POST['telefono'];
        $direccion= $_POST['direccion'];
        $fecha_nacimiento= $_POST['fecha_nacimiento'];
    
        
        $result =$objAfil->Buscar($ci_titular);
        
        if($result){
         
      echo'<script type="text/javascript">
    alert("La Cédula del titular ya existe");
    </script>';
        }
       else{

        $objAfil->setNombres($nombres);
        $objAfil->setApellido1($apellido1);
        $objAfil->setApellido2($apellido2);
        $objAfil->setTelefono($telefono);
        $objAfil->setDireccion($direccion);
        $objAfil->setFnacimiento($fecha_nacimiento);
        $objAfil->setCedula($ci_titular);

        
        $result = $objAfil->Registrar();
        echo'<script type="text/javascript">
    alert("Registro guardado exitosamente");
    </script>';

  }

     
      } // fin de Guardar

?>