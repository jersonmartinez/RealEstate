<?php
	include ("../../connect_server/connect_server.php");
	@session_start();

	$username = $_POST['new_user_perfil'];

	$R = $Conexion->query("SELECT * FROM user_admin WHERE username='".$username."';");

	if ($R->num_rows > 0){
		echo "Fail";
	} else {
		if ($Conexion->query("UPDATE admin_info SET username='".$username."' WHERE username='".$_SESSION['username']."';")){
			$_SESSION['username'] = $username;
			echo "OK";
		}
	}
?>