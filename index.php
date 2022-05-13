<?php

require_once("Controladores/Plantilla.Controlador.php");
require_once("Controladores/Login.Controlador.php");


require_once("Modelos/Plantilla.Modelo.php");
require_once("Modelos/Login.Modelo.php");


$plantilla = new ControladorPlantilla;
$plantilla->ctrLlamadoPlantilla();

?>
