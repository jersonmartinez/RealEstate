<?php
	include ("connect_server.php");

	$tables = array('admin_info' => "CREATE TABLE admin_info (
			username VARCHAR(50) NOT NULL, 
			date_log DATE NOT NULL, 
			date_log_unix VARCHAR(100) NOT NULL, 
			email VARCHAR(100) NOT NULL,
			PRIMARY KEY (username)
		)", 
		'user_admin' => "CREATE TABLE user_admin (
			username VARCHAR(50) NOT NULL, 
			password VARCHAR(60) NOT NULL, 
			FOREIGN KEY (username) REFERENCES admin_info(username) ON UPDATE CASCADE ON DELETE CASCADE
		)",
		'agents' => "CREATE TABLE agents (
			id_agent INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, 
			names VARCHAR(100) NOT NULL, 
			lastnames VARCHAR(100) NOT NULL, 
			phone_claro VARCHAR(12),
			phone_movistar VARCHAR(12),
			email VARCHAR(100) UNIQUE NOT NULL,
			location VARCHAR(500) NOT NULL, 
			description VARCHAR(1000), 
			folder VARCHAR(300),
			src VARCHAR(500),
			#-- Tenía un DEFAULT NOW() Problema en c9.io -- 
			date_log DATETIME NOT NULL,
			date_log_unix VARCHAR(50) NOT NULL,
			username VARCHAR(50) NOT NULL,
			FOREIGN KEY (username) REFERENCES admin_info(username) ON UPDATE CASCADE ON DELETE CASCADE
		)",
		'article' => "CREATE TABLE article (
			id_art INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, 

			title VARCHAR(500) NOT NULL, 
			content_es MEDIUMTEXT NOT NULL, 
			content_en MEDIUMTEXT,
			
			price VARCHAR(25) NOT NULL,
			department VARCHAR(50) NOT NULL, 
			city VARCHAR(50) NOT NULL, 
			local_address VARCHAR(255) NOT NULL, 

			id_agent INT UNSIGNED NOT NULL, 

			business_type VARCHAR(30) NOT NULL, 
			property_type VARCHAR(30) NOT NULL,
			property_state VARCHAR(30) NOT NULL,

			bed_room INT NOT NULL,
			living_room INT NOT NULL,
			parking INT NOT NULL,
			kitchen INT NOT NULL,

			longitude VARCHAR(50), 
			latitude VARCHAR(50), 
	
			#-- Tenía un DEFAULT NOW() Problema en c9.io -- 
			date_log DATETIME NOT NULL,
			date_log_unix VARCHAR(50) NOT NULL,
			username VARCHAR(50) NOT NULL, 

			#Hay que prestar atención a esta línea.
			FOREIGN KEY (id_agent) REFERENCES agents(id_agent) ON UPDATE CASCADE ON DELETE CASCADE,
			FOREIGN KEY (username) REFERENCES admin_info(username) ON UPDATE CASCADE ON DELETE CASCADE
		)", 
		'publish_img' => "CREATE TABLE publish_img (
			id_img INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
			folder VARCHAR(250) NOT NULL,
			src VARCHAR(250) UNIQUE NOT NULL,
			#-- Tenía un DEFAULT NOW() Problema en c9.io -- 
			date_log DATETIME NOT NULL,
			date_log_unix VARCHAR(50) NOT NULL,
			id_art INT UNSIGNED NOT NULL,
			FOREIGN KEY (id_art) REFERENCES article(id_art) ON UPDATE CASCADE ON DELETE CASCADE
		)",
		'tmp_img' => "CREATE TABLE tmp_img (
			id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, 
			folder VARCHAR(250) NOT NULL, 
			src VARCHAR(250) UNIQUE NOT NULL, 
			#-- Tenía un DEFAULT NOW() Problema en c9.io -- 
			created_at DATETIME NOT NULL
		)", 
		'img_perfil' => "CREATE TABLE img_perfil (
			id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, 
			folder VARCHAR(250) NOT NULL, 
			src VARCHAR(250) UNIQUE NOT NULL, 
			#-- Tenía un DEFAULT NOW() Problema en c9.io -- 
			created_at DATETIME NOT NULL, 
			username VARCHAR(50) NOT NULL, 
			FOREIGN KEY (username) REFERENCES admin_info(username) ON UPDATE CASCADE ON DELETE CASCADE
		)",
		'property_type' => "CREATE TABLE property_type (
			id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, 
			name_type VARCHAR(100) NOT NULL
		)",
		'count_visit' => "CREATE TABLE count_visit (
			id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
			ip VARCHAR(35) NOT NULL UNIQUE
		)", 
		'suscriptions' => "CREATE TABLE suscriptions (
			id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
			email VARCHAR(255) NOT NULL, 
			date_log DATE, 
			date_log_unix VARCHAR(100),
			viewed VARCHAR(5)
		)",
		'about_us' => "CREATE TABLE about_us (
			id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
			content MEDIUMTEXT
		)", 
		'contact_us' => "CREATE TABLE contact_us (
			id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
			whoami VARCHAR(500), 
			location VARCHAR(500), 
			email VARCHAR(255), 
			phone VARCHAR(50), 
			fb VARCHAR(500), 
			tt VARCHAR(500), 
			gp VARCHAR(500), 
			li VARCHAR(500)
		)", 
		'sus_message' => "CREATE TABLE sus_message (
			id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
			fullname VARCHAR(255) NOT NULL, 
			email VARCHAR(255) NOT NULL, 
			phone VARCHAR(20) NOT NULL, 
			message VARCHAR(5000) NOT NULL, 
			id_art INT UNSIGNED NOT NULL, 
			date_log_unix VARCHAR(30) NOT NULL, 
			title_art VARCHAR(1000) NOT NULL,
			favorite INT
		)", 
		'answer_message' => "CREATE TABLE answer_message (
			id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, 
			username VARCHAR(50) NOT NULL, 
			message VARCHAR(1000) NOT NULL, 
			id_msg INT UNSIGNED NOT NULL, 
			date_time_unix VARCHAR(30) NOT NULL, 
			favorite INT
		)", 
		'simple_contact' => "CREATE TABLE simple_contact (
			id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, 
			fullname VARCHAR(50) NOT NULL, 
			email VARCHAR(255) NOT NULL, 
			phone VARCHAR(20) NOT NULL, 
			message VARCHAR(1000)
		)"
	);

	$cont = 0; $errors = 0; 
	foreach ($tables as $key => $value){
		if (!$Conexion->query($tables[$key])){
			echo "Ocurrió un problema en la tabla #:<b>".($cont + 1)."</b>, Tabla: <b>".$key."</b><br/>\n";
			$errors++;
		}
		$cont++;
	}

	$username = "Side Master";
	$password = password_hash("Programador", PASSWORD_DEFAULT);

	$UserRootInfo = "INSERT INTO admin_info (username, date_log, date_log_unix, email) VALUES ('Side Master','".date('Y-n-j')."','".time()."', 'developer@sidemasters.com');";
	$UserRoot = "INSERT INTO user_admin (username, password) VALUES ('".$username."','".$password."');";

	if ($Conexion->query($UserRootInfo)){
		if ($Conexion->query($UserRoot)){

			$path = "../users/";
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

			echo "\nSe han creado <b>".($cont - $errors)."</b> tablas de manera correcta!.\n";
		}
	}
?>