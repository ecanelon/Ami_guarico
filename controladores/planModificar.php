<?php
require_once "modelos/plan_s.php";

echo "esta en el controlador registrar";
$objPlan = new Plandesalud();
if (is_file("vistas/inicio/".$pagina.".php")) {

    if (!empty($_POST)) {

        $id_plandesalud = $_POST['id_plandesalud'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $nro_cuotas = $_POST['ncuotas'];


        $objPlan->setIdPlandesalud($id_plandesalud);
        $objPlan->setNombre($nombre);
        $objPlan->setPrecio($precio);
        $objPlan->setNroCuotas($nro_cuotas);
        $result = $objPlan->Modificar();

        if ($result['estatus']==true){

echo "modificacion exitosa";
          echo $pagina;
  				$pagina='regPlan';
  			require_once("vistas/inicio/".$pagina.".php");
        }else{
            echo $result['info'];
        }
    }
}
?>
