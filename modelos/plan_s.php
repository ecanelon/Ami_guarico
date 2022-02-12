<?php
/**
 *
 */
 	require_once 'conexion.php';
class Plandesalud extends BD
{

private $id_plandesalud;
private $nombre;
private $precio;
private $nro_cuotas;
public $conex;


  function __construct()
  {
    // code...
      $this->conex = parent::__construct();
  }
  public function Registrar()
  {

      $strSql = 'INSERT INTO plan_de_salud(id_plandesalud,nombre,precio,nro_cuotas) VALUES (:id_plandesalud, :nombre, :precio, :nro_cuotas)';
      $respuestaArreglo = '';


      try {

          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':id_plandesalud', $this->id_plandesalud);
          $strExec->bindParam(':nombre', $this->nombre);
          $strExec->bindParam(':precio', $this->precio);
          $strExec->bindParam(':nro_cuotas', $this->nro_cuotas);
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


      $strSql = "UPDATE plan_de_salud set id_plandesalud=:id_plandesalud, nombre=:nombre, precio=:precio , nro_cuotas=:nro_cuotas where  id_plandesalud = '$this->id_plandesalud'";

      try {
          $strExec = BD::prepare($strSql);

          $strExec->bindParam(':id_plandesalud', $this->id_plandesalud);
          $strExec->bindParam(':nombre', $this->nombre);
          $strExec->bindParam(':precio', $this->precio);
          $strExec->bindParam(':nro_cuotas', $this->nro_cuotas);
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

  public function Buscar($id_plandesalud)
  {
      $strSql = "SELECT * FROM plan_de_salud where id_plandesalud = '$id_plandesalud'";
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
      public function Buscartodo(){
      $strSql = "SELECT * FROM plan_de_salud";
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

  public function Eliminar($id_plandesalud)
  {
      $strSql = "DELETE FROM plan_de_salud where id_plandesalud = '$id_plandesalud'";

      try {
          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':id_plandesalud', $this->id_plandesalud);
          } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }

}

public function getIdPlandesalud()
{
    return $this->id_plandesalud;
}


public function setIdPlandesalud($id_plandesalud)
{
    $this->id_plandesalud = $id_plandesalud;


}


public function getNombre()
{
    return $this->nombre;
}


public function setNombre($nombre)
{
    $this->nombre = $nombre;


}


public function getPrecio()
{
    return $this->precio;
}


public function setPrecio($precio)
{
    $this->precio = $precio;


}


public function getNroCuotas()
{
    return $this->nro_cuotas;
}


public function setNroCuotas($nro_cuotas)
{
    $this->nro_cuotas = $nro_cuotas;


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
