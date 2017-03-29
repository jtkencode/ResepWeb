<?php 
	include '../includes/connect.php';
	session_start();
	if (!isset($_SESSION['user'])) {
		header('Location: login.php');
		die();
	}
	
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "DELETE FROM data_bahan WHERE id_resep=".$id;
		if (mysqli_query($conn, $sql)) {
			$sql = "DELETE FROM data_resep WHERE id_resep=".$id;
			if (mysqli_query($conn, $sql)) {
				echo "Resep berhasil dihapus";
			}
			else {
				echo "Resep gagal dihapus";
			}
		}
		else {
			echo "Resep gagal dihapus";
		}
	}
	else {
		echo "ID tidak ditemukan";
	}
	echo "<a href='resep.php'>Kembali</a>";
?>