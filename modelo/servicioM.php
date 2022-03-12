<?php
/**
 *
 */
 	require_once 'conexion.php';
class Servicio extends BD
{

private $id_servicio;
private $nombre;
private $detalles;
public $conex;


  function __construct()
  {
    // code...
      $this->conex = parent::__construct();
  }
  public function Registrar()
  {

      $strSql = 'INSERT INTO servicios(id_servicio,nombre,detalles) VALUES (:id_servicio, :nombre, :detalles)';
      $respuestaArreglo = '';


      try {

          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':id_servicio', $this->id_servicio);
          $strExec->bindParam(':nombre', $this->nombre);
          $strExec->bindParam(':detalles', $this->detalles);
          $strExec->execute();

          //$respuestaArreglo = $strExec->fetchAll();//retornamos todo los datos de la ejecucion
          $respuestaArreglo = ['estatus' => true];

          return $respuestaArreglo;

      } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }
  }//fin del metodo registrar

  public function Modificar()

  {


      $strSql = "UPDATE servicios set id_servicio=:id_servicio, nombre=:nombre, detalles=:detalles  where  id_servicio = $this->id_servicio";

      try {
          $strExec = BD::prepare($strSql);

          $strExec->bindParam(':id_servicio', $this->id_servicio);
          $strExec->bindParam(':nombre', $this->nombre);
          $strExec->bindParam(':detalles', $this->detalles);

          $strExec->execute();
          //$respuestaArreglo = $strExec->fetchAll();//retornamos todo los datos de la ejecucion
          $respuestaArreglo = ['estatus' => true];
          return $respuestaArreglo;

      } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }
  }

  public function Buscar($id_servicio)
  {
      $strSql = "SELECT * FROM servicios where id_servicio = '$id_servicio'";
       $respuestaArreglo = '';
      try {
          $strExec = BD::prepare($strSql);
          $strExec->execute();
          $respuestaArreglo = $strExec->fetch(PDO::FETCH_ASSOC);
          return $respuestaArreglo;
      } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }
  }
      public function Buscartodo(){
      $strSql = "SELECT * FROM servicios";
  try {
          $strExec = BD::prepare($strSql);
          $strExec->execute();
          $respuestaArreglo = $strExec->fetchAll(PDO::FETCH_ASSOC);
          $respuestaArreglo += ['estatus' => true];
          return $respuestaArreglo;
      } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }
  }

  public function Eliminar()
  {
      $strSql = "DELETE FROM servicios where id_servicio = :id_servicio";

      try {
          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':id_servicio', $this->id_servicio);
          $strExec->execute();
          } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }
    }

      public function Reporte(){

                 $strSql = "SELECT * FROM servicios ";
                 $respuestaArreglo = '';

                 try {
                     $strExec = BD::prepare($strSql);
                     $strExec->execute();
                     $strExec ->setFetchMode(PDO::FETCH_ASSOC);
                     $respuestaArreglo = $strExec->fetchAll(PDO::FETCH_ASSOC); //retornamos todos los datos de la ejecucion
                     return $respuestaArreglo;
                 } catch (PDOException $e) { //si hay un error en la instruccion sql entramos en el catch
                     $errorReturn = ['estatus' => "false"];
                     $errorReturn += ['info' => "error sql:{$e}"];
                     return $errorReturn; ; //retornamos el contenido de esa variable
                 }// fin del catch
             }// fin del metodo Consultar


public function getIdServicio()
{
    return $this->id_servicio;
}


public function setIdServicio($id_servicio)
{
    $this->id_servicio = $id_servicio;


}


public function getNombre()
{
    return $this->nombre;
}


public function setNombre($nombre)
{
    $this->nombre = $nombre;


}


public function getDetalles()
{
    return $this->detalles;
}


public function setDetalles($detalles)
{
    $this->detalles = $detalles;


}


public function getConex()
{
    return $this->conex;
}


public function setConex($conex)
{
    $this->conex = $conex;


}

      }







 ?>
