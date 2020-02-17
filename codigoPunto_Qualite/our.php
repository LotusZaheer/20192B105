<?php
include_once('php-objects/conexion.inc.php');
include_once "php-objects/usuario.inc.php";
include_once "php-objects/repositorio.php";
$mode = false;
session_start();
error_reporting(0);

$sesion = $_SESSION['cliente'];
if ($sesion != null || $sesion != '') {
    $mode = true;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/lux1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nosotros</title>
</head>

<body>
    <nav style="z-index:40!important;" class=" navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="../index.php">Punto Qualité</a>
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
                        <a class="nav-link" href="#contacto">Contactanos</a>
                    </li>
                </ul>
            </div>
            <div class="col-4">
                <div class="float-right">
                    <ul class="navbar-nav mr-auto">
                        <?php
                        if ($mode) {
                            echo ('
              <li class="nav-item ">
                  <a class="nav-link" href="login.php">Cuenta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cerrar.php">Cerrar Sesion</a>
                </li>
              ');
                        } else {

                            echo ('
          <li class="nav-item ">
              <a class="nav-link" href="login.php">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Registrate</a>
            </li>
          ');
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <div class="container" id="mision"  style="margin-top: 100px">
        <h2 id="type-blockquotes">Misión</h2>
        <blockquote class="blockquote">
            <p class="mb-0">Generar dentro de la cadena de distribución de productos farmacéuticos, una entidad enfocada a lo social, disponiendo de un variado y excelente stock de productos, con precios altamente competitivos, almacenados eficientemente, dando la tranquilidad de poder acceder a medicamentos de calidad y respetar la formulación dada por los profesionales de la salud. Preservar la ética, servicio y cortesía tanto interna como con nuestros clientes. Esforzarnos por mantener clientes y trabajadores satisfechos en equilibrio con el entorno social.</p>
        </blockquote>
    </div>
    <hr class="my-4">
    <div class="container" id="vision">
        <h2 id="type-blockquotes">Visión</h2>
        <blockquote class="blockquote">
            <p class="mb-0">Crear Confianza garantizándote productos óptimos a los mejores precios del mercado, Asesorándote en tus dudas y búsqueda de medicamentos. Siempre a tu Servicio</p>
        </blockquote>
    </div>
    <hr class="my-4">
    <div class="container" id="marca">
        <h2 id="type-blockquotes">Nuestra marca</h2>
        <blockquote class="blockquote">
            <p class="mb-0">En el 2019 nace por primera vez drogueria Punto Qualité, la cual llega a cambiar el alto costo de las drogas tradicionales usadas en una familia del bien comun, por ende su presidente, Santiago Duitama decide crear la primera drogueria para el bien de las familias pobres donde productos como dolex, crema numero 4, entre otras sean de forma mas accesible a la mayoria de personas, esta idea fue realizada despues que el presidenta resultara con 1444 votos para el consejo de Bucaramanga y no le alcanzara. </p>
            <p class="mb-0">En la actualidad drogueria Punto Qualité ha ayudado en gran manera a aquellas personas con problemas economicos y actualemnte cuenta con varias sedes a nivel de Colombia, llevando felicidad y alegria para aquellos que estan enfermos y no tienen como costear algunas drogas para mejorar su salud.</p>
        </blockquote>
    </div>
    <hr class="my-4">
    <div class="container" id="trabajo">
        <h2 id="type-blockquotes">Unetenos</h2>
        <blockquote class="blockquote">
            <p class="mb-0">Actualmente la drogueria Punto Qualité necesita de un vasto personal para la entrega de domicilios y gente con estudios en farmacia para la correcta entrega de productos en las distintas sedes, si requieres mas informacion ve el apartado de contactanos y alli podras obtener acesoria para la entrega de documentos y empleacion. El personal de domicilios requerimos a gente con vehiculo propio, como nuestra filosofia es drogas por gente para la gente, tambien se puede usar bicicleta para envios.</p>
        </blockquote>
    </div>
    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10" />
                    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                </svg>
                <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
            </div>
            <div class="col-6 col-md">
                <h5>Sedes</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://www.google.com/maps/place/Cl.+32+%2326-133+a+26-55,+Bucaramanga,+Santander/@7.1243538,-73.1207863,17z/data=!3m1!4b1!4m5!3m4!1s0x8e681563c7a8a6a9:0x3d64f76f728c5761!8m2!3d7.124348!4d-73.1185974">Bucaramanga</a></li>
                    <li><a class="text-muted" href="https://www.google.com/maps/place/Cra.+26b+%2334-2+a+34-124,+Floridablanca,+Santander/@7.0688534,-73.1053061,17z/data=!3m1!4b1!4m5!3m4!1s0x8e683f71d7396e3d:0xab772f025f267d0e!8m2!3d7.0688528!4d-73.1031178">Floridablanca</a></li>
                    <li><a class="text-muted" href="https://www.google.com/maps/place/Cl.+16+%231217,+Duitama,+Boyac%C3%A1/@5.8304793,-73.0360097,18z/data=!3m1!4b1!4m13!1m7!3m6!1s0x8e6a3f0ca12f6173:0x6a043a55d2f7de6e!2sDuitama,+Boyac%C3%A1!3b1!8m2!3d5.8268951!4d-73.0329273!3m4!1s0x8e6a3f0bf9e90dfd:0xf53a1436160af546!8m2!3d5.8304766!4d-73.0349154">Duitama</a></li>
                    <li><a class="text-muted" href="https://www.google.com/maps/place/Cl.+48+%2326-2+a+26-154,+Gir%C3%B3n,+Santander/@7.0760531,-73.171821,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x8e683e90912b50ff:0xe9aa9708e4b018c6!2sGir%C3%B3n,+Santander!3b1!8m2!3d7.0739678!4d-73.1692652!3m4!1s0x8e683e8f4dbd17a9:0x616b6bb50cfb1ace!8m2!3d7.0760478!4d-73.1696323">Giron</a></li>
                    <li><a class="text-muted" href="https://www.google.com/maps/place/Calle+22+A,+Yopal,+Casanare/@5.3386884,-72.393591,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x8e6b0dca93add7cb:0x46dfbc4a24770cfe!2sYopal,+Casanare!3b1!8m2!3d5.348903!4d-72.400523!3m4!1s0x8e6b0db213fee0a9:0xc53c66b0fabe5390!8m2!3d5.3386831!4d-72.3914022">Yopal</a></li>
                </ul>
            </div>
            <div class="col-6 col-md" id="contacto">
                <h5>Contacto</h5>
                <p class="text-muted">
                    Para mas informacion:
                    <br>
                    +57 317 6513196
                </p>
            </div>
            <div class="col-6 col-md">
                <h5>Acerca de Punto Qualité</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#vision">Vision</a></li>
                    <li><a class="text-muted" href="#mision">Mision</a></li>
                    <li><a class="text-muted" href="#marca">Nuestra marca</a></li>
                    <li><a class="text-muted" href="#trabajo">Unetenos</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>