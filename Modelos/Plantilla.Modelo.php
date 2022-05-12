<?php

class ModeloPlantilla{

  public static function mdlLlamadoPlantilla($enlaceMdl){
    if ($enlaceMdl == "inicio"  ||
        $enlaceMdl == "usuarios"  ||
        $enlaceMdl == "servicios" ||
        $enlaceMdl == "productos") {

          $modulo = "Vistas/Paginas/".$enlaceMdl.".php";

    }

    return $modulo;

  }



}

 ?>
