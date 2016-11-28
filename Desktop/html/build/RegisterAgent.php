<?php
	
	@session_start();
	include ("../../connect_server/connect_server.php");

	$names 			= $_POST['names'];
	$lastnames 		= $_POST['lastnames'];
	$phone_claro 	= $_POST['phone_claro'];
	$phone_movistar = $_POST['phone_movistar'];
	$email_address 	= $_POST['email_address'];
	$location 		= $_POST['location'];
	$description 	= $_POST['description'];

	$folder 		= "users/".$_SESSION['username']."/agents/";
	$src 			= $_POST['path_img'];
	$date_log_unix	= time();
	$username		= $_SESSION['username'];

	$names 			= $Conexion->real_escape_string($names);
	$lastnames 		= $Conexion->real_escape_string($lastnames);
	$phone_claro 	= $Conexion->real_escape_string($phone_claro);
	$phone_movistar = $Conexion->real_escape_string($phone_movistar);
	$email_address 	= $Conexion->real_escape_string($email_address);
	$location 		= $Conexion->real_escape_string($location);
	$description 	= $Conexion->real_escape_string($description);
	$src 			= $Conexion->real_escape_string($src);

	$Q = "INSERT INTO agents (id_agent, names, lastnames, phone_claro, phone_movistar, email, location, description, folder, src, date_log, date_log_unix, username) value ('','".$names."','".$lastnames."','".$phone_claro."','".$phone_movistar."','".$email_address."','".$location."','".$description."','".$folder."','".$src."',NOW(),'".$date_log_unix."','".$username."');";

	if ($Conexion->query($Q))
		echo "OK";

?>