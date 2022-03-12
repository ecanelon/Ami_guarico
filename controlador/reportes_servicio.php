<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol_usuario'] != "administrador") {
  header('location: ./');
  exit();
}
 // Realizado por Lissette
    require_once "modelo/servicioM.php";
    require 'html2pdf/Vendor/autoload.php';
  use Spipu\Html2Pdf\Html2Pdf;

  $objServicio = new Servicio();

    if(isset($_POST['entrada'])){
        echo "Estoy generando el pdf";
		$consulta = $objServicio->Reporte();
		require_once 'vista/pdfservicio.php';
		$html =ob_get_clean();

		$html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8', array(15,10,15,10));
		$html2pdf->writeHTML($html);
		$html2pdf->output('Reporte de Servicios.pdf');


	}else{
		echo "estoy entrando a la vista principal deberia mostrar los usaurios";
		$consulta = $objServicio->Reporte();
		      require_once "vista/menu.php";
		require_once 'vista/reportes_servicio.php';



    }

?>
