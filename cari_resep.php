<?php
  include 'includes/connect.php';
?>
<!DOCTYPE html>
<html>
<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <body>
  <?php include('nav.html'); ?>
    <?php
      if (isset($_GET['bahan'])) {
        $sql = "SELECT data_resep.*
            ,data_bahan.id_resep
            ,GROUP_CONCAT(data_bahan.nama_bahan) AS bahan
          FROM data_bahan
          LEFT JOIN data_resep ON data_bahan.id_resep = data_resep.id_resep
          GROUP BY data_bahan.id_resep
          HAVING ";
        $x = 1;
        foreach($_GET['bahan'] as $bahan) {
          $sql = $sql . "bahan LIKE '%" . $bahan . "%'";
          if ($x != count($_GET['bahan'])) {
            $sql = $sql . ' AND ';
          }
          $x++;
        }
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)>0) {
          echo '<div data-role="page" class="ui-body ui-body-a ui-corner-all">';
          echo '<div class="container" data-role="main" class="ui-content">';
          echo '<h1 style="text-align: center;">Hasil Pencarian</h1>';
          echo '<br/>';
          echo '<div class="table-responsive">';
          echo '<table class="table table-striped">';
          echo '<thead>';
    	    echo '<tr>';
    	    echo '<th class="info">No</th>';
    	    echo '<th class="info">Nama Masakan</th>';
    	    echo '<th class="info">Deskripsi</th>';
    	    echo '<th class="info">Lihat Resep</th>';
    	    echo '</tr>';
    	    echo '</thead>';
    	    echo '<tbody>';
          $x = 1;
          while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo "<td>".$x." : </td>";
              echo "<td>" . $row['nama_resep']."</td>";
              echo "<td>" . $row['deskripsi_resep']."</td>";
              echo "<td><a href='lihat_resep.php?id=" . $row['id_resep']."'>Lihat Resep</a></td>";
              echo '</tr>';
              $x++;
          }
          echo '</tbody>';
          echo '</table>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
        }
        else {
          echo "Bahan yang anda masukan tidak ada yang cocok";
        }
      }
      else {
        echo "Masukan Bahan terlebih dahulu";
      }
     ?>
     <!-- jQuery library -->
     <script src="js/jquery-3.1.1.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="js/bootstrap.min.js"></script>

     <!-- Include the jQuery Mobile library -->
     <script src="js/jquery.mobile-1.4.5.min.js"></script>
  </body>
</html>
