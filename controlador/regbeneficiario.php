<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}
      require_once "modelo/bene.php";
      require_once "vista/menu.php";
      require_once "vista/regbeneficiario.php";
      $objBene = new beneficiarios1();


      if (isset($_POST['btnguardar'])) {


        $ci_beneficiarios= $_POST['ci_beneficiarios'];
        $ci_titular= $_POST['ci_titular'];
        $parentesco= $_POST['parentesco'];
        $nombres= $_POST['nombres'];
        $apellido1= $_POST['apellido1'];
        $apellido2= $_POST['apellido2'];
        $telefono= $_POST['telefono'];
        $direccion= $_POST['direccion'];
        $fecha_de_nacimiento= $_POST['fecha_de_nacimiento'];

        $result = $objBene->Buscar($ci_beneficiarios);
        
  
        if($result){

          echo'<script type="text/javascript">
          alert("La cédula del titular ya existe");
          </script>'; 
        }
       else{

        $objBene->setCedulabeneficiarios($ci_beneficiarios);
        $objBene->setCedula($ci_titular);
        $objBene->setParentesco($parentesco);
        $objBene->setNombres($nombres);
        $objBene->setApellido1($apellido1);
        $objBene->setApellido2($apellido2);
        $objBene->setTelefono($telefono);
        $objBene->setDireccion($direccion);
        $objBene->setFnacimiento($fecha_de_nacimiento);
        

        
        $result = $objBene->Registrar();
        echo'<script type="text/javascript">
    alert("Registro guardado exitosamente");
    </script>';
  }
     
      } // fin de Guardar

?>