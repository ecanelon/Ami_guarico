<?php
      require_once "modelo/servicioM.php";
      require_once "vista/menu.php";
      require_once "vista/servicioregistrar.php";
      $objServicio = new Servicio();


      if (isset($_POST['btnguardar'])) {
          echo "Clik en Guardar";
      $id_servicio= $_POST['id_servicio'];
        $nombre = $_POST['nombre'];
        $detalles = $_POST['detalles'];
        $objServicio->setIdServicio($id_servicio);
        $objServicio->setNombre($nombre);
        $objServicio->setDetalles($detalles);
;
        $result = $objServicio->Registrar();
        echo "registrado";


      } // fin de Guardar

?>
