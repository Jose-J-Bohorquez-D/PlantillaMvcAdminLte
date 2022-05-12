<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE_Plantilla_Base</title>
  <?php include "Vistas/Modulos/Dependencias.php"; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed"> <!-- <body class="hold-transition sidebar-collapse sidebar-mini layout-fixed"> -->
<div class="wrapper">  <!-- Preloader   <div class="preloader flex-column justify-content-center align-items-center"> <img class="animation__shake" src="Vistas/Dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> </div> -->
<?php include "Vistas/Modulos/NavSup.php";
include "Vistas/Modulos/NavLat.php";
$mvc = new ControladorPlantilla(); $mvc->ctrEnlacesPaginasControlador();
/*
if (isset($_GET["ruta"])) {
  if ($_GET["ruta"] == "inicio" ||
      $_GET["ruta"] == "usuarios") {
    include "Vistas/Paginas/".$_GET["ruta"].".php";
  }
}else {
  include "Vistas/Paginas/inicio.php";
}*/
include "Vistas/Modulos/NavFooter.php"; ?>
</div>
<script src="Vistas/Js/Plantilla.js">
</script>
</body>
</html>
