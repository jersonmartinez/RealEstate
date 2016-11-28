<?php
	include ("../../connect_server/connect_server.php");

	$new_email = $_POST['new_email_address'];

	@session_start();
	if ($new_email != ""){
		if ($Conexion->query("UPDATE admin_info SET email='".$new_email."' WHERE username='".$_SESSION['username']."';")){
			echo "OK";
		}
	}
?>