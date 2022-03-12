<?php
/**
 *
 */
 	require_once 'conexion.php';
class pagos1 extends BD
{

private $id_pago;
private $id_contrato;
private $cantidad;
private $descripcion;
private $fecha_pago;

public $conex;


  function __construct()
  {
    // code...
      $this->conex = parent::__construct();
  }
  public function Registrar()
  {

      $strSql = 'INSERT INTO pagos(id_pago,id_contrato,cantidad,descripcion,fecha_pago) VALUES (:id_pago, :id_contrato, :cantidad, :descripcion, :fecha_pago)';
      $respuestaArreglo = '';


      try {

          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':id_pago', $this->id_pago);
          $strExec->bindParam(':id_contrato', $this->id_contrato);
          $strExec->bindParam(':cantidad', $this->cantidad);
          $strExec->bindParam(':descripcion', $this->descripcion);
          $strExec->bindParam(':fecha_pago', $this->fecha_pago);

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


      $strSql = "UPDATE pagos set id_pago=:id_pago, id_contrato=:id_contrato, cantidad=:cantidad , descripcion=:descripcion, fecha_pago=:fecha_pago where  id_pago = $this->id_pago";

      try {
          $strExec = BD::prepare($strSql);

         $strExec->bindParam(':id_pago', $this->id_pago);
          $strExec->bindParam(':id_contrato', $this->id_contrato);
          $strExec->bindParam(':cantidad', $this->cantidad);
          $strExec->bindParam(':descripcion', $this->descripcion);
          $strExec->bindParam(':fecha_pago', $this->fecha_pago);

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

  public function Buscar($id_pago)
  {
      $strSql = "SELECT * FROM pagos where id_pago = '$id_pago'";
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
      $strSql = "SELECT * FROM pagos";
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
      $strSql = "DELETE FROM pagos where id_pago = :id_pago";

      try {
          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':id_pago', $this->id_pago);
          $strExec->execute();
          } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }

}// fin de eliminar modificado por Lissette


      public function Reporte(){

                 $strSql = "SELECT * FROM pagos ";
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





public function getIdpago()
{
    return $this->id_pago;
}


public function setIdpago($id_pago)
{
    $this->id_pago = $id_pago;


}


public function getIdcontrato()
{
    return $this->id_contrato;
}


public function setIdcontrato($id_contrato)
{
    $this->id_contrato = $id_contrato;


}


public function getCantidad()
{
    return $this->cantidad;
}


public function setCantidad($cantidad)
{
    $this->cantidad = $cantidad;


}


public function getDescripcion()
{
    return $this->descripcion;
}


public function setDescripcion($descripcion)
{
    $this->descripcion = $descripcion;


}

public function getFecha_pago()
{
    return $this->fecha_pago;
}


public function setFecha_pago($fecha_pago)
{
    $this->fecha_pago = $fecha_pago;


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
