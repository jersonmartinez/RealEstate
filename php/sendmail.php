<?php
	include ("../Desktop/connect_server/connect_server.php");
	require_once "../vendor/autoload.php";

	$id_art 		= $_POST['sus_idArt'];
	$fullname 		= $_POST['sus_fullname'];
	$email 			= $_POST['sus_email'];
	$phone 			= $_POST['sus_numberphone'];
	$message 		= $_POST['sus_message'];
	$title_art 		= $_POST['sus_article'];

	$KnowEmailAdmin = $Conexion->query("SELECT email, whoami FROM contact_us ORDER BY id DESC LIMIT 1;")->fetch_array(MYSQLI_ASSOC);

	//PHPMailer Object
	$mail = new PHPMailer;

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mx1.hostinger.es';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = $KnowEmailAdmin['email'];                 // SMTP username
	$mail->Password = 'Windows10';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                 // TCP port to connect to

	//echo "The data is: ".$KnowEmailMSG['email']." and whoami: ".$KnowEmailMSG['whoami'];

	$mail->setFrom($email, $fullname);
	$mail->addAddress($KnowEmailAdmin['email'], $KnowEmailAdmin['whoami']);     // Add a recipient
	$mail->addReplyTo('sidemasterdelfuturo@gmail.com', 'Information');
	

	$mail->Subject = $title_art;
	$mail->Body = $message;
	$mail->AltBody = "Mi número de teléfono es: ".$phone;

	$Q = "INSERT INTO sus_message (id, fullname, email, phone, message, id_art, date_log_unix, title_art) VALUES ('','".$fullname."','".$email."','".$phone."','".$message."','".$id_art."','".time()."','".$title_art."');";
	
	if(!$mail->send()){
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		if ($Conexion->query($Q)){
	    	echo "OK";
		} else {
			echo "Fail";
		}
	}

?>