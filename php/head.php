<?php include ("Desktop/connect_server/connect_server.php"); ?>
<title>Belly Real Estate</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="assets/style.css"/>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="assets/script.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css">


<!-- Owl stylesheet -->
	<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
	<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css"/>

<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<?php
	function getIpAddr(){
        if (!empty(@$_SERVER['HTTP_CLIENT_IP']))
            return @$_SERVER['HTTP_CLIENT_IP'];
        else if (!empty(@$_SERVER['HTTP_X_FORWARDED_FOR']))
            return @$_SERVER['HTTP_X_FORWARDED_FOR'];
        return @$_SERVER['REMOTE_ADDR'];
    }

   	$Conexion->query("INSERT INTO count_visit (id, ip) VALUES ('','".getIpAddr()."');");
?>

<!-- <script src="slider/sliderengine/jquery.js"></script> -->
<!-- <script src="slider/sliderengine/amazingslider.js"></script> -->
<!-- <script src="slider/sliderengine/initslider-0.js"></script> -->
<!-- <link rel="stylesheet" type="text/css" href="slider/sliderengine/amazingslider-0.css"> -->