<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}
 // Realizado por Lissette
      require_once "modelo/bene.php";
    require 'html2pdf/Vendor/autoload.php';
  use Spipu\Html2Pdf\Html2Pdf;

      $objBene = new beneficiarios1();

    if(isset($_POST['entrada'])){
        echo "Estoy generando el pdf";
		$consulta = $objBene->Reporte();
		require_once 'vista/beneficiariospdf.php';
		$html =ob_get_clean();

		$html2pdf = new Html2Pdf('l', 'A4', 'es', 'true', 'UTF-8', array(10,10,10,10));
		$html2pdf->writeHTML($html);
		$html2pdf->output('Reporte de planes.pdf');


	}else{
		echo "estoy entrando a la vista principal deberia mostrar los usaurios";
		$consulta = $objBene->Reporte();
		
		      require_once "vista/menu.php";

		require_once 'vista/reportes_beneficiarios.php';


    }

?>
