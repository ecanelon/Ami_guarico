<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}
 // Realizado por Lissette
    require_once "modelo/plan_s.php";
  $objPlan = new Plandesalud();
    if (isset($_POST['eliminar'])) {

        $id_plan = $_POST['eliminar'];
        $objPlan->setIdPlandesalud($id_plan);
        $result = $objPlan->Eliminar();

        require_once "vista/menu.php";
        $consulta = $objPlan->Buscartodo();
        require_once "vista/listar_plan.php";


    }else if(isset($_POST['editar'])){ // boton de modificar

        require_once "vista/menu.php";
        $id_plan = $_POST['editar'];
        $plan = $objPlan->Buscar($id_plan);
        require_once "vista/actualizar_plan.php";

    }else if(isset($_POST['modificar'])) { // cuando viene de la vsita actualizar y le dio  al boton modificar

        $idplan= $_POST['id_plan'];
        $nombre = $_POST['nombre'];
        $precio=$_POST['precio'];
        $cuota= $_POST['ncuotas'];
        $id_servicio= $_POST['id_servicio'];
        $id_servicio2= $_POST['id_servicio2'];
        $id_servicio3= $_POST['id_servicio3'];
        $id_servicio4= $_POST['id_servicio4'];


        $objPlan->setIdPlandesalud($idplan);
        $objPlan->setNombre($nombre);
        $objPlan->setPrecio($precio);
        $objPlan->setNroCuotas($cuota);
        $objPlan->setIdServicio($id_servicio);
        $objPlan->setIdServicio2($id_servicio2);
        $objPlan->setIdServicio3($id_servicio3);
        $objPlan->setIdServicio4($id_servicio4);

        $objPlan->Modificar();

        require_once "vista/menu.php";
        $consulta = $objPlan->Buscartodo();
        require_once "vista/listar_plan.php";

    }else{
        require_once "vista/menu.php";
        $consulta = $objPlan->Buscartodo();
        require_once "vista/listar_plan.php";
    }

?>
