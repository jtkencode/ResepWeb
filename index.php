<?php
  include 'includes/connect.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Resep Kos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">

        <!--<link href='http://fonts.googleapis.com/css?family=Raleway:100|Open+Sans:400,300' rel='stylesheet' type='text/css'>-->

        <link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="jqm/jquery.mobile-1.4.5.min.css">

        <!-- Include the jQuery library -->
        <script src="jqm/jquery-1.11.2.min.js"></script>

        <!-- Include the jQuery Mobile library -->
        <script src="jqm/jquery.mobile-1.4.5.min.js">
        </script>


    </head>

<body class="background">
  <!--[if     lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div id="intro">
      <div class="content">
          <img src="images/touching-belly-silhouette.png" />
          <h1>Lapar ?</h1>
      </div>
  </div>

  <div id="main" class="main-container">

      <div id="project01" class="project">
          <img src="images/confused.svg" />
          <h2>Bingung mau masak apa ?</h2>
      </div>

      <div class="bcg-parallax">
          <div class="bcg"></div>
          <div class="content-wrapper">
              <h1>Cek aja di Resep Kos</h1>
              <a href="form.php"><button class="start" style="vertical-align:middle" data-role="none"><span>Lets Start </span></button></a>
          </div>
      </div>

      <div class="footer-container">
      <footer class="wrapper">
          <h3>2017 &copy;</h3>
      </footer>
      </div>

  </div> <!-- #main-container -->

  <script src="js/TweenMax.min.js"></script>
  <script src="js/ScrollMagic.min.js"></script>
  <script src="js/plugins/animation.gsap.js"></script>
  <script src="js/plugins/debug.addIndicators.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
