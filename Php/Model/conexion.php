<?php
	/**
	* 
	*/
	class Conexion
	{
		private $pdo;
		public function __CONSTRUCT()
		{
			try 
			{
				$this->pdo= new PDO('mysql:host=localhost;dbname=drogueria_pps;charset=utf8;','root','');
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $this->pdo;
			}
		catch (PDOException $e) 
			{
				print("Lo sentimos ocurrio un error al conectar con la base de datos.");
				die();
			}		
		}
	}
?>
