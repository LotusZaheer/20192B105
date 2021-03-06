<head>
  <title>Eliminar producto</title>
  <?php

  include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/php-objects/usuario.inc.php";
  session_start();
  $var = true;
  $sesion = $_SESSION['cliente'];
  if (($sesion == null) || ($sesion->getCtipado() != 'a')) {
    header("Location: /20192B105/index.php");
  }

  include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/navbar.inc.php";

  if ($_POST) {
    Conexion::abrir();
    $conex = Conexion::obtener();
    $id = $_POST['id'];
    $eliminar_droga = repositorioFunciones::eliminar_droga($conex, $id);
    header("Location: /20192B105/codigoPunto_Qualite/drogas.php");
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
      <br>
      <h3 style="text-align:center;">¿Seguro que desea eliminar la base de datos?</h3>
      <br>
      <br>
      <div style="text-align:center;">
        <a href="/20192B105/codigoPunto_Qualite/php-objects/borrar.php">
          <h1>Eliminar</h1>
        </a>
      </div>

      </tbody>
      <table style="text-align:center;">
        <tr>
        </tr>
      </table>
      </form>
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
  ?>