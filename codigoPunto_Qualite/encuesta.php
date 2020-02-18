<?php
include_once "php-objects/conexion.inc.php";
include_once("php-objects/repositorio.php");
include_once "php-objects/usuario.inc.php";
$emailused = false;
if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['password1'];
    $dir = $_POST['direccion'];
    $ciu = $_POST['ciudad'];


    Conexion::abrir();
    $real = repositorioFunciones::obtener_usuario_email(Conexion::obtener(), $email);
    if ($real == null) {
        $new = date('Y-m-d', strtotime($_POST['fecha_nacimiento']));
        $usuario = new usuario('', $nombre, $new, $email, $pass, $dir, $ciu);
        $newuser = repositorioFunciones::insertar_usuarios(Conexion::obtener(), $usuario);
        Conexion::cerrar();
        header('Location: ../index.php');
    } else {
        $emailused = true;
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Bootstrap 4 -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lux1.css">
    <title>Registro</title>
    
    <!-- Scrool reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>



<body onload="<?php if ($emailused == true) {
                    echo ("emailAE()");
                } ?> ">


    <!--NAVBAR-->

    <nav style="z-index:40!important;" class=" navbar navbar-expand-lg navbar-dark bg-primary fixed-top">

        <a class="navbar-brand" href="../index.php">Punto Qualité</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">


            <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown show ">
                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
                <div class="dropdown-menu" style="">
                    <a class="dropdown-item" href="#">Bebé y maternidad</a>
                    <a class="dropdown-item" href="#">Fitness</a>
                    <a class="dropdown-item" href="#">Cuidado personal</a>
              </li>
                <li class="nav-item ">
                    <a class="nav-link" href="our.php">Nosotros</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="our.php">Contactanos</a>
                </li>
            </ul>






        </div>
    </nav>
    <!--FIN NAVBAR-->
    <br />
  <div class="container mt-5">
    <section class="row">
      <div class="col-md-12 mt-5">
        <h1 class="text-center">Encuesta sobre el uso de internet.</h1>
      </div>
    </section>
    <hr><br />
    <section class="row">
      <section class="col-md-12">
        <h3>Datos generales</h3>
        <p></p>
      </section>
    </section>
    <section class="row">
      <section class="col-md-12">
        <section class="row">
          <div class="col-md-4">
            <label for="tipoAtencion">Sexo:</label>
            <select class="form-control" id="tipoAtencion">
            <option value="ce">Masculino</option>
            <option value="farm">Femenino</option>
          </select>
          </div>
        </section>
        <section class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label for="nombreCompleto">Nombre Compelto: *</label>
              <input type="text" class="form-control" id="nombreCompleto" maxlength="128" placeholder="Nombre Compelto" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form_group">
              <label for="edadEncuestado">Edad: *</label>
              <input type="number" class="form-control" id="edadEncuestado" placeholder="Edad" maxlength="3" required/>
            </div>
          </div>
        </section>
        <section class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="idIdentificacion">Identificación: *</label>
              <input type="number" id="idIdentificacion" class="form-control" placeholder="Numero de Identificación" maxlength="15" required/>
            </div>
          </div>
          <div class="col-md-4">
            <label for="telefono">Telefono: *</label>
            <input type="text" class="form-control" id="telefono" placeholder="Numero Telefonico" maxlength="12" required/>
          </div>
        </section>
      </section>
    </section>
    <hr />

    <!--  Servicios  -->
    <section class="row">
      <div class="col-md-12">
        <h3>Celular.</h3>
        <p></p>
      </div>
    </section>
    <!--  PREGUNTA 1  -->
    <section class="row">
      <div class="col-md-6">
        <p>1- ¿Usted tiene celular?</p>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="pregunta1a" value="SI"> Si
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="preguntab" value="NO"> No
      </label>
      </div>
      <div class="col-md-2">
        <label class="radio">
        <input type="radio" name="pregunta1" id="preguntac" value="NA"> N/A
      </label>
      </div>
    </section>
    <!--  PREGUNTA 2  -->
    <section class="row">
      <div class="col-md-6">
        <p>2- Marque las funciones con las que cuenta </p>
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Cámara</label><br>

<input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Bluetooth</label>
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> WiFi</label><br>

<input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Grabadora</label>
      </label>
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> NFC </label><br>
        <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Cable tipo C</label>
      </label>
      </div>
    </section>
    <!--  PREGUNTA 13  -->
    <section class="row">
      <div class="col-md-12">
        <section class="row">
          <div class="col-md-8">
            <p>3- ¿Hace cuanto tiene el celular?</p>
          </div>
          <div class="col-md-4">
            <select class="form-control" id="pregunta13">
            <option value="5">Menos de 6 meses</option>
            <option value="4">Más de 6 meses y menos de un años</option>
            <option value="3">Más de un año</option>
            <option value="2">Más de 2 años</option>
            <option value="0">No Responde</option>
             </select>
          </div>
        </section>
      </div>
    </section><br />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/security.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>

</html>