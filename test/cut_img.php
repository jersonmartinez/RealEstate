<?php
	// Create a blank image and add some text
	$ini_filename = 'imagebfb.jpg';
	$im = imagecreatefromjpeg($ini_filename);

	$ini_x_size = getimagesize($ini_filename )[0];
	$ini_y_size = getimagesize($ini_filename )[1];

	//the minimum of xlength and ylength to crop.
	$crop_measure = min($ini_x_size, $ini_y_size);

	// Set the content type header - in this case image/jpeg
	//header('Content-Type: image/jpeg');

	$to_crop_array = array('x' => 0 , 'y' => 130, 'width' => 900, 'height'=> 360);
	$thumb_im = imagecrop($im, $to_crop_array);

	imagejpeg($thumb_im, 'thumb.jpeg', 100);

	?>
	<img src="thumb.jpeg" /><br><br>
	<?php
?>