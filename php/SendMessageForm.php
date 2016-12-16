<?php
	include ("../Desktop/connect_server/connect_server.php");

	$fullname 	= $_POST['fullname'];
	$email 		= $_POST['email'];
	$phone 		= $_POST['phone'];
	$message 	= $_POST['message'];

	$Conexion->query("INSERT INTO simple_contact (id, fullname, email, phone, message) VALUES ('','".$fullname."','".$email."','".$phone."','".$message."');");

	header("Location: ../");
?>