<?php
	
	@session_start();
	include ("../../connect_server/connect_server.php");

	$title 				= $Conexion->real_escape_string(trim($_POST['art_title']));
	$content_es			= trim($_POST['art_content']);
	$price 				= $Conexion->real_escape_string(trim($_POST['art_price']));
	$department 		= $Conexion->real_escape_string(trim($_POST['art_department']));
	$city 				= $Conexion->real_escape_string(trim($_POST['art_city']));
	$local_address 		= $Conexion->real_escape_string(trim($_POST['art_local_address']));
	$agent 				= $Conexion->real_escape_string(trim($_POST['art_agent']));
	$business_type 		= $Conexion->real_escape_string(trim($_POST['art_business_type']));
	$property_type 		= $Conexion->real_escape_string(trim($_POST['art_property_type']));
	$property_state 	= $Conexion->real_escape_string(trim($_POST['art_property_state']));
	$bed_room 			= $Conexion->real_escape_string(trim($_POST['art_bed_room']));
	$living_room 		= $Conexion->real_escape_string(trim($_POST['art_living_room']));
	$parking 			= $Conexion->real_escape_string(trim($_POST['art_parking']));
	$kitchen 			= $Conexion->real_escape_string(trim($_POST['art_kitchen_now']));
	$coord_latitude		= $_POST['coord_latitude'];
	$coord_longitude	= $_POST['coord_longitude'];

	$date_log_unix	= time();
	$username		= $_SESSION['username'];
	
	$Q = "INSERT INTO article (id_art, title, content_es, content_en, price, department, city, local_address, id_agent, business_type, property_type, property_state, bed_room, living_room, parking, kitchen, longitude, latitude, date_log, date_log_unix, username) VALUES ('','".$title."','".$content_es."','".$content_es."','".$price."','".$department."','".$city."','".$local_address."','".$agent."','".$business_type."','".$property_type."','".$property_state."','".$bed_room."','".$living_room."','".$parking."','".(int)$kitchen."','".$coord_longitude."','".$coord_latitude."',NOW(),'".$date_log_unix."','".$username."');";

	if ($Conexion->query($Q)){
		
		$AskIDArticle = $Conexion->query("SELECT id_art FROM article ORDER BY id_art DESC LIMIT 1;")->fetch_array(MYSQLI_ASSOC);

		$tmp_img = $Conexion->query("SELECT * FROM tmp_img;");

		if ($tmp_img->num_rows > 0){
			while ($GetTmpImg = $tmp_img->fetch_array(MYSQLI_ASSOC)){
				$SetData = "INSERT INTO publish_img (id_img, folder, src, date_log, date_log_unix, id_art) VALUES ('','".$GetTmpImg['folder']."','".$GetTmpImg['src']."',NOW(),'".time()."','".$AskIDArticle['id_art']."');";
				if (!$Conexion->query($SetData)){
					echo "Ocurrió un error al intentar insertar: ".$GetTmpImg['src'].", en el artículo con el ID: ".$AskIDArticle['id_art'];
				} else {
					if (!$Conexion->query("DELETE FROM tmp_img WHERE id='".$GetTmpImg['id']."';")){
						echo "Problema al intentar eliminar el registro con id: ".$GetTmpImg['id'].", de la tabla tmp_img.";
					}
				}
			}
		}
	}

	echo "OK";

?>