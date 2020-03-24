<?php
include_once "php-objects/conexion.inc.php";
include_once("php-objects/repositorio.php");
include_once "php-objects/usuario.inc.php";

if ($_POST) {
    repositorioFunciones::olvidar_contra($_POST['email']);
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
</head>



<body>
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


    <div class="container" style="margin-top: 8rem">
        <form class="form-signin" method="POST" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
            <h1 class="h3 mb-3 font-weight-normal">Recuperacion</h1>
            <label for="inputEmail" class="sr-only">Correo electronico</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electronico" required autofocus>
            <button class="btn btn-primary btn-block" type="submit">Recuperar</button>

        </form>
    </div>

</body>

</html>