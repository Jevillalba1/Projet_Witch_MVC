<?php

?>
<img src="Img/banner.jpg" height="80px" width=100%>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?controller=Index">Droguería PPs</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="?Controller=Index"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-plus-sign"></span> Medicamentos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href=""><link href="C:\wamp\www\Proyecto\Pagina\Pagina"><span class="glyphicon glyphicon-certificate"></span> Mucolíticos</link></a></li>
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
<div class="row">
  <div class="col-md-3 col-md-offset-4">
    <div class="panel panel-primary">
      <div class="panel-heading">Iniciar Sesión
      </div>
      <div class="panel-body">
        <form method="post" action="?controller=Login&accion=Validate">
          <div class="input-group col-xs-12">
            <label for="nombre_Usuario">Nombre de usuario: </label>
            <input type="text" name="nombre_Usuario" class="form-control" placeholder="Introduce tu nombre de Usuario o correo" required>
          </div>
          <br>
          <div class="input-group col-xs-12">
            <label for="passwordCliente">Contraseña: </label>
            <input type="password" name="passwordCliente" class="form-control" placeholder="●●●●●●●●●●●●" required>
          </div>
          <hr>
          <button class="btn btn-info btn-block">Iniciar Sesión</button>
          <span class="help-block">¿No tienes cuenta? Registrate</span>
          <a href="?controller=Register" class="btn btn-info btn-block">Registrate</a>
        </form>
      </div>
    </div>
  </div>
</div>