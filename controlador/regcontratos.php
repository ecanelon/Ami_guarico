<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}
      require_once "modelo/regcontratos.php";
      require_once "vista/menu.php";
      require_once "vista/regcontratos.php";
      require_once "modelo/afilm.php";
      $objCont = new Contratos1();


      if (isset($_POST['btnguardar'])) {

        $nro_contrato = $_POST['nro_contrato'];
        $ci_titular = $_POST['ci_titular'];
        $id_PlanDeSalud = $_POST['id_PlanDeSalud'];
        $fecha_inicio_contrato = $_POST['fecha_inicio_contrato'];
        $fecha_cierre_contrato = $_POST['fecha_cierre_contrato'];

        $result = $objCont->Buscar( $nro_contrato);
        
        if($result){
         
      echo'<script type="text/javascript">
    alert("El número de contrato ya existe");
    </script>';
        }
       else{

        $objCont->setNumerocontrato($nro_contrato);
        $objCont->setCedula($ci_titular);
        $objCont->setIdPlandesalud($id_PlanDeSalud);
        $objCont->setIniciocontrato($fecha_inicio_contrato);
        $objCont->setCierrecontrato($fecha_cierre_contrato);

        $result = $objCont->Registrar();
        echo'<script type="text/javascript">
    alert("Registro guardado exitosamente");
    </script>';

 }
      } // fin de Guardar

?>
