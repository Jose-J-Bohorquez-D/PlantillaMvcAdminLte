<?php 

class ConexionBD{
	public static function conectarBD(){
		$link = new PDO("mysql:host=localhost;dbname=servitec_bd",
						"root",
						"");
		$link->exec("set names UTF8");
		return $link;
	}
}

 ?>