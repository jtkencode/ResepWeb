<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "reskos";

	$conn = mysqli_connect($hostname, $username, $password, $database);

	if (!$conn) {
		die("Koneksi gagal");
	}
?>
