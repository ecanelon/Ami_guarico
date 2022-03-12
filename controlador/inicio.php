<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('location: ./');
  exit();
}

 echo "paso por if";
		require_once "vista/menu.php";
		require_once "vista/principal.php";

		require_once "vista/pie.php";
