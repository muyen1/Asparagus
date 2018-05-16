<?php
	session_start();
	session_unset();
	session_destroy();
	FB.logout;
	header("location: ../index.php");
	exit();
?>