<?php 
	if (isset($_GET['id'])) {
		$sql = "UPDATE data_resep SET rating_resep = rating_resep + 1 WHERE id_resep=".$_GET['id'];
		if (mysqli_query($conn, $sql)) {
		  echo "Tambah Rating Berhasil";
		}
		else {
		  echo "Tambah Rating Gagal ".$sql." ".mysqli_error($conn);
		}
	}
?>