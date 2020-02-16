<?php
include_once "php-objects/conexion.inc.php";
include_once("php-objects/repositorio.php");
include_once "php-objects/usuario.inc.php";
$emailused=false;
if($_POST){
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $pass=$_POST['password1'];
    $dir=$_POST['direccion'];
    $ciu=$_POST['ciudad'];    
    
    
    Conexion::abrir();
    $real=repositorioFunciones::obtener_usuario_email(Conexion::obtener(),$email);
    if($real==null){
        $new=date('Y-m-d', strtotime($_POST['fecha_nacimiento']));
        $usuario = new usuario('',$nombre,$new,$email,$pass,$dir,$ciu);   
        $newuser= repositorioFunciones::insertar_usuarios(Conexion::obtener(),$usuario);
        Conexion::cerrar();
        header('Location: login.php');
    }else{
        $emailused=true;
    }
    
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="css/lux1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <script type="text/javascript" src="js/security.js"></script>
</head>

<body onload="<?php if($emailused==true) { echo("emailAE()"); } ?> ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Narcos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">

            <div class="col-8">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="shop.php">Productos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="our.php">Nosotros</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="our.php">Contactanos</a>
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <div class="float-right">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="login.php">Iniciar sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registro.php">Registrate</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <h1 id="titles1">Se parte de nuestra gran comunidad</h1>
    <div class="container">
        <hr>
        <h4>Datos personales</h4>
        <form method="POST" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Correo Electronico</label>
                <input type="email" name="email" class="form-control" id="email" onchange="chan()" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" name="password1" id="password1" pattern=".{8,16}" class="form-control" id="exampleInputPassword1" placeholder="Password" title="La longitud de la contraseña debe ser entre 8 y 16 caracteres" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirmar contraseña</label>
                <input type="password" name="password2" id="password2" class="form-control" id="exampleInputPassword1" placeholder="Password" required> 
            </div>
            <p id="demo"><p>
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre y Apellidos</label>
                <input name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Juan Rodriguez" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nacimiento" id="dat" value="<?php echo date('Y-m-d'); ?>" required>
            </div>
            <label for="exampleInputEmail1">Ciudad</label>
            <select class="form-control" id="exampleSelect1" name="ciudad"  required>
            <option value=""></option>
            <option value="1">Bucaramanga</option>
                <option value="2">Giron</option>
                <option value="3">Floridablanca</option>
                <option value="4">Duitama</option>
                <option value="5">Yopal</option>
            </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Direccion</label>
                <input name="direccion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bogota, Calle 53 # 27 - 08" required>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="" checked="" required>
                    ¿Aceptas los terminos y condiciones?
                </label>
            </div>
            <button type="submit" class="btn btn-primary" id="topper" onclick="equalpass()" name="commit">Registrarse</button>
            <form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>

</html>