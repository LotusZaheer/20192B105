<head>
  <title>Administrar ciudades</title>
  <?php

  include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/php-objects/ciudad.inc.php";
  include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/php-objects/usuario.inc.php";
  session_start();
  $var = true;
  $sesion = $_SESSION['cliente'];
  if (($sesion == null) || ($sesion->getCtipado() != 'a')) {
    header("Location: /20192B105/index.php");
  }

  include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/navbar.inc.php";
  if ($_POST) {
    $nombre = $_POST['nombre'];
    Conexion::abrir();
    $ciudad = new ciudad('', $nombre);
    $newciudad = repositorioFunciones::insertar_ciudad(Conexion::obtener(), $ciudad);
    Conexion::cerrar();
    header('Location: /20192B105/codigoPunto_Qualite/ciudad.php');
  }
  ?>


  <div class="row" style="padding-top: 6em">
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/nav.php";
    ?>

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
            </tr>
          </thead>
          <tbody>
            <?php
            Conexion::abrir();
            $conex = Conexion::obtener();
            $ciudades = repositorioFunciones::obtener_ciudades($conex);
            $ultimo = end($ciudades);
            $numero = $ultimo->getId();
            $i = 1;
            while ($i <= $numero) {
              $ciudad = repositorioFunciones::obtener_ciudad($conex, $i);
              if ($ciudad != null) {
                echo "<tr>";
                echo '<td>' . $ciudad->getId() . '</td>';
                echo '<td>' . $ciudad->getNombre() . '</td>';
                echo '<td> <a href ="/20192B105/codigoPunto_Qualite/editar_datos/eliminar_ciudad.php?id=' . $ciudad->getId() . '">Eliminar</a></td>';
                echo "</tr>";
                $ciudades = repositorioFunciones::obtener_ciudades($conex);
                $ultimo = end($ciudades);
                $numero = $ultimo->getId();
                $i++;
              } else {
                $i++;
              }
            }
            Conexion::cerrar();
            ?>
          </tbody>
        </table>
        <h4 style="margin-top:10px">Agregar ciudad</h4>
        <table class="table table-striped table-sm">
          <div>
            <tr>
              <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST">
                <td><input name="nombre" class="form-control" id="nombre" placeholder="Ciudad" required></td>
                <td></td>
            </tr>
            <tr>
              <td><button type="submit" class="btn btn-primary form-group" id="agregar" name="commit">Agregar</button></td>
            </tr>
            </form>
          </div>
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
  <?php
  include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/b_scripts.php";
  include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/footer.php";
  ?>