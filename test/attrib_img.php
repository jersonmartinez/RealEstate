<?php

	$img = getimagesize("images.jpg");

	$ancho = $img[0];
	$alto = $img[1];

	echo "Ancho: ",$ancho, " Algo: ", $alto;	

?>