<?php
/**
 *
 */
 	require_once 'conexion.php';
class Contratos1 extends BD
{

private $nro_contrato;
private $ci_titular;
private $id_PlanDeSalud;
private $fecha_inicio_contrato;
private $fecha_cierre_contrato;

public $conex;


  function __construct()
  {
    // code...
      $this->conex = parent::__construct();
  }
  public function Registrar()
  {

      $strSql = 'INSERT INTO contrato(nro_contrato,ci_titular,id_PlanDeSalud,fecha_inicio_contrato,fecha_cierre_contrato) VALUES (:nro_contrato, :ci_titular, :id_PlanDeSalud, :fecha_inicio_contrato, :fecha_cierre_contrato)';
      $respuestaArreglo = '';


      try {

          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':nro_contrato', $this->nro_contrato);
          $strExec->bindParam(':ci_titular', $this->ci_titular);
          $strExec->bindParam(':id_PlanDeSalud', $this->id_PlanDeSalud);
          $strExec->bindParam(':fecha_inicio_contrato', $this->fecha_inicio_contrato);
          $strExec->bindParam(':fecha_cierre_contrato', $this->fecha_cierre_contrato);

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


      $strSql = "UPDATE contrato set nro_contrato=:nro_contrato, ci_titular=:ci_titular, id_PlanDeSalud=:id_PlanDeSalud , fecha_inicio_contrato=:fecha_inicio_contrato, fecha_cierre_contrato=:fecha_cierre_contrato where  nro_contrato = $this->nro_contrato";

      try {
          $strExec = BD::prepare($strSql);

         $strExec->bindParam(':nro_contrato', $this->nro_contrato);
          $strExec->bindParam(':ci_titular', $this->ci_titular);
          $strExec->bindParam(':id_PlanDeSalud', $this->id_PlanDeSalud);
          $strExec->bindParam(':fecha_inicio_contrato', $this->fecha_inicio_contrato);
          $strExec->bindParam(':fecha_cierre_contrato', $this->fecha_cierre_contrato);

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

  public function Buscar($nro_contrato)
  {
      $strSql = "SELECT * FROM contrato where nro_contrato = '$nro_contrato'";
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
      $strSql = "SELECT * FROM contrato";
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
      $strSql = "DELETE FROM contrato where nro_contrato = :nro_contrato";

      try {
          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':nro_contrato', $this->nro_contrato);
          $strExec->execute();
          } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }

}// fin de eliminar modificado por Lissette

public function Reporte(){

           $strSql = "SELECT * FROM contrato ";
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



public function getNumerocontrato()
{
    return $this->nro_contrato;
}


public function setNumerocontrato($nro_contrato)
{
    $this->nro_contrato = $nro_contrato;


}


public function getCedula()
{
    return $this->ci_titular;
}


public function setCedula($ci_titular)
{
    $this->ci_titular = $ci_titular;


}


public function getIdPlandesalud()
{
    return $this->id_PlanDeSalud;
}


public function setIdPlandesalud($id_PlanDeSalud)
{
    $this->id_PlanDeSalud = $id_PlanDeSalud;


}


public function getIniciocontrato()
{
    return $this->fecha_inicio_contrato;
}


public function setIniciocontrato($fecha_inicio_contrato)
{
    $this->fecha_inicio_contrato = $fecha_inicio_contrato;


}

public function getCierrecontrato()
{
    return $this->fecha_cierre_contrato;
}


public function setCierrecontrato($fecha_cierre_contrato)
{
    $this->fecha_cierre_contrato = $fecha_cierre_contrato;


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
