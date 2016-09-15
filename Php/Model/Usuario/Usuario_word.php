<?php
session_start();
if ($_SESSION['Admin']=="" || $_SESSION['Admin']==null ) 
{
	header("location:?controller=index");
}
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte_Usuarios_Droguería_PPs.doc");
		#$host="localhost";
		#$Usuario="root";
		#$password="";
		#$db="drogueria_PPs"
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("drogueria_PPs",$conexion);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Usuarios Droguer%iacuten PPs</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="8" bgcolor="skyblue"><CENTER><strong>Reporte usuarios Droguería PPs</strong></CENTER></td>
  </tr>
  <tr bgcolor="#454568">
    <td><strong><font color="white">Identificación</strong></td>
    <td><strong><font color="white">Nombre</strong></td>
    <td><strong><font color="white">Apellido</strong></td>
    <td><strong><font color="white">Direccion</strong></td>
    <td><strong><font color="white">Telefono</strong></td>
    <td><strong><font color="white">Correo</strong></td>
    <td><strong><font color="white">Nombre de Usuario</strong></td>
    <td><strong><font color="white">Contraseña</strong></td>
  </tr>
  
<?PHP
$sql=mysql_query("SELECT * FROM cliente ORDER BY idCliente");
while($res=mysql_fetch_array($sql)){		

	$Id=$res["identificacionCliente"];
	$Nombre=$res["nombreCliente"];
	$Apellido=$res["apellidoCliente"];
	$Direccion=$res["direccionCliente"];
	$Telefono=$res["telefonoCliente"];
	$Correo=$res["correoCliente"];
	$Id_Usuario=$res["nombre_Usuario"];
	$Contrasena=$res["passwordCliente"];					

?>  
 <tr>
	<td><?php echo $Id; ?></td>
	<td><?php echo $Nombre; ?></td>
	<td><?php echo $Apellido; ?></td>
	<td><?php echo $Direccion; ?></td>
	<td><?php echo $Telefono; ?></td>
	<td><?php echo $Correo; ?></td>
	<td><?php echo $Id_Usuario; ?></td>
	<td><?php echo $Contrasena; ?></td>                     
 </tr> 
  <?php
}
 ?>
</table>
</body>
</html>