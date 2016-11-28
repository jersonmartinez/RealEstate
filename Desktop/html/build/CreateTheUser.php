<?php
	include ("../../connect_server/connect_server.php");

	$username 		= $_POST['Enter_UserName'];
	$email 			= $_POST['Enter_Email'];
	$PassOne 		= $_POST['Enter_PassWord'];
	$PassTwo 		= $_POST['Enter_RepeatPassWord'];
	$date_log 		= date('Y-n-j');
	$date_log_unix	= time();

	if ($username == "" || $email == "" || $PassOne == "" || $PassTwo == ""){
		echo "Rellene todos los campos!.";
	} else {
		if ($PassOne == $PassTwo){
			$password = password_hash($PassOne, PASSWORD_DEFAULT);

			$InsertUser = "INSERT INTO admin_info (username, date_log, date_log_unix, email) VALUES ('".$username."','".$date_log."','".$date_log_unix."','".$email."');";
			$InsertLog	= "INSERT INTO user_admin (username, password) VALUES ('".$username."','".$password."');";

			if ($Conexion->query($InsertUser)){
				if ($Conexion->query($InsertLog)){

					$path = "../../users/";
					if (!file_exists($path))
						@mkdir($path, 0777);

					$path .= $username."/";
					if (!file_exists($path))
						@mkdir($path, 0777);

					$path_publish = $path;
					$path_agents = $path;

					$path .= "img_perfil/";
					if (!file_exists($path))
						@mkdir($path, 0777);

					$path_publish .= "publish_img/";
					if (!file_exists($path_publish))
						@mkdir($path_publish, 0777);

					$path_agents .= "agents/";
					if (!file_exists($path_agents))
						@mkdir($path_agents, 0777);

					echo "OK";
				}
			}

		} else {
			echo "Verifique la contraseña.";
		}
	}

?>