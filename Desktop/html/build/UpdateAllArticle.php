<?php
	include ("../../connect_server/connect_server.php");

	$id_art 		= $_POST['Send_ValueArticleByID'];

	$title 			= $_POST['Send_InsertTitleArticle'];
	$content_es 	= $_POST['Send_trumbowyg-demo'];

	$price 			= $_POST['Send_precio_dolar'];
	$department 	= $_POST['Send_departamento_local'];
	$city 			= $_POST['Send_ciudad_local'];
	$local_address 	= $_POST['Send_direccion_local'];

	$id_agent 		= $_POST['Send_select_agent'];

	$business_type 	= $_POST['Send_select_business_type'];
	$property_type 	= $_POST['Send_select_property_type'];
	$property_state = $_POST['Send_select_property_state'];

	$bed_room 		= $_POST['Send_select_bed_room'];
	$living_room 	= $_POST['Send_select_living_room'];
	$parking 		= $_POST['Send_select_parking'];
	$kitchen 		= $_POST['Send_select_kitchen_now'];

	$longitude 		= $_POST['Send_coord_longitude'];
	$latitude 		= $_POST['Send_coord_latitude'];

	if ($content_es == ""){
		$content_es = $Conexion->query("SELECT content_es FROM article WHERE id_art='".$id_art."';")->fetch_array(MYSQLI_ASSOC)['content_es'];
	}

	$X = "UPDATE article SET title='".$title."', content_es='".$content_es."', price='".$price."', department='".$department."', city='".$city."', local_address='".$local_address."', id_agent='".$id_agent."', business_type='".$business_type."', property_type='".$property_type."', property_state='".$property_state."', bed_room='".$bed_room."', living_room='".$living_room."', parking='".$parking."', kitchen='".$kitchen."', longitude='".$longitude."', latitude='".$latitude."' WHERE id_art='".$id_art."';";

	if ($Conexion->query($X))
		echo "OK";

?>