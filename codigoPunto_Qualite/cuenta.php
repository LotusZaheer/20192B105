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
        <blockquote class="blockquote text-right">
   <br>
    <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Medicina</strong>
          <h3 class="mb-0">¿Piel humana para pruebas de productos cosméticos? </h3>
          <div class="mb-1 text-muted">13 Noviembre</div>
          <p class="card-text mb-auto">Una piel humana artificial fue creada por unos científicos de Singapur. Este es un esfuerzo para disminuir pruebas cosméticas en animales. Esta piel está hecha por células de la piel de donantes y colágeno, y tiene las mismas propiedades químicas y biológicas que la piel humana. El doctor Elmer Huerta, experto en salud pública, explica cómo fue creada esta piel.</p>
          <a href="https://cnnespanol.cnn.com/video/salud-doctor-huerta-piel-humana-artificial-prueba-productos-cosmeticos-encuentro-cnne-entrevista/" class="stretched-link">Seguir leyendo</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img width="400" height="100%" src="https://misabogados.com.mx/blog/wp-content/uploads/2016/02/Negligencia-m%C3%A9dica.jpg" >

        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Medicinas y Vacunas</strong>
          <h3 class="mb-0">Cómo cambiarán nuestra salud el clima, los antivacunas y las bacterias resistentes</h3>
          <div class="mb-1 text-muted">14 Noviembre</div>
          <p class="mb-auto">Tres científicos hablan del regreso de enfermedades, los antibióticos ineficaces y los desastres naturales que marcarán los problemas sanitarios del futuro. De hecho, ya está pasando</p>
          <a href="https://elpais.com/elpais/2019/10/31/planeta_futuro/1572551722_084098.html" class="stretched-link">Seguir leyendo</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img width="400" height="100%" src="https://ep01.epimg.net/elpais/imagenes/2019/10/31/planeta_futuro/1572551722_084098_1572553924_noticia_normal_recorte1.jpg" >
        </div>
      </div>
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