<?php
include_once "php-objects/conexion.inc.php";
include_once("php-objects/repositorio.php");
include_once "php-objects/usuario.inc.php";
$emailused = false;
if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['password1'];
    $dir = $_POST['direccion'];
    $ciu = $_POST['ciudad'];


    Conexion::abrir();
    $real = repositorioFunciones::obtener_usuario_email(Conexion::obtener(), $email);
    if ($real == null) {
        $new = date('Y-m-d', strtotime($_POST['fecha_nacimiento']));
        $usuario = new usuario('', $nombre, $new, $email, $pass, $dir, $ciu);
        $newuser = repositorioFunciones::insertar_usuarios(Conexion::obtener(), $usuario);
        Conexion::cerrar();
        header('Location: ../index.php');
    } else {
        $emailused = true;
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Bootstrap 4 -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lux1.css">
    <title>Registro</title>

    <!-- Scrool reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <script>
        function habilitar(value)
        {
            if (value == true) {
                // habilitamos
                document.getElementById("universidad").disabled = false;
                document.getElementById("carrera").disabled = false;
                document.getElementById("promedio").disabled = false;
            } else if (value == false) {
                // deshabilitamos
                document.getElementById("universidad").disabled = true;
                document.getElementById("carrera").disabled = true;
                document.getElementById("promedio").disabled = true;
            }
        }
    </script>

</head>



<body onload="<?php if ($emailused == true) {
                    echo ("emailAE()");
                } ?> ">



    <!--NAVBAR-->

    <nav style="z-index:40!important;" class=" navbar navbar-expand-lg navbar-dark bg-primary fixed-top">

        <a class="navbar-brand" href="../index.php">Punto Qualité</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">


            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown show ">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Bebé y maternidad</a>
                        <a class="dropdown-item" href="#">Fitness</a>
                        <a class="dropdown-item" href="#">Cuidado personal</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="our.php">Nosotros</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="our.php">Contactanos</a>
                </li>
            </ul>


        </div>
    </nav>
    <!--FIN NAVBAR-->
    <div class="container cont-forms">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

        <!-- Código hoja vida integrantes -->
        <div class="marco-form">
            <h1 class="display-3 text-center">Hoja de vida</h1>
            <hr class="my-3">
            <br>

            <form action="" method="POST" id="form-hoja">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <div class="form-group col-md-6">
                        <label for="nombre">Nombres</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellido">Apellidos</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido" name="apellido">
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">
                    <div class="form-group col-md-9">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingrese su Email" name="email">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="celular">Telefono Celular</label>
                        <input type="tel" class="form-control" id="celular" placeholder="Ingrese su número de celular" name="celular">
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">
                    <div class="form-group col-md-9">
                        <label for="universidad">Universidad</label>
                        <input type="text" class="form-control" id="universidad" placeholder="Ingrese la universidad donde estudio" name="universidad">
                    </div>
                    <div>

                        <input type="checkbox" id="check" onchange="habilitar(this.checked);" checked> Tiene formación profesional

                    </div>


                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">

                    <div class="form-group col-md-9">
                        <label for="carrera">Estudio profesional</label>
                        <input type="text" class="form-control" id="carrera" placeholder="Ingrese la carrera que estudio" name="carrera">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="promedio">Promedio</label>
                        <input type="text" class="form-control" id="promedio" placeholder="Ingrese su promedio" name="promedio">
                    </div>
                    
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary mb-3">Subir</button>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/security.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>


</html>