<?php
include_once "config.inc.php";
include_once "usuario.inc.php";
include_once "droga.inc.php";
include_once "ciudad.inc.php";
include_once "pedido.inc.php";
include_once "factura.inc.php";

class repositorioFunciones{
    
    

    public static function obtener_usuarios($conexion){
        $usuarios=array();

        if(isset($conexion)) {
            try{
                include_once "usuario.inc.php";

                $sql="SELECT * from cliente";
                $sentencia=$conexion->prepare($sql);
                $res=$sentencia->fetchAll();

                if(count($res)>0){
                    foreach ($res as $fila){
                        $usuarios[]=new usuario($fila['id_cliente'],$fila['nombre'],$fila['fecha_nacimiento'],$fila['email'],$fila['contrasena'],$fila['direccion'],$fila['fk_id_ciudad']);
                    }
                }else{
                    print "No hay usuarios";
                }
            }catch (PDOException $ex){
                print "ERROR" . $ex ->getMessage();
            }
        }
    }

    public static function insertar_usuarios($conexion,$usuario){
        $newuser=false;

        if(isset($conexion)){
            try{
                include_once "usuario.inc.php";

                $sql="INSERT INTO cliente(nombre,fecha_nacimiento,email,contrasena,direccion,fk_id_ciudad) VALUES(:nombre,:fecha_nacimiento,:email,:contrasena,:direccion,:fk_id_ciudad)";
                $sentencia = $conexion->prepare($sql);
                $sentencia -> BindParam(':nombre', $usuario -> getNombre(), PDO::PARAM_STR);
                $sentencia -> BindParam(':fecha_nacimiento', $usuario->getFecha_nacimiento(),PDO::PARAM_STR);
                $sentencia -> BindParam(':email', $usuario->getEmail(),PDO::PARAM_STR);
                $sentencia -> BindParam(':contrasena',$usuario->getContrasena(),PDO::PARAM_STR);
                $sentencia -> BindParam(':direccion', $usuario->getDireccion(),PDO::PARAM_STR);
                $sentencia -> BindParam(':fk_id_ciudad',$usuario->getFk_id_ciudad(),PDO::PARAM_INT);

                $newuser=$sentencia->execute();
            }catch (Exception $ex){
                print "ERROR" . $ex ->getMessage();
            }
        }
        return $newuser;
    }

    public static function obtener_usuario_id($conexion,$id){
        $usuario=null;

        if(isset($conexion)){
            try{
                $sql="SELECT * FROM cliente WHERE id_cliente = :id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if(!empty($resultado)){
                    $usuario = new usuario($resultado['id_cliente'],
                                            $resultado['nombre'],
                                            $resultado['fecha_nacimiento'],
                                            $resultado['email'],
                                            $resultado['contrasena'],
                                            $resultado['direccion'],
                                            $resultado['fk_id_ciudad']
                                            
                                        );
                }

            } catch(PDOException $ex){
                print "ERROR".$ex -> getMessage();
                $usuario=null;
            }
        }

        return $usuario;
    }

    public static function obtener_usuario_email($conexion,$email){
        $usuario=null;

        if(isset($conexion)){
            try{
                $sql="SELECT * FROM cliente WHERE email = :email";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if(!empty($resultado)){
                    $usuario = new usuario($resultado['id_cliente'],
                                            $resultado['nombre'],
                                            $resultado['fecha_nacimiento'],
                                            $resultado['email'],
                                            $resultado['contrasena'],
                                            $resultado['direccion'],
                                            $resultado['fk_id_ciudad']
                                            
                                        );
                }

            } catch(PDOException $ex){
                print "ERROR".$ex -> getMessage();
                $usuario=null;
            }
        }

        return $usuario;
    }

    public static function obtener_ciudad($conexion,$id){
        $ciudad=null;

        if(isset($conexion)){
            try{
                $sql="SELECT * FROM ciudad WHERE id_ciudad = :id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if(!empty($resultado)){
                    $ciudad = new ciudad($resultado['id_ciudad'],
                                            $resultado['nombre']  
                                        );
                }

            } catch(PDOException $ex){
                print "ERROR".$ex -> getMessage();
                $ciudad=null;
            }
        }

        return $ciudad;
    }

    public static function obtener_droga($conexion,$id){
        $droga=null;

        if(isset($conexion)){
            try{
                $sql="SELECT * FROM droga WHERE id_droga = :id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if(!empty($resultado)){
                    $droga = new ciudad($resultado['id_droga'],
                                            $resultado['nombre'],
                                            $resultado['imagen'],
                                            $resultado['valor']

                                        );
                }

            } catch(PDOException $ex){
                print "ERROR".$ex -> getMessage();
                $droga=null;
            }
        }

        return $droga;
    }

    public static function obtener_factura($conexion,$id){
        $factura=null;

        if(isset($conexion)){
            try{
                $sql="SELECT * FROM factura WHERE id_factura = :id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if(!empty($resultado)){
                    $factura = new factura($resultado['id_factura'],
                                            $resultado['valor_total']  ,
                                            $resultado['fk_id_cliente']
                                        );
                }

            } catch(PDOException $ex){
                print "ERROR".$ex -> getMessage();
                $factura=null;
            }
        }

        return $factura;
    }

    public static function obtener_pedido($conexion,$id){
        $pedido=null;

        if(isset($conexion)){
            try{
                $sql="SELECT * FROM pedido WHERE id_pedido = :id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();

                if(!empty($resultado)){
                    $pedido = new pedido($resultado['id_pedido'],
                                            $resultado['fk_id_factura'],
                                            $resultado['fk_id_droga']  
                                        );
                }

            } catch(PDOException $ex){
                print "ERROR".$ex -> getMessage();
                $pedido=null;
            }
        }

        return $pedido;
    }

    public static function update_ciudad($conexion,$id,$ciudad){
        $resultado=null;
        if(isset($conexion)){
            try{
                $sql="UPDATE cliente SET fk_id_ciudad = :ciudad  WHERE id_cliente = :id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':id', $id, PDO::PARAM_INT);
                $sentencia -> bindParam(':ciudad', $ciudad, PDO::PARAM_INT);
                $resultado=$sentencia -> execute();

            } catch(PDOException $ex){
                print "ERROR".$ex -> getMessage();
            }
        }
        return $resultado;
    }

    public static function update_direccion($conexion,$id,$direccion){
        $resultado=null;
        if(isset($conexion)){
            try{
                $sql="UPDATE cliente SET direccion = :direccion  WHERE id_cliente = :id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':id', $id, PDO::PARAM_INT);
                $sentencia -> bindParam(':direccion', $direccion, PDO::PARAM_STR);
               $resultado= $sentencia -> execute();

            } catch(PDOException $ex){
                print "ERROR".$ex -> getMessage();
            }
        }
        return $resultado;
    }

    public static function update_contrasena($conexion,$id,$contrasena){
        $resultado=null;
        
        if(isset($conexion)){
            try{
                
                $sql="UPDATE cliente SET contrasena = :contrasena  WHERE id_cliente = :id";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':id', $id, PDO::PARAM_INT);
                $sentencia -> bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
               $resultado= $sentencia -> execute();
               
                
            } catch(PDOException $ex){
                print "ERROR".$ex -> getMessage();
                
            }
        }
        return $resultado;
    }

}
