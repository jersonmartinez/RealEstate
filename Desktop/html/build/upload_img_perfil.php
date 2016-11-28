<?php
	if ($_FILES["imagen"]["error"] > 0){
		echo "Ha ocurrido un error";
	} else {
		$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
		$limite_kb = 10000;

		if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
			
			@session_start();
			$ruta = "../../users/".$_SESSION['username']."/img_perfil/" . $_FILES['imagen']['name'];
			
			if (!file_exists($ruta)){
				
				$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
				if ($resultado){

					@chmod($ruta, 0777);

					include ("../../connect_server/connect_server.php");
					$path = "users/".$_SESSION['username']."/img_perfil/";
					$Q = "INSERT INTO img_perfil (id, folder, src, created_at, username) VALUE ('','".$path."','".$_FILES['imagen']['name']."',NOW(),'".$_SESSION['username']."');";
					if ($Conexion->query($Q)){
						?>
							<img class="profile-img" src="<?php echo "../".$path.$_FILES['imagen']['name']; ?>" />
						<?php
					}
				} else {
					echo "Ocurrió un error al mover el archivo.";
				}
			} else {
				echo $_FILES['imagen']['name'] . ", este archivo existe, cambie el nombre y vuelva a intentarlo.";
			}
		} else {
			echo "Archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		}
	}
?>