<?php
  include 'includes/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cari resep</title>

	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<?php //include('nav.html'); ?>
	<div data-role="page" id="pagetwo">
	<div data-role="main" class="ui-content">
		<div class="ui-corner-all custom-corners" style="margin-top: 60px;">
			<div class="ui-bar ui-bar-a" style="text-align: center">
				<h2>Pilih Bahan Makanan</h2>
			</div>
		</div>
		<div class="ui-body ui-body-a" data-iconpos="right">
      <form action="cari_resep.php" method="GET">
        <fieldset data-role="controlgroup" data-iconpos="right">
                <?php
                  $sql = "SELECT DISTINCT nama_bahan FROM data_bahan";
                  $result = mysqli_query($conn, $sql);

                  echo '<input id="rich-autocomplete-input" data-type="search" placeholder="Cari bahan...">';
                  if (mysqli_num_rows($result)>0) {
                    echo '<ul data-role="listview" data-filter="true" data-inset="true" data-input="#rich-autocomplete-input">';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li data-filtertext='.$row['nama_bahan'].'>';
                        echo '<label for="'.$row['nama_bahan'].'">'.$row['nama_bahan'].'</label>';
                        echo '<input type="checkbox" name="bahan[]" id="'.$row['nama_bahan'].'" value="'.$row['nama_bahan'].'">';
                        echo '</li>';
                    }
                    echo "</ul>";
                  }
                 ?>
           </fieldset>
           <input type="submit" value="Submit" data-role="none" class="button">
      </form>
		</div>
	</div>
</div>

	<!-- Include the jQuery library -->
	<script src="js/jquery-1.11.2.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	
	<!-- Include the jQuery Mobile library -->
	<script src="jqm/jquery.mobile-1.4.5.min.js"></script>	
</body>
</html>
