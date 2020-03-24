<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/20192B105/codigoPunto_Qualite/php-objects/conexion.inc.php';
include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/php-objects/usuario.inc.php";
include_once  $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/php-objects/repositorio.php";
$mode = false;
if (!isset($var)) {
  session_start();
}

error_reporting(0);
if ($_POST) {
  Conexion::abrir();
  $email = $_POST['email'];
  $pass = $_POST['password'];
  //UBICAMOS LOS PUNTOS DE PARTIDA Y SALIDA EN EL TEXTO usuarios.txt
  /*  foreach ($file as $line) {
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
*/
  $usuario = repositorioFunciones::obtener_usuario_email(Conexion::obtener(), $email);
  if ($usuario == null) {
    header("Location: /20192B105/codigoPunto_Qualite/registro.php");
  }
  if (password_verify($pass, $usuario->getContrasena())) {
    session_start();
    $_SESSION['cliente'] = $usuario;
    $_SESSION['tiempo'] = time();
    header("Location: /20192B105/index.php");
  } else {
    header("Location: /20192B105/index.php");
  }

  Conexion::cerrar();
}
