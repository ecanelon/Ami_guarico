<?php
      require_once "modelo/afilm.php";
      require_once "vista/menu.php";
      require_once "vista/afiliadoregistrar.php";
      $objAfil = new afiliados1();


      if (isset($_POST['btnguardar'])) {
          echo "Clik en Guardar";

        $ci_titular= $_POST['ci_titular'];
        $nombres= $_POST['nombres'];
        $apellido1= $_POST['apellido1'];
        $apellido2= $_POST['apellido2'];
        $telefono= $_POST['telefono'];
        $direccion= $_POST['direccion'];
        $fecha_nacimiento= $_POST['fecha_nacimiento'];



        $objAfil->setNombres($nombres);
        $objAfil->setApellido1($apellido1);
        $objAfil->setApellido2($apellido2);
        $objAfil->setTelefono($telefono);
        $objAfil->setDireccion($direccion);
        $objAfil->setFnacimiento($fecha_nacimiento);
        $objAfil->setCedula($ci_titular);

        
        $result = $objAfil->Registrar();
        echo "registrado";

     
      } // fin de Guardar

?>