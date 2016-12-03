<?php
	include ("../../connect_server/connect_server.php");
	
	$whoami 	= $Conexion->real_escape_string($_POST['tb_AboutTitle']);
	$location 	= $Conexion->real_escape_string($_POST['tb_AboutLocation']);
	$email 		= $Conexion->real_escape_string($_POST['tb_AboutEmail']);	
	$phone 		= $Conexion->real_escape_string($_POST['tb_AboutPhone']);	
	
	$fb 		= $Conexion->real_escape_string($_POST['tb_AboutFBAddress']);	
	$tt 		= $Conexion->real_escape_string($_POST['tb_AboutTTAddress']);	
	$gp 		= $Conexion->real_escape_string($_POST['tb_AboutGPAddress']);	
	$li 		= $Conexion->real_escape_string($_POST['tb_AboutLIAddress']);	

	$Q = "INSERT INTO contact_us (id, whoami, location, email, phone, fb, tt, gp, li) VALUES ('','".$whoami."','".$location."','".$email."','".$phone."','".$fb."','".$tt."','".$gp."','".$li."');";

	if ($Conexion->query($Q)){
		echo "OK";
	} else {
		echo "Fail";
	}

?>