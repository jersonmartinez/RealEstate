<?php
	include ("../../connect_server/connect_server.php");

	$Dato = $Conexion->query("SELECT * FROM about_us ORDER BY id DESC LIMIT 1");
	echo $Dato->fetch_array(MYSQLI_ASSOC)['content'];
?>