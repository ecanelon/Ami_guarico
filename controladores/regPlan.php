<?php
require_once "modelos/plan_s.php";

echo "inicio el controlador nuevo 123";
$objPlan = new Plandesalud();
if ($objPlan->getRepConexion()==false) {
	echo "Error de conexion en:".$objPlan->getErrorConexion();

}else {

	echo "<br>";
	if (is_file("vistas/inicio/".$pagina.".php")) {
		$planes = $objPlan->Buscartodo();

		if (!empty($_POST)){

			$id_plandesalud= $_POST['id_plandesalud'];
			$consulta = $objPlan->Buscar($id_plandesalud);


			if ($consulta['estatus']&& count($consulta)==2) {
				$pagina='planModificar';
				require_once("vistas/inicio/".$pagina.".php");//si encuentra el rif la envia a la vista de actualizar
			}//fin del if
			else{
				echo $pagina;
				$pagina='planRegistrar';
			require_once("vistas/inicio/".$pagina.".php");
			}//fin del else buscar

		}//empty
		require_once("vistas/inicio/".$pagina.".php");
	}//is_file
}//fin del else de conexion
?>
