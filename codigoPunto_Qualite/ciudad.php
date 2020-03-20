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
<html lang="es">

<head>
  <link rel="stylesheet" href="css/lux1.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inicio</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <a class="navbar-brand" href="../index.php">Punto Qualité</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">


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


      <ul class="navbar-nav">
        <?php
        if ($mode) {
          if ($sesion->getCtipado() == 'a') {
            echo '<li class="nav-item ">
                  <a class="nav-link" href="admin.php">admin</a>
                </li>';
          }
          echo ('
              <li class="nav-item ">
                  <a class="nav-link" href="cuenta.php">Cuenta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cerrar.php">Cerrar Sesion</a>
                </li>
              ');
        } else {

          echo ('
          <li class="nav-item ">
			<a class="nav-link" id="btn-abrir-popup" class="btn-abrir-popup nav-link" href="#" >Iniciar Sesion</a>
              </li>
		<div class="overlay" id="overlay">
			
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
				<form class="form-signin" method="POST" action="' . $_SERVER['PHP-SELF'] . '">
					<div class="contenedor-inputs">
          <input  name="email" id="password-field1" type="password"  class="form-control">
          <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password1"></span>
						<input id="password-field2" type="password" class="form-control" name="password">
              <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password2"></span>
          </div>
          <a href="codigoPunto_Qualite/forgot.php">¿Olvidaste tu contraseña?</a>
          
					<button class="btn btn-primary btn-block" type="submit" style="margin-top: 10px">Entrar</button>
				</form>
			</div>
		</div>

            
            </li>
            <li class="nav-item">
              <a class="nav-link" href="codigoPunto_Qualite/registro.php">Registrate</a>
            </li>
          ');
        }
        ?>
      </ul>


    </div>
  </nav>


  <div class="row" style="padding-top: 6em">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <li class="sidebar-sticky">
        <ul class="nav flex-column">

        <li class="nav-item">
            <a class="nav-link" href="admin.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
              Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
              Ciudad 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg>
              Drogas
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
              </svg>
              Pedidos
            </a>
          </li>
          
        </ul>


      </li>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor">
        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
        </div>
        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
        </div>
      </div>
      

      
      <h2 style="margin-top:10px">Ciudades</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Fecha de Nacimiento</th>
              <th>Email</th>
              <th>Direccion</th>
              <th>Tipo de cliente</th>
              <th>Ciudad</th>
            </tr>
          </thead>
          <tbody>
            <?php
              Conexion::abrir();
              $conex=Conexion::obtener();
              $i=1;
              while($i<=count(repositorioFunciones::obtener_usuarios($conex))){
                $usuario=repositorioFunciones::obtener_usuario_id($conex,$i);
                echo "<tr>";
                echo '<td>'.$usuario->getId().'</td>';
                echo '<td>'.$usuario->getNombre().'</td>';
                echo '<td>'.$usuario->getFecha_nacimiento().'</td>';
                echo '<td>'.$usuario->getEmail().'</td>';
                echo '<td>'.$usuario->getDireccion().'</td>';
                if($usuario->getCtipado()=='a'){
                echo '<td>Administrador</td>';
                }else{
                  echo '<td>Cliente</td>';
                }
                echo '<td>'. repositorioFunciones::obtener_ciudad($conex,$usuario->getFk_id_ciudad())->getNombre().'</td>';
                echo "</tr>";
                
                $i++;
              }
              Conexion::cerrar();
            ?>
          </tbody>
        </table>
      </div>
    
    
    
    </main>
  </div>



  <script>
    window.sr = ScrollReveal();

    sr.reveal('.categoria-2', {
      duration: 2000,
      origin: 'left',
      distance: '300px'
    });
    sr.reveal('.imagen1-categoria1', {
      duration: 2000,
      origin: 'bottom',
      distance: '300px'
    });
    sr.reveal('.imagen2-categoria1', {
      duration: 2000,
      origin: 'bottom',
      distance: '300px'
    });
  </script>
  <!-- Bootstrap 4 scripts -->
  <script src="../codigoPunto_Qualite/js/popup.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>