<?php
	include ("../../connect_server/connect_server.php");

	$recibe = $_POST['write_aboutUs'];

	if ($recibe != ""){
		if ($Conexion->query("INSERT INTO about_us (id, content) VALUES ('','".$recibe."');")){
			echo "OK";
		}
	}


?>