<?php 
  session_start();
  if ($_SESSION['Admin']=="" || $_SESSION['Admin']==null ) 
  {
    header("location:index.php");
  }
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="location:?controller=admin">Drogueria PPs</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="location:?controller=Admin"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-plus-sign"></span> Medicamentos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="C:\wamp\www\Proyecto\Pagina\Pagina"><span class="glyphicon glyphicon-certificate"></span> Mucolíticos</a></li>
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
    <a href="?controller=Admin"> 
      <div class="col-sm-3">
        <IMG SRC="\DrogueriaPPs\Img\Logo.png" alt="Logo Droguería PPs" height="90px" width="200px" />
      </div>
    </a>
    <div class="col-sm-8">
      <h1>Droguería PPs Bienvenidos</h1>
      <h3>Todo lo que buscas en un solo lugar</h3>
    </div>
  </div>
</div>