
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
      include 'var_description.php';
      // Check if there is input, if not, set defaults
      $dom_in  = (isset($_GET["d"])    ? $_GET["d"]    : 1);
      $date_in = (isset($_GET["date"]) ? $_GET["date"] : mostRecentAnalysis());
      $var_in  = (isset($_GET["var"])  ? $_GET["var"]  : 'pfd_ventus');
      $time_in = (isset($_GET["time"]) ? $_GET["time"] : 0);
      $loc_in  = (isset($_GET["loc"])  ? $_GET["loc"]  : "");
      $day_in  = (isset($_GET["day"])  ? $_GET["day"]  : 0);

      // Get previous and next time, and limit to 0-24
      $prev_time = (float) $time_in - 1;
      $next_time = (float) $time_in + 1;
      if($prev_time < 0)
        $prev_time = 0;
      if($next_time > 24)
        $next_time = 24;

      $time_offset = $day_in * 24;  
    ?>

    <script type='text/javascript' >
      document.onkeydown = function(evt) {
        evt = evt || window.event;
        switch (evt.keyCode) {
          case 37:
            window.location = 'maps.php?d=<?php echo $dom_in;?>&date=<?php echo $date_in;?>&var=<?php echo $var_in;?>&loc=<?php echo $loc_in;?>&time=<?php echo $prev_time;?>'
            break;
          case 39:
            window.location = 'maps.php?d=<?php echo $dom_in;?>&date=<?php echo $date_in;?>&var=<?php echo $var_in;?>&loc=<?php echo $loc_in;?>&time=<?php echo $next_time;?>'
            break;
          }
      }
    </script>";

    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Fixed navbar -->
      <?php include 'header.php'; ?>

      <!-- Begin page content -->
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <h5>General:</h5>
              <div class="btn-group-vertical-justified btn-group-xs ">
                <!-- General for both domains -->
                <a class="btn btn-default <?php if($var_in=='swd')       echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=swd&time=$time_in&day=$day_in"?>         >Clouds</a>
                <a class="btn btn-default <?php if($var_in=='rain')      echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=rain&time=$time_in&day=$day_in"?>        >Precipitation</a>
                <a class="btn btn-default <?php if($var_in=='wind10m')   echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=wind10m&time=$time_in&day=$day_in"?>     >Wind 10m</a>
                <a class="btn btn-default <?php if($var_in=='wind1000m') echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=wind1000m&time=$time_in&day=$day_in"?>   >Wind 1000m</a>
              </div>

            <h5>Gliding:</h5>
              <div class="btn-group-vertical-justified btn-group-xs ">
                <!-- General for both domains -->
                <a class="btn btn-default <?php if($var_in=='pfd_ventus')  echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=pfd_ventus&time=$time_in&day=$day_in"?>  >PFD (w*) Ventus2</a>
                <a class="btn btn-default <?php if($var_in=='pfd_cirrus')  echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=pfd_cirrus&time=$time_in&day=$day_in"?>  >PFD (w*) Cirrus</a>
                <a class="btn btn-default <?php if($var_in=='pfd2_ventus') echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=pfd2_ventus&time=$time_in&day=$day_in"?> >PFD (TM) Ventus2</a>
                <a class="btn btn-default <?php if($var_in=='pfd2_cirrus') echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=pfd2_cirrus&time=$time_in&day=$day_in"?> >PFD (TM) Cirrus</a>
                <a class="btn btn-default <?php if($var_in=='zidry')       echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=zidry&time=$time_in&day=$day_in"?>       >Thermal depth</a>
                <a class="btn btn-default <?php if($var_in=='ziglider')    echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=ziglider&time=$time_in&day=$day_in"?>    >Thermal depth (usable)</a>
                <a class="btn btn-default <?php if($var_in=='wglider')     echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=wglider&time=$time_in&day=$day_in"?>     >Thermal velocity (w*)</a>
                <a class="btn btn-default <?php if($var_in=='wgliderTEMF') echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=wgliderTEMF&time=$time_in&day=$day_in"?> >Thermal velocity (TM)</a>
                <a class="btn btn-default <?php if($var_in=='cudepth')     echo 'active';?>" href=<?php echo "maps.php?d=1&date=$date_in&var=cudepth&time=$time_in&day=$day_in"?>     >Cumulus depth</a>
              </div>

            <h5>Time series:</h5>
              <div class="btn-group-vertical-justified btn-group-xs ">
                <?php
                  $locations = array();
                  foreach (glob("results/$date_in/tser_*_01_000000.png") as $filename) 
                  {
                    $tmp = explode("_", $filename); 
                    array_push($locations, $tmp[2]);
                  }
                  //$locations = array("EBSH", "EDDH", "EDDP", "EDDV", "EDKM", "EDTC", "EHEH", "EHGG", "EHWO", "06260", "Hopen");
                  foreach ($locations as $loc) 
                  {
                    if($loc == $loc_in)
                      $class = "\"btn btn-default active\"";
                    else
                      $class = "\"btn btn-default\"";

                    echo "<a class=$class href=maps.php?d=1&date=".$date_in."&var=tser&time=".$time_in."&loc=".$loc."&day=".$day_in.">".$loc."</a>";
                  }
                ?>
              </div>

            <h5>Soundings:</h5>
              <div class="btn-group-vertical-justified btn-group-xs ">
                <?php
                  $locations = array();
                  foreach (glob("results/$date_in/sound_*_01_000000.png") as $filename) 
                  {
                    $tmp = explode("_", $filename); 
                    array_push($locations, $tmp[2]);
                  }
                  //$locations = array("06260", "06458", "10113", "10238", "10410", "10548", "10618", "Hopen");
                  foreach ($locations as $loc) 
                  {
                    if($loc == $loc_in)
                      $class = "\"btn btn-default active\"";
                    else
                      $class = "\"btn btn-default\"";

                    echo "<a class=$class href=maps.php?d=1&date=".$date_in."&var=sound&time=".$time_in."&loc=".$loc."&day=".$day_in.">".$loc."</a>";
                  }
                ?>
              </div>

          </div>
          <div class="col-md-8">
            <?php
              if(substr($var_in,0,3)=='pfd')
              {
                $mapfig = 'results/'.$date_in.'/'.$var_in.'_'.sprintf("%'.02d",$dom_in).'_'.sprintf("%'.06d",($time_offset*100)).'.png';
              }
              else if($var_in=='tser')
              { 
                $mapfig = 'results/'.$date_in.'/tser_'.$loc_in."_".sprintf("%'.02d",$dom_in).'_'.sprintf("%'.06d",($time_offset*100)).'.png';
              }
              else if($var_in=='sound')
              { 
                $mapfig = 'results/'.$date_in.'/sound_'.$loc_in."_".sprintf("%'.02d",$dom_in).'_'.sprintf("%'.06d",($time_in+$time_offset)*100).'.png';
              }
              else
              {
                $mapfig = 'results/'.$date_in.'/'.$var_in.'_'.sprintf("%'.02d",$dom_in).'_'.sprintf("%'.06d",($time_in+$time_offset)*100).'.png';
              }
              if(file_exists($mapfig))
              {
                echo "<img align='middle' class='img-responsive' src=$mapfig />";
                      
              }
              else
              {
                echo "<br/><div class=\"alert alert-danger\">
                      <h4>Oops, can't find the requested file.</h4>
                      </br> There might be a number of reasons for this:<br/>
                            1.  File has not yet been generated. OLGA is executed in slices of 24 hours; if day 0 is available and a variable of day 1 is missing, the model is likely still running. Details of the release cycle are available at \"About\"<br/>
                            2.  Something went wrong: try selecting the variable/time again. If the problem is persistent, please contact us.<br/>
                      <br/></br><i>Debug: $mapfig </i>
                      </div>";
              }
            ?>
          </div>
          <div class="col-md-2">
            <h5>Date and time:</h5>

            <center>
              <div class="btn-group-xs" role="group">
                <a class="btn btn-default <?php if($day_in==0) echo 'active';?>" href=<?php echo "maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$time_in&day=0"?>>Day+0</a>
                <a class="btn btn-default <?php if($day_in==1) echo 'active';?>" href=<?php echo "maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$time_in&day=1"?>>Day+1</a>
                <a class="btn btn-default <?php if($day_in==2) echo 'active';?>" href=<?php echo "maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$time_in&day=2"?>>Day+2</a>
                <a class="btn btn-default <?php if($day_in==3) echo 'active';?>" href=<?php echo "maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$time_in&day=3"?>>Day+3</a>
                <a class="btn btn-default <?php if($day_in==4) echo 'active';?>" href=<?php echo "maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$time_in&day=4"?>>Day+4</a>
                <a class="btn btn-default <?php if($day_in==5) echo 'active';?>" href=<?php echo "maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$time_in&day=5"?>>Day+5</a>
                <a class="btn btn-default <?php if($day_in==6) echo 'active';?>" href=<?php echo "maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$time_in&day=6"?>>Day+6</a>
                <a class="btn btn-default <?php if($day_in==7) echo 'active';?>" href=<?php echo "maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$time_in&day=7"?>>Day+7</a>
              </div>
            </center>

            </br>

            <center>
              <div class="btn-group-vertical-justified btn-group-xs ">
                <?php 
                  for($tp=0;$tp<24;$tp++)
                  {
                    $time = str_pad($tp,2,'0',STR_PAD_LEFT).':00';
                    if($tp == $time_in)
                      echo "<a class=\"btn btn-default active\" href=\"maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$tp&day=$day_in\">$time</a>";
                    else
                      echo "<a class=\"btn btn-default\" href=\"maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$tp&day=$day_in\">$time</a>";
                  }
                ?>
              </div>
            </center>

            </br>

            <center>
              <div class="btn-group btn-group-sm">
                <a class="btn btn-default" href=<?php echo "maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$prev_time&day=$day_in"?>>Prev</a>
                <a class="btn btn-default" href=<?php echo "maps.php?d=$dom_in&date=$date_in&var=$var_in&loc=$loc_in&time=$next_time&day=$day_in"?>>Next</a>
              </div>
              </br>
              <p class="text-danger"><small>hint: use left/right keys!</small></p>
            </center>

          </div>
          <div class="col-md-12">
            <?php
              echo "<br/><div class=\"alert alert-info\" role=\"alert\"><b>Description:</b> $var_description[$var_in]</div>";
            ?>
          </div>
        </div>
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
