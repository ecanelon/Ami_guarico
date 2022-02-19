<?php

    require_once "modelo/servicioM.php";
    $objServicio = new Servicio();


    // cuando le da al boton de eliminar
    if (isset($_POST['eliminar'])) {

        $id_servicio = $_POST['eliminar'];
        $objServicio->setIdServicio($id_servicio);
        $result = $objServicio->Eliminar();

        require_once "vista/menu.php";
        $consulta = $objServicio->Buscartodo();
        require_once "vista/listar_servicio.php";


    }else if(isset($_POST['editar'])){ // boton de modificar

        require_once "vista/menu.php";
        $id_servicio = $_POST['editar'];
        $servicio = $objServicio->Buscar($id_servicio);
        require_once "vista/actualizar_servicio.php"; //modificar a servicio

    }else if(isset($_POST['modificar'])) { // cuando viene de la vsita actualizar y le dio  al boton modificar

        $id_servicio= $_POST['id_servicio']; //modififcar segun formulario SERVICIO
        $nombre = $_POST['nombre'];
        $detalles=$_POST['detalles'];


        $objServicio->setIdServicio($id_servicio);
        $objServicio->setNombre($nombre);
        $objServicio->setDetalles($detalles);

        $objServicio->Modificar();

        require_once "vista/menu.php";
        $consulta = $objServicio->Buscartodo();
        require_once "vista/listar_servicio.php";  //modififcar segun formulario SERVICIO

    }else{
        require_once "vista/menu.php";
        $consulta = $objServicio->Buscartodo();
        require_once "vista/listar_servicio.php";   //modififcar segun formulario SERVICIO
    }

?>
