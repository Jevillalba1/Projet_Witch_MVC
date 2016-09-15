<?php  
/**
* 
*/
class Login extends Conexion
{
	private $correoCliente,$nombre_Usuario,$passwordCliente;
	private $model;
	private $usuarioid,$password;
	public function __construct()
	{
		$this->model= parent::__construct();
	}
/*---------------------------------------------------------------*/
		public function getcorreoCliente() 
	{
		return $this->correoCliente;
	}
	public function setcorreoCliente($correoCliente) 
	{
		$this->correoCliente= $correoCliente;
	}
/*---------------------------------------------------------------*/	
	public function getnombre_Usuario() 
	{
		return $this->nombre_Usuario;
	}
	public function setnombre_Usuario($nombre_Usuario) 
	{
		$this->nombre_Usuario= $nombre_Usuario;
	}
/*---------------------------------------------------------------*/
	public function getpasswordCliente() 
	{
		return $this->passwordCliente;
	}
	public function setpasswordCliente($passwordCliente) 
	{
		$this->passwordCliente= $passwordCliente;
	}
/*---------------------------------------------------------------*/	
		public function getusuarioid() 
	{
		return $this->usuarioid;
	}
	public function setusuarioid($usuarioid) 
	{
		$this->usuarioid= $usuarioid;
	}
/*---------------------------------------------------------------*/	
	public function getpassword() 
	{
		return $this->password;
	}
	public function setpassword($password) 
	{
		$this->password= $password;
	}	
/*---------------------------------------------------------------*/
	public function Login() 
	{
		$query="SELECT * FROM cliente WHERE correoCliente='".$this->nombre_Usuario."' OR nombre_Usuario='".$this->nombre_Usuario."' AND passwordCliente='".$this->passwordCliente."'";

		$stmt= $this->model->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
/*---------------------------------------------------------------*/	
	public function LoginAdmin() 
	{
		$query="SELECT * FROM empleado WHERE usuarioid='".$this->nombre_Usuario."' AND password='".$this->passwordCliente."'";

		$stmt= $this->model->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
?>