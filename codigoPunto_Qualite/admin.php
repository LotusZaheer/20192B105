<?php
include_once $_SERVER['DOCUMENT_ROOT']."/PFW/codigoPunto_Qualite/modulos/navbar.inc.php";
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
include_once $_SERVER['DOCUMENT_ROOT']."/PFW/codigoPunto_Qualite/modulos/b_scripts.php";
include_once $_SERVER['DOCUMENT_ROOT']."/PFW/codigoPunto_Qualite/modulos/footer.php";
?>