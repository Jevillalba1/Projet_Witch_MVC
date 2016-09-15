<?php
/**
*
*/
require_once'Php/Model/Login.php';
class LoginController
{
	private $model;
	#private $model1;
	public function __construct() 
	{
		$this->model= new Login();
		#$this->model1= new Login();
	}
/*---------------------------------------------------------------*/
	public function Index()
	{
		require'Php/Views/Login/Header.html';
		require'Php/Views/Login/LoadLogin.php';
		require'Php/Views/footer.html';
	}
/*---------------------------------------------------------------*/
	public function Validate() 
	{
		$Login= $this->model;
		$Login->setcorreoCliente($_REQUEST['nombre_Usuario']);
		$Login->setnombre_Usuario($_REQUEST['nombre_Usuario']);
		$Login->setpasswordCliente($_REQUEST['passwordCliente']);
		$stmt= $this->model->Login($Login);
		
		switch ($stmt['nombre_Usuario'] or $stmt['correoCliente']) {
			case $_REQUEST['nombre_Usuario']:
			session_start();
				header("location:?controller=User");
				$_SESSION['user'] = $stmt['nombre_Usuario'];
				break;
			default:
				break;
		}


		$Admin= $this->model;
		$Admin->setusuarioid($_REQUEST['nombre_Usuario']);
		$Admin->setpassword($_REQUEST['passwordCliente']);
		$stmt= $this->model->LoginAdmin($Login);

		switch ($stmt['fkcodRol']) {
			case '1':
			session_start();
				header("location:?controller=Admin");
				$_SESSION['Admin'] = $stmt['nombreEmpleado'];
				break;
			default:
				echo"
					<script language='JavaScript'>
					var n = 'contrase\u00f1a';
					alert('Nombre de usuario y '+n+' incorrectos vuelve a intentar');
					</script>
				";
				header('Refresh:0, URL=?controller=Login');
				break;
		}
	}
/*---------------------------------------------------------------*/
	public function Lugout() 
	{
		session_start();
		session_destroy();
		sleep(1);
		header("location:index.php");
	}
}
?>