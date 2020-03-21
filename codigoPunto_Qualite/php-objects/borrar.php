<?php
 include_once "repositorio.php";
 Conexion::abrir();
 $db = Conexion::obtener();
 repositorioFunciones::delete_database($db);
 Conexion::cerrar();
 header("Location: ../../index.php");
?>