
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
      // Check if there is input, if not, set defaults
      $dom_in  = (isset($_GET["d"])    ? $_GET["d"]    : 1);
      $date_in = (isset($_GET["date"]) ? $_GET["date"] : mostRecentAnalysis());
      $var_in  = (isset($_GET["var"])  ? $_GET["var"]  : 'pfd');
      $time_in = (isset($_GET["time"]) ? $_GET["time"] : 0);
      $loc_in  = (isset($_GET["loc"])  ? $_GET["loc"]  : "");
    ?>

    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Fixed navbar -->
      <?php include 'header.php'; ?>

      <!-- Begin page content -->
      <div class="container">

      <h3>OLGA: Open Limited-area Gliding Analysis</h3>

      <h4>Most recent PFD & meteogram de Bilt (NL):</h4>

      <?php
        $date    = mostRecentAnalysis();
        $mapfig  = 'results/'.$date.'/pfd_ventus_01_000000.png';
        $mapfig2 = 'results/'.$date.'/tser_06260_01_000000.png';
        //$mapfig2 = 'results/'.$date.'/tser_EK51_01_000000.png';
        if(file_exists($mapfig))
        {
          echo "<center><a href='maps.php'><img width='49%' src=$mapfig /></a><a href='maps.php'><img width='49%' src=$mapfig2 /></a></center>";
        }
      ?>
 
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
