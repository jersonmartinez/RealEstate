<?php

	include ("../../connect_server/connect_server.php");

	$R = $Conexion->query("SELECT * FROM tmp_img;");
	while ($Row = $R->fetch_array(MYSQLI_ASSOC)){
		?>
			<div class="container_imgnow">
				<img onclick="javascript: OptionsImageSelected(this);" src="<?php echo "../".$Row['folder'].$Row['src']; ?>" />
			</div>
		<?php
	}
?>