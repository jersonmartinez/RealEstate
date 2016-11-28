<?php
	include ("../../connect_server/connect_server.php");

	$NewD = $Conexion->query("SELECT * FROM property_type;");
	if ($NewD->num_rows > 0){
		?>
			<optgroup label="Tipo de propiedad">
		<?php
		while ($R = $NewD->fetch_array(MYSQLI_ASSOC)){
			?>
				 <option value="<?php echo $R['name_type']; ?>"><?php echo $R['name_type']; ?></option>
			<?php
		}
		?>
			</optgroup>
		<?php
	}
?>