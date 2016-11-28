<?php
	$nameimg = "images.jpg";

	?>
		<img src="<?php echo $nameimg; ?>" alt="image" /><br><br>
	<?php

	$org_info = getimagesize($nameimg);
	echo $org_info[3] . '<br><br>';
	$rsr_org = imagecreatefromjpeg($nameimg);

	$ancho = $org_info[0];
	$alto = $org_info[1];

	//Aqui es para saber si el ancho y alto son mayor a los designados. 900x360
	$i = 1;
	while ($ancho > 1000 && $alto > 360){
		if ($ancho < 900 || $alto < 360){
			$ancho = $org_info[0];
			$alto = $org_info[1];
		}

		echo "<br/>".$ancho." / 1.".$i;

		$ancho /= "1.".$i;							//Lo que hace es reducir!.
		$alto  /= "1.".$i*1.5;

		echo "<br/>".$ancho." / 1.".$i;
		$i++;
	}

	$rsr_scl = imagescale($rsr_org, $ancho-50, $alto,  IMG_BICUBIC_FIXED);
	// $rsr_scl = imagescale($rsr_org, 240, 96,  IMG_BICUBIC_FIXED);
	imagejpeg($rsr_scl, "imagebfb.jpg");
	imagedestroy($rsr_org);
	imagedestroy($rsr_scl);
	?>
	<img src="imagebfb.jpg" alt="imagebfb" /><br><br>
	<?php
	$scl_info = getimagesize("imagebfb.jpg");
	echo $scl_info[3];
?>