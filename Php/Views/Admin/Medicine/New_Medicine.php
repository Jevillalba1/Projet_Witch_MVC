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
            <li><a href="?controller=Admin&accion=Control_Customers"><span class="glyphicon glyphicon-wrench"></span> Gestionar Clientes</a></li>
            <li><a href="?controller=Admin&accion=Control_Medicine"><span class="glyphicon glyphicon-wrench"></span> Gestionar Medicamentos</a></li>
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
      <center><h1 class="Title">Ingresar nuevo Medicamento</h1></center>
    </div>
</div>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-danger">
      <div class="panel-heading">Inserción de nuevo medicamento
      </div>
      <div class="panel-body">
        <form method="post" action="?controller=Admin&accion=Read_Insert_Medicine">
          <div class="input-group col-md-12">
            <label for="nombreCliente">Nombre de medicamento: </label>
            <input type="text" name="nombreCliente" class="form-control" placeholder="Ingrese el nombre" required>
          </div>
          <br>
          <div class="input-group col-md-12">
            <label for="apellidoCliente">Via de consumo: </label>
            <input type="text" name="apellidoCliente" class="form-control" placeholder="Ingrese la via de consumo" required>
          </div>
          <br>
          <div class="input-group col-md-12">
            <label for="direccionCliente">Precio Unitario: </label>
            <input type="number" name="direccionCliente" class="form-control" placeholder="Ingfrese el precio por unidad" required>
          </div>
          <br>
          <div class="input-group col-md-12">
            <label for="telefonoCliente">Nombre de la imagen: </label>
            <input type="text" name="telefonoCliente" class="form-control" placeholder="Nombre del archivo con su respectiva extensión" required> 
          </div>
          <br>
          <div class="input-group col-md-12">
            <label for="correoCliente">Tipo de medicamento: </label>
            <select name="correoCliente" class="form-control" required>
              <option value="">Seleccione...</option>
              <option value="1">Analgésico</option>
              <option value="2">Antibiótico</option>
            </select>
          </div>
          <hr>
          <button class="btn btn-success btn-block">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>