<?php
      require_once "modelo/plan_s.php";
      require_once "vista/menu.php";
      require_once "vista/planregistrar.php";
      $objPlan = new Plandesalud();


      if (isset($_POST['btnguardar'])) {
          echo "Clik en Guardar";
      $idplan= $_POST['id_plandesalud'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $nro_cuotas = $_POST['ncuotas'];
        $objPlan->setNombre($nombre);
        $objPlan->setPrecio($precio);
        $objPlan->setNroCuotas($nro_cuotas);
        $objPlan->setIdPlandesalud($idplan);
        $result = $objPlan->Registrar();
        echo "registrado";


      } // fin de Guardar

?>
