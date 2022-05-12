<?php

class ControladorPlantilla{


  /* Llamado a la plantilla*/
  public function ctrLlamadoPlantilla(){
    include "Vistas/Plantilla.php";
  }


  /* Interaccion del usuario */
  public function ctrEnlacesPaginasControlador(){
    if (isset($_GET["action"])) {
      $enlaceCtr = $_GET["action"]; //test echo '<h1 class="text-center">'.$enlace.'</h1>';
      $respuesta=ModeloPlantilla::mdlLlamadoPlantilla($enlaceCtr);      
      include $respuesta;
    }else{
      $enlaceCtr = "inicio";
      $respuesta=ModeloPlantilla::mdlLlamadoPlantilla($enlaceCtr); 
      include $respuesta;
    }      
  }




}//fin ControladorPlantilla{}

 ?>
