<?php
/**
* 
*/
require'Php/Model/register.php';
class RegisterController
{
	private $model;
	public function __construct() 
	{
		$this->model= new Register();
	}
/*---------------------------------------------------------------*/
	public function Index()
	{
		require'Php/Views/Register/Header.html';
		require'Php/Views/Register/LoadRegister.php';
		require'Php/Views/footer.html';
	}
/*---------------------------------------------------------------*/
	public function Create()
	{
		$cliente = $this->model;
		$cliente->setidentificacionCliente($_REQUEST['identificacionCliente']);
		$cliente->setnombreCliente($_REQUEST['nombreCliente']);
		$cliente->setapellidoCliente($_REQUEST['apellidoCliente']);
		$cliente->setdireccionCliente($_REQUEST['direccionCliente']);
		$cliente->settelefonoCliente($_REQUEST['telefonoCliente']);
		$cliente->setcorreoCliente($_REQUEST['correoCliente']);
		$cliente->setnombre_Usuario($_REQUEST['nombre_Usuario']);
		$cliente->setpasswordCliente($_REQUEST['passwordCliente']);
		$stmt= $cliente->insert($cliente);
		header("Refresh:0, URL=?controller=Register");
		echo"
			<script language='JavaScript'>
				alert('Te registraste correctamente en el sistema, ahora puedes iniciar sesion');
			</script>
		";
	}
}	



?>