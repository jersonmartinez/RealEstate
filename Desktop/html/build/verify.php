<?php
	@session_start();
    if (@$_SESSION['login'] != 1){
        header("Location: ../../");
    }
?>