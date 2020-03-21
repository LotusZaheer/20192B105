<?php

// INCLUIR OBJETOS Y RUTAS A LA BASE DE DATOS
include_once "config.inc.php";
include_once "usuario.inc.php";
include_once "droga.inc.php";
include_once "ciudad.inc.php";
include_once "pedido.inc.php";
include_once "factura.inc.php";
include_once "conexion.inc.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// FUNCIONES QUE INTERACTUAN CON LA BASE DE DATOS


class repositorioFunciones
{

    //FUNCION PARA CREAR LA BASE DE DATOS
    public static function crearbase()
    {
        try {
            $conexion = new PDO('mysql:host=' . NOMBRE_SERVER . ';', NOMBRE_USER, PASSWORD);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");
        } catch (exception $ex) {
            print "ERROR: " . $ex->getMessage() . "<br>";
            die();
        }
        if (isset($conexion)) {
            try {

                $sql = "create database 20192B105;";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
    }
    public static function delete_database($conexion)
    {
        if (isset($conexion)) {
            try {

                $sql = "DROP DATABASE [IF EXISTS]  20192B105;";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
    }

    //INSERCION DE DATOS

    public static function insertar($conexion)
    {

        if (isset($conexion)) {
            try {

                $sql = 'use 20192B105;

                insert into ciudad
                Values
                (1,"Bucaramanga"),
                (2,"Giron"),
                (3,"Floridablanca"),
                (4,"Duitama"),
                (5,"Yopal");';
                $sentencia = $conexion->prepare($sql);

                $sentencia->execute();
            } catch (Exception $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
    }

    //FUNCION PARA OBTENER EL NUMERO DE USUARIOS

    public static function obtener_usuarios($conexion)
    {

        $usuarios = array();

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM cliente";

                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {

                        $usuarios[] = new usuario($fila['id_cliente'], $fila['nombre'], $fila['fecha_nacimiento'], $fila['email'], $fila['contrasena'], $fila['direccion'], $fila['fk_id_ciudad'], $fila['ctipado']);
                    }
                } else {
                    print "NO HAY DATOS";
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }

        return $usuarios;
    }

    //FUNCION PARA VER CIUDADES

    public static function obtener_ciudades($conexion)
    {

        $ciudades = array();

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM ciudad";

                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {

                        $ciudades[] = new ciudad($fila['id_ciudad'], $fila['nombre']);
                    }
                } else {
                    print "NO HAY DATOS";
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }

        return $ciudades;
    }

    //FUNCION PARA LOS PEDIDOS

    public static function obtener_pedidos($conexion)
    {

        $pedidos = array();

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM pedido";

                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {

                        $pedidos[] = new pedido($fila['id_pedido'], $fila['fk_id_factura'], $fila['fk_id_droga']);
                    }
                } else {
                    print "NO HAY DATOS";
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }

        return $pedidos;
    }

    //RETORNA LAS DROGAS

    public static function obtener_drogas($conexion)
    {

        $drogas = array();

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM droga";

                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {

                        $drogas[] = new droga($fila['id_droga'], $fila['nombre'], $fila['imagen'], $fila['valor']);
                    }
                } else {
                    print "NO HAY DATOS";
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }

        return $drogas;
    }

    //FUNCION PARA CAMBIAR CONTRSEÑA

    public static function olvidar_contra($email)
    {
        Conexion::abrir();
        $conexion = Conexion::obtener();
        $usuario = repositorioFunciones::obtener_usuario_email($conexion, $email);
        $contranew = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 15);
        $texto = "Sr/a " . $usuario->getNombre() . "<br>" . "Generamos una nueva contraseña para usted en caso de perdida. <br>" . "Contraseña: " . $contranew;
        //mail($usuario->getEmail(), "Cambio de contraseña", $texto);

        //ENVIAR EL CORREO
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'puntoQualite@gmail.com';                     // SMTP username
            $mail->Password   = 'puntoQualite2019';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('puntoQualite@gmail.com', 'Punto Qualite');
            $mail->addAddress($usuario->getEmail(), $usuario->getNombre());     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Cambio de contraseña';
            $mail->Body    = $texto;


            $mail->send();
            echo 'El mensaje se ha  enviado';
        } catch (Exception $e) {
            echo "Hubo un error al enviar: {$mail->ErrorInfo}";
        }

        repositorioFunciones::update_contrasena($conexion, $usuario->getId(), $contranew);


        Conexion::cerrar();
    }

    //FUNCION PARA INSERTAR USUARIOS

    public static function insertar_usuarios($conexion, $usuario)
    {
        $newuser = false;
        $archivo = fopen("../usuarios.txt", "a");
        if (isset($conexion)) {
            try {
                include_once "usuario.inc.php";
                //AGREGANDO USUARIOS AL DOCUMENTO usuarios.txt
                if ($usuario->getCtipado() == "a") {
                    $tipo = "administrador el cual puede ver que usuarios se encuentran registrados";
                } else {
                    $tipo = "cliente el cual solo puede comprar cosas de la pagina";
                }
                fwrite($archivo, $usuario->getEmail() . ' | ' . $usuario->getContrasena() . ' //Es una cuenta tipo ' . $tipo . "\n");
                fclose($archivo);
                $sql = "INSERT INTO cliente(nombre,fecha_nacimiento,email,contrasena,direccion,ctipado,fk_id_ciudad) VALUES(:nombre,:fecha_nacimiento,:email,:contrasena,:direccion,:ctipado,:fk_id_ciudad)";
                $sentencia = $conexion->prepare($sql);
                $sentencia->BindParam(':nombre', $usuario->getNombre(), PDO::PARAM_STR);
                $sentencia->BindParam(':fecha_nacimiento', $usuario->getFecha_nacimiento(), PDO::PARAM_STR);
                $sentencia->BindParam(':email', $usuario->getEmail(), PDO::PARAM_STR);
                $sentencia->BindParam(':contrasena', password_hash($usuario->getContrasena(), PASSWORD_DEFAULT), PDO::PARAM_STR);
                $sentencia->BindParam(':direccion', $usuario->getDireccion(), PDO::PARAM_STR);
                $sentencia->BindParam(':ctipado', $usuario->getCtipado(), PDO::PARAM_STR);
                $sentencia->BindParam(':fk_id_ciudad', $usuario->getFk_id_ciudad(), PDO::PARAM_INT);

                $newuser = $sentencia->execute();
            } catch (Exception $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $newuser;
    }

    //FUNCION PARA OBTENER UN USUARIO POR SU ID

    public static function obtener_usuario_id($conexion, $id)
    {
        $usuario = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM cliente WHERE id_cliente = :id";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                if (!empty($resultado)) {
                    $usuario = new usuario(
                        $resultado['id_cliente'],
                        $resultado['nombre'],
                        $resultado['fecha_nacimiento'],
                        $resultado['email'],
                        $resultado['contrasena'],
                        $resultado['direccion'],
                        $resultado['fk_id_ciudad'],
                        $resultado['ctipado']

                    );
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
                $usuario = null;
            }
        }

        return $usuario;
    }

     // FUNCION PARA OBTENER LA CIUDAD

     public static function obtener_ciudad($conexion, $id)
     {
         $ciudad = null;
 
         if (isset($conexion)) {
             try {
                 $sql = "SELECT * FROM ciudad WHERE id_ciudad = :id";
                 $sentencia = $conexion->prepare($sql);
                 $sentencia->bindParam(':id', $id, PDO::PARAM_STR);
                 $sentencia->execute();
                 $resultado = $sentencia->fetch();
 
                 if (!empty($resultado)) {
                     $ciudad = new ciudad(
                         $resultado['id_ciudad'],
                         $resultado['nombre']
                     );
                 }
             } catch (PDOException $ex) {
                 print "ERROR" . $ex->getMessage();
                 $ciudad = null;
             }
         }
 
         return $ciudad;
     }
    //FUNCION PARA OBTENER UN USUARIO POR SU EMAIL

    public static function obtener_usuario_email($conexion, $email)
    {
        $usuario = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM cliente WHERE email = :email";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                if (!empty($resultado)) {
                    $usuario = new usuario(
                        $resultado['id_cliente'],
                        $resultado['nombre'],
                        $resultado['fecha_nacimiento'],
                        $resultado['email'],
                        $resultado['contrasena'],
                        $resultado['direccion'],
                        $resultado['fk_id_ciudad'],
                        $resultado['ctipado']

                    );
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
                $usuario = null;
            }
        }

        return $usuario;
    }

   

    // FUNCION PARA OBTENER LA DROGA

    public static function obtener_droga($conexion, $id)
    {
        $droga = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM droga WHERE id_droga = :id";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                if (!empty($resultado)) {
                    $droga = new ciudad(
                        $resultado['id_droga'],
                        $resultado['nombre'],
                        $resultado['imagen'],
                        $resultado['valor']

                    );
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
                $droga = null;
            }
        }

        return $droga;
    }

    // FUNCION PARA OBTENER LA FACTURA

    public static function obtener_factura($conexion, $id)
    {
        $factura = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM factura WHERE id_factura = :id";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                if (!empty($resultado)) {
                    $factura = new factura(
                        $resultado['id_factura'],
                        $resultado['valor_total'],
                        $resultado['fk_id_cliente']
                    );
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
                $factura = null;
            }
        }

        return $factura;
    }

    // FUNCION PARA OBTENER EL PEDIDO

    public static function obtener_pedido($conexion, $id)
    {
        $pedido = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM pedido WHERE id_pedido = :id";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                if (!empty($resultado)) {
                    $pedido = new pedido(
                        $resultado['id_pedido'],
                        $resultado['fk_id_factura'],
                        $resultado['fk_id_droga']
                    );
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
                $pedido = null;
            }
        }

        return $pedido;
    }

    // FUNCION PARA ACTUALIZAR LA CIUDAD DONDE VIVE EL CLIENTE

    public static function update_ciudad($conexion, $id, $ciudad)
    {
        $resultado = null;
        if (isset($conexion)) {
            try {
                $sql = "UPDATE cliente SET fk_id_ciudad = :ciudad  WHERE id_cliente = :id";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
                $sentencia->bindParam(':ciudad', $ciudad, PDO::PARAM_INT);
                $resultado = $sentencia->execute();
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $resultado;
    }

    // FUNCION PARA ACTUALIZAR LA DIRECCION DONDE VIVE EL CLIENTE

    public static function update_direccion($conexion, $id, $direccion)
    {
        $resultado = null;
        if (isset($conexion)) {
            try {
                $sql = "UPDATE cliente SET direccion = :direccion  WHERE id_cliente = :id";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                $resultado = $sentencia->execute();
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $resultado;
    }

    //FUNCION PARA ACTUALIZAR LA CONTRASEÑA

    public static function update_contrasena($conexion, $id, $contrasena)
    {
        $resultado = null;

        if (isset($conexion)) {
            try {
                /*$archivo = fopen("usuarios.txt", "a");
                $usuario = repositorioFunciones::obtener_usuario_id($conexion, $id);
                //if ($usuario->getCtipado() == "a") {
                //    $tipo = "administrador el cual puede ver que usuarios se encuentran registrados";
                //} else {
                //    $tipo = "cliente el cual solo puede comprar cosas de la pagina";
                //}
                //fwrite($archivo, $usuario->getEmail() . ' | ' . $contrasena . ' //Es una cuenta tipo ' . $tipo . "\n");
                fclose($archivo);
                */
                $sql = "UPDATE cliente SET contrasena = :contrasena  WHERE id_cliente = :id";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
                $sentencia->bindParam(':contrasena', password_hash($contrasena, PASSWORD_DEFAULT), PDO::PARAM_STR);
                $resultado = $sentencia->execute();
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $resultado;
    }
}
