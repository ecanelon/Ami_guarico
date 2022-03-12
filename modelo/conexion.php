<?php
/**
 *
 */
class BD extends PDO
{
	public $host='localhost';
		public $bd = 'guarico1';
		public $password='';
		public $user='root';
		public $repconexion;
		public $errorconexion;


	public function __construct()
	{
		try {
			$this->conex= parent::__construct("mysql:host=$this->host;dbname=$this->bd",$this->user,$this->password);
			$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->repconexion = true;
			$this->errorconexion= "";


		}
		catch (PDOException $e){
			$this->errorconexion = "error en:".$e;
		}//fin del cacth

	}//fin del metodo constuct

	//getter

	public function getRepConexion(){
		return $this->repconexion;
	}

	public function getErrorConexion(){
		return $this->errorconexion;
	}
}

?>
