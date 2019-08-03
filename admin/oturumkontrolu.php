<?php
	session_start();
	if( isset( $_SESSION["girisyapti"] ) and  $_SESSION["girisyapti"] == 1) {
		// Oturum başarılı şekilde açılmış...
	} else {
		// Giriş yapılmamış !
		header("Location: login.php");
		die();
	}
