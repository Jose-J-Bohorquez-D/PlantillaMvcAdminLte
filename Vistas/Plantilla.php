<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/b9d60f909f.js" crossorigin="anonymous"></script>
  <title>AdminLTE_Plantilla_Base</title>
  <?php include "Vistas/Modulos/Dependencias.php"; ?>
</head>
<?php if (isset($_SESSION["iniciarSersion"]) &&  $_SESSION["iniciarSersion"] == "ok") {
        echo '<body class="hold-transition sidebar-mini layout-fixed"> <!-- <body class="hold-transition sidebar-collapse sidebar-mini layout-fixed"> -->';
        echo '<div class="wrapper">  <!-- Preloader   <div class="preloader flex-column justify-content-center align-items-center"> <img class="animation__shake" src="Vistas/Dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> </div> -->'; 
        include "Vistas/Modulos/NavSup.php";
        include "Vistas/Modulos/NavLat.php";
        $mvc = new ControladorPlantilla(); $mvc->ctrEnlacesPaginasControlador();
        include "Vistas/Modulos/NavFooter.php"; 
        echo '</div>';
      }else{
        echo '<body class="hold-transition sidebar-mini layout-fixed login-page"> <!-- <body class="hold-transition sidebar-collapse sidebar-mini layout-fixed"> -->';
        include "Vistas/Paginas/login.php";
      } ?>
<script src="Vistas/Js/Plantilla.js">
</script>
</body>
</html>
