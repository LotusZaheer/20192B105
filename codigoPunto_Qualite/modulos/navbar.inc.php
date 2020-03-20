<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/PFW/codigoPunto_Qualite/php-objects/conexion.inc.php';
include_once $_SERVER['DOCUMENT_ROOT']."/PFW/codigoPunto_Qualite/php-objects/usuario.inc.php";
include_once  $_SERVER['DOCUMENT_ROOT']."/PFW/codigoPunto_Qualite/php-objects/repositorio.php";
$mode = false;
session_start();
error_reporting(0);

//FREDY DE AQUI HASTA DONDE LE DIGA HACE UN MODULO QUE SE INCORPORE EN LAS DEMAS PAGINAS

$sesion = $_SESSION['cliente'];
if ($sesion != null || $sesion != '') {
  $mode = true;
  if ((time() - $_SESSION['tiempo']) > 300) // 300 = 5 * 60  
  {
    header("location:codigoPunto_Qualite/cerrar.php");
  } else {
    $_SESSION['tiempo'] = time();
  }
}

?>
<?php


if ($_POST) {
  Conexion::abrir();
  $file = file('codigoPunto_Qualite/usuarios.txt');
  $email = $_POST['email'];
  $pass = $_POST['password'];
  //UBICAMOS LOS PUNTOS DE PARTIDA Y SALIDA EN EL TEXTO usuarios.txt
  foreach ($file as $line) {
    $strarray = str_split($line);
    foreach ($strarray as $key => $letter) {
      $correoarray = null;
      if ($letter == "|") {
        $empieza = $key;
      }
      if ($letter == "/") {
        $termina = $key;
        break;
      }
    }
    for ($i = 0; $i < $empieza - 1; $i++) {
      $correoarray[$i] = $strarray[$i];
    }
    $correo = implode("", $correoarray);

    if ($correo == $email) {
      for ($i = $empieza + 2; $i < $termina - 1; $i++) {
        $contrasenia[$i] = $strarray[$i];
      }
      $contra = implode("", $contrasenia);
    }
  }

  $usuario = repositorioFunciones::obtener_usuario_email(Conexion::obtener(), $email);

  if (password_verify($pass, $usuario->getContrasena()) && $contra == $pass) {
    session_start();
    $_SESSION['cliente'] = $usuario;
    $_SESSION['tiempo'] = time();
    header("Location: index.php");
  }

  Conexion::cerrar();
}

?>


<!DOCTYPE html>

<html lang="es">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="/PFW/codigoPunto_Qualite/css/estilos.css">
  <link rel="stylesheet" href="/PFW/codigoPunto_Qualite/css/lux1.css">
  <!-- Scrool reveal -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- NO TOCAR -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>
  <!-- Navbar -->
  <nav style="z-index:40!important;" class=" navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="/PFW/index.php">Punto Qualité</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown show ">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Bebé y maternidad</a>
            <a class="dropdown-item" href="#">Fitness</a>
            <a class="dropdown-item" href="#">Cuidado personal</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/PFW/codigoPunto_Qualite/our.php">Nosotros</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#contacto">Contactanos</a>
        </li>

        <li class="nav-item dropdown">



          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Formularios</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/PFW/codigoPunto_Qualite/encuesta.php">Encuesta</a>
            <a class="dropdown-item" href="/PFW/codigoPunto_Qualite/hoja_de_vida.php">Hoja de Vida</a>

        </li>
      </ul>



      <ul class="navbar-nav">
        <?php
        if ($mode) {
          if($sesion->getCtipado()=='a'){
            echo '<li class="nav-item ">
                  <a class="nav-link" href="/PFW/codigoPunto_Qualite/admin.php">admin</a>
                </li>';
          }
          echo ('
              <li class="nav-item ">
                  <a class="nav-link" href="/PFW/codigoPunto_Qualite/cuenta.php">Cuenta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/PFW/codigoPunto_Qualite/cerrar.php">Cerrar Sesion</a>
                </li>
              ');
        } else {

          echo ('
          <li class="nav-item ">
			<a class="nav-link" id="btn-abrir-popup" class="btn-abrir-popup nav-link" href="#" >Iniciar Sesion</a>
              </li>
		<div class="overlay" id="overlay">
			
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
				<form class="form-signin" method="POST" action="' . $_SERVER['PHP-SELF'] . '">
					<div class="contenedor-inputs">
          <input  name="email" id="password-field1" type="password"  class="form-control">
          <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password1"></span>
						<input id="password-field2" type="password" class="form-control" name="password">
              <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password2"></span>
          </div>
          <a href="/PFW/codigoPunto_Qualite/forgot.php">¿Olvidaste tu contraseña?</a>
          
					<button class="btn btn-primary btn-block" type="submit" style="margin-top: 10px">Entrar</button>
				</form>
			</div>
		</div>

            
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/PFW/codigoPunto_Qualite/registro.php">Registrate</a>
            </li>
          ');
        }
        ?>
      </ul>


    </div>
  </nav>

  <!-- Fin navbar -->

  <!--FREDY HASTA AQUI HACE EL MODULO LLAMADO SESIONNVABAR-->