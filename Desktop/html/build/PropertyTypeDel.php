<?php
	include ("../../connect_server/connect_server.php");

	$id = $_POST['DelTagPT'];

	if ($Conexion->query("DELETE FROM property_type WHERE id='".$id."';")){
		$NewD = $Conexion->query("SELECT * FROM property_type;");
		if ($NewD->num_rows > 0){
			while ($R = $NewD->fetch_array(MYSQLI_ASSOC)){
				?>
					<span class="label label-primary" style="font-size: 16px; margin: 10px 10px 0 0; display: inline-table;" ><?php echo $R['name_type']; ?>

						<i class="fa fa-times" style="margin: 0 5px; cursor: pointer;" title="Eliminar" aria-hidden="true" onclick="javascript: DeleteTagPropertyType('<?php echo $R['id'] ?>');" ></i>
					</span>
				<?php
			}
		}
	}
?>