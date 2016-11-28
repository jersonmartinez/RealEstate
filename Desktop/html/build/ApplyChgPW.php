<?php
	include ("../../connect_server/connect_server.php");
	@session_start();
	
	$PassOld = $_POST['old_password'];
	$PassOne = $_POST['new_passwordUser'];
	$PassTwo = $_POST['repeat_new_passwordUser'];

	if ($PassOne == "" || $PassTwo == "" || $PassOld == ""){
		echo "Rellene todos los campos";
	} else {
		if ($PassOne == $PassTwo){
			$Data = $Conexion->query("SELECT password FROM user_admin WHERE username='".$_SESSION['username']."';")->fetch_array(MYSQLI_ASSOC);

			if (password_verify($PassOld, $Data['password'])){
				$password = password_hash($PassOne, PASSWORD_DEFAULT);
				
				if ($Conexion->query("UPDATE user_admin SET password='".$password."' WHERE username='".$_SESSION['username']."';")){
					echo "OK";
				}
			} else {
				echo "La contraseña actual no es correcta.";
			}
		} else {
			echo "Verifique la confirmación de la contraseña nueva.";
		}
	}

?>