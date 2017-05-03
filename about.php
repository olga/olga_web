
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <title>OLGA: Open Limited-area Gliding Analysis</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php
      include 'funcs.php';
    ?>

    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Fixed navbar -->
      <?php include 'header.php'; ?>

      <!-- Begin page content -->
      <div class="container">

      <h3>About</h3>
      OLGA (Open Limited-area Gliding Analysis) is basically WRF-ARW<sup>1</sup>, initialized and driven by GFS<sup>2</sup>, wrapped with some home-brewed pre- and postprocessing scripts to make it suitable for predicting (..) gliding weather. Etc, etc.<br/> 

      <br/>
      <sup>[1] http://www.mmm.ucar.edu/wrf/users/<br/></sup>
      <sup>[2] http://en.wikipedia.org/wiki/Global_Forecast_System</sup>

      <h3>Release cycle of forecasts</h3>
      Short description of cycle: downlaod GFS at XX UTC, run OLGA, release 1st day at XX UTC, etc.

      <h3>Description physics</h3>
      Brief description of the physics options used in WRF (with explanation for the choices).

      </div>



    </div>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
