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


  /*    if (isset($_POST['btnguardar'])) {
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
*/

        if (isset($_POST['btnguardar'])) {
      		$planes = $objPlan->Buscartodo();

      		if (!empty($_POST)){

      			$id_plandesalud= $_POST['id_plandesalud'];
      			$consulta = $objPlan->Buscar($id_plandesalud);


      			if ($consulta['estatus']&& count($consulta)==2) {
      				$pagina='listar_plan';
      				require_once("vistas/inicio/".$pagina.".php");//si encuentra el id de contrato la envia a la vista de actualizar
      			}//fin del if
      			else{
      				echo $pagina;
      				$pagina='planregistrar';
      			require_once("vistas/inicio/".$pagina.".php");
      			}//fin del else buscar

      		}//empty
      		require_once("vistas/inicio/".$pagina.".php");
      	}//is_file

    //fin del
      // fin de Guardar

?>
