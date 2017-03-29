<?php
  include('includes/connect.php');

  if (isset($_POST['submit']) && isset($_GET['id'])) {
    $sql = "INSERT INTO data_komentar (id_resep, nama, komentar) VALUES ('".$_GET['id']."', '".$_POST['nama']."', '".$_POST['komentar']."')";
    if (mysqli_query($conn, $sql)) {
      echo "Tambah Komentar Berhasil";
    }
    else {
      echo "Tambah Komentar Gagal ".$sql." ".mysqli_error($conn);
    }
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/style.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
  <body style="background-color: #f9f9f9">
	<?php include('nav.html'); ?>
    <div data-role="page" id="pagetwo">
  	<div data-role="main" class="ui-content">
  	<div class="ui-body ui-body-a ui-corner-all" style="margin-top: 30px;">
    <?php
      if (isset($_GET['id'])) {
        $sql = "SELECT * FROM data_resep WHERE id_resep=".$_GET['id'];
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)!=0) {
          $row = mysqli_fetch_assoc($result);
          echo '<p><h2 style="text-align: center; color: #74A6EE; text-shadow: 1px 0 1px;"><b>' . $row['nama_resep'].'</b></h2>';
          echo '<center><img src="images/resep/'.$row["foto_resep"].'" class="img-thumbnail" alt="Responsive image" style="margin-top: 20px;"></center><br><br>';
          echo '<p style="font-size: 16px; text-align: justify;">' . $row['deskripsi_resep'].'</p>';
          echo "<h4><b><small>Porsi : " . $row['porsi_resep']."</small><b></h4>";
          //echo '<form action="" method="POST">';
          echo "<h4><b><small>Rating : " . $row['rating_resep']."</small><b>";
          echo " ";
          echo '<a href="ratingup.php?id='.$_GET['id'].'"><img src="jqm/images/icons-png/arrow-u-black.png"></a>';
          echo " ";
          echo '<a href="ratingdown.php?id='.$_GET['id'].'"><img name="rating_down" src="jqm/images/icons-png/arrow-d-black.png"></a>';
          echo " ";
          //echo "</form>";
          echo "</h4><br><br>";
          echo '<h3 style="color: #74A6EE">Bahan Masakan</h3>';
          $sql = "SELECT * FROM data_bahan WHERE id_resep=".$_GET['id'];
          $result2 = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result2)!=0) {
            echo '<ol style="font-size: 16px;">';
            while ($row2 = mysqli_fetch_assoc($result2)) {
              echo "<li>".$row2['jumlah_bahan']." ".$row2['nama_bahan']."</li>";
            }
            echo "</ol><br><br>";
          }
          else {
            echo "Bahan tidak ada";
          }
          echo '<h3 style="color: #74A6EE">Langkah Pembuatan</h3>';
          $fresep = fopen("resep/".$row['langkah_resep'], "r") or die("Unable to open file!");
          echo '<ol style="font-size: 16px;">';
          $langkah = fgets($fresep);
          while(!feof($fresep)) {
            echo "<li>".$langkah."</li>";
            $langkah = fgets($fresep);
          }
          echo "</ol><br><br>";
          fclose($fresep);
        }
        else {
          echo "Resep tidak ditemukan";
        }
        echo '<h4><b>Resep ditulis oleh :<b></h4>';
        echo '<ul class="list-inline">';
  			echo '<li><img src="images/avatar/'.$row["foto_pembuat"].'" alt="'.$row['pembuat_resep'].'" class="img-rounded" width="50px" height="50px"></li><li><h4>'.$row['pembuat_resep'].'</h4></li>';
  			echo '</ul>';
        echo '<br>';
        echo '<h4><b>Sumber :<b></h4>';
        echo '<h4><small><a href="'.$row['sumber_resep'].'">'.$row['sumber_resep'].'</a></small></h4>';
        echo '<br><br>';
        echo '<div class="ui-corner-all custom-corners">';
        echo '<h2>Komentar</h2>';
        $sql = "SELECT * FROM data_komentar WHERE id_resep=".$_GET['id'];
        $result3 = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result3)!=0) {
          while($row3 = mysqli_fetch_assoc($result3)) {
            echo '<div class="ui-bar ui-bar-a ui-corner-all">';
      			echo '<h2><b>Nama : </b>'.$row3['nama'].'</h2><br/>';
            echo '<h2><b>Tanggal :</b>'.$row3['tanggal'].'</h2><br/>';
      			echo '<h2><b>Komentar :</b>'.$row3['komentar'].'</h2>';
      			echo '</div><br>';
          }
        }
        echo '<h2>Tambah Komentar</h2>';
        echo '<form action="" method="POST">';
				echo '	<input type="text" class="form-control" name="nama" placeholder="Nama" required>';
        echo '<br/>';
			  echo ' <textarea class="form-control" rows="8" name="komentar" placeholder="Komentar" required></textarea><br>';
			  echo ' <input type="submit" class="btn btn-primary" value="Submit" name="submit">';
			  echo '</form>';
  			echo '</div><br><br>';
  		  echo '</div>';
        }
        else {
          echo "Pilih resep terlebih dahulu";
        }
     ?>
   </div>
  </div>
  <div class="footer-container">
  <footer class="wrapper">
      <h3>2017 &copy;</h3>
  </footer>
  </div>
<!-- jQuery library -->
<script src="js/jquery-3.1.1.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Include the jQuery Mobile library -->
<script src="js/jquery.mobile-1.4.5.min.js"></script>
  </body>
</html>
