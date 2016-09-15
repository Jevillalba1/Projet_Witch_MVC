<link rel="stylesheet" type="text/css" href="css/Style.css">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Img/banner.jpg" alt="Banner">
      </div>

      <div class="item">
        <img src="Img/banner_2.jpg" alt="Banner_2" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="Img/banner_3.jpg" alt="Flower_3" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

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
            <li><a href="#"><span class="glyphicon glyphicon-certificate"></span> Mucolíticos</a></li>
            <li><a href="?controller=Page&accion=Analgesicos"><span class="glyphicon glyphicon-certificate"></span> Analgésicos</a></li>
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
        <!--<li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?controller=Register"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
        <li><a href="?controller=Login"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
    $host="localhost";
    $usuario="root";
    $password="";
    $db="proyecto";

    $conexion = new mysqli($host,$usuario,$password,$db);
    $sql = "select * from medicamentos where Tipo='Analgesico' order by Id";
    $query=$conexion->query($sql);
    $tbHtml="";
    if($query->num_rows>0){
      echo "<center><table class='tabla'>
       <header>
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Medicamento</th>
            <th>Tipo</th>
            <th>Via de Consumo</th>
            <th>Precio unitario</th>
   
            </tr>
      </header>";
        while($res=$query->fetch_array())
        {
            $a=$res['Ubicacion'];   
            $b="<img src='$a' width='120' height='120' alt='' border='0'";
            $c= $b;
            echo '
                <tr>
                    <td>'.$res['Id'].'</td>
                    <td>'.$res['Nombre'].'</td>
                    <td>'.$c.'</td>
                    <td>'.$res['Tipo'].'</td>
                    <td>'.$res['Via_Consumo'].'</td>
                    <td>'.$res['Precio_Unitario'].'</td>
                </tr>
            ';
        }
        $tbHtml.= "</table> </center>";
    }
    else
    {
        echo "No hay resultados";
    }
?>