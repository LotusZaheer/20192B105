<?php
include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/php-objects/usuario.inc.php";
session_start();
$var = true;
$sesion = $_SESSION['cliente'];
if(($sesion==null) || ($sesion->getCtipado() != 'a'))
{
  header("Location: /20192B105/index.php");
}
else{
    include_once "repositorio.php";
    Conexion::abrir();
    $db = Conexion::obtener();
    repositorioFunciones::delete_database($db);
    Conexion::cerrar();
    header("Location: ../../index.php");
}

?>