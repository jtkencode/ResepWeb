<?php 
	include '../includes/connect.php';
	session_start();
	if (!isset($_SESSION['user'])) {
		header('Location: login.php');
		die();
	}
	session_unset();
	session_destroy();
	header('Location: logout.php');
	die();
?>