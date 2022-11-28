<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header ('Location: template/pages/samples/login.php');
	}
?>