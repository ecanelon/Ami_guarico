<?php
/**
 *
 */
 	require_once 'conexion.php';
class Plandesalud extends BD
{

private $id_PlanDeSalud;
private $nombre;
private $precio;
private $cuotas;
public $conex;


  function __construct()
  {
    // code...
      $this->conex = parent::__construct();
  }
  public function Registrar()
  {

      $strSql = 'INSERT INTO Plan_De_Salud (id_PlanDeSalud,nombre,precio,nro_cuotas) VALUES (:id_PlanDeSalud, :nombre, :precio, :nro_cuotas)';
      $respuestaArreglo = '';


      try {

          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':id_PlanDeSalud', $this->id_PlanDeSalud);
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
    echo $this->nombre;

      $strSql = "UPDATE plan_de_salud set id_PlanDeSalud=:id_PlanDeSalud, nombre=:nombre, precio=:precio , nro_cuotas=:nro_cuotas where  id_PlanDeSalud = '$this->id_PlanDeSalud'";

      try {
          $strExec = BD::prepare($strSql);

          $strExec->bindParam(':id_PlanDeSalud', $this->id_PlanDeSalud);
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

  public function Buscar($id_PlanDeSalud)
  {
      $strSql = "SELECT * FROM plan_de_salud where id_PlanDeSalud = '$id_PlanDeSalud'";
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

  public function Eliminar($id_PlanDeSalud)
  {
      $strSql = "DELETE FROM plan_de_salud where id_PlanDeSalud = '$id_PlanDeSalud'";

      try {
          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':id_PlanDeSalud', $this->id_PlanDeSalud);
          } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }
    }

public function getIdPlanDeSalud()
{
    return $this->id_PlanDeSalud;
}


public function setIdPlanDeSalud($id_PlanDeSalud)
{
    $this->id_PlanDeSalud = $id_PlanDeSalud;


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


public function getCuotas()
{
    return $this->cuotas;
}


public function setCuotas($cuotas)
{
    $this->cuotas = $cuotas;


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
