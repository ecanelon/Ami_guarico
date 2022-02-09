<?php
require_once "conexion.php";
$pdo = new BD();
if ($pdo->getRepConexion()==false){
echo "Error de Conexion en :".$pdo->getErrorConexion();
} else
echo "Conexion Exitosa base de datos guarico pdo";
?>
