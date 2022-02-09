<?php
require_once "modelo/conexion.php";

echo "esta en el controlador registrar";
$objPlan = new Plandesalud();
if (is_file("vistas/inicio/".$pagina.".php")) {

    if (!empty($_POST)) {

        $id_PlanDeSalud = $_POST['ncontrato'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['correo'];
        $nro_cuotas = $_POST['telefono'];


        $objPlan->setIdPlanDeSalud($id_PlanDeSalud);
        $objPlan->setNombre($nombre);
        $objPlan->setPrecio($precio);
        $objPlan->setNroCuotas($nro_cuotas);
        $result = $objPlan->Registrar();

        if ($result['estatus']==true){

          echo $pagina;
  				$pagina='regPlan';
  			require_once("vistas/inicio/".$pagina.".php");
        }else{
            echo $result['info'];
        }
    }
}
?>
