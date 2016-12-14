<?php
	class TheCodeBrain extends mysqli {
		public function __construct($host, $user, $pass, $db){
			@parent::__construct($host, $user, $pass, $db);
		}
	}

<<<<<<< HEAD
	@$Conexion = new TheCodeBrain("127.0.0.1", "root", "", "re");

=======
	@$Conexion = new TheCodeBrain("127.0.0.1", "SideMaster", "Inform@tico", "re");
	
>>>>>>> 92034c5d3e7398f4cf6067131ecb51e4645b0bb7
	if ($Conexion->connect_error)
		$error = true;
	else
		$error = false;

	if (!@$Conexion->query("SET NAMES 'utf8'"))
		$error = true;
?>