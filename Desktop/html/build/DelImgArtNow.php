<?php
	include ("../../connect_server/connect_server.php");
	$id = $_POST['newidimgdel'];

	$src = $_POST['MynImgDel'];

	$result = $Conexion->query("SELECT * FROM publish_img WHERE src='".$src."';");
	if ($result->num_rows > 0){
		$r = $result->fetch_array(MYSQLI_ASSOC);
		
		chmod("../../".$r['folder'].$src, 0777);
		unlink("../../".$r['folder'].$src);

		if ($Conexion->query("DELETE FROM publish_img WHERE src='".$src."';")){
			echo "OK";
		} else {
			echo "Algo va mal";
		}
	} else {
		echo "No hay datos";
	}

?>