<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}
 // Realizado por Lissette
    require_once "modelo/regcontratos.php";
    $objCont = new Contratos1();
    
    
    // cuando le da al boton de eliminar
    if (isset($_POST['eliminar'])) {

        $nro_contrato = $_POST['eliminar'];
        $objCont->setNumerocontrato($nro_contrato);
        $result = $objCont->Eliminar();
        
        require_once "vista/menu.php";
        $consulta = $objCont->Buscartodo();
        require_once "vista/listar_contratos.php";


    }else if(isset($_POST['editar'])){ // boton de modificar 

        require_once "vista/menu.php";
        $nro_contrato = $_POST['editar'];
        $cont = $objCont->Buscar($nro_contrato);
        require_once "vista/actualizar_contratos.php";

    }else if(isset($_POST['modificar'])) { // cuando viene de la vsita actualizar y le dio  al boton modificar 

        $nro_contrato = $_POST['nro_contrato'];
        $ci_titular = $_POST['ci_titular'];
        $id_PlanDeSalud = $_POST['id_PlanDeSalud'];
        $fecha_inicio_contrato = $_POST['fecha_inicio_contrato'];
        $fecha_cierre_contrato = $_POST['fecha_cierre_contrato'];


        $objCont->setNumerocontrato($nro_contrato);
        $objCont->setCedula($ci_titular);
        $objCont->setIdPlandesalud($id_PlanDeSalud);
        $objCont->setIniciocontrato($fecha_inicio_contrato);
        $objCont->setCierrecontrato($fecha_cierre_contrato);

        $objCont->Modificar();

        require_once "vista/menu.php";
        $consulta = $objCont->Buscartodo();
        require_once "vista/listar_contratos.php";

    }else{
        require_once "vista/menu.php";
        $consulta = $objCont->Buscartodo();
        require_once "vista/listar_contratos.php";
    }

?>