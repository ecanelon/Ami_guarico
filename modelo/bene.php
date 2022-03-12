<?php
/**
 *
 */
 	require_once 'conexion.php';
class beneficiarios1 extends BD
{

private $ci_beneficiarios;
private $ci_titular;
private $parentesco;
private $nombres;
private $apellido1;
private $apellido2;
private $telefono;
private $direccion;
private $fecha_de_nacimiento;
public $conex;


  function __construct()
  {
    // code...
      $this->conex = parent::__construct();
  }
  public function Registrar()
  {

      $strSql = 'INSERT INTO beneficiarios(ci_beneficiarios,ci_titular,parentesco,nombres,apellido1,apellido2,telefono,direccion,fecha_de_nacimiento) VALUES (:ci_beneficiarios, :ci_titular, :parentesco, :nombres, :apellido1, :apellido2, :telefono, :direccion, :fecha_de_nacimiento)';
      $respuestaArreglo = '';


      try {

          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':ci_beneficiarios', $this->ci_beneficiarios);
          $strExec->bindParam(':ci_titular', $this->ci_titular);
          $strExec->bindParam(':parentesco', $this->parentesco);
          $strExec->bindParam(':nombres', $this->nombres);
          $strExec->bindParam(':apellido1', $this->apellido1);
          $strExec->bindParam(':apellido2', $this->apellido2);
          $strExec->bindParam(':telefono', $this->telefono);
          $strExec->bindParam(':direccion', $this->direccion);
          $strExec->bindParam(':fecha_de_nacimiento', $this->fecha_de_nacimiento);
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

  //fin del metodo registrar






  public function Modificar()

  {


      $strSql = "UPDATE beneficiarios set ci_beneficiarios=:ci_beneficiarios, ci_titular=:ci_titular, parentesco=:parentesco, nombres=:nombres, apellido1=:apellido1 , apellido2=:apellido2 , telefono=:telefono, direccion=:direccion, fecha_de_nacimiento=:fecha_de_nacimiento where  ci_beneficiarios = $this->ci_beneficiarios";

      try {
          $strExec = BD::prepare($strSql);

          $strExec->bindParam(':ci_beneficiarios', $this->ci_beneficiarios);
          $strExec->bindParam(':ci_titular', $this->ci_titular);
          $strExec->bindParam(':parentesco', $this->parentesco);
          $strExec->bindParam(':nombres', $this->nombres);
          $strExec->bindParam(':apellido1', $this->apellido1);
          $strExec->bindParam(':apellido2', $this->apellido2);
          $strExec->bindParam(':telefono', $this->telefono);
          $strExec->bindParam(':direccion', $this->direccion);
          $strExec->bindParam(':fecha_de_nacimiento', $this->fecha_de_nacimiento);
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

  public function Buscar($ci_beneficiarios)
  {
      $strSql = "SELECT * FROM beneficiarios where ci_beneficiarios = '$ci_beneficiarios'";
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
      $strSql = "SELECT * FROM beneficiarios";
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
      $strSql = "DELETE FROM beneficiarios where ci_beneficiarios = :ci_beneficiarios";

      try {
          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':ci_beneficiarios', $this->ci_beneficiarios);
          $strExec->execute();
          } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }

 }

 //fin de eliminar modificado por Lissette

 public function Reporte(){

            $strSql = "SELECT * FROM beneficiarios ";
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





public function getCedulabeneficiarios()
{
    return $this->ci_beneficiarios;
}


public function setCedulabeneficiarios($ci_beneficiarios)
{
    $this->ci_beneficiarios = $ci_beneficiarios;


}


public function getCedula()
{
    return $this->ci_titular;
}


public function setCedula($ci_titular)
{
    $this->ci_titular = $ci_titular;


}


public function getParentesco()
{
    return $this->parentesco;
}


public function setParentesco($parentesco)
{
    $this->parentesco = $parentesco;


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


public function setFnacimiento($fecha_de_nacimiento)
{
    $this->fecha_de_nacimiento = $fecha_de_nacimiento;


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
