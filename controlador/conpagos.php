<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}
 // Realizado por Lissette
    require_once "modelo/regpagos.php";
    $objPago = new pagos1();
    
    
    // cuando le da al boton de eliminar
    if (isset($_POST['eliminar'])) {

        $id_pago = $_POST['eliminar'];
        $objPago->setIdpago($id_pago);
        $result = $objPago->Eliminar();
        
        require_once "vista/menu.php";
        $consulta = $objPago->Buscartodo();
        require_once "vista/conpagos.php";


    }else if(isset($_POST['editar'])){ // boton de modificar 

        require_once "vista/menu.php";
        $id_pago = $_POST['editar'];
        $pago = $objPago->Buscar($id_pago);
        require_once "vista/actpagos.php";

    }else if(isset($_POST['modificar'])) { // cuando viene de la vsita actualizar y le dio  al boton modificar 

        $id_pago = $_POST['id_pago'];
        $id_contrato = $_POST['id_contrato'];
        $cantidad = $_POST['cantidad'];
        $descripcion = $_POST['descripcion'];
        $fecha_pago = $_POST['fecha_pago'];


        $objPago->setIdpago($id_pago);
        $objPago->setIdcontrato($id_contrato);
        $objPago->setCantidad($cantidad);
        $objPago->setDescripcion($descripcion);
        $objPago->setFecha_pago($fecha_pago);

        $objPago->Modificar();

        require_once "vista/menu.php";
        $consulta = $objPago->Buscartodo();
        require_once "vista/conpagos.php";

    }else{
        require_once "vista/menu.php";
        $consulta = $objPago->Buscartodo();
        require_once "vista/conpagos.php";
    }

?>