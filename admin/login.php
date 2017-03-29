<?php 
	include '../includes/connect.php';
	session_start();
	if (isset($_SESSION['user'])) {
		header('Location: dashboard.php');
		die();
	}
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM data_user WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result)>0) {
			$_SESSION['user'] = $username;
			header('Location: dashboard.php');
			die();
		} 
		else {
			echo "Login gagal";
		}
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin</title>
	<meta charset="utf-8" />
	<link rel="icon" type="#" href="#">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

	<!--  Custom CSS    -->
    <link href="assets/css/my-style.css" rel="stylesheet"/>    

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body class="body-login">
	
	<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-lg-offset-4 col-md-offset-4">
				<h1 style="animation-delay: 1s; text-align: center;" class="title-apps animated fadeInDown">Dapur Kos</h1>
					<div class="box animated bounceInDown">
					<h4 class="sub-title">
					<span class='animated bounceInLeft' style="animation-delay: 1s;">Welcome Admin</span>
					</h3>
					<hr />
						<form action="" method="POST" class="form-horizontal" role="form">
							<div class="form-group has-feedback animated bounceInLeft" style="animation-delay: 1s;">
					            <input type="text" name="username" id="username" class="form-control" placeholder="Username"/>
					        </div> 
 
							<div class="form-group has-feedback animated bounceInRight" style="animation-delay: 1s;">
					            <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
					         </div>
 
							<div class="form-group animated bounceInDown" style="animation-delay: 1s;">
								<div class="col-sm-8 col-sm-offset-2">
									<button type="submit" class="btn btn-primary btn-block btn-fill" name="submit">Login <span class="fa fa-key"></span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<div>
                <p style="text-align: center; margin-top: 100px;">
                    &copy; 2017 | Dapur Kos
                </p>
            </div>
		</footer>

</body>
<!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
</html>