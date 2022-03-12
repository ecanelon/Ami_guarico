<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}
      require_once "modelo/plan_s.php";
      require_once "vista/menu.php";
      require_once "vista/planregistrar.php";
      $objPlan = new Plandesalud();


      if (isset($_POST['btnguardar'])) {

        $idplan= $_POST['id_plan'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $nro_cuotas = $_POST['ncuotas'];
        $id_servicio= $_POST['id_servicio'];
        $objPlan->setNombre($nombre);
        $objPlan->setPrecio($precio);
        $objPlan->setNroCuotas($nro_cuotas);
        $objPlan->setIdPlandesalud($idplan);
        $objPlan->setIdServicio($id_servicio);

        $result = $objPlan->Registrar();
        echo'<script type="text/javascript">
    alert("Registro guardado exitosamente");
    </script>';






      } // fin de Guardar

?>
