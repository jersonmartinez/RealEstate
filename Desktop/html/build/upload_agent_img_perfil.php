<?php
	if ($_FILES["new_imagen"]["error"] > 0){
		echo "Ha ocurrido un error";
	} else {
		$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
		$limite_kb = 10000;

		if (in_array($_FILES['new_imagen']['type'], $permitidos) && $_FILES['new_imagen']['size'] <= $limite_kb * 1024){
			
			@session_start();
			$ruta = "../../users/".$_SESSION['username']."/agents/" . $_FILES['new_imagen']['name'];
			
			if (!file_exists($ruta)){
				
				$resultado = @move_uploaded_file($_FILES["new_imagen"]["tmp_name"], $ruta);
				if ($resultado){

					@chmod($ruta, 0777);

					$path = "users/".$_SESSION['username']."/agents/";
					?>
						<img class="profile-img" src="<?php echo "../".$path.$_FILES['new_imagen']['name']; ?>" />
					<?php
				} else {
					echo "Ocurrió un error al mover el archivo.";
				}
			} else {
				echo $_FILES['new_imagen']['name'] . ", este archivo existe, cambie el nombre y vuelva a intentarlo";
			}
		} else {
			echo "Archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		}
	}
?>