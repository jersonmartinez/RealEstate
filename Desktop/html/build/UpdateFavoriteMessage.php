<?php
	include ("../../connect_server/connect_server.php");

	$Id = $_POST['ChangeIconFavId'];

	$Fav = $Conexion->query("SELECT favorite FROM sus_message WHERE id='".$Id."';");

	if ($Fav->num_rows > 0){
		$FavActive = $Fav->fetch_array(MYSQLI_ASSOC);
		if ($FavActive['favorite'] == "0" || $FavActive['favorite'] == ""){
			$MakeQuery = $Conexion->query("UPDATE sus_message SET favorite='1' WHERE id='".$Id."';");
			if ($MakeQuery){
				echo "<i class='fa fa-star fa-lg' onclick='javascript: UpdateFavoriteMessage();' title='Agregado como favorito' aria-hidden='true' style='float: left; cursor: pointer;'></i>";
			} else {
				echo "Fail";
			}
		} else if ($FavActive['favorite'] == "1"){
			$MakeQuery = $Conexion->query("UPDATE sus_message SET favorite='0' WHERE id='".$Id."';");
			if ($MakeQuery){
				echo "<i class='fa fa-star-half-o fa-lg' onclick='javascript: UpdateFavoriteMessage();' title='Agregar a favoritos' aria-hidden='true' style='float: left; cursor: pointer;'></i>";
			} else {
				echo "Fail";
			}
		}
	} else {
		$MakeQuery = $Conexion->query("UPDATE sus_message SET favorite='1' WHERE id='".$Id."';");
		if ($MakeQuery){
			echo "<i class='fa fa-star fa-lg' onclick='javascript: UpdateFavoriteMessage();' title='Agregado como favorito' aria-hidden='true' style='float: left; cursor: pointer;'></i>";
		} else {
			echo "Fail";
		}
	}
	
?>