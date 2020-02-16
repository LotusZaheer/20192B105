<?php
include_once('php-objects/conexion.inc.php');
include_once "php-objects/usuario.inc.php";
include_once "php-objects/repositorio.php";
$mode = false;
session_start();
$cambio=false;

$sesion = $_SESSION['cliente'];
if ($sesion != null || $sesion != '') {
  $mode = true;
}

if($_POST){
Conexion::abrir();

  if($_POST['direccion']!="" || $_POST['direccion']!=null){
    $sesion->setDireccion($_POST['direccion']);
    $dir=repositorioFunciones::update_direccion(Conexion::obtener(),$sesion->getId_cliente(),$_POST['direccion']);
    $cambio=true;
  }
  
  if($_POST['ciudad']!="" || $_POST['ciudad']!=null){
    $sesion->setFk_id_ciudad($_POST['ciudad']);
    $ciu=repositorioFunciones::update_ciudad(Conexion::obtener(),$sesion->getId_cliente(),$_POST['ciudad']);
    $cambio=true;
  }
  
  if($_POST['contra']!="" || $_POST['contra']!=null){
    $sesion->setContrasena($_POST['contra']);
    $con=repositorioFunciones::update_contrasena(Conexion::obtener(),$sesion->getId_cliente(),$_POST['contra']);
    $cambio=true;
  }

Conexion::cerrar();

if($cambio==true){
  header('Location: cuenta.php');
}
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="css/lux1.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inicio</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <a class="navbar-brand" href="index.php">Narcos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">

      <div class="col-8">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="shop.php">Productos</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="our.php">Nosotros</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#contacto">Contactanos</a>
          </li>
        </ul>
      </div>
      <div class="col-4">
        <div class="float-right">
          <ul class="navbar-nav mr-auto">
            <?php
            if ($mode) {
              echo ('
              <li class="nav-item ">
                  <a class="nav-link" href="cuenta.php">Cuenta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cerrar.php">Cerrar Sesion</a>
                </li>
              ');
            } else {

              echo ('
          <li class="nav-item ">
              <a class="nav-link" href="login.php">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Registrate</a>
            </li>
          ');
            }
            ?>
          </ul>
        </div>
      </div>

    </div>
  </nav>

  <body>
    <div id="wrapper">
      <div id="maincontent" style="padding-top:89.25px">
        <div id="profile" class="text-center">
          <div id="supercontent">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text>
            </svg>
            <h4 style="padding-top:5px"><?php echo ($sesion->getNombre()) ?></h4>
            <h5 style="padding-top:5px; color:#13284a"><?php echo ($sesion->getEmail()) ?></h5>
          </div>
        </div>
        
          <br>

          <div id="ajustes">
            <form method="POST" action="<?php echo ($_SERVER['PHP_SELF']) ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Nueva direccion</label>
                <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nueva direccion" name="direccion">
                
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Nueva ciudad</label>
              <select class="form-control" id="exampleSelect1" name="ciudad">
                  <option value=""></option>
                  <option value="1">Bucaramanga</option>
                  <option value="2">Giron</option>
                  <option value="3">Floridablanca</option>
                  <option value="4">Duitama</option>
                  <option value="5">Yopal</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nueva contraseña</label>
                <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="contra">

              </div>
              <button type="submit" class="btn btn-primary" id="topper" name="commit">Confirmar</button>
            </form>
          </div>
      </div>
      <div id="leftmenu" class="bg-light">
        <div style="padding-top:89.25px">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="ajustes.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Ajustes <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pedidos.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                  <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                  <polyline points="13 2 13 9 20 9"></polyline>
                </svg>
                Pedidos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                  <circle cx="9" cy="21" r="1"></circle>
                  <circle cx="20" cy="21" r="1"></circle>
                  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                Compre
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cerrar.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                Cerrar sesion
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>