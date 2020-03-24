<head>
    <title>Administrar drogas</title>
<?php

include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/php-objects/droga.inc.php";
include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/php-objects/usuario.inc.php";
session_start();
$var = true;
$sesion = $_SESSION['cliente'];
if(($sesion==null) || ($sesion->getCtipado() != 'a'))
{
  header("Location: /20192B105/index.php");
}

include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/modulos/navbar.inc.php";
if ($_POST) {
  $nombre = $_POST['nombre'];
  $valor = $_POST['valor'];
  Conexion::abrir();
  $droga = new droga('', $nombre, null, $valor);
  $newdroga = repositorioFunciones::insertar_droga(Conexion::obtener(), $droga);
  Conexion::cerrar();
  header('Location: /20192B105/codigoPunto_Qualite/drogas.php');
}
?>


  <div class="row" style="padding-top: 6em">
<?php
include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/modulos/nav.php";
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
      

      
      <h2 style="margin-top:10px">Productos</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Ajustes</th>
            </tr>
          </thead>
          <tbody>
            <?php
              Conexion::abrir();
              $conex=Conexion::obtener();
              $drogas = repositorioFunciones::obtener_drogas($conex);
              $ultimo = end($drogas);
              $numero = $ultimo->getId_droga();
              $i=1;
              while($i<=$numero){
                $droga=repositorioFunciones::obtener_droga($conex,$i);
                if($droga!=null)
                {
                  echo "<tr>";
                  echo '<td>'.$droga->getId_droga().'</td>';
                  echo '<td>'.$droga->getNombre().'</td>';
                  echo '<td>'.$droga->getValor().'</td>';
                  echo '<td> <a href ="/20192B105/codigoPunto_Qualite/editar_datos/editar_drogas.php?id='.$droga->getId_droga().'">Editar</a> <br> <a href ="/20192B105/codigoPunto_Qualite/editar_datos/eliminar_drogas.php?id='.$droga->getId_droga().'">Eliminar</a></td>';
                  echo "</tr>";
                  $drogas = repositorioFunciones::obtener_drogas($conex);
                  $ultimo = end($drogas);
                  $numero = $ultimo->getId_droga();
                  $i++;
                }
                else{
                  $i++;
                }
               
              }
              Conexion::cerrar();
            ?>
          </tbody>
        </table>
        <h4 style="margin-top:10px">Agregar productos</h4>
        <table class="table table-striped table-sm">
        <div>
        <tr>
          <form action="<?php echo ($_SERVER['PHP_SELF']);?>" method="POST">
              <td><input name="nombre" class="form-control" id="nombre"  placeholder="Nombre" required></td>
              <td> <input name="valor" class="form-control" id="valor"  placeholder="Valor" required></td>
              
        </tr>
            <tr> <td><button type="submit" class="btn btn-primary form-group" id="agregar" name="commit">Agregar</button></td></tr>
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
include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/modulos/b_scripts.php";
include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/modulos/footer.php";
?>