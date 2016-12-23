<?php
	include ("../../connect_server/connect_server.php");
	require_once "../../../vendor/autoload.php";


	@session_start();
	$username 		= @$_SESSION['username'];
	$id_msg 		= $_POST['id_sms'];
	$answer_message = $_POST['answer_message'];

	$KnowEmailMSG = $Conexion->query("SELECT email, fullname, title_art FROM sus_message WHERE id='".$id_msg."' LIMIT 1;")->fetch_array(MYSQLI_ASSOC);

	$KnowEmailAdmin = $Conexion->query("SELECT email, whoami FROM contact_us ORDER BY id DESC LIMIT 1;")->fetch_array(MYSQLI_ASSOC);

	//PHPMailer Object
	$mail = new PHPMailer;

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mx1.hostinger.es';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = $KnowEmailMSG['email'];                 // SMTP username
	$mail->Password = 'Windows10';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	//From email address and name
	$mail->From = $KnowEmailAdmin['email'];
	$mail->FromName = $KnowEmailAdmin['whoami'];

	//To address and name
	$mail->addAddress($KnowEmailMSG['email'], $KnowEmailMSG['fullname']);

	//Address to which recipient will reply, aquí debería ir el del cliente suscrito.
	$mail->addReplyTo("sidemasterdelfuturo@gmail.com", "Responder");

	//Send HTML or Plain Text email
	$mail->isHTML(true);

	$mail->Subject = $KnowEmailMSG['title_art'];
	$mail->Body = $answer_message;
	//$mail->AltBody = "Mi número de teléfono es: ".$phone;

	$Q = "INSERT INTO answer_message (id, username, message, id_msg, date_time_unix) VALUES ('','".$username."','".$answer_message."','".$id_msg."', '".time()."');";

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