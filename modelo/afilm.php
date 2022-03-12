<?php
/**
 *
 */
 	require_once 'conexion.php';
class afiliados1 extends BD
{

private $ci_titular;
private $nombres;
private $apellido1;
private $apellido2;
private $telefono;
private $direccion;
private $fecha_nacimiento;
public $conex;


  function __construct()
  {
    // code...
      $this->conex = parent::__construct();
  }
  public function Registrar()
  {

      $strSql = 'INSERT INTO titular(ci_titular,nombres,apellido1,apellido2,telefono,direccion,fecha_nacimiento) VALUES (:ci_titular, :nombres, :apellido1, :apellido2, :telefono, :direccion, :fecha_nacimiento)';
      $respuestaArreglo = '';


      try {

          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':ci_titular', $this->ci_titular);
          $strExec->bindParam(':nombres', $this->nombres);
          $strExec->bindParam(':apellido1', $this->apellido1);
          $strExec->bindParam(':apellido2', $this->apellido2);
          $strExec->bindParam(':telefono', $this->telefono);
          $strExec->bindParam(':direccion', $this->direccion);
          $strExec->bindParam(':fecha_nacimiento', $this->fecha_nacimiento);
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


      $strSql = "UPDATE titular set ci_titular=:ci_titular, nombres=:nombres, apellido1=:apellido1 , apellido2=:apellido2 , telefono=:telefono, direccion=:direccion, fecha_nacimiento=:fecha_nacimiento where  ci_titular = $this->ci_titular";

      try {
          $strExec = BD::prepare($strSql);

          $strExec->bindParam(':ci_titular', $this->ci_titular);
          $strExec->bindParam(':nombres', $this->nombres);
          $strExec->bindParam(':apellido1', $this->apellido1);
          $strExec->bindParam(':apellido2', $this->apellido2);
          $strExec->bindParam(':telefono', $this->telefono);
          $strExec->bindParam(':direccion', $this->direccion);
          $strExec->bindParam(':fecha_nacimiento', $this->fecha_nacimiento);
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

  public function Buscar($ci_titular)
  {
      $strSql = "SELECT * FROM titular where ci_titular = '$ci_titular'";
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
      $strSql = "SELECT * FROM titular";
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
      $strSql = "DELETE FROM titular where ci_titular = :ci_titular";

      try {
          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':ci_titular', $this->ci_titular);
          $strExec->execute();
          } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }

 }//fin de eliminar modificado por Lissette


 public function Reporte(){

            $strSql = "SELECT * FROM titular ";
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




public function getCedula()
{
    return $this->ci_titular;
}


public function setCedula($ci_titular)
{
    $this->ci_titular = $ci_titular;


}


public function getNombres()
{
    return $this->nombres;
}


public function setNombres($nombres)
{
    $this->nombres = $nombres;


}




public function getApellido1()
{
    return $this->apellido1;
}


public function setApellido1($apellido1)
{
    $this->apellido1 = $apellido1;


}

public function getApellido2()
{
    return $this->apellido2;
}


public function setApellido2($apellido2)
{
    $this->apellido2 = $apellido2;


}



public function getTelefono()
{
    return $this->telefono;
}


public function setTelefono($telefono)
{
    $this->telefono = $telefono;


}

public function getDireccion()
{
    return $this->direccion;
}


public function setDireccion($direccion)
{
    $this->direccion = $direccion;


}

public function getFnacimiento()
{
    return $this->fecha_nacimiento;
}


public function setFnacimiento($fecha_nacimiento)
{
    $this->fecha_nacimiento = $fecha_nacimiento;


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
