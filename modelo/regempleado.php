<?php
require_once 'conexion.php';
class empleado1 extends BD
{
	private $ci_empleado;
	private $nombres;
	private $apellido1;
	private $apellido2;
	private $telefono;
	private $direccion;
	private $fecha_de_nacimiento;
	private $cargo;
	private $rol_usuario;
	private $usuario;
	private $contrasena;
	public $conex;


	function __construct()
	{
		$this->conex = parent::__construct();
	}

	public function Registrar()
	{

		$strSql = 'INSERT INTO empleado(ci_empleado,nombres,apellido1,apellido2,telefono,direccion,fecha_de_nacimiento,cargo,rol_usuario,usuario,contrasena) VALUES (:ci_empleado, :nombres, :apellido1, :apellido2, :telefono, :direccion, :fecha_de_nacimiento, :cargo, :rol_usuario, :usuario, :contrasena)';
		$respuestaArreglo = '';

		try {

			$strExec = BD::prepare($strSql);
			$strExec->bindParam(':ci_empleado', $this->ci_empleado);
			$strExec->bindParam(':nombres', $this->nombres);
			$strExec->bindParam(':apellido1', $this->apellido1);
			$strExec->bindParam(':apellido2', $this->apellido2);
			$strExec->bindParam(':telefono', $this->telefono);
			$strExec->bindParam(':direccion', $this->direccion);
			$strExec->bindParam(':fecha_de_nacimiento', $this->fecha_de_nacimiento);
			$strExec->bindParam(':cargo', $this->cargo);
			$strExec->bindParam(':rol_usuario', $this->rol_usuario);
			$strExec->bindParam(':usuario', $this->usuario);
			$strExec->bindParam(':contrasena', $this->contrasena);
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
		$strSql = "UPDATE empleado set ci_empleado=:ci_empleado, nombres=:nombres, apellido1=:apellido1 , apellido2=:apellido2 , telefono=:telefono, direccion=:direccion, fecha_de_nacimiento=:fecha_de_nacimiento , cargo=:cargo , rol_usuario=:rol_usuario, usuario=:usuario, contrasena=:contrasena where  ci_empleado = $this->ci_empleado";

		try {
			$strExec = BD::prepare($strSql);

			$strExec->bindParam(':ci_empleado', $this->ci_empleado);
			$strExec->bindParam(':nombres', $this->nombres);
			$strExec->bindParam(':apellido1', $this->apellido1);
			$strExec->bindParam(':apellido2', $this->apellido2);
			$strExec->bindParam(':telefono', $this->telefono);
			$strExec->bindParam(':direccion', $this->direccion);
			$strExec->bindParam(':fecha_de_nacimiento', $this->fecha_de_nacimiento);
			$strExec->bindParam(':cargo', $this->cargo);
			$strExec->bindParam(':rol_usuario', $this->rol_usuario);
			$strExec->bindParam(':usuario', $this->usuario);
			$strExec->bindParam(':contrasena', $this->contrasena);

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

	public function Buscar($ci_empleado)
	{
		$strSql = "SELECT * FROM empleado where ci_empleado = '$ci_empleado'";
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
		$strSql = "SELECT * FROM empleado";
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
		$strSql = "DELETE FROM empleado where ci_empleado = :ci_empleado";

		try {
			$strExec = BD::prepare($strSql);
			$strExec->bindParam(':ci_empleado', $this->ci_empleado);
			$strExec->execute();
		} catch (PDOException $e) {
			$errorReturn = ['estatus' => false];
			$errorReturn += ['info' => "error sql:{$e}"];
			return $errorReturn;
		}

	}//fin de eliminar modificado por Lissette

	public function Reporte(){

           $strSql = "SELECT * FROM empleado ";
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




	public function validar($usuario, $clave) {
		$strSql = "SELECT * FROM empleado WHERE usuario = :usuario AND contrasena = :clave";

		$strExec = $this->prepare($strSql);
		$strExec->bindParam(':usuario', $usuario);
		$strExec->bindParam(':clave', $clave);
		$strExec->execute();

		if ($strExec->rowCount() == 1) {
			$respArreglo = $strExec->fetch(PDO::FETCH_ASSOC);
			$respArreglo += ['estado' => true];

			return $respArreglo;
		} else {
			$respArreglo = ['estado' => false];

			return $respArreglo;
		}
	}

	public function getCedula()
	{
		return $this->ci_empleado;
	}


	public function setCedula($ci_empleado)
	{
		$this->ci_empleado = $ci_empleado;


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
		return $this->fecha_de_nacimiento;
	}


	public function setFnacimiento($fecha_de_nacimiento)
	{
		$this->fecha_de_nacimiento = $fecha_de_nacimiento;


	}


	public function getCargo()
	{
		return $this->cargo;
	}


	public function setCargo($cargo)
	{
		$this->cargo = $cargo;


	}


	public function getRol_usuario()
	{
		return $this->rol_usuario;
	}


	public function setRol_usuario($rol_usuario)
	{
		$this->rol_usuario = $rol_usuario;


	}

	public function getUsuario()
	{
		return $this->usuario;
	}


	public function setUsuario($usuario)
	{
		$this->usuario = $usuario;


	}

	public function getContrasena()
	{
		return $this->contrasena;
	}


	public function setContrasena($contrasena)
	{
		$this->contrasena = $contrasena;


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
