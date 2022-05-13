<?php

class ModeloPlantilla{

  public static function mdlLlamadoPlantilla($enlaceMdl){
    if ($enlaceMdl == "salir"  ||
        $enlaceMdl == "inicio"  ||
        $enlaceMdl == "usuarios"  ||
        $enlaceMdl == "servicios" ||
        $enlaceMdl == "productos") {

          $modulo = "Vistas/Paginas/".$enlaceMdl.".php";

    }else{
      $modulo = "Vistas/Paginas/404.php";
    }
    return $modulo;
  }



}

 ?>
