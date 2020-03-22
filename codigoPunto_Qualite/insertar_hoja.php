<?php
    include_once "php-objects/repositorio.php";
    include_once "php-objects/conexion.inc.php";
    Conexion::abrir();
    $db = Conexion::obtener();
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $celular=$_POST['celular'];
    $cargo=$_POST['cargo'];
    $organizacion=$_POST['organizacion'];
    $fechaInicio=$_POST['fechaInicio'];
    $fechaFin=$_POST['FechaFin'];
    $descrip=$_POST['descrip'];
    $universidad=$_POST['universidad'];
    $carrera=$_POST['carrera'];
    $promedio=$_POST['promedio'];
    $sql = "INSERT into hoja_de_vida(name, last_name, email,tel,cargo,last_org,year_start, year_stop, description,univ,carrer,prom)
    values ('$nombre','$apellido','$email','$celular','$cargo','$organizacion',$fechaInicio,$fechaFin,'$descrip','$universidad','$carrera',$promedio)";
    echo mysqli_query($db,$sql);
    Conexion::cerrar();
?>