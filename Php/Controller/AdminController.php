<?php
/**
*
*/
require'Php/Model/Admin.php';
class AdminController
{
	private $model;
	public function __construct()
	{
		$this->model= new Admin();
	}
/*---------------------------------------------------------------*/
	public function Index()
	{
		$cliente = $this->model;
		$stmt= $cliente->read();
		require'Php/Views/Admin/Header.html';
		require'Php/Views/Admin/LoadAdmin.php';
		require'Php/Views/footer.html';
	}
/*---------------------------------------------------------------*/
	public function Usuario_Excel()
	{
		require'Php/Model/Usuario/Usuario_Excel.php';
	}
/*---------------------------------------------------------------*/
	public function Usuario_Word()
	{
		require'Php/Model/Usuario/Usuario_Word.php';
	}
/*---------------------------------------------------------------*/
	public function Usuario_TXT()
	{
		require'Php/Model/Usuario/Usuario_Txt.php';
	}
/*---------------------------------------------------------------*/
	public function Usuario_PDF()
	{
		require'Php/Views/Admin/Header.html';
		require'Php/Views/Admin/Index.php';
	}
/*---------------------------------------------------------------*/
	public function Control_Users()
	{
		$cliente = $this->model;
		$stmt= $cliente->read();
		require'Php/Views/Admin/Header.html';
		require'Php/Views/Admin/Control_Users.php';
		require'Php/Views/footer.html';
	}
/*---------------------------------------------------------------*/
	public function Read_Inser()
	{
		$cliente = $this->model;
		if (isset($_REQUEST['identificacionCliente'])) 
		{
			$cliente->setidentificacionCliente($_REQUEST['identificacionCliente']);
			$stmt= $cliente->consultadocumento($cliente);
			if ($stmt) 
			{
				require_once'views/header.html';
				require_once'views/administrador/editar.php';
				require_once'views/footer.html';
				//editar
			}
			else
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
						alert('Te registraste correctamente en el sistema, ahora puedes iniciar sesion.');
					</script>
				";
			}
		}
	}
/*---------------------------------------------------------------*/	
	public function delete() 
	{
		$cliente= $this->model;
		$cliente->setidentificacionCliente($_REQUEST['identificacionCliente']);
		$stmt= $cliente->delete($cliente);
		header("Refresh:0, URL=?controller=Admin&accion=Control_Users");
		echo"
			<script language='JavaScript'>
				alert('Registro eliminado correctamente.');
			</script>
		";
	}
}
?>