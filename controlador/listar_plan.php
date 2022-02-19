<?php
 // Realizado por Lissette
    require_once "modelo/plan_s.php";
    $objPlan = new Plandesalud();
    
    
    // cuando le da al boton de eliminar
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

        $objPlan->setIdPlandesalud($idplan);
        $objPlan->setNombre($nombre);
        $objPlan->setPrecio($precio);
        $objPlan->setNroCuotas($cuota);

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