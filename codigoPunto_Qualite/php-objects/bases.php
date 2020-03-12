<?php
include_once "repositorio.php";

repositorioFunciones::crearbase();
Conexion::abrir();
repositorioFunciones::creartabla(Conexion::obtener());
repositorioFunciones::insertar(Conexion::obtener());
Conexion::cerrar();
header('Location: ../../index.php');
?>