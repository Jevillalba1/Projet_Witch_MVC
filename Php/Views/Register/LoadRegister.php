<?php

?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?controller=Index">Drogueria PPs</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="?controller=Index"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-plus-sign"></span> Medicamentos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Mucolíticos</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Analgésicos</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Antibióticos</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Anticépticos</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Laxantes</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Antihistamínico</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Broncodilatadores</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-heart"></span> Enfermedades <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><span class="glyphicon glyphicon-search"></span> Consultar</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
<center><h3>Resgistrarse</h3></center>
<br>
<br>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-danger">
      <div class="panel-heading">Registrate, por favor llena todos los campos
      </div>
      <div class="panel-body">
        <form method="post" action="?controller=Register&accion=Create">
          <div class="input-group col-xs-12">
            <label for="identificacionCliente">N° de identificación:</label>
            <input type="number" name="identificacionCliente" class="form-control" placeholder="Número de documento" required> 
          </div>
          <br>
          <div class="input-group col-xs-12">
            <label for="nombreCliente">Nombre: </label>
            <input type="text" name="nombreCliente" class="form-control" placeholder="Ingrese su nombre" required>
          </div>
          <br>
          <div class="input-group col-xs-12">
            <label for="apellidoCliente">Apellido: </label>
            <input type="text" name="apellidoCliente" class="form-control" placeholder="Ingrese sus apellidos" required>
          </div>
          <br>
          <div class="input-group col-xs-12">
            <label for="direccionCliente">Dirección: </label>
            <input type="text" name="direccionCliente" class="form-control" placeholder="Direccion de residencia" required>
          </div>
          <br>
          <div class="input-group col-xs-12">
            <label for="telefonoCliente">Teléfono: </label>
            <input type="number" name="telefonoCliente" class="form-control" placeholder="Teléfono" required> 
          </div>
          <br>
          <div class="input-group col-xs-12">
            <label for="correoCliente">Correo electrónico: </label>
            <input type="email" name="correoCliente" class="form-control" placeholder="example@mail.com" required>
          </div>
          <br>
          <div class="input-group col-xs-12">
            <label for="nombre_Usuario">Nombre de usuario: </label>
            <input type="text" name="nombre_Usuario" class="form-control" placeholder="Nombre de usuario" required>
          </div>
          <br>
          <div class="input-group col-xs-12">
            <label for="passwordCliente">Contraseña: </label>
            <input type="password" name="passwordCliente" class="form-control" placeholder="Contraseña" required>
          </div>
          <hr>
          <button class="btn btn-success btn-block">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
</div>

