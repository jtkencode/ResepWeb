<?php 
	include '../includes/connect.php';
	session_start();
	if (!isset($_SESSION['user'])) {
		header('Location: login.php');
		die();
	}
	if (isset($_POST['submit')) {
		$nama_resep = $_POST['namaresep'];
	}
?>