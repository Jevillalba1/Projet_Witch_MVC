<?php 
  session_start();
  if ($_SESSION['Admin']=="" || $_SESSION['Admin']==null ) 
  {
    header("location:index.php");
  }

?>
<link rel="stylesheet" type="text/css" href="css/Style.css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?controller=admin">Drogueria PPs</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="?controller=Admin"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-plus-sign"></span> Control de la página <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?controller=Admin&accion=Control_Users"><span class="glyphicon glyphicon-certificate"></span> Gestionar Clientes</a></li>
            <li><a href="/Proyecto/Pagina/Pagina/Analgesicos.php"><span class="glyphicon glyphicon-certificate"></span> Analgésicos</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Antibióticos</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Anticépticos</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Laxantes</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Antihistamínico</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Broncodilatadores</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-pencil"></span> Reportes <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>
            <li class="divider"></li>
            <li><a href="?controller=Admin&accion=Usuario_Excel"><span class="glyphicon glyphicon-download-alt"></span> Reporte Excel</a></li>
            <li><a href="?controller=Admin&accion=Usuario_Word"><span class="glyphicon glyphicon-download-alt"></span> Reporte Word</a></li>
            <li><a href="?controller=Admin&accion=Usuario_Txt"><span class="glyphicon glyphicon-download-alt"></span> Reporte Txt</a></li>
            <li><a href="?controller=Admin&accion=Usuario_PDF"><span class="glyphicon glyphicon-list-alt"></span> Reporte PDF</a></li>
          </ul>
        </li>
        <!--<li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['Admin'] ?></a></li>
        <li><a href="?controller=Login&accion=Lugout"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron text-center">
  <div class="row">
      <center><h1 class="Title">Gestión de clientes</h1></center>
    </div>
</div>

<div class="col-md-11 col-md-offset-1">
  <div class="table-responsive">
    <table class="tabla">
    <header>
      <tr>
        <th><center>Identificación</center> </th>
        <th><center>Nombres</center> </th>
        <th><center>Apellidos</center> </th>
        <th><center>Dirección</center> </th>
        <th><center>Teléfono</center> </th>
        <th><center>Correo</center> </th>
        <th></th>
        <th>
          <form method="post" action="?controller=admin&accion=New_Customer">
            <input type="hidden" name="documento" value='.$key->documento.'>
            <button class="btn btn-success"> <span class="glyphicon glyphicon-plus-sign"></span> Nuevo</button>
          </form>
        </th>
      </tr>
    </header>
      <tr>
        <?php foreach ($stmt as $key) {
          echo 

          ' <tr>
            <td>'.$key->identificacionCliente.'</td>
            <td>'.$key->nombreCliente.'</td>
            <td>'.$key->apellidoCliente.'</td>
            <td>'.$key->direccionCliente.'</td>
            <td>'.$key->telefonoCliente.'</td>
            <td>'.$key->correoCliente.'</td>
            <td>
            <form method="post" action="?controller=Admin&accion=delete">
            <input type="hidden" name="identificacionCliente" value='.$key->identificacionCliente.'>
            <button class="btn btn-info">Eliminar</button>
            </td>
            <td>
            </form><form method="post" action="?controller=Admin&accion=Read_Insert">
            <input type="hidden" name="identificacionCliente" value='.$key->identificacionCliente.'>
            <button class="btn btn-info">Editar</button>
            </form></td>

            </tr>';
        } ?>
      </tr>
    </table>
  </div>
</div>