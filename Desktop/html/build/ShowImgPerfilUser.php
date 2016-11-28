<?php
	include ("../../connect_server/connect_server.php");
	$username = $_POST['nombre_de_usuario'];

	$R = $Conexion->query("SELECT * FROM img_perfil WHERE username='".$username."';");

	if ($R->num_rows > 0){
		$R = $R->fetch_array(MYSQLI_ASSOC);

		?>
			<div style="width: 230px; height: 230px; border-radius: 50% 50%; background: url('<?php echo "../".$R['folder'].$R['src']; ?>'); background-size:cover;"></div>
		<?php

	} else {
		?>
			<div style="width: 230px; height: 230px; border-radius: 50% 50%; background: url('../img/img-default/bg_default.jpg'); background-size:cover;"></div>
		<?php
	}
?>