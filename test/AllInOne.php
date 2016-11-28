<?php
	$nameimg = "images.jpg";

	echo "<b>This is the image!.</b><br/>";
	?>
		<img src="<?php echo $nameimg; ?>" alt="image" /><br><br>
	<?php

	$InfoIMG = getimagesize($nameimg);
	$echo $InfoIMG[3]."<br/><br/>";

	$createImg = imagecreatefromjpeg($nameimg);

	$ancho = $InfoIMG[0];
	$alto = $InfoIMG[1];

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

	$imgScale = imagescale($createImg, $ancho-50, $alto, IMG_BICUBIC_FIXED);

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