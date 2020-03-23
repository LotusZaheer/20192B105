<?php
include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/modulos/navbar.inc.php";
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
      

      
          <h2 style="margin-top:10px">Carrusel Inicio</h2>
      


    <!--Base de datos // archivos guardados-->

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre (Pulse para descargar)</th>
              <th>Descripción</th>
              <th>Tipo</th>
            </tr>
          </thead>
          <tbody>
            <?php
              Conexion::abrir();
              $conex=Conexion::obtener();
              $i=1;

              while($i<=count(repositorioFunciones::obtener_archivos($conex))){
                $ciudad=repositorioFunciones::obtener_archivo($conex,$i);
                echo "<tr>";
                echo '<td>'.$ciudad->getId().'</td>';
                $extension = substr($ciudad->getTipo(), 6);
              if ($extension == "jpeg") {
                $extension = "jpg";
              }
                echo '<td><a href="../datosPunto_Qualite/img/'.$ciudad->getName().'.'.$extension.'" download="'.$ciudad->getName().'.'.$extension.'">'.$ciudad->getName().'</a>';
                echo '<td>'.$ciudad->getDescription().'</td>';
                echo '<td>'.$ciudad->getTipo().'</td>';

                $i++;
              }
              Conexion::cerrar();
            ?>
          </tbody>
        </table>

                <!--EDICIÓN DE ARCHIVOS-->
        <table class="table table-striped table-sm">
          <tr>
            <td>
              <form class="table table-striped table-sm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">  
                  <h3>Agregar archivo</h3>
                    Seleccione archivo: <input class="btn btn-primary form-group"  name="fichero" type="file" size="50" maxlength="150">  
    
                  <br> Descripcion: <input name="description" type="text" size="50" maxlength="250"> 
                  <br>
                  <input name="submit" class="btn btn-primary form-group" type="submit" id="topper" value="SUBIR ARCHIVO">   
                </form>  
              </td>
                  <td>
                    <h3>Eliminar Archivo</h3>
                      <form class="table table-striped table-sm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >  
                        <br> Id a Eliminar: <input name="id_eliminado" type="text" size="10" maxlength="40"> 
                        <br>
                        <input name="submit" class="btn btn-primary form-group" type="submit" id="topper" value="ELIMINAR ARCHIVO"> 
                      </form>
                  </td>
            </tr>
          </table>

          <!--FIN TABLA DE EDICIÓN DE ARCHIVOS-->

          </div>  
    </main>
</div>
      <?php
      
          $cons_usuario="20192B105";
          $cons_contra="vRYcsY25MN";
          $cons_base_datos="20192B105";
          $cons_equipo="localhost";

          $obj_conexion = 
          mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
    
          if (isset($_POST['submit'])) {   
            if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
     
     
            // creamos las variables para subir a la db
              $ruta = "../datosPunto_Qualite/img/"; 
              $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
              $upload= $ruta.$nombrefinal;  
      
              if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
                        $name  = $_FILES['fichero']['name']; 
                        $description  = $_POST['description']; 
                        $tipo = $_FILES['fichero']['type'];
                        $size = $_FILES['fichero']['size'];
                        $id = count(repositorioFunciones::obtener_archivos($conex)) + 1;
                        Conexion::abrir();
                        $name = substr($name, 0, -4);
                        $archivo = new archivo($id, $name,$description,$ruta,$tipo,$size);
                        $newarchivo = repositorioFunciones::insertar_archivo(Conexion::obtener(), $archivo);
                        Conexion::cerrar();  
                        echo '<script href="carrusel.php" language="javascript">alert("El archivo a sido cargado \n Pulse para recargar la tabla");</script> <META HTTP-EQUIV="REFRESH" CONTENT="1;URL=carrusel.php">';
              }  
            }  
          } 
              if ($_POST['id_eliminado']!=null) {
                $id_eliminado = $_POST['id_eliminado'];
                Conexion::abrir();
                $conex=Conexion::obtener();
                $id_ultimo=count(repositorioFunciones::obtener_archivos($conex));//obtengo el ultimo id
                $max=repositorioFunciones::obtener_archivo($conex,$id_ultimo);//obtengo el ultimo archivo
                $eliminado=repositorioFunciones::obtener_archivo($conex,$id_eliminado);//obtengo archivo eliminado
                if ($id_eliminado<=$id_ultimo) {
                  repositorioFunciones::eliminar_archivo(Conexion::obtener(),$eliminado,$max);
                  echo '<script href="carrusel.php" language="javascript">alert("El archivo a sido eliminado \n Pulse para recargar la tabla");</script> <META HTTP-EQUIV="REFRESH" CONTENT="1;URL=carrusel.php">';
                }else{
                  echo '<script href="carrusel.php" language="javascript">alert("No existe el elemento a eliminar");</script> <META HTTP-EQUIV="REFRESH" CONTENT="1;URL=carrusel.php">';
                }
                Conexion::cerrar();
                  }
      ?> 


     



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