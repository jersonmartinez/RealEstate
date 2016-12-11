<?php

	require_once "../vendor/autoload.php";

	//PHPMailer Object
	$mail = new PHPMailer;

	//From email address and name
	$mail->From = $_POST['sus_email'];
	$mail->FromName = $_POST['sus_fullname'];

	//To address and name
	$mail->addAddress("jersonmartinezsm@gmail.com", "Jerson Martínez");
	// $mail->addAddress("jersonmartinezsm@gmail.com"); //Recipient name is optional

	//Address to which recipient will reply
	$mail->addReplyTo("sidemasterdelfuturo@gmail.com", "Responder");

	//CC and BCC optional.
	// $mail->addCC("cc@example.com");
	// $mail->addBCC("bcc@example.com");

	//Send HTML or Plain Text email
	$mail->isHTML(true);

	$mail->Subject = $_POST['sus_article'];
	$mail->Body = $_POST['sus_message'];
	$mail->AltBody = "Esta es la versión en texto plano";

	if(!$mail->send())
	    echo "Mailer Error: " . $mail->ErrorInfo;
	else 
	    echo "OK";
?>