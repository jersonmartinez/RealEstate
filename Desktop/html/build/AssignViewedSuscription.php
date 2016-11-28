<?php
	include ("../../connect_server/connect_server.php");

	$email = $_POST['AhiVaElEmail'];

	if ($Conexion->query("UPDATE suscriptions SET viewed='Visto' WHERE email='".$email."'")){
		echo "OK";
	}
?>