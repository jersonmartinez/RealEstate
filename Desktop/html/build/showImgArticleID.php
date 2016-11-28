<?php
	include ("../../connect_server/connect_server.php");
	$id = $_POST['ValueArticleByID'];

	@session_start();
	$_SESSION['id_art'] = $id;


	$R = $Conexion->query("SELECT * FROM publish_img WHERE id_art='".$id."';");
	while ($Row = $R->fetch_array(MYSQLI_ASSOC)){
		?>
			<div class="container_imgnow">
				<img onclick="javascript: SelectImgArticle(this);" src="<?php echo "../".$Row['folder'].$Row['src']; ?>" />
			</div>
		<?php
	}
?>