<?php
	@session_start();
	$ruta = "../../users/".$_SESSION['username']."/publish_img/"; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
	$path = "users/".$_SESSION['username']."/publish_img/";
	$mensage = ''; //Declaramos una variable mensaje quue almacenara el resultado de las operaciones.

	include ("../../connect_server/connect_server.php");

	foreach ($_FILES as $key) { //Iteramos el arreglo de archivos
		if ($key['error'] == UPLOAD_ERR_OK ) { //Si el archivo se paso correctamente Ccontinuamos 
			$NombreOriginal = $key['name'];//Obtenemos el nombre original del archivo
			$temporal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
			$Destino = $ruta.$NombreOriginal;	//Creamos una ruta de destino con la variable ruta y el nombre original del archivo	
			
			if (move_uploaded_file($temporal, $Destino)){
				if (!$Conexion->query("INSERT INTO publish_img (id_img, folder, src, date_log, date_log_unix, id_art) VALUES ('','".$path."','".$NombreOriginal."',NOW(),'".time()."','".$_SESSION['id_art']."');")){
					$mensage = "<br/>No se inserto la imagen: ".$NombreOriginal."</br>";
				}

				@chmod($Destino, 0777);

			} //Movemos el archivo temporal a la ruta especificada		
		}

		if ($key['error']=='') { //Si no existio ningun error, retornamos un mensaje por cada archivo subido
			//
		}
		
		if ($key['error']!='') { //Si existio algún error retornamos un el error por cada archivo.
			$mensage .= '-> No se pudo subir el archivo <b>'.$NombreOriginal.'</b> debido al siguiente Error: \n'.$key['error']; 
		}
	}

	echo $mensage;
?>