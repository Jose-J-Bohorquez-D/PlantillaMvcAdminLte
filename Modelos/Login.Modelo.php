<?php 
require_once "Conexion.php";
class ModeloLogin extends ConexionBD{
	public static function mdlLogin($tabla,$item,$valor){
		$stmt = ConexionBD::conectarBD()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
		$stmt -> bindParam(":".$item,$valor);
		$stmt -> execute();
		return $stmt -> fetch();
	}
}


 ?>