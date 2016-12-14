<?php
	include ("../../connect_server/connect_server.php");
	$src = trim(urldecode($_POST['MyNameImgDelete']));

	$R = $Conexion->query("SELECT * FROM tmp_img WHERE src='".$src."' LIMIT 1;")->fetch_array(MYSQLI_ASSOC);
	chmod("../../".$R['folder'].$R['src'], 0777);
	unlink("../../".$R['folder'].$R['src']);

	$Q = "DELETE FROM tmp_img WHERE src='".$src."';";

	if ($Conexion->query($Q))
		echo "OK";

?>