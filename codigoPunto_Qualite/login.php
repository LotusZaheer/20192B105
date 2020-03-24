<?php
include_once "php-objects/repositorio.php";
include_once "php-objects/usuario.inc.php";
include_once "php-objects/conexion.inc.php";

if ($_POST) {
  Conexion::abrir();
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $usuario = repositorioFunciones::obtener_usuario_email(Conexion::obtener(), $email);
  $contras = base64_decode($usuario->getContrasena());
  if ($pass == $contras) {
    session_start();
    $_SESSION['cliente'] = $usuario;
    header("Location: index.php");
  } else {
    echo "La contraseña o el email no coinciden";
  }

  Conexion::cerrar();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="css/signin.css">
  <link rel="stylesheet" href="css/lux1.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Iniciar Sesion</title>
</head>

<body>

  <body class="text-center">
    <div class="container">
      <form class="form-signin" method="POST" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
        <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
        <label for="inputEmail" class="sr-only">Correo electronico</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electronico" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-primary btn-block" type="submit">Entrar</button>

      </form>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>