<?php 

class ControladorLogin{
	public function ctrLogin(){
		if (isset($_POST["correoIng"])) {
			$tablaCtr = "usuarios";
			$itemCtr = "correo";
			$valorCtr = $_POST["correoIng"];
			$respuesta = ModeloLogin::mdlLogin($tablaCtr,$itemCtr,$valorCtr);
			#var_dump($respuesta);
			if ($respuesta["correo"] == $_POST["correoIng"] && $respuesta["pwd"] == $_POST["pwdIng"]) {
				$_SESSION["iniciarSersion"] = "ok";
				echo '<script>  window.location.href="inicio"; </script>';
			}else{
				echo 'error al ingresar';
			}
		}
	}
}


 ?>