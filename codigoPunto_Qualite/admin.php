<?php
include_once('php-objects/conexion.inc.php');
include_once "php-objects/usuario.inc.php";
include_once "php-objects/repositorio.php";
$mode = false;
session_start();
error_reporting(0);

$sesion = $_SESSION['cliente'];
if ($sesion != null || $sesion != '') {
  $mode = true;
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
    <a class="navbar-brand" href="../index.php">Punto Qualité</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">

      <div class="col-7">
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
      <div class="col-5">
        <div class="float-right">
          <ul class="navbar-nav mr-auto">
            <?php
            if ($mode) {
                if($sesion->getCtipado()=='a'){
                    echo '<li class="nav-item ">
                          <a class="nav-link" href="codigoPunto_Qualite/admin.php">admin</a>
                        </li>';
                  }
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


<script>
    window.sr = ScrollReveal();

    sr.reveal('.categoria-2', {
      duration: 2000,
      origin: 'left',
      distance: '300px'
    });
    sr.reveal('.imagen1-categoria1', {
      duration: 2000,
      origin: 'bottom',
      distance: '300px'
    });
    sr.reveal('.imagen2-categoria1', {
      duration: 2000,
      origin: 'bottom',
      distance: '300px'
    });
  </script>
  <!-- Bootstrap 4 scripts -->
  <script src="../codigoPunto_Qualite/js/popup.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>