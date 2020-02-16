<?php
include_once("config.inc.php");

class Conexion{
    private static $conexion;

    public static function abrir(){
        if(!isset(self::$conexion)){
            try{
                self::$conexion=new PDO('mysql:host='.NOMBRE_SERVER.'; dbname='.NOMBRE_BD, NOMBRE_USER, PASSWORD);
                self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conexion -> exec("SET CHARACTER SET utf8");

            } catch (exception $ex){
                print "ERROR: ".$ex->getMessage()."<br>";
                die();
            }
        }
    }

    public static function cerrar(){
        if(isset(self::$conexion)){
            self::$conexion=null;
        }
    }

    public static function obtener(){
        return self::$conexion;
    }
}
?>

