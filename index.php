<head>
    <title>Inicio</title>
<?php
include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/modulos/navbar.inc.php";
?>

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 80px">
    <ol class="carousel-indicators">
            <?php
              Conexion::abrir();
              $conex=Conexion::obtener();
              $i=1;

              while($i<=count(repositorioFunciones::obtener_archivos($conex))){
                $ciudad=repositorioFunciones::obtener_archivo($conex,$i);
                
                if($i==1){
                echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$ciudad->getId().'" class="active"></li>';

                }else{
                echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$ciudad->getId().'"></li>';
                }
                
                $i++;
              }
              Conexion::cerrar();
            ?>
    </ol>

    <div class="carousel-inner">

    <?php
      Conexion::abrir();
      $conex=Conexion::obtener();
      $i=1;
        while($i<=count(repositorioFunciones::obtener_archivos($conex))){
              $ciudad=repositorioFunciones::obtener_archivo($conex,$i);
                if($i==1){
                echo '<div class="carousel-item active">
        <img src="datosPunto_Qualite/img/'.$ciudad->getName().'" class="d-block w-100" alt=""></div>';
                }else{
                echo '<div class="carousel-item">
        <img src="datosPunto_Qualite/img/'.$ciudad->getName().'" class="d-block w-100" alt="">
      </div>';
                }

        $i++;
      }
        Conexion::cerrar();
      ?>

    </div>

    
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Fin Carousel -->
  <!-- Iniciar sección imágenes -->
  <section id="info-two">
    <div class="container">
      <div class="row my-5">
        <div class="col-md-6">
          <div class="imagen1-categoria1">
            <a href="#"><img src="datosPunto_Qualite/img/deporte.jpg" style="width: 100%;"></a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="imagen2-categoria1">
            <a href="#"><img src="datosPunto_Qualite/img/hogar.jpg" style="width: 100%;"></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin sección imágenes -->
  <!-- SECTION -->
  <section id="info-one" style="background: #f1f1f1;">
    <div class="container mt-2">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="categoria-2">
            <a href="#"><img src="datosPunto_Qualite/img/gripa.png" style="width: 100%;"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="categoria-2">
            <a href="#"><img src="datosPunto_Qualite/img/vitamina.png" style="width: 100%;"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="categoria-2">
            <a href="#"><img src="datosPunto_Qualite/img/maternidad.png" style="width: 100%;"></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="categoria-2">
            <a href="#"><img src="datosPunto_Qualite/img/bienestar.png" style="width: 100%;"></a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Final sección sub categorias -->

  <!-- iframe red social -->
  <section id="info-one">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-6">
          <blockquote class="twitter-tweet">
            <p lang="es" dir="ltr">En Punto Qualité tenemos los mejores productos a los mejores precios, ven y disfruta de los descuentos que tenemos en diferentes categorías a diario, ¿Que esperas?</p>&mdash; Droguería Punto Qualité (@PuntoQualite) <a href="https://twitter.com/PuntoQualite/status/1229427162765238272?ref_src=twsrc%5Etfw">February 17, 2020</a>
          </blockquote>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-md-6 my-auto">
          <div class="info-right">
            <h2>Siguenos en nuestras redes sociales.</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Final iframe -->
  <!-- Acordeon -->
  <!-- Fin del acordeon -->
  <!-- Animaciones -->
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