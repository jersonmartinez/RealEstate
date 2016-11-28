<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == "" || $password == ""){
		if ($username == "" && $password != ""){
			echo "Escriba el nombre de usuario.";
		} else if ($username != "" && $password == "") {
			echo "Escriba la contraseña.";
		} else {
			echo "Escriba sus credenciales.";
		}
	} else {
		include ("../../Desktop/connect_server/connect_server.php");

		$Query = "SELECT * FROM user_admin WHERE username='".$username."';";
		$Result = $Conexion->query($Query);

		if ($Result->num_rows == 1){
			$ObjR = $Result->fetch_array(MYSQLI_ASSOC);

			if (password_verify($password, $ObjR['password'])){

				$QEmail = $Conexion->query("SELECT email FROM admin_info WHERE username='".$username."';")->fetch_array(MYSQLI_ASSOC);

				@session_start();
				@$_SESSION['login'] = 1;
				@$_SESSION['username'] = $username;
				@$_SESSION['user_email'] = $QEmail['email'];
				echo "OK";
			} else {
				echo "Contraseña incorrecta!.";
			}
		} else if ($Result->num_rows == 0) {
			echo "Usuario no encontrado, corrija sus credenciales.";
		}
	}

?>