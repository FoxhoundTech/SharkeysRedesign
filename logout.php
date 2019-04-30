<?php
	session_start();
	if(isset($_SESSION["SharkLogged"]) && !empty($_SESSION["SharkLogged"])) {
		unset($_SESSION["SharkLogged"]);
		header("Location: ./admin.php");
	}
?>