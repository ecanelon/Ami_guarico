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
private $nro_cuotas;
private $id_servicio;
private $id_servicio2;
private $id_servicio3;
private $id_servicio4;
public $conex;


  function __construct()
  {
    // code...
      $this->conex = parent::__construct();
  }
  public function Registrar()
  {

      $strSql = 'INSERT INTO plan_de_salud(nombre,precio,nro_cuotas,id_servicio,id_servicio2,id_servicio3,id_servicio4) VALUES ( :nombre, :precio, :nro_cuotas, :id_servicio, :id_servicio2, :id_servicio3, :id_servicio4)';
      $respuestaArreglo = '';


      try {
        echo $this->id_servicio2;

          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':nombre', $this->nombre);
          $strExec->bindParam(':precio', $this->precio);
          $strExec->bindParam(':nro_cuotas', $this->nro_cuotas);
          $strExec->bindParam(':id_servicio', $this->id_servicio);
          $strExec->bindParam(':id_servicio2', $this->id_servicio2);
          $strExec->bindParam(':id_servicio3', $this->id_servicio3);
          $strExec->bindParam(':id_servicio4', $this->id_servicio4);
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


       $strSql = "UPDATE plan_de_salud set nombre=:nombre, precio=:precio , nro_cuotas=:nro_cuotas, id_servicio=:id_servicio, id_servicio2=:id_servicio2, id_servicio3=:id_servicio3, id_servicio4=:id_servicio4 where  id_PlanDeSalud = $this->id_PlanDeSalud";

      try {

          $strExec = BD::prepare($strSql);

          $strExec->bindParam(':nombre', $this->nombre);
          $strExec->bindParam(':precio', $this->precio);
          $strExec->bindParam(':nro_cuotas', $this->nro_cuotas);
          $strExec->bindParam(':id_servicio', $this->id_servicio);
          $strExec->bindParam(':id_servicio2', $this->id_servicio2);
          $strExec->bindParam(':id_servicio3', $this->id_servicio3);
          $strExec->bindParam(':id_servicio4', $this->id_servicio4);
          $strExec->execute();
          //$respuestaArreglo = $strExec->fetchAll();//retornamos todo los datos de la ejecucion
          $respuestaArreglo = ['estatus' => true];
          return $respuestaArreglo;

      } catch (PDOException $e) {
        echo $e;
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }
  }

  public function Buscar($id_PlanDeSalud)
  {
      $strSql = "SELECT * FROM plan_de_salud where id_PlanDeSalud = '$id_PlanDeSalud'";
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
    //  $strSql = "SELECT * FROM plan_de_salud";
     $strSql = "SELECT id_PlanDeSalud, p.nombre, precio, nro_cuotas,
      s.id_servicio, s.nombre as nombreservicio,
      s2.id_servicio as id_servicio2, s2.nombre as nombreservicio2,
      s3.id_servicio as id_servicio3, s3.nombre as nombreservicio3,
      s4.id_servicio as id_servicio4, s4.nombre as nombreservicio4
      FROM plan_de_salud p
      LEFT JOIN servicios s ON p.id_servicio=s.id_servicio
      LEFT JOIN servicios s2 ON p.id_servicio2=s2.id_servicio
      LEFT JOIN servicios s3 ON p.id_servicio3=s3.id_servicio
      LEFT JOIN servicios s4 ON p.id_servicio4=s4.id_servicio
      ORDER BY p.id_PlanDeSalud";
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
      $strSql = "DELETE FROM plan_de_salud where id_PlanDeSalud = :id_PlanDeSalud";

      try {
          $strExec = BD::prepare($strSql);
          $strExec->bindParam(':id_PlanDeSalud', $this->id_PlanDeSalud);
          $strExec->execute();
          } catch (PDOException $e) {
          $errorReturn = ['estatus' => false];
          $errorReturn += ['info' => "error sql:{$e}"];
          return $errorReturn;
      }

}// fin de eliminar modificado por Lissette

public function Reporte(){

           $strSql = "SELECT * FROM plan_de_salud ";
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


public function getNroCuotas()
{
    return $this->nro_cuotas;
}


public function setNroCuotas($nro_cuotas)
{
    $this->nro_cuotas = $nro_cuotas;


}


public function getIdServicio()
{
    return $this->id_servicio;
}


public function setIdServicio($id_servicio)
{
    $this->id_servicio = $id_servicio;


}


public function getIdServicio2()
{
    return $this->id_servicio2;
}


public function setIdServicio2($id_servicio2)
{
    $this->id_servicio2 = $id_servicio2;


}


public function getIdServicio3()
{
    return $this->id_servicio3;
}


public function setIdServicio3($id_servicio3)
{
    $this->id_servicio3 = $id_servicio3;


}


public function getIdServicio4()
{
    return $this->id_servicio4;
}


public function setIdServicio4($id_servicio4)
{
    $this->id_servicio4 = $id_servicio4;


}


public function getConex()
{
    return $this->conex;
}


public function setConex($conex)
{
    $this->conex = $conex;


}

      }// fin del metodo Consultar





 ?>
