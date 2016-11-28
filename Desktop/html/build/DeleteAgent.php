<?php
	include ("../../connect_server/connect_server.php");
	
	$id = $Conexion->real_escape_string($_POST['delete_id']);
	
	$R = $Conexion->query("SELECT * FROM agents WHERE id_agent='".$id."' LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
	unlink("../../".$R['folder'].$R['src']);

	$Q = "DELETE FROM agents WHERE id_agent='".$id."';";
	if ($Conexion->query($Q))
		echo "OK";

?>