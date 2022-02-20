<?php
 // Realizado por Lissette
    require_once "modelo/plan_s.php";
    require 'html2pdf/Vendor/autoload.php';
    use Spipu\Html2Pdf\Html2Pdf;

    $objPlan = new Plandesalud();

	if(isset($_POST['entrada'])){
        echo "Estoy generando el pdf";
		$consulta = $objPlan->Reporte();
		require_once 'vista/reportepdf.php';
		$html =ob_get_clean();

		$html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8', array(15,10,15,10));
		$html2pdf->writeHTML($html);
		$html2pdf->output('Reporte de planes.pdf');


	}else{
		echo "estoy entrando a la vista principal deberia mostrar los usaurios";
		$consulta = $objPlan->Reporte();
		require_once 'vista/listar_plan.php';
	}
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
