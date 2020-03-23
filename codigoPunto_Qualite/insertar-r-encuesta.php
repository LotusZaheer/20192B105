<?php
    include_once "php-objects/repositorio.php";
    include_once "php-objects/conexion.inc.php";
    Conexion::abrir();
    $conexion = Conexion::obtener();
    $cedula = $_POST['cedula'];

    if(!isset($_POST['exp'])){
        $exp = "NULL";
    }else{
        $exp = $_POST['exp'];
    }
    
    if(!isset($_POST['tiempo'])){
        $tiempo = "NULL";
    }else{
        $tiempo = $_POST['tiempo'];
    }

    if(!isset($_POST['prof'])){
        $prof = "NULL";
    }else{
        $prof = $_POST['prof'];
    }
    
    if(!isset($_POST['expe'])){
        $expe = "NULL";
    }else{
        $expe = $_POST['expe'];
    }

    if(!isset($_POST['calidad'])){
        $calidad = "NULL";
    }else{
        $calidad = $_POST['calidad'];
    }   
    
    if(isset($conexion))
    {
        try{
            $sql = "update encuesta_sati set 
            experiencia = '$exp', entrega_tiempo='$tiempo',	
            profecionalismo='$prof',expe_compra='$expe',calidad = '$calidad'
            where cedula=$cedula";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            Conexion::cerrar();
            echo 1;

        }
        catch (Exception $ex) {
            print "ERROR" . $ex->getMessage();
            Conexion::cerrar();
            echo 0;
        }
    }


?>
