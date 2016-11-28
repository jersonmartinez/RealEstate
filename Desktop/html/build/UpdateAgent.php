<?php
	include ("../../connect_server/connect_server.php");
	
	$id 			= $Conexion->real_escape_string($_POST['true_id']);
	$names 			= $Conexion->real_escape_string($_POST['true_names']);
	$lastnames 		= $Conexion->real_escape_string($_POST['true_lastnames']);
	$phone_claro 	= $Conexion->real_escape_string($_POST['true_phone_claro']);
	$phone_movistar = $Conexion->real_escape_string($_POST['true_phone_movistar']);
	$email_address 	= $Conexion->real_escape_string($_POST['true_email_address']);
	$location 		= $Conexion->real_escape_string($_POST['true_location']);
	$description 	= $Conexion->real_escape_string($_POST['true_description']);
	$src 			= $Conexion->real_escape_string($_POST['true_path_img']);
	
	if ($src == ""){
		$Q = "UPDATE agents SET names='".$names."', lastnames='".$lastnames."', phone_claro='".$phone_claro."', phone_movistar='".$phone_movistar."', email='".$email_address."', location='".$location."', description='".$description."' WHERE id_agent='".$id."';";
	} else {
		$Q = "UPDATE agents SET names='".$names."', lastnames='".$lastnames."', phone_claro='".$phone_claro."', phone_movistar='".$phone_movistar."', email='".$email_address."', location='".$location."', description='".$description."', src='".$src."' WHERE id_agent='".$id."';";

	}

	if ($Conexion->query($Q))
		echo "OK";

?>