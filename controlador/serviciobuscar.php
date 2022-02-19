<?php

      require_once "vista/menu.php";
      require_once "vista/servicioregistrar.php";
      require_once "modelo/servicioM.php";
      $objServicio = new Servicio();



        if (isset($_POST['btnguardar'])) {
      		$servicio = $objServicio->Buscartodo();

      		if (!empty($_POST)){

      			$id_servicio= $_POST['id_servicio'];
      			$consulta = $objServicio->Buscar($id_servicio);


      			if ($consulta['estatus']&& count($consulta)==2) {
      				$pagina='listar_servicio';
      				require_once("vistas/inicio/".$pagina.".php");//si encuentra el id de contrato la envia a la vista de actualizar
      			}//fin del if
      			else{
      				echo $pagina;
      				$pagina='servicioregistrar';
      			require_once("vistas/inicio/".$pagina.".php");
      			}//fin del else buscar

      		}//empty
      		require_once("vistas/inicio/".$pagina.".php");
      	}//is_file

    //fin del
      // fin de Guardar

?>
