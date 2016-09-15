<?php 
  session_start();
  if ($_SESSION['Admin']=="" || $_SESSION['Admin']==null ) 
  {
    header("location:index.php");
  }
?>
<link rel="stylesheet" type="text/css" href="css/Style_PDF.css">
<div id="content">
<h1>Usuarios Drogueria PPs</h1>
<hr/>

<?php
	include_once("Php/Model/Usuario/conexion.php");

	$con = new DB;
	$pacientes = $con->conectar();
	$strConsulta = "SELECT * from cliente";
	$pacientes = mysql_query($strConsulta);
	$numfilas = mysql_num_rows($pacientes);
	
	echo '<table cellpadding="0" cellspacing="0" width="100%">';
	echo '<thead><tr><td>Identificación</td><td>Nombres</td><td>Apellidos</td><td>Dirección</td><td>Teléfono</td><td>Correo</td></tr></thead>';
	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$numlista = $i + 1;
		#echo '<tr><td>'.$numlista.'</td>';
		echo '<td>'.$fila['identificacionCliente'].'</td>';
        echo '<td>'.$fila['nombreCliente'].'</td>';
        echo '<td>'.$fila['apellidoCliente'].'</td>';
        echo '<td>'.$fila['direccionCliente'].'</td>';
        echo '<td>'.$fila['telefonoCliente'].'</td>';
        echo '<td>'.$fila['correoCliente'].'</td>';
		echo '<td><a href="Php/Model/Usuario/Reporte.php?id='.$fila['identificacionCliente'].'">Mas Información</a></td></tr>';
	}
	echo "</table>";
?>			

</div>
</body>
</html>