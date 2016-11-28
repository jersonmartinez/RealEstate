<?php
	include ("../../connect_server/connect_server.php");
	$usr = $_POST['nombre_de_usuario'];

	if ($Conexion->query("DELETE FROM admin_info WHERE username='".$usr."';")){
		rrmdir("../../users/".$usr."/");
		echo "OK";
	}

	function rrmdir($dir) {
	    if (is_dir($dir)) {
	      $objects = scandir($dir);
	      foreach ($objects as $object) {
	        if ($object != "." && $object != "..") {
	          if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
	        }
	      }
	      reset($objects);
	      rmdir($dir);
	    }
  	}
?>