<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}
      require_once "modelo/regpagos.php";
      require_once "vista/menu.php";
      require_once "vista/regpagos.php";
      $objPago = new pagos1();


      if (isset($_POST['btnguardar'])) {

        $id_pago = $_POST['id_pago'];
        $id_contrato = $_POST['id_contrato'];
        $cantidad = $_POST['cantidad'];
        $descripcion = $_POST['descripcion'];
        $fecha_pago = $_POST['fecha_pago'];

        $result = $objPago->Buscar($id_pago);
        
        if($result){
         
      echo'<script type="text/javascript">
          alert("Ya hay un pago existente con el mismo ID");
          </script>';
        }
       else{


        $objPago->setIdpago($id_pago);
        $objPago->setIdcontrato($id_contrato);
        $objPago->setCantidad($cantidad);
        $objPago->setDescripcion($descripcion);
        $objPago->setFecha_pago($fecha_pago);

        $result = $objPago->Registrar();
        echo'<script type="text/javascript">
    alert("Registro guardado exitosamente");
    </script>';

     }
      } // fin de Guardar

?>
