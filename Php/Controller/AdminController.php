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
	public function Control_Customers()
	{
		$cliente = $this->model;
		$stmt= $cliente->read();
		require'Php/Views/Admin/Header.html';
		require'Php/Views/Admin/Client/Control_Customers.php';
		require'Php/Views/footer.html';
	}
/*---------------------------------------------------------------*/
	public function New_Customer()
	{
		require'Php/Views/Admin/Header.html';
		require'Php/Views/Admin/Client/New_Customer.php';
		require'Php/Views/footer.html';
	}
/*---------------------------------------------------------------*/
	public function Control_Medicine()
	{
		$cliente = $this->model;
		$stmt= $cliente->read_medicine();
		require'Php/Views/Admin/Header.html';
		require'Php/Views/Admin/Medicine/Control_Medicine.php';
		require'Php/Views/footer.html';
	}
/*---------------------------------------------------------------*/
	public function New_Medicine()
	{
		require'Php/Views/Admin/Header.html';
		require'Php/Views/Admin/Medicine/New_Medicine.php';
		require'Php/Views/footer.html';
	}
/*---------------------------------------------------------------*/
	public function Read_Insert()
	{
		$cliente = $this->model;
		if (isset($_REQUEST['identificacionCliente'])) 
		{
			$cliente->setidentificacionCliente($_REQUEST['identificacionCliente']);
			$stmt= $cliente->SelectDocument($cliente);
			if ($stmt) 
			{
				require'Php/Views/Admin/Header.html';
				require'Php/Views/Admin/Client/Edit_Customers.php';
				require'Php/Views/footer.html';
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
				header("Refresh:0, URL=?controller=Admin&accion=Control_Customers");
				echo"
					<script language='JavaScript'>
						alert('Registro ingresado correctamente.');
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
		header("Refresh:0, URL=?controller=Admin&accion=Control_Customers");
		echo"
			<script language='JavaScript'>
				alert('Registro eliminado correctamente.');
			</script>
		";
	}
/*---------------------------------------------------------------*/	
	public function edit()
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
		$stmt= $cliente->edit_customer();
		if ($stmt==true) 
		{
			header("Refresh:0, URL=?controller=Admin&accion=Control_Customers");
			echo"
				<script language='JavaScript'>
					alert('Se actualizo el registro correctamente.');
				</script>
			";
		}
	}
/*---------------------------------------------------------------*/	
	public function delete_medicine() 
	{
		$medicine= $this->model;
		$medicine->setidentificacionCliente($_REQUEST['codMedicamento']);
		$stmt= $medicine->delete_medicine($medicine);
		header("Refresh:0, URL=?controller=Admin&accion=Control_Medicine");
		echo"
			<script language='JavaScript'>
				alert('Registro eliminado correctamente.');
			</script>
		";
	}
/*---------------------------------------------------------------*/
	public function Read_Insert_Medicine()
	{
		$medicine = $this->model;
		if (isset($_REQUEST['codMedicamento'])) 
		{
			$medicine->setidentificacionCliente($_REQUEST['codMedicamento']);
			$stmt= $medicine->SelectMedicine($medicine);
			if ($stmt) 
			{
				require'Php/Views/Admin/Header.html';
				require'Php/Views/Admin/Medicine/Edit_Medicine.php';
				require'Php/Views/footer.html';
			}
			else
			{
				$medicine = $this->model;
				$medicine->setnombreCliente($_REQUEST['nombreCliente']);
				$medicine->setapellidoCliente($_REQUEST['apellidoCliente']);
				$medicine->setdireccionCliente($_REQUEST['direccionCliente']);
				$medicine->settelefonoCliente($_REQUEST['telefonoCliente']);
				$medicine->setcorreoCliente($_REQUEST['correoCliente']);
				$stmt= $medicine->insert_medicine($medicine);
				if ($stmt==true)
				{
					header("Refresh:0, URL=?controller=Admin&accion=Control_Medicine");
					echo"
						<script language='JavaScript'>
						alert('Registro ingresado correctamente.');
						</script>
					";	
				}
				else
				{
					header("Refresh:0, URL=?controller=Admin&accion=Control_Medicine");
					echo"
						<script language='JavaScript'>
						alert('Lo sentimos ocurrio un error al ingresar el registro, intente otra vez');
						</script>
					";	
				}
			}
		}
	}
}
?>