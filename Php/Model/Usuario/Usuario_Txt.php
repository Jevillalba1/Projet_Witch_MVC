 <?php
	session_start();
  	if ($_SESSION['Admin']=="" || $_SESSION['Admin']==null ) 
  	{
    	header("location:?controller=index");
  	}
	$file=fopen("Reporte_Usuarios_Droguería_PPs.txt","a");
		$host="localhost";
		$usuario="root";
		$password="";
		$db="drogueria_pps";
		$conexion= new mysqli($host,$usuario,$password,$db);
		$sql="SELECT * FROM cliente ORDER BY idCliente";
		$query=$conexion->query($sql);
		header("Content-Disposition: inline; filename=Reporte_Usuarios_Droguería_PPs.txt");
		header("Content-type: application/txt");
		echo "------------------------------------REPORTE USUARIOS DROGUERÍA PPS--------------------------------------";
		echo PHP_EOL;
		echo PHP_EOL;
		while($res=$query->fetch_array())
		{
			$Id=$res["identificacionCliente"];
			$Nombre=$res["nombreCliente"];
			$Apellido=$res["apellidoCliente"];
			$Direccion=$res["direccionCliente"];
			$Telefono=$res["telefonoCliente"];
			$Correo=$res["correoCliente"];
			$Id_Usuario=$res["nombre_Usuario"];
			$Contrasena=$res["passwordCliente"];
	  		
		 	
		 	echo "|| ".$Id." || ".$Nombre." || ".$Apellido. " || ".$Telefono." || ".$Correo." || ".$Id_Usuario." || ".$Contrasena." ||";
		 	echo PHP_EOL;
		 	echo "---------------------------------------------------------------------------------------------------------------------------------";
		 	echo PHP_EOL;
 		}
  	fclose($file);
?>