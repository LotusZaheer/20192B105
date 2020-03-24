<?php
include_once "php-objects/repositorio.php";
include_once "php-objects/conexion.inc.php";
Conexion::abrir();
$conexion = Conexion::obtener();
$cedula = $_POST['cedula'];

if (isset($conexion)) {
    try {
        $sql = "insert into encuesta_sati(cedula)            
            values ($cedula)";
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();
        Conexion::cerrar();
        echo 1;
    } catch (Exception $ex) {
        print "ERROR" . $ex->getMessage();
        Conexion::cerrar();
        echo 0;
    }
}
