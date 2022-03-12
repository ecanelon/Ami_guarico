<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol_usuario'] != "administrador") {
  header('location: ./');
  exit();

}
      require_once "modelo/servicioM.php";
      require_once "vista/menu.php";
      require_once "vista/servicioregistrar.php";
      $objServicio = new Servicio();
  echo "controlador registrar";

      if (isset($_POST['btnguardar'])) {

        $id_servicio= $_POST['id_servicio'];
        $nombre = $_POST['nombre'];
        $detalles = $_POST['detalles'];
        $objServicio->setIdServicio($id_servicio);
        $objServicio->setNombre($nombre);
        $objServicio->setDetalles($detalles);
;
        $result = $objServicio->Registrar();

        echo'<script type="text/javascript">
    alert("Registro guardado exitosamente");
    </script>';



      } // fin de Guardar

?>
