<?php
	include ("../../connect_server/connect_server.php");

	$id_art = $_POST['ValueArticleByID'];

	$X = $Conexion->query("SELECT * FROM publish_img WHERE id_art='".$id_art."';");

	while ($Y = $X->fetch_array(MYSQLI_ASSOC)){
		unlink("../../".$Y['folder'].$Y['src']);
	}

	if ($Conexion->query("DELETE FROM article WHERE id_art='".$id_art."';"))
		echo "OK";
?>